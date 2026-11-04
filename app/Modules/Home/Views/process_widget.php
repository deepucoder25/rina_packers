<?php
// 6 Process Steps Configured for 1 Single Row on Desktop with Round Stepper Nodes
$processSteps = [
    [
        'step'  => '01',
        'icon'  => 'bi-clipboard2-check-fill',
        'title' => 'Book & Survey',
        'desc'  => 'Share moving details or book a free doorstep survey.'
    ],
    [
        'step'  => '02',
        'icon'  => 'bi-receipt-cutoff',
        'title' => 'Fixed Quote',
        'desc'  => 'Transparent all-inclusive quote with zero hidden charges.'
    ],
    [
        'step'  => '03',
        'icon'  => 'bi-box-seam-fill',
        'title' => '5-Layer Pack',
        'desc'  => 'Heavy bubble wrap, corrugated sheets & custom crating.'
    ],
    [
        'step'  => '04',
        'icon'  => 'bi-truck-flatbed',
        'title' => 'Safe Loading',
        'desc'  => 'Hydraulic lifters and verified crew for container load.'
    ],
    [
        'step'  => '05',
        'icon'  => 'bi-geo-alt-fill',
        'title' => 'GPS Transit',
        'desc'  => 'Weatherproof container with live satellite tracking.'
    ],
    [
        'step'  => '06',
        'icon'  => 'bi-house-check-fill',
        'title' => 'Unpack & Setup',
        'desc'  => 'Doorstep delivery, furniture assembly & item placement.'
    ]
];

$cleanPhone = preg_replace('/[^0-9+]/', '', $phone ?? '');
?>
<!-- Relocation Process Section (6 Steps in 1 Row on Desktop with Round Design) -->
<section class="section-process py-5 bg-light position-relative" id="processSection">
    <div class="container py-2 py-lg-4">
        <!-- Section Header -->
        <div class="text-center mb-4 mb-lg-5">
            <span class="badge bg-primary-subtle text-primary border border-primary-subtle rounded-pill px-3 py-2 fw-bold text-uppercase mb-2 shadow-sm">
                <i class="bi bi-arrow-repeat me-1 text-primary"></i> 6-Step Round Stepper
            </span>
            <h2 class="display-6 fw-bold text-dark mb-2">Our Seamless 6-Step Relocation Journey</h2>
            <p class="text-secondary mx-auto lead fs-6 col-12 col-md-8 col-lg-7">
                From initial booking to final doorstep setup, experience a disciplined, transparent moving workflow.
            </p>
        </div>

        <!-- 6 Steps in 1 Single Row on Desktop (col-lg-2) with Connected Track Line -->
        <div class="position-relative">
            <!-- Connected Track Line (Desktop Only >= 992px) -->
            <div class="process-track-line d-none d-lg-block" aria-hidden="true"></div>

            <!-- Steps Grid -->
            <div class="row g-2 g-xl-3 position-relative">
                <?php foreach ($processSteps as $st): ?>
                    <div class="col-6 col-md-4 col-lg-2">
                        <div class="process-round-card h-100 text-center p-3 p-xl-2.5 d-flex flex-column align-items-center">
                            <!-- Round Node Container -->
                            <div class="process-round-circle-wrap position-relative mb-2.5">
                                <!-- Outer Circle -->
                                <div class="process-round-circle shadow-sm">
                                    <!-- Inner Gradient Circle with Icon -->
                                    <div class="process-inner-circle">
                                        <i class="bi <?= esc($st['icon']) ?> fs-4"></i>
                                    </div>
                                </div>
                                <!-- Floating Step Badge on Rim -->
                                <span class="process-step-badge-num"><?= esc($st['step']) ?></span>
                            </div>

                            <!-- Step Pill Tag -->
                            <span class="process-step-tag-pill mb-2">
                                STEP <?= esc($st['step']) ?>
                            </span>

                            <!-- Title -->
                            <h3 class="process-round-title mb-1.5">
                                <?= esc($st['title']) ?>
                            </h3>

                            <!-- Short Description -->
                            <p class="process-round-desc text-secondary small mb-0 lh-sm">
                                <?= esc($st['desc']) ?>
                            </p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>

        <!-- Reassurance Footer CTA Card / Pill -->
        <div class="text-center mt-4 mt-lg-5 px-2">
            <div class="process-cta-pill">
                <span class="small fw-semibold text-secondary d-flex align-items-center justify-content-center text-center text-md-start">
                    <i class="bi bi-shield-check text-primary me-2 fs-5 flex-shrink-0"></i>
                    <span>Ready to experience a stress-free relocation?</span>
                </span>
                <button type="button" class="btn btn-sm btn-primary rounded-pill px-4 py-2 py-md-1.5 fw-bold shadow-sm text-nowrap" data-bs-toggle="modal" data-bs-target="#qteModal">
                    <span>Book Your Move Today</span>
                    <i class="bi bi-arrow-right ms-1"></i>
                </button>
            </div>
        </div>
    </div>
</section>
