<?php
/**
 * sbonzix's functions and definitions
 *
 * @package sbonzix
 * @since sbonzix 1.0.0
 */
add_action( 'wp_enqueue_scripts', 'sbonzix_styles' );
function sbonzix_styles() {
	wp_enqueue_style( 'sbonzix-style', get_stylesheet_uri() );
}
?>