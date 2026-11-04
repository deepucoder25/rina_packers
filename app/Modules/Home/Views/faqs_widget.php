<!-- FAQs Section (Bootstrap 5 Native Accordion + Support Card) -->
<section class="section-faqs py-5 bg-light position-relative" id="faqSection" itemscope itemtype="https://schema.org/FAQPage">
    <div class="container py-2 py-lg-4">
        <!-- Section Header -->
        <div class="text-center mb-4 mb-lg-5">
            <span class="badge bg-primary-subtle text-primary border border-primary-subtle rounded-pill px-3 py-2 fw-bold text-uppercase mb-2 shadow-sm">
                <i class="bi bi-question-circle-fill me-1 text-primary"></i> Got Questions?
            </span>
            <h2 class="display-6 fw-bold text-dark mb-2">Frequently Asked Questions</h2>
            <p class="text-secondary mx-auto lead fs-6 col-12 col-md-8 col-lg-7">
                Everything you need to know about our shifting process, pricing calculations, packaging protocols, and transit safety.
            </p>
        </div>

        <div class="row g-4 g-lg-5">
            <!-- Left Column: Quick Help & Contact Card -->
            <div class="col-12 col-lg-4">
                <div class="card border-0 rounded-4 shadow-sm bg-white p-4 p-xl-4 sticky-top faq-support-card">
                    <div class="d-flex align-items-center gap-3 mb-3">
                        <div class="d-inline-flex align-items-center justify-content-center rounded-circle bg-primary-subtle text-primary flex-shrink-0 faq-support-icon">
                            <i class="bi bi-chat-heart-fill fs-3"></i>
                        </div>
                        <h3 class="fs-4 fw-bold text-dark mb-0">Still Have Questions?</h3>
                    </div>
                    <p class="text-secondary small mb-4 lh-base">
                        Can't find the answer you're looking for? Our friendly relocation advisors are available 24/7 to guide you through your move.
                    </p>

                    <!-- Direct Contact Buttons -->
                    <div class="d-flex flex-column gap-2 mb-4">
                        <a <?= $phonehtml ?> class="btn btn-primary rounded-pill py-2.5 px-3 fw-bold shadow-sm d-flex align-items-center justify-content-center gap-2">
                            <i class="bi bi-telephone-fill"></i>
                            <span><?= $phone ?></span>
                        </a>

                        <a href="<?= $whatsapphtml ?>" target="_blank" rel="noopener noreferrer" class="btn btn-outline-success rounded-pill py-2.5 px-3 fw-bold d-flex align-items-center justify-content-center gap-2">
                            <i class="bi bi-whatsapp fs-5"></i>
                            <span>Chat on WhatsApp</span>
                        </a>

                        <button type="button" class="btn btn-outline-primary rounded-pill py-2.5 px-3 fw-bold d-flex align-items-center justify-content-center gap-2" data-bs-toggle="modal" data-bs-target="#qteModal">
                            <i class="bi bi-calendar2-check-fill"></i>
                            <span>Request Callback</span>
                        </button>
                    </div>

                    <!-- Trust Bullet Highlights -->
                    <div class="border-top pt-3 d-flex flex-column gap-2 small text-secondary">
                        <div class="d-flex align-items-center gap-2">
                            <i class="bi bi-check-circle-fill text-success flex-shrink-0"></i>
                            <span>100% Free Pre-Move Estimation</span>
                        </div>
                        <div class="d-flex align-items-center gap-2">
                            <i class="bi bi-check-circle-fill text-success flex-shrink-0"></i>
                            <span>Zero Obligation or Advance Pressure</span>
                        </div>
                        <div class="d-flex align-items-center gap-2">
                            <i class="bi bi-check-circle-fill text-success flex-shrink-0"></i>
                            <span>Immediate WhatsApp Quote Receipt</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Column: Clean Bootstrap 5 Accordion -->
            <div class="col-12 col-lg-8">
                <div class="accordion d-flex flex-column gap-3" id="homeFaqAccordion">
                    <!-- FAQ 1 -->
                    <div class="accordion-item border-0 rounded-4 shadow-sm overflow-hidden" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                        <h3 class="accordion-header" id="faqHeading1">
                            <button class="accordion-button fw-bold py-3 px-4 fs-6 text-dark" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse1" aria-expanded="true" aria-controls="faqCollapse1" itemprop="name">
                                <i class="bi bi-calculator me-2 text-primary"></i>
                                How are shifting charges and estimates calculated?
                            </button>
                        </h3>
                        <div id="faqCollapse1" class="accordion-collapse collapse show" aria-labelledby="faqHeading1" data-bs-parent="#homeFaqAccordion" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                            <div class="accordion-body px-4 pb-4 pt-1 text-secondary lh-base" itemprop="text">
                                Relocation costs depend primarily on the overall volume/weight of household or office goods, distance between origin and destination cities, floor levels (lift availability), packaging material requirements, and optional comprehensive transit insurance. We offer transparent itemized estimates with no hidden extras.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 2 -->
                    <div class="accordion-item border-0 rounded-4 shadow-sm overflow-hidden" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                        <h3 class="accordion-header" id="faqHeading2">
                            <button class="accordion-button collapsed fw-bold py-3 px-4 fs-6 text-dark" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse2" aria-expanded="false" aria-controls="faqCollapse2" itemprop="name">
                                <i class="bi bi-shield-check me-2 text-primary"></i>
                                Is transit insurance provided, and what does it cover?
                            </button>
                        </h3>
                        <div id="faqCollapse2" class="accordion-collapse collapse" aria-labelledby="faqHeading2" data-bs-parent="#homeFaqAccordion" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                            <div class="accordion-body px-4 pb-4 pt-1 text-secondary lh-base" itemprop="text">
                                Yes, we offer comprehensive 100% transit insurance cover against unforeseen transit accidents, overturns, or accidental damage during intercity and intracity relocation. A formal policy document is issued prior to dispatch, and our dedicated claims desk facilitates swift cashless settlements.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 3 -->
                    <div class="accordion-item border-0 rounded-4 shadow-sm overflow-hidden" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                        <h3 class="accordion-header" id="faqHeading3">
                            <button class="accordion-button collapsed fw-bold py-3 px-4 fs-6 text-dark" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse3" aria-expanded="false" aria-controls="faqCollapse3" itemprop="name">
                                <i class="bi bi-calendar-event me-2 text-primary"></i>
                                How many days in advance should I book my relocation?
                            </button>
                        </h3>
                        <div id="faqCollapse3" class="accordion-collapse collapse" aria-labelledby="faqHeading3" data-bs-parent="#homeFaqAccordion" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                            <div class="accordion-body px-4 pb-4 pt-1 text-secondary lh-base" itemprop="text">
                                For local intra-city shifting, we suggest confirming 2 to 4 days ahead. For intercity domestic relocations, booking 5 to 7 days in advance guarantees dedicated container truck allocation, verified packing crew reservation, and your preferred departure timing.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 4 -->
                    <div class="accordion-item border-0 rounded-4 shadow-sm overflow-hidden" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                        <h3 class="accordion-header" id="faqHeading4">
                            <button class="accordion-button collapsed fw-bold py-3 px-4 fs-6 text-dark" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse4" aria-expanded="false" aria-controls="faqCollapse4" itemprop="name">
                                <i class="bi bi-box-seam me-2 text-primary"></i>
                                What packing materials are used for fragile and glass items?
                            </button>
                        </h3>
                        <div id="faqCollapse4" class="accordion-collapse collapse" aria-labelledby="faqHeading4" data-bs-parent="#homeFaqAccordion" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                            <div class="accordion-body px-4 pb-4 pt-1 text-secondary lh-base" itemprop="text">
                                We utilize a specialized 5-layer packaging procedure: heavy-duty corrugated cartons, high-density bubble wrap rolls, stretch film, foam corner protectors, and customized wooden crating for delicate glassware, crockery, paintings, and smart LED screens.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 5 -->
                    <div class="accordion-item border-0 rounded-4 shadow-sm overflow-hidden" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                        <h3 class="accordion-header" id="faqHeading5">
                            <button class="accordion-button collapsed fw-bold py-3 px-4 fs-6 text-dark" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse5" aria-expanded="false" aria-controls="faqCollapse5" itemprop="name">
                                <i class="bi bi-car-front me-2 text-primary"></i>
                                Can you transport cars and two-wheelers safely across cities?
                            </button>
                        </h3>
                        <div id="faqCollapse5" class="accordion-collapse collapse" aria-labelledby="faqHeading5" data-bs-parent="#homeFaqAccordion" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                            <div class="accordion-body px-4 pb-4 pt-1 text-secondary lh-base" itemprop="text">
                                Absolutely. We operate covered multi-car trailers and customized wooden crating systems for sports bikes. Prior to loading, a detailed digital vehicle condition report is recorded and shared with you, along with live location updates on WhatsApp.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 6 -->
                    <div class="accordion-item border-0 rounded-4 shadow-sm overflow-hidden" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                        <h3 class="accordion-header" id="faqHeading6">
                            <button class="accordion-button collapsed fw-bold py-3 px-4 fs-6 text-dark" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse6" aria-expanded="false" aria-controls="faqCollapse6" itemprop="name">
                                <i class="bi bi-cash-stack me-2 text-primary"></i>
                                Are there any hidden costs or surprise charges on delivery day?
                            </button>
                        </h3>
                        <div id="faqCollapse6" class="accordion-collapse collapse" aria-labelledby="faqHeading6" data-bs-parent="#homeFaqAccordion" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                            <div class="accordion-body px-4 pb-4 pt-1 text-secondary lh-base" itemprop="text">
                                No, never. All quotations issued by <?= $company3  ?> are 100% transparent and all-inclusive. Packing materials, loading labour, interstate toll permits, GPS transport, unloading, and basic furniture assembly are clearly itemized with zero surprise charges.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

