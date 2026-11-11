<?= view('Modules\Template\Views\breadcrumb', [
    'title'       => 'Packers & Movers in ' . ($stateName ?? 'State'),
    'description' => 'Verified, background-checked moving services connecting households and offices across ' . ($stateName ?? 'State') . '.',
    'breadcrumbs' => [
        ['title' => 'Locations', 'url' => site_url('city')],
        ['title' => $stateName ?? 'State', 'url' => '']
    ]
]) ?>

<section class="section py-5">
    <div class="container">
        <div class="section-header text-center mb-4">
            <span class="section-badge"><i class="bi bi-geo-alt-fill me-1"></i> <?= esc($stateName) ?> Moving Hubs</span>
            <h2 class="section-title">Select Your City in <?= esc($stateName) ?></h2>
            <p class="section-subtitle">Click your city for instant free price estimates, local shifting charges, and dedicated moving coordinators.</p>
        </div>

        <div class="city-list-grid">
            <?php foreach ($cities as $c): 
                $cityName = is_array($c) ? ($c['nm'] ?? 'City') : (string)$c;
                $citySlug = strtolower(str_replace(' ', '-', $cityName));
            ?>
                <a href="<?= site_url('city/' . $stateSlug . '/' . $citySlug) ?>" class="city-hub-card" aria-label="Packers and Movers in <?= esc($cityName) ?>">
                    <div class="city-hub-main">
                        <div class="city-hub-icon-wrap">
                            <i class="bi bi-geo-alt-fill"></i>
                        </div>
                        <div class="city-hub-content">
                            <h3 class="city-hub-title"><?= esc($cityName) ?></h3>
                            <span class="city-hub-tag"><i class="bi bi-patch-check-fill"></i> Verified Hub</span>
                        </div>
                    </div>
                    <div class="city-hub-arrow-btn" aria-hidden="true">
                        <i class="bi bi-arrow-right"></i>
                    </div>
                </a>
            <?php endforeach; ?>
        </div>

        <!-- Other States Quick Navigation -->
        <div class="city-other-states-box shadow-sm">
            <h3 class="city-other-states-title">Other Major States Across India</h3>
            <div class="city-states-tag-list">
                <?php foreach ($allStates as $st): ?>
                    <a href="<?= site_url('city/' . $st['slug']) ?>" class="city-state-tag-pill">
                        <?= esc($st['name']) ?>
                    </a>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>
