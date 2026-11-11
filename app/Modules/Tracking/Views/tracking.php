<!-- Hero Banner Section -->
<section class="about-hero-section text-center position-relative">
    <div class="container position-relative">
        <nav aria-label="breadcrumb">
            <ol class="about-top-badge list-unstyled">
                <li class="d-inline-flex align-items-center">
                    <a href="<?= site_url('/') ?>"><i class="bi bi-house-door-fill me-1"></i> Home</a>
                </li>
                <li class="about-top-badge-sep d-inline-flex align-items-center" aria-hidden="true">/</li>
                <li class="d-inline-flex align-items-center text-white fw-bold active" aria-current="page">
                    Consignment Tracking
                </li>
            </ol>
        </nav>
        <h1 class="about-hero-title">Track Your Shipment</h1>
        <p class="about-hero-desc">Real-time GPS status, transit location updates, and estimated delivery schedule.</p>
    </div>
</section>

<!-- Tracking Main Section -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-9 col-xl-8">
                <!-- Search Box Card -->
                <div class="tracking-search-card mb-4">
                    <div class="text-center mb-4">
                        <div class="d-inline-flex align-items-center justify-content-center rounded-circle bg-primary-subtle text-primary mb-3" style="width: 54px; height: 54px; font-size: 1.5rem;">
                            <i class="bi bi-geo-alt-fill"></i>
                        </div>
                        <h2 class="h3 fw-bold text-dark mb-1">Consignment Live Tracking</h2>
                        <p class="text-muted small mb-0">Enter your Tracking ID, LR No., or Consignment Reference Number.</p>
                    </div>

                    <form id="trackingForm" onsubmit="handleTrackingSubmit(event)">
                        <div class="tracking-input-group">
                            <i class="bi bi-search search-icon"></i>
                            <input type="text" 
                                   id="trackingInput" 
                                   name="trackingNumber" 
                                   class="tracking-input-field" 
                                   placeholder="e.g. 123456 or LR-9821..." 
                                   required 
                                   autocomplete="off">
                            <button class="btn-tracking-submit" type="submit" id="trackBtn">
                                <span>Track</span> <i class="bi bi-arrow-right"></i>
                            </button>
                        </div>
                    </form>

                    <div id="trackingLoader" class="text-center py-4 d-none">
                        <div class="spinner-border text-primary" role="status">
                            <span class="visually-hidden">Loading...</span>
                        </div>
                        <p class="text-muted small mt-2 mb-0 fw-semibold">Locating consignment records...</p>
                    </div>

                    <div id="trackingError" class="alert alert-danger d-none mt-3 rounded-3 border-0 shadow-sm" role="alert"></div>
                </div>

                <!-- Results Container -->
                <div id="trackingResult" class="d-none">
                    <!-- Shipment Summary Card -->
                    <div class="tracking-summary-card mb-4">
                        <div class="tracking-header-wrap">
                            <div>
                                <span class="tracking-ref-badge">Tracking Reference</span>
                                <h3 class="tracking-ref-number" id="resLrNo">-</h3>
                            </div>
                            <div class="text-end">
                                <span class="tracking-status-pill" id="resStatus">
                                    <span class="pulse-dot"></span> Active In Transit
                                </span>
                            </div>
                        </div>

                        <div class="row g-3">
                            <div class="col-sm-6 col-md-3">
                                <div class="tracking-data-box">
                                    <div class="icon-wrap">
                                        <i class="bi bi-person-fill"></i>
                                    </div>
                                    <div>
                                        <span class="label">Client / Name</span>
                                        <h4 class="val" id="resCustomer">-</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-3">
                                <div class="tracking-data-box">
                                    <div class="icon-wrap">
                                        <i class="bi bi-geo-alt-fill"></i>
                                    </div>
                                    <div>
                                        <span class="label">From Origin</span>
                                        <h4 class="val" id="resFrom">-</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-3">
                                <div class="tracking-data-box">
                                    <div class="icon-wrap">
                                        <i class="bi bi-pin-map-fill"></i>
                                    </div>
                                    <div>
                                        <span class="label">To Destination</span>
                                        <h4 class="val" id="resTo">-</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-3">
                                <div class="tracking-data-box">
                                    <div class="icon-wrap">
                                        <i class="bi bi-calendar2-check-fill"></i>
                                    </div>
                                    <div>
                                        <span class="label">Est. Delivery</span>
                                        <h4 class="val" id="resDeliveryDate">-</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Timeline Card -->
                    <div class="tracking-timeline-card">
                        <div class="d-flex align-items-center justify-content-between pb-3 border-bottom mb-4">
                            <h4 class="h5 fw-bold text-dark mb-0">
                                <i class="bi bi-clock-history text-primary me-2"></i> Timeline &amp; Milestone Updates
                            </h4>
                            <span class="badge bg-light text-muted border px-2.5 py-1">GPS Verified</span>
                        </div>
                        <div id="timelineList" class="tracking-timeline-v2">
                            <!-- Injected by JavaScript -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
