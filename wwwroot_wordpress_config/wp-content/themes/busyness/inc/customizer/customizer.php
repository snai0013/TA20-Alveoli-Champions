<?php
/**
 * Busyness Customizer.
 *
 * @package Busyness
 */


//load upgrade-to-pro section
require get_template_directory() . '/inc/customizer/upgrade-to-pro/class-customize.php';

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function busyness_customize_register( $wp_customize ) {
	$options = busyness_get_theme_options();

	// Load custom control functions.
	require get_template_directory() . '/inc/customizer/custom-controls.php';

	// Load customize active callback functions.
	require get_template_directory() . '/inc/customizer/active-callback.php';

	// Load partial callback functions.
	require get_template_directory() . '/inc/customizer/partial.php';

	// Load validation callback functions.
	require get_template_directory() . '/inc/customizer/validation.php';

	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport  = 'postMessage';

	// Remove the core header textcolor control, as it shares the main text color.
	$wp_customize->remove_control( 'header_textcolor' );

	// Header title color setting and control.
	$wp_customize->add_setting( 'busyness_theme_options[header_title_color]', array(
		'default'           => $options['header_title_color'],
		'sanitize_callback' => 'sanitize_hex_color',
		'transport'			=> 'postMessage'
	) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'busyness_theme_options[header_title_color]', array(
		'priority'			=> 5,
		'label'             => esc_html__( 'Header Title Color', 'busyness' ),
		'section'           => 'colors',
	) ) );

	// Header tagline color setting and control.
	$wp_customize->add_setting( 'busyness_theme_options[header_tagline_color]', array(
		'default'           => $options['header_tagline_color'],
		'sanitize_callback' => 'sanitize_hex_color',
		'transport'			=> 'postMessage'
	) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'busyness_theme_options[header_tagline_color]', array(
		'priority'			=> 6,
		'label'             => esc_html__( 'Header Tagline Color', 'busyness' ),
		'section'           => 'colors',
	) ) );

	// Site identity extra options.
	$wp_customize->add_setting( 'busyness_theme_options[header_txt_logo_extra]', array(
		'default'           => $options['header_txt_logo_extra'],
		'sanitize_callback' => 'busyness_sanitize_select',
		'transport'			=> 'refresh'
	) );

	$wp_customize->add_control( 'busyness_theme_options[header_txt_logo_extra]', array(
		'priority'			=> 50,
		'type'				=> 'radio',
		'label'             => esc_html__( 'Site Identity Extra Options', 'busyness' ),
		'section'           => 'title_tagline',
		'choices'				=> array(
			'hide-all'     => esc_html__( 'Hide All', 'busyness' ),
			'show-all'     => esc_html__( 'Show All', 'busyness' ),
			'title-only'   => esc_html__( 'Title Only', 'busyness' ),
			'tagline-only' => esc_html__( 'Tagline Only', 'busyness' ),
			'logo-title'   => esc_html__( 'Logo + Title', 'busyness' ),
			'logo-tagline' => esc_html__( 'Logo + Tagline', 'busyness' ),
			)
	) );


	// Add panel for common theme options
	$wp_customize->add_panel( 'busyness_theme_options_panel' , array(
	    'title'      => esc_html__( 'Theme Options','busyness' ),
	    'description'=> esc_html__( 'Busyness Theme Options.', 'busyness' ),
	    'priority'   => 150,
	) );

	// breadcrumb
	require get_template_directory() . '/inc/customizer/theme-options/breadcrumb.php';

	// load layout
	require get_template_directory() . '/inc/customizer/theme-options/layout.php';

	// load menu
	require get_template_directory() . '/inc/customizer/theme-options/menu.php';

	// load static homepage option
	require get_template_directory() . '/inc/customizer/theme-options/homepage-static.php';

	// load archive option
	require get_template_directory() . '/inc/customizer/theme-options/excerpt.php';

	// load archive option
	require get_template_directory() . '/inc/customizer/theme-options/archive.php';

	// load single post option
	require get_template_directory() . '/inc/customizer/theme-options/single-posts.php';

	// load pagination option
	require get_template_directory() . '/inc/customizer/theme-options/pagination.php';

	// load footer option
	require get_template_directory() . '/inc/customizer/theme-options/footer.php';

	// load reset option
	require get_template_directory() . '/inc/customizer/theme-options/reset.php';

	// Add panel for front page theme options.
	$wp_customize->add_panel( 'busyness_home_page_panel' , array(
	    'title'      => esc_html__( 'Homepage Sections','busyness' ),
	    'description'=> esc_html__( 'Homepage Theme Options', 'busyness' ),
	    'priority'   => 140,
	) );


	// load slider option
	require get_template_directory() . '/inc/customizer/sections/slider.php';

	// load service option
	require get_template_directory() . '/inc/customizer/sections/service.php';

	// load about option
	require get_template_directory() . '/inc/customizer/sections/about.php';

	// load cta option
	require get_template_directory() . '/inc/customizer/sections/cta.php';

	// load blog option
	require get_template_directory() . '/inc/customizer/sections/blog.php';




}
add_action( 'customize_register', 'busyness_customize_register' );

