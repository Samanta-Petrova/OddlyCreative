<nav class="main-nav">
    <div class="nav-container">
        <a href="<?php echo home_url(); ?>" class="logo">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/logo.svg" alt="Logo">
        </a>

        <div class="menu-wrapper">
            <h1> hey </h1>
            <?php
            wp_nav_menu(array(
                'theme_location' => 'primary',
                'menu_class' => 'main-menu',
                'container' => false
            ));
            ?>
        </div>
    </div>
</nav>
