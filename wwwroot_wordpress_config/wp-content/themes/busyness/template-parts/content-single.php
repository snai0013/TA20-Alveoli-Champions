<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Busyness
 */
$options = busyness_get_theme_options();
?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'clear' ); ?>>
	<div class="entry-meta">
        <?php if ( ! $options['single_post_hide_author'] ) :
            echo busyness_author( get_the_author_meta( 'ID' ) );
        endif;


		busyness_single_categories();
		busyness_entry_footer();
		?>
    </div><!-- .entry-meta -->

    <div class="entry-content">
        <?php
			the_content( sprintf(
				/* translators: %s: Name of current post. */
				wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'busyness' ), array( 'span' => array( 'class' => array() ) ) ),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			) );

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'busyness' ),
				'after'  => '</div>',
			) );
		?>
    </div><!-- .entry-content -->

</article><!-- #post-## -->
