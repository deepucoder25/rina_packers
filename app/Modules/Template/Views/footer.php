<?php
$wh          = $workingHours ?? ($site->comp['workingHours'] ?? 'Mon - Sat: 9:00 AM - 8:00 PM');
$websiteUrl  = 'www.rinapackers.com';
?>
<footer class="site-footer">
    <div class="container">
        <!-- Main Footer 4 Columns -->
        <div class="row g-4 g-xl-5 mb-5 footer-top-row">
            <!-- Col 1: Brand Info -->
            <div class="col-12 col-md-6 col-lg-3">
                <a href="<?= site_url('/') ?>" class="footer-brand-text d-inline-block mb-3 text-decoration-none" title="<?= esc($company3) ?>">
                    <span class="footer-brand-title">Rina <span class="text-cyan">Packers</span></span>
                    <span class="footer-brand-sub">AND MOVERS</span>
                </a>
                <p class="footer-desc">
                    <?= $company3 ?> provides safe, reliable and affordable moving solutions for your home, office and vehicle.
                </p>
                <div class="footer-cyan-accent mb-4"></div>

                <!-- Social Media Chips -->
                <div class="d-flex align-items-center gap-2">
                    <a href="<?= $facebookhtml ?>" target="_blank" rel="noopener noreferrer" class="footer-social-chip" title="Facebook" aria-label="Facebook">
                        <i class="bi bi-facebook"></i>
                    </a>
                    <a href="<?= $instagramhtml ?>" target="_blank" rel="noopener noreferrer" class="footer-social-chip" title="Instagram" aria-label="Instagram">
                        <i class="bi bi-instagram"></i>
                    </a>
                    <a href="<?= $twitterhtml ?>" target="_blank" rel="noopener noreferrer" class="footer-social-chip" title="Twitter / X" aria-label="Twitter">
                        <i class="bi bi-twitter-x"></i>
                    </a>
                    <a href="<?= $youtubehtml ?>" target="_blank" rel="noopener noreferrer" class="footer-social-chip" title="YouTube" aria-label="YouTube">
                        <i class="bi bi-youtube"></i>
                    </a>
                </div>
            </div>

            <!-- Col 2: QUICK NAVIGATION (Same as Header Navigation) -->
            <div class="col-6 col-md-6 col-lg-3">
                <div class="footer-col-title">QUICK NAVIGATION</div>
                <div class="footer-title-underline"></div>
                <ul class="footer-nav-list">
                    <li><a href="<?= site_url('/') ?>"><i class="bi bi-chevron-right"></i> Home</a></li>
                    <li><a href="<?= site_url('about') ?>"><i class="bi bi-chevron-right"></i> About Us</a></li>
                    <li><a href="<?= site_url('city') ?>"><i class="bi bi-chevron-right"></i> Cities &amp; States</a></li>
                    <li><a href="<?= site_url('tracking') ?>"><i class="bi bi-chevron-right"></i> Order Tracking</a></li>
                    <li><a href="<?= site_url('reviews') ?>"><i class="bi bi-chevron-right"></i> Customer Reviews</a></li>
                    <li><a href="<?= site_url('photo-gallery') ?>"><i class="bi bi-chevron-right"></i> Photo Gallery</a></li>
                    <li><a href="<?= site_url('blog') ?>"><i class="bi bi-chevron-right"></i> Blog &amp; Updates</a></li>
                    <li><a href="<?= site_url('contact') ?>"><i class="bi bi-chevron-right"></i> Contact Us</a></li>
                </ul>
            </div>

            <!-- Col 3: OUR SERVICES (Exact 8 matching navigation) -->
            <div class="col-6 col-md-6 col-lg-3">
                <div class="footer-col-title">OUR SERVICES</div>
                <div class="footer-title-underline"></div>
                <ul class="footer-service-list">
                    <li>
                        <a href="<?= site_url('services/household-moving') ?>">
                            <i class="bi bi-house-door"></i> <span>House Shifting</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?= site_url('services/office-relocation') ?>">
                            <i class="bi bi-building"></i> <span>Office Relocation</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?= site_url('services/vehicle-transportation') ?>">
                            <i class="bi bi-car-front"></i> <span>Vehicle Transportation</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?= site_url('services/loading-unloading') ?>">
                            <i class="bi bi-truck"></i> <span>Loading &amp; Unloading</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?= site_url('services/packing-moving') ?>">
                            <i class="bi bi-box-seam"></i> <span>Packing &amp; Unpacking</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?= site_url('services/warehouse-storage') ?>">
                            <i class="bi bi-archive"></i> <span>Storage Solutions</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?= site_url('services/local-shifting') ?>">
                            <i class="bi bi-geo-alt"></i> <span>Local Shifting</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?= site_url('services/insurance-coverage') ?>">
                            <i class="bi bi-shield-check"></i> <span>Insurance Coverage</span>
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Col 4: CONTACT US -->
            <div class="col-12 col-md-6 col-lg-3">
                <div class="footer-col-title">CONTACT US</div>
                <div class="footer-title-underline"></div>

                <!-- Contact List -->
                <div class="footer-contact-block">
                    <!-- Address -->
                    <?php if (!empty($address)): ?>
                    <div class="footer-contact-item">
                        <div class="contact-icon-bubble">
                            <i class="bi bi-geo-alt-fill"></i>
                        </div>
                        <div class="contact-item-text">
                            <span><?= esc($address) ?></span>
                        </div>
                    </div>
                    <?php endif; ?>

                    <!-- Phone Numbers (stacked) -->
                    <div class="footer-contact-item">
                        <div class="contact-icon-bubble">
                            <i class="bi bi-telephone-fill"></i>
                        </div>
                        <div class="contact-item-text d-flex flex-column gap-2">
                            <a <?= $phonehtml ?> class="d-inline-flex align-items-center py-1"><?= $phone ?></a>
                            <?php if (!empty($phone1)): ?>
                            <a <?= $phonehtml1 ?> class="d-inline-flex align-items-center py-1"><?= $phone1 ?></a>
                            <?php endif; ?>
                        </div>
                    </div>

                    <!-- Email -->
                    <?php if (!empty($mail)): ?>
                    <div class="footer-contact-item">
                        <div class="contact-icon-bubble">
                            <i class="bi bi-envelope-fill"></i>
                        </div>
                        <div class="contact-item-text">
                            <a href="<?= $mailhtml ?>"><?= $mail ?></a>
                        </div>
                    </div>
                    <?php endif; ?>

                    <!-- Website URL -->
                    <div class="footer-contact-item">
                        <div class="contact-icon-bubble">
                            <i class="bi bi-globe"></i>
                        </div>
                        <div class="contact-item-text">
                            <a href="<?= site_url('/') ?>"><?= esc($websiteUrl) ?></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Value Propositions Strip (5 Items in Rounded Pill Card) -->
        <div class="footer-value-props-strip">
            <div class="row g-3 g-lg-2 text-center text-md-start align-items-center">
                <!-- 1. SAFE & SECURE -->
                <div class="col-12 col-sm-6 col-lg prop-col">
                    <div class="prop-item">
                        <div class="prop-icon">
                            <i class="bi bi-shield-check"></i>
                        </div>
                        <div class="prop-info">
                            <div class="prop-title">SAFE &amp; SECURE</div>
                            <p class="prop-desc">Your belongings are in safe hands</p>
                        </div>
                    </div>
                </div>

                <!-- 2. ON TIME DELIVERY -->
                <div class="col-12 col-sm-6 col-lg prop-col">
                    <div class="prop-item">
                        <div class="prop-icon">
                            <i class="bi bi-stopwatch"></i>
                        </div>
                        <div class="prop-info">
                            <div class="prop-title">ON TIME DELIVERY</div>
                            <p class="prop-desc">Timely service, every time</p>
                        </div>
                    </div>
                </div>

                <!-- 3. HAPPY CUSTOMERS -->
                <div class="col-12 col-sm-6 col-lg prop-col">
                    <div class="prop-item">
                        <div class="prop-icon">
                            <i class="bi bi-people"></i>
                        </div>
                        <div class="prop-info">
                            <div class="prop-title">HAPPY CUSTOMERS</div>
                            <p class="prop-desc">10,000+ satisfied customers</p>
                        </div>
                    </div>
                </div>

                <!-- 4. 15+ YEARS EXPERIENCE -->
                <div class="col-12 col-sm-6 col-lg prop-col">
                    <div class="prop-item">
                        <div class="prop-icon">
                            <i class="bi bi-award"></i>
                        </div>
                        <div class="prop-info">
                            <div class="prop-title">15+ YEARS EXPERIENCE</div>
                            <p class="prop-desc">Trusted service with experienced team</p>
                        </div>
                    </div>
                </div>

                <!-- 5. 24/7 SUPPORT -->
                <div class="col-12 col-sm-6 col-lg prop-col">
                    <div class="prop-item">
                        <div class="prop-icon">
                            <i class="bi bi-headset"></i>
                        </div>
                        <div class="prop-info">
                            <div class="prop-title">24/7 SUPPORT</div>
                            <p class="prop-desc">We are always here to help you</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bottom Bar -->
    <div class="footer-bottom-bar">
        <div class="container">
            <div class="row align-items-center gy-3">
                <!-- Left: Copyright -->
                <div class="col-12 col-lg-4 text-center text-lg-start">
                    <div class="footer-copyright-text">
                        &copy; <?= date('Y') ?> <?= $company3 ?>. All Rights Reserved.
                    </div>
                </div>

                <!-- Center: Trust Slogan with Lock -->
                <div class="col-12 col-lg-4 text-center">
                    <div class="footer-trust-slogan">
                        <i class="bi bi-lock-fill text-cyan"></i>
                        <span class="text-white fw-semibold">Your Move, Our Responsibility.</span>
                        <span class="text-cyan">Safe Packing. Timely Delivery.</span>
                    </div>
                </div>

                <!-- Right: Payment Methods -->
                <div class="col-12 col-lg-4 text-center text-lg-end">
                    <div class="footer-payment-wrap">
                        <span class="payment-label">We Accept:</span>
                        <span class="pay-chip pay-visa">VISA</span>
                        <span class="pay-chip pay-mastercard"><span class="mc-dot-1"></span><span class="mc-dot-2"></span></span>
                        <span class="pay-chip pay-amex">AMEX</span>
                        <span class="pay-chip pay-upi">UPI <i class="bi bi-arrow-up-right-circle-fill"></i></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- Dual Floating Action Triggers (Call & WhatsApp) with Direct Number Buttons -->
