<div class="site-bar elation-bottombar-default <?php 
echo  ( get_theme_mod( 'elation-bottombar-switch', customizer_library_get_default( 'elation-bottombar-switch' ) ) ? sanitize_html_class( 'site-bottombar-switch' ) : '' ) ;
?>">
    <div class="site-container">

        <div class="site-bar-inner <?php 
echo  ( get_theme_mod( 'elation-center-all-bottombar', customizer_library_get_default( 'elation-center-all-bottombar' ) ) ? sanitize_html_class( 'site-bottombar-centerall' ) : '' ) ;
?>">
            <div class="site-bar-left">

                <?php 
// -- ELATION FREE VERSION ONLY

if ( elation_fs()->is_free_plan() ) {
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
}

?>
                
                <?php 

if ( !get_theme_mod( 'elation-remove-botbar-social', customizer_library_get_default( 'elation-remove-botbar-social' ) ) ) {
    ?>
                    <?php 
    get_template_part( 'templates/social-links' );
    ?>
                <?php 
}

?>

                <?php 
?>

            </div>

            <div class="site-bar-right <?php 
echo  ( get_theme_mod( 'elation-add-botbar-fullcart', customizer_library_get_default( 'elation-add-botbar-fullcart' ) ) ? sanitize_html_class( 'elation-bottombar-fullcart' ) : sanitize_html_class( 'elation-bottombar-nofullcart' ) ) ;
?>">

                <?php 
if ( 'footer-social' != get_theme_mod( 'elation-footer-layout', customizer_library_get_default( 'elation-footer-layout' ) ) && 'footer-social-two' != get_theme_mod( 'elation-footer-layout', customizer_library_get_default( 'elation-footer-layout' ) ) ) {
    
    if ( !get_theme_mod( 'elation-remove-botbar-address', customizer_library_get_default( 'elation-remove-botbar-address' ) ) ) {
        ?>
                        <span class="site-bar-text footer-address"><?php 
        echo  ( esc_html( get_theme_mod( 'elation-edit-text-footer-address-icon', customizer_library_get_default( 'elation-edit-text-footer-address-icon' ) ) ) ? '<i class="fas ' . sanitize_html_class( get_theme_mod( 'elation-edit-text-footer-address-icon', customizer_library_get_default( 'elation-edit-text-footer-address-icon' ) ) ) . '"></i>' : '' ) ;
        ?> <?php 
        echo  wp_kses_post( get_theme_mod( 'elation-edit-text-footer-address', customizer_library_get_default( 'elation-edit-text-footer-address' ) ) ) ;
        ?></span>
                    <?php 
    }

}
?>

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

                <?php 
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