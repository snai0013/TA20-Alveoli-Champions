<?php
/**
 * Template part for displaying page content in page.php
 *
 * @package Elation
 */ ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
	<?php
	if ( 'elation-pagetitle-default' == get_theme_mod( 'elation-pagetitle-layout', customizer_library_get_default( 'elation-pagetitle-layout' ) ) || 'elation-pagetitle-other' == get_theme_mod( 'elation-pagetitle-layout', customizer_library_get_default( 'elation-pagetitle-layout' ) ) ) :
		get_template_part( '/templates/title-bar' );
	endif; ?>

	<?php
	if ( 'elation-site-media-fimage' != get_theme_mod( 'elation-site-media-type', customizer_library_get_default( 'elation-site-media-type' ) ) ) :
		elation_post_thumbnail();
	endif;?>

	<div class="entry-content">
		<?php
		the_content();

		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'elation' ),
			'after'  => '</div>',
		) ); ?>
	</div><!-- .entry-content -->

	<?php if ( get_edit_post_link() ) : ?>
		<footer class="entry-footer">
			<?php
			edit_post_link(
				sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__( 'Edit <span class="screen-reader-text">%s</span>', 'elation' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					get_the_title()
				),
				'<span class="edit-link">',
				'</span>'
			); ?>
		</footer><!-- .entry-footer -->
	<?php endif; ?>
</article><!-- #post-<?php the_ID(); ?> -->