<?php
/**
 * Customizer default options
 *
 * @package Busyness
 * @return array An array of default values
 */

function busyness_get_default_theme_options() {
	$theme_data = wp_get_theme();
	$busyness_default_options = array(
		// Color Options
		'header_title_color'			=> '#fff',
		'header_tagline_color'			=> '#fff',
		'header_txt_logo_extra'			=> 'show-all',
		'colorscheme_hue'				=> '#5031a9',
		'secondary_colorscheme_hue'		=> '#f14b59',
		'colorscheme'					=> 'default',

		// typography Options
		'theme_typography' 				=> 'default',
		'body_theme_typography' 		=> 'default',

		// loader
		'loader_enable'         		=> false,
		'loader_icon'         			=> 'default',

		// breadcrumb
		'breadcrumb_enable'				=> true,
		'breadcrumb_separator'			=> '/',

		// layout
		'site_layout'         			=> 'wide',
		'sidebar_position'         		=> 'right-sidebar',
		'post_sidebar_position' 		=> 'right-sidebar',
		'page_sidebar_position' 		=> 'right-sidebar',
		'menu_sticky'					=> true,

		// excerpt options
		'long_excerpt_length'           => 25,
		'read_more_text'           		=> esc_html__( 'Read More', 'busyness' ),

		// pagination options
		'pagination_enable'         	=> true,
		'pagination_type'         		=> 'default',

		// footer options
		'copyright_text'           		=> sprintf( esc_html_x( 'Copyright &copy; %1$s %2$s. All rights reserved.', '1: Year, 2: Site Title with home URL', 'busyness' ), '[the-year]', '[the-site-link]' ),

		'scroll_top_visible'        	=> true,
		'footer_social_menu'			=> false,


		// reset options
		'reset_options'      			=> false,

		// homepage options
		'enable_frontpage_content' 		=> true,

		// homepage sections sortable
		'sortable' 						=> 'slider,service,about,cta,blog',

		// blog/archive options
		'your_latest_posts_title' 		=> esc_html__( 'Blogs', 'busyness' ),
		'hide_date' 					=> false,
		'hide_category'					=> false,

		// single post theme options
		'single_post_hide_date' 		=> false,
		'single_post_hide_author'		=> false,
		'single_post_hide_category'		=> false,
		'single_post_hide_tags'			=> false,

		/* Front Page */

		// Slider
		'slider_section_enable'			=> false,
		'slider_autoplay_enable'		=> true,
		'slider_btn_label'				=> esc_html__( 'Get Started', 'busyness' ),


		// service
		'service_section_enable'		=> false,
		'service_title'					=> esc_html__( 'Amazing landing page for your startup', 'busyness' ),

		// About
		'about_section_enable'			=> false,
		'about_btn_title'				=> esc_html__( 'Read More', 'busyness' ),


		// call to action
		'cta_section_enable'			=> false,
		'cta_btn_title'					=> esc_html__( 'Get Started', 'busyness' ),

		// blog
		'blog_section_enable'			=> false,
		'blog_content_type'				=> 'page',
		'blog_title'					=> esc_html__( 'Check Our Latest Blog', 'busyness' ),

	);

	$output = apply_filters( 'busyness_default_theme_options', $busyness_default_options );

	// Sort array in ascending order, according to the key:
	if ( ! empty( $output ) ) {
		ksort( $output );
	}

	return $output;
}
