<!-- Hero Banner Section (Matches Homepage Slider Design Customized for City) -->
<section class="hero-slider-section position-relative py-4">
    <div class="container py-2 py-lg-3">
        <!-- Content on col-12 -->
        <div class="row mb-4">
            <div class="col-12">
                <!-- Top Breadcrumb Capsule Badge -->
                <nav aria-label="breadcrumb">
                    <ol class="hero-top-badge list-unstyled mb-3">
                        <li class="d-inline-flex align-items-center">
                            <a href="<?= site_url('/') ?>" class="text-white text-decoration-none">Home</a>
                        </li>
                        <li class="hero-top-badge-sep d-inline-flex align-items-center" aria-hidden="true">/</li>
                        <li class="d-inline-flex align-items-center">
                            <a href="<?= site_url('city') ?>" class="text-white text-decoration-none">Cities &amp; States</a>
                        </li>
                        <li class="hero-top-badge-sep d-inline-flex align-items-center" aria-hidden="true">/</li>
                        <li class="d-inline-flex align-items-center text-white">
                            <?= esc($stateName) ?>
                        </li>
                        <li class="hero-top-badge-sep d-inline-flex align-items-center" aria-hidden="true">/</li>
                        <li class="d-inline-flex align-items-center text-white fw-bold active" aria-current="page">
                            <?= esc($cityName) ?>
                        </li>
                    </ol>
                </nav>

                <!-- Main Headline -->
                <h1 class="hero-title mb-3">
                    Best
                    <span class="hero-house-shifting">Packers &amp; Movers</span>
                    <span class="hero-title-accent">in <?= esc($cityName) ?><?= !empty($stateName) ? ', ' . esc($stateName) : '' ?>
                        <svg class="hero-accent-curve" viewBox="0 0 180 14" preserveAspectRatio="none">
                            <path d="M2,5 Q90,14 178,3" stroke="#e51a24" stroke-width="4.5" stroke-linecap="round" fill="none"/>
                        </svg>
                    </span>
                </h1>

                <!-- Subtitle -->
                <p class="hero-lead-text mb-4">
                    Reliable, hassle-free household shifting, office moving &amp; vehicle transport with 100% transit insurance in <?= esc($cityName) ?>.
                </p>

                <!-- Action Buttons -->
                <div class="hero-action-buttons d-flex align-items-center gap-2 gap-sm-3 mb-4">
                    <!-- Call Helpline Button -->
                    <a <?= $phonehtml ?> class="btn-hero-call" title="Call Helpline">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="currentColor" class="text-primary">
                            <path d="M6.62 10.79a15.053 15.053 0 006.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z"/>
                        </svg>
                        <span><?= $phone ?></span>
                    </a>

                    <!-- WhatsApp Button -->
                    <a href="<?= $whatsapphtml ?>?text=<?= urlencode('Hello ' . ($company3 ?? 'Rina Packers') . ', I need packers and movers services in ' . $cityName . ', ' . $stateName . '.') ?>" target="_blank" rel="noopener noreferrer" class="btn-hero-whatsapp-red" title="Chat on WhatsApp">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="currentColor" class="flex-shrink-0">
                            <path d="M12.04 2c-5.46 0-9.91 4.45-9.91 9.91 0 1.75.46 3.45 1.32 4.95L2.05 22l5.25-1.38c1.45.79 3.08 1.21 4.74 1.21 5.46 0 9.91-4.45 9.91-9.91 0-2.65-1.03-5.14-2.9-7.01A9.816 9.816 0 0012.04 2zm5.79 14.28c-.24.68-1.39 1.3-1.92 1.38-.5.08-1.14.12-3.69-.93-3.26-1.34-5.36-4.66-5.52-4.88-.16-.22-1.32-1.75-1.32-3.34 0-1.59.83-2.37 1.13-2.7.3-.32.65-.4 0.87-.4.22 0 .43 0 .62.01.2.01.47-.08.73.55.27.65.92 2.25 1 2.42.08.16.14.36.03.58-.11.22-.16.36-.32.55-.16.19-.34.42-.49.56-.16.16-.33.34-.14.66.19.32.84 1.38 1.8 2.24 1.24 1.1 2.28 1.44 2.61 1.6.32.16.51.14.7-.08.19-.22.81-.95 1.03-1.27.22-.32.43-.27.73-.16.3.11 1.9.9 2.23 1.06.32.16.54.24.62.38.08.14.08.81-.16 1.49z"/>
                        </svg>
                        <span><span class="d-none d-sm-inline">Chat on </span>WhatsApp</span>
                        <span class="btn-arrow-circle">
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M8.59 16.59L13.17 12 8.59 7.41 10 6l6 6-6 6-1.41-1.41z"/>
                            </svg>
                        </span>
                    </a>
                </div>

                <!-- 4-Pillar Trust Capsule Bar -->
                <div class="hero-trust-capsule">
                    <!-- Pillar 1 -->
                    <span class="trust-pillar-item">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="currentColor" class="trust-pillar-icon">
                            <path d="M12 1L3 5v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V5l-9-4zm-2 16l-4-4 1.41-1.41L10 14.17l6.59-6.59L18 9l-8 8z"/>
                        </svg>
                        <span><?= $experience ?> Years Experience</span>
                    </span>
                    <span class="trust-divider"></span>

                    <!-- Pillar 2 -->
                    <span class="trust-pillar-item">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="currentColor" class="trust-pillar-icon">
                            <path d="M20 8h-3V4H1v13h2c0 1.66 1.34 3 3 3s3-1.34 3-3h6c0 1.66 1.34 3 3 3s3-1.34 3-3h2v-5l-3-4zM6 18.5c-.83 0-1.5-.67-1.5-1.5s.67-1.5 1.5-1.5 1.5.67 1.5 1.5-.67 1.5-1.5 1.5zm13.5-9l1.96 2.5H17V9.5h2.5zm-2 9c-.83 0-1.5-.67-1.5-1.5s.67-1.5 1.5-1.5 1.5.67 1.5 1.5-.67 1.5-1.5 1.5z"/>
                        </svg>
                        <span>On-Time in <?= esc($cityName) ?></span>
                    </span>
                    <span class="trust-divider"></span>

                    <!-- Pillar 3 -->
                    <span class="trust-pillar-item">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="currentColor" class="trust-pillar-icon">
                            <path d="M12 2C6.48 2 2 6.48 2 12c0 .55.45 1 1 1h8v5.5c0 .83-.67 1.5-1.5 1.5S8 19.33 8 18.5c0-.28-.22-.5-.5-.5s-.5.22-.5.5C7 19.88 8.12 21 9.5 21s2.5-1.12 2.5-2.5V13h8c.55 0 1-.45 1-1 0-5.52-4.48-10-10-10z"/>
                        </svg>
                        <span>100% Safety Assurance</span>
                    </span>
                    <span class="trust-divider"></span>

                    <!-- Pillar 4 -->
                    <span class="trust-pillar-item">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="currentColor" class="trust-pillar-icon">
                            <path d="M12 1a9 9 0 0 0-9 9v7c0 1.66 1.34 3 3 3h3v-8H5v-2c0-3.87 3.13-7 7-7s7 3.13 7 7v2h-4v8h3c1.66 0 3-1.34 3-3v-7a9 9 0 0 0-9-9z"/>
                        </svg>
                        <span>24/7 Local Support</span>
                    </span>
                </div>
            </div>
        </div>

        <!-- Quote Form Box on col-12 -->
        <div class="row justify-content-center">
            <div class="col-12">
                <?= view('Modules\Contacts\Views\quoteform', ['city' => $cityName ?? '']) ?>
            </div>
        </div>
    </div>
