<div class="site-bar site-header-topbar <?php echo ( get_theme_mod( 'elation-topbar-switch', customizer_library_get_default( 'elation-topbar-switch' ) ) ) ? sanitize_html_class( 'site-topbar-switch' ) : ''; ?> <?php echo ( get_theme_mod( 'elation-topbar-centered', customizer_library_get_default( 'elation-topbar-centered' ) ) ) ? sanitize_html_class( 'site-topbar-center' ) : ''; ?>">
    <div class="site-container">

        <div class="site-bar-inner">
            <div class="site-bar-left">

                <?php if ( !get_theme_mod( 'elation-header-remove-social', customizer_library_get_default( 'elation-header-remove-social' ) ) ) : ?>
                    <?php get_template_part( 'templates/social-links' ); ?>
                <?php endif; ?>

                <?php if ( !get_theme_mod( 'elation-header-remove-number', customizer_library_get_default( 'elation-header-remove-number' ) ) ) : ?>
					<span class="site-bar-text header-phone"><?php echo ( get_theme_mod( 'elation-edit-text-phone-icon', customizer_library_get_default( 'elation-edit-text-phone-icon' ) ) ) ? '<i class="fas ' . sanitize_html_class( get_theme_mod( 'elation-edit-text-phone-icon', customizer_library_get_default( 'elation-edit-text-phone-icon' ) ) ) . '"></i>' : '<i class="fas fa-phone"></i>'; ?> <?php echo wp_kses_post( get_theme_mod( 'elation-edit-text-phone', customizer_library_get_default( 'elation-edit-text-phone' ) ) ) ?></span>
				<?php endif; ?>
                
            </div>
            <div class="site-bar-right">

                <?php if ( !get_theme_mod( 'elation-header-remove-address', customizer_library_get_default( 'elation-header-remove-address' ) ) ) : ?>
					<span class="site-bar-text header-address"><?php echo ( get_theme_mod( 'elation-edit-text-address-icon', customizer_library_get_default( 'elation-edit-text-address-icon' ) ) ) ? '<i class="fas ' . sanitize_html_class( get_theme_mod( 'elation-edit-text-address-icon', customizer_library_get_default( 'elation-edit-text-address-icon' ) ) ) . '"></i>' : '<i class="fas fa-map-marker-alt"></i>'; ?> <?php echo wp_kses_post( get_theme_mod( 'elation-edit-text-address', customizer_library_get_default( 'elation-edit-text-address' ) ) ) ?></span>
				<?php endif; ?>

                <?php wp_nav_menu( array( 'theme_location' => 'elation-topbar-menu', 'menu_id' => 'elation-topbar-menu', 'fallback_cb' => false ) ); ?>

                <?php
                if ( get_theme_mod( 'elation-header-add-topcart', customizer_library_get_default( 'elation-header-add-topcart' ) ) ) :
                    if ( function_exists( 'elation_woocommerce_header_cart' ) ) {
                        elation_woocommerce_header_cart();
                    }
                endif; ?>

                <?php if ( get_theme_mod( 'elation-add-topbar-search', customizer_library_get_default( 'elation-add-topbar-search' ) ) && !get_theme_mod( 'elation-add-nav-search', customizer_library_get_default( 'elation-add-nav-search' ) ) ) : ?>
                    <?php if ( 'elation-search-always' == get_theme_mod( 'elation-header-search-type', customizer_library_get_default( 'elation-header-search-type' ) ) ) : ?>
                        <div class="header-search-block">
                            <?php get_search_form(); ?>
                        </div>
                    <?php elseif ( 'elation-search-plugin-shortcode' == get_theme_mod( 'elation-header-search-type', customizer_library_get_default( 'elation-header-search-type' ) ) ) : ?>
                        <div class="header-search-block">
                            <?php
                            if ( get_theme_mod( 'elation-search-shortcode' ) ) :
                                echo do_shortcode( sanitize_text_field( get_theme_mod( 'elation-search-shortcode' ) ) );
                            else :
                                esc_html_e( '[ Enter a Shortcode ]', 'elation' );
                            endif; ?>
                        </div>
                    <?php else : ?>
                        <button class="header-search">
                            <i class="fas fa-search search-btn"></i>
                        </button>
                    <?php endif; ?>
                <?php endif; ?>

            </div>
        </div><!-- .site-topbar-inner -->

        <?php // if ( ( get_theme_mod( 'elation-add-topbar-search', customizer_library_get_default( 'elation-add-topbar-search' ) ) && get_theme_mod( 'elation-add-nav-search', customizer_library_get_default( 'elation-add-nav-search' ) ) ) || ( get_theme_mod( 'elation-add-topbar-search', customizer_library_get_default( 'elation-add-topbar-search' ) ) && !get_theme_mod( 'elation-add-nav-search', customizer_library_get_default( 'elation-add-nav-search' ) ) ) || ( !get_theme_mod( 'elation-add-topbar-search', customizer_library_get_default( 'elation-add-topbar-search' ) ) && get_theme_mod( 'elation-add-nav-search', customizer_library_get_default( 'elation-add-nav-search' ) ) ) ) : ?>
        <?php if ( get_theme_mod( 'elation-add-topbar', customizer_library_get_default( 'elation-add-topbar' ) ) && get_theme_mod( 'elation-add-topbar-search', customizer_library_get_default( 'elation-add-topbar-search' ) ) && !get_theme_mod( 'elation-add-nav-search', customizer_library_get_default( 'elation-add-nav-search' ) ) ) : ?>
            <?php if ( 'elation-search-slide' == get_theme_mod( 'elation-header-search-type', customizer_library_get_default( 'elation-header-search-type' ) ) || 'elation-search-fade' == get_theme_mod( 'elation-header-search-type', customizer_library_get_default( 'elation-header-search-type' ) ) || 'elation-search-full' == get_theme_mod( 'elation-header-search-type', customizer_library_get_default( 'elation-header-search-type' ) ) || 'elation-search-full-txt' == get_theme_mod( 'elation-header-search-type', customizer_library_get_default( 'elation-header-search-type' ) ) ) : ?>
                <div class="header-search-block">
                    <?php get_search_form(); ?>
                </div>
                <?php if ( 'elation-search-full' == get_theme_mod( 'elation-header-search-type', customizer_library_get_default( 'elation-header-search-type' ) ) || 'elation-search-full-txt' == get_theme_mod( 'elation-header-search-type', customizer_library_get_default( 'elation-header-search-type' ) ) ) : ?>
                    <div class="header-search-elation"></div>
                <?php endif; ?>
            <?php endif; ?>
        <?php endif; ?>

    </div><!-- .site-container -->
</div>