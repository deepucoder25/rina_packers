<div class="blog-sidebar-sticky">
    <!-- All Services Navigation Card -->
    <div class="bg-white p-4 rounded-4 border shadow-sm mb-4">
        <h3 class="h6 fw-bold text-dark mb-3 pb-2 border-bottom">
            <i class="bi bi-grid-fill text-primary me-2"></i> All Services
        </h3>
        <div class="d-flex flex-column gap-2">
            <?php
            $servicesList = [
                ['slug' => 'household-moving', 'title' => 'House Shifting', 'icon' => 'bi-house-heart-fill'],
                ['slug' => 'office-relocation', 'title' => 'Office Relocation', 'icon' => 'bi-briefcase-fill'],
                ['slug' => 'vehicle-transportation', 'title' => 'Vehicle Transportation', 'icon' => 'bi-car-front-fill'],
                ['slug' => 'loading-unloading', 'title' => 'Loading & Unloading', 'icon' => 'bi-truck'],
                ['slug' => 'packing-moving', 'title' => 'Packing & Unpacking', 'icon' => 'bi-box-seam-fill'],
                ['slug' => 'warehouse-storage', 'title' => 'Storage Solutions', 'icon' => 'bi-building-fill-lock'],
                ['slug' => 'local-shifting', 'title' => 'Local Shifting', 'icon' => 'bi-speedometer2'],
                ['slug' => 'insurance-coverage', 'title' => 'Insurance Coverage', 'icon' => 'bi-shield-check'],
            ];
            $activeSlug = $currentSlug ?? '';
            ?>
            <?php foreach ($servicesList as $s): ?>
                <a href="<?= site_url('services/' . $s['slug']) ?>" class="p-2.5 px-3 rounded-3 text-decoration-none d-flex align-items-center gap-2.5 transition <?= ($s['slug'] === $activeSlug) ? 'bg-primary-subtle text-primary fw-bold' : 'text-dark hover-primary' ?>">
                    <i class="bi <?= $s['icon'] ?> text-primary"></i>
                    <span><?= esc($s['title']) ?></span>
                </a>
            <?php endforeach; ?>
        </div>
    </div>

    <!-- Need Assistance Box (Design Tokens compliant) -->
    <div class="blog-cta-widget">
        <h5>Need Instant Pricing?</h5>
        <p>Chat directly with our move coordinator for custom quotes or moving dates.</p>
        <?php if (!empty($phone)): ?>
            <a href="tel:<?= preg_replace('/[^0-9+]/', '', $phone) ?>" class="blog-cta-phone">
                <i class="bi bi-telephone-fill"></i> <?= esc($phone) ?>
            </a>
        <?php endif; ?>
        <a href="<?= site_url('contact') ?>" class="blog-cta-contact">
            <i class="bi bi-envelope-fill"></i> Contact Our Team
        </a>
    </div>
</div>

