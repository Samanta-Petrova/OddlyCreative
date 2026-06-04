<section class="cases-section">
    <div class="container">
        
        <h2><?php the_field('case_overskrift'); ?></h2>

        <div class="cases-grid box">

            <?php
            $cases = new WP_Query(array(
                'post_type' => 'post',
                'posts_per_page' => 3,
                'category_name' => 'cases'
            ));

            if ($cases->have_posts()):
                while ($cases->have_posts()): $cases->the_post();
            ?>

            <a href="<?php the_permalink(); ?>" class="card">

                <div class="blob"></div>

                <div class="imgBx">
                    <img class="cardsImg" 
                         src="<?php echo get_the_post_thumbnail_url(); ?>" 
                         alt="<?php the_title(); ?>">
                </div>

                <div class="case-card">
                    <h3>
                        <?php the_title(); ?>
                        <span>logo</span>
                    </h3>
                </div>

            </a>

            <?php 
                endwhile;
            endif;
            wp_reset_postdata();
            ?>

        </div>

        <?php if (get_field('cases_knap_link')): ?>
            <a class="Btn-design" href="<?php the_field('cases_knap_link'); ?>">
                <?php the_field('cases_knap_tekst'); ?>
            </a>
        <?php endif; ?>

    </div>
</section>
