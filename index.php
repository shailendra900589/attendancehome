<?php
declare(strict_types=1);
require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/includes/schema.php';

$data = require __DIR__ . '/data/showcase.php';
$faqFlat = flatten_faq($data['faq']);

$pageTitle = 'Trackbook HRMS — Attendance, Payroll & Workforce Software India';
$pageDescription = 'Face-verified attendance, automated payroll, field GPS tracking, and HR lifecycle tools in one platform built for Indian SMBs. See every feature below.';
$schemaBlocks = [schema_combined($faqFlat)];

require __DIR__ . '/includes/head.php';
?>

<nav class="navbar navbar-expand-lg tb-navbar fixed-top" id="mainNavbar" aria-label="Main navigation">
    <div class="container">
        <a class="navbar-brand tb-logo" href="#top">
            <span class="tb-logo-icon"><i class="bi bi-grid-1x2-fill"></i></span>
            Trackbook
        </a>
        <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item"><a class="nav-link nav-anchor" href="#features">Features</a></li>
                <li class="nav-item"><a class="nav-link nav-anchor" href="#solutions">Solutions</a></li>
                <li class="nav-item"><a class="nav-link nav-anchor" href="#security">Security</a></li>
                <li class="nav-item"><a class="nav-link nav-anchor" href="#pricing">Pricing</a></li>
                <li class="nav-item"><a class="nav-link nav-anchor" href="#faq">FAQ</a></li>
            </ul>
            <div class="d-flex align-items-center gap-2 navbar-actions">
                <a href="<?= e(LOGIN_URL) ?>" class="btn btn-link tb-btn-ghost">Log in</a>
                <a href="<?= e(REGISTER_URL) ?>" class="btn tb-btn-primary">Get started</a>
            </div>
        </div>
    </div>
</nav>

