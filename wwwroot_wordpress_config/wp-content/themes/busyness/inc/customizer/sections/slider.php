<?php
/**
 * Slider Section options
 *
 * @package Busyness
 */

// Add Slider section
$wp_customize->add_section( 'busyness_slider_section', array(
	'title'             => esc_html__( 'Main Slider','busyness' ),
	'description'       => esc_html__( 'Slider Section options.', 'busyness' ),
	'panel'             => 'busyness_home_page_panel',
) );

// Slider content enable control and setting
$wp_customize->add_setting( 'busyness_theme_options[slider_section_enable]', array(
	'default'			=> 	$options['slider_section_enable'],
	'sanitize_callback' => 'busyness_sanitize_switch_control',
) );

$wp_customize->add_control( new Busyness_Switch_Control( $wp_customize, 'busyness_theme_options[slider_section_enable]', array(
	'label'             => esc_html__( 'Enable Section', 'busyness' ),
	'section'           => 'busyness_slider_section',
	'on_off_label' 		=> busyness_switch_options(),
) ) );

// Slider content enable control and setting
$wp_customize->add_setting( 'busyness_theme_options[slider_autoplay_enable]', array(
	'default'			=> 	$options['slider_autoplay_enable'],
	'sanitize_callback' => 'busyness_sanitize_switch_control',
) );

$wp_customize->add_control( new Busyness_Switch_Control( $wp_customize, 'busyness_theme_options[slider_autoplay_enable]', array(
	'label'             => esc_html__( 'Enable Autoplay', 'busyness' ),
	'section'           => 'busyness_slider_section',
	'active_callback'   => 'busyness_is_slider_section_enable',
	'on_off_label' 		=> busyness_switch_options(),
) ) );

// Slider alt btn label setting and control
$wp_customize->add_setting( 'busyness_theme_options[slider_btn_label]', array(
	'sanitize_callback' => 'sanitize_text_field',
	'default'			=> $options['slider_btn_label'],
	'transport'			=> 'postMessage'
) );

$wp_customize->add_control( 'busyness_theme_options[slider_btn_label]', array(
	'label'           	=> esc_html__( 'Button Label', 'busyness' ),
	'section'        	=> 'busyness_slider_section',
	'active_callback' 	=> 'busyness_is_slider_section_enable',
	'type'				=> 'text',
) );

if ( isset( $wp_customize->selective_refresh ) ) {
    $wp_customize->selective_refresh->add_partial( 'busyness_theme_options[slider_btn_label]', array(
		'selector'            => '#featured-slider .read-more .slider-btn',
		'settings'            => 'busyness_theme_options[slider_btn_label]',
		'container_inclusive' => false,
		'fallback_refresh'    => true,
		'render_callback'     => 'business_pro_slider_btn_label_partial',
    ) );
}

for ( $i = 1; $i <= 3 ; $i++ ) :
	// slider pages drop down chooser control and setting
	$wp_customize->add_setting( 'busyness_theme_options[slider_content_page_' . $i . ']', array(
		'sanitize_callback' => 'busyness_sanitize_page',
	) );

	$wp_customize->add_control( new Busyness_Dropdown_Chooser( $wp_customize, 'busyness_theme_options[slider_content_page_' . $i . ']', array(
		'label'             => sprintf( esc_html__( 'Select Page %d', 'busyness' ), $i ),
		'section'           => 'busyness_slider_section',
		'choices'			=> busyness_page_choices(),
		'active_callback'	=> 'busyness_is_slider_section_enable',
	) ) );
endfor;
