<?php
declare(strict_types=1);

define('SITE_NAME', 'Trackbook HRMS');
define('SUPPORT_EMAIL', 'support@trackbook.co');
define('COMPANY_LEGAL', 'Trackbook Technologies Pvt. Ltd.');
define('LOGIN_URL', 'https://hrms.trackbook.co/login/');
define('REGISTER_URL', 'https://hrms.trackbook.co/register/');

/**
 * Detect site URL from the current request (works on AWS, localhost, and www).
 */
function detect_site_url(): string
{
    $host = $_SERVER['HTTP_HOST'] ?? 'www.trackbook.co';

    $https = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off')
        || (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https')
        || (isset($_SERVER['SERVER_PORT']) && (string) $_SERVER['SERVER_PORT'] === '443');

    $protocol = $https ? 'https' : 'http';

    if ($host === 'localhost' || str_starts_with($host, '127.0.0.1')) {
        return 'http://localhost/attendancehome';
    }

    return $protocol . '://' . $host;
}

define('SITE_URL', detect_site_url());

function page_url(string $path = ''): string
{
    return rtrim(SITE_URL, '/') . '/' . ltrim($path, '/');
}

function e(string $value): string
{
    return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
}
