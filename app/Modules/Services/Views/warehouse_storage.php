<?php
$serviceTitle = $service['title'] ?? 'Storage Solutions';

?>

<?= view('Modules\Template\Views\breadcrumb', [
    'title'       => 'Storage Solutions',
    'description' => 'Secure, moisture-free, 24x7 CCTV monitored warehousing for household furniture and commercial inventories.',
    'breadcrumbs' => [
        ['title' => 'Storage Solutions', 'url' => '']
    ]
]) ?>

<!-- Main Full-Width Content Container -->
<section class="py-5 bg-white">
    <div class="container">
        <!-- Main Service Overview Card -->
        <div class="svc-overview-card mb-5">
            <div class="d-flex align-items-center gap-3 mb-3">
                <div class="svc-icon-box mb-0 flex-shrink-0">
                    <i class="bi bi-building-fill-lock"></i>
                </div>
                <h2 class="h3 fw-bold text-dark mb-0">Safe &amp; Climate-Controlled Warehousing</h2>
            </div>
            <p class="text-muted leading-relaxed mb-0">
                Whether you are moving abroad, renovating your current property, or need temporary commercial storage, our clean, pest-controlled, and round-the-clock guarded warehouses provide flexible short-term and long-term storage plans.
            </p>
        </div>

        <!-- 4 Key Advantages Grid -->
        <div class="mb-5">
            <div class="text-center mb-4">
                <span class="badge bg-primary-subtle text-primary rounded-pill px-3 py-1.5 fw-bold mb-2">Facility Features</span>
                <h3 class="h4 fw-bold text-dark">Why Store With Our Facility</h3>
            </div>
            <div class="row g-3 g-lg-4">
                <div class="col-sm-6 col-lg-3">
                    <div class="svc-feature-box">
                        <div class="d-flex align-items-center gap-2 mb-2">
                            <div class="svc-feat-icon mb-0 flex-shrink-0">
                                <i class="bi bi-camera-video-fill"></i>
                            </div>
                            <h4 class="h6 fw-bold text-dark mb-0">24x7 CCTV &amp; Guards</h4>
                        </div>
                        <p class="text-muted small mb-0">Continuous camera recording and physical security guards guarding locked bays.</p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="svc-feature-box">
                        <div class="d-flex align-items-center gap-2 mb-2">
                            <div class="svc-feat-icon mb-0 flex-shrink-0">
                                <i class="bi bi-bug-fill"></i>
                            </div>
                            <h4 class="h6 fw-bold text-dark mb-0">Regular Pest Control</h4>
                        </div>
                        <p class="text-muted small mb-0">Periodic fumigation ensuring zero termite, rodent, or moth damage to wooden goods.</p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="svc-feature-box">
                        <div class="d-flex align-items-center gap-2 mb-2">
                            <div class="svc-feat-icon mb-0 flex-shrink-0">
                                <i class="bi bi-calendar-check-fill"></i>
                            </div>
                            <h4 class="h6 fw-bold text-dark mb-0">Flexible Monthly Rental</h4>
                        </div>
                        <p class="text-muted small mb-0">No rigid long lock-in contracts; pay simply for the weeks or months you utilize.</p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="svc-feature-box">
                        <div class="d-flex align-items-center gap-2 mb-2">
                            <div class="svc-feat-icon mb-0 flex-shrink-0">
                                <i class="bi bi-shield-lock-fill"></i>
                            </div>
                            <h4 class="h6 fw-bold text-dark mb-0">Palletized Elevation</h4>
                        </div>
                        <p class="text-muted small mb-0">All cartons and goods kept on wooden pallets 6 inches above floor level against moisture.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Step-by-Step Moving Process -->
        <div class="mb-5">
            <div class="text-center mb-4">
                <span class="badge bg-primary-subtle text-primary rounded-pill px-3 py-1.5 fw-bold mb-2">How Storage Works</span>
                <h3 class="h4 fw-bold text-dark">Step-by-Step Storage Process</h3>
            </div>
            <div class="row g-3 g-lg-4">
                <div class="col-sm-6 col-lg-3">
                    <div class="svc-step-card">
                        <span class="svc-step-badge">Step 01</span>
                        <h4 class="h6 fw-bold text-dark mb-2">Doorstep Pickup</h4>
                        <p class="text-muted small mb-0">We collect your goods right from your home or office with a digital manifest.</p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="svc-step-card">
                        <span class="svc-step-badge">Step 02</span>
                        <h4 class="h6 fw-bold text-dark mb-2">Long-Term Wrapping</h4>
                        <p class="text-muted small mb-0">Protective shrink plastic covers applied specifically for storage longevity.</p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="svc-step-card">
                        <span class="svc-step-badge">Step 03</span>
                        <h4 class="h6 fw-bold text-dark mb-2">Pallet Bay Storing</h4>
                        <p class="text-muted small mb-0">Assigned individual locked bay tagged with your unique barcode docket number.</p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="svc-step-card">
                        <span class="svc-step-badge">Step 04</span>
                        <h4 class="h6 fw-bold text-dark mb-2">Doorstep Redelivery</h4>
                        <p class="text-muted small mb-0">Whenever you need your items back, schedule redelivery anywhere in India.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Full-Width Bottom CTA Banner -->
        <div class="svc-full-cta"><div class="row align-items-center g-3"><div class="col-12 text-center"><h3 class="h4 fw-bold text-white mb-2">Looking for Safe Warehouse Space?</h3>
                    <p class="text-white-50 mb-0">Store household furniture or business excess stock starting at affordable monthly rates.</p></div></div></div>
    </div>
</section>
