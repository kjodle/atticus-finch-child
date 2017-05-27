<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

/* Do NOT remove the below function or you child theme will not load properly */

if ( !function_exists( 'af_childtheme_parent_css' ) ):
    function af_childtheme_parent_css() {
        wp_enqueue_style( 'af_childtheme_parent', trailingslashit( get_template_directory_uri() ) . 'style.css', array(  ) );
    }
endif;
add_action( 'wp_enqueue_scripts', 'af_childtheme_parent_css', 10 );

/* Add your child theme's functions below */
