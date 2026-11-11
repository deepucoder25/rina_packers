<?php
$serviceTitle = $service['title'] ?? 'Local Shifting';

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
        <p class="about-hero-desc">Fast, punctual, same-day home and apartment shifting within your city with dedicated small &amp; medium transport trucks.</p>
    </div>
</section>


<!-- Main Full-Width Content Container -->
<section class="py-5 bg-white">
    <div class="container">
        <!-- Main Service Overview Card -->
        <div class="svc-overview-card mb-5">
            <div class="d-flex align-items-center gap-3 mb-3">
                <div class="svc-icon-box mb-0 flex-shrink-0">
                    <i class="bi bi-speedometer2"></i>
                </div>
                <h2 class="h3 fw-bold text-dark mb-0">Same-Day City Shifting &amp; Relocation</h2>
            </div>
            <p class="text-muted leading-relaxed mb-0">
                Moving to an adjacent sector or across town? Our local moving crew completes entire 1BHK, 2BHK, and 3BHK flat moves in just a few hours without disrupting your daily routine or office schedule.
            </p>
        </div>

        <!-- 4 Key Advantages Grid -->
        <div class="mb-5">
            <div class="text-center mb-4">
                <span class="badge bg-primary-subtle text-primary rounded-pill px-3 py-1.5 fw-bold mb-2">City Shifting Perks</span>
                <h3 class="h4 fw-bold text-dark">Why Choose Our Local Team</h3>
            </div>
            <div class="row g-3 g-lg-4">
                <div class="col-sm-6 col-lg-3">
                    <div class="svc-feature-box">
                        <div class="d-flex align-items-center gap-2 mb-2">
                            <div class="svc-feat-icon mb-0 flex-shrink-0">
                                <i class="bi bi-lightning-charge-fill"></i>
                            </div>
                            <h4 class="h6 fw-bold text-dark mb-0">Same-Day Completion</h4>
                        </div>
                        <p class="text-muted small mb-0">Start packing in the morning and settle comfortably into your new home by night.</p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="svc-feature-box">
                        <div class="d-flex align-items-center gap-2 mb-2">
                            <div class="svc-feat-icon mb-0 flex-shrink-0">
                                <i class="bi bi-tag-fill"></i>
                            </div>
                            <h4 class="h6 fw-bold text-dark mb-0">Fixed Transparent Rates</h4>
                        </div>
                        <p class="text-muted small mb-0">Zero hidden surcharges or surprise tolls; clear hourly or package billing.</p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="svc-feature-box">
                        <div class="d-flex align-items-center gap-2 mb-2">
                            <div class="svc-feat-icon mb-0 flex-shrink-0">
                                <i class="bi bi-truck-front"></i>
                            </div>
                            <h4 class="h6 fw-bold text-dark mb-0">Compact Mini Trucks</h4>
                        </div>
                        <p class="text-muted small mb-0">Navigates narrow city lanes and apartment gates effortlessly without delays.</p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="svc-feature-box">
                        <div class="d-flex align-items-center gap-2 mb-2">
                            <div class="svc-feat-icon mb-0 flex-shrink-0">
                                <i class="bi bi-wrench-adjustable-circle-fill"></i>
                            </div>
                            <h4 class="h6 fw-bold text-dark mb-0">Quick Reassembly</h4>
                        </div>
                        <p class="text-muted small mb-0">Basic bed, sofa, and dining table reassembly included with room placement.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Step-by-Step Moving Process -->
        <div class="mb-5">
            <div class="text-center mb-4">
                <span class="badge bg-primary-subtle text-primary rounded-pill px-3 py-1.5 fw-bold mb-2">Quick Timeline</span>
                <h3 class="h4 fw-bold text-dark">4 Hours Local Move Plan</h3>
            </div>
            <div class="row g-3 g-lg-4">
                <div class="col-sm-6 col-lg-3">
                    <div class="svc-step-card">
                        <span class="svc-step-badge">Step 01</span>
                        <h4 class="h6 fw-bold text-dark mb-2">Morning Arrival</h4>
                        <p class="text-muted small mb-0">Truck and packing team reach your address promptly at your designated time slot.</p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="svc-step-card">
                        <span class="svc-step-badge">Step 02</span>
                        <h4 class="h6 fw-bold text-dark mb-2">Swift Wrap &amp; Load</h4>
                        <p class="text-muted small mb-0">Fast packing of beds, electronics, and kitchen boxes into our city truck.</p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="svc-step-card">
                        <span class="svc-step-badge">Step 03</span>
                        <h4 class="h6 fw-bold text-dark mb-2">Direct City Drive</h4>
                        <p class="text-muted small mb-0">Drivers use optimal traffic routes to avoid city rush hours and bottleneck jams.</p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="svc-step-card">
                        <span class="svc-step-badge">Step 04</span>
                        <h4 class="h6 fw-bold text-dark mb-2">Unload &amp; Settle In</h4>
                        <p class="text-muted small mb-0">All cartons placed in their rooms, bed assembled, and ready for you to enjoy.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Full-Width Bottom CTA Banner -->
        <div class="svc-full-cta"><div class="row align-items-center g-3"><div class="col-12 text-center"><h3 class="h4 fw-bold text-white mb-2">Need to Move Within the City?</h3>
                    <p class="text-white-50 mb-0">Book your local mini-truck and packing crew today with flexible slots.</p></div></div></div>
    </div>
</section>
