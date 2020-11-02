<?php
/**
* Homepage (Static ) options
*
* @package Busyness
*/

// Homepage (Static ) setting and control.
$wp_customize->add_setting( 'busyness_theme_options[enable_frontpage_content]', array(
	'sanitize_callback'   => 'busyness_sanitize_checkbox',
	'default'             => $options['enable_frontpage_content'],
) );

$wp_customize->add_control( 'busyness_theme_options[enable_frontpage_content]', array(
	'label'       	=> esc_html__( 'Enable Content', 'busyness' ),
	'description' 	=> esc_html__( 'Check to enable content on static front page only.', 'busyness' ),
	'section'     	=> 'static_front_page',
	'type'        	=> 'checkbox',
) );