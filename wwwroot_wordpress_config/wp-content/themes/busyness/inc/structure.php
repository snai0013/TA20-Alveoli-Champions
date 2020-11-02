<?php
/**
 * Busyness theme structure hooks
 *
 * This file contains structural hooks.
 *
 * @package Busyness
 */

$options = busyness_get_theme_options();


if ( ! function_exists( 'busyness_doctype' ) ) :
	/**
	 * Doctype Declaration.
	 *
	 * @since Busyness 1.0.0
	 */
	function busyness_doctype() {
	?><!DOCTYPE html> <html <?php language_attributes(); ?>>
	<?php
	}
endif;

add_action( 'busyness_action_doctype', 'busyness_doctype', 10 );


if ( ! function_exists( 'busyness_head' ) ) :
	/**
	 * Header Codes
	 *
	 * @since Busyness 1.0.0
	 *
	 */
	function busyness_head() {
		?>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
		<?php
	}
endif;
add_action( 'busyness_action_head', 'busyness_head', 10 );

if ( ! function_exists( 'busyness_page_start' ) ) :
	/**
	 * Page starts html codes
	 *
	 * @since Busyness 1.0.0
	 *
	 */
	function busyness_page_start() {
		?>
		<div id="page" class="hfeed site">
		<?php
	}
endif;
add_action( 'busyness_action_before', 'busyness_page_start', 10 );

if ( ! function_exists( 'busyness_skip_to_content' ) ) :
	/**
	 * Add Skip to content.
	 *
	 * @since 1.0.0
	 */
	function busyness_skip_to_content() {
		?><a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'busyness' ); ?></a>
		<?php
	}
endif;
add_action( 'busyness_action_before', 'busyness_skip_to_content', 20 );

if ( ! function_exists( 'busyness_page_end' ) ) :
	/**
	 * Page end html codes
	 *
	 * @since Busyness 1.0.0
	 *
	 */
	function busyness_page_end() {
		?>
		</div><!-- #page -->
		<?php
	}
endif;
add_action( 'busyness_action_after', 'busyness_page_end', 10 );

if ( ! function_exists( 'busyness_header_start' ) ) :
	/**
	 * Header start html codes
	 *
	 * @since Busyness 1.0.0
	 *
	 */
	function busyness_header_start() { ?>
		<header id="masthead" class="site-header" role="banner">
			<div class="wrapper">
		<?php
	}
endif;
add_action( 'busyness_action_before_header', 'busyness_header_start', 20 );

if ( ! function_exists( 'busyness_site_branding' ) ) :
	/**
	 * Site branding codes
	 *
	 * @since Busyness 1.0.0
	 *
	 */
	function busyness_site_branding() {
		$options  = busyness_get_theme_options();
		$header_txt_logo_extra = $options['header_txt_logo_extra'];
		?>
		<div class="site-branding">
			<?php if ( in_array( $header_txt_logo_extra, array( 'show-all', 'logo-title', 'logo-tagline' ) )  ) { ?>
				<div class="site-logo">
					<?php the_custom_logo(); ?>
				</div>
			<?php }
			if ( in_array( $header_txt_logo_extra, array( 'show-all', 'title-only', 'logo-title', 'show-all', 'tagline-only', 'logo-tagline' ) ) ) : ?>
				<div id="site-identity">
					<?php
					if( in_array( $header_txt_logo_extra, array( 'show-all', 'title-only', 'logo-title' ) )  ) {
						if ( busyness_is_latest_posts() ) : ?>
							<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
						<?php else : ?>
							<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
						<?php
						endif;
					}
					if ( in_array( $header_txt_logo_extra, array( 'show-all', 'tagline-only', 'logo-tagline' ) ) ) {
						$description = get_bloginfo( 'description', 'display' );
						if ( $description || is_customize_preview() ) : ?>
							<p class="site-description"><?php echo esc_html( $description ); /* WPCS: xss ok. */ ?></p>
						<?php
						endif;
					}?>
				</div>
        	<?php endif; ?>
		</div><!-- .site-branding -->
		<?php
	}
endif;
add_action( 'busyness_action_header', 'busyness_site_branding', 10 );

