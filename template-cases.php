<?php
/* 
Template Name: Cases Template 
*/
get_header();
?>
<?php get_template_part('template-parts/hero/hero-default'); ?>

<section class="cases-list">
    <?php
    $cases = new WP_Query(array(
        'post_type' => 'post',
        'posts_per_page' => -1,
        'category_name' => 'cases'
    ));

    if ($cases->have_posts()):
        while ($cases->have_posts()): $cases->the_post(); ?>
        
            <article class="case-item">
                <h2><?php the_title(); ?></h2>
                <a href="<?php the_permalink(); ?>">Læs mere</a>
            </article>

        <?php endwhile;
    endif;
    wp_reset_postdata();
    ?>
</section>

<?php get_footer(); ?>
