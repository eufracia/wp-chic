<?php

/* Template Name: Menus */
get_header();

$context = Timber::get_context();
$context ['acf'] = get_fields();

Timber::render('menus.twig', $context);

get_footer();

?>
