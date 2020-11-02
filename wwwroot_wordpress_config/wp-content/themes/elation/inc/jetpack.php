<?php
/**
 * Jetpack Compatibility File
 * @package Elation
 */

/**
 * Jetpack setup function.
 *
 * See: https://jetpack.com/support/infinite-scroll/
 * See: https://jetpack.com/support/responsive-videos/
 * See: https://jetpack.com/support/content-options/
 */
function elation_jetpack_setup() {
	// Add theme support for Infinite Scroll.
	add_theme_support( 'infinite-scroll', array(
		'container' => 'elation-list-inner',
		'render'    => 'elation_infinite_scroll_render',
		'wrapper'   => false,
		'footer'    => false,
	) );

	// Add theme support for Responsive Videos.
	add_theme_support( 'jetpack-responsive-videos' );

	// Add theme support for Content Options.
	add_theme_support( 'jetpack-content-options', array(
		'post-details'    => array(
			'stylesheet' => 'elation-style',
			'date'       => '.posted-on',
			'categories' => '.cat-links',
			'tags'       => '.tags-links',
			'author'     => '.byline',
			'comment'    => '.comments-link',
		),
		'featured-images' => array(
			'archive'    => true,
			'post'       => true,
			'page'       => true,
		),
	) );
}
add_action( 'after_setup_theme', 'elation_jetpack_setup' );

/**
 * Custom render function for Infinite Scroll.
 */
function elation_infinite_scroll_render() {
	while ( have_posts() ) {
		the_post();
		if ( is_search() ) :
			get_template_part( 'templates/content/content', 'search' );
		else :
			get_template_part( 'templates/content/content', get_post_type() );
		endif;
	}
}

/**
 * Remove default Related Posts | Custom added to single.php.
 */
function elation_remove_default_relposts() {
    if ( class_exists( 'Jetpack_RelatedPosts' ) ) {
        $jprp     = Jetpack_RelatedPosts::init();
        $callback = array( $jprp, 'filter_add_target_to_dom' );
 
        remove_filter( 'the_content', $callback, 40 );
    }
}
add_action( 'wp', 'elation_remove_default_relposts', 20 );
