<?php
// Theme setup
function my_company_block_theme_setup()
{
    // Add support for wide and full alignments
    add_theme_support('align-wide');

    // Register navigation menu
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'my-company-block-theme'),
    ));

    // Add post thumbnails support
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'my_company_block_theme_setup');

// Enqueue styles and scripts
function my_company_block_theme_assets()
{
    wp_enqueue_style('main-style', get_stylesheet_uri());
    wp_enqueue_script('main-script', get_template_directory_uri() . '/assets/js/scripts.js', array(), null, true);
}
add_action('wp_enqueue_scripts', 'my_company_block_theme_assets');
