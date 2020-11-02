<?php
/**
 * The template for displaying all single posts
 *
 * @package Elation
 */
// $elation_psingle = get_theme_mod( 'elation-blog-post-single-layout', customizer_library_get_default( 'elation-blog-post-single-layout' ) );
get_header(); ?>

	<div id="primary" class="content-area <?php echo ( 'elation-blog-post-fw' == get_theme_mod( 'elation-blog-post-layout', customizer_library_get_default( 'elation-blog-post-layout' ) ) || 'elation-blog-post-frs' == get_theme_mod( 'elation-blog-post-layout', customizer_library_get_default( 'elation-blog-post-layout' ) ) || 'elation-blog-post-fls' == get_theme_mod( 'elation-blog-post-layout', customizer_library_get_default( 'elation-blog-post-layout' ) ) ) ? sanitize_html_class( 'content-area-full' ) : ''; ?> <?php echo sanitize_html_class( get_theme_mod( 'elation-blog-postlay', customizer_library_get_default( 'elation-blog-postlay' ) ) ); ?>">
		<main id="main" class="site-main <?php echo sanitize_html_class( get_theme_mod( 'elation-blog-post-nav-layout', customizer_library_get_default( 'elation-blog-post-nav-layout' ) ) ); ?> <?php echo sanitize_html_class( get_theme_mod( 'elation-blog-comments-layout', customizer_library_get_default( 'elation-blog-comments-layout' ) ) ); ?> <?php echo ( get_theme_mod( 'elation-blog-post-meta-icons', customizer_library_get_default( 'elation-blog-post-meta-icons' ) ) ) ? sanitize_html_class( 'elation-post-icons' ) : ''; ?>">

			<?php
			while ( have_posts() ) : the_post();
                
                get_template_part( 'templates/content/content', 'single' );

				if ( 'elation-postnav-none' != get_theme_mod( 'elation-blog-post-nav-layout', customizer_library_get_default( 'elation-blog-post-nav-layout' ) ) ) {
					the_post_navigation();
				}

				if ( class_exists( 'Jetpack_RelatedPosts' ) ) {
					echo do_shortcode( '[jetpack-related-posts]' );
				}

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->
	
	<?php if ( 'elation-blog-post-fw' != get_theme_mod( 'elation-blog-post-layout', customizer_library_get_default( 'elation-blog-post-layout' ) ) ) : ?>
		<?php get_sidebar(); ?>
	<?php endif; ?>

<?php get_footer(); ?>