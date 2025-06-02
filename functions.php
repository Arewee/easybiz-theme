<?php
function easybiz_enqueue_styles() {
    wp_enqueue_style('easybiz-style', get_stylesheet_uri(), array(), '1.0.1');
}
add_action('wp_enqueue_scripts', 'easybiz_enqueue_styles');

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
?>

