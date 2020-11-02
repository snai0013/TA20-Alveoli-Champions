<?php

/**
 * Implements styles set in the theme customizer
 *
 * @package Customizer Library Elation
 */
if ( !function_exists( 'elation_customizer_library_build_styles' ) && class_exists( 'Customizer_Library_Styles' ) ) {
    /**
     * Process user options to generate CSS needed to implement the choices.
     *
     * @since  1.0.0.
     *
     * @return void
     */
    function elation_customizer_library_build_styles()
    {
        // Site Breakpoints
        $elation_resp_menu_min = 'none';
        $elation_resp_menu = get_theme_mod( 'elation-menu-breakat', customizer_library_get_default( 'elation-menu-breakat' ) );
        $elation_resp_tablet = get_theme_mod( 'elation-tablet-breakat', customizer_library_get_default( 'elation-tablet-breakat' ) );
        $elation_resp_mobile = get_theme_mod( 'elation-mobile-breakat', customizer_library_get_default( 'elation-mobile-breakat' ) );
        switch ( $elation_resp_menu ) {
            case 'always':
                $elation_resp_menu = 'all';
                $elation_resp_menu_min = 'none';
                break;
            case 'mobile':
                $elation_resp_menu = '(max-width: ' . esc_attr( $elation_resp_mobile ) . 'px)';
                $elation_resp_menu_min = '(min-width: ' . esc_attr( $elation_resp_mobile + 1 ) . 'px)';
                break;
            case 'custom':
                $elation_resp_menu = '(max-width: ' . esc_attr( get_theme_mod( 'elation-menu-custom-breakat', customizer_library_get_default( 'elation-menu-custom-breakat' ) ) ) . 'px)';
                $elation_resp_menu_min = '(min-width: ' . esc_attr( get_theme_mod( 'elation-menu-custom-breakat', customizer_library_get_default( 'elation-menu-custom-breakat' ) ) + 1 ) . 'px)';
                break;
            default:
                // Defaults to Tablet
                $elation_resp_menu = '(max-width: ' . esc_attr( $elation_resp_tablet ) . 'px)';
                $elation_resp_menu_min = '(min-width: ' . esc_attr( $elation_resp_tablet + 1 ) . 'px)';
        }
        // ------------------------------------------------------------------------------------ Site Identity
        
        if ( get_theme_mod( 'elation-uploaded-logo', customizer_library_get_default( 'elation-uploaded-logo' ) ) ) {
            $setting = 'elation-logo-max-width';
            $mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );
            
            if ( $mod !== customizer_library_get_default( $setting ) ) {
                $elation_logo_width = esc_attr( $mod );
                Customizer_Library_Styles()->add( array(
                    'selectors'    => array( 'a.custom-logo-link' ),
                    'declarations' => array(
                    'max-width' => $elation_logo_width . 'px',
                ),
                ) );
            }
            
            $setting = 'elation-title-desc-spacing';
            $mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );
            
            if ( $mod !== customizer_library_get_default( $setting ) ) {
                $elation_titledesc_spacing = esc_attr( $mod );
                Customizer_Library_Styles()->add( array(
                    'selectors'    => array( '.site-title' ),
                    'declarations' => array(
                    'margin-bottom' => $elation_titledesc_spacing . 'px',
                ),
                ) );
            }
            
            $setting = 'elation-logo-title-spacing';
            $mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );
            
            if ( $mod !== customizer_library_get_default( $setting ) ) {
                $elation_logotitle_spacing = esc_attr( $mod );
                Customizer_Library_Styles()->add( array(
                    'selectors'    => array( '.site-logo-align .site-logo-title' ),
                    'declarations' => array(
                    'padding-left' => $elation_logotitle_spacing . 'px',
                ),
                ) );
            }
        
        }
        
        $setting = 'elation-title-size';
        $mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );
        
        if ( $mod !== customizer_library_get_default( $setting ) ) {
            $elation_title_size = esc_attr( $mod );
            Customizer_Library_Styles()->add( array(
                'selectors'    => array( '#page .site-header .site-title' ),
                'declarations' => array(
                'font-size' => $elation_title_size . 'px',
            ),
            ) );
        }
        
        $setting = 'elation-title-fweight';
        $mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );
        
        if ( $mod !== customizer_library_get_default( $setting ) ) {
            $elation_title_fweight = esc_attr( $mod );
            Customizer_Library_Styles()->add( array(
                'selectors'    => array( '.site-title' ),
                'declarations' => array(
                'font-weight' => $elation_title_fweight,
            ),
            ) );
        }
        
        $setting = 'elation-tagline-size';
        $mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );
        
        if ( $mod !== customizer_library_get_default( $setting ) ) {
            $elation_desc_size = esc_attr( $mod );
            Customizer_Library_Styles()->add( array(
                'selectors'    => array( '.site-description' ),
                'declarations' => array(
                'font-size' => $elation_desc_size . 'px',
            ),
            ) );
        }
        
        $setting = 'elation-tagline-fweight';
        $mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );
        
        if ( $mod !== customizer_library_get_default( $setting ) ) {
            $elation_tagline_fweight = esc_attr( $mod );
            Customizer_Library_Styles()->add( array(
                'selectors'    => array( '.site-description' ),
                'declarations' => array(
                'font-weight' => $elation_tagline_fweight,
            ),
            ) );
        }
        
        $setting = 'elation-title-font-uppercase';
        $mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );
        
        if ( $mod !== customizer_library_get_default( $setting ) ) {
            $elation_nav_item_spacing = esc_attr( $mod );
            Customizer_Library_Styles()->add( array(
                'selectors'    => array( '.site-title' ),
                'declarations' => array(
                'text-transform' => 'uppercase',
            ),
            ) );
        }
        
        $setting = 'elation-tagline-font-uppercase';
        $mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );
        
        if ( $mod !== customizer_library_get_default( $setting ) ) {
            $elation_nav_item_spacing = esc_attr( $mod );
            Customizer_Library_Styles()->add( array(
                'selectors'    => array( '.site-description' ),
                'declarations' => array(
                'text-transform' => 'uppercase',
            ),
            ) );
        }
        
        // ------------------------------------------------------------------------------------ Site Identity
        // ------------------------------------------------------------------------------------ Site Layout
        $setting = 'elation-site-container-width';
        $mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );
        
        if ( $mod !== customizer_library_get_default( $setting ) ) {
            $elation_site_container = esc_attr( $mod );
            Customizer_Library_Styles()->add( array(
                'selectors'    => array( '.site-boxed,
				.site-container,
				.site-boxed .site-header.stick-header.stuck,
				.site-boxed .main-navigation.stick-header.stuck,
				.site-boxed .site-stick-header.stick-header.stuck,
				.site-boxed .site-bar.stick-header.stuck' ),
                'declarations' => array(
                'max-width' => $elation_site_container . 'px',
            ),
            ) );
        }
        
        // ------------------------------------------------------------------------------------ Sticky Header
        // ------------------------------------------------------------------------------------ Site Top Bar
        
        if ( !get_theme_mod( 'elation-remove-topbar', customizer_library_get_default( 'elation-remove-topbar' ) ) ) {
            $setting = 'elation-topbar-spacing-top';
            $mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );
            
            if ( $mod !== customizer_library_get_default( $setting ) ) {
                $elation_topbar_top_pad = esc_attr( $mod );
                Customizer_Library_Styles()->add( array(
                    'selectors'    => array( '.site-header .site-header-topbar .site-bar-inner,
                    .site-header .site-header-topbar .site-bar-inner' ),
                    'declarations' => array(
                    'padding-top' => $elation_topbar_top_pad . 'px',
                ),
                ) );
            }
            
            $setting = 'elation-topbar-spacing-bottom';
            $mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );
            
            if ( $mod !== customizer_library_get_default( $setting ) ) {
                $elation_topbar_bottom_pad = esc_attr( $mod );
                Customizer_Library_Styles()->add( array(
                    'selectors'    => array( '.site-header .site-header-topbar .site-bar-inner,
                    .site-header .site-header-topbar .site-bar-inner' ),
                    'declarations' => array(
                    'padding-bottom' => $elation_topbar_bottom_pad . 'px',
                ),
                ) );
            }
            
            $setting = 'elation-topbar-font-size';
            $mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );
            
            if ( $mod !== customizer_library_get_default( $setting ) ) {
                $elation_topbar_font_size = esc_attr( $mod );
                Customizer_Library_Styles()->add( array(
                    'selectors'    => array( '.site-header .site-bar' ),
                    'declarations' => array(
                    'font-size' => $elation_topbar_font_size . 'px',
                ),
                ) );
            }
        
        }
        
        $setting = 'elation-topbar-social-size';
        $mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );
        
        if ( $mod !== customizer_library_get_default( $setting ) ) {
            $elation_topbar_icon = esc_attr( $mod );
            Customizer_Library_Styles()->add( array(
                'selectors'    => array( '.site-header .site-bar .social-icon,
                .site-header.elation-topbar-one button.header-search,
                .elation-header-sicons .social-icon' ),
                'declarations' => array(
                'font-size' => $elation_topbar_icon . 'px',
            ),
            ) );
            Customizer_Library_Styles()->add( array(
                'selectors'    => array( '.site-header .site-bar .social-icon' ),
                'declarations' => array(
                'margin-right' => $elation_topbar_icon / 2 + 2 . 'px',
            ),
            ) );
        }
        
        // ------------------------------------------------------------------------------------ Site Top Bar
        // ------------------------------------------------------------------------------------ Site Header
        $setting = 'elation-header-spacing-top';
        $mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );
        
        if ( $mod !== customizer_library_get_default( $setting ) ) {
            $elation_header_top_pad = esc_attr( $mod );
            Customizer_Library_Styles()->add( array(
                'selectors'    => array( '.site-header.site-header-standard .site-header-wrap,
                .site-header.site-header-centered .site-header-main' ),
                'declarations' => array(
                'padding-top' => $elation_header_top_pad . 'px',
            ),
            ) );
        }
        
        $setting = 'elation-header-spacing-bottom';
        $mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );
        
        if ( $mod !== customizer_library_get_default( $setting ) ) {
            $elation_header_bottom_pad = esc_attr( $mod );
            Customizer_Library_Styles()->add( array(
                'selectors'    => array( '.site-header.site-header-standard .site-header-wrap,
                .site-header.site-header-centered .site-header-main' ),
                'declarations' => array(
                'padding-bottom' => $elation_header_bottom_pad . 'px',
            ),
            ) );
        }
        
        
        if ( !get_theme_mod( 'elation-add-header-bgimg', customizer_library_get_default( 'elation-add-header-bgimg' ) ) ) {
            $setting = 'elation-header-topbar-clear';
            $mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );
            
            if ( $mod !== customizer_library_get_default( $setting ) ) {
                $elation_headertop_clear = esc_attr( $mod );
                Customizer_Library_Styles()->add( array(
                    'selectors'    => array( '.site-header .site-bar-inner' ),
                    'declarations' => array(
                    'background' => 'none',
                ),
                ) );
            }
        
        }
        
        // ------------------------------------------------------------------------------------ Site Header
        // ------------------------------------------------------------------------------------ Main Navigation
        $setting = 'elation-nav-font-size';
        $mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );
        
        if ( $mod !== customizer_library_get_default( $setting ) ) {
            $elation_nav_font_size = esc_attr( $mod );
            Customizer_Library_Styles()->add( array(
                'selectors'    => array( '.main-navigation ul#elation-main-menu > li > a,
				.main-navigation #elation-main-menu > ul > li > a,
				.main-navigation .elation-menu-cart' ),
                'declarations' => array(
                'font-size' => $elation_nav_font_size . 'px',
            ),
                'media'        => esc_attr( $elation_resp_menu_min ),
            ) );
            Customizer_Library_Styles()->add( array(
                'selectors'    => array( '.menu-toggle' ),
                'declarations' => array(
                'font-size' => $elation_nav_font_size . 'px',
            ),
                'media'        => esc_attr( $elation_resp_menu ),
            ) );
        }
        
        $setting = 'elation-nav-drop-center';
        $mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );
        
        if ( $mod !== customizer_library_get_default( $setting ) ) {
            $elation_nav_font_size = esc_attr( $mod );
            Customizer_Library_Styles()->add( array(
                'selectors'    => array( '.main-navigation ul ul a' ),
                'declarations' => array(
                'text-align' => 'center',
            ),
                'media'        => esc_attr( $elation_resp_menu_min ),
            ) );
        }
        
        
        if ( get_theme_mod( 'elation-nav-advanced-set', customizer_library_get_default( 'elation-nav-advanced-set' ) ) ) {
            $setting = 'elation-header-nav-spacing-top';
            $mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );
            
            if ( $mod !== customizer_library_get_default( $setting ) ) {
                $elation_nav_pad_top = esc_attr( $mod );
                Customizer_Library_Styles()->add( array(
                    'selectors'    => array( '.main-navigation ul#elation-main-menu > li > a,
					.main-navigation.elation-nav-block #elation-main-menu > ul > li > a' ),
                    'declarations' => array(
                    'padding-top' => $elation_nav_pad_top . 'px',
                ),
                    'media'        => esc_attr( $elation_resp_menu_min ),
                ) );
                Customizer_Library_Styles()->add( array(
                    'selectors'    => array( '.menu-toggle' ),
                    'declarations' => array(
                    'padding-top' => $elation_nav_pad_top . 'px',
                ),
                    'media'        => esc_attr( $elation_resp_menu ),
                ) );
            }
            
            $setting = 'elation-header-nav-spacing-bottom';
            $mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );
            
            if ( $mod !== customizer_library_get_default( $setting ) ) {
                $elation_nav_pad_bottom = esc_attr( $mod );
                Customizer_Library_Styles()->add( array(
                    'selectors'    => array( '.main-navigation ul#elation-main-menu > li > a,
					.main-navigation.elation-nav-block #elation-main-menu > ul > li > a' ),
                    'declarations' => array(
                    'padding-bottom' => $elation_nav_pad_bottom . 'px',
                ),
                    'media'        => esc_attr( $elation_resp_menu_min ),
                ) );
                Customizer_Library_Styles()->add( array(
                    'selectors'    => array( '.menu-toggle' ),
                    'declarations' => array(
                    'padding-bottom' => $elation_nav_pad_bottom . 'px',
                ),
                    'media'        => esc_attr( $elation_resp_menu ),
                ) );
            }
            
            $setting = 'elation-header-nav-spacing-side';
            $mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );
            
            if ( $mod !== customizer_library_get_default( $setting ) ) {
                $elation_nav_pad_side = esc_attr( $mod );
                Customizer_Library_Styles()->add( array(
                    'selectors'    => array( '.main-navigation ul#elation-main-menu > li > a' ),
                    'declarations' => array(
                    'padding-left'  => $elation_nav_pad_side . 'px',
                    'padding-right' => $elation_nav_pad_side . 'px',
                ),
                    'media'        => esc_attr( $elation_resp_menu_min ),
                ) );
                Customizer_Library_Styles()->add( array(
                    'selectors'    => array( '.main-navigation.elation-nav-block #elation-main-menu > ul > li > a' ),
                    'declarations' => array(
                    'padding-left'  => $elation_nav_pad_side / 2 . 'px',
                    'padding-right' => $elation_nav_pad_side / 2 . 'px',
                ),
                    'media'        => esc_attr( $elation_resp_menu_min ),
                ) );
            }
            
            $setting = 'elation-header-nav-item-spacing';
            $mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );
            
            if ( $mod !== customizer_library_get_default( $setting ) ) {
                $elation_nav_item_spacing = esc_attr( $mod );
                Customizer_Library_Styles()->add( array(
                    'selectors'    => array( '.main-navigation ul#elation-main-menu > li > a,
					.main-navigation.elation-nav-block #elation-main-menu > ul > li > a' ),
                    'declarations' => array(
                    'margin-left'  => $elation_nav_item_spacing . 'px',
                    'margin-right' => $elation_nav_item_spacing . 'px',
                ),
                    'media'        => esc_attr( $elation_resp_menu_min ),
                ) );
            }
            
            $setting = 'elation-header-nav-drop-side-pad';
            $mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );
            
            if ( $mod !== customizer_library_get_default( $setting ) ) {
                $elation_navdrop_pad_side = esc_attr( $mod );
                Customizer_Library_Styles()->add( array(
                    'selectors'    => array( '.main-navigation ul ul a,
					.main-navigation.elation-nav-block ul ul a' ),
                    'declarations' => array(
                    'padding-left'  => $elation_navdrop_pad_side . 'px',
                    'padding-right' => $elation_navdrop_pad_side . 'px',
                ),
                    'media'        => esc_attr( $elation_resp_menu_min ),
                ) );
            }
            
            $setting = 'elation-header-nav-drop-topbot-pad';
            $mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );
            
            if ( $mod !== customizer_library_get_default( $setting ) ) {
                $elation_navdrop_pad_tb = esc_attr( $mod );
                Customizer_Library_Styles()->add( array(
                    'selectors'    => array( '.main-navigation ul ul a,
					.main-navigation.elation-nav-block ul ul a' ),
                    'declarations' => array(
                    'padding-top'    => $elation_navdrop_pad_tb . 'px',
                    'padding-bottom' => $elation_navdrop_pad_tb . 'px',
                ),
                    'media'        => esc_attr( $elation_resp_menu_min ),
                ) );
            }
            
            $setting = 'elation-nav-drop-minwidth';
            $mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );
            
            if ( $mod !== customizer_library_get_default( $setting ) ) {
                $elation_navdrop_minwidth = esc_attr( $mod );
                Customizer_Library_Styles()->add( array(
                    'selectors'    => array( '.main-navigation ul ul a' ),
                    'declarations' => array(
                    'min-width' => $elation_navdrop_minwidth . 'px',
                ),
                    'media'        => esc_attr( $elation_resp_menu_min ),
                ) );
            }
            
            $setting = 'elation-nav-drop-negmargin';
            $mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );
            
            if ( $mod !== customizer_library_get_default( $setting ) ) {
                $elation_navdrop_negmargin = esc_attr( $mod );
                Customizer_Library_Styles()->add( array(
                    'selectors'    => array( '.main-navigation ul ul' ),
                    'declarations' => array(
                    'margin-left' => '-' . $elation_navdrop_negmargin . 'px',
                ),
                    'media'        => esc_attr( $elation_resp_menu_min ),
                ) );
                Customizer_Library_Styles()->add( array(
                    'selectors'    => array( '.main-navigation ul ul ul' ),
                    'declarations' => array(
                    'margin-left' => '0',
                ),
                    'media'        => esc_attr( $elation_resp_menu_min ),
                ) );
            }
        
        }
        
        $setting = 'elation-nav-drop-down-font-size';
        $mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );
        
        if ( $mod !== customizer_library_get_default( $setting ) ) {
            $elation_navdrop_size = esc_attr( $mod );
            Customizer_Library_Styles()->add( array(
                'selectors'    => array( '.main-navigation ul ul a' ),
                'declarations' => array(
                'font-size' => $elation_navdrop_size . 'px',
            ),
                'media'        => esc_attr( $elation_resp_menu_min ),
            ) );
        }
        
        $setting = 'elation-nav-uppercase';
        $mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );
        
        if ( $mod !== customizer_library_get_default( $setting ) ) {
            $elation_nav_item_spacing = esc_attr( $mod );
            Customizer_Library_Styles()->add( array(
                'selectors'    => array( '.main-navigation,
				.menu-toggle' ),
                'declarations' => array(
                'text-transform' => 'uppercase',
            ),
            ) );
        }
        
        // ------------------------------------------------------------------------------------ Main Navigation
        // ------------------------------------------------------------------------------------ Content Area
        
        if ( get_theme_mod( 'elation-sitemedia-add-elation', customizer_library_get_default( 'elation-sitemedia-add-elation' ) ) ) {
            $setting = 'elation-sitemedia-elation-color';
            $setting_opacity = 'elation-sitemedia-elation-opacity';
            $mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );
            $mod_opacity = get_theme_mod( $setting_opacity, customizer_library_get_default( $setting_opacity ) );
            
            if ( $mod !== customizer_library_get_default( $setting ) || $mod_opacity !== customizer_library_get_default( $setting_opacity ) ) {
                $color = sanitize_hex_color( $mod );
                $rgba_color = customizer_library_hex_to_rgb( $color );
                $opacity = esc_attr( $mod_opacity );
                Customizer_Library_Styles()->add( array(
                    'selectors'    => array( '.elation-banner-img-elation' ),
                    'declarations' => array(
                    'background-color' => 'rgba(' . $rgba_color['r'] . ', ' . $rgba_color['g'] . ', ' . $rgba_color['b'] . ', ' . $opacity . ');',
                ),
                ) );
            }
        
        }
        
        $setting = 'elation-content-spacing-top';
        $mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );
        
        if ( $mod !== customizer_library_get_default( $setting ) ) {
            $elation_content_pad_top = esc_attr( $mod );
            Customizer_Library_Styles()->add( array(
                'selectors'    => array( '.site-container.site-content' ),
                'declarations' => array(
                'padding-top' => $elation_content_pad_top . 'px',
            ),
            ) );
        }
        
        $setting = 'elation-content-spacing-bottom';
        $mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );
        
        if ( $mod !== customizer_library_get_default( $setting ) ) {
            $elation_content_pad_bottom = esc_attr( $mod );
            Customizer_Library_Styles()->add( array(
                'selectors'    => array( '.site-container.site-content' ),
                'declarations' => array(
                'padding-bottom' => $elation_content_pad_bottom . 'px',
            ),
            ) );
        }
        
        // Content Margin - Top
        $setting = 'elation-content-margin-top';
        $mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );
        
        if ( $mod !== customizer_library_get_default( $setting ) ) {
            $elation_marcontent_top = esc_attr( $mod );
            Customizer_Library_Styles()->add( array(
                'selectors'    => array( 'body #page #content #primary.content-area' ),
                'declarations' => array(
                'margin-top' => $elation_marcontent_top . 'px',
            ),
            ) );
        }
        
        // Content Padding - Top
        $setting = 'elation-content-padding-top';
        $mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );
        
        if ( $mod !== customizer_library_get_default( $setting ) ) {
            $elation_padcontent_top = esc_attr( $mod );
            Customizer_Library_Styles()->add( array(
                'selectors'    => array( 'body #page #content #primary.content-area' ),
                'declarations' => array(
                'padding-top' => $elation_padcontent_top . 'px',
            ),
            ) );
        }
        
        // Left
        $setting = 'elation-content-padding-left';
        $mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );
        
        if ( $mod !== customizer_library_get_default( $setting ) ) {
            $elation_padcontent_left = esc_attr( $mod );
            Customizer_Library_Styles()->add( array(
                'selectors'    => array( 'body #page #content #primary.content-area' ),
                'declarations' => array(
                'padding-left' => $elation_padcontent_left . 'px',
            ),
            ) );
        }
        
        // Right
        $setting = 'elation-content-padding-right';
        $mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );
        
        if ( $mod !== customizer_library_get_default( $setting ) ) {
            $elation_padcontent_right = esc_attr( $mod );
            Customizer_Library_Styles()->add( array(
                'selectors'    => array( 'body #page #content #primary.content-area' ),
                'declarations' => array(
                'padding-right' => $elation_padcontent_right . 'px',
            ),
            ) );
        }
        
        // Bottom
        $setting = 'elation-content-padding-bottom';
        $mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );
        
        if ( $mod !== customizer_library_get_default( $setting ) ) {
            $elation_padcontent_bottom = esc_attr( $mod );
            Customizer_Library_Styles()->add( array(
                'selectors'    => array( 'body #page #content #primary.content-area' ),
                'declarations' => array(
                'padding-bottom' => $elation_padcontent_bottom . 'px',
            ),
            ) );
        }
        
        // ------------------------------------------------------------------------------------ Content Area
        // ------------------------------------------------------------------------------------ Widget Area
        $setting = 'elation-widget-spacing-bottom';
        $mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );
        
        if ( $mod !== customizer_library_get_default( $setting ) ) {
            $elation_widget_spacing = esc_attr( $mod );
            Customizer_Library_Styles()->add( array(
                'selectors'    => array( '.widget-area .widget' ),
                'declarations' => array(
                'margin-bottom' => $elation_widget_spacing . 'px',
            ),
            ) );
        }
        
        $setting = 'elation-widget-title-spacing';
        $mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );
        
        if ( $mod !== customizer_library_get_default( $setting ) ) {
            $elation_widget_title_spacing = esc_attr( $mod );
            Customizer_Library_Styles()->add( array(
                'selectors'    => array( '.widget-area .widget-title' ),
                'declarations' => array(
                'margin-bottom' => $elation_widget_title_spacing . 'px',
            ),
            ) );
        }
        
        $setting = 'elation-widget-area-size';
        $mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );
        
        if ( $mod !== customizer_library_get_default( $setting ) ) {
            $elation_widgetarea_size = esc_attr( $mod );
            Customizer_Library_Styles()->add( array(
                'selectors'    => array( '.widget-area' ),
                'declarations' => array(
                'width' => $elation_widgetarea_size . '%',
            ),
            ) );
            Customizer_Library_Styles()->add( array(
                'selectors'    => array( '.content-area' ),
                'declarations' => array(
                'width' => 100 - $elation_widgetarea_size . '%',
            ),
            ) );
            Customizer_Library_Styles()->add( array(
                'selectors'    => array( 'body.page-template-right-sidebar.elation-break-content .content-area,
                body.page-template-default.elation-site-full-width-blocked.elation-break-content.elation-page-rs .content-area,
                body.elation-site-full-width-blocked.elation-break-content.elation-blog-rs .content-area,
                body.elation-site-full-width-blocked.elation-break-content.elation-blog-post-rs .content-area,
                body.elation-site-full-width-blocked.elation-break-content.elation-blog-search-rs .content-area,

                body.archive.woocommerce.elation-site-full-width-blocked.elation-break-content.elation-wc-rs .content-area,
                body.single-product.woocommerce.elation-site-full-width-blocked.elation-break-content.elation-wc-product-rs .content-area' ),
                'declarations' => array(
                'width'  => 100 - ($elation_widgetarea_size + 3) . '%',
                'margin' => '0 ' . 3 . '% 0 0',
            ),
            ) );
            Customizer_Library_Styles()->add( array(
                'selectors'    => array( 'body.page-template-left-sidebar.elation-break-content .content-area,
                body.page-template-default.elation-site-full-width-blocked.elation-break-content.elation-page-ls .content-area,
                body.elation-site-full-width-blocked.elation-break-content.elation-blog-ls .content-area,
                body.elation-site-full-width-blocked.elation-break-content.elation-blog-post-ls .content-area,
                body.elation-site-full-width-blocked.elation-break-content.elation-blog-search-ls .content-area,
                
                body.archive.woocommerce.elation-site-full-width-blocked.elation-break-content.elation-wc-ls .content-area,
                body.single-product.woocommerce.elation-site-full-width-blocked.elation-break-content.elation-wc-product-ls .content-area' ),
                'declarations' => array(
                'width'  => 100 - ($elation_widgetarea_size + 3) . '%',
                'margin' => '0 0 0 ' . 3 . '%',
            ),
            ) );
        }
        
        // Content Margin - Top
        $setting = 'elation-widget-margin-top';
        $mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );
        
        if ( $mod !== customizer_library_get_default( $setting ) ) {
            $elation_marwidget_top = esc_attr( $mod );
            Customizer_Library_Styles()->add( array(
                'selectors'    => array( 'body #page #content #secondary.widget-area' ),
                'declarations' => array(
                'margin-top' => $elation_marwidget_top . 'px',
            ),
            ) );
        }
        
        // Top
        $setting = 'elation-widget-padding-top';
        $mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );
        
        if ( $mod !== customizer_library_get_default( $setting ) ) {
            $elation_padwidget_top = esc_attr( $mod );
            Customizer_Library_Styles()->add( array(
                'selectors'    => array( 'body #page #content .widget-area.widgets-joined,
                body #page #content .widget-area.widgets-apart .widget' ),
                'declarations' => array(
                'padding-top' => $elation_padwidget_top . 'px',
            ),
            ) );
        }
        
        // Left
        $setting = 'elation-widget-padding-left';
        $mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );
        
        if ( $mod !== customizer_library_get_default( $setting ) ) {
            $elation_padwidget_left = esc_attr( $mod );
            Customizer_Library_Styles()->add( array(
                'selectors'    => array( 'body #page #content .widget-area.widgets-joined,
                body #page #content .widget-area.widgets-apart .widget' ),
                'declarations' => array(
                'padding-left' => $elation_padwidget_left . 'px',
            ),
            ) );
        }
        
        // Right
        $setting = 'elation-widget-padding-right';
        $mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );
        
        if ( $mod !== customizer_library_get_default( $setting ) ) {
            $elation_padwidget_right = esc_attr( $mod );
            Customizer_Library_Styles()->add( array(
                'selectors'    => array( 'body #page #content .widget-area.widgets-joined,
                body #page #content .widget-area.widgets-apart .widget' ),
                'declarations' => array(
                'padding-right' => $elation_padwidget_right . 'px',
            ),
            ) );
        }
        
        // Bottom
        $setting = 'elation-widget-padding-bottom';
        $mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );
        
        if ( $mod !== customizer_library_get_default( $setting ) ) {
            $elation_padwidget_bottom = esc_attr( $mod );
            Customizer_Library_Styles()->add( array(
                'selectors'    => array( 'body #page #content .widget-area.widgets-joined,
                body #page #content .widget-area.widgets-apart .widget' ),
                'declarations' => array(
                'padding-bottom' => $elation_padwidget_bottom . 'px',
            ),
            ) );
        }
        
        $setting = 'elation-widget-font-title';
        $mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );
        
        if ( $mod !== customizer_library_get_default( $setting ) ) {
            $elation_widget_title_fsize = esc_attr( $mod );
            Customizer_Library_Styles()->add( array(
                'selectors'    => array( '.widget-area .widget-title' ),
                'declarations' => array(
                'font-size' => $elation_widget_title_fsize . 'px',
            ),
            ) );
        }
        
        $setting = 'elation-widget-title-fweight';
        $mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );
        
        if ( $mod !== customizer_library_get_default( $setting ) ) {
            $elation_widget_title_fweight = esc_attr( $mod );
            Customizer_Library_Styles()->add( array(
                'selectors'    => array( '.widget-area .widget-title' ),
                'declarations' => array(
                'font-weight' => $elation_widget_title_fweight,
            ),
            ) );
        }
        
        $setting = 'elation-widget-font-size';
        $mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );
        
        if ( $mod !== customizer_library_get_default( $setting ) ) {
            $elation_widget_fsize = esc_attr( $mod );
            Customizer_Library_Styles()->add( array(
                'selectors'    => array( '#secondary.widget-area' ),
                'declarations' => array(
                'font-size' => $elation_widget_fsize . 'px',
            ),
            ) );
        }
        
        $setting = 'elation-widget-lheight';
        $mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );
        
        if ( $mod !== customizer_library_get_default( $setting ) ) {
            $elation_widget_lheight = esc_attr( $mod );
            Customizer_Library_Styles()->add( array(
                'selectors'    => array( '#secondary.widget-area' ),
                'declarations' => array(
                'line-height' => $elation_widget_lheight,
            ),
            ) );
        }
        
        // ------------------------------------------------------------------------------------ Widget Area
        // ------------------------------------------------------------------------------------ Footer Settings
        $setting = 'elation-footer-widget-space';
        $mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );
        
        if ( $mod !== customizer_library_get_default( $setting ) ) {
            $elation_footer_widget_space = esc_attr( $mod );
            Customizer_Library_Styles()->add( array(
                'selectors'    => array( '.elation-footer-default .site-footer-widgets .footer-custom-block,
				.elation-footer-split ul.site-footer-widgets > li' ),
                'declarations' => array(
                'padding' => '0 ' . $elation_footer_widget_space . 'px',
            ),
            ) );
        }
        
        $setting = 'elation-footer-widget-botspace';
        $mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );
        
        if ( $mod !== customizer_library_get_default( $setting ) ) {
            $elation_footer_widget_botspace = esc_attr( $mod );
            Customizer_Library_Styles()->add( array(
                'selectors'    => array( '.footer-custom-block li' ),
                'declarations' => array(
                'margin-bottom' => $elation_footer_widget_botspace . 'px',
            ),
            ) );
        }
        
        $setting = 'elation-footer-icon-size';
        $mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );
        
        if ( $mod !== customizer_library_get_default( $setting ) ) {
            $elation_footer_icon_size = esc_attr( $mod );
            Customizer_Library_Styles()->add( array(
                'selectors'    => array( '.elation-footer-social .site-footer-icons .social-icon,
                .elation-footer-social-two .site-footer-icons .social-icon' ),
                'declarations' => array(
                'font-size' => $elation_footer_icon_size . 'px',
            ),
            ) );
            Customizer_Library_Styles()->add( array(
                'selectors'    => array( '.site-footer-icons.elation-footicon-round .social-icon i,
				.site-footer-icons.elation-footicon-rounded .social-icon i,
				.site-footer-icons.elation-footicon-square .social-icon i,
				.site-footer-icons.elation-footicon-circled .social-icon i' ),
                'declarations' => array(
                'width'  => $elation_footer_icon_size * 2 . 'px',
                'height' => $elation_footer_icon_size * 2 . 'px',
            ),
            ) );
        }
        
        $setting = 'elation-footer-icon-space';
        $mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );
        
        if ( $mod !== customizer_library_get_default( $setting ) ) {
            $elation_footer_icon_space = esc_attr( $mod );
            Customizer_Library_Styles()->add( array(
                'selectors'    => array( '.elation-footer-social .site-footer-icons .social-icon,
                .elation-footer-social-two .site-footer-icons .social-icon' ),
                'declarations' => array(
                'margin' => '0 ' . $elation_footer_icon_space . 'px 15px',
            ),
            ) );
        }
        
        $setting = 'elation-footer-title-size';
        $mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );
        
        if ( $mod !== customizer_library_get_default( $setting ) ) {
            $elation_footer_title_size = esc_attr( $mod );
            Customizer_Library_Styles()->add( array(
                'selectors'    => array( '.site-footer .widget-title' ),
                'declarations' => array(
                'font-size' => $elation_footer_title_size . 'px',
            ),
            ) );
        }
        
        $setting = 'elation-footer-title-weight';
        $mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );
        
        if ( $mod !== customizer_library_get_default( $setting ) ) {
            $elation_footer_title_weight = esc_attr( $mod );
            Customizer_Library_Styles()->add( array(
                'selectors'    => array( '.site-footer .widget-title' ),
                'declarations' => array(
                'font-weight' => $elation_footer_title_weight,
            ),
            ) );
        }
        
        $setting = 'elation-footer-title-uc';
        $mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );
        
        if ( $mod !== customizer_library_get_default( $setting ) ) {
            $elation_footer_title_uc = esc_attr( $mod );
            Customizer_Library_Styles()->add( array(
                'selectors'    => array( '.site-footer .widget-title' ),
                'declarations' => array(
                'text-transform' => 'uppercase',
            ),
            ) );
        }
        
        $setting = 'elation-footer-title-space';
        $mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );
        
        if ( $mod !== customizer_library_get_default( $setting ) ) {
            $elation_footer_title_space = esc_attr( $mod );
            Customizer_Library_Styles()->add( array(
                'selectors'    => array( '.site-footer .widget-title' ),
                'declarations' => array(
                'margin' => '0 0 ' . $elation_footer_title_space . 'px',
            ),
            ) );
        }
        
        $setting = 'elation-footer-font-size';
        $mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );
        
        if ( $mod !== customizer_library_get_default( $setting ) ) {
            $elation_footer_fsize = esc_attr( $mod );
            Customizer_Library_Styles()->add( array(
                'selectors'    => array( '.site-footer' ),
                'declarations' => array(
                'font-size' => $elation_footer_fsize . 'px',
            ),
            ) );
        }
        
        $setting = 'elation-footer-lheight';
        $mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );
        
        if ( $mod !== customizer_library_get_default( $setting ) ) {
            $elation_footer_lheight = esc_attr( $mod );
            Customizer_Library_Styles()->add( array(
                'selectors'    => array( '.site-footer' ),
                'declarations' => array(
                'line-height' => $elation_footer_lheight,
            ),
            ) );
        }
        
        // Footer Custom custom widths
        
        if ( get_theme_mod( 'elation-footer-customize', customizer_library_get_default( 'elation-footer-customize' ) ) ) {
            // Site Footer Column Widths
            $setting = 'elation-footer-customize-col-1';
            $mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );
            
            if ( $mod !== customizer_library_get_default( $setting ) ) {
                $footer_col_one = esc_attr( $mod );
                Customizer_Library_Styles()->add( array(
                    'selectors'    => array( '.footer-custom-block.footer-custom-one' ),
                    'declarations' => array(
                    'max-width' => $footer_col_one . '%',
                ),
                ) );
            }
            
            $setting = 'elation-footer-customize-col-2';
            $mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );
            
            if ( $mod !== customizer_library_get_default( $setting ) ) {
                $footer_col_two = esc_attr( $mod );
                Customizer_Library_Styles()->add( array(
                    'selectors'    => array( '.footer-custom-block.footer-custom-two' ),
                    'declarations' => array(
                    'max-width' => $footer_col_two . '%',
                ),
                ) );
            }
            
            $setting = 'elation-footer-customize-col-3';
            $mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );
            
            if ( $mod !== customizer_library_get_default( $setting ) ) {
                $footer_col_three = esc_attr( $mod );
                Customizer_Library_Styles()->add( array(
                    'selectors'    => array( '.footer-custom-block.footer-custom-three' ),
                    'declarations' => array(
                    'max-width' => $footer_col_three . '%',
                ),
                ) );
            }
            
            $setting = 'elation-footer-customize-col-4';
            $mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );
            
            if ( $mod !== customizer_library_get_default( $setting ) ) {
                $footer_col_four = esc_attr( $mod );
                Customizer_Library_Styles()->add( array(
                    'selectors'    => array( '.footer-custom-block.footer-custom-four' ),
                    'declarations' => array(
                    'max-width' => $footer_col_four . '%',
                ),
                ) );
            }
            
            $setting = 'elation-footer-customize-col-5';
            $mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );
            
            if ( $mod !== customizer_library_get_default( $setting ) ) {
                $footer_col_five = esc_attr( $mod );
                Customizer_Library_Styles()->add( array(
                    'selectors'    => array( '.footer-custom-block.footer-custom-five' ),
                    'declarations' => array(
                    'max-width' => $footer_col_five . '%',
                ),
                ) );
            }
            
            $setting = 'elation-center-col-1';
            $mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );
            
            if ( $mod !== customizer_library_get_default( $setting ) ) {
                $footer_col_five = esc_attr( $mod );
                Customizer_Library_Styles()->add( array(
                    'selectors'    => array( '.footer-custom-block.footer-custom-one' ),
                    'declarations' => array(
                    'margin' => '0 auto',
                ),
                ) );
            }
        
        }
        
        
        if ( get_theme_mod( 'elation-add-footer-bgimg', customizer_library_get_default( 'elation-add-footer-bgimg' ) ) ) {
            $setting = 'elation-footer-botbar-clear';
            $mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );
            
            if ( $mod !== customizer_library_get_default( $setting ) ) {
                $elation_footerbottom_clear = esc_attr( $mod );
                Customizer_Library_Styles()->add( array(
                    'selectors'    => array( '.site-footer .site-bar,
					.site-footer .site-bar-inner' ),
                    'declarations' => array(
                    'background' => 'none',
                ),
                ) );
            }
        
        }
        
        // ------------------------------------------------------------------------------------ Footer Settings
        // ------------------------------------------------------------------------------------ Footer Bottom Bar
        $setting = 'elation-footer-top-pad';
        $mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );
        
        if ( $mod !== customizer_library_get_default( $setting ) ) {
            $elation_header_top_pad = esc_attr( $mod );
            Customizer_Library_Styles()->add( array(
                'selectors'    => array( '.site-footer-inner' ),
                'declarations' => array(
                'padding-top' => $elation_header_top_pad . 'px',
            ),
            ) );
        }
        
        $setting = 'elation-footer-bottom-pad';
        $mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );
        
        if ( $mod !== customizer_library_get_default( $setting ) ) {
            $elation_header_bottom_pad = esc_attr( $mod );
            Customizer_Library_Styles()->add( array(
                'selectors'    => array( '.site-footer-inner' ),
                'declarations' => array(
                'padding-bottom' => $elation_header_bottom_pad . 'px',
            ),
            ) );
        }
        
        $setting = 'elation-site-side-social-top';
        $mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );
        
        if ( $mod !== customizer_library_get_default( $setting ) ) {
            $elation_sidesocial_top = esc_attr( $mod );
            Customizer_Library_Styles()->add( array(
                'selectors'    => array( '.elation-side-social' ),
                'declarations' => array(
                'top' => $elation_sidesocial_top . 'px',
            ),
            ) );
        }
        
        
        if ( !get_theme_mod( 'elation-remove-bottombar', customizer_library_get_default( 'elation-remove-bottombar' ) ) ) {
            $setting = 'elation-bottombar-spacing-top';
            $mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );
            
            if ( $mod !== customizer_library_get_default( $setting ) ) {
                $elation_bottombar_top_pad = esc_attr( $mod );
                Customizer_Library_Styles()->add( array(
                    'selectors'    => array( '.site-footer .site-bar-inner' ),
                    'declarations' => array(
                    'padding-top' => $elation_bottombar_top_pad . 'px',
                ),
                ) );
            }
            
            $setting = 'elation-bottombar-spacing-bottom';
            $mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );
            
            if ( $mod !== customizer_library_get_default( $setting ) ) {
                $elation_bottombar_bottom_pad = esc_attr( $mod );
                Customizer_Library_Styles()->add( array(
                    'selectors'    => array( '.site-footer .site-bar-inner' ),
                    'declarations' => array(
                    'padding-bottom' => $elation_bottombar_bottom_pad . 'px',
                ),
                ) );
            }
            
            $setting = 'elation-bottombar-font-size';
            $mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );
            
            if ( $mod !== customizer_library_get_default( $setting ) ) {
                $elation_bottombar_font_size = esc_attr( $mod );
                Customizer_Library_Styles()->add( array(
                    'selectors'    => array( '.site-footer .site-bar' ),
                    'declarations' => array(
                    'font-size' => $elation_bottombar_font_size . 'px',
                ),
                ) );
            }
            
            $setting = 'elation-bottombar-social-size';
            $mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );
            
            if ( $mod !== customizer_library_get_default( $setting ) ) {
                $elation_bottombar_icon = esc_attr( $mod );
                Customizer_Library_Styles()->add( array(
                    'selectors'    => array( '.site-footer .site-bar .social-icon,
					.site-footer.elation-bottombar-one button.header-search,
					.elation-footer-basic .site-footer-icons .social-icon' ),
                    'declarations' => array(
                    'font-size' => $elation_bottombar_icon . 'px',
                ),
                ) );
                Customizer_Library_Styles()->add( array(
                    'selectors'    => array( '.site-footer .site-bar .social-icon' ),
                    'declarations' => array(
                    'margin-right' => $elation_bottombar_icon / 2 + 4 . 'px',
                ),
                ) );
            }
        
        }
        
        $setting = 'elation-footer-menu-uppercase';
        $mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );
        
        if ( $mod !== customizer_library_get_default( $setting ) ) {
            $elation_footer_menucase = esc_attr( $mod );
            Customizer_Library_Styles()->add( array(
                'selectors'    => array( '#elation-bottombar-menu li a' ),
                'declarations' => array(
                'text-transform' => 'uppercase',
            ),
            ) );
        }
        
        // ------------------------------------------------------------------------------------ Footer Bottom Bar
        // ------------------------------------------------------------------------------------ Blog Settings
        
        if ( get_theme_mod( 'elation-blog-advanced-set', customizer_library_get_default( 'elation-blog-advanced-set' ) ) ) {
            $setting = 'elation-blog-list-imgcont-size';
            $mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );
            
            if ( $mod !== customizer_library_get_default( $setting ) ) {
                $elation_blog_imgcont_size = esc_attr( $mod );
                Customizer_Library_Styles()->add( array(
                    'selectors'    => array( '.elation-list.elation-blog-left .post-img,
					.elation-list.elation-blog-right .post-img,
					.elation-list.elation-blog-alt .post-img' ),
                    'declarations' => array(
                    'width' => $elation_blog_imgcont_size . '%',
                ),
                ) );
                Customizer_Library_Styles()->add( array(
                    'selectors'    => array( '.elation-list.elation-blog-left .post-content,
					.elation-list.elation-blog-right .post-content,
					.elation-list.elation-blog-alt .post-content' ),
                    'declarations' => array(
                    'width' => 100 - $elation_blog_imgcont_size . '%',
                ),
                ) );
            }
            
            $setting = 'elation-blog-list-title-fweight';
            $mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );
            
            if ( $mod !== customizer_library_get_default( $setting ) ) {
                $elation_blog_title_fweight = esc_attr( $mod );
                Customizer_Library_Styles()->add( array(
                    'selectors'    => array( '.elation-list article .entry-title' ),
                    'declarations' => array(
                    'font-weight' => $elation_blog_title_fweight,
                ),
                ) );
            }
            
            $setting = 'elation-blog-list-title-space';
            $mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );
            
            if ( $mod !== customizer_library_get_default( $setting ) ) {
                $elation_blog_title_space = esc_attr( $mod );
                Customizer_Library_Styles()->add( array(
                    'selectors'    => array( '.elation-list article .entry-title' ),
                    'declarations' => array(
                    'margin' => '0 0 ' . $elation_blog_title_space . 'px',
                ),
                ) );
            }
            
            $setting = 'elation-blog-list-title-font-size';
            $mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );
            
            if ( $mod !== customizer_library_get_default( $setting ) ) {
                $elation_blog_title_fsize = esc_attr( $mod );
                Customizer_Library_Styles()->add( array(
                    'selectors'    => array( '.elation-list article .entry-title' ),
                    'declarations' => array(
                    'font-size' => $elation_blog_title_fsize . 'px',
                ),
                ) );
            }
            
            $setting = 'elation-blog-list-font-size';
            $mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );
            
            if ( $mod !== customizer_library_get_default( $setting ) ) {
                $elation_blog_fsize = esc_attr( $mod );
                Customizer_Library_Styles()->add( array(
                    'selectors'    => array( '.elation-list article .post-content' ),
                    'declarations' => array(
                    'font-size' => $elation_blog_fsize . 'px',
                ),
                ) );
            }
        
        }
        
        $setting = 'elation-blog-list-post-space';
        $mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );
        
        if ( $mod !== customizer_library_get_default( $setting ) ) {
            $elation_blog_post_space = esc_attr( $mod );
            Customizer_Library_Styles()->add( array(
                'selectors'    => array( '.elation-list.elation-blog-left article.post, .elation-list.elation-blog-left article.page,
				.elation-list.elation-blog-right article.post, .elation-list.elation-blog-right article.page,
				.elation-list.elation-blog-alt article.post, .elation-list.elation-blog-alt article.page,
				.elation-list.elation-blog-top article.post, .elation-list.elation-blog-top article.page' ),
                'declarations' => array(
                'margin'  => '0 0 ' . $elation_blog_post_space . 'px',
                'padding' => '0 0 ' . $elation_blog_post_space . 'px',
            ),
            ) );
            Customizer_Library_Styles()->add( array(
                'selectors'    => array( 'body.elation-site-full-width-blocked.elation-joined-content.break-blog-blocks .site-content-inner .elation-blog-top .post-inner .post-content' ),
                'declarations' => array(
                'padding-bottom' => '40px',
            ),
            ) );
        }
        
        $setting = 'elation-blog-grid-space';
        $mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );
        
        if ( $mod !== customizer_library_get_default( $setting ) ) {
            $elation_blog_grid_space = esc_attr( $mod );
            Customizer_Library_Styles()->add( array(
                'selectors'    => array( '.elation-list.elation-blog-grid .elation-list-inner' ),
                'declarations' => array(
                'margin' => '0 -' . $elation_blog_grid_space . 'px',
            ),
            ) );
            Customizer_Library_Styles()->add( array(
                'selectors'    => array( '.elation-blog-grid article.blog-grid-block' ),
                'declarations' => array(
                'padding' => '0 ' . $elation_blog_grid_space . 'px !important',
                'margin'  => '0 0 ' . $elation_blog_grid_space * 2 . 'px',
            ),
            ) );
        }
        
        
        if ( get_theme_mod( 'elation-blog-add-authorblock', customizer_library_get_default( 'elation-blog-add-authorblock' ) ) ) {
            $setting = 'elation-blog-authorblock-width';
            $mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );
            
            if ( $mod !== customizer_library_get_default( $setting ) ) {
                $elation_authorblock_width = esc_attr( $mod );
                Customizer_Library_Styles()->add( array(
                    'selectors'    => array( '.elation-authorblock' ),
                    'declarations' => array(
                    'max-width' => $elation_authorblock_width . '%',
                ),
                ) );
            }
        
        }
        
        $setting = 'elation-bloglist-post-meta-italic';
        $mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );
        
        if ( $mod !== customizer_library_get_default( $setting ) ) {
            $elation_blogsingle_metalign = esc_attr( $mod );
            Customizer_Library_Styles()->add( array(
                'selectors'    => array( '.post-content .entry-meta,
                .post-content .entry-footer' ),
                'declarations' => array(
                'opacity'    => '0.85',
                'font-size'  => '0.8em',
                'font-style' => 'italic',
            ),
            ) );
        }
        
        $setting = 'elation-blog-post-meta-inline';
        $mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );
        
        if ( $mod !== customizer_library_get_default( $setting ) ) {
            $elation_blogsingle_metalign = esc_attr( $mod );
            Customizer_Library_Styles()->add( array(
                'selectors'    => array( '.single-post .elation-postlay-one .entry-meta,
                .single-post .elation-postlay-one .entry-footer' ),
                'declarations' => array(
                'display' => 'inline-block',
                'margin'  => '0 10px 30px 0',
                'padding' => '0',
            ),
            ) );
            Customizer_Library_Styles()->add( array(
                'selectors'    => array( '.single-post .elation-postlay-two .entry-meta,
                .single-post .elation-postlay-two .entry-footer' ),
                'declarations' => array(
                'display' => 'inline-block',
                'margin'  => '0 10px 0 0',
                'padding' => '0',
            ),
            ) );
        }
        
        $setting = 'elation-blog-post-meta-italic';
        $mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );
        
        if ( $mod !== customizer_library_get_default( $setting ) ) {
            $elation_blogsingle_metalign = esc_attr( $mod );
            Customizer_Library_Styles()->add( array(
                'selectors'    => array( '.single-post .entry-meta,
                .single-post .entry-footer' ),
                'declarations' => array(
                'opacity'    => '0.85',
                'font-size'  => '0.8em',
                'font-style' => 'italic',
            ),
            ) );
        }
        
        // ------------------------------------------------------------------------------------ Blog Settings
        // ------------------------------------------------------------------------------------ Font Settings
        $websafe = ( get_theme_mod( 'elation-disable-google-font', customizer_library_get_default( 'elation-disable-google-font' ) ) == 1 ? sanitize_html_class( '-websafe' ) : '' );
        // Title Font
        $setting = 'elation-title-font' . $websafe;
        $mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );
        
        if ( $websafe ) {
            $stack = '\'' . $mod . '\', sans-serif';
        } else {
            $stack = customizer_library_get_font_stack( $mod );
        }
        
        if ( $mod != customizer_library_get_default( $setting ) || get_theme_mod( 'elation-disable-google-font' ) == 1 ) {
            Customizer_Library_Styles()->add( array(
                'selectors'    => array( '.site-title' ),
                'declarations' => array(
                'font-family' => $stack,
            ),
            ) );
        }
        // Tagline Font
        $setting = 'elation-tagline-font' . $websafe;
        $mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );
        
        if ( $websafe ) {
            $stack = '\'' . $mod . '\', sans-serif';
        } else {
            $stack = customizer_library_get_font_stack( $mod );
        }
        
        if ( $mod != customizer_library_get_default( $setting ) || get_theme_mod( 'elation-disable-google-font' ) == 1 ) {
            Customizer_Library_Styles()->add( array(
                'selectors'    => array( '.site-description' ),
                'declarations' => array(
                'font-family' => $stack,
            ),
            ) );
        }
        // Main Navigation Font
        $setting = 'elation-main-nav-font' . $websafe;
        $mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );
        
        if ( $websafe ) {
            $stack = '\'' . $mod . '\', sans-serif';
        } else {
            $stack = customizer_library_get_font_stack( $mod );
        }
        
        if ( $mod != customizer_library_get_default( $setting ) || get_theme_mod( 'elation-disable-google-font' ) == 1 ) {
            Customizer_Library_Styles()->add( array(
                'selectors'    => array( '.main-navigation' ),
                'declarations' => array(
                'font-family' => $stack,
            ),
            ) );
        }
        // Body Font
        $setting = 'elation-body-font' . $websafe;
        $mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );
        
        if ( $websafe ) {
            $stack = '\'' . $mod . '\', sans-serif';
        } else {
            $stack = customizer_library_get_font_stack( $mod );
        }
        
        if ( $mod != customizer_library_get_default( $setting ) || get_theme_mod( 'elation-disable-google-font' ) == 1 ) {
            Customizer_Library_Styles()->add( array(
                'selectors'    => array( 'body, button, input, select, optgroup, textarea' ),
                'declarations' => array(
                'font-family' => $stack,
            ),
            ) );
        }
        // Body Font Size
        $setting = 'elation-body-fonts-size';
        $mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );
        
        if ( $mod !== customizer_library_get_default( $setting ) ) {
            $elation_body_font_size = esc_attr( $mod );
            switch ( $elation_body_font_size ) {
                case '1':
                    $elation_body_font_size = '12';
                    break;
                case '2':
                    $elation_body_font_size = '14';
                    break;
                case '3':
                    $elation_body_font_size = '';
                    break;
                case '4':
                    $elation_body_font_size = '18';
                    break;
                case '5':
                    $elation_body_font_size = '20';
                    break;
                case '6':
                    $elation_body_font_size = '24';
                    break;
            }
            Customizer_Library_Styles()->add( array(
                'selectors'    => array( '.site-container.site-content' ),
                'declarations' => array(
                'font-size' => $elation_body_font_size . 'px',
            ),
            ) );
        }
        
        $setting = 'elation-body-font-lheight';
        $mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );
        
        if ( $mod !== customizer_library_get_default( $setting ) ) {
            $elation_body_lheight = esc_attr( $mod );
            Customizer_Library_Styles()->add( array(
                'selectors'    => array( '#primary.content-area' ),
                'declarations' => array(
                'line-height' => $elation_body_lheight,
            ),
            ) );
        }
        
        $setting = 'elation-content-font-size';
        $mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );
        
        if ( $mod !== customizer_library_get_default( $setting ) ) {
            $elation_content_fsize = esc_attr( $mod );
            Customizer_Library_Styles()->add( array(
                'selectors'    => array( '#primary.content-area' ),
                'declarations' => array(
                'font-size' => $elation_content_fsize . 'px',
            ),
            ) );
        }
        
        $setting = 'elation-content-lheight';
        $mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );
        
        if ( $mod !== customizer_library_get_default( $setting ) ) {
            $elation_content_lheight = esc_attr( $mod );
            Customizer_Library_Styles()->add( array(
                'selectors'    => array( '#primary.content-area' ),
                'declarations' => array(
                'line-height' => $elation_content_lheight,
            ),
            ) );
        }
        
        // Heading Font
        $setting = 'elation-heading-font' . $websafe;
        $mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );
        
        if ( $websafe ) {
            $stack = '\'' . $mod . '\', sans-serif';
        } else {
            $stack = customizer_library_get_font_stack( $mod );
        }
        
        if ( $mod != customizer_library_get_default( $setting ) || get_theme_mod( 'elation-disable-google-font' ) == 1 ) {
            Customizer_Library_Styles()->add( array(
                'selectors'    => array( 'h1, h2, h3, h4, h5, h6,
                .widget-area .widget-title,
                .main-navigation a,
                button, input[type="button"],
                input[type="reset"],
                input[type="submit"]' ),
                'declarations' => array(
                'font-family' => $stack,
            ),
            ) );
        }
        // Site Full Width settings
        $setting = 'elation-set-topbar-fullwidth';
        $mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );
        
        if ( $mod !== customizer_library_get_default( $setting ) ) {
            $elation_setfw_topar = esc_attr( $mod );
            Customizer_Library_Styles()->add( array(
                'selectors'    => array( '.site-header .site-bar .site-container' ),
                'declarations' => array(
                'max-width' => '100%',
            ),
            ) );
        }
        
        $setting = 'elation-set-header-fullwidth';
        $mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );
        
        if ( $mod !== customizer_library_get_default( $setting ) ) {
            $elation_setfw_header = esc_attr( $mod );
            Customizer_Library_Styles()->add( array(
                'selectors'    => array( '.site-header > .site-container,
				.site header .elation-header-container' ),
                'declarations' => array(
                'max-width' => '100%',
            ),
            ) );
        }
        
        $setting = 'elation-set-content-fullwidth';
        $mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );
        
        if ( $mod !== customizer_library_get_default( $setting ) ) {
            $elation_setfw_content = esc_attr( $mod );
            Customizer_Library_Styles()->add( array(
                'selectors'    => array( '.site-container.site-content' ),
                'declarations' => array(
                'max-width' => '100%',
            ),
            ) );
        }
        
        $setting = 'elation-set-footer-fullwidth';
        $mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );
        
        if ( $mod !== customizer_library_get_default( $setting ) ) {
            $elation_setfw_footer = esc_attr( $mod );
            Customizer_Library_Styles()->add( array(
                'selectors'    => array( '.site-footer-inner .site-container' ),
                'declarations' => array(
                'max-width' => '100%',
            ),
            ) );
        }
        
        $setting = 'elation-set-bottombar-fullwidth';
        $mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );
        
        if ( $mod !== customizer_library_get_default( $setting ) ) {
            $elation_setfw_bottombar = esc_attr( $mod );
            Customizer_Library_Styles()->add( array(
                'selectors'    => array( '.site-footer .site-bar .site-container' ),
                'declarations' => array(
                'max-width' => '100%',
            ),
            ) );
        }
        
        $setting = 'elation-page-title-upper';
        $mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );
        
        if ( $mod !== customizer_library_get_default( $setting ) ) {
            $elation_breadcrumbs_upper = esc_attr( $mod );
            Customizer_Library_Styles()->add( array(
                'selectors'    => array( '.elation-page-title .elation-h-title' ),
                'declarations' => array(
                'text-transform' => 'uppercase',
            ),
            ) );
        }
        
        $setting = 'elation-breadcrumbs-upper';
        $mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );
        
        if ( $mod !== customizer_library_get_default( $setting ) ) {
            $elation_breadcrumbs_upper = esc_attr( $mod );
            Customizer_Library_Styles()->add( array(
                'selectors'    => array( '.elation-breadcrumbs' ),
                'declarations' => array(
                'text-transform' => 'uppercase',
                'font-size'      => '0.7em',
            ),
            ) );
        }
        
        $setting = 'elation-breadcrumbs-spacing';
        $mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );
        
        if ( $mod !== customizer_library_get_default( $setting ) ) {
            $elation_breadcrumbs_space = esc_attr( $mod );
            Customizer_Library_Styles()->add( array(
                'selectors'    => array( '.elation-breadcrumbs > span' ),
                'declarations' => array(
                'margin' => '0 ' . $elation_breadcrumbs_space . 'px',
            ),
            ) );
        }
        
        $setting = 'elation-page-title-font-size';
        $mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );
        
        if ( $mod !== customizer_library_get_default( $setting ) ) {
            $elation_ptitle_fsize = esc_attr( $mod );
            Customizer_Library_Styles()->add( array(
                'selectors'    => array( '.elation-page-title .elation-h-title,
				.woocommerce-products-header .woocommerce-products-header__title' ),
                'declarations' => array(
                'font-size' => $elation_ptitle_fsize . 'px',
            ),
            ) );
        }
        
        $setting = 'elation-page-title-font-weight';
        $mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );
        
        if ( $mod !== customizer_library_get_default( $setting ) ) {
            $elation_footer_title_weight = esc_attr( $mod );
            Customizer_Library_Styles()->add( array(
                'selectors'    => array( '.elation-page-title .elation-h-title,
				.woocommerce-products-header__title' ),
                'declarations' => array(
                'font-weight' => $elation_footer_title_weight,
            ),
            ) );
        }
        
        $setting = 'elation-page-title-spacing';
        $mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );
        
        if ( $mod !== customizer_library_get_default( $setting ) ) {
            $elation_ptitle_bspace = esc_attr( $mod );
            Customizer_Library_Styles()->add( array(
                'selectors'    => array( 'header.elation-page-title' ),
                'declarations' => array(
                'padding' => '0 0 ' . $elation_ptitle_bspace . 'px',
                'margin'  => '0 0 ' . ($elation_ptitle_bspace + 4) . 'px',
            ),
            ) );
        }
        
        $setting = 'elation-breadcrumbs-font-size';
        $mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );
        
        if ( $mod !== customizer_library_get_default( $setting ) ) {
            $elation_breadcrumbs_fsize = esc_attr( $mod );
            Customizer_Library_Styles()->add( array(
                'selectors'    => array( '.elation-breadcrumbs,
                .elation-pagetitle-cheader .elation-breadcrumbs' ),
                'declarations' => array(
                'font-size' => $elation_breadcrumbs_fsize . 'px',
            ),
            ) );
        }
        
        // WooCommerce Custom Settings
        
        if ( class_exists( 'WooCommerce' ) ) {
            $setting = 'elation-wc-product-col-space';
            $mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );
            
            if ( $mod !== customizer_library_get_default( $setting ) ) {
                $elation_wc_col_spacing = esc_attr( $mod );
                Customizer_Library_Styles()->add( array(
                    'selectors'    => array( '.woocommerce ul.products' ),
                    'declarations' => array(
                    'margin' => '0 -' . $elation_wc_col_spacing . 'px',
                ),
                ) );
                Customizer_Library_Styles()->add( array(
                    'selectors'    => array( '.woocommerce ul.products li.product' ),
                    'declarations' => array(
                    'margin'  => '0 0 ' . $elation_wc_col_spacing * 3 . 'px',
                    'padding' => '1px ' . $elation_wc_col_spacing . 'px 4px',
                ),
                ) );
                Customizer_Library_Styles()->add( array(
                    'selectors'    => array( '.woocommerce ul.products li.product .onsale' ),
                    'declarations' => array(
                    'right' => $elation_wc_col_spacing + 5 . 'px',
                ),
                ) );
                Customizer_Library_Styles()->add( array(
                    'selectors'    => array( '.woocommerce ul.products li.product .star-rating' ),
                    'declarations' => array(
                    'left' => $elation_wc_col_spacing + 6 . 'px',
                ),
                ) );
            }
            
            $setting = 'elation-wc-remove-result-sort';
            $mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );
            
            if ( $mod !== customizer_library_get_default( $setting ) ) {
                $elation_remove_resultsort = esc_attr( $mod );
                Customizer_Library_Styles()->add( array(
                    'selectors'    => array( '.woocommerce .woocommerce-result-count,
					.woocommerce .woocommerce-ordering' ),
                    'declarations' => array(
                    'display' => 'none',
                ),
                ) );
            }
            
            $setting = 'elation-wcproduct-img-sum-size';
            $mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );
            
            if ( $mod !== customizer_library_get_default( $setting ) ) {
                $elation_prod_img_size = esc_attr( $mod );
                Customizer_Library_Styles()->add( array(
                    'selectors'    => array( '.woocommerce #content div.product div.images,
                    .woocommerce div.product div.images,
                    .woocommerce-page #content div.product div.images,
                    .woocommerce-page div.product div.images' ),
                    'declarations' => array(
                    'width' => $elation_prod_img_size . '%',
                ),
                ) );
                Customizer_Library_Styles()->add( array(
                    'selectors'    => array( '.woocommerce #content div.product div.summary,
                    .woocommerce div.product div.summary,
                    .woocommerce-page #content div.product div.summary,
                    .woocommerce-page div.product div.summary' ),
                    'declarations' => array(
                    'width' => 100 - ($elation_prod_img_size + 4) . '%',
                ),
                ) );
            }
            
            $setting = 'elation-wccart-center-totals';
            $mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );
            
            if ( $mod !== customizer_library_get_default( $setting ) ) {
                $elation_wccart_center_totals = esc_attr( $mod );
                Customizer_Library_Styles()->add( array(
                    'selectors'    => array( '.woocommerce-cart .cart-collaterals .cart_totals' ),
                    'declarations' => array(
                    'float'  => 'none',
                    'margin' => '0 auto',
                ),
                ) );
            }
            
            $setting = 'elation-wccheckout-label-upper';
            $mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );
            
            if ( $mod !== customizer_library_get_default( $setting ) ) {
                $elation_wccheck_labelupper = esc_attr( $mod );
                Customizer_Library_Styles()->add( array(
                    'selectors'    => array( '.woocommerce-checkout form .form-row label' ),
                    'declarations' => array(
                    'font-size'      => '0.7em',
                    'text-transform' => 'uppercase',
                    'letter-spacing' => '1px',
                ),
                ) );
            }
            
            $setting = 'elation-wc-list-title-height';
            $mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );
            
            if ( $mod !== customizer_library_get_default( $setting ) ) {
                $elation_wc_title_height = esc_attr( $mod );
                Customizer_Library_Styles()->add( array(
                    'selectors'    => array( '.woocommerce ul.products li.product .woocommerce-loop-product__title' ),
                    'declarations' => array(
                    'min-height' => $elation_wc_title_height . 'px',
                ),
                ) );
            }
            
            $setting = 'elation-wc-list-title-size';
            $mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );
            
            if ( $mod !== customizer_library_get_default( $setting ) ) {
                $elation_wctitle_size = esc_attr( $mod );
                Customizer_Library_Styles()->add( array(
                    'selectors'    => array( 'body.woocommerce ul.products li.product .woocommerce-loop-product__title' ),
                    'declarations' => array(
                    'font-size' => $elation_wctitle_size . 'px',
                ),
                ) );
            }
            
            $setting = 'elation-wc-product-bottom-space';
            $mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );
            
            if ( $mod !== customizer_library_get_default( $setting ) ) {
                $elation_prod_bottom_space = esc_attr( $mod );
                Customizer_Library_Styles()->add( array(
                    'selectors'    => array( '.woocommerce ul.products li.product' ),
                    'declarations' => array(
                    'margin-bottom' => $elation_prod_bottom_space . 'px',
                ),
                ) );
            }
            
            $setting = 'elation-wc-mobile-onecol';
            $mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );
            
            if ( $mod !== customizer_library_get_default( $setting ) ) {
                $elation_mobile_prodonecol = esc_attr( $mod );
                Customizer_Library_Styles()->add( array(
                    'selectors'    => array( '.woocommerce ul.products li.product' ),
                    'declarations' => array(
                    'width' => '100% !important',
                ),
                    'media'        => '(max-width: 560px)',
                ) );
            }
        
        }
        
        // --------- Color Settings
        $setting = 'elation-primary-color';
        $mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );
        
        if ( $mod !== customizer_library_get_default( $setting ) ) {
            $elation_primary_color = sanitize_hex_color( $mod );
            Customizer_Library_Styles()->add( array(
                'selectors'    => array( '.main-navigation ul ul a:hover,
				.main-navigation ul ul a:focus,
				.main-navigation ul ul li.current-menu-item > a,
				.main-navigation ul ul li.current_page_item > a,
				.main-navigation ul ul li.current-menu-parent > a,
				.main-navigation ul ul li.current_page_parent > a,
				.main-navigation ul ul li.current-menu-ancestor > a,
				.main-navigation ul ul li.current_page_ancestor > a,
				
				.main-navigation.elation-nav-solid a:hover,
				.main-navigation.elation-nav-solid ul > li > a:hover,
				.main-navigation.elation-nav-solid ul > li > a:focus,
				.main-navigation.elation-nav-solid ul > li.current-menu-item > a,
				.main-navigation.elation-nav-solid ul > li.current-menu-ancestor > a,
				.main-navigation.elation-nav-solid ul > li.current-menu-parent > a,
				.main-navigation.elation-nav-solid ul > li.current_page_parent > a,
				.main-navigation.elation-nav-solid ul > li.current_page_ancestor > a,
				.main-navigation.elation-nav-solid .current_page_item > a,
				
				.main-navigation.elation-nav-block ul > li > a:hover span.nav-span-block,
				.main-navigation.elation-nav-block ul > li > a:focus span.nav-span-block,
				.main-navigation.elation-nav-block ul > li.current-menu-item > a span.nav-span-block,
				.main-navigation.elation-nav-block ul > li.current-menu-ancestor > a span.nav-span-block,
				.main-navigation.elation-nav-block ul > li.current-menu-parent > a span.nav-span-block,
				.main-navigation.elation-nav-block ul > li.current_page_parent > a span.nav-span-block,
				.main-navigation.elation-nav-block ul > li.current_page_ancestor > a span.nav-span-block,
				.main-navigation.elation-nav-block .current_page_item > a span.nav-span-block,
				
				.elation-widget-shortline .widget-title::after,
				.elation-widget-sideline .widget-title::after,
				.elation-side-social .social-icon,
                .error-btn a:hover,
                .elation-slider-container .elation-btn,
				.elation-readmore-btn:hover,
				.elation-numeric-navigation.square li a,
				.elation-numeric-navigation.square li a:hover,
				.elation-numeric-navigation.square li.active a,
				.elation-numeric-navigation.square li.disabled,
				.elation-numeric-navigation.circle li a,
				.elation-numeric-navigation.circle li a:hover,
				.elation-numeric-navigation.circle li.active a,
				.elation-numeric-navigation.circle li.disabled,
				.elation-numeric-navigation.squaretxt li a,
				.elation-numeric-navigation.squaretxt li a:hover,
				.elation-numeric-navigation.squaretxt li.active a,
				.elation-numeric-navigation.squaretxt li.disabled,
                #comments .comment-form input.submit:hover,
                .pag-btn-two .elation-loadmore,
				.elation-footdivide-shortline .footer-custom-block::after,
				.elation-footdivide-shortline ul.site-footer-widgets > li::after' ),
                'declarations' => array(
                'background-color' => $elation_primary_color,
            ),
            ) );
            Customizer_Library_Styles()->add( array(
                'selectors'    => array( 'a,
				.elation-numeric-navigation.circle li.prev a,
				.elation-numeric-navigation.circle li.next a,
				.elation-numeric-navigation.squaretxt li.prev a,
				.elation-numeric-navigation.squaretxt li.next a,
				.elation-footer-social-two #elation-bottombar-menu li a:hover,
                .elation-footer-social-two.footer-menu-vertical #elation-bottombar-menu li a:hover,
                .post-content .entry-meta a:hover,
                .post-content .entry-footer a:hover,
                .single-post .entry-meta a:hover,
                .single-post .entry-footer a:hover' ),
                'declarations' => array(
                'color' => $elation_primary_color,
            ),
            ) );
            Customizer_Library_Styles()->add( array(
                'selectors'    => array( '#site-navigation.main-navigation.elation-nav-plain ul > li > a:hover,
				#site-navigation.main-navigation.elation-nav-plain ul > li > a:focus,
				#site-navigation.main-navigation.elation-nav-plain ul > li.current-menu-item > a,
				#site-navigation.main-navigation.elation-nav-plain ul > li.current-menu-ancestor > a,
				#site-navigation.main-navigation.elation-nav-plain ul > li.current-menu-parent > a,
				#site-navigation.main-navigation.elation-nav-plain ul > li.current_page_parent > a,
				#site-navigation.main-navigation.elation-nav-plain ul > li.current_page_ancestor > a,
				#site-navigation.main-navigation.elation-nav-plain .current_page_item > a,
				
				#site-navigation.main-navigation.elation-nav-underline ul > li > a:hover,
				#site-navigation.main-navigation.elation-nav-underline ul > li > a:focus,
				#site-navigation.main-navigation.elation-nav-underline ul > li.current-menu-item > a,
				#site-navigation.main-navigation.elation-nav-underline ul > li.current-menu-ancestor > a,
				#site-navigation.main-navigation.elation-nav-underline ul > li.current-menu-parent > a,
				#site-navigation.main-navigation.elation-nav-underline ul > li.current_page_parent > a,
				#site-navigation.main-navigation.elation-nav-underline ul > li.current_page_ancestor > a,
				#site-navigation.main-navigation.elation-nav-underline .current_page_item > a' ),
                'declarations' => array(
                'color' => $elation_primary_color . ' !important',
            ),
            ) );
            Customizer_Library_Styles()->add( array(
                'selectors'    => array( '.main-navigation.elation-nav-underline ul > li > a:hover,
				.main-navigation.elation-nav-underline ul > li > a:focus,
				.main-navigation.elation-nav-underline ul > li.current-menu-item > a,
				.main-navigation.elation-nav-underline ul > li.current-menu-ancestor > a,
				.main-navigation.elation-nav-underline ul > li.current-menu-parent > a,
				.main-navigation.elation-nav-underline ul > li.current_page_parent > a,
				.main-navigation.elation-nav-underline ul > li.current_page_ancestor > a,
				.main-navigation.elation-nav-underline .current_page_item > a' ),
                'declarations' => array(
                'box-shadow' => '0 -4px 0 ' . $elation_primary_color . ' inset',
            ),
            ) );
            Customizer_Library_Styles()->add( array(
                'selectors'    => array( '.elation-scrollmore::before' ),
                'declarations' => array(
                'border-top-color' => $elation_primary_color,
            ),
            ) );
            
            if ( class_exists( 'WooCommerce' ) ) {
                if ( get_theme_mod( 'elation-btn-takeon-primary', customizer_library_get_default( 'elation-btn-takeon-primary' ) ) ) {
                    Customizer_Library_Styles()->add( array(
                        'selectors'    => array( '.single-product div.product form.cart .button,
						.woocommerce #respond input#submit.alt,
						.woocommerce a.button.alt,
						.woocommerce button.button.alt,
                        .woocommerce input.button.alt,
                        .wc-btn-color ul.products li.product a.button' ),
                        'declarations' => array(
                        'background-color' => $elation_primary_color,
                        'color'            => '#FFF',
                    ),
                    ) );
                }
                Customizer_Library_Styles()->add( array(
                    'selectors'    => array( '.woocommerce ul.products li.product .onsale,
					.woocommerce span.onsale,
					
					.woocommerce #respond input#submit.alt,
					.woocommerce a.button.alt,
					.woocommerce button.button.alt,
					.woocommerce input.button.alt,
					.woocommerce button.button.disabled,
					.woocommerce button.button.alt.disabled,
					.woocommerce button.button.disabled:hover,
					.woocommerce button.button.alt.disabled:hover,
					.woocommerce .cart .button:hover,
					.woocommerce-cart table.shop_table button:hover,
					.woocommerce form.checkout_coupon .form-row-last button:hover,
					.woocommerce.widget_shopping_cart .buttons a:hover' ),
                    'declarations' => array(
                    'background-color' => $elation_primary_color . '',
                ),
                ) );
                Customizer_Library_Styles()->add( array(
                    'selectors'    => array( '.star-rating span:before,
					p.stars:hover a:before,
					.woocommerce-form-coupon-toggle a:hover' ),
                    'declarations' => array(
                    'color' => $elation_primary_color . '',
                ),
                ) );
                Customizer_Library_Styles()->add( array(
                    'selectors'    => array( '.woocommerce-account.elation-wcaccount-style-default .is-active' ),
                    'declarations' => array(
                    'box-shadow' => '5px 0 0 ' . $elation_primary_color . ' inset',
                ),
                ) );
            }
        
        }
        
        $setting = 'elation-secondary-color';
        $mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );
        
        if ( $mod !== customizer_library_get_default( $setting ) ) {
            $elation_secondary_color = sanitize_hex_color( $mod );
            Customizer_Library_Styles()->add( array(
                'selectors'    => array( 'a:hover,
				a:focus,
				a:active' ),
                'declarations' => array(
                'color' => $elation_secondary_color,
            ),
            ) );
            
            if ( class_exists( 'WooCommerce' ) ) {
                Customizer_Library_Styles()->add( array(
                    'selectors'    => array( '.elation-slider-container .elation-btn:hover,
                    .single-product div.product form.cart .button:hover,
                    .woocommerce ul.products li.product a.button:hover,
                    .wc-btn-color ul.products li.product a.button:hover,
					.woocommerce #respond input#submit.alt:hover,
					.woocommerce a.button.alt:hover,
					.woocommerce button.button.alt:hover,
                    .woocommerce input.button.alt:hover,
                    .pag-btn-two .elation-loadmore:hover,
					.elation-numeric-navigation.square li a:hover,
					.elation-numeric-navigation.square li.active a,
					.elation-numeric-navigation.circle li a:hover,
					.elation-numeric-navigation.circle li.active a,
					.elation-numeric-navigation.squaretxt li a:hover,
					.elation-numeric-navigation.squaretxt li.active a' ),
                    'declarations' => array(
                    'background-color' => $elation_secondary_color,
                ),
                ) );
                Customizer_Library_Styles()->add( array(
                    'selectors'    => array( '.woocommerce div.product p.price,
					.woocommerce div.product span.price,
					.elation-wcproduct-tabstyle-default div.product .woocommerce-tabs ul.tabs li.active a,
					.elation-wcproduct-tabstyle-link div.product .woocommerce-tabs ul.tabs li.active a,
					.elation-wcproduct-tabstyle-vert div.product .woocommerce-tabs ul.tabs li.active a,
					.woocommerce-account .is-active a,
					.woocommerce-form-coupon-toggle a,
					.elation-numeric-navigation.circle li.prev a:hover,
					.elation-numeric-navigation.circle li.next a:hover,
					.elation-numeric-navigation.squaretxt li.prev a:hover,
					.elation-numeric-navigation.squaretxt li.next a:hover' ),
                    'declarations' => array(
                    'color' => $elation_secondary_color,
                ),
                ) );
                Customizer_Library_Styles()->add( array(
                    'selectors'    => array( '.elation-wc-3 ul.products li.product .button:hover,
                    .elation-wc-3 .related.products ul.products li.product .button:hover' ),
                    'declarations' => array(
                    'color' => $elation_secondary_color . ' !important',
                ),
                ) );
            }
        
        }
        
        // ---- Default Colors
        $setting = 'elation-boxed-bg-color';
        $mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );
        
        if ( $mod !== customizer_library_get_default( $setting ) ) {
            $boxed_bg_color = sanitize_hex_color( $mod );
            Customizer_Library_Styles()->add( array(
                'selectors'    => array( 'body.elation-site-boxed .site-boxed,
				body.elation-site-full-width-blocked.elation-joined-content .site-content-inner,
				body.elation-site-full-width-blocked.elation-break-content .content-area,
				body.elation-site-full-width-blocked.elation-break-content .widget-area,
				body.elation-site-full-width-blocked.elation-break-content .widget-area.widgets-apart .widget' ),
                'declarations' => array(
                'background-color' => $boxed_bg_color,
            ),
            ) );
        }
        
        // ---- Header
        $setting = 'elation-header-bg-color';
        $mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );
        
        if ( $mod !== customizer_library_get_default( $setting ) ) {
            $header_bg_color = sanitize_hex_color( $mod );
            Customizer_Library_Styles()->add( array(
                'selectors'    => array( 'body #page header.site-header,
				.site-header-wrap .header-search-block,
                body #page .site-header .site-bar-inner,
                .site-header.elation-header-grid .site-header-inner,
                .site-header .site-header-main,
                .site-header .main-navigation' ),
                'declarations' => array(
                'background-color' => $header_bg_color,
            ),
            ) );
            Customizer_Library_Styles()->add( array(
                'selectors'    => array( 'body #page header.site-header,
                button.menu-toggle' ),
                'declarations' => array(
                'color' => elation_getOppColor( $header_bg_color ),
            ),
            ) );
            Customizer_Library_Styles()->add( array(
                'selectors'    => array( '.main-navigation ul ul' ),
                'declarations' => array(
                'color' => '#333',
            ),
            ) );
        }
        
        $setting = 'elation-header-font-color';
        $mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );
        
        if ( $mod !== customizer_library_get_default( $setting ) ) {
            $header_font_color = sanitize_hex_color( $mod );
            Customizer_Library_Styles()->add( array(
                'selectors'    => array( 'body #page header.site-header,
                button.menu-toggle,
                .main-navigation ul ul' ),
                'declarations' => array(
                'color' => $header_font_color,
            ),
            ) );
        }
        
        $setting = 'elation-topbar-bg-color';
        $mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );
        
        if ( $mod !== customizer_library_get_default( $setting ) ) {
            $topbar_bg_color = sanitize_hex_color( $mod );
            Customizer_Library_Styles()->add( array(
                'selectors'    => array( '.site-header .site-bar,
				.site-header-topbar .header-search-block,
				body #page .site-header .site-bar-inner' ),
                'declarations' => array(
                'background-color' => $topbar_bg_color,
            ),
            ) );
        }
        
        $setting = 'elation-topbar-font-color';
        $mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );
        
        if ( $mod !== customizer_library_get_default( $setting ) ) {
            $topbar_font_color = sanitize_hex_color( $mod );
            Customizer_Library_Styles()->add( array(
                'selectors'    => array( '.site-header .site-bar,
				.site-header-topbar button.header-search' ),
                'declarations' => array(
                'color' => $topbar_font_color,
            ),
            ) );
        }
        
        // Only if Navigation is NOT removed
        
        if ( !get_theme_mod( 'elation-remove-main-nav', customizer_library_get_default( 'elation-remove-main-nav' ) ) ) {
            $setting = 'elation-nav-bg-color';
            $mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );
            
            if ( $mod !== customizer_library_get_default( $setting ) ) {
                $nav_bg_color = sanitize_hex_color( $mod );
                Customizer_Library_Styles()->add( array(
                    'selectors'    => array( '.site-header.elation-color-nav .main-navigation,
                    .elation-search-slide .site-header-centered .site-header-wrap .header-search-block,
                    .elation-search-fade .site-header-centered .site-header-wrap .header-search-block' ),
                    'declarations' => array(
                    'background-color' => $nav_bg_color,
                ),
                ) );
            }
            
            $setting = 'elation-nav-font-color';
            $mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );
            
            if ( $mod !== customizer_library_get_default( $setting ) ) {
                $nav_font_color = sanitize_hex_color( $mod );
                Customizer_Library_Styles()->add( array(
                    'selectors'    => array( 'body #page header.site-header .main-navigation,
                    button.menu-toggle,
                    .site-header-centered .main-navigation button.header-search' ),
                    'declarations' => array(
                    'color' => $nav_font_color,
                ),
                ) );
            }
            
            $setting = 'elation-nav-drop-bg-color';
            $setting_opacity = 'elation-nav-drop-opacity';
            $mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );
            $mod_opacity = get_theme_mod( $setting_opacity, customizer_library_get_default( $setting_opacity ) );
            
            if ( $mod !== customizer_library_get_default( $setting ) || $mod_opacity !== customizer_library_get_default( $setting_opacity ) ) {
                $color = sanitize_hex_color( $mod );
                $rgba_color = customizer_library_hex_to_rgb( $color );
                $opacity = esc_attr( $mod_opacity );
                Customizer_Library_Styles()->add( array(
                    'selectors'    => array( '.main-navigation ul ul' ),
                    'declarations' => array(
                    'background-color' => 'rgba(' . $rgba_color['r'] . ', ' . $rgba_color['g'] . ', ' . $rgba_color['b'] . ', ' . $opacity . ');',
                ),
                ) );
            }
            
            $setting = 'elation-nav-drop-font-color';
            $mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );
            
            if ( $mod !== customizer_library_get_default( $setting ) ) {
                $nav_dropfont_color = sanitize_hex_color( $mod );
                Customizer_Library_Styles()->add( array(
                    'selectors'    => array( 'body #page header.site-header .main-navigation ul ul' ),
                    'declarations' => array(
                    'color' => $nav_dropfont_color,
                ),
                ) );
            }
            
            $setting = 'elation-nav-selected-color';
            $mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );
            
            if ( $mod !== customizer_library_get_default( $setting ) ) {
                $nav_selected_color = sanitize_hex_color( $mod );
                Customizer_Library_Styles()->add( array(
                    'selectors'    => array( '.main-navigation ul ul a:hover,
					.main-navigation ul ul a:focus,
					.main-navigation ul ul li.current-menu-item > a,
					.main-navigation ul ul li.current_page_item > a,
					.main-navigation ul ul li.current-menu-parent > a,
					.main-navigation ul ul li.current_page_parent > a,
					.main-navigation ul ul li.current-menu-ancestor > a,
					.main-navigation ul ul li.current_page_ancestor > a,
					.main-navigation.elation-nav-solid a:hover,
					.main-navigation.elation-nav-solid ul > li > a:hover,
					.main-navigation.elation-nav-solid ul > li > a:focus,
					.main-navigation.elation-nav-solid ul > li.current-menu-item > a,
					.main-navigation.elation-nav-solid ul > li.current-menu-ancestor > a,
					.main-navigation.elation-nav-solid ul > li.current-menu-parent > a,
					.main-navigation.elation-nav-solid ul > li.current_page_parent > a,
					.main-navigation.elation-nav-solid ul > li.current_page_ancestor > a,
					.main-navigation.elation-nav-solid .current_page_item > a,
					.main-navigation.elation-nav-block ul > li > a:hover span.nav-span-block,
					.main-navigation.elation-nav-block ul > li > a:focus span.nav-span-block,
					.main-navigation.elation-nav-block ul > li.current-menu-item > a span.nav-span-block,
					.main-navigation.elation-nav-block ul > li.current-menu-ancestor > a span.nav-span-block,
					.main-navigation.elation-nav-block ul > li.current-menu-parent > a span.nav-span-block,
					.main-navigation.elation-nav-block ul > li.current_page_parent > a span.nav-span-block,
					.main-navigation.elation-nav-block ul > li.current_page_ancestor > a span.nav-span-block,
					.main-navigation.elation-nav-block .current_page_item > a span.nav-span-block' ),
                    'declarations' => array(
                    'background-color' => $nav_selected_color,
                ),
                ) );
                Customizer_Library_Styles()->add( array(
                    'selectors'    => array( '.main-navigation.elation-nav-plain ul > li > a:hover,
					.main-navigation.elation-nav-plain ul > li > a:focus,
					.main-navigation.elation-nav-plain ul > li.current-menu-item > a,
					.main-navigation.elation-nav-plain ul > li.current-menu-ancestor > a,
					.main-navigation.elation-nav-plain ul > li.current-menu-parent > a,
					.main-navigation.elation-nav-plain ul > li.current_page_parent > a,
					.main-navigation.elation-nav-plain ul > li.current_page_ancestor > a,
					.main-navigation.elation-nav-plain .current_page_item > a,
					
					.main-navigation.elation-nav-underline ul > li > a:hover,
					.main-navigation.elation-nav-underline ul > li > a:focus,
					.main-navigation.elation-nav-underline ul > li.current-menu-item > a,
					.main-navigation.elation-nav-underline ul > li.current-menu-ancestor > a,
					.main-navigation.elation-nav-underline ul > li.current-menu-parent > a,
					.main-navigation.elation-nav-underline ul > li.current_page_parent > a,
					.main-navigation.elation-nav-underline ul > li.current_page_ancestor > a,
					.main-navigation.elation-nav-underline .current_page_item > a' ),
                    'declarations' => array(
                    'color' => $nav_selected_color . ' !important',
                ),
                ) );
                Customizer_Library_Styles()->add( array(
                    'selectors'    => array( '.main-navigation.elation-nav-underline ul > li > a:hover,
					.main-navigation.elation-nav-underline ul > li > a:focus,
					.main-navigation.elation-nav-underline ul > li.current-menu-item > a,
					.main-navigation.elation-nav-underline ul > li.current-menu-ancestor > a,
					.main-navigation.elation-nav-underline ul > li.current-menu-parent > a,
					.main-navigation.elation-nav-underline ul > li.current_page_parent > a,
					.main-navigation.elation-nav-underline ul > li.current_page_ancestor > a,
					.main-navigation.elation-nav-underline .current_page_item > a' ),
                    'declarations' => array(
                    'box-shadow' => '0 -4px 0 ' . $nav_selected_color . ' inset',
                ),
                ) );
                Customizer_Library_Styles()->add( array(
                    'selectors'    => array( '.main-navigation.elation-nav-plain ul ul li a:hover,
					.main-navigation.elation-nav-underline ul ul li a:hover' ),
                    'declarations' => array(
                    'color' => '#FFF !important',
                ),
                ) );
                Customizer_Library_Styles()->add( array(
                    'selectors'    => array( '#site-navigation.main-navigation ul > li > a:hover,
					#site-navigation.main-navigation ul > li.current-menu-item > a,
					#site-navigation.main-navigation ul > li.current-menu-ancestor > a,
					#site-navigation.main-navigation ul > li.current-menu-parent > a,
					#site-navigation.main-navigation ul > li.current_page_parent > a,
					#site-navigation.main-navigation ul > li.current_page_ancestor > a,
					#site-navigation.main-navigation .current_page_item > a,
					#site-navigation.main-navigation ul > li.current-menu-item > a span.nav-span-block,
					#site-navigation.main-navigation ul > li.current-menu-ancestor > a span.nav-span-block,
					#site-navigation.main-navigation ul > li.current-menu-parent > a span.nav-span-block,
					#site-navigation.main-navigation ul > li.current_page_parent > a span.nav-span-block,
					#site-navigation.main-navigation ul > li.current_page_ancestor > a span.nav-span-block,
					#site-navigation.main-navigation .current_page_item > a span.nav-span-block,
					#site-navigation.main-navigation.elation-nav-block ul > li > a:hover span.nav-span-block,
					#site-navigation.main-navigation.elation-nav-plain ul li a:hover,
					#site-navigation.main-navigation.elation-nav-solid ul li a:hover,
					#site-navigation.main-navigation.elation-nav-underline ul li a:hover,
					#site-navigation.main-navigation.elation-nav-blocks ul li a:hover,
					#site-navigation.main-navigation.elation-nav-blocks ul li a:hover span.nav-span-block' ),
                    'declarations' => array(
                    'color' => $nav_selected_color . ' !important',
                ),
                    'media'        => esc_attr( $elation_resp_menu ),
                ) );
            }
            
            $setting = 'elation-nav-selected-font-color';
            $mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );
            
            if ( $mod !== customizer_library_get_default( $setting ) ) {
                $elation_navselected_fontcolor = sanitize_hex_color( $mod );
                Customizer_Library_Styles()->add( array(
                    'selectors'    => array( '.main-navigation ul ul a:hover,
					.main-navigation ul ul a:focus,
					.main-navigation ul ul li.current-menu-item > a,
					.main-navigation ul ul li.current_page_item > a,
					.main-navigation ul ul li.current-menu-parent > a,
					.main-navigation ul ul li.current_page_parent > a,
					.main-navigation ul ul li.current-menu-ancestor > a,
					.main-navigation ul ul li.current_page_ancestor > a,
					.main-navigation.elation-nav-plain ul ul li a:hover,
					.main-navigation.elation-nav-underline ul ul li a:hover,
					.main-navigation.elation-nav-solid ul a:hover,
					.main-navigation.elation-nav-solid ul > li > a:hover,
					.main-navigation.elation-nav-solid ul > li > a:focus,
					.main-navigation.elation-nav-solid ul > li.current-menu-item > a,
					.main-navigation.elation-nav-solid ul > li.current-menu-ancestor > a,
					.main-navigation.elation-nav-solid ul > li.current-menu-parent > a,
					.main-navigation.elation-nav-solid ul > li.current_page_parent > a,
					.main-navigation.elation-nav-solid ul > li.current_page_ancestor > a,
					.main-navigation.elation-nav-solid .current_page_item > a,
					.main-navigation.elation-nav-block ul > li > a:hover span.nav-span-block,
					.main-navigation.elation-nav-block ul > li > a:focus span.nav-span-block,
					.main-navigation.elation-nav-block ul > li.current-menu-item > a span.nav-span-block,
					.main-navigation.elation-nav-block ul > li.current-menu-ancestor > a span.nav-span-block,
					.main-navigation.elation-nav-block ul > li.current-menu-parent > a span.nav-span-block,
					.main-navigation.elation-nav-block ul > li.current_page_parent > a span.nav-span-block,
					.main-navigation.elation-nav-block ul > li.current_page_ancestor > a span.nav-span-block,
					.main-navigation.elation-nav-block .current_page_item > a span.nav-span-block' ),
                    'declarations' => array(
                    'color' => $elation_navselected_fontcolor . ' !important',
                ),
                ) );
                Customizer_Library_Styles()->add( array(
                    'selectors'    => array( '.main-navigation.elation-nav-plain ul > li > a:hover,
					.main-navigation.elation-nav-plain ul > li > a:focus,
					.main-navigation.elation-nav-plain ul > li.current-menu-item > a,
					.main-navigation.elation-nav-plain ul > li.current-menu-ancestor > a,
					.main-navigation.elation-nav-plain ul > li.current-menu-parent > a,
					.main-navigation.elation-nav-plain ul > li.current_page_parent > a,
					.main-navigation.elation-nav-plain ul > li.current_page_ancestor > a,
					.main-navigation.elation-nav-plain .current_page_item > a,
					
					.main-navigation.elation-nav-underline ul > li > a:hover,
					.main-navigation.elation-nav-underline ul > li > a:focus,
					.main-navigation.elation-nav-underline ul > li.current-menu-item > a,
					.main-navigation.elation-nav-underline ul > li.current-menu-ancestor > a,
					.main-navigation.elation-nav-underline ul > li.current-menu-parent > a,
					.main-navigation.elation-nav-underline ul > li.current_page_parent > a,
					.main-navigation.elation-nav-underline ul > li.current_page_ancestor > a,
					.main-navigation.elation-nav-underline .current_page_item > a' ),
                    'declarations' => array(
                    'color' => $elation_navselected_fontcolor . ' !important',
                ),
                ) );
            }
        
        }
        
        // Nav NOT removed
        
        if ( get_theme_mod( 'elation-enable-sticky-header', customizer_library_get_default( 'elation-enable-sticky-header' ) ) ) {
            $setting = 'elation-stick-head-bg-color';
            $setting_opacity = 'elation-stick-head-drop-opacity';
            $mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );
            $mod_opacity = get_theme_mod( $setting_opacity, customizer_library_get_default( $setting_opacity ) );
            
            if ( $mod !== customizer_library_get_default( $setting ) || $mod_opacity !== customizer_library_get_default( $setting_opacity ) ) {
                $color = sanitize_hex_color( $mod );
                $rgba_color = customizer_library_hex_to_rgb( $color );
                $opacity = esc_attr( $mod_opacity );
                Customizer_Library_Styles()->add( array(
                    'selectors'    => array( '.site-header .stick-header.animate-sticky-header.stuck' ),
                    'declarations' => array(
                    'background-color' => 'rgba(' . $rgba_color['r'] . ', ' . $rgba_color['g'] . ', ' . $rgba_color['b'] . ', ' . $opacity . ');',
                ),
                ) );
                Customizer_Library_Styles()->add( array(
                    'selectors'    => array( '.site-stick-header.stick-header.stuck .site-header-wrap .main-navigation' ),
                    'declarations' => array(
                    'background' => 'none !important',
                ),
                ) );
            }
            
            $setting = 'elation-stick-head-font-color';
            $mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );
            
            if ( $mod !== customizer_library_get_default( $setting ) ) {
                $sitetitle_color = sanitize_hex_color( $mod );
                Customizer_Library_Styles()->add( array(
                    'selectors'    => array( '.site-stick-header.stick-header.stuck .main-navigation ul#elation-main-menu > li > a' ),
                    'declarations' => array(
                    'color' => $sitetitle_color,
                ),
                ) );
            }
        
        }
        
        $setting = 'elation-site-title-color';
        $mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );
        
        if ( $mod !== customizer_library_get_default( $setting ) ) {
            $sitetitle_color = sanitize_hex_color( $mod );
            Customizer_Library_Styles()->add( array(
                'selectors'    => array( '.site-title a' ),
                'declarations' => array(
                'color' => $sitetitle_color,
            ),
            ) );
        }
        
        $setting = 'elation-site-tagline-color';
        $mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );
        
        if ( $mod !== customizer_library_get_default( $setting ) ) {
            $sitetagline_color = sanitize_hex_color( $mod );
            Customizer_Library_Styles()->add( array(
                'selectors'    => array( '.site-description' ),
                'declarations' => array(
                'color' => $sitetagline_color,
            ),
            ) );
        }
        
        // ---- Content
        $setting = 'elation-content-title-bg-color';
        $mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );
        
        if ( $mod !== customizer_library_get_default( $setting ) ) {
            $page_title_color = sanitize_hex_color( $mod );
            Customizer_Library_Styles()->add( array(
                'selectors'    => array( '.elation-pagetitle-banner' ),
                'declarations' => array(
                'background-color' => $page_title_color,
            ),
            ) );
        }
        
        $setting = 'elation-content-title-font-color';
        $mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );
        
        if ( $mod !== customizer_library_get_default( $setting ) ) {
            $page_title_color = sanitize_hex_color( $mod );
            Customizer_Library_Styles()->add( array(
                'selectors'    => array( '.elation-h-title' ),
                'declarations' => array(
                'color' => $page_title_color,
            ),
            ) );
        }
        
        $setting = 'elation-content-bc-font-color';
        $mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );
        
        if ( $mod !== customizer_library_get_default( $setting ) ) {
            $page_bc_color = sanitize_hex_color( $mod );
            Customizer_Library_Styles()->add( array(
                'selectors'    => array( '.elation-breadcrumbs' ),
                'declarations' => array(
                'color' => $page_bc_color,
            ),
            ) );
        }
        
        $setting = 'elation-content-head-font-color';
        $mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );
        
        if ( $mod !== customizer_library_get_default( $setting ) ) {
            $page_heading_color = sanitize_hex_color( $mod );
            Customizer_Library_Styles()->add( array(
                'selectors'    => array( '.site-content-inner h1,
				.site-content-inner h2,
				.site-content-inner h3,
				.site-content-inner h4,
				.site-content-inner h5,
				.site-content-inner h6,
				.widget-area .widget-title' ),
                'declarations' => array(
                'color' => $page_heading_color,
            ),
            ) );
        }
        
        $setting = 'elation-content-font-color';
        $mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );
        
        if ( $mod !== customizer_library_get_default( $setting ) ) {
            $page_font_color = sanitize_hex_color( $mod );
            Customizer_Library_Styles()->add( array(
                'selectors'    => array( '.site-content-inner' ),
                'declarations' => array(
                'color' => $page_font_color,
            ),
            ) );
        }
        
        $setting = 'elation-widget-head-font-color';
        $mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );
        
        if ( $mod !== customizer_library_get_default( $setting ) ) {
            $page_wt_color = sanitize_hex_color( $mod );
            Customizer_Library_Styles()->add( array(
                'selectors'    => array( '.widget-area .widget-title' ),
                'declarations' => array(
                'color' => $page_wt_color,
            ),
            ) );
        }
        
        $setting = 'elation-widget-font-color';
        $mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );
        
        if ( $mod !== customizer_library_get_default( $setting ) ) {
            $page_wa_color = sanitize_hex_color( $mod );
            Customizer_Library_Styles()->add( array(
                'selectors'    => array( '.widget-area' ),
                'declarations' => array(
                'color' => $page_wa_color,
            ),
            ) );
        }
        
        $setting = 'elation-content-link-color';
        $mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );
        
        if ( $mod !== customizer_library_get_default( $setting ) ) {
            $page_cl_color = sanitize_hex_color( $mod );
            Customizer_Library_Styles()->add( array(
                'selectors'    => array( '.site-content-inner a,
				.elation-breadcrumbs a,
                .elation-pagetitle-cheader .elation-breadcrumbs a,
                .post-content .entry-meta a,
                .post-content .entry-footer a,
                .single-post .entry-meta a,
                .single-post .entry-footer a' ),
                'declarations' => array(
                'color' => $page_cl_color,
            ),
            ) );
        }
        
        $setting = 'elation-content-link-hover-color';
        $mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );
        
        if ( $mod !== customizer_library_get_default( $setting ) ) {
            $page_clh_color = sanitize_hex_color( $mod );
            Customizer_Library_Styles()->add( array(
                'selectors'    => array( '.site-content-inner a:hover,
				.elation-breadcrumbs a:hover,
                .elation-pagetitle-cheader .elation-breadcrumbs a:hover,
                .post-content .entry-meta a:hover,
                .post-content .entry-footer a:hover,
                .single-post .entry-meta a:hover,
                .single-post .entry-footer a:hover' ),
                'declarations' => array(
                'color' => $page_clh_color,
            ),
            ) );
        }
        
        $setting = 'elation-widgets-link-color';
        $mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );
        
        if ( $mod !== customizer_library_get_default( $setting ) ) {
            $page_cl_color = sanitize_hex_color( $mod );
            Customizer_Library_Styles()->add( array(
                'selectors'    => array( '.widget-area a' ),
                'declarations' => array(
                'color' => $page_cl_color,
            ),
            ) );
        }
        
        $setting = 'elation-widgets-link-hover-color';
        $mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );
        
        if ( $mod !== customizer_library_get_default( $setting ) ) {
            $page_clh_color = sanitize_hex_color( $mod );
            Customizer_Library_Styles()->add( array(
                'selectors'    => array( '.widget-area a:hover' ),
                'declarations' => array(
                'color' => $page_clh_color,
            ),
            ) );
        }
        
        // ---- Blog Pagination Colors
        $setting = 'elation-blog-pagination-color';
        $mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );
        
        if ( $mod !== customizer_library_get_default( $setting ) ) {
            $blogpag_bg_color = sanitize_hex_color( $mod );
            Customizer_Library_Styles()->add( array(
                'selectors'    => array( '.elation-numeric-navigation.square li a,
				.elation-numeric-navigation.square li a:hover,
				.elation-numeric-navigation.square li.active a,
				.elation-numeric-navigation.square li.disabled,
				.elation-numeric-navigation.circle li a,
				.elation-numeric-navigation.circle li a:hover,
				.elation-numeric-navigation.circle li.active a,
				.elation-numeric-navigation.circle li.disabled,
				.elation-numeric-navigation.squaretxt li a,
				.elation-numeric-navigation.squaretxt li a:hover,
				.elation-numeric-navigation.squaretxt li.active a,
				.elation-numeric-navigation.squaretxt li.disabled' ),
                'declarations' => array(
                'background-color' => $blogpag_bg_color,
            ),
            ) );
            Customizer_Library_Styles()->add( array(
                'selectors'    => array( '.elation-numeric-navigation.circle li.prev a,
				.elation-numeric-navigation.circle li.next a,
				.elation-numeric-navigation.squaretxt li.prev a,
				.elation-numeric-navigation.squaretxt li.next a' ),
                'declarations' => array(
                'color' => $blogpag_bg_color,
            ),
            ) );
        }
        
        $setting = 'elation-blog-pagination-hover-color';
        $mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );
        
        if ( $mod !== customizer_library_get_default( $setting ) ) {
            $blogpag_hover_color = sanitize_hex_color( $mod );
            Customizer_Library_Styles()->add( array(
                'selectors'    => array( '.elation-numeric-navigation.square li a:hover,
				.elation-numeric-navigation.square li.active a,
				.elation-numeric-navigation.circle li a:hover,
				.elation-numeric-navigation.circle li.active a,
				.elation-numeric-navigation.squaretxt li a:hover,
				.elation-numeric-navigation.squaretxt li.active a' ),
                'declarations' => array(
                'background-color' => $blogpag_hover_color,
            ),
            ) );
            Customizer_Library_Styles()->add( array(
                'selectors'    => array( '.elation-numeric-navigation.circle li.prev a:hover,
				.elation-numeric-navigation.circle li.next a:hover,
				.elation-numeric-navigation.squaretxt li.prev a:hover,
				.elation-numeric-navigation.squaretxt li.next a:hover,
				.elation-numeric-navigation.numbers li a:hover,
				.elation-numeric-navigation.numbers li.active a,
				.elation-numeric-navigation.numbers li.prev a:hover,
				.elation-numeric-navigation.numbers li.next a:hover' ),
                'declarations' => array(
                'color' => $blogpag_hover_color,
            ),
            ) );
        }
        
        // ---- Footer
        $setting = 'elation-footer-bg-color';
        $mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );
        
        if ( $mod !== customizer_library_get_default( $setting ) ) {
            $footer_bg_color = sanitize_hex_color( $mod );
            Customizer_Library_Styles()->add( array(
                'selectors'    => array( 'body.elation-site-full-width .site-footer,
				body.elation-site-boxed .site-footer,
				body.elation-site-full-width-blocked .site-footer' ),
                'declarations' => array(
                'background-color' => $footer_bg_color,
            ),
            ) );
        }
        
        $setting = 'elation-footer-font-color';
        $mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );
        
        if ( $mod !== customizer_library_get_default( $setting ) ) {
            $footer_font_color = sanitize_hex_color( $mod );
            Customizer_Library_Styles()->add( array(
                'selectors'    => array( '.site-footer .site-footer-inner' ),
                'declarations' => array(
                'color' => $footer_font_color,
            ),
            ) );
        }
        
        $setting = 'elation-footer-title-font-color';
        $mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );
        
        if ( $mod !== customizer_library_get_default( $setting ) ) {
            $footer_title_color = sanitize_hex_color( $mod );
            Customizer_Library_Styles()->add( array(
                'selectors'    => array( '.site-footer .widget-title' ),
                'declarations' => array(
                'color' => $footer_title_color,
            ),
            ) );
        }
        
        $setting = 'elation-footer-social-icons-color';
        $mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );
        
        if ( $mod !== customizer_library_get_default( $setting ) ) {
            $footer_si_color = sanitize_hex_color( $mod );
            Customizer_Library_Styles()->add( array(
                'selectors'    => array( '.elation-footer-social .site-footer-icons .social-icon' ),
                'declarations' => array(
                'color' => $footer_si_color,
            ),
            ) );
        }
        
        $setting = 'elation-footer-link-color';
        $mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );
        
        if ( $mod !== customizer_library_get_default( $setting ) ) {
            $footerl_color = sanitize_hex_color( $mod );
            Customizer_Library_Styles()->add( array(
                'selectors'    => array( '.site-footer .site-footer-inner a,
                .elation-footer-social-two #elation-bottombar-menu li a,
                .elation-footer-social-two.footer-menu-vertical #elation-bottombar-menu li a' ),
                'declarations' => array(
                'color' => $footerl_color,
            ),
            ) );
        }
        
        $setting = 'elation-footer-link-hover-color';
        $mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );
        
        if ( $mod !== customizer_library_get_default( $setting ) ) {
            $footerlh_color = sanitize_hex_color( $mod );
            Customizer_Library_Styles()->add( array(
                'selectors'    => array( '.site-footer .site-footer-inner a:hover,
                .elation-footer-social-two #elation-bottombar-menu li a:hover,
                .elation-footer-social-two.footer-menu-vertical #elation-bottombar-menu li a:hover' ),
                'declarations' => array(
                'color' => $footerlh_color,
            ),
            ) );
        }
        
        $setting = 'elation-bottombar-bg-color';
        $mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );
        
        if ( $mod !== customizer_library_get_default( $setting ) ) {
            $bottombar_bg_color = sanitize_hex_color( $mod );
            Customizer_Library_Styles()->add( array(
                'selectors'    => array( '.site-footer .site-bar,
				.site-footer .site-bar .site-bar-inner' ),
                'declarations' => array(
                'background-color' => $bottombar_bg_color,
            ),
            ) );
        }
        
        $setting = 'elation-bottombar-font-color';
        $mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );
        
        if ( $mod !== customizer_library_get_default( $setting ) ) {
            $bottombar_font_color = sanitize_hex_color( $mod );
            Customizer_Library_Styles()->add( array(
                'selectors'    => array( '.site-footer .site-bar' ),
                'declarations' => array(
                'color' => $bottombar_font_color,
            ),
            ) );
        }
        
        $setting = 'elation-bottombar-link-color';
        $mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );
        
        if ( $mod !== customizer_library_get_default( $setting ) ) {
            $bottombarl_color = sanitize_hex_color( $mod );
            Customizer_Library_Styles()->add( array(
                'selectors'    => array( '.site-footer .site-bar-text a,
				.site-footer .site-bar .site-bar-inner a' ),
                'declarations' => array(
                'color' => $bottombarl_color,
            ),
            ) );
        }
        
        $setting = 'elation-bottombar-link-hover-color';
        $mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );
        
        if ( $mod !== customizer_library_get_default( $setting ) ) {
            $bottombarlh_color = sanitize_hex_color( $mod );
            Customizer_Library_Styles()->add( array(
                'selectors'    => array( '.site-footer .site-bar-text a:hover,
				.site-footer .site-bar .social-icon:hover,
				.site-footer #elation-bottombar-menu li a:hover' ),
                'declarations' => array(
                'color' => $bottombarlh_color,
            ),
            ) );
        }
        
        // --------- Color Settings
        // --------- Mobile Settings
        $setting = 'elation-mobile-title-size';
        $mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );
        
        if ( $mod !== customizer_library_get_default( $setting ) ) {
            $elation_mobnavbtn_font_size = esc_attr( $mod );
            Customizer_Library_Styles()->add( array(
                'selectors'    => array( '.site-title' ),
                'declarations' => array(
                'font-size' => $elation_mobnavbtn_font_size . 'px !important',
            ),
                'media'        => esc_attr( $elation_resp_menu ),
            ) );
        }
        
        $setting = 'elation-mobile-tagline-size';
        $mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );
        
        if ( $mod !== customizer_library_get_default( $setting ) ) {
            $elation_mobnavbtn_font_size = esc_attr( $mod );
            Customizer_Library_Styles()->add( array(
                'selectors'    => array( '.site-description' ),
                'declarations' => array(
                'font-size' => $elation_mobnavbtn_font_size . 'px !important',
            ),
                'media'        => esc_attr( $elation_resp_menu ),
            ) );
        }
        
        $setting = 'elation-onmobile-remove-topbar';
        $mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );
        
        if ( $mod !== customizer_library_get_default( $setting ) ) {
            $elation_mobile_topbar = esc_attr( $mod );
            Customizer_Library_Styles()->add( array(
                'selectors'    => array( '.site-header .site-bar' ),
                'declarations' => array(
                'display' => 'none !important',
            ),
                'media'        => '(max-width: ' . esc_attr( $elation_resp_mobile ) . 'px)',
            ) );
        }
        
        $setting = 'elation-onmobile-remove-headsearch';
        $mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );
        
        if ( $mod !== customizer_library_get_default( $setting ) ) {
            $elation_mobile_topbar = esc_attr( $mod );
            Customizer_Library_Styles()->add( array(
                'selectors'    => array( '.site-header .site-bar button.header-search,
                .header-search-block, .header-search-elation,
                button.header-search' ),
                'declarations' => array(
                'display' => 'none !important',
            ),
                'media'        => '(max-width: ' . esc_attr( $elation_resp_mobile ) . 'px)',
            ) );
        }
        
        $setting = 'elation-onmobile-remove-logo';
        $mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );
        
        if ( $mod !== customizer_library_get_default( $setting ) ) {
            $elation_mobile_topbar = esc_attr( $mod );
            Customizer_Library_Styles()->add( array(
                'selectors'    => array( 'a.custom-logo-link' ),
                'declarations' => array(
                'display' => 'none !important',
            ),
                'media'        => '(max-width: ' . esc_attr( $elation_resp_mobile ) . 'px)',
            ) );
        }
        
        $setting = 'elation-onmobile-remove-sidesocial';
        $mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );
        
        if ( $mod !== customizer_library_get_default( $setting ) ) {
            $elation_mobile_topbar = esc_attr( $mod );
            Customizer_Library_Styles()->add( array(
                'selectors'    => array( '.elation-side-social' ),
                'declarations' => array(
                'display' => 'none !important',
            ),
                'media'        => '(max-width: ' . esc_attr( $elation_resp_mobile ) . 'px)',
            ) );
        }
        
        $setting = 'elation-onmobile-remove-stickyheader';
        $mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );
        
        if ( $mod !== customizer_library_get_default( $setting ) ) {
            $elation_mobile_topbar = esc_attr( $mod );
            Customizer_Library_Styles()->add( array(
                'selectors'    => array( '.site-stick-header.stick-header.stuck' ),
                'declarations' => array(
                'position' => 'relative !important',
                'top'      => '0 !important',
            ),
                'media'        => '(max-width: ' . esc_attr( $elation_resp_mobile ) . 'px)',
            ) );
            Customizer_Library_Styles()->add( array(
                'selectors'    => array( '.site-stick-header.stick-header.stuck .site-stick-inner' ),
                'declarations' => array(
                'display' => 'block !important',
            ),
                'media'        => '(max-width: ' . esc_attr( $elation_resp_mobile ) . 'px)',
            ) );
        }
        
        $setting = 'elation-onmobile-remove-header-bgimg';
        $mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );
        
        if ( $mod !== customizer_library_get_default( $setting ) ) {
            $elation_mobile_headbgimg = esc_attr( $mod );
            Customizer_Library_Styles()->add( array(
                'selectors'    => array( '.site-header.elation-bgheader-img' ),
                'declarations' => array(
                'background-image' => 'none !important',
            ),
                'media'        => '(max-width: ' . esc_attr( $elation_resp_mobile ) . 'px)',
            ) );
        }
        
        $setting = 'elation-onmobile-remove-footer-bgimg';
        $mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );
        
        if ( $mod !== customizer_library_get_default( $setting ) ) {
            $elation_mobile_footbgimg = esc_attr( $mod );
            Customizer_Library_Styles()->add( array(
                'selectors'    => array( '.site-footer.elation-bgfooter-img' ),
                'declarations' => array(
                'background-image' => 'none !important',
            ),
                'media'        => '(max-width: ' . esc_attr( $elation_resp_mobile ) . 'px)',
            ) );
        }
        
        $setting = 'elation-onmobile-remove-bottombar';
        $mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );
        
        if ( $mod !== customizer_library_get_default( $setting ) ) {
            $elation_mobile_footbgimg = esc_attr( $mod );
            Customizer_Library_Styles()->add( array(
                'selectors'    => array( '.site-footer .site-bar' ),
                'declarations' => array(
                'display' => 'none !important',
            ),
                'media'        => '(max-width: ' . esc_attr( $elation_resp_mobile ) . 'px)',
            ) );
        }
        
        $setting = 'elation-mobilemenu-btn-size';
        $mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );
        
        if ( $mod !== customizer_library_get_default( $setting ) ) {
            $elation_mobnavbtn_font_size = esc_attr( $mod );
            Customizer_Library_Styles()->add( array(
                'selectors'    => array( 'button.menu-toggle' ),
                'declarations' => array(
                'font-size' => $elation_mobnavbtn_font_size . 'px',
            ),
                'media'        => esc_attr( $elation_resp_menu ),
            ) );
        }
        
        $setting = 'elation-mobilemenu-btn-icon-size';
        $mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );
        
        if ( $mod !== customizer_library_get_default( $setting ) ) {
            $elation_mobnavbtn_font_size = esc_attr( $mod );
            Customizer_Library_Styles()->add( array(
                'selectors'    => array( 'button.menu-toggle i.fas' ),
                'declarations' => array(
                'font-size' => $elation_mobnavbtn_font_size . 'px',
            ),
                'media'        => esc_attr( $elation_resp_menu ),
            ) );
        }
        
        $setting = 'elation-mobilemenu-item-font-size';
        $mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );
        
        if ( $mod !== customizer_library_get_default( $setting ) ) {
            $elation_mobnav_font_size = esc_attr( $mod );
            Customizer_Library_Styles()->add( array(
                'selectors'    => array( '.main-navigation li a' ),
                'declarations' => array(
                'font-size' => $elation_mobnav_font_size . 'px',
            ),
                'media'        => esc_attr( $elation_resp_menu ),
            ) );
        }
        
        // --------- Mobile Settings
        $setting = 'elation-bg-image-header-clear';
        $mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );
        
        if ( $mod !== customizer_library_get_default( $setting ) ) {
            $elation_mobile_topbar = esc_attr( $mod );
            Customizer_Library_Styles()->add( array(
                'selectors'    => array( '.site-header,
				.site-bar-inner' ),
                'declarations' => array(
                'background' => 'none !important',
            ),
            ) );
        }
        
        $setting = 'elation-bg-image-footer-clear';
        $mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );
        
        if ( $mod !== customizer_library_get_default( $setting ) ) {
            $elation_mobile_topbar = esc_attr( $mod );
            Customizer_Library_Styles()->add( array(
                'selectors'    => array( '.site-footer,
				.site-footer .site-bar' ),
                'declarations' => array(
                'background' => 'none !important',
            ),
            ) );
        }
        
        // Mobile Menu Colors
        $setting = 'elation-mobilemenu-bg-color';
        $mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );
        
        if ( $mod !== customizer_library_get_default( $setting ) ) {
            $mobilemenu_bg_color = sanitize_hex_color( $mod );
            Customizer_Library_Styles()->add( array(
                'selectors'    => array( '.elation-menu-rightside .menu-main-menu-container,
                .elation-menu-leftside .menu-main-menu-container,
                .elation-menu-dropdown #elation-main-menu' ),
                'declarations' => array(
                'background-color' => $mobilemenu_bg_color,
            ),
                'media'        => esc_attr( $elation_resp_menu ),
            ) );
        }
        
        $setting = 'elation-mobilemenu-font-color';
        $mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );
        
        if ( $mod !== customizer_library_get_default( $setting ) ) {
            $mobilemenu_font_color = sanitize_hex_color( $mod );
            Customizer_Library_Styles()->add( array(
                'selectors'    => array( '.site-header .main-navigation ul li a' ),
                'declarations' => array(
                'color' => $mobilemenu_font_color,
            ),
                'media'        => esc_attr( $elation_resp_menu ),
            ) );
        }
        
        $setting = 'elation-mobilemenu-font-hover-color';
        $mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );
        
        if ( $mod !== customizer_library_get_default( $setting ) ) {
            $mobilemenu_font_hover_color = sanitize_hex_color( $mod );
            Customizer_Library_Styles()->add( array(
                'selectors'    => array( '#site-navigation.main-navigation ul > li > a:hover,
				#site-navigation.main-navigation ul > li.menu-item.current-menu-item > a,
				#site-navigation.main-navigation ul > li.menu-item.current-menu-ancestor > a,
				#site-navigation.main-navigation ul > li.menu-item.current-menu-parent > a,
				#site-navigation.main-navigation ul > li.menu-item.current_page_parent > a,
				#site-navigation.main-navigation ul > li.menu-item.current_page_ancestor > a,
				#site-navigation.main-navigation .menu-item.current_page_item > a,
				#site-navigation.main-navigation ul > li.menu-item.current-menu-item > a span.nav-span-block,
				#site-navigation.main-navigation ul > li.menu-item.current-menu-ancestor > a span.nav-span-block,
				#site-navigation.main-navigation ul > li.menu-item.current-menu-parent > a span.nav-span-block,
				#site-navigation.main-navigation ul > li.menu-item.current_page_parent > a span.nav-span-block,
				#site-navigation.main-navigation ul > li.menu-item.current_page_ancestor > a span.nav-span-block,
				#site-navigation.main-navigation .menu-item.current_page_item > a span.nav-span-block,
				#site-navigation.main-navigation.elation-nav-block ul > li > a:hover span.nav-span-block,
				#site-navigation.main-navigation.elation-nav-plain ul li a:hover,
				#site-navigation.main-navigation.elation-nav-solid ul li a:hover,
				#site-navigation.main-navigation.elation-nav-underline ul li a:hover,
				#site-navigation.main-navigation.elation-nav-blocks ul li a:hover,
				#site-navigation.main-navigation.elation-nav-blocks ul li a:hover span.nav-span-block' ),
                'declarations' => array(
                'color' => $mobilemenu_font_hover_color . ' !important',
            ),
                'media'        => esc_attr( $elation_resp_menu ),
            ) );
        }
        
        $setting = 'elation-mobilemenu-arrow-color';
        $mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );
        
        if ( $mod !== customizer_library_get_default( $setting ) ) {
            $mobilemenu_font_color = sanitize_hex_color( $mod );
            Customizer_Library_Styles()->add( array(
                'selectors'    => array( '.main-navigation .menu-dropdown-btn' ),
                'declarations' => array(
                'color' => $mobilemenu_font_color,
            ),
                'media'        => esc_attr( $elation_resp_menu ),
            ) );
        }
        
        $setting = 'elation-mobilemenu-x-color';
        $mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );
        
        if ( $mod !== customizer_library_get_default( $setting ) ) {
            $mobilemenu_font_color = sanitize_hex_color( $mod );
            Customizer_Library_Styles()->add( array(
                'selectors'    => array( '.main-menu-close' ),
                'declarations' => array(
                'color' => $mobilemenu_font_color,
            ),
                'media'        => esc_attr( $elation_resp_menu ),
            ) );
        }
        
        $setting = 'elation-mobilemenu-sub-dark';
        $mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );
        
        if ( $mod !== customizer_library_get_default( $setting ) ) {
            $mobilemenu_font_color = sanitize_hex_color( $mod );
            Customizer_Library_Styles()->add( array(
                'selectors'    => array( '.main-navigation ul ul' ),
                'declarations' => array(
                'background-color' => 'rgba(0, 0, 0, 0.06) !important',
            ),
                'media'        => esc_attr( $elation_resp_menu ),
            ) );
        }
        
        // Mobile Menu Colors
    }

}
add_action( 'customizer_library_styles', 'elation_customizer_library_build_styles' );
if ( !function_exists( 'elation_customizer_library_styles' ) ) {
    /**
     * Generates the style tag and CSS needed for the theme options.
     *
     * By using the "Customizer_Library_Styles" filter, different components can print CSS in the header.
     * It is organized this way to ensure there is only one "style" tag.
     *
     * @since  1.0.0.
     *
     * @return void
     */
    function elation_customizer_library_styles()
    {
        do_action( 'customizer_library_styles' );
        // Echo the rules
        $css = Customizer_Library_Styles()->build();
        
        if ( !empty($css) ) {
            wp_register_style( 'elation-customizer-custom-css', false );
            wp_enqueue_style( 'elation-customizer-custom-css' );
            wp_add_inline_style( 'elation-customizer-custom-css', $css );
        }
    
    }

}
add_action( 'wp_enqueue_scripts', 'elation_customizer_library_styles', 11 );
function elation_getOppColor( $hexColor )
{
    // hexColor RGB
    $R1 = hexdec( substr( $hexColor, 1, 2 ) );
    $G1 = hexdec( substr( $hexColor, 3, 2 ) );
    $B1 = hexdec( substr( $hexColor, 5, 2 ) );
    // Black RGB
    $blackColor = "#000000";
    $R2BlackColor = hexdec( substr( $blackColor, 1, 2 ) );
    $G2BlackColor = hexdec( substr( $blackColor, 3, 2 ) );
    $B2BlackColor = hexdec( substr( $blackColor, 5, 2 ) );
    // Calc contrast ratio
    $L1 = 0.2126 * pow( $R1 / 255, 2.2 ) + 0.7151999999999999 * pow( $G1 / 255, 2.2 ) + 0.0722 * pow( $B1 / 255, 2.2 );
    $L2 = 0.2126 * pow( $R2BlackColor / 255, 2.2 ) + 0.7151999999999999 * pow( $G2BlackColor / 255, 2.2 ) + 0.0722 * pow( $B2BlackColor / 255, 2.2 );
    $contrastRatio = 0;
    
    if ( $L1 > $L2 ) {
        $contrastRatio = (int) (($L1 + 0.05) / ($L2 + 0.05));
    } else {
        $contrastRatio = (int) (($L2 + 0.05) / ($L1 + 0.05));
    }
    
    // If contrast is more than 5, return black color
    
    if ( $contrastRatio > 5 ) {
        return '#000000';
    } else {
        // if not, return white color.
        return '#FFFFFF';
    }

}