<div class="site-floating-actions" aria-label="Quick Contact Actions">
    <!-- 1. LEFT SIDE: CALL FLOATING BUTTON & NUMBERS -->
    <div class="floating-action-wrapper floating-call-wrapper">
        <!-- Call Numbers (Shows Only Numbers) -->
        <div class="floating-numbers-pop" id="floatingCallPopup" role="menu" aria-label="Call Numbers">
            <a <?= $phonehtml ?> class="floating-num-item call-item" role="menuitem" title="Call <?= $phone ?>">
                <i class="bi bi-telephone-fill"></i>
                <span><?= $phone ?></span>
            </a>
            <?php if (!empty($phone1)): ?>
            <a <?= $phonehtml1 ?> class="floating-num-item call-item" role="menuitem" title="Call <?= $phone1 ?>">
                <i class="bi bi-telephone-fill"></i>
                <span><?= $phone1 ?></span>
            </a>
            <?php endif; ?>
        </div>

        <!-- Floating Call Trigger Button -->
        <button type="button" class="floating-btn btn-floating-call" id="btnFloatingCall" onclick="toggleFloatingPopup('call')" aria-expanded="false" aria-controls="floatingCallPopup" aria-label="Call Rina Packers Helpline">
            <span class="btn-pulse-ring pulse-call"></span>
            <i class="bi bi-telephone-fill floating-btn-icon"></i>
            <span class="floating-btn-label">Call</span>
        </button>
    </div>

    <!-- 2. RIGHT SIDE: WHATSAPP FLOATING BUTTON & NUMBERS -->
    <div class="floating-action-wrapper floating-wa-wrapper">
        <!-- WhatsApp Numbers (Shows Only Numbers) -->
        <div class="floating-numbers-pop" id="floatingWaPopup" role="menu" aria-label="WhatsApp Numbers">
            <a href="<?= $whatsapphtml ?>?text=<?= urlencode('Hello Rina Packers, I want an instant moving quote.') ?>" target="_blank" rel="noopener noreferrer" class="floating-num-item wa-item" role="menuitem" title="Chat on WhatsApp <?= esc($phone ?? '') ?>">
                <i class="bi bi-whatsapp"></i>
                <span><?= $phone ?></span>
            </a>
            <?php if (!empty($phone1)): ?>
            <a href="<?= $whatsapphtml1 ?>?text=<?= urlencode('Hello Rina Packers, I want an instant moving quote.') ?>" target="_blank" rel="noopener noreferrer" class="floating-num-item wa-item" role="menuitem" title="Chat on WhatsApp <?= esc($phone1) ?>">
                <i class="bi bi-whatsapp"></i>
                <span><?= $phone1 ?></span>
            </a>
            <?php endif; ?>
        </div>

        <!-- Floating WhatsApp Trigger Button -->
        <button type="button" class="floating-btn btn-floating-wa" id="btnFloatingWa" onclick="toggleFloatingPopup('whatsapp')" aria-expanded="false" aria-controls="floatingWaPopup" aria-label="Chat with Rina Packers on WhatsApp">
            <span class="btn-pulse-ring pulse-wa"></span>
            <i class="bi bi-whatsapp floating-btn-icon"></i>
            <span class="floating-btn-label">WhatsApp</span>
        </button>
    </div>
