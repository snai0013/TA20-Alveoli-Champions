<?php
/**
 * Call to Action Section options
 *
 * @package Busyness
 */

// Add Call to Action section
$wp_customize->add_section( 'busyness_cta_section', array(
	'title'             => esc_html__( 'Call to Action','busyness' ),
	'description'       => esc_html__( 'Call to Action Section options.', 'busyness' ),
	'panel'             => 'busyness_home_page_panel',
) );

// Call to Action content enable control and setting
$wp_customize->add_setting( 'busyness_theme_options[cta_section_enable]', array(
	'default'			=> 	$options['cta_section_enable'],
	'sanitize_callback' => 'busyness_sanitize_switch_control',
) );

$wp_customize->add_control( new Busyness_Switch_Control( $wp_customize, 'busyness_theme_options[cta_section_enable]', array(
	'label'             => esc_html__( 'Enable Section', 'busyness' ),
	'section'           => 'busyness_cta_section',
	'on_off_label' 		=> busyness_switch_options(),
) ) );


// cta pages drop down chooser control and setting
$wp_customize->add_setting( 'busyness_theme_options[cta_content_page]', array(
	'sanitize_callback' => 'busyness_sanitize_page',
) );

$wp_customize->add_control( new Busyness_Dropdown_Chooser( $wp_customize, 'busyness_theme_options[cta_content_page]', array(
	'label'             => esc_html__( 'Select Page', 'busyness' ),
	'section'           => 'busyness_cta_section',
	'choices'			=> busyness_page_choices(),
	'active_callback'	=> 'busyness_is_cta_section_enable',
) ) );

// cta btn title setting and control
$wp_customize->add_setting( 'busyness_theme_options[cta_btn_title]', array(
	'sanitize_callback' => 'sanitize_text_field',
	'default'			=> $options['cta_btn_title'],
	'transport'			=> 'postMessage',
) );

$wp_customize->add_control( 'busyness_theme_options[cta_btn_title]', array(
	'label'           	=> esc_html__( 'Button Label', 'busyness' ),
	'section'        	=> 'busyness_cta_section',
	'active_callback' 	=> 'busyness_is_cta_section_enable',
	'type'				=> 'text',
) );

// Abort if selective refresh is not available.
if ( isset( $wp_customize->selective_refresh ) ) {
    $wp_customize->selective_refresh->add_partial( 'busyness_theme_options[cta_btn_title]', array(
		'selector'            => '#call-to-action .wrapper a.btn',
		'settings'            => 'busyness_theme_options[cta_btn_title]',
		'container_inclusive' => false,
		'fallback_refresh'    => true,
		'render_callback'     => 'busyness_cta_btn_title_partial',
    ) );
}

