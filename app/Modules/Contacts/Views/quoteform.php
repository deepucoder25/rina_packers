<div class="hero-quote-box position-relative" itemscope itemtype="https://schema.org/QuoteAction">
    <!-- Skyline Watermark on Right -->
    <div class="quote-skyline-bg" aria-hidden="true">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 260 120" fill="currentColor" class="quote-skyline-svg">
            <!-- Left Minaret -->
            <path d="M15 120 L18 35 L17 32 L19 32 L19 25 L17 25 L17 20 L20 20 L20 12 L18.5 7 L21.5 7 L20 12 L20 20 L23 20 L23 25 L21 25 L21 32 L23 32 L22 35 L25 120 Z"/>
            <!-- Dome 1 Left -->
            <path d="M45 120 L45 70 C45 55 58 50 60 40 C62 50 75 55 75 70 L75 120 Z"/>
            <!-- Main Center Dome -->
            <path d="M95 120 L95 65 C95 40 115 32 130 15 C145 32 165 40 165 65 L165 120 Z"/>
            <path d="M129 15 L129 0 L131 0 L131 15 Z"/>
            <!-- Dome 2 Right -->
            <path d="M185 120 L185 70 C185 55 198 50 200 40 C202 50 215 55 215 70 L215 120 Z"/>
            <!-- Right Minaret -->
            <path d="M235 120 L238 35 L237 32 L239 32 L239 25 L237 25 L237 20 L240 20 L240 12 L238.5 7 L241.5 7 L240 12 L240 20 L243 20 L243 25 L241 25 L241 32 L243 32 L242 35 L245 120 Z"/>
        </svg>
    </div>

    <!-- Bottom-Right Curved Ribbon Accent -->
    <div class="quote-corner-ribbon" aria-hidden="true">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 160 50" preserveAspectRatio="none">
            <path d="M0,50 Q80,45 160,0 L160,50 Z" fill="#e51a24"/>
            <path d="M0,50 Q75,40 160,5 L160,16 Q80,46 15,50 Z" fill="#0056b3"/>
        </svg>
    </div>

    <!-- Card Top Header Bar -->
    <div class="quote-header-bar">
        <!-- Left: Dark Navy Header Tab with Cyan Swoosh -->
        <div class="quote-header-tab">
            <div class="quote-calc-badge">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="currentColor">
                    <path d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-5 14H7v-2h7v2zm3-4H7v-2h10v2zm0-4H7V7h10v2z"/>
                </svg>
            </div>
            <div class="quote-header-text">
                <div class="quote-header-title" itemprop="name">Get Instant Moving Cost Estimate</div>
                <div class="quote-header-subtitle" itemprop="description">Just fill in the details &amp; get your free quote instantly!</div>
            </div>
        </div>

        <!-- Right: Red Guarantee Pill Badge -->
        <div class="quote-guarantee-red-badge shadow-sm">
            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="currentColor">
                <path d="M12 1L3 5v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V5l-9-4zm-2 16l-4-4 1.41-1.41L10 14.17l6.59-6.59L18 9l-8 8z"/>
            </svg>
            <span>Guaranteed Lowest Rates</span>
        </div>
    </div>

    <!-- Booking Form (3x2 White Pill Cards) -->
    <form id="quoteform" class="ajax-form quote-form-grid" data-url="<?= site_url('contacts/booking') ?>" data-result="quoteformresults" onsubmit="return false;">
        <div class="row g-2 g-lg-3">
            <!-- 1. Your Name -->
            <div class="col-12 col-md-4">
                <div class="quote-field-pill">
                    <div class="quote-field-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/>
                        </svg>
                    </div>
                    <div class="quote-field-body">
                        <label for="heroQteName" class="quote-field-label">
                            Your Name <span class="text-danger">*</span>
                        </label>
                        <input type="text" id="heroQteName" name="name" class="quote-field-input" placeholder="Enter your full name" required autocomplete="name">
                    </div>
                </div>
            </div>

            <!-- 2. Mobile Number -->
            <div class="col-12 col-md-4">
                <div class="quote-field-pill">
                    <div class="quote-field-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M6.62 10.79a15.053 15.053 0 006.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z"/>
                        </svg>
                    </div>
                    <div class="quote-field-body">
                        <label for="heroQtePhone" class="quote-field-label">
                            Mobile Number <span class="text-danger">*</span>
                        </label>
                        <input type="tel" id="heroQtePhone" name="phone" class="quote-field-input" placeholder="Enter mobile number" required pattern="[0-9]{10}" autocomplete="tel">
                    </div>
                </div>
            </div>

            <!-- 3. Select Service (Custom Designed Dropdown) -->
            <div class="col-12 col-md-4">
                <div class="dropdown quote-custom-dropdown w-100">
                    <input type="hidden" name="mtype" id="heroQteServiceInput" value="House Shifting">
                    <div class="quote-field-pill quote-field-pill-select" data-bs-toggle="dropdown" data-bs-auto-close="true" aria-expanded="false" role="button" tabindex="0">
                        <div class="quote-field-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/>
                            </svg>
                        </div>
                        <div class="quote-field-body">
                            <span class="quote-field-label">Select Service</span>
                            <span class="quote-field-selected-text" id="heroQteServiceLabel">House Shifting</span>
                        </div>
                        <div class="quote-select-chevron">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M7.41 8.59L12 13.17l4.59-4.58L18 10l-6 6-6-6 1.41-1.41z"/>
                            </svg>
                        </div>
                    </div>

                    <!-- Custom Dropdown Menu -->
                    <ul class="dropdown-menu quote-dropdown-menu shadow-lg" aria-labelledby="heroQteServiceLabel">
                        <li>
                            <a class="dropdown-item quote-dropdown-item active" href="javascript:void(0)" data-value="House Shifting">
                                <span class="quote-item-icon"><i class="bi bi-house-door-fill"></i></span>
                                <span class="quote-item-name">House Shifting</span>
                                <i class="bi bi-check-lg quote-item-check ms-auto"></i>
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item quote-dropdown-item" href="javascript:void(0)" data-value="Office Relocation">
                                <span class="quote-item-icon"><i class="bi bi-building-fill"></i></span>
                                <span class="quote-item-name">Office Relocation</span>
                                <i class="bi bi-check-lg quote-item-check ms-auto"></i>
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item quote-dropdown-item" href="javascript:void(0)" data-value="Vehicle Transportation">
                                <span class="quote-item-icon"><i class="bi bi-car-front-fill"></i></span>
                                <span class="quote-item-name">Vehicle Transportation</span>
                                <i class="bi bi-check-lg quote-item-check ms-auto"></i>
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item quote-dropdown-item" href="javascript:void(0)" data-value="Loading & Unloading">
                                <span class="quote-item-icon"><i class="bi bi-truck-flatbed"></i></span>
                                <span class="quote-item-name">Loading &amp; Unloading</span>
                                <i class="bi bi-check-lg quote-item-check ms-auto"></i>
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item quote-dropdown-item" href="javascript:void(0)" data-value="Packing & Unpacking">
                                <span class="quote-item-icon"><i class="bi bi-box-seam-fill"></i></span>
                                <span class="quote-item-name">Packing &amp; Unpacking</span>
                                <i class="bi bi-check-lg quote-item-check ms-auto"></i>
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item quote-dropdown-item" href="javascript:void(0)" data-value="Storage Solutions">
                                <span class="quote-item-icon"><i class="bi bi-archive-fill"></i></span>
                                <span class="quote-item-name">Storage Solutions</span>
                                <i class="bi bi-check-lg quote-item-check ms-auto"></i>
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item quote-dropdown-item" href="javascript:void(0)" data-value="Local Shifting">
                                <span class="quote-item-icon"><i class="bi bi-geo-alt-fill"></i></span>
                                <span class="quote-item-name">Local Shifting</span>
                                <i class="bi bi-check-lg quote-item-check ms-auto"></i>
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item quote-dropdown-item" href="javascript:void(0)" data-value="Insurance Coverage">
                                <span class="quote-item-icon"><i class="bi bi-shield-check"></i></span>
                                <span class="quote-item-name">Insurance Coverage</span>
                                <i class="bi bi-check-lg quote-item-check ms-auto"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- 4. Moving From (Pickup City) -->
            <div class="col-12 col-md-4">
                <div class="quote-field-pill">
                    <div class="quote-field-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/>
                        </svg>
                    </div>
                    <div class="quote-field-body">
                        <label for="heroQteFrom" class="quote-field-label">
                            Moving From (Pickup City) <span class="text-danger">*</span>
                        </label>
                        <input type="text" id="heroQteFrom" name="mfrom" class="quote-field-input" value="<?= esc($city ?? '') ?>" placeholder="Pickup city or area" required>
                    </div>
                </div>
            </div>

            <!-- 5. Moving To (Drop City) -->
            <div class="col-12 col-md-4">
                <div class="quote-field-pill">
                    <div class="quote-field-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/>
                        </svg>
                    </div>
                    <div class="quote-field-body">
                        <label for="heroQteTo" class="quote-field-label">
                            Moving To (Drop City) <span class="text-danger">*</span>
                        </label>
                        <input type="text" id="heroQteTo" name="mto" class="quote-field-input" placeholder="Drop destination city" required>
                    </div>
                </div>
            </div>

            <!-- 6. Submit Button -->
            <div class="col-12 col-md-4">
                <button type="submit" class="btn btn-quote-pill-submit w-100">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M2.01 21L23 12 2.01 3 2 10l15 2-15 2z"/>
                    </svg>
                    <span>Get Instant Free Quote</span>
                </button>
            </div>
        </div>

        <div id="quoteformresults" class="mt-2 small"></div>
    </form>
    <script>
    document.addEventListener("DOMContentLoaded", function () {
        var dropdownTrigger = document.querySelector(".quote-field-pill-select");
        var dropdownItems = document.querySelectorAll(".quote-dropdown-item");
        var labelEl = document.getElementById("heroQteServiceLabel");
        var inputEl = document.getElementById("heroQteServiceInput");

        dropdownItems.forEach(function (item) {
            item.addEventListener("click", function (e) {
                e.preventDefault();
                var val = this.getAttribute("data-value");
                if (labelEl) {
                    labelEl.textContent = val;
                    labelEl.classList.add("is-selected");
                }
                if (inputEl) {
                    inputEl.value = val;
                }
                dropdownItems.forEach(function (el) {
                    el.classList.remove("active");
                });
                this.classList.add("active");

                if (dropdownTrigger && typeof bootstrap !== "undefined" && bootstrap.Dropdown) {
                    var bsDropdown = bootstrap.Dropdown.getInstance(dropdownTrigger);
                    if (bsDropdown) {
                        bsDropdown.hide();
                    }
                }
            });
        });

        if (dropdownTrigger) {
            dropdownTrigger.addEventListener("keydown", function (e) {
                if (e.key === "Enter" || e.key === " ") {
                    e.preventDefault();
                    if (typeof bootstrap !== "undefined" && bootstrap.Dropdown) {
                        var bsDropdown = bootstrap.Dropdown.getOrCreateInstance(dropdownTrigger);
                        bsDropdown.toggle();
                    }
                }
            });
        }
    });
    </script>
</div>
