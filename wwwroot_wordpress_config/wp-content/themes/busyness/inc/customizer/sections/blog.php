<?php
/**
 * Blog Section options
 *
 * @package Busyness
 */

// Add Blog section
$wp_customize->add_section( 'busyness_blog_section', array(
	'title'             => esc_html__( 'Blog','busyness' ),
	'description'       => esc_html__( 'Blog Section options.', 'busyness' ),
	'panel'             => 'busyness_home_page_panel',
) );

// Blog content enable control and setting
$wp_customize->add_setting( 'busyness_theme_options[blog_section_enable]', array(
	'default'			=> 	$options['blog_section_enable'],
	'sanitize_callback' => 'busyness_sanitize_switch_control',
) );

$wp_customize->add_control( new Busyness_Switch_Control( $wp_customize, 'busyness_theme_options[blog_section_enable]', array(
	'label'             => esc_html__( 'Enable Section', 'busyness' ),
	'section'           => 'busyness_blog_section',
	'on_off_label' 		=> busyness_switch_options(),
) ) );


// blog title setting and control
$wp_customize->add_setting( 'busyness_theme_options[blog_title]', array(
	'sanitize_callback' => 'sanitize_text_field',
	'default'			=> $options['blog_title'],
	'transport'			=> 'postMessage',
) );

$wp_customize->add_control( 'busyness_theme_options[blog_title]', array(
	'label'           	=> esc_html__( 'Section Title', 'busyness' ),
	'section'        	=> 'busyness_blog_section',
	'active_callback' 	=> 'busyness_is_blog_section_enable',
	'type'				=> 'text',
) );

// Abort if selective refresh is not available.
if ( isset( $wp_customize->selective_refresh ) ) {
    $wp_customize->selective_refresh->add_partial( 'busyness_theme_options[blog_title]', array(
		'selector'            => '#blog .section-header h2',
		'settings'            => 'busyness_theme_options[blog_title]',
		'container_inclusive' => false,
		'fallback_refresh'    => true,
		'render_callback'     => 'busyness_blog_title_partial',
    ) );
}


// Blog content type control and setting
$wp_customize->add_setting( 'busyness_theme_options[blog_content_type]', array(
	'default'          	=> $options['blog_content_type'],
	'sanitize_callback' => 'busyness_sanitize_select',
) );

$wp_customize->add_control( 'busyness_theme_options[blog_content_type]', array(
	'label'             => esc_html__( 'Content Type', 'busyness' ),
	'section'           => 'busyness_blog_section',
	'type'				=> 'select',
	'active_callback' 	=> 'busyness_is_blog_section_enable',
	'choices'			=> array(
		'page' 		=> esc_html__( 'Page', 'busyness' ),
		'category' 	=> esc_html__( 'Category', 'busyness' ),
	),
) );


for ( $i = 1; $i <= 3; $i++ ) :
	// blog pages drop down chooser control and setting
	$wp_customize->add_setting( 'busyness_theme_options[blog_content_page_' . $i . ']', array(
		'sanitize_callback' => 'busyness_sanitize_page',
	) );

	$wp_customize->add_control( new Busyness_Dropdown_Chooser( $wp_customize, 'busyness_theme_options[blog_content_page_' . $i . ']', array(
		'label'             => sprintf( esc_html__( 'Select Page %d', 'busyness' ), $i ),
		'section'           => 'busyness_blog_section',
		'choices'			=> busyness_page_choices(),
		'active_callback'	=> 'busyness_is_blog_section_content_page_enable',
	) ) );
endfor;

// Add dropdown category setting and control.
$wp_customize->add_setting(  'busyness_theme_options[blog_content_category]', array(
	'sanitize_callback' => 'busyness_sanitize_single_category',
) ) ;

$wp_customize->add_control( new Busyness_Dropdown_Taxonomies_Control( $wp_customize,'busyness_theme_options[blog_content_category]', array(
	'label'             => esc_html__( 'Select Category', 'busyness' ),
	'description'      	=> esc_html__( 'Note: Latest selected no of posts will be shown from selected category', 'busyness' ),
	'section'           => 'busyness_blog_section',
	'type'              => 'dropdown-taxonomies',
	'active_callback'	=> 'busyness_is_blog_section_content_category_enable'
) ) );
