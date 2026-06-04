<?php if (get_field('show_losninger')): ?>
<section class="losninger-section">
    <div class="container">

        <!-- INTRO -->
        <div class="losninger-intro">
            <h2><?php the_field('sektion_intro_overskrift'); ?></h2>
            <p><?php the_field('sektion_intro_tekst'); ?></p>
        </div>

        <!-- GRID -->
        <div class="losninger-grid">

            <!-- ⭐ CARD 1 ⭐ -->
            <div class="losning-card">
                <h2><?php the_field('slide1_overskrift'); ?></h2>
                <p><?php the_field('slide1_tekst_1'); ?></p>
                <h3><?php the_field('underoverskrift_1'); ?></h3>
                

                <ul class="losning-liste">
                    <?php 
                    $punkter1 = [
                        get_field('slide1_punkt1'),
                        get_field('slide1_punkt2'),
                        get_field('slide1_punkt3'),
                        get_field('slide1_punkt4'),
                        get_field('slide1_punkt5'),
                        get_field('slide1_punkt6'),
                        get_field('slide1_punkt7'),
                        get_field('slide1_punkt8')
                    ];

                    foreach ($punkter1 as $punkt) :
                        if ($punkt) : ?>
                            <li><?php echo esc_html($punkt); ?></li>
                        <?php endif;
                    endforeach; ?>
                </ul>

                <?php if (get_field('slide1_tekst_pris')): ?>
                    <p class="pris"><?php the_field('slide1_tekst_pris'); ?></p>
                <?php endif; ?>

                <?php if (get_field('kontakt_knappe1')): ?>
                    <a class="Btn-design" href="<?php the_field('kontakt_knappe_link_1'); ?>">
                        <?php the_field('kontakt_knappe1'); ?>
                    </a>
                <?php endif; ?>
            </div>


            <!-- ⭐ CARD 2 ⭐ -->
            <div class="losning-card">
                <h2><?php the_field('slide2_overskrift_'); ?></h2>
                <p><?php the_field('slide2_tekst_1'); ?></p>
                <h3><?php the_field('underoverskrift_2'); ?></h3>
                <ul class="losning-liste">
                    <?php 
                    $punkter2 = [
                        get_field('slide2_punkt1'),
                        get_field('slide2_punkt2'),
                        get_field('slide2_punkt3'),
                        get_field('slide2_punkt4'),
                        get_field('slide2_punkt5'),
                        get_field('slide2_punkt6'),
                        get_field('slide2_punkt7'),
                        get_field('slide2_punkt8')
                    ];

                    foreach ($punkter2 as $punkt) :
                        if ($punkt) : ?>
                            <li><?php echo esc_html($punkt); ?></li>
                        <?php endif;
                    endforeach; ?>
                </ul>

                <?php if (get_field('slide2_tekst_pris')): ?>
                    <p class="pris"><?php the_field('slide2_tekst_pris'); ?></p>
                <?php endif; ?>

                <?php if (get_field('kontakt_knappe2')): ?>
                    <a class="Btn-design" href="<?php the_field('kontakt_knappe_link2'); ?>">
                        <?php the_field('kontakt_knappe2'); ?>
                    </a>
                <?php endif; ?>
            </div>


            <!-- ⭐ CARD 3 ⭐ -->
            <div class="losning-card">
                <h2><?php the_field('slide3_overskrift'); ?></h2>
                <p><?php the_field('slide3_tekst_1'); ?></p>
                <h3><?php the_field('underoverskrift_3'); ?></h3>

                <ul class="losning-liste">
                    <?php 
                    $punkter3 = [
                        get_field('slide3_punkt1'),
                        get_field('slide3_punkt2'),
                        get_field('slide3_punkt3'),
                        get_field('slide3_punkt4'),
                        get_field('slide3_punkt5'),
                        get_field('slide3_punkt6'),
                        get_field('slide3_punkt7'),
                        get_field('slide3_punkt8'),
                        get_field('slide3_punkt9'),
                        get_field('slide3_punkt10'),
                        get_field('slide3_punkt11'),
                        get_field('slide3_punkt12')
                    ];

                    foreach ($punkter3 as $punkt) :
                        if ($punkt) : ?>
                            <li><?php echo esc_html($punkt); ?></li>
                        <?php endif;
                    endforeach; ?>
                </ul>

                <?php if (get_field('slide3_tekst_pris_')): ?>
                    <p class="pris"><?php the_field('slide3_tekst_pris_'); ?></p>
                <?php endif; ?>

                <?php if (get_field('kontakt_knappe3')): ?>
                    <a class="Btn-design" href="<?php the_field('kontakt_knappe_link3'); ?>">
                        <?php the_field('kontakt_knappe3'); ?>
                    </a>
                <?php endif; ?>
            </div>

        </div>
    </div>
</section>
<?php endif; ?>
