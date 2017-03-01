<?php

/* Template Name: Gallery */
get_header();

$context = Timber::get_context();
$context ['acf'] = get_fields();

Timber::render('gallery.twig', $context);

get_footer();

?>
