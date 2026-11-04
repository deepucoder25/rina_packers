<div class="page-banner">
    <div class="container">
        <div class="breadcrumbs">
            <a href="<?= site_url('/') ?>"><i class="bi bi-house-door-fill"></i> Home</a> / <a href="<?= site_url('services') ?>">Services</a> / <span><?= esc($service['title']) ?></span>
        </div>
        <h1><?= esc($service['title']) ?></h1>
        <p><?= esc($service['desc']) ?></p>
    </div>
</div>

<section class="section py-5 bg-light">
    <div class="container py-lg-4">
        <div class="row g-4 align-items-start">
            <!-- Main Content -->
            <div class="col-12 col-lg-8">
                <div class="bg-white p-4 p-md-5 rounded-4 border shadow-sm mb-4">
                    <div class="service-icon-wrap mb-4" style="width: 70px; height: 70px; font-size: 2rem;">
                        <?php
                        $iconMap = [
                            'household-moving'       => 'bi-house-heart-fill',
                            'office-relocation'      => 'bi-briefcase-fill',
                            'vehicle-transportation' => 'bi-car-front-fill',
                            'warehouse-storage'      => 'bi-building-fill-lock',
                            'packing-moving'         => 'bi-box-seam-fill',
                            'loading-unloading'      => 'bi-truck'
                        ];
                        $currIcon = $iconMap[$service['slug']] ?? 'bi-box-seam-fill';
                        ?>
                        <i class="bi <?= $currIcon ?>"></i>
                    </div>

                    <h2 class="h2 fw-bold text-dark mb-3">Professional <?= esc($service['title']) ?></h2>
                    <p class="text-muted fs-5 lh-lg mb-4">
                        <?= esc($service['desc']) ?>
                    </p>

                    <h3 class="h4 fw-bold text-dark mb-3">Key Service Inclusions:</h3>
                    <ul class="list-unstyled mb-4 d-flex flex-column gap-3">
                        <?php foreach ($service['features'] as $f): ?>
                            <li class="d-flex gap-2 align-items-center fw-semibold text-dark">
                                <i class="bi bi-check-circle-fill text-success fs-5"></i> <?= esc($f) ?>
                            </li>
                        <?php endforeach; ?>
                    </ul>

                    <div class="d-flex flex-wrap gap-3">
                        <button type="button" class="btn btn-nav-quote px-4 py-2.5 rounded-pill shadow-sm" data-bs-toggle="modal" data-bs-target="#qteModal">
                            <i class="bi bi-send-fill me-1"></i> Get Free Quote
                        </button>
                        <a href="tel:<?= preg_replace('/[^0-9+]/', '', $phone ?? '') ?>" class="btn btn-outline-primary px-4 py-2.5 rounded-pill fw-bold">
                            <i class="bi bi-telephone-fill me-1"></i> Call Now
                        </a>
                    </div>
                </div>
            </div>

            <!-- Sidebar -->
            <div class="col-12 col-lg-4">
                <div class="bg-white p-4 rounded-4 border shadow-sm mb-4">
                    <h4 class="h5 fw-bold text-dark mb-3"><i class="bi bi-grid-fill text-primary me-2"></i> All Services</h4>
                    <div class="d-flex flex-column gap-2">
                        <?php foreach ($allServices as $s): ?>
                            <a href="<?= site_url('services/' . $s['slug']) ?>" class="fs-submenu-link <?= ($s['slug'] === $service['slug']) ? 'fw-bold text-primary bg-primary-subtle' : '' ?>">
                                <i class="bi <?= $iconMap[$s['slug']] ?? 'bi-box-seam' ?> text-primary"></i>
                                <span><?= esc($s['title']) ?></span>
                            </a>
                        <?php endforeach; ?>
                    </div>
                </div>

                <!-- Instant Pricing WhatsApp Card -->
                <div class="p-4 rounded-4 text-white text-center shadow-sm" style="background: linear-gradient(135deg, #10b981 0%, #059669 100%);">
                    <i class="bi bi-whatsapp display-4 mb-2 d-block"></i>
                    <h4 class="h5 fw-bold mb-2">Need Instant Pricing?</h4>
                    <p class="small text-white-50 mb-3">Chat directly with our relocation specialist on WhatsApp.</p>
                    <a href="<?= esc($whatsapphtml ?? 'https://wa.me/919282014800') ?>" target="_blank" rel="noopener noreferrer" class="btn btn-light fw-bold text-success rounded-pill px-4 py-2 shadow-sm">
                        <i class="bi bi-chat-dots-fill me-1"></i> Chat on WhatsApp
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
