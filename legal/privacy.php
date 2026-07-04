<?php
declare(strict_types=1);
require_once __DIR__ . '/../includes/config.php';
$pageTitle = 'Privacy Policy | Trackbook HRMS';
$pageDescription = 'Trackbook HRMS Privacy Policy.';
$pageCanonical = page_url('legal/privacy.php');
require __DIR__ . '/../includes/head.php';
?>
<nav class="navbar tb-navbar tb-navbar-light fixed-top scrolled" style="background:rgba(11,18,32,0.95)!important">
    <div class="container">
        <a class="navbar-brand tb-logo" href="<?= page_url() ?>"><span class="tb-logo-icon"><i class="bi bi-grid-1x2-fill"></i></span>Trackbook</a>
        <a href="<?= page_url() ?>" class="btn tb-btn-outline btn-sm">Back to home</a>
    </div>
</nav>
<main style="padding-top:100px">
    <section class="tb-section tb-section-white"><div class="container tb-prose">
        <h1>Privacy Policy</h1>
        <p><?= e(COMPANY_LEGAL) ?> operates Trackbook HRMS. This policy explains how we collect, use, and protect personal data including attendance, payroll, and biometric information.</p>
        <h3>Data isolation</h3>
        <p>Each company's data is stored in an isolated tenant environment with no cross-tenant access.</p>
        <h3>Contact</h3>
        <p><?= e(SUPPORT_EMAIL) ?></p>
    </div></section>
</main>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body></html>
