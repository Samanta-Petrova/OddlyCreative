<section class="karusel-section">
    <div class="container">

        <div class="karusel-intro">
            <h2><?php the_field('sektion_intro_overskrift'); ?></h2>
            <p><?php the_field('sektion_intro_tekst'); ?></p>
        </div>

        <div class="karusel-wrapper">

            <button class="karusel-btn prev">‹</button>

            <div class="karusel-track">

                <?php for ($i = 1; $i <= 3; $i++): ?>

                    <?php 
                        $img = get_field("slide{$i}_billede");
                        $overskrift = get_field("slide{$i}_overskrift");
                        $tekst1 = get_field("slide{$i}_tekst_1");
                        $tekst2 = get_field("slide{$i}_tekst_2");
                    ?>

                    <div class="karusel-slide">

                        <?php if ($img): ?>
                            <img src="<?php echo esc_url($img['url']); ?>" alt="">
                        <?php endif; ?>

                        <div class="karusel-slide-content">
                            <h3><?php echo esc_html($overskrift); ?></h3>

                            <p><?php echo esc_html($tekst1); ?></p>

                            <?php if ($tekst2): ?>
                                <p><?php echo esc_html($tekst2); ?></p>
                            <?php endif; ?>
                        </div>

                    </div>

                <?php endfor; ?>

            </div>

            <button class="karusel-btn next">›</button>

        </div>

    </div>
</section>
