<?= view('Modules\Template\Views\breadcrumb', [
    'title'       => 'Video Gallery',
    'description' => 'Watch our relocation procedures, packing demonstrations, and highway transport fleets.',
    'breadcrumbs' => [
        ['title' => 'Video Gallery', 'url' => '']
    ]
]) ?>

<!-- Gallery Main Section -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row g-4 align-items-start">
            <!-- Left Col-8 Content -->
            <div class="col-lg-8">
                <div class="row g-4">
                    <?php if (!empty($videos)): ?>
                        <?php foreach ($videos as $video): ?>
                            <div class="col-sm-6">
                                <div class="gallery-item-card h-100">
                                    <div class="ratio ratio-16x9">
                                        <iframe src="<?= esc($video->video_url ?? '') ?>" 
                                                title="<?= esc($video->title ?? 'Moving Video') ?>" 
                                                allowfullscreen 
                                                class="border-0"></iframe>
                                    </div>
                                    <?php if (!empty($video->title)): ?>
                                        <div class="p-3">
                                            <h5 class="fw-bold fs-6 text-dark mb-0"><?= esc($video->title) ?></h5>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <div class="col-12">
                            <div class="gallery-empty-state">
                                <div class="gallery-empty-icon">
                                    <i class="bi bi-camera-video"></i>
                                </div>
                                <h4 class="h5 fw-bold text-dark mb-2">Videos will be updated soon</h4>
                                <p class="text-muted small mb-0">Our packing and moving video demonstrations are being curated for upload.</p>
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
                        <a href="<?= site_url('photo-gallery') ?>" class="gallery-nav-link">
                            <span><i class="bi bi-camera me-2 nav-icon"></i> Photo Gallery</span>
                            <i class="bi bi-chevron-right arrow-icon"></i>
                        </a>
                        <a href="<?= site_url('video-gallery') ?>" class="gallery-nav-link active">
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
