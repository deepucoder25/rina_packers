<?php 
$post = !empty($query[0]) ? $query[0] : null; 
$dateStr = !empty($post->date) ? $post->date : (!empty($post->timestamp) ? date('M d, Y', strtotime($post->timestamp)) : '');
$hasImage = (!empty($post->image) && file_exists(FCPATH . 'uploads/blogs/' . $post->image));
$imgSrc = $hasImage
    ? base_url('uploads/blogs/' . $post->image)
    : base_url('assets/img/slider.webp');
?>
<?= view('Modules\Template\Views\breadcrumb', [
    'title'       => $post->title ?? 'Moving Guide',
    'description' => !empty($post->meta_desc) ? $post->meta_desc : 'Detailed relocation guide, professional packing tips, and moving checklist.',
    'breadcrumbs' => [
        ['title' => 'Blog', 'url' => site_url('blog')],
        ['title' => $post->title ?? 'Article', 'url' => '']
    ]
]) ?>

<!-- ==========================================================================
     Article Main Section
     ========================================================================== -->
<section class="section py-5">
    <div class="container">
        <div class="row g-4 g-lg-5">
            
            <!-- Article Body Column (Left) -->
            <div class="col-12 col-lg-8">
                <article class="blog-single-card">
                    <!-- Featured Article Image -->
                    <div class="blog-single-img-wrap">
                        <img src="<?= $imgSrc ?>" 
                             alt="<?= esc($post->title ?? '') ?>" 
                             class="blog-single-img">
                    </div>

                    <!-- Article Meta Header -->
                    <div class="blog-single-header">
                        <div class="blog-single-meta">
                            <?php if (!empty($dateStr)): ?>
                                <span class="blog-single-meta-item">
                                    <i class="bi bi-calendar3"></i> <?= esc($dateStr) ?>
                                </span>
                            <?php endif; ?>
                            <?php if (!empty($post->author)): ?>
                                <span class="blog-single-meta-item">
                                    <i class="bi bi-person-circle"></i> <?= esc($post->author) ?>
                                </span>
                            <?php endif; ?>
                            <?php if (!empty($post->views)): ?>
                                <span class="blog-single-meta-item">
                                    <i class="bi bi-eye"></i> <?= (int)$post->views ?> Views
                                </span>
                            <?php endif; ?>
                        </div>
                    </div>

                    <!-- Full Article Content -->
                    <div class="blog-single-body">
                        <?= nl2br($post->description ?? '') ?>
                    </div>

                    <!-- Article Footer Navigation -->
                    <div class="blog-single-footer">
                        <a href="<?= site_url('blog') ?>" class="blog-btn-nav outline">
                            <i class="bi bi-arrow-left"></i> All Articles
                        </a>
                        <a href="<?= site_url('contact') ?>" class="blog-btn-nav primary">
                            <i class="bi bi-telephone-fill"></i> Get Moving Quote
                        </a>
                    </div>
                </article>
            </div>

            <!-- Sidebar (Right) -->
            <div class="col-12 col-lg-4">
                <div class="blog-sidebar-sticky">
                    <!-- Recent Posts Widget -->
                    <div class="blog-sidebar-widget">
                        <h3 class="blog-sidebar-title">
                            <i class="bi bi-fire text-danger"></i> Recent Posts
                        </h3>
                        <div class="d-flex flex-column gap-2">
                            <?php if (!empty($recent_posts)): ?>
                                <?php foreach ($recent_posts as $p): 
                                    $pSlug = !empty($p->slug) ? $p->slug : $p->b_id;
                                    $pDate = !empty($p->date) ? $p->date : (!empty($p->timestamp) ? date('M d, Y', strtotime($p->timestamp)) : '');
                                ?>
                                    <div class="blog-recent-item">
                                        <div class="flex-grow-1">
                                            <h4 class="blog-recent-title">
                                                <a href="<?= site_url('blog/' . $pSlug) ?>">
                                                    <?= esc($p->title ?? '') ?>
                                                </a>
                                            </h4>
                                            <?php if (!empty($pDate)): ?>
                                                <span class="blog-recent-date">
                                                    <i class="bi bi-clock"></i> <?= esc($pDate) ?>
                                                </span>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            <?php else: ?>
                                <p class="text-muted small mb-0">No other recent articles.</p>
                            <?php endif; ?>
                        </div>
                    </div>

                    <!-- Call To Action Widget -->
                    <?= view('Modules\Blog\Views\sidebar') ?>
                </div>
            </div>

        </div>
    </div>
</section>
