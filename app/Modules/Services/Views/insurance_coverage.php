<?php
$serviceTitle = $service['title'] ?? 'Insurance Coverage';

?>

<!-- Hero Banner -->
<section class="about-hero-section text-center position-relative">
    <div class="container position-relative">
        <nav aria-label="breadcrumb">
            <ol class="about-top-badge list-unstyled">
                <li class="d-inline-flex align-items-center">
                    <a href="<?= site_url('/') ?>"><i class="bi bi-house-door-fill me-1"></i> Home</a>
                </li>
                <li class="about-top-badge-sep d-inline-flex align-items-center" aria-hidden="true">/</li>
                <li class="d-inline-flex align-items-center">
                    <a href="<?= site_url('services') ?>">Services</a>
                </li>
                <li class="about-top-badge-sep d-inline-flex align-items-center" aria-hidden="true">/</li>
                <li class="d-inline-flex align-items-center text-white fw-bold active" aria-current="page">
                    <?= esc($serviceTitle) ?>
                </li>
            </ol>
        </nav>
        <h1 class="about-hero-title"><?= esc($serviceTitle) ?></h1>
        <p class="about-hero-desc">Comprehensive all-risk transit insurance and IBA-approved documentation protecting your goods against unforeseen road events.</p>
    </div>
</section>


<!-- Main Full-Width Content Container -->
<section class="py-5 bg-white">
    <div class="container">
        <!-- Main Service Overview Card -->
        <div class="svc-overview-card mb-5">
            <div class="d-flex align-items-center gap-3 mb-3">
                <div class="svc-icon-box mb-0 flex-shrink-0">
                    <i class="bi bi-shield-check"></i>
                </div>
                <h2 class="h3 fw-bold text-dark mb-0">Comprehensive Transit Risk Protection</h2>
            </div>
            <p class="text-muted leading-relaxed mb-0">
                While our packing standards minimize risk to near zero, national highway transits are subject to unpredictability. We offer direct transit insurance coverage backed by leading national insurance partners so your household and commercial assets are fully protected against transit damage.
            </p>
        </div>

        <!-- 4 Key Advantages Grid -->
        <div class="mb-5">
            <div class="text-center mb-4">
                <span class="badge bg-primary-subtle text-primary rounded-pill px-3 py-1.5 fw-bold mb-2">Policy Highlights</span>
                <h3 class="h4 fw-bold text-dark">Why You Should Insure Your Move</h3>
            </div>
            <div class="row g-3 g-lg-4">
                <div class="col-sm-6 col-lg-3">
                    <div class="svc-feature-box">
                        <div class="d-flex align-items-center gap-2 mb-2">
                            <div class="svc-feat-icon mb-0 flex-shrink-0">
                                <i class="bi bi-file-earmark-check-fill"></i>
                            </div>
                            <h4 class="h6 fw-bold text-dark mb-0">All-Risk Coverage</h4>
                        </div>
                        <p class="text-muted small mb-0">Protects against vehicle accidents, collision, fire, overturned trucks, or severe weather.</p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="svc-feature-box">
                        <div class="d-flex align-items-center gap-2 mb-2">
                            <div class="svc-feat-icon mb-0 flex-shrink-0">
                                <i class="bi bi-bank2"></i>
                            </div>
                            <h4 class="h6 fw-bold text-dark mb-0">IBA Approved Bills</h4>
                        </div>
                        <p class="text-muted small mb-0">Official 100% compliant documentation accepted by central, state, and bank employers.</p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="svc-feature-box">
                        <div class="d-flex align-items-center gap-2 mb-2">
                            <div class="svc-feat-icon mb-0 flex-shrink-0">
                                <i class="bi bi-currency-rupee"></i>
                            </div>
                            <h4 class="h6 fw-bold text-dark mb-0">Full Declared Value</h4>
                        </div>
                        <p class="text-muted small mb-0">Transparent policy rate calculated accurately on your verified declaration manifest.</p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="svc-feature-box">
                        <div class="d-flex align-items-center gap-2 mb-2">
                            <div class="svc-feat-icon mb-0 flex-shrink-0">
                                <i class="bi bi-headset"></i>
                            </div>
                            <h4 class="h6 fw-bold text-dark mb-0">Priority Claims Help</h4>
                        </div>
                        <p class="text-muted small mb-0">In the rare event of transit damage, our claims officer assists end-to-end for speedy payout.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Step-by-Step Moving Process -->
        <div class="mb-5">
            <div class="text-center mb-4">
                <span class="badge bg-primary-subtle text-primary rounded-pill px-3 py-1.5 fw-bold mb-2">Insurance Protocol</span>
                <h3 class="h4 fw-bold text-dark">Simple Coverage Process</h3>
            </div>
            <div class="row g-3 g-lg-4">
                <div class="col-sm-6 col-lg-3">
                    <div class="svc-step-card">
                        <span class="svc-step-badge">Step 01</span>
                        <h4 class="h6 fw-bold text-dark mb-2">Inventory Valuation</h4>
                        <p class="text-muted small mb-0">Fill out a simple checklist stating approximate market replacement values.</p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="svc-step-card">
                        <span class="svc-step-badge">Step 02</span>
                        <h4 class="h6 fw-bold text-dark mb-2">Policy Docket Generated</h4>
                        <p class="text-muted small mb-0">Underwriter policy docket is generated before the carrier departs from origin.</p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="svc-step-card">
                        <span class="svc-step-badge">Step 03</span>
                        <h4 class="h6 fw-bold text-dark mb-2">Covered Highway Transit</h4>
                        <p class="text-muted small mb-0">Your consignment is fully safeguarded throughout every kilometer on the road.</p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="svc-step-card">
                        <span class="svc-step-badge">Step 04</span>
                        <h4 class="h6 fw-bold text-dark mb-2">Safe Arrival &amp; Check</h4>
                        <p class="text-muted small mb-0">Items unloaded and matched against the policy inventory for final clearance.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Full-Width Bottom CTA Banner -->
        <div class="svc-full-cta"><div class="row align-items-center g-3"><div class="col-12 text-center"><h3 class="h4 fw-bold text-white mb-2">Protect Your Belongings with Transit Insurance</h3>
                    <p class="text-white-50 mb-0">Get complete security and IBA-approved documentation for peace of mind.</p></div></div></div>
    </div>
</section>
