<!-- About Us Section (One Side Image + Changed Content Part) -->
<section class="section-about py-5 bg-white position-relative overflow-hidden" id="aboutSection">
    <div class="container py-2 py-lg-4">
        <div class="row g-4 g-lg-5 align-items-center">
            <!-- Left Column: Modern Image Card with Floating Badges -->
            <div class="col-12 col-lg-6">
                <div class="about-image-card position-relative overflow-hidden shadow-lg">
                    <!-- Main About Image (place your image at assets/img/about.webp or about.jpg) -->
                    <img src="<?= base_url('assets/img/slider.webp')?>" alt="<?= $company3 ?> Relocation Services" class="about-img" loading="lazy">

                    <!-- Floating Badge Top: Experience Tag -->
                    <div class="about-float-badge-top d-inline-flex align-items-center gap-2 rounded-pill px-3 py-2 text-white shadow">
                        <i class="bi bi-award-fill text-warning fs-5"></i>
                        <span class="small fw-bold">15+ Years of Safe Moving</span>
                    </div>

                    <!-- Floating Badge Bottom: Stats Card -->
                    <div class="about-float-badge-bottom p-3 bg-white rounded-4 shadow-lg d-flex align-items-center gap-3">
                        <div class="about-float-icon-box rounded-circle bg-primary text-white d-flex align-items-center justify-content-center flex-shrink-0 shadow-sm">
                            <i class="bi bi-shield-check fs-4"></i>
                        </div>
                        <div class="min-w-0">
                            <div class="fw-bold fs-6 text-dark text-truncate">25,000+ Happy Families</div>
                            <div class="small text-secondary text-truncate">100% Insured &amp; Zero Damage</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Column: Changed Modern Content Part -->
            <div class="col-12 col-lg-6">
                <!-- Section Eyebrow Badge -->
                <span class="badge bg-primary-subtle text-primary border border-primary-subtle rounded-pill px-3 py-2 fw-bold text-uppercase mb-2 shadow-sm">
                    <i class="bi bi-stars me-1 text-primary"></i> Certified Shifting Specialists
                </span>

                <!-- Main Title -->
                <h2 class="display-6 fw-bold text-dark mb-3">
                    Relocating Homes &amp; Offices With Utmost Care &amp; Trust
                </h2>

                <!-- Lead Story Copy -->
                <p class="text-secondary lead fs-6 mb-4 lh-base">
                    Since 2010, <strong><?= $company3 ?></strong> has been setting the gold standard in domestic and commercial relocations across India. We believe moving should be an exciting beginning—not an exhausting ordeal. Our IBA-certified protocols guarantee smooth transitions every time.
                </p>

                <!-- 2x2 Value Pillars Grid (Fresh Design replacing plain vertical boxes) -->
                <div class="row g-3 mb-4">
                    <!-- Pillar 1 -->
                    <div class="col-12 col-sm-6">
                        <div class="about-pillar-card h-100 d-flex align-items-start gap-2.5">
                            <div class="about-pillar-icon text-primary shadow-sm">
                                <i class="bi bi-box-seam-fill fs-5"></i>
                            </div>
                            <div>
                                <h3 class="fs-6 fw-bold text-dark mb-1">5-Layer Packing</h3>
                                <p class="text-secondary small mb-0 lh-sm">
                                    High-density bubble rolls, edge protectors &amp; custom crating for delicate glassware.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Pillar 2 -->
                    <div class="col-12 col-sm-6">
                        <div class="about-pillar-card h-100 d-flex align-items-start gap-2.5">
                            <div class="about-pillar-icon text-info shadow-sm">
                                <i class="bi bi-truck-flatbed fs-5"></i>
                            </div>
                            <div>
                                <h3 class="fs-6 fw-bold text-dark mb-1">GPS-Tracked Fleet</h3>
                                <p class="text-secondary small mb-0 lh-sm">
                                    Enclosed weatherproof container trucks with real-time WhatsApp satellite tracking.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Pillar 3 -->
                    <div class="col-12 col-sm-6">
                        <div class="about-pillar-card h-100 d-flex align-items-start gap-2.5">
                            <div class="about-pillar-icon text-success shadow-sm">
                                <i class="bi bi-shield-check fs-5"></i>
                            </div>
                            <div>
                                <h3 class="fs-6 fw-bold text-dark mb-1">Transit Insurance</h3>
                                <p class="text-secondary small mb-0 lh-sm">
                                    100% full-value transit protection with instant policy issuance &amp; cashless claims.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Pillar 4 -->
                    <div class="col-12 col-sm-6">
                        <div class="about-pillar-card h-100 d-flex align-items-start gap-2.5">
                            <div class="about-pillar-icon text-danger shadow-sm">
                                <i class="bi bi-clock-history fs-5"></i>
                            </div>
                            <div>
                                <h3 class="fs-6 fw-bold text-dark mb-1">On-Time Guarantee</h3>
                                <p class="text-secondary small mb-0 lh-sm">
                                    Committed doorstep delivery schedules with complete furniture unboxing &amp; setup.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Trust Guarantee Pill Strip (Clear Spacing, No Overlap) -->
                <div class="about-guarantee-pill rounded-pill bg-light border d-flex align-items-center justify-content-between mb-4">
                    <div class="d-flex align-items-center min-w-0">
                        <i class="bi bi-patch-check-fill text-success flex-shrink-0"></i>
                        <span class="small fw-bold text-dark text-nowrap">IBA Approved<span class="d-none d-sm-inline"> Movers</span><span class="about-guarantee-sep">•</span>500+ <span class="d-none d-md-inline">Indian </span>Cities<span class="d-none d-lg-inline"> Connected</span></span>
                    </div>
                    <span class="badge bg-primary rounded-pill small px-2.5 py-1 flex-shrink-0 ms-2">Verified</span>
                </div>

                <!-- Call to Action Buttons (Exactly 2 Buttons, Single Row on Mobile) -->
                <div class="about-action-buttons d-flex align-items-center gap-2 gap-sm-3">
                    <a href="<?= site_url('about') ?>" class="btn btn-about-action-primary text-nowrap" title="About Us">
                        <span>About Us</span>
                        <i class="bi bi-arrow-right"></i>
                    </a>
                    <a <?= $phonehtml ?> class="btn btn-about-action-call text-nowrap" title="Call Helpline">
                        <i class="bi bi-telephone-fill"></i>
                        <span class="text-nowrap"><?= $phone ?></span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
