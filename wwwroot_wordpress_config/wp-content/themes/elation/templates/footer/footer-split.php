<?php
$elation_footerimg_repeat = get_theme_mod( 'elation-footer-bgimg-repeat', customizer_library_get_default( 'elation-footer-bgimg-repeat' ) );
$elation_footerimg_align = get_theme_mod( 'elation-footer-bgimg-align', customizer_library_get_default( 'elation-footer-bgimg-align' ) ); ?>
<footer id="colophon" class="site-footer elation-footer-split <?php echo ( get_theme_mod( 'elation-social-set-footer-color', customizer_library_get_default( 'elation-social-set-footer-color' ) ) ) ? sanitize_html_class( 'social-icons-color' ) : ''; ?> <?php echo ( get_theme_mod( 'elation-add-footer-bgimg', customizer_library_get_default( 'elation-add-footer-bgimg' ) ) && get_theme_mod( 'elation-footer-bgimg', customizer_library_get_default( 'elation-footer-bgimg' ) ) ) ? sanitize_html_class( 'elation-bgfooter-img' ) : ''; ?>" <?php echo ( get_theme_mod( 'elation-add-footer-bgimg', customizer_library_get_default( 'elation-add-footer-bgimg' ) ) && get_theme_mod( 'elation-footer-bgimg', customizer_library_get_default( 'elation-footer-bgimg' ) ) ) ? 'style="background-image: url( ' . esc_url( get_theme_mod( 'elation-footer-bgimg', customizer_library_get_default( 'elation-footer-bgimg' ) ) ) . '); background-repeat: ' . esc_attr( $elation_footerimg_repeat ) . '; background-position: ' . esc_attr( $elation_footerimg_align ) . ';"' : ''; ?>>

    <div class="site-footer-inner <?php echo sanitize_html_class( get_theme_mod( 'elation-footdivide-style', customizer_library_get_default( 'elation-footdivide-style' ) ) ); ?>">
        <div class="site-container">
            <?php if ( is_active_sidebar( 'elation-site-footer-split' ) ) : ?>
	            <ul class="site-footer-widgets <?php echo sanitize_html_class( get_theme_mod( 'elation-footalign', customizer_library_get_default( 'elation-footalign' ) ) ); ?>">
	                <?php dynamic_sidebar( 'elation-site-footer-split' ); ?>
	            </ul>
	        <?php endif; ?>
            <div class="clearboth"></div>
        </div>

    </div>
    
    <?php
    if ( !get_theme_mod( 'elation-remove-bottombar', customizer_library_get_default( 'elation-remove-bottombar' ) ) ) :
        // Get Site Bottom Bar
        get_template_part( '/templates/footer/bottombar/'.get_theme_mod( 'elation-bottombar-layout', customizer_library_get_default( 'elation-bottombar-layout' ) ) );
    endif; ?>

</footer><!-- #colophon -->
