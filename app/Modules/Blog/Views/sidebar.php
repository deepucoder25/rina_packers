<div class="blog-cta-widget">
    <h5>Have Questions?</h5>
    <p>Speak with our relocation specialist for custom quotes, slot availability, or moving queries.</p>
    <?php if (!empty($phone)): ?>
        <a href="tel:<?= preg_replace('/[^0-9+]/', '', $phone) ?>" class="blog-cta-phone">
            <i class="bi bi-telephone-fill"></i> <?= esc($phone) ?>
        </a>
    <?php endif; ?>
    <a href="<?= site_url('contact') ?>" class="blog-cta-contact">
        <i class="bi bi-envelope-fill"></i> Contact Our Team
    </a>
</div>
