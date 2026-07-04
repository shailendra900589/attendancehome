#!/usr/bin/env bash
# Fix nginx root + SSL recovery on AWS
# Run: sudo bash deploy/fix-nginx.sh
set -euo pipefail

APP_DIR="/var/www/attendance"
ENABLED="/etc/nginx/sites-enabled"

echo "==> Trackbook nginx fix"

# 1) Parent dirs must be traversable (403 fix)
chmod 755 /var/www
chmod 755 "${APP_DIR}"

# 2) Remove broken duplicate config (jo SSL error de raha tha)
rm -f "${ENABLED}/trackbook.co"

# 3) Update EXISTING live config — sirf root path
for conf in "${ENABLED}/trackbook.co.conf" "${ENABLED}/trackbook.co" /etc/nginx/sites-available/trackbook.co.conf; do
  if [[ -f "${conf}" ]]; then
    echo "==> Updating root in ${conf}"
    sed -i 's|root /var/www/trackbook\.co|root /var/www/attendance|g' "${conf}"
    sed -i 's|root /var/www/html|root /var/www/attendance|g' "${conf}"
    sed -i 's|root /var/www/attendancehome|root /var/www/attendance|g' "${conf}"
  fi
done

# 4) Show cert folders
echo "==> Available SSL certs:"
ls -1 /etc/letsencrypt/live/ 2>/dev/null || echo "(no letsencrypt folder)"

# 5) Test nginx
if nginx -t; then
  systemctl reload nginx
  echo "==> Nginx OK and reloaded"
else
  echo ""
  echo "ERROR: nginx -t failed."
  echo "Run: sudo ls /etc/letsencrypt/live/"
  echo "Then edit SSL paths in: ${ENABLED}/trackbook.co.conf"
  echo "  ssl_certificate     /etc/letsencrypt/live/YOUR-CERT-NAME/fullchain.pem;"
  exit 1
fi

echo "==> Test: curl -I https://www.trackbook.co"
