<div class="page-banner">
    <div class="container">
        <div class="breadcrumbs">
            <a href="<?= site_url('/') ?>"><i class="bi bi-house-door-fill"></i> Home</a> / <span>Services</span>
        </div>
        <h1>Our Relocation Services</h1>
        <p>Complete packing, moving, vehicle transport, and safe warehouse storage under one roof.</p>
    </div>
</div>

<section class="section py-5 bg-light">
    <div class="container py-lg-4">
        <div class="row g-4">
            <?php
            $iconMap = [
                'household-moving'       => 'bi-house-heart-fill',
                'office-relocation'      => 'bi-briefcase-fill',
                'vehicle-transportation' => 'bi-car-front-fill',
                'warehouse-storage'      => 'bi-building-fill-lock',
                'packing-moving'         => 'bi-box-seam-fill',
                'loading-unloading'      => 'bi-truck',
                'local-shifting'         => 'bi-geo-alt-fill',
                'insurance-coverage'     => 'bi-shield-check'
            ];
            foreach ($services as $srv):
                $bsIcon = $iconMap[$srv['slug']] ?? 'bi-box-seam-fill';
            ?>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="service-card">
                        <div>
                            <div class="service-icon-wrap">
                                <i class="bi <?= $bsIcon ?>"></i>
                            </div>
                            <h3 class="service-title"><?= esc($srv['title']) ?></h3>
                            <p class="service-desc"><?= esc($srv['desc']) ?></p>
                            
                            <?php if (!empty($srv['features'])): ?>
                            <ul class="service-features-list">
                                <?php foreach ($srv['features'] as $f): ?>
                                    <li><i class="bi bi-check-circle-fill"></i> <?= esc($f) ?></li>
                                <?php endforeach; ?>
                            </ul>
                            <?php endif; ?>
                        </div>

                        <div class="service-card-actions">
                            <a href="<?= site_url('services/' . $srv['slug']) ?>" class="btn-service-view">
                                <span>Details</span> <i class="bi bi-arrow-right"></i>
                            </a>
                            <button type="button" class="btn-service-book" data-bs-toggle="modal" data-bs-target="#qteModal">
                                <i class="bi bi-send-fill"></i> <span>Get Quote</span>
                            </button>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
