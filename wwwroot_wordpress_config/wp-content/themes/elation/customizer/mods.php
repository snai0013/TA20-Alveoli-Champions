<?php
/**
 * Functions used to implement options
 *
 * @package Customizer Library Elation
 */

/**
 * Enqueue Google Fonts
 */
function elation_customizer_fonts() {

	// Font options
	$fonts = array(
		get_theme_mod( 'elation-body-font', customizer_library_get_default( 'elation-body-font' ) ),
		get_theme_mod( 'elation-title-font', customizer_library_get_default( 'elation-title-font' ) ),
		get_theme_mod( 'elation-main-nav-font', customizer_library_get_default( 'elation-main-nav-font' ) ),
		get_theme_mod( 'elation-tagline-font', customizer_library_get_default( 'elation-tagline-font' ) ),
		get_theme_mod( 'elation-heading-font', customizer_library_get_default( 'elation-heading-font' ) )
	);

	$font_uri = customizer_library_get_google_font_uri( $fonts );

	// Load Google Fonts
	wp_enqueue_style( 'elation_customizer_fonts', $font_uri, array(), null, 'screen' );

}
add_action( 'wp_enqueue_scripts', 'elation_customizer_fonts' );
