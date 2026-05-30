<?php get_header(); ?>

<section class="cases-section">
    <div class="container">

        <h2><?php the_archive_title(); ?></h2>

        <div class="cases-grid box">

            <?php if (have_posts()): ?>
                <?php while (have_posts()): the_post(); ?>

                    <a href="<?php the_permalink(); ?>" class="card blob">

                        <div class="imgBx">
                            <?php if (has_post_thumbnail()): ?>
                                <img class="pil-ikon" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
                            <?php else: ?>
                                <img class="pil-ikon" src="<?php echo get_template_directory_uri(); ?>/assets/images/pilNed.svg" alt="Pil ikon">
                            <?php endif; ?>
                        </div>

                        <div class="case-card">
                            <h3>
                                <?php the_title(); ?>
                                <span>logo</span>
                            </h3>
                        </div>

                    </a>

                <?php endwhile; ?>
            <?php endif; ?>

        </div>

        <div class="pagination">
            <?php echo paginate_links(); ?>
        </div>

    </div>
</section>

<?php get_footer(); ?>