</section>

<!-- ==========================================================================
     SECTION 1: About Section - City Relocation Hub Overview (col-12)
     ========================================================================== -->
<section class="city-sec-wrap bg-white" id="cityAbout">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <!-- Section Header -->
                <div class="city-sec-head">
                    <span class="city-sec-eyebrow">
                        <i class="bi bi-shield-check"></i> Relocation Hub Overview
                    </span>
                    <h2 class="city-sec-title">
                        Reliable Packers and Movers in <?= esc($cityName) ?>, <?= esc($stateName) ?>
                    </h2>
                    <p class="city-sec-subtitle">
                        Since 2010, <strong><?= esc($company3) ?></strong> has been delivering punctual, safe, and transparent household shifting, vehicle transport, and corporate relocation services across <?= esc($cityName) ?> and India.
                    </p>
                </div>

                <!-- Modern Bento Layout (Distinct from Homepage) -->
                <div class="row g-4 align-items-stretch">
                    <!-- Left Bento Box: Verified Branch & Core Capabilities (col-lg-7) -->
                    <div class="col-12 col-lg-7">
                        <div class="city-about-feature-box">
                            <div class="city-about-feature-icon">
                                <i class="bi bi-buildings-fill"></i>
                            </div>
                            <h3 class="fs-5 fw-bold text-dark mb-1">Verified Moving Hub in <?= esc($cityName) ?></h3>
                            <p class="small text-secondary mb-3">
                                Local ground crew, direct container fleet &amp; 24x7 tracking support
                            </p>
                            
                            <p class="text-secondary small mb-3 lh-base">
                                Relocating in <strong><?= esc($cityName) ?></strong> shouldn't be stressful. Our certified packing crew manages your move with military-grade precision—from packing crystal glassware to heavy furniture reassembly at your new address.
                            </p>

                            <!-- Checkpoint List -->
                            <div class="d-flex flex-column gap-1">
                                <div class="city-about-check-item">
                                    <i class="bi bi-check-circle-fill"></i>
                                    <div>
                                        <strong>Dedicated Moving Supervisor:</strong> On-site coordinator assigned to oversee packing, inventory counting &amp; loading in <?= esc($cityName) ?>.
                                    </div>
                                </div>

                                <div class="city-about-check-item">
                                    <i class="bi bi-check-circle-fill"></i>
                                    <div>
                                        <strong>5-Layer Defensive Packaging:</strong> Air bubble film, edge guards, stretch film &amp; wooden crates for delicate appliances.
                                    </div>
                                </div>

                                <div class="city-about-check-item">
                                    <i class="bi bi-check-circle-fill"></i>
                                    <div>
                                        <strong>Sealed Container Fleet:</strong> All-weather enclosed container trucks protecting goods from rain, dust &amp; highway jerks.
                                    </div>
                                </div>

                                <div class="city-about-check-item">
                                    <i class="bi bi-check-circle-fill"></i>
                                    <div>
                                        <strong>Full-Value Transit Insurance:</strong> Instant claim policy coverage with zero hidden processing deductible.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Right Bento Box: Key Operational Metrics & Compliance (col-lg-5) -->
                    <div class="col-12 col-lg-5">
                        <div class="city-about-feature-box d-flex flex-column justify-content-between">
                            <div>
                                <h3 class="fs-6 fw-bold text-dark text-uppercase letter-spacing-1 mb-3">
                                    <i class="bi bi-trophy-fill text-warning me-1.5"></i> Operational Track Record
                                </h3>

                                <div class="row g-3 mb-3">
                                    <div class="col-6">
                                        <div class="city-about-metric-card">
                                            <div class="city-about-metric-val">15+</div>
                                            <div class="city-about-metric-lbl">Years Experience</div>
                                        </div>
                                    </div>

                                    <div class="col-6">
                                        <div class="city-about-metric-card">
                                            <div class="city-about-metric-val">25K+</div>
                                            <div class="city-about-metric-lbl">Happy Moves</div>
                                        </div>
                                    </div>

                                    <div class="col-6">
                                        <div class="city-about-metric-card">
                                            <div class="city-about-metric-val">100%</div>
                                            <div class="city-about-metric-lbl">Insured Safety</div>
                                        </div>
                                    </div>

                                    <div class="col-6">
                                        <div class="city-about-metric-card">
                                            <div class="city-about-metric-val">4.9★</div>
                                            <div class="city-about-metric-lbl">Customer Rating</div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Compliance Badges -->
                            <div class="p-3 bg-light rounded-3 d-flex flex-column gap-2 small text-secondary">
                                <div class="d-flex align-items-center gap-2">
                                    <i class="bi bi-patch-check-fill text-success"></i>
                                    <span><strong>IBA Approved Transit Bills:</strong> Accepted by Banks &amp; Corporates for 100% reimbursement</span>
                                </div>
                                <div class="d-flex align-items-center gap-2">
                                    <i class="bi bi-patch-check-fill text-success"></i>
                                    <span><strong>ISO 9001:2015 Certified:</strong> Standardized multi-stage packaging &amp; handling protocols</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ==========================================================================
     SECTION 2: Process Section - Modern Step Cards (col-12)
     ========================================================================== -->
