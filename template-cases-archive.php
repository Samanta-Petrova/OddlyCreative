<?php
/* Template Name: Cases Archive */
get_header();
?>
<?php get_template_part('template-parts/hero/hero-default'); ?>

<section class="cases-section cases-archive">
    <div class="container">

        <h2>Alle Cases</h2>

        <div class="cases-grid box">

            <?php
            $cases = new WP_Query(array(
                'post_type' => 'post',
                'category_name' => 'cases',
                'posts_per_page' => -1
            ));

            while ($cases->have_posts()): $cases->the_post(); ?>

                <a href="<?php the_permalink(); ?>" class="card blob">

                    <div class="imgBx">
                        <img class="pil-ikon" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
                    </div>

                    <div class="case-card">
                        <h3><?php the_title(); ?></h3>
                    </div>

                </a>

            <?php endwhile; wp_reset_postdata(); ?>

        </div>

    </div>
</section>

<?php get_footer(); ?>
