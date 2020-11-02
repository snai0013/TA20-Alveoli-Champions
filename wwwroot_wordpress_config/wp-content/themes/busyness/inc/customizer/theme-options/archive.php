<?php
/**
 * Archive options
 *
 * @package Busyness
 */

// Add archive section
$wp_customize->add_section( 'busyness_archive_section', array(
	'title'             => esc_html__( 'Blog/Archive','busyness' ),
	'description'       => esc_html__( 'Archive section options.', 'busyness' ),
	'panel'             => 'busyness_theme_options_panel',
) );

// Your latest posts title setting and control.
$wp_customize->add_setting( 'busyness_theme_options[your_latest_posts_title]', array(
	'default'           => $options['your_latest_posts_title'],
	'sanitize_callback' => 'sanitize_text_field',
) );

$wp_customize->add_control( 'busyness_theme_options[your_latest_posts_title]', array(
	'label'             => esc_html__( 'Your Latest Posts Title', 'busyness' ),
	'description'       => esc_html__( 'This option only works if Static Front Page is set to "Your latest posts."', 'busyness' ),
	'section'           => 'busyness_archive_section',
	'type'				=> 'text',
	'active_callback'   => 'busyness_is_latest_posts'
) );

// Archive date meta setting and control.
$wp_customize->add_setting( 'busyness_theme_options[hide_date]', array(
	'default'           => $options['hide_date'],
	'sanitize_callback' => 'busyness_sanitize_switch_control',
) );

$wp_customize->add_control( new Busyness_Switch_Control( $wp_customize, 'busyness_theme_options[hide_date]', array(
	'label'             => esc_html__( 'Hide Date', 'busyness' ),
	'section'           => 'busyness_archive_section',
	'on_off_label' 		=> busyness_hide_options(),
) ) );

// Archive author category setting and control.
$wp_customize->add_setting( 'busyness_theme_options[hide_category]', array(
	'default'           => $options['hide_category'],
	'sanitize_callback' => 'busyness_sanitize_switch_control',
) );

$wp_customize->add_control( new Busyness_Switch_Control( $wp_customize, 'busyness_theme_options[hide_category]', array(
	'label'             => esc_html__( 'Hide Category', 'busyness' ),
	'section'           => 'busyness_archive_section',
	'on_off_label' 		=> busyness_hide_options(),
) ) );