<section class="city-sec-wrap bg-light-soft" id="cityProcess">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <!-- Section Header -->
                <div class="city-sec-head">
                    <span class="city-sec-eyebrow">
                        <i class="bi bi-signpost-split"></i> 5-Step Moving Journey
                    </span>
                    <h2 class="city-sec-title">
                        How Shifting Works with <?= esc($company3) ?> in <?= esc($cityName) ?>
                    </h2>
                    <p class="city-sec-subtitle">
                        A disciplined, transparent relocation process designed to give you complete peace of mind from pickup to delivery.
                    </p>
                </div>

                <!-- 5 Modern Step Cards: 1 row on Desktop (col-lg), 2-2 with centered 5th on Mobile (col-6) -->
                <div class="row g-2 g-md-3 g-lg-3 justify-content-center">
                    <!-- Step 1 -->
                    <div class="col-6 col-md-6 col-lg">
                        <div class="city-flow-step-card">
                            <div class="city-flow-step-top">
                                <span class="city-flow-step-num">STEP 01</span>
                                <div class="city-flow-step-icon">
                                    <i class="bi bi-search"></i>
                                </div>
                            </div>
                            <h3 class="city-flow-step-title">Free Survey</h3>
                            <p class="city-flow-step-desc">
                                Share inventory details online or schedule a free video survey for an upfront estimate.
                            </p>
                        </div>
                    </div>

                    <!-- Step 2 -->
                    <div class="col-6 col-md-6 col-lg">
                        <div class="city-flow-step-card">
                            <div class="city-flow-step-top">
                                <span class="city-flow-step-num">STEP 02</span>
                                <div class="city-flow-step-icon">
                                    <i class="bi bi-box-seam"></i>
                                </div>
                            </div>
                            <h3 class="city-flow-step-title">5-Layer Pack</h3>
                            <p class="city-flow-step-desc">
                                Expert packers wrap electronics, furniture &amp; fragile items with heavy bubble wrap &amp; foam.
                            </p>
                        </div>
                    </div>

                    <!-- Step 3 -->
                    <div class="col-6 col-md-6 col-lg">
                        <div class="city-flow-step-card">
                            <div class="city-flow-step-top">
                                <span class="city-flow-step-num">STEP 03</span>
                                <div class="city-flow-step-icon">
                                    <i class="bi bi-truck"></i>
                                </div>
                            </div>
                            <h3 class="city-flow-step-title">Safe Loading</h3>
                            <p class="city-flow-step-desc">
                                Careful loading with hydraulic lifters and tie-down belts into enclosed containers.
                            </p>
                        </div>
                    </div>

                    <!-- Step 4 -->
                    <div class="col-6 col-md-6 col-lg">
                        <div class="city-flow-step-card">
                            <div class="city-flow-step-top">
                                <span class="city-flow-step-num">STEP 04</span>
                                <div class="city-flow-step-icon">
                                    <i class="bi bi-geo-alt"></i>
                                </div>
                            </div>
                            <h3 class="city-flow-step-title">GPS Transit</h3>
                            <p class="city-flow-step-desc">
                                Weatherproof transit with satellite tracking and live status updates over WhatsApp.
                            </p>
                        </div>
                    </div>

                    <!-- Step 5: Last odd one centered on mobile -->
                    <div class="col-6 col-md-6 col-lg">
                        <div class="city-flow-step-card">
                            <div class="city-flow-step-top">
                                <span class="city-flow-step-num">STEP 05</span>
                                <div class="city-flow-step-icon">
                                    <i class="bi bi-house-check"></i>
                                </div>
                            </div>
                            <h3 class="city-flow-step-title">Unpack &amp; Setup</h3>
                            <p class="city-flow-step-desc">
                                Punctual doorstep delivery, room-wise item placement, furniture assembly &amp; debris removal.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ==========================================================================
     SECTION 3: Price Section (col-12)
     ========================================================================== -->
