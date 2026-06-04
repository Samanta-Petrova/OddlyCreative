<?php if (get_field('show_kontakt')): ?>
<section class="kontakt-section">
    <div class="container kontakt-wrapper">

        <div class="kontakt-tekst">
            <h2><?php the_field('kontakt_overskrift'); ?></h2>
            <p><?php the_field('kontakt_tekst'); ?></p>

            <?php if (get_field('kontakt_knappe_link')): ?>
                <a class="Btn-design" href="<?php the_field('kontakt_knappe_link'); ?>">
                    <?php the_field('kontakt_knappe_tekst'); ?>
                </a>
            <?php endif; ?>
        </div>

        <div class="kontakt-billede">
            <?php 
            $img = get_field('kontakt_img');
            if ($img): ?>
                <img src="<?php echo esc_url($img['url']); ?>" alt="<?php echo esc_attr($img['alt']); ?>">
            <?php endif; ?>
        </div>

    </div>
</section>
<?php endif; ?>
