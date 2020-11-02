<?php
/**
 * Enqueue Google Fonts for Blocks Editor
 */
function elation_customizer_editor_fonts() {

	// Font options
	$fonts = array(
		get_theme_mod( 'elation-body-font', customizer_library_get_default( 'elation-body-font' ) ),
		get_theme_mod( 'elation-title-font', customizer_library_get_default( 'elation-title-font' ) )
	);

	$font_uri = customizer_library_get_google_font_uri( $fonts );

	// Load Google Fonts
	if ( !get_theme_mod( 'elation-disable-google-font', customizer_library_get_default( 'elation-disable-google-font' ) ) ) {
		wp_enqueue_style( 'elation_customizer_editor_fonts', $font_uri, array(), null, 'screen' );
	}

}
add_action( 'enqueue_block_editor_assets', 'elation_customizer_editor_fonts' );

if ( ! function_exists( 'elation_customizer_editor_styles' ) ) :
/**
 * Generates the fonts selected in the Customizer and enqueues it to the Blocks Editor
 */
function elation_customizer_editor_styles() {
    global $post;

	$elation_body_font = get_theme_mod( 'elation-body-font', customizer_library_get_default( 'elation-body-font' ) );
	$elation_heading_font = get_theme_mod( 'elation-heading-font', customizer_library_get_default( 'elation-heading-font' ) );
	if ( get_theme_mod( 'elation-disable-google-font' ) == 1 ) {
		$elation_body_font = get_theme_mod( 'elation-body-font-websafe', customizer_library_get_default( 'elation-body-font-websafe' ) );
		$elation_heading_font = get_theme_mod( 'elation-heading-font-websafe', customizer_library_get_default( 'elation-heading-font-websafe' ) );
	}

    $elation_editor_width = get_theme_mod( 'elation-site-container-width', customizer_library_get_default( 'elation-site-container-width' ) );
    $elation_editor_bgcolor = get_background_color();
    
    $elation_editor_css = '.editor-styles-wrapper { background-color: #' . esc_attr( $elation_editor_bgcolor ) . '; }';
    $elation_editor_css .= '.editor-styles-wrapper .wp-block { max-width: ' . esc_attr( $elation_editor_width ) . 'px; }';

	$elation_body_font_size = get_theme_mod( 'elation-body-fonts-size', customizer_library_get_default( 'elation-body-fonts-size' ) );
	switch ( $elation_body_font_size ) {
		case '1':
			$elation_body_font_size = '12';
			break;
		case '2':
			$elation_body_font_size = '14';
			break;
		case '3':
			$elation_body_font_size = '16';
			break;
		case '4':
			$elation_body_font_size = '18';
			break;
		case '5':
			$elation_body_font_size = '20';
			break;
		case '6':
			$elation_body_font_size = '24';
			break;
	}
	$elation_newbody_size = 'elation-content-font-size';
	$elation_newbody_mod = get_theme_mod( $elation_newbody_size, customizer_library_get_default( $elation_newbody_size ) );
	if ( $elation_newbody_mod !== customizer_library_get_default( $elation_newbody_size ) ) {
		$elation_body_font_size = $elation_newbody_mod;
	}
	$elation_body_line_height = get_theme_mod( 'elation-body-font-lheight', customizer_library_get_default( 'elation-body-font-lheight' ) );
	$elation_newbody_lheight = 'elation-content-lheight';
	$elation_newbody_lmod = get_theme_mod( $elation_newbody_lheight, customizer_library_get_default( $elation_newbody_lheight ) );
	if ( $elation_newbody_lmod !== customizer_library_get_default( $elation_newbody_lheight ) ) {
		$elation_body_line_height = $elation_newbody_lmod;
	}
	$elation_editor_css .= '.editor-styles-wrapper .wp-block,
				.editor-styles-wrapper p.wp-block {
					font-family: "' . esc_attr( $elation_body_font ) . '", sans-serif;
					font-size: ' . esc_attr( $elation_body_font_size ) . 'px;
					color: ' . sanitize_hex_color( get_theme_mod( 'elation-content-font-color', customizer_library_get_default( 'elation-content-font-color' ) ) ) . ';
					line-height: ' . esc_attr( $elation_body_line_height ) . ';
				}';

	$elation_editor_css .= '.editor-post-title .editor-post-title__block .editor-post-title__input,
				.editor-styles-wrapper h1.wp-block,
				.editor-styles-wrapper h2.wp-block,
				.editor-styles-wrapper h3.wp-block,
				.editor-styles-wrapper h4.wp-block,
				.editor-styles-wrapper h5.wp-block,
				.editor-styles-wrapper h6.wp-block {
					font-family: "' . esc_attr( $elation_heading_font ) . '", sans-serif;
					color: ' . sanitize_hex_color( get_theme_mod( 'elation-content-head-font-color', customizer_library_get_default( 'elation-content-head-font-color' ) ) ) . ';
				}
				.wp-block-quote:not(.is-large),
				.wp-block-quote:not(.is-style-large) {
					border-left-color: ' . sanitize_hex_color( get_theme_mod( 'vogue-primary-color', customizer_library_get_default( 'vogue-primary-color' ) ) ) . ' !important;
				}';
	
	$elation_heading_font_size = get_theme_mod( 'elation-heading-fonts-size', customizer_library_get_default( 'elation-heading-fonts-size' ) );

	switch ( $elation_heading_font_size ) {
		case '1':
			$elation_editor_css .= '.editor-styles-wrapper h1.wp-block { font-size: 2em; }
									.editor-styles-wrapper h2.wp-block { font-size: 1.5em; }
									.editor-styles-wrapper h3.wp-block { font-size: 1.17em; }
									.editor-styles-wrapper h4.wp-block { font-size: 1em; }
									.editor-styles-wrapper h5.wp-block { font-size: 0.83em; }
									.editor-styles-wrapper h6.wp-block { font-size: 0.67em; }';
			break;
		case '2':
			$elation_editor_css .= '.editor-styles-wrapper h1.wp-block { font-size: 2.4em; }
									.editor-styles-wrapper h2.wp-block { font-size: 2.1em; }
									.editor-styles-wrapper h3.wp-block { font-size: 1.9em; }
									.editor-styles-wrapper h4.wp-block { font-size: 1.4em; }
									.editor-styles-wrapper h5.wp-block { font-size: 1.1em; }
									.editor-styles-wrapper h6.wp-block { font-size: 0.9em; }';
			break;
		case '3':
			$elation_editor_css .= '.editor-styles-wrapper h1.wp-block { font-size: 3em; }
									.editor-styles-wrapper h2.wp-block { font-size: 2.7em; }
									.editor-styles-wrapper h3.wp-block { font-size: 2.2em; }
									.editor-styles-wrapper h4.wp-block { font-size: 1.8em; }
									.editor-styles-wrapper h5.wp-block { font-size: 1.4em; }
									.editor-styles-wrapper h6.wp-block { font-size: 1em; }';
			break;
		case '4':
			$elation_editor_css .= '.editor-styles-wrapper h1.wp-block { font-size: 3.8em; }
									.editor-styles-wrapper h2.wp-block { font-size: 3.3em; }
									.editor-styles-wrapper h3.wp-block { font-size: 2.7em; }
									.editor-styles-wrapper h4.wp-block { font-size: 2.1em; }
									.editor-styles-wrapper h5.wp-block { font-size: 1.8em; }
									.editor-styles-wrapper h6.wp-block { font-size: 1.4em; }';
			break;
	}

	if ( !empty( $elation_editor_css ) && function_exists( 'register_block_type' ) && is_admin() ) {
		wp_register_style( 'elation-customizer-custom-css', false );
		wp_enqueue_style( 'elation-customizer-custom-css' );
		wp_add_inline_style( 'elation-customizer-custom-css', $elation_editor_css );
	}
}
endif;
add_action( 'enqueue_block_editor_assets', 'elation_customizer_editor_styles', 11 );