<section class="city-sec-wrap bg-white" id="cityPricing">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <!-- Section Header -->
                <div class="city-sec-head">
                    <span class="city-sec-eyebrow">
                        <i class="bi bi-tags-fill"></i> 100% Transparent Price Estimates
                    </span>
                    <h2 class="city-sec-title">
                        Estimated Packers and Movers Charges in <?= esc($cityName) ?>
                    </h2>
                    <p class="city-sec-subtitle">
                        Clear, competitive price estimates for local shifting within <?= esc($cityName) ?> and domestic moves across India.
                    </p>
                </div>

                <!-- Responsive Pricing Table inside col-12 -->
                <div class="city-price-wrapper">
                    <div class="table-responsive">
                        <table class="city-price-table">
                            <thead>
                                <tr>
                                    <th>Shifting Type</th>
                                    <th class="text-center">0 – 100 Km</th>
                                    <th class="text-center">100 – 200 Km</th>
                                    <th class="text-center">200 – 500 Km</th>
                                    <th class="text-center">500+ Km</th>
                                    <th class="text-end">Instant Quote</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="city-price-type">
                                            <i class="bi bi-house-door text-primary me-1.5"></i> 1 RK / 1 BHK Shifting
                                        </div>
                                    </td>
                                    <td class="text-center"><span class="city-price-num">₹3,500 – ₹7,000</span></td>
                                    <td class="text-center"><span class="city-price-num">₹6,500 – ₹11,000</span></td>
                                    <td class="text-center"><span class="city-price-num">₹9,500 – ₹16,000</span></td>
                                    <td class="text-center"><span class="city-price-num">₹14,000 – ₹22,000</span></td>
                                    <td class="text-end">
                                        <button type="button" class="city-price-btn" data-bs-toggle="modal" data-bs-target="#qteModal">
                                            <span>Get Quote</span> <i class="bi bi-arrow-right"></i>
                                        </button>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <div class="city-price-type">
                                            <i class="bi bi-buildings text-primary me-1.5"></i> 2 BHK Household
                                            <span class="city-price-badge-pop">Popular</span>
                                        </div>
                                    </td>
                                    <td class="text-center"><span class="city-price-num">₹5,500 – ₹10,500</span></td>
                                    <td class="text-center"><span class="city-price-num">₹9,500 – ₹15,500</span></td>
                                    <td class="text-center"><span class="city-price-num">₹14,000 – ₹22,000</span></td>
                                    <td class="text-center"><span class="city-price-num">₹19,000 – ₹29,000</span></td>
                                    <td class="text-end">
                                        <button type="button" class="city-price-btn" data-bs-toggle="modal" data-bs-target="#qteModal">
                                            <span>Get Quote</span> <i class="bi bi-arrow-right"></i>
                                        </button>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <div class="city-price-type">
                                            <i class="bi bi-house-gear text-primary me-1.5"></i> 3 BHK / 4 BHK Home
                                        </div>
                                    </td>
                                    <td class="text-center"><span class="city-price-num">₹8,500 – ₹15,500</span></td>
                                    <td class="text-center"><span class="city-price-num">₹13,500 – ₹21,500</span></td>
                                    <td class="text-center"><span class="city-price-num">₹19,000 – ₹29,000</span></td>
                                    <td class="text-center"><span class="city-price-num">₹26,000 – ₹38,000</span></td>
                                    <td class="text-end">
                                        <button type="button" class="city-price-btn" data-bs-toggle="modal" data-bs-target="#qteModal">
                                            <span>Get Quote</span> <i class="bi bi-arrow-right"></i>
                                        </button>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <div class="city-price-type">
                                            <i class="bi bi-bicycle text-primary me-1.5"></i> Bike / Two-Wheeler
                                        </div>
                                    </td>
                                    <td class="text-center"><span class="city-price-num">₹1,500 – ₹2,800</span></td>
                                    <td class="text-center"><span class="city-price-num">₹2,500 – ₹4,200</span></td>
                                    <td class="text-center"><span class="city-price-num">₹3,800 – ₹6,500</span></td>
                                    <td class="text-center"><span class="city-price-num">₹5,500 – ₹8,500</span></td>
                                    <td class="text-end">
                                        <button type="button" class="city-price-btn" data-bs-toggle="modal" data-bs-target="#qteModal">
                                            <span>Get Quote</span> <i class="bi bi-arrow-right"></i>
                                        </button>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <div class="city-price-type">
                                            <i class="bi bi-car-front text-primary me-1.5"></i> Car Transport Carrier
                                        </div>
                                    </td>
                                    <td class="text-center"><span class="city-price-num">₹3,500 – ₹5,500</span></td>
                                    <td class="text-center"><span class="city-price-num">₹5,000 – ₹8,500</span></td>
                                    <td class="text-center"><span class="city-price-num">₹8,500 – ₹14,000</span></td>
                                    <td class="text-center"><span class="city-price-num">₹12,000 – ₹19,500</span></td>
                                    <td class="text-end">
                                        <button type="button" class="city-price-btn" data-bs-toggle="modal" data-bs-target="#qteModal">
                                            <span>Get Quote</span> <i class="bi bi-arrow-right"></i>
                                        </button>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <div class="city-price-type">
                                            <i class="bi bi-briefcase text-primary me-1.5"></i> Office Corporate Shifting
                                        </div>
                                    </td>
                                    <td class="text-center"><span class="city-price-custom">Custom Survey</span></td>
                                    <td class="text-center"><span class="city-price-custom">Custom Survey</span></td>
                                    <td class="text-center"><span class="city-price-custom">Custom Survey</span></td>
                                    <td class="text-center"><span class="city-price-custom">Custom Survey</span></td>
                                    <td class="text-end">
                                        <button type="button" class="city-price-btn" data-bs-toggle="modal" data-bs-target="#qteModal">
                                            <span>Get Quote</span> <i class="bi bi-arrow-right"></i>
                                        </button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <!-- Trust Bar below Pricing Table -->
                    <div class="city-price-trust-bar">
                        <div class="city-price-trust-item">
                            <i class="bi bi-check-circle-fill"></i>
                            <span>100% Free Doorstep Survey</span>
                        </div>
                        <div class="city-price-trust-item">
                            <i class="bi bi-check-circle-fill"></i>
                            <span>Zero Hidden Toll or Fuel Charges</span>
                        </div>
                        <div class="city-price-trust-item">
                            <i class="bi bi-check-circle-fill"></i>
                            <span>IBA Approved Transit Invoices</span>
                        </div>
                        <div class="city-price-trust-item">
                            <i class="bi bi-check-circle-fill"></i>
                            <span>Comprehensive Transit Insurance</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ==========================================================================
     SECTION 4: Testimonials Section - Classy Verified Customer Reviews (col-12)
     ========================================================================== -->
