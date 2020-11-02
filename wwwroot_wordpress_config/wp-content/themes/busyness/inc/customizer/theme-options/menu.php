<?php
/**
 * Menu options
 *
 * @package Busyness
 */

// Add sidebar section
$wp_customize->add_section( 'busyness_menu', array(
	'title'             => esc_html__('Header','busyness'),
	'description'       => esc_html__( 'Header', 'busyness' ),
	'panel'             => 'busyness_theme_options_panel',
) );

// Menu sticky setting and control.
$wp_customize->add_setting( 'busyness_theme_options[menu_sticky]', array(
	'sanitize_callback' => 'busyness_sanitize_switch_control',
	'default'           => $options['menu_sticky'],
) );

$wp_customize->add_control( new Busyness_Switch_Control( $wp_customize, 'busyness_theme_options[menu_sticky]', array(
	'label'             => esc_html__( 'Sticky Header', 'busyness' ),
	'section'           => 'busyness_menu',
	'on_off_label' 		=> busyness_switch_options(),
) ) );
