<?php
// All 8 Services Data Directly Defined in This Widget (Easily Editable Here)
$servicesList = [
    [
        'num'      => '01',
        'slug'     => 'household-moving',
        'title'    => 'House Shifting',
        'badge'    => 'Home Relocation',
        'icon'     => 'bi-house-door-fill',
        'desc'     => 'Complete door-to-door home relocation with 5-layer bubble packaging, specialized wardrobe boxes, and careful furniture assembly.',
        'features' => ['Zero damage guarantee', 'Custom crating for glassware']
    ],
    [
        'num'      => '02',
        'slug'     => 'office-relocation',
        'title'    => 'Office Relocation',
        'badge'    => 'Office Move',
        'icon'     => 'bi-building-fill',
        'desc'     => 'Minimal downtime workplace shifting, server racks handling, modular workstation relocation, and confidential files archiving.',
        'features' => ['Weekend & night shifting', 'IT & server equipment care']
    ],
    [
        'num'      => '03',
        'slug'     => 'vehicle-transportation',
        'title'    => 'Vehicle Transportation',
        'badge'    => 'Vehicle Transit',
        'icon'     => 'bi-car-front-fill',
        'desc'     => 'Dedicated enclosed multi-car carriers and customized wooden crating for sports bikes with transit tracking from start to finish.',
        'features' => ['Covered car trailers', 'Pre-transit scratch inspection']
    ],
    [
        'num'      => '04',
        'slug'     => 'loading-unloading',
        'title'    => 'Loading & Unloading',
        'badge'    => 'Loading Care',
        'icon'     => 'bi-truck-flatbed',
        'desc'     => 'Trained, background-checked ground crew equipped with hydraulic lifters, ramps, dollies, and safety belts for heavy equipment.',
        'features' => ['Hydraulic lifting tools', 'Trained & courteous crew']
    ],
    [
        'num'      => '05',
        'slug'     => 'packing-moving',
        'title'    => 'Packing & Unpacking',
        'badge'    => '5-Layer Pack',
        'icon'     => 'bi-box-seam-fill',
        'desc'     => 'Heavy duty double-wall corrugated cartons, air bubble rolls, foam corners, stretch wrap, and edge protectors for total safety.',
        'features' => ['Premium packaging material', 'Labelled item inventory']
    ],
    [
        'num'      => '06',
        'slug'     => 'warehouse-storage',
        'title'    => 'Storage Solutions',
        'badge'    => 'CCTV Storage',
        'icon'     => 'bi-archive-fill',
        'desc'     => '24x7 CCTV monitored, moisture-controlled short and long-term storage facilities with flexible monthly billing plans.',
        'features' => ['Pest-controlled space', 'Fire safety equipped']
    ],
    [
        'num'      => '07',
        'slug'     => 'local-shifting',
        'title'    => 'Local Shifting',
        'badge'    => 'Local Shifting',
        'icon'     => 'bi-geo-alt-fill',
        'desc'     => 'Quick, hassle-free same-day intra-city shifting for apartments, villas, and small offices with dedicated local mini-trucks.',
        'features' => ['Same-day local delivery', 'GPS tracked fleet']
    ],
    [
        'num'      => '08',
        'slug'     => 'insurance-coverage',
        'title'    => 'Insurance Coverage',
        'badge'    => 'Transit Cover',
        'icon'     => 'bi-shield-check',
        'desc'     => 'Comprehensive transit and accidental risk insurance cover with swift 100% cashless claims settlement for complete peace of mind.',
        'features' => ['Full transit value cover', 'Cashless claims assistance']
    ],
];
?>
<!-- Relocation Services Section (Unique Pod Card Design - 2 Rows x 4 Services) -->
<section class="section-services py-5 bg-light position-relative" id="servicesSection">
    <div class="container py-2 py-lg-4">
        <!-- Section Header -->
        <div class="text-center mb-4 mb-lg-5">
            <span class="badge bg-primary-subtle text-primary border border-primary-subtle rounded-pill px-3 py-2 fw-bold text-uppercase mb-2 shadow-sm">
                <i class="bi bi-stars me-1 text-primary"></i> Our Relocation Services
            </span>
            <h2 class="display-6 fw-bold text-dark mb-2">Comprehensive Moving &amp; Packing Solutions</h2>
            <p class="text-secondary mx-auto lead fs-6 col-12 col-md-8 col-lg-7">
                Professional, IBA-approved door-to-door shifting services tailored to your budget and schedule across 500+ Indian cities.
            </p>
        </div>

        <!-- 8 Services Grid: Exactly 4 per row on Desktop (2 rows of 4) -->
        <div class="row g-3 g-xl-4">
            <?php foreach ($servicesList as $srv):
                $srvFeatures = $srv['features'] ?? [];
            ?>
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="service-pod-card position-relative h-100 d-flex flex-column bg-white">
                        <!-- Top Tri-Tone Gradient Accent Ribbon -->
                        <div class="service-pod-top-ribbon" aria-hidden="true"></div>

                        <div class="service-pod-body p-3 p-xl-4 d-flex flex-column flex-grow-1">
                            <!-- Top Header in ONE Single Row: Icon Pod + Category Badge + Watermark Number -->
                            <div class="d-flex align-items-center justify-content-between gap-2 mb-3">
                                <div class="d-flex align-items-center gap-2 min-w-0">
                                    <!-- Squircle Icon Pod with Cyan Halo Glow -->
                                    <div class="service-icon-pod d-flex align-items-center justify-content-center text-white flex-shrink-0">
                                        <i class="bi <?= esc($srv['icon']) ?>"></i>
                                    </div>
                                    <!-- Category Badge in Same Row -->
                                    <span class="service-category-badge text-truncate">
                                        <i class="bi bi-patch-check-fill text-primary flex-shrink-0"></i>
                                        <span class="text-truncate"><?= esc($srv['badge']) ?></span>
                                    </span>
                                </div>

                                <!-- Stylized Watermark Sequence Number -->
                                <div class="service-watermark-num fw-bold flex-shrink-0">
                                    <?= esc($srv['num']) ?>
                                </div>
                            </div>

                            <!-- Title -->
                            <h3 class="service-pod-title mb-2">
                                <a href="<?= site_url('services/' . esc($srv['slug'])) ?>" class="text-decoration-none">
                                    <?= esc($srv['title']) ?>
                                </a>
                            </h3>

                            <!-- Short Description -->
                            <p class="service-pod-desc small mb-3 flex-grow-1">
                                <?= esc($srv['desc']) ?>
                            </p>

                            <!-- Feature Chips (Modern UI Capsule Badges) -->
                            <?php if (!empty($srvFeatures)): ?>
                                <div class="service-feature-chips d-flex flex-column gap-1 mb-3">
                                    <?php foreach (array_slice($srvFeatures, 0, 2) as $feat): ?>
                                        <div class="service-feature-chip">
                                            <i class="bi bi-check2-circle text-primary flex-shrink-0"></i>
                                            <span class="text-truncate"><?= esc($feat) ?></span>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            <?php endif; ?>

                            <!-- Bottom Action Footer -->
                            <div class="service-pod-footer pt-3 mt-auto border-top d-flex align-items-center justify-content-between gap-2">
                                <a href="<?= site_url(esc($srv['slug'])) ?>" class="service-explore-link d-inline-flex align-items-center gap-1 fw-bold" title="View details of <?= esc($srv['title']) ?>">
                                    <span>Details</span>
                                    <span class="service-explore-arrow"><i class="bi bi-arrow-right"></i></span>
                                </a>
                                <button type="button" class="btn btn-sm btn-service-pod-book rounded-pill fw-bold d-inline-flex align-items-center gap-1 shadow-sm" data-bs-toggle="modal" data-bs-target="#qteModal" title="Book <?= esc($srv['title']) ?>">
                                    <i class="bi bi-send-fill"></i>
                                    <span>Book</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <!-- Section Bottom CTA Callout Strip -->
        <div class="mt-4 mt-lg-5 p-3 p-md-4 rounded-4 text-white shadow-sm service-cta-strip d-flex flex-column flex-md-row align-items-center justify-content-between gap-3">
            <div class="d-flex align-items-center gap-3 text-center text-md-start">
                <div class="service-cta-icon-box rounded-circle d-none d-sm-flex align-items-center justify-content-center flex-shrink-0">
                    <i class="bi bi-headset fs-3 text-white"></i>
                </div>
                <div>
                    <div class="fw-bold fs-5 mb-1">Need a Customized Relocation Package?</div>
                    <div class="text-white-50 small">Talk to our senior logistics coordinator for free site inspection &amp; instant rates.</div>
                </div>
            </div>
            <div class="service-cta-actions d-flex align-items-center gap-2">
                <a <?= $phonehtml ?> class="btn btn-service-cta-call text-nowrap" title="Call Helpline">
                    <i class="bi bi-telephone-fill"></i>
                    <span class="text-nowrap"><?= $phone ?></span>
                </a>
                <button type="button" class="btn btn-service-cta-quote text-nowrap" data-bs-toggle="modal" data-bs-target="#qteModal" title="Get Free Quote">
                    <span class="text-nowrap">Quick Quote</span>
                </button>
            </div>
        </div>
    </div>
</section>