<section class="city-sec-wrap bg-light-soft" id="cityTestimonials">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <!-- Section Header -->
                <div class="city-sec-head">
                    <span class="city-sec-eyebrow">
                        <i class="bi bi-star-fill text-warning"></i> Customer Feedback
                    </span>
                    <h2 class="city-sec-title">
                        What People Say About Shifting in <?= esc($cityName) ?>
                    </h2>
                    <p class="city-sec-subtitle">
                        Read genuine, verified reviews from homeowners, defense officers, and professionals who recently relocated with us.
                    </p>
                </div>

                <!-- 3 Distinct Review Cards in 1 Row with Native Bootstrap Swipe (No JS) -->
                <div class="row flex-nowrap overflow-auto city-review-swipe-row g-3 g-lg-4">
                    <!-- Review 1 -->
                    <div class="col-11 col-sm-8 col-lg-4 flex-shrink-0">
                        <div class="city-review-card">
                            <div>
                                <div class="city-review-stars">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                </div>
                                <span class="city-review-route-badge">
                                    <i class="bi bi-geo-alt-fill text-danger"></i> Local Shifting in <?= esc($cityName) ?>
                                </span>
                                <h3 class="city-review-quote-title">Punctual &amp; 100% Scratch-Free Move</h3>
                                <p class="city-review-quote-text">
                                    "I moved our 2BHK flat within <?= esc($cityName) ?>. The crew was right on time at 9 AM with all packing materials. Every delicate glassware piece and smart TV was wrapped carefully. Zero scratches, zero hassle!"
                                </p>
                            </div>
                            <div class="city-review-author-row">
                                <div>
                                    <div class="city-review-author-name">Rajesh Kalita</div>
                                    <div class="city-review-verified-pill">
                                        <i class="bi bi-patch-check-fill"></i> Verified Customer
                                    </div>
                                </div>
                                <span class="city-review-date">Oct 2026</span>
                            </div>
                        </div>
                    </div>

                    <!-- Review 2 -->
                    <div class="col-11 col-sm-8 col-lg-4 flex-shrink-0">
                        <div class="city-review-card">
                            <div>
                                <div class="city-review-stars">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                </div>
                                <span class="city-review-route-badge">
                                    <i class="bi bi-truck text-primary"></i> <?= esc($cityName) ?> ➔ Kolkata
                                </span>
                                <h3 class="city-review-quote-title">Smooth Interstate Relocation</h3>
                                <p class="city-review-quote-text">
                                    "Shifting across state lines with family was giving us anxiety. <?= esc($company3) ?> handled everything professionally. Live WhatsApp truck updates and prompt delivery made the 3-day interstate journey completely stress-free."
                                </p>
                            </div>
                            <div class="city-review-author-row">
                                <div>
                                    <div class="city-review-author-name">Priyanka Das</div>
                                    <div class="city-review-verified-pill">
                                        <i class="bi bi-patch-check-fill"></i> Verified Customer
                                    </div>
                                </div>
                                <span class="city-review-date">Sep 2026</span>
                            </div>
                        </div>
                    </div>

                    <!-- Review 3 -->
                    <div class="col-11 col-sm-8 col-lg-4 flex-shrink-0">
                        <div class="city-review-card">
                            <div>
                                <div class="city-review-stars">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                </div>
                                <span class="city-review-route-badge">
                                    <i class="bi bi-shield-check text-success"></i> <?= esc($cityName) ?> ➔ Delhi NCR
                                </span>
                                <h3 class="city-review-quote-title">Defense Transfer + Car Carrier</h3>
                                <p class="city-review-quote-text">
                                    "As a defense officer, prompt reimbursement documentation is essential. Their covered car trailer delivered my sedan without a single blemish, and the IBA approved invoice was processed without any audit objections."
                                </p>
                            </div>
                            <div class="city-review-author-row">
                                <div>
                                    <div class="city-review-author-name">Capt. S. K. Roy</div>
                                    <div class="city-review-verified-pill">
                                        <i class="bi bi-patch-check-fill"></i> Verified Customer
                                    </div>
                                </div>
                                <span class="city-review-date">Aug 2026</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ==========================================================================
     SECTION 5: FAQs Section - Numbered Modern Accordion (col-12)
     ========================================================================== -->
