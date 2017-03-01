<?php

/* Template Name: Home */
get_header();

$context = Timber::get_context();
$context ['acf'] = get_fields();

Timber::render('home.twig', $context);

get_footer();

?>
