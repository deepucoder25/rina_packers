<?php
$serviceTitle = $service['title'] ?? 'Office Relocation';

?>

<?= view('Modules\Template\Views\breadcrumb', [
    'title'       => 'Office Relocation',
    'description' => 'Zero-downtime commercial workplace shifting, IT server moves, and modular cubicle setup.',
    'breadcrumbs' => [
        ['title' => 'Office Relocation', 'url' => '']
    ]
]) ?>

<!-- Main Full-Width Content Container -->
<section class="py-5 bg-white">
    <div class="container">
        <!-- Main Service Overview Card -->
        <div class="svc-overview-card mb-5">
            <div class="d-flex align-items-center gap-3 mb-3">
                <div class="svc-icon-box mb-0 flex-shrink-0">
                    <i class="bi bi-briefcase-fill"></i>
                </div>
                <h2 class="h3 fw-bold text-dark mb-0">Corporate &amp; Commercial Office Shifting</h2>
            </div>
            <p class="text-muted leading-relaxed mb-0">
                We understand business continuity is critical. Our dedicated commercial move team works across weekends, holidays, and overnight shifts to ensure your employees resume work at the new facility with minimal downtime.
            </p>
        </div>

        <!-- 4 Key Advantages Grid -->
        <div class="mb-5">
            <div class="text-center mb-4">
                <span class="badge bg-primary-subtle text-primary rounded-pill px-3 py-1.5 fw-bold mb-2">Corporate Benefits</span>
                <h3 class="h4 fw-bold text-dark">Why Companies Choose Our Moving Team</h3>
            </div>
            <div class="row g-3 g-lg-4">
                <div class="col-sm-6 col-lg-3">
                    <div class="svc-feature-box">
                        <div class="d-flex align-items-center gap-2 mb-2">
                            <div class="svc-feat-icon mb-0 flex-shrink-0">
                                <i class="bi bi-cpu-fill"></i>
                            </div>
                            <h4 class="h6 fw-bold text-dark mb-0">IT &amp; Server Rack Care</h4>
                        </div>
                        <p class="text-muted small mb-0">Specialized antistatic bubble wrap and shock-cushioned transport for delicate servers.</p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="svc-feature-box">
                        <div class="d-flex align-items-center gap-2 mb-2">
                            <div class="svc-feat-icon mb-0 flex-shrink-0">
                                <i class="bi bi-clock-history"></i>
                            </div>
                            <h4 class="h6 fw-bold text-dark mb-0">Weekend / Night Shift</h4>
                        </div>
                        <p class="text-muted small mb-0">Moves scheduled after operating hours so your daily client operations remain uninterrupted.</p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="svc-feature-box">
                        <div class="d-flex align-items-center gap-2 mb-2">
                            <div class="svc-feat-icon mb-0 flex-shrink-0">
                                <i class="bi bi-file-earmark-lock2-fill"></i>
                            </div>
                            <h4 class="h6 fw-bold text-dark mb-0">Confidential File Archiving</h4>
                        </div>
                        <p class="text-muted small mb-0">Barcoded security bins for audit records, employee files, and sensitive legal documentation.</p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="svc-feature-box">
                        <div class="d-flex align-items-center gap-2 mb-2">
                            <div class="svc-feat-icon mb-0 flex-shrink-0">
                                <i class="bi bi-person-badge-fill"></i>
                            </div>
                            <h4 class="h6 fw-bold text-dark mb-0">Dedicated Move Manager</h4>
                        </div>
                        <p class="text-muted small mb-0">Single point of contact coordinating all phases with your administrative facility team.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Step-by-Step Moving Process -->
        <div class="mb-5">
            <div class="text-center mb-4">
                <span class="badge bg-primary-subtle text-primary rounded-pill px-3 py-1.5 fw-bold mb-2">Execution Protocol</span>
                <h3 class="h4 fw-bold text-dark">Step-by-Step Corporate Relocation</h3>
            </div>
            <div class="row g-3 g-lg-4">
                <div class="col-sm-6 col-lg-3">
                    <div class="svc-step-card">
                        <span class="svc-step-badge">Step 01</span>
                        <h4 class="h6 fw-bold text-dark mb-2">Floor Plan &amp; Audit</h4>
                        <p class="text-muted small mb-0">Site assessment of current and destination floor layout for seamless desk tagging.</p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="svc-step-card">
                        <span class="svc-step-badge">Step 02</span>
                        <h4 class="h6 fw-bold text-dark mb-2">Workstation Tagging</h4>
                        <p class="text-muted small mb-0">Every desk, monitor, chair, and drawer is numbered to match future seat positions.</p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="svc-step-card">
                        <span class="svc-step-badge">Step 03</span>
                        <h4 class="h6 fw-bold text-dark mb-2">Secured Transit</h4>
                        <p class="text-muted small mb-0">Sealed container transport monitored via satellite GPS until safe campus delivery.</p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="svc-step-card">
                        <span class="svc-step-badge">Step 04</span>
                        <h4 class="h6 fw-bold text-dark mb-2">Setup &amp; Handover</h4>
                        <p class="text-muted small mb-0">Re-assembling workstations and conference tables ready for immediate morning work.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Full-Width Bottom CTA Banner -->
        <div class="svc-full-cta"><div class="row align-items-center g-3"><div class="col-12 text-center"><h3 class="h4 fw-bold text-white mb-2">Planning an Office Relocation?</h3>
                    <p class="text-white-50 mb-0">Speak with our commercial project manager for site surveys and custom GST invoices.</p></div></div></div>
    </div>
</section>
