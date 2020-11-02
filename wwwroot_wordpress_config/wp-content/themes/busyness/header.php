<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Busyness
 */

?><?php
	/**
	 * Hook - busyness_action_doctype.
	 *
	 * @hooked busyness_doctype -  10
	 */
	do_action( 'busyness_action_doctype' );
?>
<head>
	<?php
	/**
	 * Hook - busyness_action_head.
	 *
	 * @hooked busyness_head -  10
	 */
	do_action( 'busyness_action_head' );
	?>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php do_action( 'wp_body_open' ); ?>

<?php
	/**
	 * Hook - busyness_action_before.
	 *
	 * @hooked busyness_page_start - 10
	 * @hooked busyness_skip_to_content - 20
	 */
	do_action( 'busyness_action_before' );

	/**
	 * Hook - busyness_action_before_header.
	 *
	 * @hooked busyness_loader -  10
	 * @hooked busyness_header_start - 20
	 */
	do_action( 'busyness_action_before_header' );

	/**
	 * Hook - busyness_action_header.
	 *
	 * @hooked busyness_site_branding -  10
	 * @hooked busyness_site_navigation -  20
	 */
	do_action( 'busyness_action_header' );

	/**
	 * Hook - busyness_action_after_header.
	 *
	 * @hooked busyness_header_end -  10
	 */
	do_action( 'busyness_action_after_header' );

	/**
	 * Hook - busyness_action_before_content
	 *
	 * @hooked busyness_content_start -  10
	 */
	do_action( 'busyness_action_before_content' );

	/**
	 * Hook - busyness_header_image_action
	 *
	 * @hooked busyness_header_image -  10
	 */
	do_action( 'busyness_header_image_action' );

    if ( busyness_is_frontpage() ) {
    	$options = busyness_get_theme_options();
    	$sorted = array();
    	if ( ! empty( $options['sortable'] ) ) {
			$sorted = explode( ',' , $options['sortable'] );
		}

		foreach ( $sorted as $section ) {
			add_action( 'busyness_action_content', 'busyness_add_'. $section .'_section' );
		}
		do_action( 'busyness_action_content' );
	}
