<?php
/**
 * pagination options
 *
 * @package Busyness
 */

// Add sidebar section
$wp_customize->add_section( 'busyness_pagination', array(
	'title'               => esc_html__('Pagination','busyness'),
	'description'         => esc_html__( 'Pagination section options.', 'busyness' ),
	'panel'               => 'busyness_theme_options_panel',
) );

// Sidebar position setting and control.
$wp_customize->add_setting( 'busyness_theme_options[pagination_enable]', array(
	'sanitize_callback' => 'busyness_sanitize_switch_control',
	'default'             => $options['pagination_enable'],
) );

$wp_customize->add_control( new Busyness_Switch_Control( $wp_customize, 'busyness_theme_options[pagination_enable]', array(
	'label'               => esc_html__( 'Enable Section', 'busyness' ),
	'section'             => 'busyness_pagination',
	'on_off_label' 		=> busyness_switch_options(),
) ) );

// Site layout setting and control.
$wp_customize->add_setting( 'busyness_theme_options[pagination_type]', array(
	'sanitize_callback'   => 'busyness_sanitize_select',
	'default'             => $options['pagination_type'],
) );

$wp_customize->add_control( 'busyness_theme_options[pagination_type]', array(
	'label'               => esc_html__( 'Pagination Type', 'busyness' ),
	'section'             => 'busyness_pagination',
	'type'                => 'select',
	'choices'			  => busyness_pagination_options(),
	'active_callback'	  => 'busyness_is_pagination_enable',
) );