<section class="city-sec-wrap bg-white" id="cityFaqs" itemscope itemtype="https://schema.org/FAQPage">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <!-- Section Header -->
                <div class="city-sec-head">
                    <span class="city-sec-eyebrow">
                        <i class="bi bi-question-circle-fill"></i> Got Questions?
                    </span>
                    <h2 class="city-sec-title">
                        Frequently Asked Questions in <?= esc($cityName) ?>
                    </h2>
                    <p class="city-sec-subtitle">
                        Clear answers to common questions about moving costs, packaging protocols, insurance, and booking timelines.
                    </p>
                </div>

                <!-- 2-Column Numbered Accordion Grid inside col-12 -->
                <div class="row g-3 g-lg-4">
                    <!-- Column 1 (Q1 - Q3) -->
                    <div class="col-12 col-lg-6">
                        <div class="accordion" id="cityFaqCol1">
                            <!-- FAQ 1 -->
                            <div class="city-num-faq-item accordion-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                                <h3 class="accordion-header" id="cityFaqHead1">
                                    <button class="accordion-button city-num-faq-btn" type="button" data-bs-toggle="collapse" data-bs-target="#cityFaqCol1_1" aria-expanded="true" aria-controls="cityFaqCol1_1" itemprop="name">
                                        <span class="city-num-faq-badge">01</span>
                                        <span>How are shifting charges calculated in <?= esc($cityName) ?>?</span>
                                    </button>
                                </h3>
                                <div id="cityFaqCol1_1" class="accordion-collapse collapse show" aria-labelledby="cityFaqHead1" data-bs-parent="#cityFaqCol1" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                                    <div class="accordion-body city-num-faq-body" itemprop="text">
                                        Charges depend on the total volume of goods, packaging grade (standard vs. 5-layer pro), transit distance from <?= esc($cityName) ?>, floor elevation, lift availability, and chosen transit insurance. We offer transparent itemized estimates with no hidden surprises.
                                    </div>
                                </div>
                            </div>

                            <!-- FAQ 2 -->
                            <div class="city-num-faq-item accordion-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                                <h3 class="accordion-header" id="cityFaqHead2">
                                    <button class="accordion-button city-num-faq-btn collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#cityFaqCol1_2" aria-expanded="false" aria-controls="cityFaqCol1_2" itemprop="name">
                                        <span class="city-num-faq-badge">02</span>
                                        <span>How many days in advance should I book my move?</span>
                                    </button>
                                </h3>
                                <div id="cityFaqCol1_2" class="accordion-collapse collapse" aria-labelledby="cityFaqHead2" data-bs-parent="#cityFaqCol1" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                                    <div class="accordion-body city-num-faq-body" itemprop="text">
                                        For local moves within <?= esc($cityName) ?>, 24 to 48 hours notice is sufficient. For interstate moves across India or during month-ends, booking 3 to 5 days in advance helps guarantee your preferred truck size and dedicated crew.
                                    </div>
                                </div>
                            </div>

                            <!-- FAQ 3 -->
                            <div class="city-num-faq-item accordion-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                                <h3 class="accordion-header" id="cityFaqHead3">
                                    <button class="accordion-button city-num-faq-btn collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#cityFaqCol1_3" aria-expanded="false" aria-controls="cityFaqCol1_3" itemprop="name">
                                        <span class="city-num-faq-badge">03</span>
                                        <span>Do you provide IBA approved bills for company claims?</span>
                                    </button>
                                </h3>
                                <div id="cityFaqCol1_3" class="accordion-collapse collapse" aria-labelledby="cityFaqHead3" data-bs-parent="#cityFaqCol1" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                                    <div class="accordion-body city-num-faq-body" itemprop="text">
                                        Yes! We provide 100% genuine IBA-approved moving bills, GST invoices, consignment notes (bilty), and car condition reports accepted by banks, defense establishments, PSUs, and MNCs for relocation reimbursement.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Column 2 (Q4 - Q6) -->
                    <div class="col-12 col-lg-6">
                        <div class="accordion" id="cityFaqCol2">
                            <!-- FAQ 4 -->
                            <div class="city-num-faq-item accordion-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                                <h3 class="accordion-header" id="cityFaqHead4">
                                    <button class="accordion-button city-num-faq-btn" type="button" data-bs-toggle="collapse" data-bs-target="#cityFaqCol2_1" aria-expanded="true" aria-controls="cityFaqCol2_1" itemprop="name">
                                        <span class="city-num-faq-badge">04</span>
                                        <span>How are fragile glassware and electronics protected?</span>
                                    </button>
                                </h3>
                                <div id="cityFaqCol2_1" class="accordion-collapse collapse show" aria-labelledby="cityFaqHead4" data-bs-parent="#cityFaqCol2" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                                    <div class="accordion-body city-num-faq-body" itemprop="text">
                                        We wrap delicate items in high-density air-bubble film, wrap LED/OLED TVs with foam corner cushions, and place crockery in double-walled corrugated cartons with foam pellets. Custom wooden crating is available on request.
                                    </div>
                                </div>
                            </div>

                            <!-- FAQ 5 -->
                            <div class="city-num-faq-item accordion-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                                <h3 class="accordion-header" id="cityFaqHead5">
                                    <button class="accordion-button city-num-faq-btn collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#cityFaqCol2_2" aria-expanded="false" aria-controls="cityFaqCol2_2" itemprop="name">
                                        <span class="city-num-faq-badge">05</span>
                                        <span>What items are restricted from being loaded in the truck?</span>
                                    </button>
                                </h3>
                                <div id="cityFaqCol2_2" class="accordion-collapse collapse" aria-labelledby="cityFaqHead5" data-bs-parent="#cityFaqCol2" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                                    <div class="accordion-body city-num-faq-body" itemprop="text">
                                        Hazardous chemicals, inflammable substances (petrol/diesel, gas cylinders), explosives, jewelry, cash, and personal confidential documents must not be loaded. Please carry valuable personal jewelry and documents personally.
                                    </div>
                                </div>
                            </div>

                            <!-- FAQ 6 -->
                            <div class="city-num-faq-item accordion-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                                <h3 class="accordion-header" id="cityFaqHead6">
                                    <button class="accordion-button city-num-faq-btn collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#cityFaqCol2_3" aria-expanded="false" aria-controls="cityFaqCol2_3" itemprop="name">
                                        <span class="city-num-faq-badge">06</span>
                                        <span>Is transit insurance included and how are claims handled?</span>
                                    </button>
                                </h3>
                                <div id="cityFaqCol2_3" class="accordion-collapse collapse" aria-labelledby="cityFaqHead6" data-bs-parent="#cityFaqCol2" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                                    <div class="accordion-body city-num-faq-body" itemprop="text">
                                        We offer comprehensive all-risk transit insurance from nationalized insurers. In the rare event of transit damage, our dedicated claims manager assists with photographic survey and prompt settlement.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ==========================================================================
     SECTION 6: Full-Width CTA Banner & Nearby Hubs (col-12)
     ========================================================================== -->
