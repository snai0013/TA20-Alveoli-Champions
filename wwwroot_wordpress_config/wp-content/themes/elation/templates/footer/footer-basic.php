<?php

$elation_footerimg_repeat = get_theme_mod( 'elation-footer-bgimg-repeat', customizer_library_get_default( 'elation-footer-bgimg-repeat' ) );
$elation_footerimg_align = get_theme_mod( 'elation-footer-bgimg-align', customizer_library_get_default( 'elation-footer-bgimg-align' ) );
?>
<footer id="colophon" class="site-footer elation-footer-basic <?php 
echo  ( get_theme_mod( 'elation-social-set-footer-color', customizer_library_get_default( 'elation-social-set-footer-color' ) ) ? sanitize_html_class( 'social-icons-color' ) : '' ) ;
?> <?php 
echo  ( get_theme_mod( 'elation-add-footer-bgimg', customizer_library_get_default( 'elation-add-footer-bgimg' ) ) && get_theme_mod( 'elation-footer-bgimg', customizer_library_get_default( 'elation-footer-bgimg' ) ) ? sanitize_html_class( 'elation-bgfooter-img' ) : '' ) ;
?>" <?php 
echo  ( get_theme_mod( 'elation-add-footer-bgimg', customizer_library_get_default( 'elation-add-footer-bgimg' ) ) && get_theme_mod( 'elation-footer-bgimg', customizer_library_get_default( 'elation-footer-bgimg' ) ) ? 'style="background-image: url( ' . esc_url( get_theme_mod( 'elation-footer-bgimg', customizer_library_get_default( 'elation-footer-bgimg' ) ) ) . '); background-repeat: ' . esc_attr( $elation_footerimg_repeat ) . '; background-position: ' . esc_attr( $elation_footerimg_align ) . ';"' : '' ) ;
?>>

    <div class="site-footer-inner">
        <div class="site-container">

            <div class="elation-footer-basic-left">

                <?php 

if ( 'footer-social-two' != get_theme_mod( 'elation-footer-layout', customizer_library_get_default( 'elation-footer-layout' ) ) ) {
    ?>
                    <?php 
    wp_nav_menu( array(
        'theme_location' => 'elation-bottombar-menu',
        'menu_id'        => 'elation-bottombar-menu',
        'fallback_cb'    => false,
    ) );
    ?>
                <?php 
}

?>
            
            </div>

            <div class="elation-footer-basic-right">

                <?php 
?>

                <?php 

if ( !get_theme_mod( 'elation-footer-remove-social' ) ) {
    ?>
                    <div class="site-footer-icons <?php 
    echo  sanitize_html_class( get_theme_mod( 'elation-footer-icon-style', customizer_library_get_default( 'elation-footer-icon-style' ) ) ) ;
    ?>">
                        <?php 
    get_template_part( 'templates/social-links' );
    ?>
                    </div>
                <?php 
}

?>
                        
            </div>
            
            <!-- <?php 

if ( !get_theme_mod( 'elation-remove-botbar-address', customizer_library_get_default( 'elation-remove-botbar-address' ) ) ) {
    ?>
                <span class="site-bar-text"><?php 
    echo  ( esc_html( get_theme_mod( 'elation-edit-text-footer-address-icon', customizer_library_get_default( 'elation-edit-text-footer-address-icon' ) ) ) ? '<i class="fas ' . sanitize_html_class( get_theme_mod( 'elation-edit-text-footer-address-icon', customizer_library_get_default( 'elation-edit-text-footer-address-icon' ) ) ) . '"></i>' : '' ) ;
    ?> <?php 
    echo  wp_kses_post( get_theme_mod( 'elation-edit-text-footer-address', customizer_library_get_default( 'elation-edit-text-footer-address' ) ) ) ;
    ?></span>
            <?php 
}

?> -->

        </div>
    </div>
    
    <?php 

if ( !get_theme_mod( 'elation-remove-bottombar', customizer_library_get_default( 'elation-remove-bottombar' ) ) ) {
    ?>
        <div class="site-bar elation-bottombar <?php 
    echo  ( get_theme_mod( 'elation-bottombar-switch', customizer_library_get_default( 'elation-bottombar-switch' ) ) ? sanitize_html_class( 'site-bottombar-switch' ) : '' ) ;
    ?>">
            <div class="site-container">

                <div class="site-bar-inner <?php 
    echo  ( get_theme_mod( 'elation-center-all-bottombar', customizer_library_get_default( 'elation-center-all-bottombar' ) ) ? sanitize_html_class( 'site-bottombar-centerall' ) : '' ) ;
    ?>">
                    <div class="site-bar-left">

                        <?php 
    // -- ELATION FREE VERSION
    ?>
                            <span class="site-bar-text"><?php 
    /* translators: 1: Theme name, 2: Kaira link. */
    printf( esc_html__( 'Theme: %1$s by %2$s.', 'elation' ), esc_html__( 'Elation', 'elation' ), wp_kses( __( '<a href="https://kairaweb.com/">Kaira</a>', 'elation' ), array(
        'a' => array(
        'href' => array(),
    ),
    ) ) );
    ?></span>
                        <?php 
    ?>
                        
                    </div>

                    <div class="site-bar-right <?php 
    echo  ( 1 == get_theme_mod( 'elation-add-botbar-fullcart', customizer_library_get_default( 'elation-add-botbar-fullcart' ) ) ? sanitize_html_class( 'elation-bottombar-fullcart' ) : sanitize_html_class( 'elation-bottombar-nofullcart' ) ) ;
    ?>">

                        <?php 
    
    if ( !get_theme_mod( 'elation-remove-botbar-address', customizer_library_get_default( 'elation-remove-botbar-address' ) ) ) {
        ?>
                            <span class="site-bar-text footer-address"><?php 
        echo  ( esc_html( get_theme_mod( 'elation-edit-text-footer-address-icon', customizer_library_get_default( 'elation-edit-text-footer-address-icon' ) ) ) ? '<i class="fas ' . sanitize_html_class( get_theme_mod( 'elation-edit-text-footer-address-icon', customizer_library_get_default( 'elation-edit-text-footer-address-icon' ) ) ) . '"></i>' : '' ) ;
        ?> <?php 
        echo  wp_kses_post( get_theme_mod( 'elation-edit-text-footer-address', customizer_library_get_default( 'elation-edit-text-footer-address' ) ) ) ;
        ?></span>
                        <?php 
    }
    
    ?>

                        <?php 
    if ( get_theme_mod( 'elation-add-botbar-cart', customizer_library_get_default( 'elation-add-botbar-cart' ) ) ) {
        if ( function_exists( 'elation_woocommerce_header_cart' ) ) {
            elation_woocommerce_header_cart();
        }
    }
    ?>
                        
                    </div>
                </div>

            </div>
        </div>
    <?php 
}

?>

</footer><!-- #colophon -->
