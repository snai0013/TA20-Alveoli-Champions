<?php
/**
 * Footer options
 *
 * @package Busyness
 */

// Footer Section
$wp_customize->add_section( 'busyness_section_footer',
	array(
		'title'      			=> esc_html__( 'Footer', 'busyness' ),
		'priority'   			=> 900,
		'panel'      			=> 'busyness_theme_options_panel',
	)
);

// footer text
$wp_customize->add_setting( 'busyness_theme_options[copyright_text]',
	array(
		'default'       		=> $options['copyright_text'],
		'sanitize_callback'		=> 'busyness_santize_allow_tag',
		'transport'				=> 'postMessage',
	)
);

$wp_customize->add_control( 'busyness_theme_options[copyright_text]',
    array(
		'label'      			=> esc_html__( 'Copyright Text', 'busyness' ),
		'section'    			=> 'busyness_section_footer',
		'type'		 			=> 'textarea',
    )
);

// footer social menu
$wp_customize->add_setting( 'busyness_theme_options[footer_social_menu]',
	array(
		'sanitize_callback' => 'busyness_sanitize_switch_control',
		'default'       		=> $options['footer_social_menu'],
	)
);
$wp_customize->add_control( new Busyness_Switch_Control( $wp_customize, 'busyness_theme_options[footer_social_menu]',
    array(
		'label'      		=> esc_html__( 'Footer Social Menu', 'busyness' ),
		'description'       => sprintf( '%1$s <a class="social-menu-trigger" href="#"> %2$s </a> %3$s', esc_html__( 'Note: To show social menu.', 'busyness' ), esc_html__( 'Click Here', 'busyness' ), esc_html__( 'to create menu', 'busyness' ) ),
		'section'    		=> 'busyness_section_footer',
		'on_off_label' 		=> busyness_switch_options(),
    )
) );

// scroll top visible
$wp_customize->add_setting( 'busyness_theme_options[scroll_top_visible]',
	array(
		'default'       	=> $options['scroll_top_visible'],
		'sanitize_callback' => 'busyness_sanitize_switch_control',
	)
);
$wp_customize->add_control( new Busyness_Switch_Control( $wp_customize, 'busyness_theme_options[scroll_top_visible]',
    array(
		'label'      		=> esc_html__( 'Scroll Top Button', 'busyness' ),
		'section'    		=> 'busyness_section_footer',
		'on_off_label' 		=> busyness_switch_options(),
    )
) );