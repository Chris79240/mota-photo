<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <header id="site-header" class="site-header">
        <div class="site-branding">
            <?php
            if (has_custom_logo()) {
                the_custom_logo();
            } else {
                echo '<a href="' . esc_url(home_url('/')) . '" rel="home">' . get_bloginfo('name') . '</a>';
            }
            ?>
        </div>

        <!-- Burger Menu -->
        <div class="burger-menu-container">
            <div id="burger-menu-button" aria-label="toggle curtain navigation" class="nav-toggler">
                <span class="ligne l1"></span>
                <span class="ligne l2"></span>
                <span class="ligne l3"></span>
            </div>
            <div class="burger-menu-content">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'menu-header',
                    'menu_id'        => 'primary-menu',
                    'container'      => false,
                    'items_wrap'     => '%3$s',
                ));
                ?>
            </div>
        </div>

        <!-- Standard Navigation -->
        <nav class="site-navigation">
            <?php
            wp_nav_menu(array(
                'theme_location' => 'menu-header',
                'menu_id'        => 'primary-menu',
                'fallback_cb'    => false,
            ));
            ?>
        </nav>
    </header>

    <?php wp_body_open(); ?>