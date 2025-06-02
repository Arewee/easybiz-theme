<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header class="easybiz-header">
    <div class="container">
        <div class="easybiz-header__content">
            <div class="easybiz-logo">
                <h1><a href="<?php echo home_url(); ?>">EasyBiz</a></h1>
            </div>
            <button class="easybiz-menu-toggle" onclick="document.querySelector('.easybiz-nav').classList.toggle('active')">☰</button>
            <nav class="easybiz-nav">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'primary',
                    'menu_class' => 'easybiz-nav__menu',
                    'container' => false,
                    'fallback_cb' => 'easybiz_fallback_menu'
                ));
                ?>
            </nav>
        </div>
    </div>
</header>