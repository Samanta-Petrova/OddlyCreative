<?php get_header(); ?>

<?php if (get_field('show_hero')): ?>
  
<?php endif; ?>
<?php get_header(); ?>

<section class="single-case">
    <div class="container caseContainer">
<div class="caseContent">
        <!-- ACF Overskrift -->
        <?php if (get_field('case_overskrift')): ?>
            <h1><?php the_field('case_overskrift'); ?></h1>
        <?php else: ?>
            <h1><?php the_title(); ?></h1>
        <?php endif; ?>

        <!-- ACF Tekst 1 -->
        <?php if (get_field('case_tekst')): ?>
            <p><?php the_field('case_tekst'); ?></p>
        <?php endif; ?>
        <!-- ACF Tekst 2 -->
        <?php if (get_field('case_tekst_2')): ?>
            <p><?php the_field('case_tekst_2'); ?></p>
        <?php endif; ?>
</div>
<div class="produktImg">
    <?php 
        $billede = get_field('case_billede');
        if ($billede): ?>
            <img class="case-billede"
                 src="<?php echo esc_url($billede['url']); ?>"
                 alt="<?php echo esc_attr($billede['alt']); ?>">
        <?php endif; ?></div>
    </div>
</section>

<?php get_footer(); ?>
