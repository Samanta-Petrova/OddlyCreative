<?php if (get_field('show_losninger')): ?>
<section class="losninger-section">
    <div class="container">

        <!-- INTRO -->
        <div class="losninger-intro">
            <h2><?php the_field('sektion_intro_overskrift'); ?></h2>
            <p><?php the_field('sektion_intro_tekst'); ?></p>
        </div>

        <!-- KARUSEL -->
        <div class="karusel-wrapper">

            <button class="karusel-btn prev">‹</button>

            <div class="karusel-track">

                <!-- SLIDE 1 -->
                <div class="karusel-slide">
                    <div class="karusel-slide-content">
                        <h3><?php the_field('slide1_overskrift'); ?></h3>
                        <p><?php the_field('slide1_tekst_1'); ?></p>
                    </div>
                </div>

                <!-- SLIDE 2 -->
                <div class="karusel-slide">
                    <div class="karusel-slide-content">
                        <h3><?php the_field('slide2_overskrift_'); ?></h3>
                        <p><?php the_field('slide2_tekst_1'); ?></p>
                    </div>
                </div>

                <!-- SLIDE 3 -->
                <div class="karusel-slide">
                    <div class="karusel-slide-content">
                        <h3><?php the_field('slide3_overskrift'); ?></h3>
                        <p><?php the_field('slide3_tekst_1'); ?></p>
                    </div>
                </div>

            </div>

            <button class="karusel-btn next">›</button>

        </div>

    </div>
</section>
<?php endif; ?>

