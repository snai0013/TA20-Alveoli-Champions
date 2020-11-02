<?php
/**
 * The sidebar widget areas
 *
 * @package Elation
 */
if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
} ?>
<aside id="secondary" class="widget-area <?php echo ( get_theme_mod( 'elation-widget-area-stick', customizer_library_get_default( 'elation-widget-area-stick' ) ) ) ? sanitize_html_class( 'widget-area-sticky' ) : ''; ?> <?php echo esc_html( 'elation-site-full-width-blocked' == get_theme_mod( 'elation-site-layout', customizer_library_get_default( 'elation-site-layout' ) ) && get_theme_mod( 'elation-break-content', customizer_library_get_default( 'elation-break-content' ) ) && get_theme_mod( 'elation-break-widgets', customizer_library_get_default( 'elation-break-widgets' ) ) ) ? sanitize_html_class( 'widgets-apart' ) : sanitize_html_class( 'widgets-joined' ); ?> <?php echo sanitize_html_class( get_theme_mod( 'elation-widget-title-style', customizer_library_get_default( 'elation-widget-title-style' ) ) ); ?> <?php echo ( get_theme_mod( 'elation-widget-center-align', customizer_library_get_default( 'elation-widget-center-align' ) ) ) ? sanitize_html_class( 'widgets-centered' ) : ''; ?>">
    <div class="widget-area-inner <?php echo ( get_theme_mod( 'elation-widget-area-stick', customizer_library_get_default( 'elation-widget-area-stick' ) ) ) ? sanitize_html_class('sticky-widget-area' ) : ''; ?>">    
		<div class="floating-sidebar-control"></div>
		<?php dynamic_sidebar( 'sidebar-1' ); ?>
	</div>
</aside><!-- #secondary -->
