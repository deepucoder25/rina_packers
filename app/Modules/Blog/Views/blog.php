<!-- ==========================================================================
     Blog Hero & Breadcrumb Section
     ========================================================================== -->
<section class="blog-hero-section text-center position-relative">
    <div class="container position-relative">
        <!-- Top Breadcrumb Capsule Badge -->
        <nav aria-label="breadcrumb">
            <ol class="blog-top-badge list-unstyled">
                <li class="d-inline-flex align-items-center">
                    <a href="<?= site_url('/') ?>"><i class="bi bi-house-door-fill me-1.5"></i> Home</a>
                </li>
                <li class="blog-top-badge-sep d-inline-flex align-items-center" aria-hidden="true">/</li>
                <li class="d-inline-flex align-items-center text-white fw-bold active" aria-current="page">
                    Blog &amp; Articles
                </li>
            </ol>
        </nav>

        <!-- Main Heading -->
        <h1 class="blog-hero-title">
            Moving Insights &amp; Packing Guides
        </h1>

        <!-- Subtitle -->
        <p class="blog-hero-desc">
            Expert relocation tips, city shifting advice, and professional logistics guides to make your move seamless and stress-free.
        </p>
    </div>
</section>

<!-- ==========================================================================
     Blog Main Section
     ========================================================================== -->
<section class="section py-5">
    <div class="container">
        <div class="row g-4 g-lg-5">
            
            <!-- Blog Cards Column (Left) -->
            <div class="col-12 col-lg-8">
                <?php if (!empty($blogs)): ?>
                    <div class="row g-4">
                        <?php foreach ($blogs as $b): 
                            $slug = !empty($b->slug) ? $b->slug : $b->b_id;
                            $link = site_url('blog/' . $slug);
                            $dateStr = !empty($b->date) ? $b->date : (!empty($b->timestamp) ? date('M d, Y', strtotime($b->timestamp)) : '');
                            $hasImage = (!empty($b->image) && file_exists(FCPATH . 'uploads/blogs/' . $b->image));
                            $imgSrc = $hasImage 
                                ? base_url('uploads/blogs/' . $b->image)
                                : base_url('assets/images/about/packers_movers.jpg');
                        ?>
                            <div class="col-12 col-md-6">
                                <article class="blog-modern-card">
                                    <div class="blog-card-media">
                                        <a href="<?= $link ?>" class="d-block w-100 h-100">
                                            <img src="<?= $imgSrc ?>" 
                                                 class="blog-card-img" 
                                                 alt="<?= esc($b->title ?? '') ?>"
                                                 loading="lazy">
                                        </a>
                                        <span class="blog-card-badge">Moving Guide</span>
                                    </div>
                                    <div class="blog-card-body">
                                        <div class="blog-meta-strip">
                                            <?php if (!empty($dateStr)): ?>
                                                <span class="blog-meta-item">
                                                    <i class="bi bi-calendar3"></i> <?= esc($dateStr) ?>
                                                </span>
                                            <?php endif; ?>
                                            <?php if (!empty($b->author)): ?>
                                                <span class="text-muted">&bull;</span>
                                                <span class="blog-meta-item">
                                                    <i class="bi bi-person"></i> <?= esc($b->author) ?>
                                                </span>
                                            <?php endif; ?>
                                        </div>
                                        <h2 class="blog-card-title">
                                            <a href="<?= $link ?>">
                                                <?= esc($b->title ?? '') ?>
                                            </a>
                                        </h2>
                                        <p class="blog-card-excerpt">
                                            <?= esc(substr(strip_tags($b->description ?? ''), 0, 115)) ?>...
                                        </p>
                                        <a href="<?= $link ?>" class="blog-read-btn">
                                            <span>Read Article</span>
                                            <i class="bi bi-arrow-right"></i>
                                        </a>
                                    </div>
                                </article>
                            </div>
                        <?php endforeach; ?>
                    </div>

                    <!-- Modern Pagination -->
                    <?php if ($total > $per_page): ?>
                        <div class="d-flex justify-content-center mt-5">
                            <nav aria-label="Blog Pagination">
                                <ul class="pagination pagination-rounded gap-2">
                                    <?php 
                                    $totalPages = ceil($total / $per_page);
                                    for ($i = 0; $i < $totalPages; $i++): 
                                        $currOffset = $i * $per_page;
                                        $active = ($currOffset == $offset) ? 'active' : '';
                                    ?>
                                        <li class="page-item <?= $active ?>">
                                            <a class="page-link rounded-circle px-3 py-2 fw-bold" href="<?= site_url('blog/view/' . $currOffset) ?>">
                                                <?= $i + 1 ?>
                                            </a>
                                        </li>
                                    <?php endfor; ?>
                                </ul>
                            </nav>
                        </div>
                    <?php endif; ?>

                <?php else: ?>
                    <div class="alert alert-info text-center py-5 rounded-4 border-0 shadow-sm">
                        <i class="bi bi-journal-text fs-1 d-block mb-3 text-primary"></i>
                        <h4 class="fw-bold">No Articles Found</h4>
                        <p class="text-muted mb-0">Helpful moving tips and guides will be published soon.</p>
                    </div>
                <?php endif; ?>
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
                                <?php foreach ($recent_posts as $post): 
                                    $pSlug = !empty($post->slug) ? $post->slug : $post->b_id;
                                    $pDate = !empty($post->date) ? $post->date : (!empty($post->timestamp) ? date('M d, Y', strtotime($post->timestamp)) : '');
                                ?>
                                    <div class="blog-recent-item">
                                        <div class="flex-grow-1">
                                            <h4 class="blog-recent-title">
                                                <a href="<?= site_url('blog/' . $pSlug) ?>">
                                                    <?= esc($post->title ?? '') ?>
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
                                <p class="text-muted small mb-0">No recent articles available.</p>
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
