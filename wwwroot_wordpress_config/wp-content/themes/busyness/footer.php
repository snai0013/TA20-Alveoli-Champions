<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Busyness
 */

	/**
	 * Hook - busyness_action_after_content.
	 *
	 * @hooked busyness_content_end - 10
	 */
	do_action( 'busyness_action_after_content' );

	/**
	* Hook - busyness_action_before_footer.
	*
	* @hooked busyness_footer_start - 10
 	* @hooked busyness_Footer_Widgets->add_footer_widgets - 20
	*/
	do_action( 'busyness_action_before_footer' );

	/**
	* Hook - busyness_action_footer.
	*
	* @hooked busyness_footer_site_info - 10
	*/
	do_action( 'busyness_action_footer' );

	/**
	 * Hook - busyness_action_after_footer.
	 *
	 * @hooked busyness_footer_end - 10
	 */
	do_action( 'busyness_action_after_footer' );

	/**
	 * Hook - business_action_after.
	 *
	 * @hooked busyness_page_end -  10
	 * @hooked busyness_footer_go_to_top - 20
	 *
	 */
	do_action( 'busyness_action_after' );

?>

<?php wp_footer(); ?>
</body>
</html>
