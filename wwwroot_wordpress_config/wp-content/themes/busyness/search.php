<?php
/**
 * The template for displaying search results pages.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Busyness
 */

get_header();
$options = busyness_get_theme_options();
?>

<div id="inner-content-wrapper" class="wrapper page-section">
    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">
            <div class="posts-wrapper <?php echo $options['sidebar_position'] == 'no-sidebar'  ? 'col3' : 'col2' ; ?>">
            	<div class="blog-post-wrapper">
					<?php
					if ( have_posts() ) : ?>

						<?php
						/* Start the Loop */
						while ( have_posts() ) : the_post();

							/*
							 * Include the Post-Format-specific template for the content.
							 * If you want to override this in a child theme, then include a file
							 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
							 */
							get_template_part( 'template-parts/content', get_post_format() );

						endwhile;

					else :

						get_template_part( 'template-parts/content', 'none' );

					endif; ?>
				</div>
			</div>
			<?php
			/**
			* Hook - busyness_action_pagination.
			*
			* @hooked busyness_pagination
			*/
			do_action( 'busyness_action_pagination' );
			?>
		</main><!-- #main -->
	</div><!-- #primary -->

	<?php
	if ( busyness_is_sidebar_enable() ) {
		get_sidebar();
	}
	?>
</div><!-- .wrapper -->

<?php
get_footer();
