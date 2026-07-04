#!/usr/bin/env bash
# Run on AWS: sudo bash deploy/deploy.sh
set -euo pipefail

APP_DIR="/var/www/attendance"
WEB_USER="www-data"
WEB_GROUP="www-data"

echo "==> Deploying Trackbook site from ${APP_DIR}"

cd "${APP_DIR}"

# Allow git when folder is owned by www-data
git config --global --add safe.directory "${APP_DIR}" 2>/dev/null || true

# Discard accidental server-side edits, pull latest
git fetch origin main
git reset --hard origin/main

# Permissions for nginx + php-fpm
chown -R "${WEB_USER}:${WEB_GROUP}" "${APP_DIR}"
find "${APP_DIR}" -type d -exec chmod 755 {} \;
find "${APP_DIR}" -type f -exec chmod 644 {} \;

# Reload web server (skip if config broken — use deploy/fix-nginx.sh)
if systemctl is-active --quiet nginx; then
  if nginx -t 2>/dev/null; then
    systemctl reload nginx
    echo "==> Nginx reloaded"
  else
    echo "==> WARNING: nginx config invalid — run: sudo bash deploy/fix-nginx.sh"
  fi
fi

echo "==> Done. SITE_URL will auto-detect from domain (www.trackbook.co)."
echo "==> Files at: ${APP_DIR}/index.php"
