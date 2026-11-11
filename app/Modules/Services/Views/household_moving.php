<?php
$serviceTitle = $service['title'] ?? 'House Shifting';

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
        <p class="about-hero-desc">Safe, door-to-door residential home relocation with 5-layer bubble packing and dedicated containers.</p>
    </div>
</section>


<!-- Main Full-Width Content Container -->
<section class="py-5 bg-white">
    <div class="container">
        <!-- Main Service Overview Card -->
        <div class="svc-overview-card mb-5">
            <div class="d-flex align-items-center gap-3 mb-3">
                <div class="svc-icon-box mb-0 flex-shrink-0">
                    <i class="bi bi-house-heart-fill"></i>
                </div>
                <h2 class="h3 fw-bold text-dark mb-0">Complete Household Relocation Solutions</h2>
            </div>
            <p class="text-muted leading-relaxed mb-0">
                Whether you are moving into a 1BHK apartment or a multi-storey bungalow, our trained household shifting team manages the entire process from doorstep packing and heavy furniture dismantling to safe highway transit, direct unloading, and room setup.
            </p>
        </div>

        <!-- 4 Key Advantages Grid (Full Width 4 Columns) -->
        <div class="mb-5">
            <div class="text-center mb-4">
                <span class="badge bg-primary-subtle text-primary rounded-pill px-3 py-1.5 fw-bold mb-2">Service Inclusions</span>
                <h3 class="h4 fw-bold text-dark">Why Choose Our House Shifting</h3>
            </div>
            <div class="row g-3 g-lg-4">
                <div class="col-sm-6 col-lg-3">
                    <div class="svc-feature-box">
                        <div class="d-flex align-items-center gap-2 mb-2">
                            <div class="svc-feat-icon mb-0 flex-shrink-0">
                                <i class="bi bi-box-seam-fill"></i>
                            </div>
                            <h4 class="h6 fw-bold text-dark mb-0">5-Layer Bubble Packing</h4>
                        </div>
                        <p class="text-muted small mb-0">Thick bubble wraps, corrugated sheets, and edge guards for electronics &amp; furniture.</p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="svc-feature-box">
                        <div class="d-flex align-items-center gap-2 mb-2">
                            <div class="svc-feat-icon mb-0 flex-shrink-0">
                                <i class="bi bi-tools"></i>
                            </div>
                            <h4 class="h6 fw-bold text-dark mb-0">Furniture Disassembly</h4>
                        </div>
                        <p class="text-muted small mb-0">Skilled carpentering for safe dismantling &amp; refitting of modular beds and wardrobes.</p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="svc-feature-box">
                        <div class="d-flex align-items-center gap-2 mb-2">
                            <div class="svc-feat-icon mb-0 flex-shrink-0">
                                <i class="bi bi-truck-front-fill"></i>
                            </div>
                            <h4 class="h6 fw-bold text-dark mb-0">Dedicated Enclosed Trucks</h4>
                        </div>
                        <p class="text-muted small mb-0">Weatherproof sealed container fleets that keep all belongings safe from rain &amp; dust.</p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="svc-feature-box">
                        <div class="d-flex align-items-center gap-2 mb-2">
                            <div class="svc-feat-icon mb-0 flex-shrink-0">
                                <i class="bi bi-shield-fill-check"></i>
                            </div>
                            <h4 class="h6 fw-bold text-dark mb-0">Zero Damage Guarantee</h4>
                        </div>
                        <p class="text-muted small mb-0">Full transit coverage with IBA-approved documentation for complete peace of mind.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Step-by-Step Moving Process (Full Width 4 Steps) -->
        <div class="mb-5">
            <div class="text-center mb-4">
                <span class="badge bg-primary-subtle text-primary rounded-pill px-3 py-1.5 fw-bold mb-2">How It Works</span>
                <h3 class="h4 fw-bold text-dark">Simple 4-Step Shifting Process</h3>
            </div>
            <div class="row g-3 g-lg-4">
                <div class="col-sm-6 col-lg-3">
                    <div class="svc-step-card">
                        <span class="svc-step-badge">Step 01</span>
                        <h4 class="h6 fw-bold text-dark mb-2">Free Doorstep Survey</h4>
                        <p class="text-muted small mb-0">We inspect your inventory via in-person or video call to provide transparent quotes.</p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="svc-step-card">
                        <span class="svc-step-badge">Step 02</span>
                        <h4 class="h6 fw-bold text-dark mb-2">Room-by-Room Packing</h4>
                        <p class="text-muted small mb-0">Certified packers box kitchenware, clothes, and heavy items using color-coded tags.</p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="svc-step-card">
                        <span class="svc-step-badge">Step 03</span>
                        <h4 class="h6 fw-bold text-dark mb-2">Secure Highway Transit</h4>
                        <p class="text-muted small mb-0">Goods are strapped into shockproof carriers and tracked continuously till destination.</p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="svc-step-card">
                        <span class="svc-step-badge">Step 04</span>
                        <h4 class="h6 fw-bold text-dark mb-2">Unpacking &amp; Placement</h4>
                        <p class="text-muted small mb-0">Punctual arrival, unloading, room placement, and prompt removal of empty carton waste.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Full-Width Bottom CTA Banner -->
        <div class="svc-full-cta"><div class="row align-items-center g-3"><div class="col-12 text-center"><h3 class="h4 fw-bold text-white mb-2">Planning to Shift Your Home Soon?</h3>
                    <p class="text-white-50 mb-0">Get in touch today for an instant customized cost breakdown and reserved moving dates.</p></div></div></div>
    </div>
</section>
