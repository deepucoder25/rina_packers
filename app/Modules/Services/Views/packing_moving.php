<?php
$serviceTitle = $service['title'] ?? 'Packing & Unpacking';

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
        <p class="about-hero-desc">High-grade bubble rolls, corrugated cardboard, stretch film, and custom boxes for every precious possession.</p>
    </div>
</section>


<!-- Main Full-Width Content Container -->
<section class="py-5 bg-white">
    <div class="container">
        <!-- Main Service Overview Card -->
        <div class="svc-overview-card mb-5">
            <div class="d-flex align-items-center gap-3 mb-3">
                <div class="svc-icon-box mb-0 flex-shrink-0">
                    <i class="bi bi-box-seam-fill"></i>
                </div>
                <h2 class="h3 fw-bold text-dark mb-0">5-Layer Protective Packing &amp; Unpacking</h2>
            </div>
            <p class="text-muted leading-relaxed mb-0">
                High standard packaging is the core difference between broken items and a successful move. We bring certified boxes, bubble wraps, corrugated sheets, and moisture barrier stretch films to pack every single household or office asset safely.
            </p>
        </div>

        <!-- 4 Key Advantages Grid -->
        <div class="mb-5">
            <div class="text-center mb-4">
                <span class="badge bg-primary-subtle text-primary rounded-pill px-3 py-1.5 fw-bold mb-2">Packing Materials</span>
                <h3 class="h4 fw-bold text-dark">Industrial Grade Safety Supplies</h3>
            </div>
            <div class="row g-3 g-lg-4">
                <div class="col-sm-6 col-lg-3">
                    <div class="svc-feature-box">
                        <div class="d-flex align-items-center gap-2 mb-2">
                            <div class="svc-feat-icon mb-0 flex-shrink-0">
                                <i class="bi bi-layers-fill"></i>
                            </div>
                            <h4 class="h6 fw-bold text-dark mb-0">5-Layer Heavy Cartons</h4>
                        </div>
                        <p class="text-muted small mb-0">Double-flute corrugated boxes that resist heavy weight stacking without buckling.</p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="svc-feature-box">
                        <div class="d-flex align-items-center gap-2 mb-2">
                            <div class="svc-feat-icon mb-0 flex-shrink-0">
                                <i class="bi bi-water"></i>
                            </div>
                            <h4 class="h6 fw-bold text-dark mb-0">Moisture Stretch Wrap</h4>
                        </div>
                        <p class="text-muted small mb-0">Transparent cling wrap creating an airtight seal against monsoon rain and dust.</p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="svc-feature-box">
                        <div class="d-flex align-items-center gap-2 mb-2">
                            <div class="svc-feat-icon mb-0 flex-shrink-0">
                                <i class="bi bi-circle-square"></i>
                            </div>
                            <h4 class="h6 fw-bold text-dark mb-0">Shock Absorber Foam</h4>
                        </div>
                        <p class="text-muted small mb-0">Edge protectors and high-density foam padding protecting TV displays and glass tops.</p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="svc-feature-box">
                        <div class="d-flex align-items-center gap-2 mb-2">
                            <div class="svc-feat-icon mb-0 flex-shrink-0">
                                <i class="bi bi-trash3-fill"></i>
                            </div>
                            <h4 class="h6 fw-bold text-dark mb-0">Carton Debris Cleanup</h4>
                        </div>
                        <p class="text-muted small mb-0">After careful unpacking, our crew removes all scrap wraps and empty boxes for you.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Step-by-Step Moving Process -->
        <div class="mb-5">
            <div class="text-center mb-4">
                <span class="badge bg-primary-subtle text-primary rounded-pill px-3 py-1.5 fw-bold mb-2">How We Pack</span>
                <h3 class="h4 fw-bold text-dark">Step-by-Step Packing Flow</h3>
            </div>
            <div class="row g-3 g-lg-4">
                <div class="col-sm-6 col-lg-3">
                    <div class="svc-step-card">
                        <span class="svc-step-badge">Step 01</span>
                        <h4 class="h6 fw-bold text-dark mb-2">Sorting by Fragility</h4>
                        <p class="text-muted small mb-0">Separating fine bone china, electronics, clothes, and books into designated zones.</p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="svc-step-card">
                        <span class="svc-step-badge">Step 02</span>
                        <h4 class="h6 fw-bold text-dark mb-2">Bubble &amp; Paper Layer</h4>
                        <p class="text-muted small mb-0">Each individual fragile dish and ornament wrapped separately in shockproof paper.</p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="svc-step-card">
                        <span class="svc-step-badge">Step 03</span>
                        <h4 class="h6 fw-bold text-dark mb-2">Color Coded Labels</h4>
                        <p class="text-muted small mb-0">Box tags clearly marked with room name and handling arrows for quick unboxing.</p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="svc-step-card">
                        <span class="svc-step-badge">Step 04</span>
                        <h4 class="h6 fw-bold text-dark mb-2">Destination Unpack</h4>
                        <p class="text-muted small mb-0">Unwrapping items, verifying condition, and placing goods directly into cabinets.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Full-Width Bottom CTA Banner -->
        <div class="svc-full-cta"><div class="row align-items-center g-3"><div class="col-12 text-center"><h3 class="h4 fw-bold text-white mb-2">Need Professional Packing Materials?</h3>
                    <p class="text-white-50 mb-0">Get premium packing services or purchase heavy corrugated moving carton kits.</p></div></div></div>
    </div>
</section>
