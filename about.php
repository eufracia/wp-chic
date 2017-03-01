<?php

/* Template Name: About */
get_header();

$context = Timber::get_context();
$context ['acf'] = get_fields();

Timber::render('about.twig', $context);

get_footer();

?>
