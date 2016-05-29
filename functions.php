<?php

// Atticus Finch Child Theme

function child_theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css', '', '1.0' );
	wp_enqueue_style( 'parent-style-mobile', get_template_directory_uri() . '/styles/mobile.css', 'atticus-finch-style', '1.0', 'screen and (max-width: '. get_theme_mod( 'atticus_finch_mobile_breakpoint' ) . 'px)' );
    wp_enqueue_style( 'parent-style-print', get_template_directory_uri() . '/styles/print.css', '', '1.0', 'print' );
    wp_enqueue_style( 'parent-style-menus', get_template_directory_uri() . '/styles/menus.css', '', '1.0', 'screen' );

}
 add_action( 'wp_enqueue_scripts', 'child_theme_enqueue_styles' );

