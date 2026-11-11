<!-- Page Hero Banner -->
<section class="about-hero-section text-center position-relative">
    <div class="container position-relative">
        <nav aria-label="breadcrumb">
            <ol class="about-top-badge list-unstyled">
                <li class="d-inline-flex align-items-center">
                    <a href="<?= site_url('/') ?>"><i class="bi bi-house-door-fill me-1"></i> Home</a>
                </li>
                <li class="about-top-badge-sep d-inline-flex align-items-center" aria-hidden="true">/</li>
                <li class="d-inline-flex align-items-center text-white fw-bold active" aria-current="page">
                    Photo Gallery
                </li>
            </ol>
        </nav>
        <h1 class="about-hero-title">Photo Gallery</h1>
        <p class="about-hero-desc">Explore verified photos of our packing processes, fleet, and successful relocations.</p>
    </div>
</section>

<!-- Gallery Main Section -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row g-4 align-items-start">
            <!-- Left Col-8 Content -->
            <div class="col-lg-8">
                <div class="row g-4">
                    <?php if (!empty($photos)): ?>
                        <?php foreach ($photos as $photo): ?>
                            <div class="col-sm-6">
                                <div class="gallery-item-card h-100">
                                    <div class="gallery-thumb-container">
                                        <img src="<?= base_url('assets/uploads/gallery/' . ($photo->image ?? '')) ?>" 
                                             alt="<?= esc($photo->title ?? 'Moving Gallery') ?>"
                                             onerror="this.src='<?= base_url('assets/images/about/packers_movers.jpg') ?>'">
                                    </div>
                                    <?php if (!empty($photo->title) || !empty($photo->album_name)): ?>
                                        <div class="p-3">
                                            <?php if (!empty($photo->album_name)): ?>
                                                <span class="badge bg-primary-subtle text-primary mb-2"><?= esc($photo->album_name) ?></span>
                                            <?php endif; ?>
                                            <?php if (!empty($photo->title)): ?>
                                                <h5 class="fw-bold fs-6 text-dark mb-0"><?= esc($photo->title) ?></h5>
                                            <?php endif; ?>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <div class="col-12">
                            <div class="gallery-empty-state">
                                <div class="gallery-empty-icon">
                                    <i class="bi bi-images"></i>
                                </div>
                                <h4 class="h5 fw-bold text-dark mb-2">Photos will be updated soon</h4>
                                <p class="text-muted small mb-0">Our latest moving, loading, and transit photos are being curated for upload.</p>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
            </div>

            <!-- Right Col-4 Sticky Sidebar (120px) -->
            <div class="col-lg-4">
                <div class="gallery-sidebar-sticky">
                    <!-- Quick Navigation -->
                    <div class="gallery-nav-card">
                        <h4 class="h6 fw-bold text-dark mb-3 pb-2 border-bottom">
                            <i class="bi bi-grid-fill text-primary me-2"></i> Quick Navigation
                        </h4>
                        <a href="<?= site_url('photo-gallery') ?>" class="gallery-nav-link active">
                            <span><i class="bi bi-camera me-2 nav-icon"></i> Photo Gallery</span>
                            <i class="bi bi-chevron-right arrow-icon"></i>
                        </a>
                        <a href="<?= site_url('video-gallery') ?>" class="gallery-nav-link">
                            <span><i class="bi bi-play-circle me-2 nav-icon"></i> Video Gallery</span>
                            <i class="bi bi-chevron-right arrow-icon"></i>
                        </a>
                    </div>

                    <!-- Get in Touch Card -->
                    <div class="gallery-cta-card">
                        <h4>Get in Touch</h4>
                        <p>Speak directly with our moving specialist for customized quotes and dates.</p>
                        <?php if (!empty($phone)): ?>
                            <a <?= $phonehtml ?? 'href="tel:' . preg_replace('/[^0-9+]/', '', $phone) . '"' ?> class="gallery-cta-phone">
                                <i class="bi bi-telephone-fill"></i> <?= esc($phone) ?>
                            </a>
                        <?php endif; ?>
                        <a href="<?= site_url('contact') ?>" class="gallery-cta-btn">
                            <i class="bi bi-envelope-fill"></i> Contact Us
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
