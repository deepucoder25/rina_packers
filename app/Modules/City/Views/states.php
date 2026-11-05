<div class="page-banner">
    <div class="container">
        <div class="breadcrumbs">
            <a href="<?= site_url('/') ?>"><i class="bi bi-house-door-fill"></i> Home</a> / <span>All India Service Locations</span>
        </div>
        <h1>All India Packers & Movers Locations</h1>
        <p>Door-to-door household relocation, office moving, and vehicle transport across 500+ Indian cities in all major states.</p>
    </div>
</div>

<section class="section py-5">
    <div class="container">
        <!-- Trust Highlights Strip -->
        <div class="row g-2 justify-content-center state-trust-strip">
            <div class="col-auto">
                <div class="state-trust-pill">
                    <i class="bi bi-map-fill text-primary"></i>
                    <span>21+ States & UTs</span>
                </div>
            </div>
            <div class="col-auto">
                <div class="state-trust-pill">
                    <i class="bi bi-buildings-fill text-primary"></i>
                    <span>500+ Connected Hubs</span>
                </div>
            </div>
            <div class="col-auto">
                <div class="state-trust-pill">
                    <i class="bi bi-shield-check text-primary"></i>
                    <span>100% Insured Shifting</span>
                </div>
            </div>
            <div class="col-auto">
                <div class="state-trust-pill">
                    <i class="bi bi-truck text-primary"></i>
                    <span>Live GPS Tracking</span>
                </div>
            </div>
        </div>

        <div class="section-header text-center mb-5">
            <span class="section-badge"><i class="bi bi-diagram-3-fill me-1"></i> Nationwide Relocation Hubs</span>
            <h2 class="section-title">Select Your State / Union Territory</h2>
            <p class="section-subtitle">Click your state below to explore local verified packers and movers branches, instant price estimates, and transit schedules.</p>
        </div>

        <!-- State Cards Grid -->
        <div class="row g-4 state-cards-grid">
            <?php foreach ($states as $st): ?>
                <div class="col-12 col-sm-6 col-lg-4 col-xl-3 state-card-col">
                    <div class="card h-100 state-card shadow-sm border-0">
                        <a href="<?= site_url('city/' . $st['slug']) ?>" class="state-card-anchor" aria-label="Packers and Movers in <?= esc($st['name']) ?>">
                            <div class="state-card-thumb">
                                <img src="<?= base_url($st['image']) ?>" 
                                     alt="<?= esc($st['name']) ?> Packers and Movers" 
                                     class="state-card-img" 
                                     loading="lazy" 
                                     width="400" 
                                     height="250"
                                     onerror="this.onerror=null;this.src='<?= base_url('assets/img/state/default.webp') ?>';">
                                <div class="state-card-scrim"></div>
                                <div class="state-badge-row-top">
                                    <span class="state-code-pill"><?= esc($st['code']) ?></span>
                                    <span class="state-verified-pill"><i class="bi bi-patch-check-fill me-1"></i> Verified</span>
                                </div>
                                <div class="state-badge-row-bottom">
                                    <span class="state-cities-count"><i class="bi bi-geo-alt-fill text-warning me-1"></i> <?= esc($st['cities_count']) ?> Cities Connected</span>
                                </div>
                            </div>
                            <div class="card-body state-card-body d-flex flex-column">
                                <div class="d-flex align-items-center justify-content-between mb-2">
                                    <h3 class="state-card-name mb-0"><?= esc($st['name']) ?></h3>
                                    <span class="state-nav-icon" aria-hidden="true">
                                        <i class="bi bi-arrow-right"></i>
                                    </span>
                                </div>
                                <p class="state-card-lead mb-3">Doorstep household, office shifting & vehicle transport in <?= esc($st['name']) ?>.</p>
                                <div class="state-card-bottom-pills mt-auto pt-2 border-top">
                                    <span class="state-bottom-pill"><i class="bi bi-box-seam-fill text-primary me-1"></i> 5-Layer Pack</span>
                                    <span class="state-bottom-pill"><i class="bi bi-shield-check text-primary me-1"></i> Safe Move</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <!-- Nationwide Relocation Helpline Banner -->
        <div class="state-help-banner shadow-sm">
            <div class="row align-items-center g-4">
                <div class="col-lg-8">
                    <h3 class="state-help-title">Need Shifting Outside the Listed States?</h3>
                    <p class="state-help-text">We provide complete pan-India door-to-door shifting including union territories and remote locations with zero transshipment and GPS container trucks.</p>
                </div>
                <div class="col-lg-4 text-lg-end">
                    <a href="tel:+919282014800" class="state-help-btn">
                        <i class="bi bi-telephone-fill me-2"></i>
                        <span>Call Dispatch Desk</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
