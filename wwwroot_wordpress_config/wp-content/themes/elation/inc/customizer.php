<?php
/**
 * Elation Theme Customizer
 */
/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function elation_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial( 'blogname', array(
			'selector'        => '.site-title a',
			'render_callback' => 'elation_customize_partial_blogname',
		) );
		$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
			'selector'        => '.site-description',
			'render_callback' => 'elation_customize_partial_blogdescription',
		) );
		// Header Partials
		$wp_customize->selective_refresh->add_partial( 'elation-edit-text-phone', array(
			'selector'        => '.header-phone',
			'render_callback' => 'elation_customize_partial_header_phone',
		) );
		$wp_customize->selective_refresh->add_partial( 'elation-edit-text-address', array(
			'selector'        => '.header-address',
			'render_callback' => 'elation_customize_partial_header_address',
		) );
		// Footer Partials
		$wp_customize->selective_refresh->add_partial( 'elation-edit-text-footer-etxt', array(
			'selector'        => '.site-copyright',
			'render_callback' => 'elation_customize_partial_footer_txt',
		) );
		$wp_customize->selective_refresh->add_partial( 'elation-edit-text-footer-address', array(
			'selector'        => '.footer-address',
			'render_callback' => 'elation_customize_partial_footer_address',
		) );
		$wp_customize->selective_refresh->add_partial( 'elation-edit-text-footer-extratxt', array(
			'selector'        => '.extra-txt',
			'render_callback' => 'elation_customize_partial_extra_txt',
        ) );
        $wp_customize->selective_refresh->add_partial( 'elation-pagetitle-layout', array(
			'selector'        => '.elation-page-title',
			'render_callback' => 'elation_customize_partial_page_title_layout',
        ) );
	}
}
add_action( 'customize_register', 'elation_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 */
function elation_customize_partial_blogname() {
	bloginfo( 'name' );
}
/**
 * Render the site tagline for the selective refresh partial.
 */
function elation_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Render Header partials.
 */
function elation_customize_partial_header_phone() {
	bloginfo( 'elation-edit-text-phone' );
}
function elation_customize_partial_header_address() {
	bloginfo( 'elation-edit-text-address' );
}
/**
 * Render extra text parts for the selective refresh partial.
 */
function elation_customize_partial_footer_txt() {
	bloginfo( 'elation-edit-text-footer-etxt' );
}
function elation_customize_partial_footer_address() {
	bloginfo( 'elation-edit-text-footer-address' );
}
function elation_customize_partial_extra_txt() {
	bloginfo( 'elation-edit-text-footer-extratxt' );
}
function elation_customize_partial_page_title_layout() {
	bloginfo( 'elation-pagetitle-layout' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function elation_customize_preview_js() {
	wp_enqueue_script( 'elation-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), ELATION_THEME_VERSION, true );
}
add_action( 'customize_preview_init', 'elation_customize_preview_js' );

/**
 * Enqueue Elation custom customizer styling.
 */
function elation_load_customizer_script() {
	wp_enqueue_script( 'elation-customizer-js', get_template_directory_uri() . "/customizer/customizer-library/js/customizer-custom.js", array('jquery'), ELATION_THEME_VERSION, true );
    wp_enqueue_style( 'elation-customizer-css', get_template_directory_uri() . "/customizer/customizer-library/css/customizer.css", array(), ELATION_THEME_VERSION );
}
add_action( 'customize_controls_enqueue_scripts', 'elation_load_customizer_script' );

/**
 * Function to create Customizer internal linking.
 */
function elation_customizer_internal_links() { ?>
	<script type="text/javascript">
        (function($) {
            $(document).ready(function() {
                var api = wp.customize;
                api.bind('ready', function() {
                    $(['control', 'section', 'panel']).each(function(i, type) {
                        $('a[rel="tc-'+type+'"]').click(function(e) {
                            e.preventDefault();
                            var id = $(this).attr('href').replace('#', '');
                            if(api[type].has(id)) {
                                api[type].instance(id).focus();
                            }
                        });
                    });
                });
            });
        })(jQuery);
	</script><?php
 }
 add_action( 'customize_controls_print_scripts', 'elation_customizer_internal_links' );
 
 /**
 * Enqueue Google Fonts for Blocks Editor
 */
function elation_load_editor_fonts() {
	// Font options
	$elation_editor_fonts = array(
		get_theme_mod( 'elation-body-font', customizer_library_get_default( 'elation-body-font' ) ),
		get_theme_mod( 'elation-heading-font', customizer_library_get_default( 'elation-heading-font' ) )
	);
	$elation_font_uri = customizer_library_get_google_font_uri( $elation_editor_fonts );

	// Load Google Fonts
	if ( !get_theme_mod( 'elation-disable-google-font', customizer_library_get_default( 'elation-disable-google-font' ) ) ) {
		wp_enqueue_style( 'elation_load_editor_fonts', $elation_font_uri, array(), null, 'screen' );
	}
}
add_action( 'enqueue_block_editor_assets', 'elation_load_editor_fonts' );

if ( ! function_exists( 'elation_gutenberg_editor_styles' ) ) :
/**
 * Generates the fonts selected in the Customizer and enqueues it to the Blocks Editor
 */
function elation_gutenberg_editor_styles() {
	$websafe = ( get_theme_mod( 'elation-disable-google-font', customizer_library_get_default( 'elation-disable-google-font' ) ) == 1 ) ? '-websafe' : '';

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
	$elation_heading_font_size = esc_attr( get_theme_mod( 'elation-heading-fonts-size', customizer_library_get_default( 'elation-heading-fonts-size' ) ) );
	switch ( $elation_heading_font_size ) {
		case '1':
			$elation_heading_font_size = '.editor-styles-wrapper .wp-block-heading h1 {
									font-size: 2em;
								}.editor-styles-wrapper .wp-block-heading h2 {
									font-size: 1.5em;
								}.editor-styles-wrapper .wp-block-heading h3 {
									font-size: 1.17em;
								}.editor-styles-wrapper .wp-block-heading h4 {
									font-size: 1em;
								}.editor-styles-wrapper .wp-block-heading h5 {
									font-size: 0.83em;
								}.editor-styles-wrapper .wp-block-heading h6 {
									font-size: 0.67em;
								}';
			break;
		case '2':
			$elation_heading_font_size = '.editor-styles-wrapper .wp-block-heading h1 {
									font-size: 2.4em;
								}.editor-styles-wrapper .wp-block-heading h2 {
									font-size: 2.1em;
								}.editor-styles-wrapper .wp-block-heading h3 {
									font-size: 1.9em;
								}.editor-styles-wrapper .wp-block-heading h4 {
									font-size: 1.4em;
								}.editor-styles-wrapper .wp-block-heading h5 {
									font-size: 1.1em;
								}.editor-styles-wrapper .wp-block-heading h6 {
									font-size: 0.9em;
								}';
			break;
		case '3':
			$elation_heading_font_size = '.editor-styles-wrapper .wp-block-heading h1 {
									font-size: 3em;
								}.editor-styles-wrapper .wp-block-heading h2 {
									font-size: 2.7em;
								}.editor-styles-wrapper .wp-block-heading h3 {
									font-size: 2.2em;
								}.editor-styles-wrapper .wp-block-heading h4 {
									font-size: 1.8em;
								}.editor-styles-wrapper .wp-block-heading h5 {
									font-size: 1.4em;
								}.editor-styles-wrapper .wp-block-heading h6 {
									font-size: 1em;
								}';
			break;
		case '4':
			$elation_heading_font_size = '.editor-styles-wrapper .wp-block-heading h1 {
									font-size: 3.8em;
								}.editor-styles-wrapper .wp-block-heading h2 {
									font-size: 3.3em;
								}.editor-styles-wrapper .wp-block-heading h3 {
									font-size: 2.7em;
								}.editor-styles-wrapper .wp-block-heading h4 {
									font-size: 2.1em;
								}.editor-styles-wrapper .wp-block-heading h5 {
									font-size: 1.8em;
								}.editor-styles-wrapper .wp-block-heading h6 {
									font-size: 1.4em;
								}';
			break;
	}

	$editor_css = '.editor-styles-wrapper .wp-block {
					font-family: "' . esc_attr( get_theme_mod( 'elation-body-font'.$websafe, customizer_library_get_default( 'elation-body-font'.$websafe ) ) ) . '", sans-serif;
					color: ' . sanitize_hex_color( get_theme_mod( 'elation-content-font-color', customizer_library_get_default( 'elation-content-font-color' ) ) ) . ';
				}
				.editor-post-title__block .editor-post-title__input,
				.editor-styles-wrapper .wp-block-heading h1,
				.editor-styles-wrapper .wp-block-heading h2,
				.editor-styles-wrapper .wp-block-heading h3,
				.editor-styles-wrapper .wp-block-heading h4,
				.editor-styles-wrapper .wp-block-heading h5,
				.editor-styles-wrapper .wp-block-heading h6 {
					font-family: "' . esc_attr( get_theme_mod( 'elation-heading-font'.$websafe, customizer_library_get_default( 'elation-heading-font'.$websafe ) ) ) . '", sans-serif;
					color: ' . sanitize_hex_color( get_theme_mod( 'elation-content-head-font-color', customizer_library_get_default( 'elation-content-head-font-color' ) ) ) . ';
				}
				.editor-styles-wrapper .wp-block,
				.editor-styles-wrapper .wp-block p {
					font-size: ' . esc_attr( $elation_body_font_size ) . 'px;
					line-height: ' . esc_attr( get_theme_mod( 'elation-body-font-lheight', customizer_library_get_default( 'elation-body-font-lheight' ) ) ) . ';
				}
				.editor-styles-wrapper .wp-block-quote:not(.is-large),
				.editor-styles-wrapper .wp-block-quote:not(.is-style-large) {
					border-left-color: ' . sanitize_hex_color( get_theme_mod( 'elation-primary-color', customizer_library_get_default( 'elation-primary-color' ) ) ) . ' !important;
				}';
	$editor_css .= $elation_heading_font_size;
	
	// Override Content Font Size - if set
	$elation_font_overide = 'elation-content-font-size';
	$elation_font_overide_mod = get_theme_mod( $elation_font_overide, customizer_library_get_default( $elation_font_overide ) );
	if ( $elation_font_overide_mod !== customizer_library_get_default( $elation_font_overide ) ) {
		$elation_fontsize_overide = esc_attr( $elation_font_overide_mod );
		$editor_css .= '.editor-styles-wrapper .wp-block,
						.editor-styles-wrapper .wp-block p {
							font-size: ' . esc_attr( $elation_fontsize_overide ) . 'px;
						}';
	}
	// Override Content Line Height - if set
	$elation_fontlh_overide = 'elation-content-lheight';
	$elation_fontlh_overide_mod = get_theme_mod( $elation_fontlh_overide, customizer_library_get_default( $elation_fontlh_overide ) );
	if ( $elation_fontlh_overide_mod !== customizer_library_get_default( $elation_fontlh_overide ) ) {
		$elation_fontlh_overide = esc_attr( $elation_fontlh_overide_mod );
		$editor_css .= '.editor-styles-wrapper .wp-block,
						.editor-styles-wrapper .wp-block p {
							line-height: ' . esc_attr( $elation_fontlh_overide ) . ';
						}';
	}

	if ( ! empty( $editor_css ) ) {
		wp_register_style( 'elation-custom-editor-css', false );
		wp_enqueue_style( 'elation-custom-editor-css' );
 		wp_add_inline_style( 'elation-custom-editor-css', $editor_css );
	}
}
endif;
add_action( 'enqueue_block_editor_assets', 'elation_gutenberg_editor_styles', 11 );
