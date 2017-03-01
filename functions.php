<?php

function wp_menu() {
    register_nav_menus( array(
        'header-menu' => __( 'Header Menu' ),
        'footer-menu' => __( 'Footer Menu' ),
    ) );
}

add_action( 'init', 'wp_menu' );

?>
