<?php
function easybiz_enqueue_styles() {
    wp_enqueue_style('easybiz-style', get_stylesheet_uri(), array(), '1.0.0');
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

// Register navigation menus
function easybiz_register_menus() {
    register_nav_menus(array(
        'primary' => 'Primary Navigation',
        'footer' => 'Footer Menu'
    ));
}
add_action('init', 'easybiz_register_menus');

// Fallback menu if no menu is set
function easybiz_fallback_menu() {
    echo '<ul class="easybiz-nav__menu">
        <li><a href="' . home_url() . '">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Services</a></li>
        <li><a href="#">Contact</a></li>
    </ul>';
}
?>