<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package Elation
 */
get_header();
?>
	<div id="primary" class="content-area content-area-full <?php echo sanitize_html_class( get_theme_mod( 'elation-error-page-style', customizer_library_get_default( 'elation-error-page-style' ) ) ); ?>">
		<main id="main" class="site-main">

			<section class="error-404 not-found">

				<?php if ( !get_theme_mod( 'elation-error-remove-img', customizer_library_get_default( 'elation-error-remove-img' ) ) ) : ?>
					<div class="error-ban-sign">
						<?php if ( get_theme_mod( 'elation-error-img', customizer_library_get_default( 'elation-error-img' ) ) ) : ?>
							<img src="<?php echo esc_url( get_theme_mod( 'elation-error-img', customizer_library_get_default( 'elation-error-img' ) ) ); ?>" alt="<?php esc_attr( get_theme_mod( 'elation-error-title', customizer_library_get_default( 'elation-error-title' ) ) ); ?>" />
						<?php else : ?>
							<i class="fa fa-ban"></i>
						<?php endif; ?>
					</div>
				<?php endif; ?>

				<?php if ( !get_theme_mod( 'elation-error-remove-title', customizer_library_get_default( 'elation-error-remove-title' ) ) ) : ?>
					<header class="error-header">
						<h2 class="page-title"><?php echo esc_html( get_theme_mod( 'elation-error-title', customizer_library_get_default( 'elation-error-title' ) ) ); ?></h2>
					</header><!-- .page-header -->
				<?php endif; ?>

				<?php if ( !get_theme_mod( 'elation-error-remove-text', customizer_library_get_default( 'elation-error-remove-text' ) ) ) : ?>
					<div class="error-content">
						<?php echo esc_html( get_theme_mod( 'elation-error-text', customizer_library_get_default( 'elation-error-text' ) ) ); ?>
					</div>
				<?php endif; ?>

				<?php if ( !get_theme_mod( 'elation-error-remove-search', customizer_library_get_default( 'elation-error-remove-search' ) ) ) : ?>
					<div class="error-search">
						<?php get_search_form(); ?>
					</div>
				<?php endif; ?>

				<?php if ( !get_theme_mod( 'elation-error-remove-btn', customizer_library_get_default( 'elation-error-remove-btn' ) ) ) : ?>
					<div class="error-btn">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="button"><?php esc_html_e( 'Return Home', 'elation' ); ?></a>
					</div>
				<?php endif; ?>

			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
