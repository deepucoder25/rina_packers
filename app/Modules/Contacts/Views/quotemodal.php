<div class="modal fade contact-custom-modal" id="qteModal" tabindex="-1" role="dialog" aria-labelledby="qteModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <!-- Modal Header with Brand Gradient -->
            <div class="qte-modal-header">
                <div class="d-flex align-items-center justify-content-between">
                    <div class="d-flex align-items-center gap-3">
                        <div class="qte-header-icon">
                            <i class="bi bi-truck-front-fill"></i>
                        </div>
                        <div>
                            <h5 class="modal-title qte-title mb-0" id="qteModalLabel">Get a Free Instant Quote</h5>
                            <span class="qte-subtitle">Fast response within 15 mins • Best Price Guarantee</span>
                        </div>
                    </div>
                    <button type="button" class="btn-qte-close" data-bs-dismiss="modal" aria-label="Close" onclick="if(typeof setClose === 'function') setClose();" title="Close Modal">
                        <i class="bi bi-x-lg"></i>
                    </button>
                </div>
            </div>

            <!-- Form Body with Clear Labels on Every Input -->
            <div class="modal-body qte-modal-body">
                <form id="quotemodal" class="ajax-form" data-url="<?php echo site_url('contacts/booking') ?>" data-result="resultquotemodal" onsubmit="return false;">
                    <div class="row g-3">
                        <!-- Field 1: Your Name -->
                        <div class="col-12 col-md-6">
                            <div class="form-group mb-0">
                                <label for="qteModalName" class="form-label qte-form-label">
                                    <i class="bi bi-person-fill text-primary"></i> Your Name <span class="text-danger">*</span>
                                </label>
                                <input type="text" class="form-control qte-form-control" id="qteModalName" name="name" placeholder="Enter your full name" required>
                            </div>
                        </div>

                        <!-- Field 2: Mobile Number -->
                        <div class="col-12 col-md-6">
                            <div class="form-group mb-0">
                                <label for="qteModalPhone" class="form-label qte-form-label">
                                    <i class="bi bi-telephone-fill text-primary"></i> Mobile Number <span class="text-danger">*</span>
                                </label>
                                <input type="tel" class="form-control qte-form-control" id="qteModalPhone" name="phone" placeholder="10-digit mobile number" required pattern="[0-9]{10}">
                            </div>
                        </div>

                        <!-- Field 3: Email Address -->
                        <div class="col-12">
                            <div class="form-group mb-0">
                                <label for="qteModalEmail" class="form-label qte-form-label">
                                    <i class="bi bi-envelope-fill text-primary"></i> Email Address <span class="text-muted fw-normal small">(Optional)</span>
                                </label>
                                <input type="email" class="form-control qte-form-control" id="qteModalEmail" name="email" placeholder="example@email.com">
                            </div>
                        </div>

                        <!-- Field 4: Moving From City -->
                        <div class="col-6">
                            <div class="form-group mb-0">
                                <label for="qteModalFrom" class="form-label qte-form-label">
                                    <i class="bi bi-geo-alt-fill text-danger"></i> Moving From <span class="text-danger">*</span>
                                </label>
                                <input type="text" class="form-control qte-form-control" id="qteModalFrom" name="mfrom" placeholder="Pickup city" required>
                            </div>
                        </div>

                        <!-- Field 5: Moving To City -->
                        <div class="col-6">
                            <div class="form-group mb-0">
                                <label for="qteModalTo" class="form-label qte-form-label">
                                    <i class="bi bi-pin-map-fill text-success"></i> Moving To <span class="text-danger">*</span>
                                </label>
                                <input type="text" class="form-control qte-form-control" id="qteModalTo" name="mto" placeholder="Delivery city" required>
                            </div>
                        </div>

                        <!-- Field 6: Requirements Message -->
                        <div class="col-12">
                            <div class="form-group mb-0">
                                <label for="qteModalMsg" class="form-label qte-form-label">
                                    <i class="bi bi-chat-left-text-fill text-info"></i> Relocation Details <span class="text-muted fw-normal small">(Optional)</span>
                                </label>
                                <textarea class="form-control qte-form-control" id="qteModalMsg" name="message" rows="3" placeholder="Describe items (e.g. 1BHK/2BHK, car/bike, date of moving)..."></textarea>
                            </div>
                        </div>
                    </div>

                    <!-- Action Buttons: Submit & Clear -->
                    <div class="d-flex align-items-center gap-2 mt-4">
                        <button id="submitbquotemodal" type="submit" class="btn btn-qte-submit">
                            <i class="bi bi-send-fill"></i> Get My Free Quote
                        </button>
                        <button type="reset" class="btn btn-qte-clear" onclick="document.getElementById('resultquotemodal').innerHTML = '';" title="Reset form">
                            <i class="bi bi-arrow-counterclockwise"></i> Clear
                        </button>
                    </div>

                    <div id="resultquotemodal" class="mt-3"></div>
                </form>
            </div>

            <!-- Modal Footer Trust Bar -->
            <div class="qte-modal-trust-bar">
                <span><i class="bi bi-shield-check text-success"></i> 100% Insured</span>
                <span><i class="bi bi-lock-fill text-primary"></i> Data Confidential</span>
                <span><i class="bi bi-award-fill text-warning"></i> IBA Approved</span>
            </div>
        </div>
    </div>
</div>
