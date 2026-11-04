<?php
$advantages = [
    [
        'icon'  => 'bi-shield-check',
        'title' => '100% Insured Transit',
        'desc'  => 'Comprehensive transit insurance policy for complete peace of mind throughout the journey.'
    ],
    [
        'icon'  => 'bi-clock-history',
        'title' => 'On-Time Guarantee',
        'desc'  => 'Strict schedule compliance with live GPS tracking updates and committed delivery windows.'
    ],
    [
        'icon'  => 'bi-tag-fill',
        'title' => 'Transparent Rates',
        'desc'  => 'Zero hidden charges, upfront transparent quotes with no surprise toll or packaging costs.'
    ],
    [
        'icon'  => 'bi-person-badge-fill',
        'title' => 'Trained & Verified Crew',
        'desc'  => 'Background-checked movers who handle delicate electronics, antiques, and heavy furniture.'
    ],
    [
        'icon'  => 'bi-truck-flatbed',
        'title' => 'Nationwide Container Fleet',
        'desc'  => 'Modern fleet of weatherproof enclosed container trucks connecting 500+ Indian cities.'
    ],
    [
        'icon'  => 'bi-headset',
        'title' => '24x7 Dedicated Officer',
        'desc'  => 'A personal relocation officer assigned to guide you from pickup survey until final unboxing.'
    ],
];
?>
<!-- Why Choose Us Section (Responsive Advantages Grid) -->
<section class="section-why-choose py-5 bg-white position-relative" id="whyChooseSection">
    <div class="container py-2 py-lg-4">
        <!-- Section Header -->
        <div class="text-center mb-4 mb-lg-5">
            <span class="badge bg-primary-subtle text-primary border border-primary-subtle rounded-pill px-3 py-2 fw-bold text-uppercase mb-2 shadow-sm">
                <i class="bi bi-award-fill me-1 text-primary"></i> Core Advantages
            </span>
            <h2 class="display-6 fw-bold text-dark mb-2">Why Choose Us For Your Move?</h2>
            <p class="text-secondary mx-auto lead fs-6 col-12 col-md-8 col-lg-7">
                We combine proven logistics expertise with customer-first protocols to deliver a flawless shifting experience.
            </p>
        </div>

        <!-- 6 Advantage Cards Grid (3 cols on desktop, 2 on tablet, 1 on mobile) -->
        <div class="row g-3 g-lg-4">
            <?php foreach ($advantages as $w): ?>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="card h-100 border-0 rounded-4 shadow-sm bg-light p-4 why-card d-flex flex-row align-items-start gap-3">
                        <div class="why-icon-box rounded-3 bg-primary text-white d-flex align-items-center justify-content-center flex-shrink-0 shadow-sm">
                            <i class="bi <?= esc($w['icon']) ?> fs-4"></i>
                        </div>
                        <div>
                            <h3 class="fs-6 fw-bold text-dark mb-1"><?= esc($w['title']) ?></h3>
                            <p class="text-secondary small mb-0 lh-sm"><?= esc($w['desc']) ?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