<main>
    <!-- 2.1 Hero -->
    <section class="tb-hero" id="top" aria-labelledby="hero-heading">
        <div class="tb-hero-bg" aria-hidden="true">
            <div class="tb-hero-glow tb-hero-glow--green"></div>
            <div class="tb-hero-glow tb-hero-glow--blue"></div>
        </div>
        <div class="container tb-hero-container">
            <div class="row tb-hero-grid align-items-center g-3 g-lg-4">
                <div class="col-lg-6 col-xl-6">
                    <div class="tb-hero-content">
                        <div class="tb-hero-badge-wrap">
                            <span class="tb-eyebrow tb-hero-eyebrow">
                                <i class="bi bi-lightning-charge-fill" aria-hidden="true"></i>
                                A new &amp; faster HRMS stack
                            </span>
                        </div>

                        <h1 id="hero-heading" class="tb-hero-title">Enterprise HRMS Software for Indian Teams — Attendance, Payroll &amp; Workforce Management, <span class="highlight">Simplified.</span></h1>

                        <p class="tb-hero-lead">Streamline attendance, payroll, tasks, and employee lifecycle on one secure platform built for growing Indian teams — from face-verified clock-in to payslip. No biometric machine, no separate payroll vendor, no spreadsheet for your field staff.</p>

                        <div class="tb-hero-actions">
                            <a href="<?= e(REGISTER_URL) ?>" class="btn tb-btn-primary tb-btn-lg">Get started</a>
                            <a href="<?= e(LOGIN_URL) ?>" class="btn tb-btn-outline tb-btn-lg">Sign in <i class="bi bi-arrow-right" aria-hidden="true"></i></a>
                        </div>

                        <div class="tb-trust-row">
                            <div class="tb-avatar-stack" aria-hidden="true">
                                <div class="tb-avatar">HR</div>
                                <div class="tb-avatar">OP</div>
                                <div class="tb-avatar">AD</div>
                                <div class="tb-avatar tb-avatar-more">+</div>
                            </div>
                            <span class="tb-trust-text">Trusted by HR &amp; operations teams across India</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-xl-6">
                    <div class="tb-hero-visual">
                        <div class="tb-dashboard-mock" id="dashboardMock" role="img" aria-label="Trackbook admin dashboard showing live attendance and payroll widgets">
                            <div class="tb-mock-window-bar" aria-hidden="true">
                                <span class="tb-mock-dot"></span>
                                <span class="tb-mock-dot"></span>
                                <span class="tb-mock-dot"></span>
                            </div>
                            <div class="tb-mock-layout d-flex">
                                <div class="tb-mock-sidebar">
                                    <div class="tb-mock-sidebar-line w-75"></div>
                                    <div class="tb-mock-sidebar-line"></div>
                                    <div class="tb-mock-sidebar-line w-50"></div>
                                    <div class="tb-mock-sidebar-line"></div>
                                    <div class="tb-mock-sidebar-line w-75"></div>
                                    <div class="tb-mock-sidebar-line w-50"></div>
                                </div>
                                <div class="tb-mock-body">
                                    <div class="tb-mock-cards">
                                        <div class="tb-mock-card">
                                            <div class="tb-mock-card-label">Present</div>
                                            <div class="tb-mock-card-value green">847</div>
                                        </div>
                                        <div class="tb-mock-card">
                                            <div class="tb-mock-card-label">Tasks</div>
                                            <div class="tb-mock-card-value">124</div>
                                        </div>
                                        <div class="tb-mock-card">
                                            <div class="tb-mock-card-label">Payroll</div>
                                            <div class="tb-mock-card-value blue">₹12.4L</div>
                                        </div>
                                    </div>
                                    <div class="tb-mock-chart" aria-hidden="true">
                                        <?php for ($i = 0; $i < 12; $i++): ?>
                                        <div class="tb-mock-bar"></div>
                                        <?php endfor; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 2.2 Logo strip -->
    <section class="tb-logo-strip" aria-label="Trusted by leading companies">
        <div class="container">
            <p class="tb-logo-strip-label">Trusted by leading companies</p>
            <div class="row justify-content-center align-items-center g-3">
                <?php foreach ($data['trusted_logos'] as $logo): ?>
                <div class="col-6 col-md-auto">
                    <div class="tb-logo-item">
                        <span class="tb-logo-item-icon"><?= e($logo['initials']) ?></span>
                        <?= e($logo['name']) ?>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- 2.3 How it works -->
    <section class="tb-section tb-section-light" id="how-it-works" aria-labelledby="how-heading">
        <div class="container">
            <h2 id="how-heading" class="tb-section-title text-center reveal">From clock-in to payslip, in one flow</h2>
            <div class="row g-4 mt-2">
                <?php foreach ($data['how_it_works'] as $step): ?>
                <div class="col-md-4 reveal">
                    <div class="tb-step">
                        <div class="tb-step-num"><?= e($step['step']) ?></div>
                        <div>
                            <h3><?= e($step['title']) ?></h3>
                            <p class="mb-0"><?= e($step['description']) ?></p>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- 2.4 Feature deep-dive -->
    <section class="tb-section tb-section-white" id="features" aria-labelledby="features-heading">
        <div class="container">
            <div class="text-center mb-5 reveal">
                <h2 id="features-heading" class="tb-section-title">Everything you need to manage your people</h2>
                <p class="tb-section-sub mx-auto">Attendance, payroll, compliance, and collaboration — unified in one workspace with web dashboards and a professional mobile app.</p>
            </div>
            <?php foreach ($data['feature_deep_dive'] as $i => $feature): ?>
            <div class="tb-feature-row reveal">
                <div class="row align-items-center g-4<?= $i % 2 === 1 ? ' flex-row-reverse' : '' ?>">
                    <div class="col-lg-6">
                        <div class="tb-icon-chip <?= e($feature['chip']) ?>"><i class="bi <?= e($feature['icon']) ?>"></i></div>
                        <h3><?= e($feature['title']) ?></h3>
                        <p><?= e($feature['paragraph']) ?></p>
                    </div>
                    <div class="col-lg-6">
                        <div class="tb-feature-visual"><i class="bi <?= e($feature['icon']) ?>"></i></div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </section>

    <!-- 2.5 Solutions / Use cases -->
    <section class="tb-section tb-section-light" id="solutions" aria-labelledby="solutions-heading">
        <div class="container">
            <div class="text-center mb-4 reveal">
                <h2 id="solutions-heading" class="tb-section-title">Built for how your team actually works</h2>
                <p class="tb-section-sub mx-auto">The same platform adapts to different workforce structures — pick the tab closest to your team.</p>
            </div>
            <div class="reveal">
                <div class="tb-usecase-tabs tb-usecase-panels">
                    <?php foreach ($data['use_cases'] as $i => $uc): ?>
                    <button type="button" class="tb-usecase-tab<?= $i === 0 ? ' active' : '' ?>" data-target="usecase-<?= e($uc['id']) ?>" aria-controls="usecase-<?= e($uc['id']) ?>"><?= e($uc['label']) ?></button>
                    <?php endforeach; ?>
                </div>
                <div class="tb-usecase-panels">
                    <?php foreach ($data['use_cases'] as $i => $uc): ?>
                    <div class="tb-usecase-panel<?= $i === 0 ? ' active' : '' ?>" id="usecase-<?= e($uc['id']) ?>" role="tabpanel">
                        <h3><?= e($uc['title']) ?></h3>
                        <p><?= e($uc['paragraph']) ?></p>
                    </div>
                    <?php endforeach; ?>
                </div>
                <div class="tb-usecase-accordion">
                    <?php foreach ($data['use_cases'] as $uc): ?>
                    <details>
                        <summary><?= e($uc['title']) ?></summary>
                        <div class="panel-body"><?= e($uc['paragraph']) ?></div>
                    </details>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>

    <!-- 2.6 USP Grid -->
    <section class="tb-section tb-section-white" id="why-trackbook" aria-labelledby="usp-heading">
        <div class="container">
            <h2 id="usp-heading" class="tb-section-title text-center mb-5 reveal">Why teams choose Trackbook over generic HRMS</h2>
            <div class="row g-3">
                <?php foreach ($data['usps'] as $usp): ?>
                <div class="col-md-6 col-lg-4 reveal">
                    <div class="tb-usp-item">
                        <div class="tb-usp-icon"><i class="bi <?= e($usp['icon']) ?>"></i></div>
                        <div>
                            <h3><?= e($usp['title']) ?></h3>
                            <p><?= e($usp['description']) ?></p>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- 2.7 Module map -->
    <section class="tb-section tb-section-light" id="modules" aria-labelledby="modules-heading">
        <div class="container">
            <div class="text-center mb-5 reveal">
                <h2 id="modules-heading" class="tb-section-title">Full company workspace</h2>
                <p class="tb-section-sub mx-auto">Core tools, workforce, time &amp; attendance, collaboration, payroll, and configuration — scoped by role and subscription plan.</p>
            </div>
            <div class="reveal tb-module-table-wrap">
                <table class="tb-module-table">
                    <thead><tr><th scope="col">Module</th><th scope="col">What it does</th></tr></thead>
                    <tbody>
                        <?php foreach ($data['modules'] as $mod): ?>
                        <tr>
                            <td><?= e($mod['name']) ?></td>
                            <td><?= e($mod['description']) ?></td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            <div class="tb-module-cards reveal">
                <?php foreach ($data['modules'] as $mod): ?>
                <div class="tb-module-card">
                    <strong><?= e($mod['name']) ?></strong>
                    <?= e($mod['description']) ?>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- 2.8 Stats band -->
    <section class="tb-section tb-section-dark" aria-label="Platform statistics">
        <div class="container">
            <div class="row g-4">
                <?php foreach ($data['stats'] as $stat):
                    $animatable = !empty($stat['animate']) && preg_match('/^([\d.]+)(\+|%)$/', $stat['value'], $m);
                ?>
                <div class="col-6 col-lg-3 reveal">
                    <div class="tb-stat-item">
                        <?php if ($animatable): ?>
                        <div class="tb-stat-value" data-stat-value="<?= e($m[1]) ?>" data-stat-suffix="<?= e($m[2]) ?>">0</div>
                        <?php else: ?>
                        <div class="tb-stat-value"><?= e($stat['value']) ?></div>
                        <?php endif; ?>
                        <div class="tb-stat-label"><?= e($stat['label']) ?></div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- 2.9 Security -->
    <section class="tb-section tb-section-white" id="security" aria-labelledby="security-heading">
        <div class="container">
            <div class="tb-prose reveal">
                <h2 id="security-heading" class="tb-section-title">How Trackbook protects your employee data</h2>
                <p><?= e($data['security']['intro']) ?></p>
                <?php foreach ($data['security']['items'] as $item): ?>
                <h3><?= e($item['title']) ?></h3>
                <p><?= e($item['text']) ?></p>
                <?php endforeach; ?>
                <p class="mt-4">
                    <a href="mailto:<?= e(SUPPORT_EMAIL) ?>?subject=Security%20Documentation%20Request" class="btn tb-btn-primary">Request our security documentation</a>
                </p>
            </div>
        </div>
    </section>

    <!-- 2.10 About -->
    <section class="tb-section tb-section-dark-alt" id="about" aria-labelledby="about-heading">
        <div class="container">
            <div class="reveal">
                <h2 id="about-heading" class="tb-section-title">Built for the teams who run operations, not just HR</h2>
                <p class="tb-section-sub mb-4"><?= e($data['about']['story']) ?></p>
                <blockquote class="tb-mission-quote">&ldquo;<?= e($data['about']['mission']) ?>&rdquo;</blockquote>
            </div>
            <div class="mt-5 reveal">
                <h3 class="text-center mb-4" style="color:#fff;font-weight:700">Team</h3>
                <p class="text-center text-muted small mb-4">Add real names, roles, and photos — even 3–4 people meaningfully improves trust signals.</p>
                <div class="row g-4">
                    <?php foreach ($data['team'] as $member): ?>
                    <div class="col-6 col-md-3">
                        <div class="tb-team-card">
                            <div class="tb-team-photo"><i class="bi bi-person-fill"></i></div>
                            <div class="fw-bold text-dark"><?= e($member['name']) ?></div>
                            <div class="text-muted small"><?= e($member['role']) ?></div>
                            <?php if (!empty($member['placeholder'])): ?><small class="text-muted">[PLACEHOLDER]</small><?php endif; ?>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>

    <!-- 2.11 Testimonials -->
    <section class="tb-section tb-section-light" id="customers" aria-labelledby="testimonials-heading">
        <div class="container">
            <h2 id="testimonials-heading" class="tb-section-title text-center mb-5 reveal">What teams are saying</h2>
            <?php foreach ($data['testimonials'] as $t): ?>
            <article class="tb-testimonial-card reveal">
                <blockquote>&ldquo;<?= e($t['quote']) ?>&rdquo;</blockquote>
                <div class="tb-testimonial-meta">— <strong><?= e($t['name']) ?></strong>, <?= e($t['role']) ?>, <?= e($t['company']) ?>, <?= e($t['city']) ?></div>
                <?php if (!empty($t['placeholder'])): ?><p class="text-muted small mt-2 mb-0">[PLACEHOLDER — replace with real customer quote before launch]</p><?php endif; ?>
            </article>
            <?php endforeach; ?>
        </div>
    </section>

    <!-- 2.12 Pricing -->
    <section class="tb-section tb-section-white" id="pricing" aria-labelledby="pricing-heading">
        <div class="container">
            <div class="text-center mb-5 reveal">
                <h2 id="pricing-heading" class="tb-section-title">Plans that scale with your team</h2>
                <p class="tb-section-sub mx-auto">Every plan includes attendance and the employee mobile app. Add payroll, lifecycle, collaboration, and CRM as you grow.</p>
            </div>
            <div class="row g-4 align-items-stretch reveal">
                <?php foreach ($data['pricing']['plans'] as $plan): ?>
                <div class="col-md-6 col-lg-3">
                    <div class="tb-pricing-card<?= !empty($plan['highlighted']) ? ' highlighted' : '' ?>">
                        <?php if (!empty($plan['highlighted'])): ?><span class="tb-pricing-badge">Popular</span><?php endif; ?>
                        <div class="tb-pricing-name"><?= e($plan['name']) ?></div>
                        <div class="tb-pricing-audience"><?= e($plan['audience']) ?></div>
                        <ul class="tb-pricing-features">
                            <?php foreach ($plan['features'] as $f): ?><li><?= e($f) ?></li><?php endforeach; ?>
                        </ul>
                        <a href="<?= e(REGISTER_URL) ?>" class="btn tb-btn-primary w-100">Get started</a>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
            <p class="text-center mt-4 reveal text-muted">27+ plan-tunable feature flags — turn on exactly what your team needs. Billing secured via Razorpay.</p>
        </div>
    </section>

    <!-- 2.13 FAQ -->
    <section class="tb-section tb-section-light" id="faq" aria-labelledby="faq-heading">
        <div class="container">
            <h2 id="faq-heading" class="tb-section-title text-center mb-5 reveal">Frequently asked questions</h2>
            <?php foreach ($data['faq'] as $category => $questions): ?>
            <div class="tb-faq-category reveal">
                <h3><?= e($category) ?></h3>
                <div class="tb-faq">
                    <?php foreach ($questions as $faq): ?>
                    <details>
                        <summary><?= e($faq['question']) ?></summary>
                        <div class="tb-faq-answer"><?= e($faq['answer']) ?></div>
                    </details>
                    <?php endforeach; ?>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </section>

    <!-- 2.14 Resources teaser -->
    <section class="tb-section tb-section-white" id="resources" aria-labelledby="resources-heading">
        <div class="container">
            <h2 id="resources-heading" class="tb-section-title text-center mb-5 reveal">Resources</h2>
            <div class="row g-4">
                <?php foreach ($data['resources'] as $article): ?>
                <div class="col-md-4 reveal">
                    <article class="tb-resource-card">
                        <h3><?= e($article['title']) ?></h3>
                        <p><?= e($article['excerpt']) ?></p>
                        <a href="<?= e($article['href']) ?>">Read more <i class="bi bi-arrow-right"></i></a>
                    </article>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- 2.15 Final CTA -->
    <section class="tb-final-cta" aria-labelledby="final-cta-heading">
        <div class="container reveal">
            <h2 id="final-cta-heading">Run HR the way your team actually works.</h2>
            <div class="d-flex flex-wrap gap-3 justify-content-center">
                <a href="<?= e(REGISTER_URL) ?>" class="btn tb-btn-primary btn-lg">Get started</a>
                <a href="mailto:<?= e(SUPPORT_EMAIL) ?>?subject=Talk%20to%20sales" class="btn tb-btn-outline btn-lg">Talk to sales</a>
            </div>
        </div>
    </section>
