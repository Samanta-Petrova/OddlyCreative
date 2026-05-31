<?php if (get_field('show_om')): ?>
<section class="om-section">
    <div class="container">

        <div class="om-intro">
            <h2><?php the_field('intro_overskrift'); ?></h2>
            <p><?php the_field('intro_tekst'); ?></p>

            <?php if (get_field('om_billede')): ?>
                <div class="om-billede">
                    <img src="<?php the_field('om_billede'); ?>" alt="Om billede">
                </div>
            <?php endif; ?>
        </div>
        <div class="om-mere">
            <h3><?php the_field('mere_overskrift'); ?></h3>
            <p><?php the_field('mere_tekst'); ?></p>

            <?php if (get_field('mere_billede')): ?>
                <div class="mere-billede">
                    <img src="<?php the_field('mere_billede'); ?>" alt="Mere billede">
                </div>
            <?php endif; ?>
        </div>

    </div>
</section>
<?php endif; ?>
