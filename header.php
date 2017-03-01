<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>HTML5 boilerplate – all you really need…</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?php echo get_stylesheet_uri(); ?>" rel="stylesheet" type="text/css" media="screen">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500|Work+Sans:300,400,500,600|Alex+Brush" rel="stylesheet">
</head>

<body>
    <header>
        <nav class="header-navs">
            <a class="header-logo" href="/">Chic</a>
            <?php wp_nav_menu( array(
                'theme_location' => 'header-menu',
                'container'      => '',
                'menu_class'     => 'header-navs-ul',
            ) ); ?>
        </nav>
    </header>
    <main>
