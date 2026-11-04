<?php
// SEO-Optimized Real Relocation Testimonials
$seoTestimonials = [
    [
        'name'          => 'Pranab Kumar Barua',
        'city'          => 'Guwahati to Delhi NCR',
        'service'       => '3BHK Household Shifting',
        'avatar_class'  => 'avatar-grad-blue',
        'initial'       => 'P',
        'r_title'       => 'Flawless 3BHK Relocation with Zero Damage',
        'r_desc'        => 'Rina Packers shifted our 3BHK household goods with utmost care. The crew used 5-layer heavy bubble wrapping for our double-door fridge, glass dining table, and 65-inch TV. Arrived on time in Delhi with zero transit damage!'
    ],
    [
        'name'          => 'Dr. Ananya Mukherjee',
        'city'          => 'Guwahati to Bangalore',
        'service'       => 'Car Carrier + Home Move',
        'avatar_class'  => 'avatar-grad-purple',
        'initial'       => 'A',
        'r_title'       => 'Safest Car Transport & Quick Household Setup',
        'r_desc'        => 'Transported my Hyundai Creta and 2BHK flat items across 2,500 km. The covered car carrier delivered my car without a single scratch, and live GPS tracking kept me updated. IBA approved bill made office reimbursement instant!'
    ],
    [
        'name'          => 'Col. Rajesh Rathore',
        'city'          => 'Guwahati to Kolkata',
        'service'       => 'Defense Intercity Move',
        'avatar_class'  => 'avatar-grad-teal',
        'initial'       => 'R',
        'r_title'       => 'Disciplined Military-Grade Punctual Shifting',
        'r_desc'        => 'Being a defense officer, I appreciate punctuality and discipline. Their polite crew brought hydraulic lifters, packed heavy teakwood wardrobes effortlessly, and assembled everything at our Kolkata flat on the same day.'
    ]
];


