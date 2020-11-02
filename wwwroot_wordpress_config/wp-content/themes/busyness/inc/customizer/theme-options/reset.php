<?php
/**
 * Reset options
 *
 * @package Busyness
 */

/**
* Reset section
*/
// Add reset enable section
$wp_customize->add_section( 'busyness_reset_section', array(
	'title'             => esc_html__('Reset all settings','busyness'),
	'description'       => esc_html__( 'Caution: All settings will be reset to default. Refresh the page after clicking Save & Publish.', 'busyness' ),
) );

// Add reset enable setting and control.
$wp_customize->add_setting( 'busyness_theme_options[reset_options]', array(
	'default'           => $options['reset_options'],
	'sanitize_callback' => 'busyness_sanitize_checkbox',
	'transport'			  => 'postMessage',
) );

$wp_customize->add_control( 'busyness_theme_options[reset_options]', array(
	'label'             => esc_html__( 'Check to reset all settings', 'busyness' ),
	'section'           => 'busyness_reset_section',
	'type'              => 'checkbox',
) );