/*
 * Load customizer sanitization functions.
 */
require get_template_directory() . '/inc/customizer/sanitize.php';

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function busyness_customize_preview_js() {
	wp_enqueue_script( 'busyness-customizer', get_template_directory_uri() . '/assets/js/customizer' . busyness_min() . '.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'busyness_customize_preview_js' );

/**
 * Load dynamic logic for the customizer controls area.
 */
function busyness_customize_control_js() {
	// fontawesome
	wp_enqueue_style( 'font-awesome-css', get_template_directory_uri() . '/assets/css/font-awesome' . busyness_min() . '.css' );

	// Choose from select jquery.
	wp_enqueue_style( 'chosen-css', get_template_directory_uri() . '/assets/css/chosen' . busyness_min() . '.css' );
	wp_enqueue_script( 'jquery-chosen', get_template_directory_uri() . '/assets/js/chosen.jquery' . busyness_min() . '.js', array( 'jquery' ), '1.4.2', true );

	// simple icon picker
	wp_enqueue_style( 'simple-iconpicker-css', get_template_directory_uri() . '/assets/css/simple-iconpicker' . busyness_min() . '.css' );
	wp_enqueue_script( 'jquery-simple-iconpicker', get_template_directory_uri() . '/assets/js/simple-iconpicker' . busyness_min() . '.js', array( 'jquery' ), '', true );

	wp_enqueue_style( 'busyness-customize-controls-css', get_template_directory_uri() . '/assets/css/customize-controls' . busyness_min() . '.css' );
	wp_enqueue_script( 'busyness-customize-controls', get_template_directory_uri() . '/assets/js/customize-controls' . busyness_min() . '.js', array(), '1.0', true );
	$busyness_reset_data = array(
		'reset_message' => esc_html__( 'Refresh the customizer page after saving to view reset effects', 'busyness' )
	);
	// Send list of color variables as object to custom customizer js
	wp_localize_script( 'busyness-customize-controls', 'busyness_reset_data', $busyness_reset_data );
}
add_action( 'customize_controls_enqueue_scripts', 'busyness_customize_control_js' );

if ( !function_exists( 'busyness_reset_options' ) ) :
	/**
	 * Reset all options
	 *
	 * @since Busyness 1.0.0
	 *
	 * @param bool $checked Whether the reset is checked.
	 * @return bool Whether the reset is checked.
	 */
	function busyness_reset_options() {
		$options = busyness_get_theme_options();
		if ( true === $options['reset_options'] ) {
			// Reset custom theme options.
			set_theme_mod( 'busyness_theme_options', array() );
			// Reset custom header and backgrounds.
			remove_theme_mod( 'header_image' );
			remove_theme_mod( 'header_image_data' );
			remove_theme_mod( 'background_image' );
			remove_theme_mod( 'background_color' );
			remove_theme_mod( 'header_textcolor' );
	    }
	  	else {
		    return false;
	  	}
	}
endif;
add_action( 'customize_save_after', 'busyness_reset_options' );
