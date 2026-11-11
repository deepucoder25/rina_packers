<!-- ==========================================================================
     Contact Hero / Breadcrumb Section
     ========================================================================== -->
<section class="contact-hero-section text-center position-relative">
    <div class="container position-relative">
        <!-- Top Breadcrumb Capsule Badge -->
        <nav aria-label="breadcrumb">
            <ol class="contact-top-badge list-unstyled">
                <li class="d-inline-flex align-items-center">
                    <a href="<?= site_url('/') ?>"><i class="bi bi-house-door-fill me-1.5"></i> Home</a>
                </li>
                <li class="contact-top-badge-sep d-inline-flex align-items-center" aria-hidden="true">/</li>
                <li class="d-inline-flex align-items-center text-white fw-bold active" aria-current="page">
                    Contact Us
                </li>
            </ol>
        </nav>

        <!-- Main Heading -->
        <h1 class="contact-hero-title">
            Get in Touch With
            <span class="contact-hero-accent">Our Moving Experts
                <svg class="contact-accent-curve" viewBox="0 0 180 14" preserveAspectRatio="none">
                    <path d="M2,5 Q90,14 178,3" stroke="var(--secondary)" stroke-width="4.5" stroke-linecap="round" fill="none"/>
                </svg>
            </span>
        </h1>

        <!-- Subtitle -->
        <p class="contact-hero-desc">
            Have questions about moving dates, packing material, or pricing? Our dedicated relocation coordinators are available 24/7 to assist you with transparent, upfront quotes.
        </p>
    </div>
</section>

<!-- ==========================================================================
     Main Contact Section
     ========================================================================== -->
