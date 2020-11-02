<?php
/**
 * Service Section options
 *
 * @package Busyness
 */

// Add Service section
$wp_customize->add_section( 'busyness_service_section', array(
	'title'             => esc_html__( 'Services','busyness' ),
	'description'       => esc_html__( 'Services Section options.', 'busyness' ),
	'panel'             => 'busyness_home_page_panel',
) );

// Service content enable control and setting
$wp_customize->add_setting( 'busyness_theme_options[service_section_enable]', array(
	'default'			=> 	$options['service_section_enable'],
	'sanitize_callback' => 'busyness_sanitize_switch_control',
) );

$wp_customize->add_control( new Busyness_Switch_Control( $wp_customize, 'busyness_theme_options[service_section_enable]', array(
	'label'             => esc_html__( 'Enable Section', 'busyness' ),
	'section'           => 'busyness_service_section',
	'on_off_label' 		=> busyness_switch_options(),
) ) );


// Service title setting and control
$wp_customize->add_setting( 'busyness_theme_options[service_title]', array(
	'default'			=> 	$options['service_title'],
	'sanitize_callback' => 'sanitize_text_field',
	'transport'			=> 'postMessage',
) );

$wp_customize->add_control( 'busyness_theme_options[service_title]', array(
	'label'           	=> sprintf( esc_html__( 'Section Title', 'busyness' ) ),
	'section'        	=> 'busyness_service_section',
	'active_callback' 	=> 'busyness_is_service_section_enable',
	'type'				=> 'text',
) );

// Abort if selective refresh is not available.
if ( isset( $wp_customize->selective_refresh ) ) {
    $wp_customize->selective_refresh->add_partial( 'busyness_theme_options[service_title]', array(
		'selector'            => '#featured-services .section-header h2',
		'settings'            => 'busyness_theme_options[service_title]',
		'container_inclusive' => false,
		'fallback_refresh'    => true,
		'render_callback'     => 'busyness_service_title_partial',
    ) );
}


for ( $i = 1; $i <= 3; $i++ ) :

	$wp_customize->add_setting( 'busyness_theme_options[service_hr_'. $i .']', array(
		'sanitize_callback' => 'sanitize_text_field'
	) );

	$wp_customize->add_control( new Busyness_Customize_Horizontal_Line( $wp_customize, 'busyness_theme_options[service_hr_'. $i .']',
		array(
			'section'         => 'busyness_service_section',
			'active_callback' => 'busyness_is_service_section_enable',
			'type'			  => 'hr'
	) ) );


	// service note control and setting
	$wp_customize->add_setting( 'busyness_theme_options[service_content_icon_' . $i . ']', array(
		'sanitize_callback' => 'sanitize_text_field',
	) );

	$wp_customize->add_control( new Busyness_Icon_Picker( $wp_customize, 'busyness_theme_options[service_content_icon_' . $i . ']', array(
		'label'             => sprintf( esc_html__( 'Select Icon %d', 'busyness' ), $i ),
		'section'           => 'busyness_service_section',
		'active_callback'	=> 'busyness_is_service_section_enable',
	) ) );

	// service pages drop down chooser control and setting
	$wp_customize->add_setting( 'busyness_theme_options[service_content_page_' . $i . ']', array(
		'sanitize_callback' => 'busyness_sanitize_page',
	) );

	$wp_customize->add_control( new Busyness_Dropdown_Chooser( $wp_customize, 'busyness_theme_options[service_content_page_' . $i . ']', array(
		'label'             => sprintf( esc_html__( 'Select Page %d', 'busyness' ), $i ),
		'section'           => 'busyness_service_section',
		'choices'			=> busyness_page_choices(),
		'active_callback'	=> 'busyness_is_service_section_enable',
	) ) );

endfor;