// Reusable Card Renderer
$renderTestimonialCard = function($rev) {
?>
    <div class="testi-bento-card h-100 p-4 bg-white rounded-4 position-relative d-flex flex-column shadow-sm" itemscope itemtype="https://schema.org/Review">
        <!-- Top Accent Ribbon -->
        <div class="testi-bento-ribbon" aria-hidden="true"></div>

        <!-- 1. Customer Profile Header at Top -->
        <div class="d-flex align-items-center justify-content-between mb-3 pt-1">
            <div class="d-flex align-items-center gap-2.5 min-w-0" itemprop="author" itemscope itemtype="https://schema.org/Person">
                <!-- Colored Avatar with Verified Checkmark -->
                <div class="position-relative flex-shrink-0">
                    <div class="testi-bento-avatar <?= esc($rev['avatar_class']) ?>">
                        <?= esc($rev['initial']) ?>
                    </div>
                    <span class="testi-bento-verified" title="Verified Moving Customer">
                        <i class="bi bi-patch-check-fill"></i>
                    </span>
                </div>
                <!-- Customer Name & Route -->
                <div class="min-w-0">
                    <h3 class="testi-bento-name text-truncate mb-0" itemprop="name">
                        <?= esc($rev['name']) ?>
                    </h3>
                    <span class="testi-bento-route text-truncate d-block">
                        <i class="bi bi-geo-alt-fill text-danger me-1"></i><?= esc($rev['city']) ?>
                    </span>
                </div>
            </div>

            <!-- Google 5.0 Rating Pill -->
            <div class="testi-bento-source flex-shrink-0 ms-2" itemprop="reviewRating" itemscope itemtype="https://schema.org/Rating">
                <meta itemprop="ratingValue" content="5">
                <meta itemprop="bestRating" content="5">
                <i class="bi bi-google text-primary"></i>
                <span>5.0</span>
                <i class="bi bi-star-fill text-warning"></i>
            </div>
        </div>

        <!-- 2. Speech-Card Quote Box -->
        <div class="testi-bento-bubble position-relative p-3 flex-grow-1">
            <!-- Background Quote Watermark -->
            <i class="bi bi-quote testi-bento-quote-mark" aria-hidden="true"></i>

            <!-- Stars & Service Pill -->
            <div class="d-flex align-items-center justify-content-between mb-2">
                <div class="text-warning small d-flex gap-0.5">
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                </div>
                <span class="testi-bento-service">
                    <?= esc($rev['service']) ?>
                </span>
            </div>

            <!-- Review Title -->
            <h4 class="testi-bento-title mb-1.5" itemprop="name">
                <?= esc($rev['r_title']) ?>
            </h4>

            <!-- Review Body -->
            <p class="testi-bento-desc mb-0" itemprop="reviewBody">
                &ldquo;<?= esc($rev['r_desc']) ?>&rdquo;
            </p>
        </div>
    </div>
<?php
};
?>
<!-- Customer Testimonials Section (Creative Bento Social-Proof in 1 Row) -->
<section class="section-testimonials py-5 bg-light position-relative" id="reviewsSection">
    <div class="container py-2 py-lg-4">
        <!-- Section Header -->
        <div class="text-center mb-4 mb-lg-5">
            <span class="badge bg-primary-subtle text-primary border border-primary-subtle rounded-pill px-3 py-2 fw-bold text-uppercase mb-2 shadow-sm">
                <i class="bi bi-star-fill me-1 text-warning"></i> Customer Feedback
            </span>
            <h2 class="display-6 fw-bold text-dark mb-2">Trusted By 25,000+ Happy Families</h2>
            <p class="text-secondary mx-auto lead fs-6 col-12 col-md-8 col-lg-7">
                Real relocation experiences from families, defense officers, and professionals who moved safely with Rina Packers.
            </p>

            <!-- Trust Scoreboard Bar -->
            <div class="d-inline-flex flex-wrap align-items-center justify-content-center gap-2 gap-sm-4 py-2 px-3 px-sm-4 rounded-pill bg-white border mt-2 shadow-sm">
                <div class="d-flex align-items-center gap-1.5">
                    <span class="fw-bold fs-5 text-dark">4.9</span>
                    <div class="text-warning small d-flex gap-0.5">
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                    </div>
                </div>
                <span class="text-secondary opacity-50 d-none d-sm-inline">|</span>
                <span class="small fw-semibold text-secondary">
                    <i class="bi bi-check-circle-fill text-success me-1"></i> 1,200+ Verified 5-Star Reviews
                </span>
                <span class="text-secondary opacity-50 d-none d-sm-inline">|</span>
                <span class="small fw-semibold text-secondary">
                    <i class="bi bi-shield-check text-primary me-1"></i> 100% IBA Approved Bill
                </span>
            </div>
        </div>

        <!-- 1. Desktop View: 3 Cards in 1 Single Row (>= 992px) -->
        <div class="row g-3 g-lg-4 justify-content-center d-none d-lg-flex">
            <?php foreach ($seoTestimonials as $rev): ?>
                <div class="col-lg-4">
                    <?php $renderTestimonialCard($rev); ?>
                </div>
            <?php endforeach; ?>
        </div>

        <!-- 2. Mobile/Tablet View: Official Bootstrap 5 Swipeable Carousel in 1 Row (< 992px) -->
        <div id="testiMobileCarousel" class="carousel slide d-block d-lg-none" data-bs-ride="carousel" data-bs-touch="true" data-bs-interval="5000">
            <div class="carousel-inner pb-2">
                <?php foreach ($seoTestimonials as $idx => $rev): ?>
                    <div class="carousel-item <?= $idx === 0 ? 'active' : '' ?>">
                        <div class="px-1 h-100">
                            <?php $renderTestimonialCard($rev); ?>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

            <!-- Integrated Minimalist Navigation Bar (Arrows + Indicators) -->
            <div class="testi-carousel-nav d-flex align-items-center justify-content-center gap-3 mt-3">
                <button class="testi-carousel-btn shadow-sm" type="button" data-bs-target="#testiMobileCarousel" data-bs-slide="prev" aria-label="Previous Review">
                    <i class="bi bi-chevron-left"></i>
                </button>
                <div class="carousel-indicators position-relative m-0 d-flex align-items-center gap-1.5">
                    <?php foreach ($seoTestimonials as $idx => $rev): ?>
                        <button type="button" data-bs-target="#testiMobileCarousel" data-bs-slide-to="<?= $idx ?>" class="<?= $idx === 0 ? 'active' : '' ?>" aria-current="<?= $idx === 0 ? 'true' : 'false' ?>" aria-label="Review <?= $idx + 1 ?>"></button>
                    <?php endforeach; ?>
                </div>
                <button class="testi-carousel-btn shadow-sm" type="button" data-bs-target="#testiMobileCarousel" data-bs-slide="next" aria-label="Next Review">
                    <i class="bi bi-chevron-right"></i>
                </button>
            </div>
        </div>

        <!-- Bottom Action Bar -->
        <div class="d-flex flex-wrap align-items-center justify-content-center gap-2 gap-sm-3 mt-4 mt-lg-5">
            <button type="button" class="btn btn-primary rounded-pill px-4 py-2 fw-bold shadow-sm d-inline-flex align-items-center gap-2" data-bs-toggle="modal" data-bs-target="#qteModal">
                <i class="bi bi-send-fill"></i>
                <span>Get Your Free Shifting Quote</span>
            </button>
            <a <?= $phonehtml ?> class="btn btn-outline-primary rounded-pill px-4 py-2 fw-bold d-inline-flex align-items-center gap-2 text-nowrap">
                <i class="bi bi-telephone-fill"></i>
                <span>Call <?= $phone ?></span>
            </a>
        </div>
    </div>
</section>
