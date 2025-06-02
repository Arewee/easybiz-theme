<?php
function easybiz_enqueue_styles() {
    wp_enqueue_style('easybiz-style', get_stylesheet_uri(), array(), '1.0.1');
}
add_action('wp_enqueue_scripts', 'easybiz_enqueue_styles');

// Enqueue JavaScript
function easybiz_enqueue_scripts() {
    wp_enqueue_script('easybiz-theme', get_template_directory_uri() . '/assets/js/theme.js', array(), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'easybiz_enqueue_scripts');

function easybiz_setup() {
    add_theme_support('title-tag');
}
add_action('after_setup_theme', 'easybiz_setup');

// Elementor support
function easybiz_elementor_support() {
    add_theme_support('elementor');
}
add_action('after_setup_theme', 'easybiz_elementor_support');

// Remove Elementor default colors/fonts (use ours)
add_action('elementor/frontend/after_enqueue_styles', function() {
    wp_deregister_style('elementor-frontend');
});

// Register navigation menus
function easybiz_register_menus() {
    register_nav_menus(array(
        'primary' => 'Primary Navigation',
        'footer' => 'Footer Menu'
    ));
}
add_action('init', 'easybiz_register_menus');




?>

