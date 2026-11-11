<?php
$serviceTitle = $service['title'] ?? 'Loading & Unloading';

?>

<?= view('Modules\Template\Views\breadcrumb', [
    'title'       => 'Loading & Unloading',
    'description' => 'Expert manpower, modern hydraulic tail lifts, and heavy-duty straps for safe handling of heavy goods.',
    'breadcrumbs' => [
        ['title' => 'Loading & Unloading', 'url' => '']
    ]
]) ?>

<!-- Main Full-Width Content Container -->
<section class="py-5 bg-white">
    <div class="container">
        <!-- Main Service Overview Card -->
        <div class="svc-overview-card mb-5">
            <div class="d-flex align-items-center gap-3 mb-3">
                <div class="svc-icon-box mb-0 flex-shrink-0">
                    <i class="bi bi-truck"></i>
                </div>
                <h2 class="h3 fw-bold text-dark mb-0">Professional Loading &amp; Unloading Care</h2>
            </div>
            <p class="text-muted leading-relaxed mb-0">
                Loading and unloading are critical stages where damage is most likely if mishandled. Our professionally trained movers use dollies, shoulder straps, and ramp systems so even heavy appliances and double-door refrigerators move securely.
            </p>
        </div>

        <!-- 4 Key Advantages Grid -->
        <div class="mb-5">
            <div class="text-center mb-4">
                <span class="badge bg-primary-subtle text-primary rounded-pill px-3 py-1.5 fw-bold mb-2">Service Inclusions</span>
                <h3 class="h4 fw-bold text-dark">Why Our Handling Prevents Damages</h3>
            </div>
            <div class="row g-3 g-lg-4">
                <div class="col-sm-6 col-lg-3">
                    <div class="svc-feature-box">
                        <div class="d-flex align-items-center gap-2 mb-2">
                            <div class="svc-feat-icon mb-0 flex-shrink-0">
                                <i class="bi bi-people-fill"></i>
                            </div>
                            <h4 class="h6 fw-bold text-dark mb-0">Trained Moving Crew</h4>
                        </div>
                        <p class="text-muted small mb-0">Experienced, courteous, and background-verified labor team for delicate handling.</p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="svc-feature-box">
                        <div class="d-flex align-items-center gap-2 mb-2">
                            <div class="svc-feat-icon mb-0 flex-shrink-0">
                                <i class="bi bi-gear-wide-connected"></i>
                            </div>
                            <h4 class="h6 fw-bold text-dark mb-0">Heavy Duty Sliders</h4>
                        </div>
                        <p class="text-muted small mb-0">Floor furniture gliders and hand dollies preventing tiles scratches and back strain.</p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="svc-feature-box">
                        <div class="d-flex align-items-center gap-2 mb-2">
                            <div class="svc-feat-icon mb-0 flex-shrink-0">
                                <i class="bi bi-border-style"></i>
                            </div>
                            <h4 class="h6 fw-bold text-dark mb-0">Door Frame Protectors</h4>
                        </div>
                        <p class="text-muted small mb-0">Corner pads applied to doorways and narrow stairwells to avoid wall scratches.</p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="svc-feature-box">
                        <div class="d-flex align-items-center gap-2 mb-2">
                            <div class="svc-feat-icon mb-0 flex-shrink-0">
                                <i class="bi bi-boxes"></i>
                            </div>
                            <h4 class="h6 fw-bold text-dark mb-0">Balanced Container Stacking</h4>
                        </div>
                        <p class="text-muted small mb-0">Careful scientific weight distribution inside the carrier to eliminate load sliding.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Step-by-Step Moving Process -->
        <div class="mb-5">
            <div class="text-center mb-4">
                <span class="badge bg-primary-subtle text-primary rounded-pill px-3 py-1.5 fw-bold mb-2">Handling Steps</span>
                <h3 class="h4 fw-bold text-dark">Step-by-Step Handling Protocol</h3>
            </div>
            <div class="row g-3 g-lg-4">
                <div class="col-sm-6 col-lg-3">
                    <div class="svc-step-card">
                        <span class="svc-step-badge">Step 01</span>
                        <h4 class="h6 fw-bold text-dark mb-2">Clear Pathway Check</h4>
                        <p class="text-muted small mb-0">Assessing lift dimensions, stairs, and doorway clearance before moving items.</p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="svc-step-card">
                        <span class="svc-step-badge">Step 02</span>
                        <h4 class="h6 fw-bold text-dark mb-2">Heavy Items First</h4>
                        <p class="text-muted small mb-0">Solid base loading: large wardrobes, appliances, and heavy wooden bases.</p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="svc-step-card">
                        <span class="svc-step-badge">Step 03</span>
                        <h4 class="h6 fw-bold text-dark mb-2">Fragile Boxes on Top</h4>
                        <p class="text-muted small mb-0">Lightweight, glassware, and fragile cartons cushioned and tied with safety belts.</p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="svc-step-card">
                        <span class="svc-step-badge">Step 04</span>
                        <h4 class="h6 fw-bold text-dark mb-2">Gentle Room Placement</h4>
                        <p class="text-muted small mb-0">Direct room-by-room unloading without dropping or dragging on floor surfaces.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Full-Width Bottom CTA Banner -->
        <div class="svc-full-cta"><div class="row align-items-center g-3"><div class="col-12 text-center"><h3 class="h4 fw-bold text-white mb-2">Need Professional Loading Helpers?</h3>
                    <p class="text-white-50 mb-0">Hire verified movers equipped with trolleys, blankets, and lifting belts.</p></div></div></div>
    </div>
</section>
