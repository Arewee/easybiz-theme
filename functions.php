<?php
function easybiz_enqueue_styles() {
    wp_enqueue_style('easybiz-style', get_stylesheet_uri(), array(), '1.0.1');
}
add_action('wp_enqueue_scripts', 'easybiz_enqueue_styles');

function easybiz_setup() {
    add_theme_support('title-tag');
}
add_action('after_setup_theme', 'easybiz_setup');
?>