<section class="city-sec-wrap bg-light-soft pt-0" id="cityCtaHubs">
    <div class="container">
        <!-- Full-Width CTA Banner in col-12 -->
        <div class="row mb-5">
            <div class="col-12">
                <div class="city-cta-banner">
                    <div class="row align-items-center g-4">
                        <div class="col-12 col-lg-7">
                            <span class="badge bg-white text-primary fw-bold text-uppercase px-3 py-1.5 rounded-pill mb-2 shadow-sm">
                                <i class="bi bi-lightning-charge-fill text-warning"></i> Fast Response Within 15 Mins
                            </span>
                            <h3 class="city-cta-title">Planning Your Move in <?= esc($cityName) ?>?</h3>
                            <p class="city-cta-subtitle">
                                Speak with our verified moving coordinator for a customized relocation plan, transparent rates &amp; zero hidden surcharges.
                            </p>
                        </div>
                        <div class="col-12 col-lg-5">
                            <div class="city-cta-actions">
                                <a <?= $phonehtml ?> class="city-cta-btn-call" title="Call Coordinator">
                                    <i class="bi bi-telephone-fill text-primary"></i>
                                    <span><?= $phone ?></span>
                                </a>
                                <div class="city-cta-btn-row">
                                    <a href="<?= $whatsapphtml ?>?text=<?= urlencode('Hello ' . ($company3 ?? 'Rina Packers') . ', I need packers and movers in ' . $cityName . ', ' . $stateName . '.') ?>" target="_blank" rel="noopener noreferrer" class="city-cta-btn-wa" title="WhatsApp Chat">
                                        <i class="bi bi-whatsapp"></i>
                                        <span>WhatsApp</span>
                                    </a>
                                    <button type="button" class="city-cta-btn-quote" data-bs-toggle="modal" data-bs-target="#qteModal">
                                        <i class="bi bi-calculator"></i>
                                        <span>Get Quote</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Other Nearby Cities in State in col-12 -->
        <?php if (!empty($nearbyCities)): ?>
            <div class="row">
                <div class="col-12">
                    <div class="city-detail-card p-4">
                        <h4 class="city-detail-title fs-5 mb-3">
                            <i class="bi bi-geo-alt-fill text-primary me-2"></i>Other Service Hubs in <?= esc($stateName) ?>
                        </h4>
                        <div class="city-states-tag-list">
                            <?php foreach ($nearbyCities as $nc): 
                                $nName = is_array($nc) ? ($nc['nm'] ?? 'City') : (string)$nc;
                                $nSlug = strtolower(str_replace(' ', '-', $nName));
                            ?>
                                <a href="<?= site_url('city/' . $stateSlug . '/' . $nSlug) ?>" class="city-state-tag-pill">
                                    <i class="bi bi-geo-alt-fill text-primary me-1"></i> <?= esc($nName) ?>
                                </a>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        <?php endif; ?>
    </div>
</section>
