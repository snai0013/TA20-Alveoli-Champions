<?php
/**
 * Busyness widgets inclusion
 *
 * This is the template that includes all custom widgets
 *
 * @package Busyness
 */


/*
 * Add Recent Posts widget
 */
require get_template_directory() . '/inc/widgets/recent-posts-widget.php';

/*
 * Add Recent Posts widget
 */
require get_template_directory() . '/inc/widgets/social-link.php';

/**
 * Register widgets
 */
function busyness_register_widgets() {

	register_widget( 'busyness_Recent_Post' );

	register_widget( 'busyness_Social_Link' );

}
add_action( 'widgets_init', 'busyness_register_widgets' );