<!-- ==========================================================================
     About Hero & Breadcrumb Section
     ========================================================================== -->
<section class="about-hero-section text-center position-relative">
    <div class="container position-relative">
        <!-- Top Breadcrumb Capsule Badge -->
        <nav aria-label="breadcrumb">
            <ol class="about-top-badge list-unstyled">
                <li class="d-inline-flex align-items-center">
                    <a href="<?= site_url('/') ?>"><i class="bi bi-house-door-fill me-1.5"></i> Home</a>
                </li>
                <li class="about-top-badge-sep d-inline-flex align-items-center" aria-hidden="true">/</li>
                <li class="d-inline-flex align-items-center text-white fw-bold active" aria-current="page">
                    About Us
                </li>
            </ol>
        </nav>

        <!-- Main Heading -->
        <h1 class="about-hero-title">
            About <?= esc($site->name ?? 'Our Company') ?>
        </h1>

        <!-- Subtitle -->
        <p class="about-hero-desc">
            Certified moving crew, transparent pricing, and over 15+ years of delivering peace of mind on every relocation.
        </p>
    </div>
</section>

<!-- ==========================================================================
     Main Story & Track Record Section
     ========================================================================== -->
<section class="section py-5">
    <div class="container">
        <!-- Row 1: Story & Track Record Grid -->
        <div class="row g-4 g-lg-5 align-items-center mb-5">
            <!-- Left Side: Story & Mission/Vision -->
            <div class="col-12 col-lg-6">
                <span class="about-badge-pill">
                    <i class="bi bi-award-fill text-primary"></i> Our Story
                </span>
                <h2 class="about-main-title">
                    Redefining Moving Standards Across India
                </h2>
                <p class="about-main-desc">
                    Founded with a mission to make packing and shifting completely transparent and hassle-free, <?= esc($site->name) ?> has grown into one of the nation's most trusted relocation and logistics networks.
                </p>
                <p class="about-main-desc">
                    From our humble beginnings with 2 transport trucks, we now manage a nationwide fleet, specialized shockproof packing, climate-controlled warehousing, and over 150+ trained logistics professionals.
                </p>

                <!-- Mission & Vision Cards in One Row -->
                <div class="row g-3 pt-2">
                    <div class="col-12 col-sm-6">
                        <div class="about-mv-box mission">
                            <h3 class="about-mv-title">
                                <i class="bi bi-bullseye text-primary"></i> Our Mission
                            </h3>
                            <p class="about-mv-desc">
                                To deliver effortless moving experiences backed by punctuality, care, and zero surprise costs.
                            </p>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6">
                        <div class="about-mv-box vision">
                            <h3 class="about-mv-title">
                                <i class="bi bi-eye-fill text-danger"></i> Our Vision
                            </h3>
                            <p class="about-mv-desc">
                                To be the most customer-centric logistics and relocation brand trusted across all 500+ cities.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Side: Track Record Card -->
            <div class="col-12 col-lg-6">
                <div class="about-track-card">
                    <div class="about-track-head">
                        <h3 class="about-track-title">Our Track Record</h3>
                        <p class="about-track-sub">Numbers that reflect our dedication to seamless moves</p>
                    </div>

                    <!-- 4 Metrics in a 2x2 Responsive Grid -->
                    <div class="row g-3 g-sm-4 text-center">
                        <div class="col-6">
                            <div class="about-metric-tile blue">
                                <div class="about-metric-num">25k+</div>
                                <div class="about-metric-lbl">Moves Completed</div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="about-metric-tile orange">
                                <div class="about-metric-num">99.8%</div>
                                <div class="about-metric-lbl">Damage-Free</div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="about-metric-tile green">
                                <div class="about-metric-num">500+</div>
                                <div class="about-metric-lbl">Cities Connected</div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="about-metric-tile purple">
                                <div class="about-metric-num">15+</div>
                                <div class="about-metric-lbl">Years Experience</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Row 2: 3 Core Pillars (Compact Demo Content) -->
        <div class="row g-4 pt-3">
            <div class="col-12 col-md-4">
                <div class="about-feat-card">
                    <div class="about-feat-icon">
                        <i class="bi bi-shield-check"></i>
                    </div>
                    <h4 class="about-feat-title">100% Insured Transit</h4>
                    <p class="about-feat-desc">
                        Comprehensive transit insurance coverage from top national insurers so you move with total peace of mind.
                    </p>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="about-feat-card">
                    <div class="about-feat-icon">
                        <i class="bi bi-box-seam"></i>
                    </div>
                    <h4 class="about-feat-title">5-Layer Safety Wrap</h4>
                    <p class="about-feat-desc">
                        Heavy-duty bubble pack, foam sheets, corrugated cartons, and stretch film safeguard every delicate item.
                    </p>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="about-feat-card">
                    <div class="about-feat-icon">
                        <i class="bi bi-clock-history"></i>
                    </div>
                    <h4 class="about-feat-title">On-Time Guarantee</h4>
                    <p class="about-feat-desc">
                        Dedicated trucks, GPS fleet tracking, and verified coordinators ensure your schedule is strictly respected.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
