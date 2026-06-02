<?php get_header(); ?>

<?php get_template_part('template-parts/hero/hero-default'); ?>
<?php if (get_field('show_cases')): ?>
    <?php get_template_part('template-parts/cases'); ?>
<?php endif; ?>
<?php get_template_part('template-parts/om'); ?>

<?php get_template_part('template-parts/karusel'); ?>
