<?php

function theme_enqueue_styles_and_scripts()
{
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('child-theme-style', get_stylesheet_directory_uri() . '/sass/style.css', ['parent-style']);
    wp_enqueue_script('theme-script', get_stylesheet_directory_uri() . '/js/scripts.js', ['jquery'], null, true);
    wp_localize_script('theme-script', 'ajax_object', ['ajaxurl' => admin_url('admin-ajax.php')]);
}
add_action('wp_enqueue_scripts', 'theme_enqueue_styles_and_scripts');
