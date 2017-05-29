<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;



/* Add a Google Webfont by uncommenting the following functions and changing the 'family' attribute below. */
/*
function af_childtheme_add_google_fonts() {
	wp_enqueue_style( 'af-google-fonts', 'http://fonts.googleapis.com/css?family=Asul', false ); 
	}
add_action( 'wp_enqueue_scripts', 'af_childtheme_add_google_fonts' );
*/



/* Let's load our child theme. */
function atticus_finch_enqueue_styles() {
	
	/* Enqueue the parent theme script. Do NOT remove the below function or you child theme will not load properly */
	wp_enqueue_style( 'atticus-finch-style', get_template_directory_uri() . '/style.css' );
	
	/* Now we will load the child theme's style sheet: */
	wp_enqueue_style( 'atticus-finch-child-style', get_stylesheet_directory_uri() . '/style.css', 'atticus-finch-style', wp_get_theme() -> get( 'Version' ) );
	
	/* If you need to make changes to the child theme's mobile styles, uncomment the following line and edit the child theme's '/styles/mobile.css' file. */
//	wp_enqueue_style( 'atticus-finch-child-mobile-style', get_stylesheet_directory_uri() . '/styles/mobile.css', 'atticus-finch-mobile', wp_get_theme() -> get( 'Version' ), 'screen and (max-width: '. get_theme_mod( 'atticus_finch_mobile_breakpoint' ) . 'px)' );
	
	/* If you need to make changes to the child theme's menu styles, uncomment the following line and edit the child theme's '/styles/menu.css' file. */
//	wp_enqueue_style( 'atticus-finch-child-menu-style', get_stylesheet_directory_uri() . '/styles/menus.css', 'atticus-finch-mobile', wp_get_theme() -> get( 'Version' ) );
	
	/* If you need to make changes to the child theme's print styles, uncomment the following line and edit the child theme's '/styles/print.css' file. */
//	wp_enqueue_style( 'atticus-finch-child-print-style', get_stylesheet_directory_uri() . '/styles/print.css', 'atticus-finch-mobile', wp_get_theme() -> get( 'Version' ), 'print' );
}

add_action( 'wp_enqueue_scripts', 'atticus_finch_enqueue_styles' );



/* Add HTML or scripts to the <head> element by uncommenting the function below */
/*
function atticus_finch_header() { ?>
		Add your code here.
<?php }
add_action ('wp_head','atticus_finch_header');
*/


/* Add HTML or scripts just before the </body> tag by uncommenting the function below */
/*
function atticus_finch_footer() { ?>
		Add your code here.
<?php }
add_action ('wp_footer','atticus_finch_footer');
*/


/* Add your child theme's functions below */