if ( ! function_exists( 'busyness_site_navigation' ) ) :
	/**
	 * Site navigation codes
	 *
	 * @since Busyness 1.0.0
	 *
	 */
	function busyness_site_navigation() {
		$options = busyness_get_theme_options();
		?>
		<nav id="site-navigation" class="main-navigation" role="navigation" aria-label="Primary Menu">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
				<?php
				echo busyness_get_svg( array( 'icon' => 'menu' ) );
				echo busyness_get_svg( array( 'icon' => 'close' ) );
				?>
				<span class="menu-label"><?php esc_html_e( 'Menu', 'busyness' ); ?></span>
			</button>

				<?php

        		wp_nav_menu( array(
        			'theme_location' => 'primary',
        			'container' => 'div',
        			'menu_class' => 'menu nav-menu',
        			'menu_id' => 'primary-menu',
        			'echo' => true,
        			'fallback_cb' => 'busyness_menu_fallback_cb',
        			'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
        		) );
        	?>
		</nav><!-- #site-navigation -->
		<?php
	}
endif;
add_action( 'busyness_action_header', 'busyness_site_navigation', 20 );

if ( ! function_exists( 'busyness_header_end' ) ) :
	/**
	 * Header end html codes
	 *
	 * @since Busyness 1.0.0
	 *
	 */
	function busyness_header_end() {
		?>
			</div><!-- .wrapper -->
		</header><!-- #masthead -->
		<?php
	}
endif;
add_action( 'busyness_action_after_header', 'busyness_header_end', 10 );

if ( ! function_exists( 'busyness_content_start' ) ) :
	/**
	 * Site content codes
	 *
	 * @since Busyness 1.0.0
	 *
	 */
	function busyness_content_start() {
		?>
		<div id="content" class="site-content">
		<?php
	}
endif;
add_action( 'busyness_action_before_content', 'busyness_content_start', 10 );

if ( ! function_exists( 'busyness_header_image' ) ) :
	/**
	 * Header Image codes
	 *
	 * @since Busyness 1.0.0
	 *
	 */
	function busyness_header_image() {
		$options = busyness_get_theme_options();
		$slider_enable = apply_filters( 'busyness_section_status', true, 'slider_section_enable' );

        if ( busyness_is_frontpage() && true == $slider_enable ) {
            return false;
        }

		$header_image = get_header_image();
		if ( is_singular() ) :
			$header_image = has_post_thumbnail() ? get_the_post_thumbnail_url( get_the_id(), 'full' ) : $header_image;
		endif;
		?>

		<div id="page-site-header" class="relative" style="background-image: url('<?php echo esc_url( $header_image ); ?>');">
            <div class="overlay"></div>
            <div class="wrapper">
                <header class="page-header">
                    <?php busyness_custom_header_banner_title(); ?>
                </header>

                <?php busyness_add_breadcrumb(); ?>
            </div><!-- .wrapper -->
        </div><!-- #page-site-header -->
		<?php
	}
endif;
add_action( 'busyness_header_image_action', 'busyness_header_image', 10 );

if ( ! function_exists( 'busyness_add_breadcrumb' ) ) :
	/**
	 * Add breadcrumb.
	 *
	 * @since Busyness 1.0.0
	 */
	function busyness_add_breadcrumb() {
		$options = busyness_get_theme_options();
		// Bail if Breadcrumb disabled.
		$breadcrumb = $options['breadcrumb_enable'];
		if ( false === $breadcrumb ) {
			return;
		}

		// Bail if Home Page.
		if ( busyness_is_frontpage() ) {
			return;
		}

		echo '<div id="breadcrumb-list">';
				/**
				 * busyness_simple_breadcrumb hook
				 *
				 * @hooked busyness_simple_breadcrumb -  10
				 *
				 */
				do_action( 'busyness_simple_breadcrumb' );
		echo '</div><!-- #breadcrumb-list -->';
		return;
	}
endif;

if ( ! function_exists( 'busyness_content_end' ) ) :
	/**
	 * Site content codes
	 *
	 * @since Busyness 1.0.0
	 *
	 */
	function busyness_content_end() {
		?>
		</div><!-- #content -->
		<?php
	}
endif;
add_action( 'busyness_action_after_content', 'busyness_content_end', 10 );

if ( ! function_exists( 'busyness_footer_start' ) ) :
	/**
	 * Footer starts
	 *
	 * @since Busyness 1.0.0
	 *
	 */
	function busyness_footer_start() {
		?>
		<footer id="colophon" class="site-footer" role="contentinfo">
		<?php
	}
endif;
add_action( 'busyness_action_before_footer', 'busyness_footer_start', 10 );

