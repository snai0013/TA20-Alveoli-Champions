<?php
$elation_titletag = get_theme_mod( 'elation-seo-site-title', customizer_library_get_default( 'elation-seo-site-title' ) );
$elation_desctag = get_theme_mod( 'elation-seo-site-tagline', customizer_library_get_default( 'elation-seo-site-tagline' ) );
$elation_headerimg_repeat = get_theme_mod( 'elation-header-bgimg-repeat', customizer_library_get_default( 'elation-header-bgimg-repeat' ) );
$elation_headerimg_align = get_theme_mod( 'elation-header-bgimg-align', customizer_library_get_default( 'elation-header-bgimg-align' ) ); ?>
<header id="masthead" class="site-header elation-header-default <?php echo ( get_theme_mod( 'elation-header-centered-layout', customizer_library_get_default( 'elation-header-centered-layout' ) ) ) ? sanitize_html_class( 'site-header-centered' ) : sanitize_html_class( 'site-header-standard' ); ?> <?php echo ( get_theme_mod( 'elation-social-set-header-color', customizer_library_get_default( 'elation-social-set-header-color' ) ) ) ? sanitize_html_class( 'social-icons-color' ) : ''; ?> <?php echo ( get_theme_mod( 'elation-enable-sticky-header', customizer_library_get_default( 'elation-enable-sticky-header' ) ) && get_theme_mod( 'elation-stuckheader-botalign', customizer_library_get_default( 'elation-stuckheader-botalign' ) ) ) ? sanitize_html_class( 'stick-logonav-botalign' ) : ''; ?> <?php echo ( get_theme_mod( 'elation-add-header-bgimg', customizer_library_get_default( 'elation-add-header-bgimg' ) ) && get_theme_mod( 'elation-header-bgimg', customizer_library_get_default( 'elation-header-bgimg' ) ) ) ? sanitize_html_class( 'elation-bgheader-img' ) : ''; ?> <?php echo ( get_theme_mod( 'elation-header-centered-layout', customizer_library_get_default( 'elation-header-centered-layout' ) ) ) ? sanitize_html_class( 'elation-color-nav' ) : ''; ?> <?php echo ( 'elation-pagetitle-banner' == get_theme_mod( 'elation-pagetitle-layout', customizer_library_get_default( 'elation-pagetitle-layout' ) ) ) ? sanitize_html_class( 'w-title' ) : sanitize_html_class( 'wo-title' ); ?>" <?php echo ( get_theme_mod( 'elation-add-header-bgimg', customizer_library_get_default( 'elation-add-header-bgimg' ) ) && get_theme_mod( 'elation-header-bgimg', customizer_library_get_default( 'elation-header-bgimg' ) ) ) ? 'style="background-image: url( ' . esc_url( get_theme_mod( 'elation-header-bgimg', customizer_library_get_default( 'elation-header-bgimg' ) ) ) . '); background-repeat: ' . esc_attr( $elation_headerimg_repeat ) . '; background-position: ' . esc_attr( $elation_headerimg_align ) . ';"' : ''; ?>>
    <?php
    if ( get_theme_mod( 'elation-add-topbar', customizer_library_get_default( 'elation-add-topbar' ) ) ) :
        // Get Site Top Bar
        get_template_part( '/templates/header/topbar/topbar' );
    endif; ?>

    <?php echo ( get_theme_mod( 'elation-enable-sticky-header', customizer_library_get_default( 'elation-enable-sticky-header' ) ) ) ? '<div class="site-stick-header stick-header"><div class="site-stick-inner">' : ''; ?>

        <div class="site-header-wrap <?php echo ( !get_theme_mod( 'elation-header-centered-layout', customizer_library_get_default( 'elation-header-centered-layout' ) ) ) ? sanitize_html_class( 'site-container' ) : ''; ?>">

            <div class="site-header-main <?php echo sanitize_html_class( get_theme_mod( 'elation-header-align', customizer_library_get_default( 'elation-header-align' ) ) ); ?>">

                <div class="site-header-main-inner <?php echo ( get_theme_mod( 'elation-header-centered-layout', customizer_library_get_default( 'elation-header-centered-layout' ) ) ) ? sanitize_html_class( 'site-container' ) : ''; ?>">

                    <div class="site-branding align-items-<?php echo sanitize_html_class( get_theme_mod( 'elation-logo-alignment', customizer_library_get_default( 'elation-logo-alignment' ) ) ); ?>">
                        <?php echo ( get_theme_mod( 'elation-uploaded-logo', customizer_library_get_default( 'elation-uploaded-logo' ) ) && get_theme_mod( 'elation-logo-align-side', customizer_library_get_default( 'elation-logo-align-side' ) ) ) ? '<div class="site-logo-align">' : ''; ?>
                            
                            <?php echo ( get_theme_mod( 'elation-uploaded-logo', customizer_library_get_default( 'elation-uploaded-logo' ) ) && get_theme_mod( 'elation-logo-align-side', customizer_library_get_default( 'elation-logo-align-side' ) ) ) ? '<div class="site-logo-align-inner">' : ''; ?>
                                
                                <?php if ( has_custom_logo() ) : ?>
                                    <?php the_custom_logo(); ?>

                                    <?php if ( get_theme_mod( 'elation-uploaded-logo', customizer_library_get_default( 'elation-uploaded-logo' ) ) && get_theme_mod( 'elation-add-back-title', customizer_library_get_default( 'elation-add-back-title' ) ) || get_theme_mod( 'elation-add-back-tagline', customizer_library_get_default( 'elation-add-back-tagline' ) ) ) : ?>
                                        <div class="site-logo-title">
                                            <?php if ( get_theme_mod( 'elation-uploaded-logo', customizer_library_get_default( 'elation-uploaded-logo' ) ) && get_theme_mod( 'elation-add-back-title', customizer_library_get_default( 'elation-add-back-title' ) ) ) : ?>
                                                <?php echo '<' .tag_escape( $elation_titletag ) . ' class="site-title">'; ?><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a><?php echo '</' . tag_escape( $elation_titletag ) . '>'; ?>
                                            <?php endif; ?>
                                            <?php if ( get_theme_mod( 'elation-uploaded-logo', customizer_library_get_default( 'elation-uploaded-logo' ) ) && get_theme_mod( 'elation-add-back-tagline', customizer_library_get_default( 'elation-add-back-tagline' ) ) ) : ?>
                                                <?php
                                                $elation_description = get_bloginfo( 'description', 'display' );
                                                if ( $elation_description || is_customize_preview() ) : ?>
                                                    <?php echo '<' . tag_escape( $elation_desctag ) . ' class="site-description">'; ?><?php echo esc_html( $elation_description ); ?><?php echo '</' . tag_escape( $elation_desctag ) . '>'; ?>
                                                <?php
                                                endif; ?>
                                            <?php endif; ?>
                                        </div>
                                    <?php endif; ?>
                                <?php else : ?>
                                    <div class="site-logo-title">
                                        <?php echo '<' .tag_escape( $elation_titletag ) . ' class="site-title">'; ?><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a><?php echo '</' . tag_escape( $elation_titletag ) . '>'; ?>
                                        <?php
                                        $elation_description = get_bloginfo( 'description', 'display' );
                                        if ( $elation_description || is_customize_preview() ) : ?>
                                            <?php echo '<' . tag_escape( $elation_desctag ) . ' class="site-description">'; ?><?php echo esc_html( $elation_description ); ?><?php echo '</' . tag_escape( $elation_desctag ) . '>'; ?>
                                        <?php
                                        endif; ?>
                                    </div>
                                <?php endif; ?>
                            
                            <?php echo esc_html( get_theme_mod( 'elation-uploaded-logo', customizer_library_get_default( 'elation-uploaded-logo' ) ) && get_theme_mod( 'elation-logo-align-side', customizer_library_get_default( 'elation-logo-align-side' ) ) ) ? '</div>' : ''; ?>

                        <?php echo esc_html( get_theme_mod( 'elation-uploaded-logo', customizer_library_get_default( 'elation-uploaded-logo' ) ) && get_theme_mod( 'elation-logo-align-side', customizer_library_get_default( 'elation-logo-align-side' ) ) ) ? '</div>' : ''; ?>
                    </div><!-- .site-branding -->

                </div>

            </div>

            <?php if ( !get_theme_mod( 'elation-remove-main-nav', customizer_library_get_default( 'elation-remove-main-nav' ) ) ) : ?>
                
                <?php if ( get_theme_mod( 'elation-plugin-fix-mega-menu', customizer_library_get_default( 'elation-plugin-fix-mega-menu' ) ) ) : ?>
                    <nav class="main-navigation-mm">
                        <?php wp_nav_menu( array( 'theme_location' => 'elation-main-menu', 'menu_id' => 'elation-main-menu-mm' ) ); ?>
                    </nav><!-- #site-navigation -->
                <?php else : ?>
                    <nav id="site-navigation" class="main-navigation <?php echo sanitize_html_class( get_theme_mod( 'elation-menu-position', customizer_library_get_default( 'elation-menu-position' ) ) ); ?> <?php echo sanitize_html_class( get_theme_mod( 'elation-header-nav-style', customizer_library_get_default( 'elation-header-nav-style' ) ) ); ?> <?php echo ( get_theme_mod( 'elation-header-centered-layout', customizer_library_get_default( 'elation-header-centered-layout' ) ) && get_theme_mod( 'elation-align-nav-full-width', customizer_library_get_default( 'elation-align-nav-full-width' ) ) ) ? sanitize_html_class( 'main-nav-full-width' ) : ''; ?> <?php echo sanitize_html_class( get_theme_mod( 'elation-dd-style', customizer_library_get_default( 'elation-dd-style' ) ) ); ?>">
                        
                        <div class="site-container">

                            <button class="menu-toggle" aria-controls="main-menu" aria-expanded="false">
                                <?php if ( !get_theme_mod( 'elation-mobile-menu-addicon', customizer_library_get_default( 'elation-mobile-menu-addicon' ) ) ) : ?>
                                    <span><i class="fas <?php echo sanitize_html_class( get_theme_mod( 'elation-mobile-menu-icon', customizer_library_get_default( 'elation-mobile-menu-icon' ) ) ); ?>"></i></span>
                                <?php endif; ?>
                                <?php echo esc_html( get_theme_mod( 'elation-mobile-menu-text', customizer_library_get_default( 'elation-mobile-menu-text' ) ) ); ?>
                            </button>

                            <?php if ( get_theme_mod( 'elation-add-nav-search', customizer_library_get_default( 'elation-add-nav-search' ) ) ) : ?>
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

                        <div class="menu-main-menu-container">
                            <?php
                            wp_nav_menu( array(
                                'theme_location' => 'elation-main-menu',
                                'menu_id'        => 'elation-main-menu',
                                'container_class'=> 'main-menu-inner',
                            ) ); ?>
                            <button class="main-menu-close"></button>
                        </div>
                        
                    </nav><!-- #site-navigation -->
                <?php endif; ?>

            <?php endif; ?>
            
            <?php // if ( !get_theme_mod( 'elation-add-topbar', customizer_library_get_default( 'elation-add-topbar' ) ) && get_theme_mod( 'elation-add-nav-search', customizer_library_get_default( 'elation-add-nav-search' ) ) ) : ?>
            <?php if ( ( get_theme_mod( 'elation-add-nav-search', customizer_library_get_default( 'elation-add-nav-search' ) ) && !get_theme_mod( 'elation-add-topbar', customizer_library_get_default( 'elation-add-topbar' ) ) ) || ( get_theme_mod( 'elation-add-nav-search', customizer_library_get_default( 'elation-add-nav-search' ) ) && get_theme_mod( 'elation-add-topbar', customizer_library_get_default( 'elation-add-topbar' ) ) && !get_theme_mod( 'elation-add-topbar-search', customizer_library_get_default( 'elation-add-topbar-search' ) ) ) || ( get_theme_mod( 'elation-add-nav-search', customizer_library_get_default( 'elation-add-nav-search' ) ) && get_theme_mod( 'elation-add-topbar', customizer_library_get_default( 'elation-add-topbar' ) ) && get_theme_mod( 'elation-add-topbar-search', customizer_library_get_default( 'elation-add-topbar-search' ) ) ) ) : ?>
                <?php if ( 'elation-search-slide' == get_theme_mod( 'elation-header-search-type', customizer_library_get_default( 'elation-header-search-type' ) ) || 'elation-search-fade' == get_theme_mod( 'elation-header-search-type', customizer_library_get_default( 'elation-header-search-type' ) ) || 'elation-search-full' == get_theme_mod( 'elation-header-search-type', customizer_library_get_default( 'elation-header-search-type' ) ) || 'elation-search-full-txt' == get_theme_mod( 'elation-header-search-type', customizer_library_get_default( 'elation-header-search-type' ) ) ) : ?>
                    <div class="header-search-block">
                        <?php get_search_form(); ?>
                    </div>
                    <?php if ( 'elation-search-full' == get_theme_mod( 'elation-header-search-type', customizer_library_get_default( 'elation-header-search-type' ) ) || 'elation-search-full-txt' == get_theme_mod( 'elation-header-search-type', customizer_library_get_default( 'elation-header-search-type' ) ) ) : ?>
                        <div class="header-search-elation"></div>
                    <?php endif; ?>
                <?php endif; ?>
            <?php endif; ?>

        </div>

    <?php echo ( get_theme_mod( 'elation-enable-sticky-header', customizer_library_get_default( 'elation-enable-sticky-header' ) ) ) ? '</div></div>' : ''; ?>

</header><!-- #masthead -->