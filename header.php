<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php wp_head(); ?>
</head>
<body id="top" <?php body_class(); ?>>

    <header class="main-header" data-aos="fade-up" data-aos-duration="3000">
        <a href="<?php echo home_url('/'); ?>">
            <img src="<?php echo get_template_directory_uri() . '/assets/images/main-logo.png' ?>" alt="<?php bloginfo( 'name' ); ?>">
            <h1 class="logo"><?php bloginfo( 'name' ); ?></h1>
        </a>
    </header>
    <div id="menu-burger" class="menu-burger"></div>