</main>

<footer class="tb-footer" aria-label="Site footer">
    <div class="container">
        <div class="row g-4 g-lg-5">
            <div class="col-lg-4">
                <a class="navbar-brand tb-logo mb-3 d-inline-flex" href="#top">
                    <span class="tb-logo-icon"><i class="bi bi-grid-1x2-fill"></i></span>Trackbook
                </a>
                <p class="tb-footer-desc">Made in India for Indian teams. Enterprise-grade data isolation, TLS encryption, and tenant-scoped permissions.</p>
                <div class="d-flex gap-2 mt-3 flex-wrap">
                    <span class="tb-badge-trust"><i class="bi bi-shield-lock"></i> SSL Secured</span>
                    <span class="tb-badge-trust"><i class="bi bi-database-lock"></i> Tenant Isolated</span>
                </div>
            </div>
            <div class="col-6 col-md-4 col-lg-2">
                <h3 class="tb-footer-heading">Product</h3>
                <ul class="tb-footer-links">
                    <li><a href="#features">Features</a></li>
                    <li><a href="#solutions">Solutions</a></li>
                    <li><a href="#security">Security</a></li>
                    <li><a href="#pricing">Pricing</a></li>
                    <li><a href="#faq">FAQ</a></li>
                </ul>
            </div>
            <div class="col-6 col-md-4 col-lg-2">
                <h3 class="tb-footer-heading">Company</h3>
                <ul class="tb-footer-links">
                    <li><a href="#about">About</a></li>
                    <li><a href="mailto:<?= e(SUPPORT_EMAIL) ?>">Contact</a></li>
                </ul>
            </div>
            <div class="col-6 col-md-4 col-lg-2">
                <h3 class="tb-footer-heading">Legal</h3>
                <ul class="tb-footer-links">
                    <li><a href="<?= page_url('legal/privacy.php') ?>">Privacy Policy</a></li>
                    <li><a href="<?= page_url('legal/terms.php') ?>">Terms of Service</a></li>
                </ul>
            </div>
        </div>
        <hr class="tb-footer-divider">
        <div class="d-flex flex-column flex-md-row justify-content-between align-items-center gap-2">
            <p class="tb-footer-copy mb-0">&copy; <?= date('Y') ?> <?= e(COMPANY_LEGAL) ?>. All rights reserved.</p>
            <p class="tb-footer-copy mb-0"><?= e(SUPPORT_EMAIL) ?></p>
        </div>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="<?= page_url('assets/js/main.js') ?>"></script>
</body>
</html>
