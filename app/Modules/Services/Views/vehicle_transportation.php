<?php
$serviceTitle = $service['title'] ?? 'Vehicle Transportation';

?>

<?= view('Modules\Template\Views\breadcrumb', [
    'title'       => 'Vehicle Transportation',
    'description' => 'Specialized enclosed car carriers and hydraulic bike containers ensuring zero-scratch transit across India.',
    'breadcrumbs' => [
        ['title' => 'Vehicle Transportation', 'url' => '']
    ]
]) ?>

<!-- Main Full-Width Content Container -->
<section class="py-5 bg-white">
    <div class="container">
        <!-- Main Service Overview Card -->
        <div class="svc-overview-card mb-5">
            <div class="d-flex align-items-center gap-3 mb-3">
                <div class="svc-icon-box mb-0 flex-shrink-0">
                    <i class="bi bi-car-front-fill"></i>
                </div>
                <h2 class="h3 fw-bold text-dark mb-0">Safe Car &amp; Bike Carrier Services</h2>
            </div>
            <p class="text-muted leading-relaxed mb-0">
                We provide covered multi-car carriers and customized wooden crates for bikes and scooters. Every vehicle is inspected, documented with odometer and photo status, and strapped safely to prevent road vibrations or transit scratches.
            </p>
        </div>

        <!-- 4 Key Advantages Grid -->
        <div class="mb-5">
            <div class="text-center mb-4">
                <span class="badge bg-primary-subtle text-primary rounded-pill px-3 py-1.5 fw-bold mb-2">Transit Highlights</span>
                <h3 class="h4 fw-bold text-dark">Why Transport Your Vehicle With Us</h3>
            </div>
            <div class="row g-3 g-lg-4">
                <div class="col-sm-6 col-lg-3">
                    <div class="svc-feature-box">
                        <div class="d-flex align-items-center gap-2 mb-2">
                            <div class="svc-feat-icon mb-0 flex-shrink-0">
                                <i class="bi bi-truck"></i>
                            </div>
                            <h4 class="h6 fw-bold text-dark mb-0">Enclosed Car Carriers</h4>
                        </div>
                        <p class="text-muted small mb-0">Closed metal containers protecting vehicles from weather, dust, and highway debris.</p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="svc-feature-box">
                        <div class="d-flex align-items-center gap-2 mb-2">
                            <div class="svc-feat-icon mb-0 flex-shrink-0">
                                <i class="bi bi-lock-fill"></i>
                            </div>
                            <h4 class="h6 fw-bold text-dark mb-0">Wheel Lock Clamps</h4>
                        </div>
                        <p class="text-muted small mb-0">Dedicated wheel stopper chains and tie-downs preventing movement inside the carrier.</p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="svc-feature-box">
                        <div class="d-flex align-items-center gap-2 mb-2">
                            <div class="svc-feat-icon mb-0 flex-shrink-0">
                                <i class="bi bi-clipboard2-check-fill"></i>
                            </div>
                            <h4 class="h6 fw-bold text-dark mb-0">Pre-Transit Condition Log</h4>
                        </div>
                        <p class="text-muted small mb-0">Detailed vehicle condition report and odometer verification signed before loading.</p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="svc-feature-box">
                        <div class="d-flex align-items-center gap-2 mb-2">
                            <div class="svc-feat-icon mb-0 flex-shrink-0">
                                <i class="bi bi-geo-alt-fill"></i>
                            </div>
                            <h4 class="h6 fw-bold text-dark mb-0">Doorstep Handover</h4>
                        </div>
                        <p class="text-muted small mb-0">Direct pickup from your driveway and safe delivery directly to your new destination.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Step-by-Step Moving Process -->
        <div class="mb-5">
            <div class="text-center mb-4">
                <span class="badge bg-primary-subtle text-primary rounded-pill px-3 py-1.5 fw-bold mb-2">Process Sequence</span>
                <h3 class="h4 fw-bold text-dark">Vehicle Shipping Procedure</h3>
            </div>
            <div class="row g-3 g-lg-4">
                <div class="col-sm-6 col-lg-3">
                    <div class="svc-step-card">
                        <span class="svc-step-badge">Step 01</span>
                        <h4 class="h6 fw-bold text-dark mb-2">Pickup &amp; Inspection</h4>
                        <p class="text-muted small mb-0">Doorstep vehicle verification, fuel check, and official inspection receipt issue.</p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="svc-step-card">
                        <span class="svc-step-badge">Step 02</span>
                        <h4 class="h6 fw-bold text-dark mb-2">Protective Wrapping</h4>
                        <p class="text-muted small mb-0">Foam and bubble covers applied to side mirrors, handlebars, and delicate surfaces.</p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="svc-step-card">
                        <span class="svc-step-badge">Step 03</span>
                        <h4 class="h6 fw-bold text-dark mb-2">Hydraulic Ramp Load</h4>
                        <p class="text-muted small mb-0">Smooth roll-on loading and wheel locking inside the enclosed national carrier.</p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="svc-step-card">
                        <span class="svc-step-badge">Step 04</span>
                        <h4 class="h6 fw-bold text-dark mb-2">Destination Delivery</h4>
                        <p class="text-muted small mb-0">Safe roll-off, final inspection check with recipient, and hassle-free keys handover.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Full-Width Bottom CTA Banner -->
        <div class="svc-full-cta"><div class="row align-items-center g-3"><div class="col-12 text-center"><h3 class="h4 fw-bold text-white mb-2">Transport Your Car or Bike Today!</h3>
                    <p class="text-white-50 mb-0">Get zero-risk auto transportation rates with instant insurance coverage options.</p></div></div></div>
    </div>
</section>
