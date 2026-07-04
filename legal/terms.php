<?php
declare(strict_types=1);
require_once __DIR__ . '/../includes/config.php';
$pageTitle = 'Terms of Service | Trackbook HRMS';
$pageDescription = 'Trackbook HRMS Terms of Service.';
$pageCanonical = page_url('legal/terms.php');
require __DIR__ . '/../includes/head.php';
?>
<nav class="navbar tb-navbar fixed-top scrolled" style="background:rgba(11,18,32,0.95)!important">
    <div class="container">
        <a class="navbar-brand tb-logo" href="<?= page_url() ?>"><span class="tb-logo-icon"><i class="bi bi-grid-1x2-fill"></i></span>Trackbook</a>
        <a href="<?= page_url() ?>" class="btn tb-btn-outline btn-sm">Back to home</a>
    </div>
</nav>
<main style="padding-top:100px">
    <section class="tb-section tb-section-white"><div class="container tb-prose">
        <h1>Terms of Service</h1>
        <p>These Terms govern use of Trackbook HRMS operated by <?= e(COMPANY_LEGAL) ?>.</p>
        <h3>Service</h3>
        <p>Trackbook provides multi-tenant HRMS including attendance, payroll, and workforce management on a subscription basis via Razorpay.</p>
        <h3>Contact</h3>
        <p><?= e(SUPPORT_EMAIL) ?></p>
    </div></section>
</main>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body></html>