</div>

<script>
function toggleFloatingPopup(type, forceState) {
    const callPopup = document.getElementById('floatingCallPopup');
    const waPopup   = document.getElementById('floatingWaPopup');
    const btnCall   = document.getElementById('btnFloatingCall');
    const btnWa     = document.getElementById('btnFloatingWa');

    if (!callPopup || !waPopup) return;

    if (type === 'call') {
        const isOpen = forceState !== undefined ? forceState : !callPopup.classList.contains('show');
        if (isOpen) {
            callPopup.classList.add('show');
            callPopup.setAttribute('aria-hidden', 'false');
            if (btnCall) btnCall.setAttribute('aria-expanded', 'true');
            // Close WhatsApp
            waPopup.classList.remove('show');
            waPopup.setAttribute('aria-hidden', 'true');
            if (btnWa) btnWa.setAttribute('aria-expanded', 'false');
        } else {
            callPopup.classList.remove('show');
            callPopup.setAttribute('aria-hidden', 'true');
            if (btnCall) btnCall.setAttribute('aria-expanded', 'false');
        }
    } else if (type === 'whatsapp') {
        const isOpen = forceState !== undefined ? forceState : !waPopup.classList.contains('show');
        if (isOpen) {
            waPopup.classList.add('show');
            waPopup.setAttribute('aria-hidden', 'false');
            if (btnWa) btnWa.setAttribute('aria-expanded', 'true');
            // Close Call
            callPopup.classList.remove('show');
            callPopup.setAttribute('aria-hidden', 'true');
            if (btnCall) btnCall.setAttribute('aria-expanded', 'false');
        } else {
            waPopup.classList.remove('show');
            waPopup.setAttribute('aria-hidden', 'true');
            if (btnWa) btnWa.setAttribute('aria-expanded', 'false');
        }
    }
}

// Click outside to dismiss popups
document.addEventListener('click', function(e) {
    const callWrapper = document.querySelector('.floating-call-wrapper');
    const waWrapper   = document.querySelector('.floating-wa-wrapper');

    if (callWrapper && !callWrapper.contains(e.target)) {
        toggleFloatingPopup('call', false);
    }
    if (waWrapper && !waWrapper.contains(e.target)) {
        toggleFloatingPopup('whatsapp', false);
    }
});

// Escape key to dismiss
document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape') {
        toggleFloatingPopup('call', false);
        toggleFloatingPopup('whatsapp', false);
    }
});
</script>

<!-- Quote Modal Component (Callable site-wide) -->
<?= view('Modules\Contacts\Views\quotemodal') ?>

<!-- Bootstrap 5 JS Bundle CDN -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="<?= base_url('assets/js/form.js') ?>"></script>

</body>
</html>
