<?php
/**
 * Shared Dynamic Breadcrumb HTML Component
 * Usage in any view file:
 * <?= view('Modules\Template\Views\breadcrumb', [
 *     'title'       => 'About Us',
 *     'description' => 'Learn more about our company and legacy.',
 *     'breadcrumbs' => [
 *         ['title' => 'Services', 'url' => site_url('services')], // optional parent crumbs
 *         ['title' => 'House Shifting', 'url' => '']
 *     ]
 * ]) ?>
 */

$bTitle = $title ?? 'Page Title';
$bDesc  = $description ?? '';
$bItems = $breadcrumbs ?? [
    ['title' => $bTitle, 'url' => '']
];
?>

<section class="about-hero-section text-center position-relative">
    <div class="container position-relative">
        <nav aria-label="breadcrumb">
            <ol class="about-top-badge list-unstyled">
                <li class="d-inline-flex align-items-center">
                    <a href="<?= site_url('/') ?>"><i class="bi bi-house-door-fill me-1.5"></i> Home</a>
                </li>
                <?php foreach ($bItems as $item): 
                    $itemTitle = esc($item['title'] ?? '');
                    $itemUrl   = $item['url'] ?? '';
                ?>
                    <li class="about-top-badge-sep d-inline-flex align-items-center" aria-hidden="true">/</li>
                    <?php if (!empty($itemUrl)): ?>
                        <li class="d-inline-flex align-items-center">
                            <a href="<?= esc($itemUrl) ?>"><?= $itemTitle ?></a>
                        </li>
                    <?php else: ?>
                        <li class="d-inline-flex align-items-center text-white fw-bold active" aria-current="page">
                            <?= $itemTitle ?>
                        </li>
                    <?php endif; ?>
                <?php endforeach; ?>
            </ol>
        </nav>

        <h1 class="about-hero-title">
            <?= esc($bTitle) ?>
        </h1>

        <div class="about-hero-divider"></div>

        <?php if (!empty($bDesc)): ?>
            <p class="about-hero-desc">
                <?= esc($bDesc) ?>
            </p>
        <?php endif; ?>
    </div>
</section>
