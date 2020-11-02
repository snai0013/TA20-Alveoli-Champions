<?php
/**
 * Layout options
 *
 * @package Busyness
 */

// Add sidebar section
$wp_customize->add_section( 'busyness_layout', array(
	'title'               => esc_html__('Layout','busyness'),
	'description'         => esc_html__( 'Layout section options.', 'busyness' ),
	'panel'               => 'busyness_theme_options_panel',
) );

// Site layout setting and control.
$wp_customize->add_setting( 'busyness_theme_options[site_layout]', array(
	'sanitize_callback'   => 'busyness_sanitize_select',
	'default'             => $options['site_layout'],
) );

$wp_customize->add_control(  new Busyness_Custom_Radio_Image_Control ( $wp_customize, 'busyness_theme_options[site_layout]', array(
	'label'               => esc_html__( 'Site Layout', 'busyness' ),
	'section'             => 'busyness_layout',
	'choices'			  => busyness_site_layout(),
) ) );

// Sidebar position setting and control.
$wp_customize->add_setting( 'busyness_theme_options[sidebar_position]', array(
	'sanitize_callback'   => 'busyness_sanitize_select',
	'default'             => $options['sidebar_position'],
) );

$wp_customize->add_control(  new Busyness_Custom_Radio_Image_Control ( $wp_customize, 'busyness_theme_options[sidebar_position]', array(
	'label'               => esc_html__( 'Global Sidebar Position', 'busyness' ),
	'section'             => 'busyness_layout',
	'choices'			  => busyness_global_sidebar_position(),
) ) );

// Post sidebar position setting and control.
$wp_customize->add_setting( 'busyness_theme_options[post_sidebar_position]', array(
	'sanitize_callback'   => 'busyness_sanitize_select',
	'default'             => $options['post_sidebar_position'],
) );

$wp_customize->add_control(  new Busyness_Custom_Radio_Image_Control ( $wp_customize, 'busyness_theme_options[post_sidebar_position]', array(
	'label'               => esc_html__( 'Posts Sidebar Position', 'busyness' ),
	'section'             => 'busyness_layout',
	'choices'			  => busyness_sidebar_position(),
) ) );

// Post sidebar position setting and control.
$wp_customize->add_setting( 'busyness_theme_options[page_sidebar_position]', array(
	'sanitize_callback'   => 'busyness_sanitize_select',
	'default'             => $options['page_sidebar_position'],
) );

$wp_customize->add_control( new Busyness_Custom_Radio_Image_Control( $wp_customize, 'busyness_theme_options[page_sidebar_position]', array(
	'label'               => esc_html__( 'Pages Sidebar Position', 'busyness' ),
	'section'             => 'busyness_layout',
	'choices'			  => busyness_sidebar_position(),
) ) );