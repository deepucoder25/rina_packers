<section class="section py-5 bg-light">
    <div class="container py-lg-3">
        <div class="text-center mb-5">
            <span class="badge bg-primary-subtle text-primary border border-primary-subtle rounded-pill px-3 py-1.5 fw-bold text-uppercase mb-2">Our Core Expertise</span>
            <h2 class="display-6 fw-bold text-dark">Professional Relocation Services</h2>
            <p class="text-muted mx-auto" style="max-width: 650px;">Comprehensive, door-to-door relocation and storage solutions tailored to your schedule.</p>
        </div>
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
                                <?php foreach (array_slice($srv['features'], 0, 3) as $f): ?>
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
