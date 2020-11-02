<?php

/**
 * The main template file, used to display a page when nothing more specific matches a query.
 *
 * @package Elation
 */
get_header();
?>

	<div id="primary" class="content-area <?php 
echo  ( 'elation-blog-fw' == get_theme_mod( 'elation-blog-layout', customizer_library_get_default( 'elation-blog-layout' ) ) || 'elation-blog-frs' == get_theme_mod( 'elation-blog-layout', customizer_library_get_default( 'elation-blog-layout' ) ) || 'elation-blog-fls' == get_theme_mod( 'elation-blog-layout', customizer_library_get_default( 'elation-blog-layout' ) ) ? sanitize_html_class( 'content-area-full' ) : '' ) ;
?>">
		<main id="main" class="site-main elation-list list-grid loading-blocks <?php 
echo  sanitize_html_class( get_theme_mod( 'elation-blog-list-layout', customizer_library_get_default( 'elation-blog-list-layout' ) ) ) ;
?> <?php 
echo  ( get_theme_mod( 'elation-blog-vert-center-items', customizer_library_get_default( 'elation-blog-vert-center-items' ) ) ? sanitize_html_class( 'elation-blog-vcenter' ) : '' ) ;
?> <?php 
echo  ( 'elation-blog-grid' == get_theme_mod( 'elation-blog-list-layout', customizer_library_get_default( 'elation-blog-list-layout' ) ) || 'elation-blog-tile' == get_theme_mod( 'elation-blog-list-layout', customizer_library_get_default( 'elation-blog-list-layout' ) ) ? sanitize_html_class( 'elation-grid-' . get_theme_mod( 'elation-blog-grid-cols', customizer_library_get_default( 'elation-blog-grid-cols' ) ) ) : '' ) ;
?> <?php 
echo  ( 'elation-blog-top' == get_theme_mod( 'elation-blog-list-layout', customizer_library_get_default( 'elation-blog-list-layout' ) ) && get_theme_mod( 'elation-blog-top-center', customizer_library_get_default( 'elation-blog-top-center' ) ) || 'elation-blog-grid' == get_theme_mod( 'elation-blog-list-layout', customizer_library_get_default( 'elation-blog-list-layout' ) ) && get_theme_mod( 'elation-blog-top-center', customizer_library_get_default( 'elation-blog-top-center' ) ) || 'elation-blog-tile' == get_theme_mod( 'elation-blog-list-layout', customizer_library_get_default( 'elation-blog-list-layout' ) ) && get_theme_mod( 'elation-blog-top-center', customizer_library_get_default( 'elation-blog-top-center' ) ) ? sanitize_html_class( 'elation-blog-top-center' ) : '' ) ;
?> <?php 
echo  ( 'round' == get_theme_mod( 'elation-blog-list-img-prop', customizer_library_get_default( 'elation-blog-list-img-prop' ) ) ? sanitize_html_class( 'posts-round' ) : '' ) ;
?>">

			<?php 

if ( have_posts() ) {
    ?>

				<?php 
    if ( 'elation-pagetitle-default' == get_theme_mod( 'elation-pagetitle-layout', customizer_library_get_default( 'elation-pagetitle-layout' ) ) || 'elation-pagetitle-other' == get_theme_mod( 'elation-pagetitle-layout', customizer_library_get_default( 'elation-pagetitle-layout' ) ) ) {
        get_template_part( '/templates/title-bar' );
    }
    ?>

				<div class="elation-list-inner <?php 
    echo  sanitize_html_class( get_theme_mod( 'elation-bloglist-postlay', customizer_library_get_default( 'elation-bloglist-postlay' ) ) ) ;
    ?> <?php 
    echo  ( get_theme_mod( 'elation-bloglist-post-meta-icons', customizer_library_get_default( 'elation-bloglist-post-meta-icons' ) ) ? sanitize_html_class( 'elation-postlist-icons' ) : '' ) ;
    ?>" id="elation-list-inner">
				
					<?php 
    /* Start the Loop */
    while ( have_posts() ) {
        the_post();
        /*
         * Include the Post-Type-specific template for the content.
         */
        get_template_part( 'templates/content/content', get_post_type() );
    }
    ?>

				</div>
				
				<?php 
    // -- ELATION FREE VERSION
    the_posts_navigation();
    ?>

			<?php 
} else {
    get_template_part( 'templates/content/content', 'none' );
}

?>

		</main><!-- #main -->
	</div><!-- #primary -->

	<?php 

if ( 'elation-blog-fw' != get_theme_mod( 'elation-blog-layout', customizer_library_get_default( 'elation-blog-layout' ) ) ) {
    ?>
		<?php 
    get_sidebar();
    ?>
	<?php 
}

?>

<?php 
get_footer();