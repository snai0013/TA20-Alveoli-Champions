<?php
/**
 * Excerpt options
 *
 * @package Busyness
 */

// Add excerpt section
$wp_customize->add_section( 'busyness_single_post_section', array(
	'title'             => esc_html__( 'Single Post','busyness' ),
	'description'       => esc_html__( 'Options to change the single posts globally.', 'busyness' ),
	'panel'             => 'busyness_theme_options_panel',
) );

// Archive date meta setting and control.
$wp_customize->add_setting( 'busyness_theme_options[single_post_hide_date]', array(
	'default'           => $options['single_post_hide_date'],
	'sanitize_callback' => 'busyness_sanitize_switch_control',
) );

$wp_customize->add_control( new Busyness_Switch_Control( $wp_customize, 'busyness_theme_options[single_post_hide_date]', array(
	'label'             => esc_html__( 'Hide Date', 'busyness' ),
	'section'           => 'busyness_single_post_section',
	'on_off_label' 		=> busyness_hide_options(),
) ) );

// Archive author meta setting and control.
$wp_customize->add_setting( 'busyness_theme_options[single_post_hide_author]', array(
	'default'           => $options['single_post_hide_author'],
	'sanitize_callback' => 'busyness_sanitize_switch_control',
) );

$wp_customize->add_control( new Busyness_Switch_Control( $wp_customize, 'busyness_theme_options[single_post_hide_author]', array(
	'label'             => esc_html__( 'Hide Author', 'busyness' ),
	'section'           => 'busyness_single_post_section',
	'on_off_label' 		=> busyness_hide_options(),
) ) );

// Archive author category setting and control.
$wp_customize->add_setting( 'busyness_theme_options[single_post_hide_category]', array(
	'default'           => $options['single_post_hide_category'],
	'sanitize_callback' => 'busyness_sanitize_switch_control',
) );

$wp_customize->add_control( new Busyness_Switch_Control( $wp_customize, 'busyness_theme_options[single_post_hide_category]', array(
	'label'             => esc_html__( 'Hide Category', 'busyness' ),
	'section'           => 'busyness_single_post_section',
	'on_off_label' 		=> busyness_hide_options(),
) ) );

// Archive tag category setting and control.
$wp_customize->add_setting( 'busyness_theme_options[single_post_hide_tags]', array(
	'default'           => $options['single_post_hide_tags'],
	'sanitize_callback' => 'busyness_sanitize_switch_control',
) );

$wp_customize->add_control( new Busyness_Switch_Control( $wp_customize, 'busyness_theme_options[single_post_hide_tags]', array(
	'label'             => esc_html__( 'Hide Tag', 'busyness' ),
	'section'           => 'busyness_single_post_section',
	'on_off_label' 		=> busyness_hide_options(),
) ) );
