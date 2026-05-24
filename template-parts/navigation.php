
<nav class="main-nav">
    <div class="nav-container">
        
        <a href="<?php echo home_url(); ?>" class="logo">
            <img class="logo-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/OCLogo.png" alt="Oddly Creative logo">
        </a>

        <div class="menu-wrapper">
            <?php
            wp_nav_menu(array(
                'theme_location' => 'primary',
                'menu_class'     => 'main-menu',
                'container'      => false,
            ));
            ?>
        </div>

    </div>
</nav>
