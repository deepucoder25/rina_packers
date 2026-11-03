<?php
$currentPage = $page ?? '';
$wh          = $workingHours ?? ($site->workingHours ?? 'Mon - Sat: 9:00 AM - 8:00 PM');
?>
<!-- Top Quick-Info Bar -->
<div class="site-topbar py-1 py-md-2">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center flex-wrap gap-2">
            <!-- Left Info Items -->
            <div class="d-flex align-items-center flex-wrap gap-2 gap-md-3">
                <!-- Phone 1 -->
                <a <?= $phonehtml ?> class="topbar-item topbar-phone" title="Call <?= esc($phone ?? '') ?>">
                    <i class="bi bi-telephone-fill"></i>
                    <span><?= $phone ?></span>
                </a>

                <!-- Phone 2 -->
                <span class="topbar-sep d-none d-md-inline">|</span>
                <a <?= $phonehtml1 ?> class="topbar-item topbar-phone d-none d-md-inline-flex" title="Call <?= $phone1 ?>">
                    <i class="bi bi-telephone-fill"></i>
                    <span><?=$phone1 ?></span>
                </a>

                <!-- WhatsApp -->
                <span class="topbar-sep d-none d-sm-inline">|</span>
                <a href="<?= $whatsapphtml ?>" target="_blank" rel="noopener noreferrer" class="topbar-item topbar-whatsapp d-none d-sm-inline-flex" title="Chat on WhatsApp">
                    <i class="bi bi-whatsapp"></i>
                    <span>WhatsApp</span>
                </a>

                <!-- Email -->
                <?php if (!empty($mail)): ?>
                <span class="topbar-sep d-none d-lg-inline">|</span>
                <a href="<?= esc($mailhtml ?? ('mailto:' . $mail)) ?>" class="topbar-item topbar-mail d-none d-lg-inline-flex" title="Email Us">
                    <i class="bi bi-envelope-fill"></i>
                    <span><?= esc($mail) ?></span>
                </a>
                <?php endif; ?>

                <!-- Working Hours -->
                <?php if (!empty($wh)): ?>
                <span class="topbar-sep d-none d-xl-inline">|</span>
                <span class="topbar-item topbar-hours d-none d-xl-inline-flex">
                    <i class="bi bi-clock-fill"></i>
                    <span><?= esc($wh) ?></span>
                </span>
                <?php endif; ?>
            </div>

            <!-- Right Info Items (Admin Removed) -->
            <div class="d-flex align-items-center gap-2 gap-md-3 ms-auto">
                <!-- Track Consignment Pill -->
                <a href="<?= site_url('tracking') ?>" class="topbar-track-pill" title="Track Your Shipment">
                    <i class="bi bi-geo-alt-fill"></i>
                    <span>Track Order</span>
                </a>

                <!-- Trust Badge -->
                <span class="topbar-trust-badge d-none d-sm-inline-flex">
                    <i class="bi bi-patch-check-fill"></i>
                    <span>Verified Movers</span>
                </span>
            </div>
        </div>
    </div>
</div>

<!-- Main Navigation Header (Clean Solid Background) -->
<header class="site-header sticky-top bg-white border-bottom shadow-sm">
    <div class="container">
        <div class="d-flex align-items-center justify-content-between">
            <!-- 1. Brand Logo Image -->
            <a class="navbar-brand d-inline-flex align-items-center m-0 p-0 text-decoration-none" href="<?= site_url('/') ?>">
                <img src="<?= base_url('assets/img/logo/logo.png') ?>" alt="<?= esc($company3 ?? 'Rina Packers') ?>" class="site-logo">
            </a>

            <!-- Right Controls: 2. Call Capsule (Tablet/Desktop), 3. Get Quote Btn, 4. Hamburger -->
            <div class="d-flex align-items-center gap-2 gap-sm-3">
                <!-- 2. Call Capsule with Both Numbers Stacked in Two Rows (Hidden on mobile < md) -->
                <div class="nav-call-capsule rounded-pill d-none d-md-inline-flex align-items-center gap-2">
                    <span class="live-pulse-dot" title="Live Available 24x7"></span>
                    <i class="bi bi-telephone-fill text-primary"></i>
                    <div class="nav-phones-stacked">
                        <a <?= $phonehtml ?> class="nav-phone-link" title="Call <?= $phone ?>">
                            <?= $phone ?>
                        </a>
                        <a <?= $phonehtml1 ?> class="nav-phone-link" title="Call <?= $phone1 ?>">
                            <?= $phone1 ?>
                        </a>
                    </div>
                </div>

                <!-- 3. Get Quote Button with Depth & Shimmer -->
                <button type="button" class="btn btn-nav-quote rounded-pill d-inline-flex align-items-center gap-1 gap-sm-2 fw-bold" data-bs-toggle="modal" data-bs-target="#qteModal">
                    <i class="bi bi-send-fill"></i>
                    <span class="nav-quote-text"><span class="d-none d-lg-inline">Get Free </span><span class="d-lg-none">Get </span>Quote</span>
                </button>

                <!-- 4. Hamburger Menu Button -->
                <button class="btn btn-nav-hamburger d-inline-flex align-items-center justify-content-center p-0 rounded-3 shadow-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#siteMenuOffcanvas" aria-controls="siteMenuOffcanvas" aria-label="Toggle navigation menu" title="Open Navigation Menu">
                    <i class="bi bi-list fs-3 lh-1"></i>
                </button>
            </div>
        </div>
    </div>