function handleTrackingSubmit(e) {
    e.preventDefault();
    const input = document.getElementById('trackingInput');
    const val = input.value.trim();
    if (!val) return;

    const loader = document.getElementById('trackingLoader');
    const errorBox = document.getElementById('trackingError');
    const resultBox = document.getElementById('trackingResult');
    const btn = document.getElementById('trackBtn');

    loader.classList.remove('d-none');
    errorBox.classList.add('d-none');
    resultBox.classList.add('d-none');
    btn.disabled = true;

    const formData = new FormData();
    formData.append('trackingNumber', val);

    fetch('<?= site_url('tracking/track') ?>', {
        method: 'POST',
        body: formData
    })
    .then(res => res.json())
    .then(data => {
        loader.classList.add('d-none');
        btn.disabled = false;

        if (data.status === 'success' && data.main) {
            document.getElementById('resLrNo').innerText = data.main.lr_no || data.main.tracking_id || val;
            document.getElementById('resCustomer').innerText = data.main.c_name || '-';
            document.getElementById('resFrom').innerText = data.main.ship_from || '-';
            document.getElementById('resTo').innerText = data.main.ship_to || '-';
            document.getElementById('resDeliveryDate').innerText = data.main.ex_del_date || '-';

            const timeline = document.getElementById('timelineList');
            timeline.innerHTML = '';

            if (data.timeline && data.timeline.length > 0) {
                data.timeline.forEach((step, idx) => {
                    const isLast = idx === data.timeline.length - 1;
                    const item = document.createElement('div');
                    item.className = 'tracking-timeline-item';
                    item.innerHTML = `
                        <div class="tracking-timeline-node ${isLast ? 'active-node' : ''}"></div>
                        <div class="d-flex justify-content-between align-items-center flex-wrap gap-2 mb-1">
                            <h5 class="h6 fw-bold mb-0 text-dark">${step.place ? step.place : 'Milestone Checkpoint'}</h5>
                            <span class="tracking-time-badge">${step.date || ''} ${step.time || ''}</span>
                        </div>
                        <p class="text-muted small mb-0">${step.remarks ? step.remarks : 'Status updated successfully.'}</p>
                    `;
                    timeline.appendChild(item);
                });
            } else {
                timeline.innerHTML = '<p class="text-muted small mb-0">Record found. Live checkpoints will be updated as the truck departs the transit hub.</p>';
            }

            resultBox.classList.remove('d-none');
        } else {
            errorBox.innerText = data.message || 'Tracking number not found. Please verify and try again.';
            errorBox.classList.remove('d-none');
        }
    })
    .catch(err => {
        loader.classList.add('d-none');
        btn.disabled = false;
        errorBox.innerText = 'Unable to fetch tracking details. Please check your network and try again.';
        errorBox.classList.remove('d-none');
    });
}
</script>
