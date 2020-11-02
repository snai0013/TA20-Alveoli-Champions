<?php
/**
 * About Section options
 *
 * @package Busyness
 */

// Add About section
$wp_customize->add_section( 'busyness_about_section', array(
	'title'             => esc_html__( 'About','busyness' ),
	'description'       => esc_html__( 'About Section options.', 'busyness' ),
	'panel'             => 'busyness_home_page_panel',
) );

// About content enable control and setting
$wp_customize->add_setting( 'busyness_theme_options[about_section_enable]', array(
	'default'			=> 	$options['about_section_enable'],
	'sanitize_callback' => 'busyness_sanitize_switch_control',
) );

$wp_customize->add_control( new Busyness_Switch_Control( $wp_customize, 'busyness_theme_options[about_section_enable]', array(
	'label'             => esc_html__( 'Enable Section', 'busyness' ),
	'section'           => 'busyness_about_section',
	'on_off_label' 		=> busyness_switch_options(),
) ) );


// about pages drop down chooser control and setting
$wp_customize->add_setting( 'busyness_theme_options[about_content_page]', array(
	'sanitize_callback' => 'busyness_sanitize_page',
) );

$wp_customize->add_control( new Busyness_Dropdown_Chooser( $wp_customize, 'busyness_theme_options[about_content_page]', array(
	'label'             => esc_html__( 'Select Page', 'busyness' ),
	'section'           => 'busyness_about_section',
	'choices'			=> busyness_page_choices(),
	'active_callback'	=> 'busyness_is_about_section_enable',
) ) );



// About btn title setting and control
$wp_customize->add_setting( 'busyness_theme_options[about_btn_title]', array(
	'sanitize_callback' => 'sanitize_text_field',
	'default'          	=> $options['about_btn_title']
) );

$wp_customize->add_control( 'busyness_theme_options[about_btn_title]', array(
	'label'           	=> esc_html__( 'Button Label', 'busyness' ),
	'section'        	=> 'busyness_about_section',
	'active_callback' 	=> 'busyness_is_about_section_enable',
	'type'				=> 'text',
) );

