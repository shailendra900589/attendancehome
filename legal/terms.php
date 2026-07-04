<?php
declare(strict_types=1);
require_once __DIR__ . '/../includes/config.php';
$pageTitle = 'Terms of Service | Trackbook HRMS';
$pageDescription = 'Trackbook HRMS Terms of Service.';
$pageCanonical = page_url('legal/terms.php');
require __DIR__ . '/../includes/head.php';
?>
<nav class="navbar navbar-expand-lg tb-navbar tb-navbar-light fixed-top scrolled" id="mainNavbar" aria-label="Main navigation">
    <div class="container">
        <a class="navbar-brand tb-logo" href="<?= page_url() ?>">
            <span class="tb-logo-icon"><i class="bi bi-grid-1x2-fill"></i></span>Trackbook
        </a>
        <a href="<?= page_url() ?>" class="btn tb-btn-outline-dark btn-sm">Back to home</a>
    </div>
</nav>
<main class="tb-page-main">
    <section class="tb-section tb-section-white">
        <div class="container tb-prose">
            <h1>Terms of Service</h1>
            <p>These Terms govern use of Trackbook HRMS operated by <?= e(COMPANY_LEGAL) ?>.</p>
            <h3>Service</h3>
            <p>Trackbook provides multi-tenant HRMS including attendance, payroll, and workforce management on a subscription basis via Razorpay.</p>
            <h3>Contact</h3>
            <p><a href="mailto:<?= e(SUPPORT_EMAIL) ?>"><?= e(SUPPORT_EMAIL) ?></a></p>
        </div>
    </section>
</main>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="<?= page_url('assets/js/main.js') ?>"></script>
</body></html>
