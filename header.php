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
            <nav class="easybiz-nav">
                <a href="#" class="easybiz-nav__link">Home</a>
                <a href="#" class="easybiz-nav__link">About</a>
                <a href="#" class="easybiz-nav__link">Services</a>
                <a href="#" class="easybiz-nav__link">Contact</a>
            </nav>
        </div>
    </div>
</header>