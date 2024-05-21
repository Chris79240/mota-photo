<?php

function theme_enqueue_styles_and_scripts()
{
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('child-theme-style', get_stylesheet_directory_uri() . '/css/theme.css', ['parent-style']);
}
add_action('wp_enqueue_scripts', 'theme_enqueue_styles_and_scripts');
