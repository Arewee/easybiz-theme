<?php
function easybiz_setup() {
    add_theme_support('title-tag');
}
add_action('after_setup_theme', 'easybiz_setup');
?>