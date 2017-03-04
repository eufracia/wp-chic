<?php

/* Template Name: Location */
get_header();

$context = Timber::get_context();
$context ['acf'] = get_fields();

Timber::render('location.twig', $context);

get_footer();

?>
