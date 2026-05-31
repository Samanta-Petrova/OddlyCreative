<section class="hero">
    <div class="hero-container">

        <div class="hero-content">
            <h1><?php the_field('hero_overskrift'); ?></h1>
            <p><?php the_field('hero_tekst'); ?></p>

            <?php if (get_field('hero_knap_tekst_1')): ?>
                <a href="<?php the_field('hero_knap_link_1'); ?>" class="Btn-design">
                    <?php the_field('hero_knap_tekst_1'); ?>
                </a>
            <?php endif; ?>

            <?php if (get_field('hero_knap_tekst_2')): ?>
                <a href="<?php the_field('hero_knap_link_2'); ?>" class="Btn-design">
                    <?php the_field('hero_knap_tekst_2'); ?>
                </a>
            <?php endif; ?>
        </div>
    </div>
<div class="hero-billede">
    <?php 
    $billede = get_field('hero_billede');
    if ($billede): ?>
        <img src="<?php echo esc_url($billede['url']); ?>" alt="<?php echo esc_attr($billede['alt']); ?>">
    <?php endif; ?>
</div>
    <div class="hero-icon-pil">
        <?php 
        $pil = get_field('hero_pil');
        if ($pil): ?>
            <img class="pil-ikon" src="<?php echo esc_url($pil['url']); ?>" alt="<?php echo esc_attr($pil['alt']); ?>">
        <?php endif; ?>
    </div>
</section>