<section class="section py-5">
    <div class="container">

        <!-- Flash Notifications -->
        <?php if (!empty($success)): ?>
            <div class="alert alert-success d-flex align-items-center gap-2 mb-4 rounded-3 p-3">
                <i class="bi bi-check-circle-fill text-success fs-5"></i>
                <div class="fw-semibold"><?= esc($success) ?></div>
            </div>
        <?php endif; ?>

        <?php if (!empty($error)): ?>
            <div class="alert alert-danger d-flex align-items-center gap-2 mb-4 rounded-3 p-3">
                <i class="bi bi-exclamation-triangle-fill text-danger fs-5"></i>
                <div class="fw-semibold"><?= esc($error) ?></div>
            </div>
        <?php endif; ?>

        <!-- Quick 3-Channel Connect Strip -->
        <div class="row g-3 g-lg-4 mb-5">
            <!-- 24/7 Call Line with Both Numbers -->
            <div class="col-12 col-md-4">
                <div class="contact-quick-card">
                    <div class="contact-quick-icon blue">
                        <i class="bi bi-telephone-inbound-fill"></i>
                    </div>
                    <div class="contact-quick-content">
                        <span class="contact-quick-title">24x7 Helpline</span>
                        <div class="d-flex flex-wrap gap-2">
                            <a href="tel:<?= preg_replace('/[^0-9+]/', '', $site->phone) ?>" class="contact-quick-val mb-0">
                                <?= esc($site->phone) ?>
                            </a>
                            <?php if (!empty($site->phone1)): ?>
                                <span class="text-muted fw-bold">/</span>
                                <a href="tel:<?= preg_replace('/[^0-9+]/', '', $site->phone1) ?>" class="contact-quick-val mb-0">
                                    <?= esc($site->phone1) ?>
                                </a>
                            <?php endif; ?>
                        </div>
                        <p class="contact-quick-sub mt-1">Instant moving quote</p>
                    </div>
                </div>
            </div>

            <!-- Email Support -->
            <div class="col-12 col-md-4">
                <div class="contact-quick-card">
                    <div class="contact-quick-icon amber">
                        <i class="bi bi-envelope-check-fill"></i>
                    </div>
                    <div class="contact-quick-content">
                        <span class="contact-quick-title">Email Inquiries</span>
                        <a href="mailto:<?= esc($site->email) ?>" class="contact-quick-val text-truncate">
                            <?= esc($site->email) ?>
                        </a>
                        <p class="contact-quick-sub">Corporate RFPs</p>
                    </div>
                </div>
            </div>

            <!-- Head Office -->
            <div class="col-12 col-md-4">
                <div class="contact-quick-card">
                    <div class="contact-quick-icon red">
                        <i class="bi bi-geo-alt-fill"></i>
                    </div>
                    <div class="contact-quick-content">
                        <span class="contact-quick-title">Main Branch</span>
                        <span class="contact-quick-val">Fatasil Chariali</span>
                        <p class="contact-quick-sub">Guwahati, PIN: 781025</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main Form + Details Grid -->
        <div class="row g-4 g-lg-5 mb-5 align-items-stretch">
            
            <!-- Left Column: Send An Inquiry Form Card -->
            <div class="col-12 col-lg-7">
                <div class="contact-form-card">
                    <span class="contact-card-badge">
                        <i class="bi bi-lightning-charge-fill text-warning"></i> Fast 15-Min Response
                    </span>
                    <h2 class="contact-card-title">Send An Inquiry</h2>
                    <p class="contact-card-subtitle">
                        Fill out this quick form and our verified moving coordinator will call you with a detailed, transparent estimate.
                    </p>

                    <form id="contactform" class="ajax-form" data-url="<?= site_url('contacts/contact') ?>" data-result="contactformresults" onsubmit="return false;">
                        <?= csrf_field() ?>

                        <div class="row g-3 mb-3">
                            <!-- Full Name -->
                            <div class="col-12 col-md-6 field-wrap">
                                <label class="contact-field-label">
                                    <i class="bi bi-person-fill text-primary"></i> Your Name <span class="text-danger">*</span>
                                </label>
                                <div class="contact-input-wrap">
                                    <i class="bi bi-person contact-input-icon"></i>
                                    <input type="text" name="name" required placeholder="Full Name" class="form-control contact-input">
                                </div>
                            </div>

                            <!-- Phone Number -->
                            <div class="col-12 col-md-6 field-wrap">
                                <label class="contact-field-label">
                                    <i class="bi bi-telephone-fill text-primary"></i> Phone Number <span class="text-danger">*</span>
                                </label>
                                <div class="contact-input-wrap">
                                    <i class="bi bi-telephone contact-input-icon"></i>
                                    <input type="tel" name="phone" required placeholder="10-digit mobile number" class="form-control contact-input">
                                </div>
                            </div>
                        </div>

                        <div class="row g-3 mb-3">
                            <!-- Email Address -->
                            <div class="col-12 col-md-6 field-wrap">
                                <label class="contact-field-label">
                                    <i class="bi bi-envelope-fill text-primary"></i> Email Address
                                </label>
                                <div class="contact-input-wrap">
                                    <i class="bi bi-envelope contact-input-icon"></i>
                                    <input type="email" name="email" placeholder="you@domain.com" class="form-control contact-input">
                                </div>
                            </div>

                            <!-- Required Service -->
                            <div class="col-12 col-md-6 field-wrap">
                                <label class="contact-field-label">
                                    <i class="bi bi-box-seam-fill text-primary"></i> Required Service
                                </label>
                                <div class="contact-input-wrap">
                                    <i class="bi bi-truck contact-input-icon"></i>
                                    <select name="service" class="form-select contact-select">
                                        <option value="House Shifting" selected>House Shifting (1 / 2 / 3 BHK)</option>
                                        <option value="Office Relocation">Office Corporate Relocation</option>
                                        <option value="Vehicle Transportation">Vehicle Transport (Car / Bike)</option>
                                        <option value="Local Shifting">Local City Shifting</option>
                                        <option value="Domestic Relocation">Interstate / Pan-India Move</option>
                                        <option value="Storage Solutions">Warehouse &amp; Household Storage</option>
                                        <option value="Packing & Unpacking">Professional Packing &amp; Unpacking</option>
                                        <option value="Loading & Unloading">Loading &amp; Unloading Only</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <!-- Moving Details / Message -->
                        <div class="mb-4 field-wrap">
                            <label class="contact-field-label">
                                <i class="bi bi-chat-left-text-fill text-primary"></i> Moving Details / Message
                            </label>
                            <textarea name="message" rows="4" placeholder="Moving From (city/area), Moving To (destination), Preferred Date, approx list of items..." class="form-control contact-textarea"></textarea>
                        </div>

                        <!-- Submit Button -->
                        <button type="submit" class="contact-btn-submit">
                            <i class="bi bi-send-fill"></i>
                            <span>Submit Inquiry Now</span>
                            <i class="bi bi-arrow-right"></i>
                        </button>

                        <!-- Trust Guarantees -->
                        <div class="contact-form-guarantees">
                            <div class="contact-guarantee-pill">
                                <i class="bi bi-shield-lock-fill text-success"></i> 100% Privacy Protected
                            </div>
                            <div class="contact-guarantee-pill">
                                <i class="bi bi-currency-rupee text-primary"></i> Zero Hidden Charges
                            </div>
                            <div class="contact-guarantee-pill">
                                <i class="bi bi-clock-history text-warning"></i> 15-Min Callback
                            </div>
                        </div>

                        <!-- Result Box for AJAX Feedback -->
                        <div id="contactformresults" class="mt-3"></div>
                    </form>
                </div>
            </div>

            <!-- Right Column: Head Office & Support Card -->
            <div class="col-12 col-lg-5">
                <div class="contact-info-card">
                    <h3 class="contact-info-title">
                        <i class="bi bi-buildings-fill text-primary me-2"></i> Head Office &amp; Support
                    </h3>
                    <p class="contact-info-subtitle">
                        Official corporate branch and customer assistance center for Northeast India.
                    </p>

                    <!-- Address -->
                    <div class="contact-detail-row">
                        <div class="contact-detail-icon">
                            <i class="bi bi-geo-alt-fill"></i>
                        </div>
                        <div>
                            <div class="contact-detail-lbl">Office Address</div>
                            <div class="contact-detail-val"><?= esc($site->address) ?></div>
                            <a href="https://www.google.com/maps/dir/?api=1&destination=Fatasil+Chariali,+Guwahati,+Assam+781025" target="_blank" rel="noopener noreferrer" class="small fw-bold text-decoration-none text-primary">
                                <i class="bi bi-compass me-1"></i> Get Driving Directions
                            </a>
                        </div>
                    </div>

                    <!-- Phone Lines -->
                    <div class="contact-detail-row">
                        <div class="contact-detail-icon">
                            <i class="bi bi-telephone-fill"></i>
                        </div>
                        <div>
                            <div class="contact-detail-lbl">Phone / Toll Free</div>
                            <div class="contact-phone-group">
                                <a href="tel:<?= preg_replace('/[^0-9+]/', '', $site->phone) ?>" class="contact-phone-chip">
                                    <i class="bi bi-telephone-fill text-primary"></i> <?= esc($site->phone) ?>
                                </a>
                                <?php if (!empty($site->phone1)): ?>
                                    <a href="tel:<?= preg_replace('/[^0-9+]/', '', $site->phone1) ?>" class="contact-phone-chip">
                                        <i class="bi bi-telephone-fill text-primary"></i> <?= esc($site->phone1) ?>
                                    </a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>

                    <!-- WhatsApp Line -->
                    <div class="contact-detail-row">
                        <div class="contact-detail-icon">
                            <i class="bi bi-whatsapp"></i>
                        </div>
                        <div>
                            <div class="contact-detail-lbl">Instant WhatsApp</div>
                            <div class="contact-phone-group">
                                <a href="https://wa.me/<?= preg_replace('/[^0-9]/', '', $site->whatsapp) ?>?text=<?= urlencode('Hello ' . ($company3 ?? 'Rina Packers') . ', I would like to get a moving quote.') ?>" target="_blank" rel="noopener noreferrer" class="contact-phone-chip">
                                    <i class="bi bi-whatsapp text-success"></i> +<?= preg_replace('/[^0-9]/', '', $site->whatsapp) ?> (Chat Now)
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Email -->
                    <div class="contact-detail-row">
                        <div class="contact-detail-icon">
                            <i class="bi bi-envelope-fill"></i>
                        </div>
                        <div>
                            <div class="contact-detail-lbl">Email Support</div>
                            <div class="contact-detail-val">
                                <a href="mailto:<?= esc($site->email) ?>"><?= esc($site->email) ?></a>
                            </div>
                        </div>
                    </div>

                    <!-- Working Hours -->
                    <div class="contact-detail-row">
                        <div class="contact-detail-icon">
                            <i class="bi bi-clock-fill"></i>
                        </div>
                        <div>
                            <div class="contact-detail-lbl">Working Hours</div>
                            <div class="contact-detail-val"><?= esc($site->workingHours) ?></div>
                            <span class="badge bg-success-subtle text-success fw-bold px-2 py-1 mt-1">
                                <i class="bi bi-circle-fill me-1 small"></i> Active Mon – Sat
                            </span>
                        </div>
                    </div>

                    <!-- Verified Notice -->
                    <div class="contact-card-notice p-3 rounded-3 mt-3">
                        <i class="bi bi-shield-check text-primary me-1"></i>
                        <strong>Verified Move Coordinators:</strong> Available 24x7 for urgent shifting, corporate RFPs, and transit insurance claims.
                    </div>
                </div>
            </div>
        </div>

        <!-- Interactive Google Map Location Card -->
        <div class="row mb-5">
            <div class="col-12">
                <div class="contact-map-card">
                    <iframe 
                        title="Rina Packers &amp; Movers Location"
                        src="https://www.google.com/maps?q=Fatasil+Chariali,+Guwahati,+Assam+781025&amp;output=embed" 
                        class="contact-map-frame" 
                        loading="lazy" 
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                    <div class="contact-map-overlay">
                        <div class="contact-map-overlay-title">
                            <i class="bi bi-geo-alt-fill text-danger me-1"></i> <?= esc($company3 ?? 'Rina Packers') ?> Head Office
                        </div>
                        <p class="contact-map-overlay-desc">
                            <?= esc($site->address) ?>
                        </p>
                        <a href="https://www.google.com/maps/dir/?api=1&destination=Fatasil+Chariali,+Guwahati,+Assam+781025" target="_blank" rel="noopener noreferrer" class="d-inline-block mt-2 small fw-bold text-primary text-decoration-none">
                            <i class="bi bi-box-arrow-up-right me-1"></i> Open in Google Maps
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Quick Help & Moving FAQs -->
        <div class="row justify-content-center">
            <div class="col-12 col-lg-10">
                <div class="text-center mb-4">
                    <span class="badge bg-primary-subtle text-primary fw-bold text-uppercase px-3 py-1.5 rounded-pill mb-2">
                        Help &amp; Answers
                    </span>
                    <h3 class="fw-bold fs-4 text-dark mb-2">Frequently Asked Questions</h3>
                    <p class="text-muted small">Quick answers before submitting your inquiry</p>
                </div>

                <div class="accordion" id="contactFaqAccordion">
                    <!-- FAQ 1 -->
                    <div class="contact-faq-item">
                        <h4 class="accordion-header" id="cfaqH1">
                            <button class="accordion-button contact-faq-btn collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#cfaqC1" aria-expanded="false" aria-controls="cfaqC1">
                                How early should I schedule my moving date?
                            </button>
                        </h4>
                        <div id="cfaqC1" class="accordion-collapse collapse" aria-labelledby="cfaqH1" data-bs-parent="#contactFaqAccordion">
                            <div class="accordion-body contact-faq-body">
                                We recommend scheduling your move 2 to 4 days in advance for local shifting, and 5 to 7 days in advance for interstate or pan-India relocations. However, we also cater to same-day urgent shifting based on slot availability.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 2 -->
                    <div class="contact-faq-item">
                        <h4 class="accordion-header" id="cfaqH2">
                            <button class="accordion-button contact-faq-btn collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#cfaqC2" aria-expanded="false" aria-controls="cfaqC2">
                                Is the pre-move survey really 100% free with no obligation?
                            </button>
                        </h4>
                        <div id="cfaqC2" class="accordion-collapse collapse" aria-labelledby="cfaqH2" data-bs-parent="#contactFaqAccordion">
                            <div class="accordion-body contact-faq-body">
                                Yes, absolutely! Our relocation supervisor will visit your location or conduct a video survey to assess the items, packing requirements, and distance. You will receive an all-inclusive written estimate without any commitment.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 3 -->
                    <div class="contact-faq-item">
                        <h4 class="accordion-header" id="cfaqH3">
                            <button class="accordion-button contact-faq-btn collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#cfaqC3" aria-expanded="false" aria-controls="cfaqC3">
                                Are packing materials included in the quoted price?
                            </button>
                        </h4>
                        <div id="cfaqC3" class="accordion-collapse collapse" aria-labelledby="cfaqH3" data-bs-parent="#contactFaqAccordion">
                            <div class="accordion-body contact-faq-body">
                                Yes. All quotes include heavy-duty 5-layer corrugated carton boxes, multi-layer bubble wrap, foam sheets, waterproof stretch film, and adhesive tape. Specialized wooden crating for delicate items is also available upon request.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 4 -->
                    <div class="contact-faq-item">
                        <h4 class="accordion-header" id="cfaqH4">
                            <button class="accordion-button contact-faq-btn collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#cfaqC4" aria-expanded="false" aria-controls="cfaqC4">
                                Do you provide IBA approved bills for corporate or government claims?
                            </button>
                        </h4>
                        <div id="cfaqC4" class="accordion-collapse collapse" aria-labelledby="cfaqH4" data-bs-parent="#contactFaqAccordion">
                            <div class="accordion-body contact-faq-body">
                                Yes, we provide full IBA-approved GST invoices, consignment notes (bilty), itemized inventory lists, and transit insurance policies accepted by all central/state government departments, PSUs, banks, and private corporates.
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>
</section>
