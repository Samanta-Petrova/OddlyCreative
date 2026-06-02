<?php
/* Template Name: Kontakt */
get_header();
?>
<?php get_template_part('template-parts/hero/hero-default'); ?>


<section class="kontakt-section">
    <div class="kontakt-container">
    <div class="container" >
       <h3>Du kan også finde os på sociale medier:</h3>
       <ul>
           <li><a href="#"><i class="fa-brands fa-square-facebook" style="color: #6868af;"></i></a></li>
           <li><a href="#"><i class="fa-brands fa-instagram" style="color: #6868af;"></i></a></li>
           <li><a href="#"><i class="fa-brands fa-linkedin" style="color: #6868af;"></i></a></li>
       </ul>
    </div>
    <div>
        <div class="kontakt-form">
            <?php
echo do_shortcode('[contact-form-7 id="379c402" title="Contact form 1"]');
?>
        </div>
        </div>
    </div>
</section>


<?php get_footer(); ?>
