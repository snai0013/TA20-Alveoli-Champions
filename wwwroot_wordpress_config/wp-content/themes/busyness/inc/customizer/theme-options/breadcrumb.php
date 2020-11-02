<?php
/**
 * Breadcrumb options
 *
 * @package Busyness
 */

$wp_customize->add_section( 'busyness_breadcrumb', array(
	'title'             => esc_html__( 'Breadcrumb','busyness' ),
	'description'       => esc_html__( 'Breadcrumb section options.', 'busyness' ),
	'panel'             => 'busyness_theme_options_panel',
) );

// Breadcrumb enable setting and control.
$wp_customize->add_setting( 'busyness_theme_options[breadcrumb_enable]', array(
	'sanitize_callback' => 'busyness_sanitize_switch_control',
	'default'          	=> $options['breadcrumb_enable'],
) );

$wp_customize->add_control( new Busyness_Switch_Control( $wp_customize, 'busyness_theme_options[breadcrumb_enable]', array(
	'label'            	=> esc_html__( 'Enable Section', 'busyness' ),
	'section'          	=> 'busyness_breadcrumb',
	'on_off_label' 		=> busyness_switch_options(),
) ) );

// Breadcrumb separator setting and control.
$wp_customize->add_setting( 'busyness_theme_options[breadcrumb_separator]', array(
	'sanitize_callback'	=> 'sanitize_text_field',
	'default'          	=> $options['breadcrumb_separator'],
) );

$wp_customize->add_control( 'busyness_theme_options[breadcrumb_separator]', array(
	'label'            	=> esc_html__( 'Separator', 'busyness' ),
	'active_callback' 	=> 'busyness_is_breadcrumb_enable',
	'section'          	=> 'busyness_breadcrumb',
) );