if ( ! function_exists( 'busyness_footer_site_info' ) ) :
	/**
	 * Footer starts
	 *
	 * @since Busyness 1.0.0
	 *
	 */
	function busyness_footer_site_info() {
		$theme_data = wp_get_theme();
		$options = busyness_get_theme_options();

		// Copyright content.
		$copyright_text = $options['copyright_text'];
		$copyright_text = apply_filters( 'busyness_filter_copyright_text', $copyright_text );
		if ( ! empty( $copyright_text ) ) {
			$copyright_text = wp_kses_data( $copyright_text );
			$copyright_text = busyness_apply_theme_shortcode( $copyright_text );
		}

		// Powered by content.
		$powered_by_text = sprintf( esc_html__( 'Busyness by %s', 'busyness' ), '<a target="_blank" rel="designer" href="https://wenthemes.com/">' . esc_html__( 'WEN Themes', 'busyness' ) . '</a>' );

		if ( $options['footer_social_menu'] == true ) {
			$classes = "site-info col2";
		} else {
			$classes = "site-info col1";
		}
		?>
		<div class="<?php echo $classes; ?>">
            <div class="wrapper">
            	<?php if ( ! empty( $options['footer_image'] ) ) : ?>
	            	<span class="footer-image"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo esc_url( $options['footer_image'] ); ?>" alt="<?php bloginfo( 'name' ); ?>"></a></span>
	            <?php endif; ?>

				<?php if ( ! empty( $copyright_text ) ) : ?>
	                <div class="copyright">
	                	<?php echo $copyright_text; ?>
	            	</div>
	            <?php endif; ?>
	            <?php if ( ! empty( $powered_by_text ) ) : ?>
	            	<div class="desined">
						<?php echo $powered_by_text; ?>
					</div>
				<?php endif; ?>

            	<?php if ( $options['footer_social_menu'] == true): ?>
            		<div class="social-icons">
	            	<?php
	            		wp_nav_menu( $defaults = array(
							'theme_location' => 'social',
							'container'      => false,
							'menu_class'     => 'menu',
							'echo'           => true,
							'fallback_cb'    => false,
							'depth'          => 1,
							'link_before'    => '<span class="screen-reader-text">',
							'link_after'     => '</span>',
	            		) );
	            	 ?>
	            	</div>
            	<?php endif ?>

            </div><!-- .wrapper -->
        </div><!-- .site-info -->

		<?php
	}
endif;
add_action( 'busyness_action_footer', 'busyness_footer_site_info', 10 );

if ( ! function_exists( 'busyness_footer_go_to_top' ) ) :
	/**
	 * Go to Top
	 *
	 * @since Busyness 1.0.0
	 *
	 */
	function busyness_footer_go_to_top() {
		$options  = busyness_get_theme_options();
		if ( true === $options['scroll_top_visible'] ) : ?>
			<a href="#page" class="scrollup" id="btn-scrollup"><?php echo busyness_get_svg( array( 'icon' => 'up' ) ); ?></a>
		<?php endif;
	}
endif;
add_action( 'busyness_action_after', 'busyness_footer_go_to_top', 20 );

if ( ! function_exists( 'busyness_footer_end' ) ) :
	/**
	 * Footer starts
	 *
	 * @since Busyness 1.0.0
	 *
	 */
	function busyness_footer_end() {
		?>
		</footer>
		<div class="popup-overlay"></div>
		<?php
	}
endif;
add_action( 'busyness_action_after_footer', 'busyness_footer_end', 10 );

if ( ! function_exists( 'busyness_loader' ) ) :
	/**
	 * Start div id #loader
	 *
	 * @since Busyness 1.0.0
	 *
	 */
	function busyness_loader() {
		$options = busyness_get_theme_options();
		if ( $options['loader_enable'] ) { ?>

			<div id="loader">
            <div class="loader-container">
            	<?php if ( 'default' == $options['loader_icon'] ) : ?>
	                <div id="preloader">
	                    <span></span>
	                    <span></span>
	                    <span></span>
	                    <span></span>
	                    <span></span>
	                </div>
	            <?php else :
	            	echo busyness_get_svg( array( 'icon' => esc_attr( $options['loader_icon'] ) ) );
	            endif; ?>
            </div>
        </div><!-- #loader -->
		<?php }
	}
endif;
add_action( 'busyness_action_before_header', 'busyness_loader', 10 );

if ( ! function_exists( 'busyness_infinite_loader_spinner' ) ) :
	/**
	 *
	 * @since Busyness 1.0.0
	 *
	 */
	function busyness_infinite_loader_spinner() {
		global $post;
		$options = busyness_get_theme_options();
		if ( $options['pagination_type'] == 'infinite' ) :
			if ( count( $post ) > 0 ) {
				echo '<div class="blog-loader">' . busyness_get_svg( array( 'icon' => 'spinner-umbrella' ) ) . '</div>';
			}
		endif;
	}
endif;
add_action( 'busyness_infinite_loader_spinner_action', 'busyness_infinite_loader_spinner', 10 );
