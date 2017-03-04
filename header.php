<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <link href="<?php echo get_stylesheet_uri(); ?>" rel="stylesheet" type="text/css" media="screen">
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:200,300,400,500,600|Alex+Brush" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <?php wp_head(); ?>
</head>

<body>
    <header>
        <nav class="header-navs">
            <a class="header-logo" href="/">Chic</a>
            <button id="header-nav-button" class="header-nav-button">
                <div class="header-nav-button-line"></div>
                <div class="header-nav-button-line"></div>
                <div class="header-nav-button-line"></div>
            </button>
            <?php wp_nav_menu( array(
                'theme_location' => 'header-menu',
                'container'      => '',
                'menu_id'        => 'header-nav',
                'menu_class'     => 'header-navs-ul',
            ) ); ?>
        </nav>
    </header>
    <main>