</header>

<!-- Fullscreen Navigation Menu (Triggered by Hamburger Button) -->
<div class="offcanvas offcanvas-end offcanvas-fullscreen" tabindex="-1" id="siteMenuOffcanvas" aria-labelledby="siteMenuOffcanvasLabel">
    <div class="offcanvas-header border-bottom py-3 px-3 px-md-4 px-lg-5 bg-white">
        <div class="container d-flex align-items-center justify-content-between p-0">
            <!-- Brand Logo -->
            <a class="d-inline-flex align-items-center text-decoration-none m-0" href="<?= site_url('/') ?>" id="siteMenuOffcanvasLabel">
                <img src="<?= base_url('assets/img/logo/logo.png') ?>" alt="<?= esc($company3 ?? 'Rina Packers') ?>" class="site-logo">
            </a>

            <!-- Right Controls: Badge + Big Close Button -->
            <div class="d-flex align-items-center gap-2 gap-sm-3">
                <span class="badge bg-primary-subtle text-primary border border-primary-subtle rounded-pill px-3 py-2 d-none d-md-inline-flex align-items-center gap-1">
                    <i class="bi bi-shield-check"></i> Verified Movers
                </span>
                <button type="button" class="btn-menu-close shadow-none" data-bs-dismiss="offcanvas" aria-label="Close" title="Close Menu">
                    <i class="bi bi-x-lg"></i>
                </button>
            </div>
        </div>
    </div>

    <div class="offcanvas-body p-3 p-md-4 p-lg-5">
        <div class="container-fluid px-2 px-md-4 px-lg-5 py-2 py-lg-3">
            <div class="row g-4 g-xl-5 align-items-start">
                <!-- Col 1: Main Pages & Navigation -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="fs-menu-heading"><i class="bi bi-compass me-1"></i> Quick Navigation</div>
                    <div class="d-flex flex-column gap-2">
                        <!-- Home -->
                        <a class="fs-menu-link <?= ($currentPage === 'home') ? 'active' : '' ?>" href="<?= site_url('/') ?>">
                            <span class="d-inline-flex align-items-center">
                                <i class="bi bi-house-door link-icon"></i>
                                <span>Home</span>
                            </span>
                            <i class="bi bi-arrow-right-short arrow-icon"></i>
                        </a>

                        <!-- About Us -->
                        <a class="fs-menu-link <?= ($currentPage === 'about') ? 'active' : '' ?>" href="<?= site_url('about') ?>">
                            <span class="d-inline-flex align-items-center">
                                <i class="bi bi-info-circle link-icon"></i>
                                <span>About Us</span>
                            </span>
                            <i class="bi bi-arrow-right-short arrow-icon"></i>
                        </a>

                        <!-- Cities & States -->
                        <a class="fs-menu-link <?= ($currentPage === 'city') ? 'active' : '' ?>" href="<?= site_url('city') ?>">
                            <span class="d-inline-flex align-items-center">
                                <i class="bi bi-geo-alt link-icon"></i>
                                <span>Cities &amp; States</span>
                            </span>
                            <i class="bi bi-arrow-right-short arrow-icon"></i>
                        </a>

                        <!-- Order Tracking -->
                        <a class="fs-menu-link <?= ($currentPage === 'tracking') ? 'active' : '' ?>" href="<?= site_url('tracking') ?>">
                            <span class="d-inline-flex align-items-center">
                                <i class="bi bi-truck link-icon"></i>
                                <span>Order Tracking</span>
                            </span>
                            <span class="badge bg-danger-subtle text-danger border border-danger-subtle rounded-pill px-2 py-0.5 small">Live</span>
                        </a>

                        <!-- Customer Reviews -->
                        <a class="fs-menu-link <?= ($currentPage === 'reviews' || $currentPage === 'testimonials') ? 'active' : '' ?>" href="<?= site_url('reviews') ?>">
                            <span class="d-inline-flex align-items-center">
                                <i class="bi bi-star-fill link-icon text-warning"></i>
                                <span>Customer Reviews</span>
                            </span>
                            <span class="badge bg-warning-subtle text-dark border border-warning-subtle rounded-pill px-2 py-0.5 small">4.9 ★</span>
                        </a>

                        <!-- Photo Gallery -->
                        <a class="fs-menu-link <?= (strpos($currentPage, 'gallery') !== false) ? 'active' : '' ?>" href="<?= site_url('photo-gallery') ?>">
                            <span class="d-inline-flex align-items-center">
                                <i class="bi bi-images link-icon"></i>
                                <span>Photo Gallery</span>
                            </span>
                            <i class="bi bi-arrow-right-short arrow-icon"></i>
                        </a>

                        <!-- Blog & Updates -->
                        <a class="fs-menu-link <?= (strpos($currentPage, 'blog') === 0) ? 'active' : '' ?>" href="<?= site_url('blog') ?>">
                            <span class="d-inline-flex align-items-center">
                                <i class="bi bi-newspaper link-icon"></i>
                                <span>Blog &amp; Updates</span>
                            </span>
                            <i class="bi bi-arrow-right-short arrow-icon"></i>
                        </a>

                        <!-- Contact Us -->
                        <a class="fs-menu-link <?= ($currentPage === 'contact') ? 'active' : '' ?>" href="<?= site_url('contact') ?>">
                            <span class="d-inline-flex align-items-center">
                                <i class="bi bi-envelope link-icon"></i>
                                <span>Contact Us</span>
                            </span>
                            <i class="bi bi-arrow-right-short arrow-icon"></i>
                        </a>
                    </div>
                </div>

                <!-- Col 2: All Relocation Services (Shown directly) -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="fs-menu-heading"><i class="bi bi-box-seam me-1"></i> All Services</div>
                    <div class="d-flex flex-column gap-2">
                        <!-- 1. Household Moving -->
                        <a class="fs-service-link" href="<?= site_url('services/household-moving') ?>" title="Household Moving">
                            <span class="d-inline-flex align-items-center">
                                <span class="service-icon-box"><i class="bi bi-house-heart"></i></span>
                                <span>Household Moving</span>
                            </span>
                            <i class="bi bi-chevron-right service-arrow"></i>
                        </a>

                        <!-- 2. Office Relocation -->
                        <a class="fs-service-link" href="<?= site_url('services/office-relocation') ?>" title="Office Corporate Relocation">
                            <span class="d-inline-flex align-items-center">
                                <span class="service-icon-box"><i class="bi bi-briefcase"></i></span>
                                <span>Office Relocation</span>
                            </span>
                            <i class="bi bi-chevron-right service-arrow"></i>
                        </a>

                        <!-- 3. Car & Bike Transport -->
                        <a class="fs-service-link" href="<?= site_url('services/vehicle-transportation') ?>" title="Car & Bike Transportation">
                            <span class="d-inline-flex align-items-center">
                                <span class="service-icon-box"><i class="bi bi-car-front"></i></span>
                                <span>Car &amp; Bike Transport</span>
                            </span>
                            <i class="bi bi-chevron-right service-arrow"></i>
                        </a>

                        <!-- 4. Warehouse & Storage -->
                        <a class="fs-service-link" href="<?= site_url('services/warehouse-storage') ?>" title="Warehouse & Storage">
                            <span class="d-inline-flex align-items-center">
                                <span class="service-icon-box"><i class="bi bi-building"></i></span>
                                <span>Warehouse Storage</span>
                            </span>
                            <i class="bi bi-chevron-right service-arrow"></i>
                        </a>

                        <!-- 5. Packing & Moving -->
                        <a class="fs-service-link" href="<?= site_url('services/packing-moving') ?>" title="Packing & Moving">
                            <span class="d-inline-flex align-items-center">
                                <span class="service-icon-box"><i class="bi bi-box-seam"></i></span>
                                <span>Packing &amp; Moving</span>
                            </span>
                            <i class="bi bi-chevron-right service-arrow"></i>
                        </a>

                        <!-- 6. Loading & Unloading -->
                        <a class="fs-service-link" href="<?= site_url('services/loading-unloading') ?>" title="Loading & Unloading">
                            <span class="d-inline-flex align-items-center">
                                <span class="service-icon-box"><i class="bi bi-truck"></i></span>
                                <span>Loading &amp; Unloading</span>
                            </span>
                            <i class="bi bi-chevron-right service-arrow"></i>
                        </a>

                        <!-- 7. View All Services CTA -->
                        <a class="fs-service-all-btn mt-1" href="<?= site_url('services') ?>">
                            <span class="d-inline-flex align-items-center gap-2">
                                <i class="bi bi-grid-fill"></i>
                                <span>View All Relocation Services</span>
                            </span>
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>

                <!-- Col 3: Quick Contact & Quote Card -->
                <div class="col-12 col-lg-4">
                    <div class="fs-menu-card p-4 p-xl-4">
                        <div class="fs-menu-heading">Direct Helpline (24x7)</div>
                        <h5 class="fw-bold text-dark mb-3">Speak to Moving Expert</h5>

                        <!-- Both Phone Call Buttons -->
                        <div class="d-grid gap-2 mb-3">
                            <a <?= $phonehtml ?> class="btn btn-outline-primary d-flex align-items-center justify-content-between py-2 px-3 fw-bold rounded-pill">
                                <span class="d-inline-flex align-items-center gap-2">
                                    <i class="bi bi-telephone-fill"></i>
                                    <span><?= $phone ?></span>
                                </span>
                                <span class="badge bg-primary text-white rounded-pill px-2.5 py-1 small">Call Now</span>
                            </a>

                            <a <?= $phonehtml1 ?> class="btn btn-outline-primary d-flex align-items-center justify-content-between py-2 px-3 fw-bold rounded-pill">
                                <span class="d-inline-flex align-items-center gap-2">
                                    <i class="bi bi-telephone-fill"></i>
                                    <span><?= $phone1 ?></span>
                                </span>
                                <span class="badge bg-primary text-white rounded-pill px-2.5 py-1 small">Call Now</span>
                            </a>

                            <!-- WhatsApp Chat -->
                            <a href="<?= $whatsapphtml ?>" target="_blank" rel="noopener noreferrer" class="btn btn-success d-flex align-items-center justify-content-center gap-2 py-2.5 fw-bold rounded-pill text-white shadow-sm">
                                <i class="bi bi-whatsapp"></i> Chat on WhatsApp
                            </a>

                            <!-- Instant Quote Button -->
                            <button type="button" class="btn btn-nav-quote d-flex align-items-center justify-content-center gap-2 py-2.5 fw-bold rounded-pill text-white shadow-sm mt-1" data-bs-dismiss="offcanvas" data-bs-toggle="modal" data-bs-target="#qteModal">
                                <i class="bi bi-send-fill"></i> Get Free Instant Quote
                            </button>
                        </div>

                        <!-- Company Contact Details -->
                        <div class="pt-3 border-top small text-muted">
                            <?php if (!empty($mail)): ?>
                            <div class="mb-2 d-flex align-items-center gap-2">
                                <i class="bi bi-envelope-fill text-primary"></i>
                                <a href="<?= esc($mailhtml ?? ('mailto:' . $mail)) ?>" class="text-decoration-none text-muted text-break"><?= esc($mail) ?></a>
                            </div>
                            <?php endif; ?>

                            <?php if (!empty($wh)): ?>
                            <div class="mb-2 d-flex align-items-center gap-2">
                                <i class="bi bi-clock-fill text-warning"></i>
                                <span><?= esc($wh) ?></span>
                            </div>
                            <?php endif; ?>

                            <div class="d-flex align-items-center gap-2">
                                <i class="bi bi-patch-check-fill text-success"></i>
                                <span>Verified &amp; Insured Movers &amp; Packers</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
