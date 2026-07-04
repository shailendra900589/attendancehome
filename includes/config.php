<?php
declare(strict_types=1);

define('SITE_NAME', 'Trackbook HRMS');
define('SITE_URL', 'https://www.trackbook.co');
define('SUPPORT_EMAIL', 'support@trackbook.co');
define('COMPANY_LEGAL', 'Trackbook Technologies Pvt. Ltd.');
define('LOGIN_URL', 'https://hrms.trackbook.co/login/');
define('REGISTER_URL', 'https://hrms.trackbook.co/register/');

function page_url(string $path = ''): string
{
    return rtrim(SITE_URL, '/') . '/' . ltrim($path, '/');
}

function e(string $value): string
{
    return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
}
