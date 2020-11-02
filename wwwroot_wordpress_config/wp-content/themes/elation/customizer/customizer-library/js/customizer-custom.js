/**
 * Customizer Custom Functionality
 */
( function( $ ) {

    $( window ).on('load',function () {

        // Range Input Value Display
        $( document ).on( 'input change', 'input[type="range"]', function() {
            $( this ).prev().find( '.rngval' ).html( $(this).val() );
        });

        // Show / Hide Uploaded Logo Settings
        elation_uploaded_logo_check();
        $( '#customize-control-elation-uploaded-logo input[type=checkbox]' ).on( 'change', function() {
            elation_uploaded_logo_check();
        });
        function elation_uploaded_logo_check() {
            if ( $( '#customize-control-elation-uploaded-logo input[type=checkbox]' ).is( ':checked' ) ) {
                $( '#sub-accordion-section-title_tagline #customize-control-elation-logo-max-width' ).show();
                $( '#sub-accordion-section-title_tagline #customize-control-elation-add-back-title' ).show();
                $( '#sub-accordion-section-title_tagline #customize-control-elation-add-back-tagline' ).show();
                $( '#sub-accordion-section-title_tagline #customize-control-elation-logo-align-side' ).show();
                $( '#sub-accordion-section-title_tagline #customize-control-elation-logo-alignment' ).show();
                $( '#sub-accordion-section-title_tagline #customize-control-elation-title-desc-spacing' ).show();
                $( '#sub-accordion-section-title_tagline #customize-control-elation-logo-title-spacing' ).show();
                elation_logo_sidebyside_check();
            } else {
                $( '#sub-accordion-section-title_tagline #customize-control-elation-logo-max-width' ).hide();
                $( '#sub-accordion-section-title_tagline #customize-control-elation-add-back-title' ).hide();
                $( '#sub-accordion-section-title_tagline #customize-control-elation-add-back-tagline' ).hide();
                $( '#sub-accordion-section-title_tagline #customize-control-elation-logo-align-side' ).hide();
                $( '#sub-accordion-section-title_tagline #customize-control-elation-logo-alignment' ).hide();
                $( '#sub-accordion-section-title_tagline #customize-control-elation-title-desc-spacing' ).hide();
                $( '#sub-accordion-section-title_tagline #customize-control-elation-logo-title-spacing' ).hide();
                elation_logo_sidebyside_check();
            }
        }
        $( '#customize-control-elation-logo-align-side input[type=checkbox]' ).on( 'change', function() {
            elation_logo_sidebyside_check();
        });
        function elation_logo_sidebyside_check() {
            if ( $( '#customize-control-elation-uploaded-logo input[type=checkbox]' ).is( ':checked' ) && $( '#customize-control-elation-logo-align-side input[type=checkbox]' ).is( ':checked' ) ) {
                $( '#sub-accordion-section-title_tagline #customize-control-elation-logo-alignment' ).show();
                $( '#sub-accordion-section-title_tagline #customize-control-elation-logo-title-spacing' ).show();
            } else {
                $( '#sub-accordion-section-title_tagline #customize-control-elation-logo-alignment' ).hide();
                $( '#sub-accordion-section-title_tagline #customize-control-elation-logo-title-spacing' ).hide();
            }
        }

        // Show / Hide Google/Websafe Font Settings
        elation_websafe_check();
        $( '#customize-control-elation-disable-google-font input[type=checkbox]' ).on( 'change', function() {
            elation_websafe_check();
        });
        function elation_websafe_check() {
            if ( $( '#customize-control-elation-disable-google-font input[type=checkbox]' ).is( ':checked' ) ) {
                $( '#sub-accordion-section-elation-panel-font-settings-default #customize-control-elation-body-font' ).hide();
                $( '#sub-accordion-section-elation-panel-font-settings-default #customize-control-elation-heading-font' ).hide();
                $( '#sub-accordion-section-elation-panel-font-settings-default #customize-control-elation-body-font-websafe' ).show();
                $( '#sub-accordion-section-elation-panel-font-settings-default #customize-control-elation-heading-font-websafe' ).show();
                
                $( '#sub-accordion-section-elation-panel-font-settings-title-tagline #customize-control-elation-title-font' ).hide();
                $( '#sub-accordion-section-elation-panel-font-settings-title-tagline #customize-control-elation-tagline-font' ).hide();
                $( '#sub-accordion-section-elation-panel-font-settings-title-tagline #customize-control-elation-title-font-websafe' ).show();
                $( '#sub-accordion-section-elation-panel-font-settings-title-tagline #customize-control-elation-tagline-font-websafe' ).show();

                $( '#sub-accordion-section-elation-panel-font-settings-section-header #customize-control-elation-main-nav-font' ).hide();
                $( '#sub-accordion-section-elation-panel-font-settings-section-header #customize-control-elation-main-nav-font-websafe' ).show();
            } else {
                $( '#sub-accordion-section-elation-panel-font-settings-default #customize-control-elation-body-font-websafe' ).hide();
                $( '#sub-accordion-section-elation-panel-font-settings-default #customize-control-elation-heading-font-websafe' ).hide();
                $( '#sub-accordion-section-elation-panel-font-settings-default #customize-control-elation-body-font' ).show();
                $( '#sub-accordion-section-elation-panel-font-settings-default #customize-control-elation-heading-font' ).show();
                
                $( '#sub-accordion-section-elation-panel-font-settings-title-tagline #customize-control-elation-title-font' ).show();
                $( '#sub-accordion-section-elation-panel-font-settings-title-tagline #customize-control-elation-tagline-font' ).show();
                $( '#sub-accordion-section-elation-panel-font-settings-title-tagline #customize-control-elation-title-font-websafe' ).hide();
                $( '#sub-accordion-section-elation-panel-font-settings-title-tagline #customize-control-elation-tagline-font-websafe' ).hide();

                $( '#sub-accordion-section-elation-panel-font-settings-section-header #customize-control-elation-main-nav-font-websafe' ).hide();
                $( '#sub-accordion-section-elation-panel-font-settings-section-header #customize-control-elation-main-nav-font' ).show();
            }
        }

        // Site Breakpoints
        var elation_c_breakpoints = $( '#customize-control-elation-menu-breakat select' ).val();
        elation_breakpoint_value_check( elation_c_breakpoints );
        $( '#customize-control-elation-menu-breakat select' ).on( 'change', function() {
            var elation_c_break_value = $( this ).val();
            elation_breakpoint_value_check( elation_c_break_value );
        } );
        function elation_breakpoint_value_check( elation_c_break_value ) {
            if ( elation_c_break_value == 'custom' ) {
                $( '#sub-accordion-section-elation-panel-settings-breakpoints #customize-control-elation-menu-custom-breakat' ).show();
            } else {
                $( '#sub-accordion-section-elation-panel-settings-breakpoints #customize-control-elation-menu-custom-breakat' ).hide();
            }
        }

        // Site Layout
        var elation_site_layout = $( '#customize-control-elation-site-layout select' ).val();
        elation_sitelayout_value_check( elation_site_layout );
        $( '#customize-control-elation-site-layout select' ).on( 'change', function() {
            var elation_site_layout_value = $( this ).val();
            elation_sitelayout_value_check( elation_site_layout_value );
        } );
        function elation_sitelayout_value_check( elation_site_layout_value ) {
            if ( elation_site_layout_value == 'elation-site-boxed' ) {
                $( '#sub-accordion-section-elation-panel-settings-section-site #customize-control-elation-break-content' ).hide();
                $( '#sub-accordion-section-elation-panel-settings-section-site #customize-control-elation-break-widgets' ).hide();
                $( '#sub-accordion-section-elation-panel-settings-section-title #customize-control-elation-content-divider-line' ).show();
                $( '#sub-accordion-section-elation-panel-blog-settings-list #customize-control-elation-blog-break' ).hide();
                elation_breakblog_check();
                $( '#sub-accordion-section-elation-panel-settings-section-site #customize-control-elation-set-topbar-fullwidth' ).hide();
                $( '#sub-accordion-section-elation-panel-settings-section-site #customize-control-elation-set-header-fullwidth' ).hide();
                $( '#sub-accordion-section-elation-panel-settings-section-site #customize-control-elation-set-content-fullwidth' ).hide();
                $( '#sub-accordion-section-elation-panel-settings-section-site #customize-control-elation-set-footer-fullwidth' ).hide();
                $( '#sub-accordion-section-elation-panel-settings-section-site #customize-control-elation-set-bottombar-fullwidth' ).hide();
                $( '#sub-accordion-section-colors #customize-control-elation-boxed-bg-color' ).show();
                $( '#sub-accordion-section-background_image #customize-control-elation-bg-image-header-clear' ).hide();
                $( '#sub-accordion-section-background_image #customize-control-elation-bg-image-footer-clear' ).hide();
            } else if ( elation_site_layout_value == 'elation-site-full-width-blocked' ) {
                $( '#sub-accordion-section-elation-panel-settings-section-site #customize-control-elation-break-content' ).show();
                $( '#sub-accordion-section-elation-panel-settings-section-site #customize-control-elation-break-widgets' ).show();
                $( '#sub-accordion-section-elation-panel-settings-section-title #customize-control-elation-content-divider-line' ).hide();
                $( '#sub-accordion-section-colors #customize-control-elation-boxed-bg-color' ).show();
                $( '#sub-accordion-section-elation-panel-blog-settings-list #customize-control-elation-blog-break' ).show();
                elation_breakblog_check();
                $( '#sub-accordion-section-elation-panel-settings-section-site #customize-control-elation-set-topbar-fullwidth' ).show();
                $( '#sub-accordion-section-elation-panel-settings-section-site #customize-control-elation-set-header-fullwidth' ).show();
                $( '#sub-accordion-section-elation-panel-settings-section-site #customize-control-elation-set-content-fullwidth' ).show();
                $( '#sub-accordion-section-elation-panel-settings-section-site #customize-control-elation-set-footer-fullwidth' ).show();
                $( '#sub-accordion-section-elation-panel-settings-section-site #customize-control-elation-set-bottombar-fullwidth' ).show();
                $( '#sub-accordion-section-background_image #customize-control-elation-bg-image-header-clear' ).show();
                $( '#sub-accordion-section-background_image #customize-control-elation-bg-image-footer-clear' ).show();
            } else {
                $( '#sub-accordion-section-elation-panel-settings-section-site #customize-control-elation-break-content' ).hide();
                $( '#sub-accordion-section-elation-panel-settings-section-site #customize-control-elation-break-widgets' ).hide();
                $( '#sub-accordion-section-elation-panel-settings-section-title #customize-control-elation-content-divider-line' ).show();
                $( '#sub-accordion-section-elation-panel-blog-settings-list #customize-control-elation-blog-break' ).hide();
                elation_breakblog_check();
                $( '#sub-accordion-section-colors #customize-control-elation-boxed-bg-color' ).hide();
                $( '#sub-accordion-section-elation-panel-settings-section-site #customize-control-elation-set-topbar-fullwidth' ).show();
                $( '#sub-accordion-section-elation-panel-settings-section-site #customize-control-elation-set-header-fullwidth' ).show();
                $( '#sub-accordion-section-elation-panel-settings-section-site #customize-control-elation-set-content-fullwidth' ).show();
                $( '#sub-accordion-section-elation-panel-settings-section-site #customize-control-elation-set-footer-fullwidth' ).show();
                $( '#sub-accordion-section-elation-panel-settings-section-site #customize-control-elation-set-bottombar-fullwidth' ).show();
                $( '#sub-accordion-section-background_image #customize-control-elation-bg-image-header-clear' ).show();
                $( '#sub-accordion-section-background_image #customize-control-elation-bg-image-footer-clear' ).show();
            }
        }
        // Show / Hide Topbar
        elation_breakblog_check();
        $( '#customize-control-elation-break-content input[type=checkbox]' ).on( 'change', function() {
            elation_breakblog_check();
        });
        function elation_breakblog_check() {
            if ( $( '#customize-control-elation-site-layout select' ).val() == 'elation-site-full-width-blocked' && $( '#customize-control-elation-break-content input[type=checkbox]' ).is( ':checked' ) ) {
                $( '#sub-accordion-section-elation-panel-blog-settings-list #customize-control-elation-blog-break' ).show();
            } else {
                $( '#sub-accordion-section-elation-panel-blog-settings-list #customize-control-elation-blog-break' ).hide();
            }
        }

        // Show / Hide Topbar
        elation_topbar_check();
        $( '#customize-control-elation-add-topbar input[type=checkbox]' ).on( 'change', function() {
            elation_topbar_check();
        });
        function elation_topbar_check() {
            if ( $( '#customize-control-elation-add-topbar input[type=checkbox]' ).is( ':checked' ) ) {
                $( '#sub-accordion-section-elation-panel-settings-section-header #customize-control-elation-topbar-layout' ).show();
                $( '#sub-accordion-section-elation-panel-settings-section-header #customize-control-elation-topbar-centered' ).show();
                $( '#sub-accordion-section-elation-panel-settings-section-header #customize-control-elation-topbar-switch' ).show();
                $( '#sub-accordion-section-elation-panel-settings-section-header #customize-control-elation-topbar-spacing-top' ).show();
                $( '#sub-accordion-section-elation-panel-settings-section-header #customize-control-elation-topbar-spacing-bottom' ).show();
                $( '#sub-accordion-section-elation-panel-settings-section-header #customize-control-elation-header-remove-social' ).show();
                $( '#sub-accordion-section-elation-panel-settings-section-header #customize-control-elation-header-remove-number' ).show();
                $( '#sub-accordion-section-elation-panel-settings-section-header #customize-control-elation-header-remove-address' ).show();
                $( '#sub-accordion-section-elation-panel-settings-section-header #customize-control-elation-add-topbar-search' ).show();
                $( '#sub-accordion-section-elation-panel-settings-section-header #customize-control-elation-header-add-topcart' ).show();
                $( '#sub-accordion-section-elation-panel-settings-section-header #customize-control-elation-note-topbar-turnon' ).hide();
            } else {
                $( '#sub-accordion-section-elation-panel-settings-section-header #customize-control-elation-topbar-layout' ).hide();
                $( '#sub-accordion-section-elation-panel-settings-section-header #customize-control-elation-topbar-centered' ).hide();
                $( '#sub-accordion-section-elation-panel-settings-section-header #customize-control-elation-topbar-switch' ).hide();
                $( '#sub-accordion-section-elation-panel-settings-section-header #customize-control-elation-topbar-spacing-top' ).hide();
                $( '#sub-accordion-section-elation-panel-settings-section-header #customize-control-elation-topbar-spacing-bottom' ).hide();
                $( '#sub-accordion-section-elation-panel-settings-section-header #customize-control-elation-header-remove-social' ).hide();
                $( '#sub-accordion-section-elation-panel-settings-section-header #customize-control-elation-header-remove-number' ).hide();
                $( '#sub-accordion-section-elation-panel-settings-section-header #customize-control-elation-header-remove-address' ).hide();
                $( '#sub-accordion-section-elation-panel-settings-section-header #customize-control-elation-add-topbar-search' ).hide();
                $( '#sub-accordion-section-elation-panel-settings-section-header #customize-control-elation-header-add-topcart' ).hide();
                $( '#sub-accordion-section-elation-panel-settings-section-header #customize-control-elation-note-topbar-turnon' ).show();
            }
        }

        // Site Header Check
        elation_headlayout_check();
        $( '#customize-control-elation-header-centered-layout input[type=checkbox]' ).on( 'change', function() {
            elation_headlayout_check();
        });
        function elation_headlayout_check() {
            if ( $( '#customize-control-elation-header-centered-layout input[type=checkbox]' ).is( ':checked' ) ) {
                $( '#sub-accordion-section-elation-panel-settings-section-header #customize-control-elation-header-align' ).show();
                $( '#sub-accordion-section-elation-panel-settings-section-header #customize-control-elation-align-nav-full-width' ).show();
            } else {
                $( '#sub-accordion-section-elation-panel-settings-section-header #customize-control-elation-header-align' ).hide();
                $( '#sub-accordion-section-elation-panel-settings-section-header #customize-control-elation-align-nav-full-width' ).hide();
            }
        }
        
        // Main Navigation WC cart
        elation_mainav_wc_check();
        $( '#customize-control-elation-add-menu-cart input[type=checkbox]' ).on( 'change', function() {
            elation_mainav_wc_check();
        });
        function elation_mainav_wc_check() {
            if ( $( '#customize-control-elation-add-menu-cart input[type=checkbox]' ).is( ':checked' ) ) {
                $( '#sub-accordion-section-elation-panel-settings-section-header #customize-control-elation-add-drop-menu-cart' ).show();
            } else {
                $( '#sub-accordion-section-elation-panel-settings-section-header #customize-control-elation-add-drop-menu-cart' ).hide();
            }
        }

        // Main Navigation WC cart
        elation_cartdesign_wc_check();
        $( '#customize-control-elation-add-topbar input[type=checkbox], #customize-control-elation-header-add-topcart input[type=checkbox], #customize-control-elation-add-menu-cart input[type=checkbox]' ).on( 'change', function() {
            elation_cartdesign_wc_check();
        });
        function elation_cartdesign_wc_check() {
            if ( ( $( '#customize-control-elation-add-topbar input[type=checkbox]' ).is( ':checked' ) && $( '#customize-control-elation-header-add-topcart input[type=checkbox]' ).is( ':checked' ) ) || $( '#customize-control-elation-add-menu-cart input[type=checkbox]' ).is( ':checked' ) ) {
                $( '#sub-accordion-section-elation-panel-settings-section-header #customize-control-elation-header-add-drop-topcart' ).show();
                $( '#sub-accordion-section-elation-panel-settings-section-header #customize-control-elation-wc-cart' ).show();
            } else {
                $( '#sub-accordion-section-elation-panel-settings-section-header #customize-control-elation-header-add-drop-topcart' ).hide();
                $( '#sub-accordion-section-elation-panel-settings-section-header #customize-control-elation-wc-cart' ).hide();
            }
        }

        // Show / Hide Search Type
        elation_search_enabled_check();
        $( '#customize-control-elation-add-topbar input[type=checkbox], #customize-control-elation-add-topbar-search input[type=checkbox], #customize-control-elation-add-nav-search input[type=checkbox]' ).on( 'change', function() {
            elation_search_enabled_check();
        });
        function elation_search_enabled_check() {
            if ( $( '#customize-control-elation-add-topbar input[type=checkbox]' ).is( ':checked' ) && $( '#customize-control-elation-add-topbar-search input[type=checkbox]' ).is( ':checked' ) || $( '#customize-control-elation-add-nav-search input[type=checkbox]' ).is( ':checked' ) ) {
                $( '#sub-accordion-section-elation-panel-settings-section-header #customize-control-elation-header-search-type' ).show();
                $( '#sub-accordion-section-elation-panel-mobile-section-header #customize-control-elation-onmobile-remove-headsearch' ).show();
                var elation_tbsearch = $( '#customize-control-elation-header-search-type select' ).val();
                elation_tbsearch_value_check( elation_tbsearch );
            } else {
                $( '#sub-accordion-section-elation-panel-settings-section-header #customize-control-elation-header-search-type' ).hide();
                $( '#sub-accordion-section-elation-panel-mobile-section-header #customize-control-elation-onmobile-remove-headsearch' ).hide();
                var elation_tbsearch = $( '#customize-control-elation-header-search-type select' ).val();
                elation_tbsearch_value_check( elation_tbsearch );
            }
        }
        var elation_tbsearch = $( '#customize-control-elation-header-search-type select' ).val();
        elation_tbsearch_value_check( elation_tbsearch );
        $( '#customize-control-elation-header-search-type select' ).on( 'change', function() {
            var elation_tbsearch_value = $( this ).val();
            elation_tbsearch_value_check( elation_tbsearch_value );
        } );
        function elation_tbsearch_value_check( elation_tbsearch_value ) {
            if ( ( $( '#customize-control-elation-add-topbar input[type=checkbox]' ).is( ':checked' ) && $( '#customize-control-elation-add-topbar-search input[type=checkbox]' ).is( ':checked' ) || $( '#customize-control-elation-add-nav-search input[type=checkbox]' ).is( ':checked' ) ) && elation_tbsearch_value == 'elation-search-plugin-shortcode' ) {
                $( '#sub-accordion-section-elation-panel-settings-section-header #customize-control-elation-search-shortcode' ).show();
                $( '#sub-accordion-section-elation-panel-settings-section-header #customize-control-elation-search-shortcode-help' ).show();
            } else {
                $( '#sub-accordion-section-elation-panel-settings-section-header #customize-control-elation-search-shortcode' ).hide();
                $( '#sub-accordion-section-elation-panel-settings-section-header #customize-control-elation-search-shortcode-help' ).hide();
            }
        }
        
        // Header Background Image settings
        elation_headerbgimg_check();
        $( '#customize-control-elation-add-header-bgimg input[type=checkbox]' ).on( 'change', function() {
            elation_headerbgimg_check();
        });
        function elation_headerbgimg_check() {
            if ( $( '#customize-control-elation-add-header-bgimg input[type=checkbox]' ).is( ':checked' ) ) {
                $( '#sub-accordion-section-elation-panel-settings-section-header #customize-control-elation-header-bgimg' ).show();
                $( '#sub-accordion-section-elation-panel-settings-section-header #customize-control-elation-header-bgimg-repeat' ).show();
                $( '#sub-accordion-section-elation-panel-settings-section-header #customize-control-elation-header-bgimg-align' ).show();
                $( '#sub-accordion-section-elation-panel-settings-section-header #customize-control-elation-header-topbar-clear' ).show();
                $( '#sub-accordion-section-elation-panel-mobile-section-header #customize-control-elation-onmobile-remove-header-bgimg' ).show();
            } else {
                $( '#sub-accordion-section-elation-panel-settings-section-header #customize-control-elation-header-bgimg' ).hide();
                $( '#sub-accordion-section-elation-panel-settings-section-header #customize-control-elation-header-bgimg-repeat' ).hide();
                $( '#sub-accordion-section-elation-panel-settings-section-header #customize-control-elation-header-bgimg-align' ).hide();
                $( '#sub-accordion-section-elation-panel-settings-section-header #customize-control-elation-header-topbar-clear' ).hide();
                $( '#sub-accordion-section-elation-panel-mobile-section-header #customize-control-elation-onmobile-remove-header-bgimg' ).hide();
            }
        }

        // Show / Hide Mobile Menu Icon Settings
        elation_mobileicon_check();
        $( '#customize-control-elation-mobile-menu-addicon input[type=checkbox]' ).on( 'change', function() {
            elation_mobileicon_check();
        });
        function elation_mobileicon_check() {
            if ( $( '#customize-control-elation-mobile-menu-addicon input[type=checkbox]' ).is( ':checked' ) ) {
                $( '#sub-accordion-section-elation-panel-mobile-section-colors #customize-control-elation-mobile-menu-icon' ).hide();
                $( '#sub-accordion-section-elation-panel-mobile-section-colors #customize-control-elation-mobilemenu-btn-icon-size' ).hide();
            } else {
                $( '#sub-accordion-section-elation-panel-mobile-section-colors #customize-control-elation-mobile-menu-icon' ).show();
                $( '#sub-accordion-section-elation-panel-mobile-section-colors #customize-control-elation-mobilemenu-btn-icon-size' ).show();
            }
        }

        // Show / Hide Advanced Widget Area Settings
        elation_nav_color_check();
        $( '#customize-control-elation-remove-main-nav input[type=checkbox]' ).on( 'change', function() {
            elation_nav_color_check();
        });
        function elation_nav_color_check() {
            if ( $( '#customize-control-elation-remove-main-nav input[type=checkbox]' ).is( ':checked' ) ) {
                $( '#sub-accordion-section-elation-panel-colors-section-header #customize-control-elation-color-head-header-nav' ).hide();
                $( '#sub-accordion-section-elation-panel-colors-section-header #customize-control-elation-nav-bg-color' ).hide();
                $( '#sub-accordion-section-elation-panel-colors-section-header #customize-control-elation-nav-font-color' ).hide();
                $( '#sub-accordion-section-elation-panel-colors-section-header #customize-control-elation-nav-drop-bg-color' ).hide();
                $( '#sub-accordion-section-elation-panel-colors-section-header #customize-control-elation-nav-drop-opacity' ).hide();
                $( '#sub-accordion-section-elation-panel-colors-section-header #customize-control-elation-nav-drop-font-color' ).hide();
                $( '#sub-accordion-section-elation-panel-colors-section-header #customize-control-elation-nav-selected-color' ).hide();
            } else {
                $( '#sub-accordion-section-elation-panel-colors-section-header #customize-control-elation-color-head-header-nav' ).show();
                $( '#sub-accordion-section-elation-panel-colors-section-header #customize-control-elation-nav-bg-color' ).show();
                $( '#sub-accordion-section-elation-panel-colors-section-header #customize-control-elation-nav-font-color' ).show();
                $( '#sub-accordion-section-elation-panel-colors-section-header #customize-control-elation-nav-drop-bg-color' ).show();
                $( '#sub-accordion-section-elation-panel-colors-section-header #customize-control-elation-nav-drop-opacity' ).show();
                $( '#sub-accordion-section-elation-panel-colors-section-header #customize-control-elation-nav-drop-font-color' ).show();
                $( '#sub-accordion-section-elation-panel-colors-section-header #customize-control-elation-nav-selected-color' ).show();
            }
        }

        // Show / Hide Advanced Navigation Settings
        elation_nav_advanced_check();
        $( '#customize-control-elation-nav-advanced-set input[type=checkbox]' ).on( 'change', function() {
            elation_nav_advanced_check();
        });
        function elation_nav_advanced_check() {
            if ( $( '#customize-control-elation-nav-advanced-set input[type=checkbox]' ).is( ':checked' ) ) {
                $( '#sub-accordion-section-elation-panel-settings-section-header #customize-control-elation-header-nav-spacing-top' ).show();
                $( '#sub-accordion-section-elation-panel-settings-section-header #customize-control-elation-header-nav-spacing-bottom' ).show();
                $( '#sub-accordion-section-elation-panel-settings-section-header #customize-control-elation-header-nav-spacing-side' ).show();
                $( '#sub-accordion-section-elation-panel-settings-section-header #customize-control-elation-header-nav-item-spacing' ).show();
                $( '#sub-accordion-section-elation-panel-settings-section-header #customize-control-elation-header-nav-drop-side-pad' ).show();
                $( '#sub-accordion-section-elation-panel-settings-section-header #customize-control-elation-header-nav-drop-topbot-pad' ).show();
                $( '#sub-accordion-section-elation-panel-settings-section-header #customize-control-elation-nav-drop-minwidth' ).show();
                $( '#sub-accordion-section-elation-panel-settings-section-header #customize-control-elation-nav-drop-center' ).show();
                $( '#sub-accordion-section-elation-panel-settings-section-header #customize-control-elation-nav-drop-negmargin' ).show();
            } else {
                $( '#sub-accordion-section-elation-panel-settings-section-header #customize-control-elation-header-nav-spacing-top' ).hide();
                $( '#sub-accordion-section-elation-panel-settings-section-header #customize-control-elation-header-nav-spacing-bottom' ).hide();
                $( '#sub-accordion-section-elation-panel-settings-section-header #customize-control-elation-header-nav-spacing-side' ).hide();
                $( '#sub-accordion-section-elation-panel-settings-section-header #customize-control-elation-header-nav-item-spacing' ).hide();
                $( '#sub-accordion-section-elation-panel-settings-section-header #customize-control-elation-header-nav-drop-side-pad' ).hide();
                $( '#sub-accordion-section-elation-panel-settings-section-header #customize-control-elation-header-nav-drop-topbot-pad' ).hide();
                $( '#sub-accordion-section-elation-panel-settings-section-header #customize-control-elation-nav-drop-minwidth' ).hide();
                $( '#sub-accordion-section-elation-panel-settings-section-header #customize-control-elation-nav-drop-center' ).hide();
                $( '#sub-accordion-section-elation-panel-settings-section-header #customize-control-elation-nav-drop-negmargin' ).hide();
            }
        }
        
        // Header Media / Slider Check
        var elation_headermedia = $( '#customize-control-elation-site-media-type select' ).val();
        elation_mediaslider_value_check( elation_headermedia );
        $( '#customize-control-elation-site-media-type select' ).on( 'change', function() {
            var elation_headermedia_value = $( this ).val();
            elation_mediaslider_value_check( elation_headermedia_value );
        } );
        function elation_mediaslider_value_check( elation_headermedia_value ) {
            if ( elation_headermedia_value == 'elation-site-media-shortcode' ) {
                $( '#sub-accordion-section-elation-panel-settings-section-header-media #customize-control-elation-noteon-media-none' ).hide();
                $( '#sub-accordion-section-elation-panel-settings-section-header-media #customize-control-elation-noteon-media-cheader' ).hide();
                $( '#sub-accordion-section-elation-panel-settings-section-header-media #customize-control-elation-noteon-media-slider' ).hide();
                $( '#sub-accordion-section-elation-panel-settings-section-header-media #customize-control-elation-noteon-media-fimage' ).hide();
                $( '#sub-accordion-section-elation-panel-settings-section-header-media #customize-control-elation-site-media-fimage-size' ).hide();
                $( '#sub-accordion-section-elation-panel-settings-section-header-media #customize-control-elation-sitemedia-add-elation' ).hide();
                $( '#sub-accordion-section-elation-panel-settings-section-header-media #customize-control-elation-sitemedia-elation-color' ).hide();
                $( '#sub-accordion-section-elation-panel-settings-section-header-media #customize-control-elation-sitemedia-elation-opacity' ).hide();
                $( '#sub-accordion-section-elation-panel-settings-section-header-media #customize-control-elation-sitemedia-display-all' ).show();
                $( '#sub-accordion-section-elation-panel-settings-section-header-media #customize-control-elation-sitemedia-fullwidth' ).show();
                $( '#sub-accordion-section-elation-panel-settings-section-header-media #customize-control-elation-noteon-media-shortcode' ).show();
                $( '#sub-accordion-section-elation-panel-settings-section-header-media #customize-control-elation-sitemedia-shortcode' ).show();
                elation_media_elation_check();
            } else if ( elation_headermedia_value == 'elation-site-media-fimage' ) {
                $( '#sub-accordion-section-elation-panel-settings-section-header-media #customize-control-elation-noteon-media-none' ).hide();
                $( '#sub-accordion-section-elation-panel-settings-section-header-media #customize-control-elation-noteon-media-slider' ).hide();
                $( '#sub-accordion-section-elation-panel-settings-section-header-media #customize-control-elation-noteon-media-shortcode' ).hide();
                $( '#sub-accordion-section-elation-panel-settings-section-header-media #customize-control-elation-sitemedia-shortcode' ).hide();
                $( '#sub-accordion-section-elation-panel-settings-section-header-media #customize-control-elation-noteon-media-cheader' ).hide();
                $( '#sub-accordion-section-elation-panel-settings-section-header-media #customize-control-elation-sitemedia-display-all' ).hide();
                $( '#sub-accordion-section-elation-panel-settings-section-header-media #customize-control-elation-site-media-fimage-size' ).show();
                $( '#sub-accordion-section-elation-panel-settings-section-header-media #customize-control-elation-sitemedia-fullwidth' ).show();
                $( '#sub-accordion-section-elation-panel-settings-section-header-media #customize-control-elation-noteon-media-fimage' ).show();
                $( '#sub-accordion-section-elation-panel-settings-section-header-media #customize-control-elation-sitemedia-add-elation' ).show();
                $( '#sub-accordion-section-elation-panel-settings-section-header-media #customize-control-elation-sitemedia-elation-color' ).show();
                $( '#sub-accordion-section-elation-panel-settings-section-header-media #customize-control-elation-sitemedia-elation-opacity' ).show();
                elation_media_elation_check();
            } else if ( elation_headermedia_value == 'elation-site-media-media' ) {
                $( '#sub-accordion-section-elation-panel-settings-section-header-media #customize-control-elation-noteon-media-none' ).hide();
                $( '#sub-accordion-section-elation-panel-settings-section-header-media #customize-control-elation-noteon-media-slider' ).hide();
                $( '#sub-accordion-section-elation-panel-settings-section-header-media #customize-control-elation-noteon-media-shortcode' ).hide();
                $( '#sub-accordion-section-elation-panel-settings-section-header-media #customize-control-elation-sitemedia-shortcode' ).hide();
                $( '#sub-accordion-section-elation-panel-settings-section-header-media #customize-control-elation-noteon-media-fimage' ).hide();
                $( '#sub-accordion-section-elation-panel-settings-section-header-media #customize-control-elation-site-media-fimage-size' ).hide();
                $( '#sub-accordion-section-elation-panel-settings-section-header-media #customize-control-elation-sitemedia-display-all' ).show();
                $( '#sub-accordion-section-elation-panel-settings-section-header-media #customize-control-elation-sitemedia-fullwidth' ).show();
                $( '#sub-accordion-section-elation-panel-settings-section-header-media #customize-control-elation-noteon-media-cheader' ).show();
                $( '#sub-accordion-section-elation-panel-settings-section-header-media #customize-control-elation-sitemedia-add-elation' ).show();
                $( '#sub-accordion-section-elation-panel-settings-section-header-media #customize-control-elation-sitemedia-elation-color' ).show();
                $( '#sub-accordion-section-elation-panel-settings-section-header-media #customize-control-elation-sitemedia-elation-opacity' ).show();
                elation_media_elation_check();
            } else {
                $( '#sub-accordion-section-elation-panel-settings-section-header-media #customize-control-elation-sitemedia-display-all' ).hide();
                $( '#sub-accordion-section-elation-panel-settings-section-header-media #customize-control-elation-noteon-media-cheader' ).hide();
                $( '#sub-accordion-section-elation-panel-settings-section-header-media #customize-control-elation-noteon-media-slider' ).hide();
                $( '#sub-accordion-section-elation-panel-settings-section-header-media #customize-control-elation-noteon-media-shortcode' ).hide();
                $( '#sub-accordion-section-elation-panel-settings-section-header-media #customize-control-elation-sitemedia-shortcode' ).hide();
                $( '#sub-accordion-section-elation-panel-settings-section-header-media #customize-control-elation-noteon-media-fimage' ).hide();
                $( '#sub-accordion-section-elation-panel-settings-section-header-media #customize-control-elation-site-media-fimage-size' ).hide();
                $( '#sub-accordion-section-elation-panel-settings-section-header-media #customize-control-elation-sitemedia-fullwidth' ).hide();
                $( '#sub-accordion-section-elation-panel-settings-section-header-media #customize-control-elation-sitemedia-add-elation' ).hide();
                $( '#sub-accordion-section-elation-panel-settings-section-header-media #customize-control-elation-sitemedia-elation-color' ).hide();
                $( '#sub-accordion-section-elation-panel-settings-section-header-media #customize-control-elation-sitemedia-elation-opacity' ).hide();
                $( '#sub-accordion-section-elation-panel-settings-section-header-media #customize-control-elation-noteon-media-none' ).show();
                elation_media_elation_check();
            }
        }
        
        // Show / Hide Basic Slider Hint
        elation_media_elation_check();
        $( '#customize-control-elation-sitemedia-add-elation input[type=checkbox]' ).on( 'change', function() {
            elation_media_elation_check();
        });
        function elation_media_elation_check() {
            if ( ( $( '#customize-control-elation-site-media-type select' ).val() == 'elation-site-media-media' || $( '#customize-control-elation-site-media-type select' ).val() == 'elation-site-media-fimage' ) && $( '#customize-control-elation-sitemedia-add-elation input[type=checkbox]' ).is( ':checked' ) ) {
                $( '#sub-accordion-section-elation-panel-settings-section-header-media #customize-control-elation-sitemedia-elation-color' ).show();
                $( '#sub-accordion-section-elation-panel-settings-section-header-media #customize-control-elation-sitemedia-elation-opacity' ).show();
            } else {
                $( '#sub-accordion-section-elation-panel-settings-section-header-media #customize-control-elation-sitemedia-elation-color' ).hide();
                $( '#sub-accordion-section-elation-panel-settings-section-header-media #customize-control-elation-sitemedia-elation-opacity' ).hide();
            }
        }
        // Show / Hide Basic Slider on ALL PAGES
        elation_slider_all_pages_check();
        $( '#customize-control-elation-sitemedia-display-all input[type=checkbox]' ).on( 'change', function() {
            elation_slider_all_pages_check();
        });
        function elation_slider_all_pages_check() {
            if ( $( '#customize-control-elation-site-media-type select' ).val() == 'elation-site-media-shortcode' && $( '#customize-control-elation-sitemedia-display-all input[type=checkbox]' ).is( ':checked' ) ) {
                $( '#sub-accordion-section-elation-panel-settings-section-header-media #customize-control-elation-noteon-all-pages-slider' ).show();
            } else {
                $( '#sub-accordion-section-elation-panel-settings-section-header-media #customize-control-elation-noteon-all-pages-slider' ).hide();
            }
        }

        // Page Title Check
        var elation_pagetitle = $( '#customize-control-elation-pagetitle-layout select' ).val();
        elation_pagetitle_value_check( elation_pagetitle );
        $( '#customize-control-elation-pagetitle-layout select' ).on( 'change', function() {
            var elation_pagetitle_value = $( this ).val();
            elation_pagetitle_value_check( elation_pagetitle_value );
        } );
        function elation_pagetitle_value_check( elation_pagetitle_value ) {
            if ( elation_pagetitle_value == 'elation-pagetitle-cheader' ) {
                $( '#sub-accordion-section-elation-panel-settings-section-title #customize-control-elation-noteon-pagetitle-cheader' ).show();
                $( '#sub-accordion-section-elation-panel-colors-section-content #customize-control-elation-content-title-bg-color' ).hide();
            } else if ( elation_pagetitle_value == 'elation-pagetitle-banner' ) {
                $( '#sub-accordion-section-elation-panel-settings-section-title #customize-control-elation-noteon-pagetitle-cheader' ).hide();
                $( '#sub-accordion-section-elation-panel-colors-section-content #customize-control-elation-content-title-bg-color' ).show();
            } else {
                $( '#sub-accordion-section-elation-panel-settings-section-title #customize-control-elation-noteon-pagetitle-cheader' ).hide();
                $( '#sub-accordion-section-elation-panel-colors-section-content #customize-control-elation-content-title-bg-color' ).hide();
            }
        }

        // Blog Layout Check
        var elation_blog = $( '#customize-control-elation-blog-list-layout select' ).val();
        elation_blog_value_check( elation_blog );
        $( '#customize-control-elation-blog-list-layout select' ).on( 'change', function() {
            var elation_blog_value = $( this ).val();
            elation_blog_value_check( elation_blog_value );
        } );
        function elation_blog_value_check( elation_blog_value ) {
            if ( elation_blog_value == 'elation-blog-tile' ) {
                $( '#sub-accordion-section-elation-panel-blog-settings-list #customize-control-elation-blog-vert-center-items' ).hide();
                $( '#sub-accordion-section-elation-panel-blog-settings-list #customize-control-elation-blog-list-post-space' ).hide();
                $( '#sub-accordion-section-elation-panel-blog-settings-list #customize-control-elation-blog-grid-space' ).hide();
                $( '#sub-accordion-section-elation-panel-blog-settings-list #customize-control-elation-blog-grid-cols' ).show();
                $( '#sub-accordion-section-elation-panel-blog-settings-list #customize-control-elation-blog-top-center' ).show();
                $( '#sub-accordion-section-elation-panel-blog-settings-list #customize-control-elation-blog-content-off' ).show();
                $( '#sub-accordion-section-elation-panel-blog-settings-list #customize-control-elation-blog-tile-anim' ).show();
            } else if ( elation_blog_value == 'elation-blog-grid' ) {
                $( '#sub-accordion-section-elation-panel-blog-settings-list #customize-control-elation-blog-vert-center-items' ).hide();
                $( '#sub-accordion-section-elation-panel-blog-settings-list #customize-control-elation-blog-list-post-space' ).hide();
                $( '#sub-accordion-section-elation-panel-blog-settings-list #customize-control-elation-blog-grid-cols' ).show();
                $( '#sub-accordion-section-elation-panel-blog-settings-list #customize-control-elation-blog-grid-space' ).show();
                $( '#sub-accordion-section-elation-panel-blog-settings-list #customize-control-elation-blog-top-center' ).show();
                $( '#sub-accordion-section-elation-panel-blog-settings-list #customize-control-elation-blog-content-off' ).hide();
                $( '#sub-accordion-section-elation-panel-blog-settings-list #customize-control-elation-blog-tile-anim' ).hide();
            } else if ( elation_blog_value == 'elation-blog-top' ) {
                $( '#sub-accordion-section-elation-panel-blog-settings-list #customize-control-elation-blog-vert-center-items' ).hide();
                $( '#sub-accordion-section-elation-panel-blog-settings-list #customize-control-elation-blog-list-post-space' ).show();
                $( '#sub-accordion-section-elation-panel-blog-settings-list #customize-control-elation-blog-grid-cols' ).hide();
                $( '#sub-accordion-section-elation-panel-blog-settings-list #customize-control-elation-blog-grid-space' ).hide();
                $( '#sub-accordion-section-elation-panel-blog-settings-list #customize-control-elation-blog-top-center' ).show();
                $( '#sub-accordion-section-elation-panel-blog-settings-list #customize-control-elation-blog-content-off' ).hide();
                $( '#sub-accordion-section-elation-panel-blog-settings-list #customize-control-elation-blog-tile-anim' ).hide();
            } else {
                $( '#sub-accordion-section-elation-panel-blog-settings-list #customize-control-elation-blog-grid-cols' ).hide();
                $( '#sub-accordion-section-elation-panel-blog-settings-list #customize-control-elation-blog-grid-space' ).hide();
                $( '#sub-accordion-section-elation-panel-blog-settings-list #customize-control-elation-blog-top-center' ).hide();
                $( '#sub-accordion-section-elation-panel-blog-settings-list #customize-control-elation-blog-vert-center-items' ).show();
                $( '#sub-accordion-section-elation-panel-blog-settings-list #customize-control-elation-blog-list-post-space' ).show();
                $( '#sub-accordion-section-elation-panel-blog-settings-list #customize-control-elation-blog-content-off' ).hide();
                $( '#sub-accordion-section-elation-panel-blog-settings-list #customize-control-elation-blog-tile-anim' ).hide();
            }
        }
        
        // Show / Hide Blog Extra Search Settings
        elation_blog_search_check();
        $( '#customize-control-elation-blog-list-search input[type=checkbox]' ).on( 'change', function() {
            elation_blog_search_check();
        });
        function elation_blog_search_check() {
            if ( $( '#customize-control-elation-blog-list-search input[type=checkbox]' ).is( ':checked' ) ) {
                $( '#sub-accordion-section-elation-panel-blog-settings-list #customize-control-elation-blog-search-list-layout' ).show();
            } else {
                $( '#sub-accordion-section-elation-panel-blog-settings-list #customize-control-elation-blog-search-list-layout' ).hide();
            }
        }
        // Show / Hide Blog Image Select
        var elation_img_select = $( '#customize-control-elation-blog-list-img-prop select' ).val();
        elation_img_select_value_check( elation_img_select );
        $( '#customize-control-elation-blog-list-img-prop select' ).on( 'change', function() {
            var elation_img_select_value = $( this ).val();
            elation_img_select_value_check( elation_img_select_value );
        } );
        function elation_img_select_value_check( elation_img_select_value ) {
            if ( elation_img_select_value == 'post-thumbnail' ) {
                $( '#sub-accordion-section-elation-panel-blog-settings-list #customize-control-elation-blog-list-img-cut' ).hide();
            } else {
                $( '#sub-accordion-section-elation-panel-blog-settings-list #customize-control-elation-blog-list-img-cut' ).show();
            }
        }
        // Show / Hide Advanced Blog Settings
        elation_blog_advanced_check();
        $( '#customize-control-elation-blog-advanced-set input[type=checkbox]' ).on( 'change', function() {
            elation_blog_advanced_check();
        });
        function elation_blog_advanced_check() {
            if ( $( '#customize-control-elation-blog-advanced-set input[type=checkbox]' ).is( ':checked' ) ) {
                $( '#sub-accordion-section-elation-panel-blog-settings-list #customize-control-elation-blog-list-imgcont-size' ).show();
                $( '#sub-accordion-section-elation-panel-blog-settings-list #customize-control-elation-blog-list-title-space' ).show();
                $( '#sub-accordion-section-elation-panel-blog-settings-list #customize-control-elation-blog-list-title-font-size' ).show();
                $( '#sub-accordion-section-elation-panel-blog-settings-list #customize-control-elation-blog-list-title-fweight' ).show();
                $( '#sub-accordion-section-elation-panel-blog-settings-list #customize-control-elation-blog-list-font-size' ).show();
            } else {
                $( '#sub-accordion-section-elation-panel-blog-settings-list #customize-control-elation-blog-list-imgcont-size' ).hide();
                $( '#sub-accordion-section-elation-panel-blog-settings-list #customize-control-elation-blog-list-title-space' ).hide();
                $( '#sub-accordion-section-elation-panel-blog-settings-list #customize-control-elation-blog-list-title-font-size' ).hide();
                $( '#sub-accordion-section-elation-panel-blog-settings-list #customize-control-elation-blog-list-title-fweight' ).hide();
                $( '#sub-accordion-section-elation-panel-blog-settings-list #customize-control-elation-blog-list-font-size' ).hide();
            }
        }

        // Show / Hide Post Meta Options
        var elation_postlay_select = $( '#customize-control-elation-blog-postlay select' ).val();
        elation_postlay_select_value_check( elation_postlay_select );
        $( '#customize-control-elation-blog-postlay select' ).on( 'change', function() {
            var elation_postlay_select_value = $( this ).val();
            elation_postlay_select_value_check( elation_postlay_select_value );
        } );
        function elation_postlay_select_value_check( elation_postlay_select_value ) {
            if ( elation_postlay_select_value == 'elation-postlay-default' ) {
                $( '#sub-accordion-section-elation-panel-blog-settings-single-post #customize-control-elation-blog-post-meta-inline' ).hide();
            } else {
                $( '#sub-accordion-section-elation-panel-blog-settings-single-post #customize-control-elation-blog-post-meta-inline' ).show();
            }
        }

        // Show / Hide Author Block Settings
        elation_authorblock_check();
        $( '#customize-control-elation-blog-add-authorblock input[type=checkbox]' ).on( 'change', function() {
            elation_authorblock_check();
        });
        function elation_authorblock_check() {
            if ( $( '#customize-control-elation-blog-add-authorblock input[type=checkbox]' ).is( ':checked' ) ) {
                $( '#sub-accordion-section-elation-panel-blog-settings-single-post #customize-control-elation-blog-authorblock-style' ).show();
                $( '#sub-accordion-section-elation-panel-blog-settings-single-post #customize-control-elation-blog-authorblock-txt' ).show();
                $( '#sub-accordion-section-elation-panel-blog-settings-single-post #customize-control-elation-blog-authorblock-width' ).show();
            } else {
                $( '#sub-accordion-section-elation-panel-blog-settings-single-post #customize-control-elation-blog-authorblock-style' ).hide();
                $( '#sub-accordion-section-elation-panel-blog-settings-single-post #customize-control-elation-blog-authorblock-txt' ).hide();
                $( '#sub-accordion-section-elation-panel-blog-settings-single-post #customize-control-elation-blog-authorblock-width' ).hide();
            }
        }

        // Show / Hide footer layout settings
        var elation_footer_select_value = $( '#customize-control-elation-footer-layout select' ).val();
        elation_footer_value_check( elation_footer_select_value );

        $( '#customize-control-elation-footer-layout select' ).on( 'change', function() {
            var elation_selected_footer = $( this ).val();
            elation_footer_value_check( elation_selected_footer );
            elation_footer_custom_check();
        } );
        function elation_footer_value_check( elation_selected_footer ) {
            if ( elation_selected_footer == 'footer-none' ) {
                $( '#sub-accordion-section-elation-panel-settings-section-footer #customize-control-elation-noteon-footer-default' ).hide();
                $( '#sub-accordion-section-elation-panel-settings-section-footer #customize-control-elation-noteon-footer-social' ).hide();
                $( '#sub-accordion-section-elation-panel-settings-section-footer #customize-control-elation-noteon-footer-split' ).hide();
                $( '#sub-accordion-section-elation-panel-settings-section-footer #customize-control-elation-footer-custom-cols' ).hide();
                $( '#sub-accordion-section-elation-panel-settings-section-footer #customize-control-elation-footer-customize' ).hide();
                $( '#sub-accordion-section-elation-panel-settings-section-footer #customize-control-elation-footer-widget-space' ).hide();
                $( '#sub-accordion-section-elation-panel-settings-section-footer #customize-control-elation-footer-widget-botspace' ).hide();
                $( '#sub-accordion-section-elation-panel-settings-section-footer #customize-control-elation-footalign' ).hide();
                $( '#sub-accordion-section-elation-panel-settings-section-footer #customize-control-elation-footer-social-menuitems-one' ).hide();
                $( '#sub-accordion-section-elation-panel-settings-section-footer #customize-control-elation-footer-remove-social' ).hide();
                $( '#sub-accordion-section-elation-panel-settings-section-footer #customize-control-elation-footer-icon-style' ).hide();
                $( '#sub-accordion-section-elation-panel-settings-section-footer #customize-control-elation-footer-icon-size' ).hide();
                $( '#sub-accordion-section-elation-panel-settings-section-footer #customize-control-elation-footer-icon-space' ).hide();
                $( '#sub-accordion-section-elation-panel-settings-section-footer #customize-control-elation-footdivide-style' ).hide();
                $( '#sub-accordion-section-elation-panel-font-settings-section-footer #customize-control-elation-footer-title-size' ).hide();
                $( '#sub-accordion-section-elation-panel-font-settings-section-footer #customize-control-elation-footer-title-weight' ).hide();
                $( '#sub-accordion-section-elation-panel-font-settings-section-footer #customize-control-elation-footer-title-uc' ).hide();
                $( '#sub-accordion-section-elation-panel-font-settings-section-footer #customize-control-elation-footer-title-space' ).hide();
                $( '#sub-accordion-section-elation-panel-settings-section-footer #customize-control-elation-footer-top-pad' ).hide();
                $( '#sub-accordion-section-elation-panel-settings-section-footer #customize-control-elation-footer-bottom-pad' ).hide();
                $( '#sub-accordion-section-elation-panel-colors-section-footer #customize-control-elation-footer-title-font-color' ).hide();
                $( '#sub-accordion-section-elation-panel-colors-section-footer #customize-control-elation-footer-social-icons-color' ).hide();
                $( '#sub-accordion-section-elation-panel-settings-section-footer #customize-control-elation-noteon-footer-none' ).show();
                $( '#sub-accordion-panel-elation-panel-font-settings #accordion-section-elation-panel-font-settings-section-footer' ).addClass( 'elation-remove-panel' );
                elation_footer_custom_check();
            } else if ( elation_selected_footer == 'footer-basic' ) {
                $( '#sub-accordion-section-elation-panel-settings-section-footer #customize-control-elation-bottombar-layout' ).hide();
                $( '#sub-accordion-section-elation-panel-settings-section-footer #customize-control-elation-noteon-footer-default' ).hide();
                $( '#sub-accordion-section-elation-panel-settings-section-footer #customize-control-elation-noteon-footer-social' ).hide();
                $( '#sub-accordion-section-elation-panel-settings-section-footer #customize-control-elation-noteon-footer-split' ).hide();
                $( '#sub-accordion-section-elation-panel-settings-section-footer #customize-control-elation-noteon-footer-none' ).hide();
                $( '#sub-accordion-section-elation-panel-settings-section-footer #customize-control-elation-noteon-footer-social' ).hide();
                $( '#sub-accordion-section-elation-panel-settings-section-footer #customize-control-elation-footer-custom-cols' ).hide();
                $( '#sub-accordion-section-elation-panel-settings-section-footer #customize-control-elation-footer-customize' ).hide();
                $( '#sub-accordion-section-elation-panel-settings-section-footer #customize-control-elation-footer-widget-space' ).hide();
                $( '#sub-accordion-section-elation-panel-settings-section-footer #customize-control-elation-footer-widget-botspace' ).hide();
                $( '#sub-accordion-section-elation-panel-settings-section-footer #customize-control-elation-footer-social-menuitems-one' ).hide();
                $( '#sub-accordion-section-elation-panel-settings-section-footer #customize-control-elation-footer-icon-style' ).hide();
                $( '#sub-accordion-section-elation-panel-settings-section-footer #customize-control-elation-footer-icon-size' ).hide();
                $( '#sub-accordion-section-elation-panel-settings-section-footer #customize-control-elation-footalign' ).hide();
                $( '#sub-accordion-section-elation-panel-settings-section-footer #customize-control-elation-remove-botbar-social' ).hide();
                $( '#sub-accordion-section-elation-panel-settings-section-footer #customize-control-elation-footdivide-style' ).hide();
                $( '#sub-accordion-section-elation-panel-settings-section-footer #customize-control-elation-footer-icon-space' ).hide();
                $( '#sub-accordion-section-elation-panel-settings-section-footer #customize-control-elation-add-botbar-fullcart' ).hide();
                $( '#sub-accordion-section-elation-panel-font-settings-section-footer #customize-control-elation-footer-title-size' ).hide();
                $( '#sub-accordion-section-elation-panel-font-settings-section-footer #customize-control-elation-footer-title-weight' ).hide();
                $( '#sub-accordion-section-elation-panel-font-settings-section-footer #customize-control-elation-footer-title-uc' ).hide();
                $( '#sub-accordion-section-elation-panel-font-settings-section-footer #customize-control-elation-footer-title-space' ).hide();
                $( '#sub-accordion-section-elation-panel-colors-section-footer #customize-control-elation-footer-title-font-color' ).hide();
                $( '#sub-accordion-section-elation-panel-font-settings-section-footer #customize-control-elation-footer-lheight' ).hide();
                $( '#sub-accordion-section-elation-panel-settings-section-footer #customize-control-elation-footer-top-pad' ).show();
                $( '#sub-accordion-section-elation-panel-settings-section-footer #customize-control-elation-footer-bottom-pad' ).show();
                $( '#sub-accordion-section-elation-panel-settings-section-footer #customize-control-elation-footer-remove-social' ).show();
                $( '#sub-accordion-section-elation-panel-colors-section-footer #customize-control-elation-footer-social-icons-color' ).hide();
                $( '#sub-accordion-panel-elation-panel-font-settings #accordion-section-elation-panel-font-settings-section-footer' ).removeClass( 'elation-remove-panel' );
                elation_footer_custom_check();
            } else if ( elation_selected_footer == 'footer-social' ) {
                $( '#sub-accordion-section-elation-panel-settings-section-footer #customize-control-elation-noteon-footer-default' ).hide();
                $( '#sub-accordion-section-elation-panel-settings-section-footer #customize-control-elation-noteon-footer-social' ).hide();
                $( '#sub-accordion-section-elation-panel-settings-section-footer #customize-control-elation-noteon-footer-split' ).hide();
                $( '#sub-accordion-section-elation-panel-settings-section-footer #customize-control-elation-noteon-footer-none' ).hide();
                $( '#sub-accordion-section-elation-panel-settings-section-footer #customize-control-elation-footer-custom-cols' ).hide();
                $( '#sub-accordion-section-elation-panel-settings-section-footer #customize-control-elation-footer-customize' ).hide();
                $( '#sub-accordion-section-elation-panel-settings-section-footer #customize-control-elation-footer-widget-space' ).hide();
                $( '#sub-accordion-section-elation-panel-settings-section-footer #customize-control-elation-footer-widget-botspace' ).hide();
                $( '#sub-accordion-section-elation-panel-settings-section-footer #customize-control-elation-footalign' ).hide();
                $( '#sub-accordion-section-elation-panel-settings-section-footer #customize-control-elation-footer-social-menuitems-one' ).hide();
                $( '#sub-accordion-section-elation-panel-settings-section-footer #customize-control-elation-footdivide-style' ).hide();
                $( '#sub-accordion-section-elation-panel-font-settings-section-footer #customize-control-elation-footer-title-size' ).hide();
                $( '#sub-accordion-section-elation-panel-font-settings-section-footer #customize-control-elation-footer-title-weight' ).hide();
                $( '#sub-accordion-section-elation-panel-font-settings-section-footer #customize-control-elation-footer-title-uc' ).hide();
                $( '#sub-accordion-section-elation-panel-font-settings-section-footer #customize-control-elation-footer-title-space' ).hide();
                $( '#sub-accordion-section-elation-panel-colors-section-footer #customize-control-elation-footer-title-font-color' ).hide();
                $( '#sub-accordion-section-elation-panel-settings-section-footer #customize-control-elation-footer-top-pad' ).show();
                $( '#sub-accordion-section-elation-panel-settings-section-footer #customize-control-elation-footer-bottom-pad' ).show();
                $( '#sub-accordion-section-elation-panel-settings-section-footer #customize-control-elation-footer-icon-style' ).show();
                $( '#sub-accordion-section-elation-panel-settings-section-footer #customize-control-elation-footer-icon-size' ).show();
                $( '#sub-accordion-section-elation-panel-settings-section-footer #customize-control-elation-footer-icon-space' ).show();
                $( '#sub-accordion-section-elation-panel-settings-section-footer #customize-control-elation-noteon-footer-social' ).show();
                $( '#sub-accordion-section-elation-panel-settings-section-footer #customize-control-elation-footer-remove-social' ).show();
                $( '#sub-accordion-section-elation-panel-colors-section-footer #customize-control-elation-footer-social-icons-color' ).show();
                $( '#sub-accordion-panel-elation-panel-font-settings #accordion-section-elation-panel-font-settings-section-footer' ).removeClass( 'elation-remove-panel' );
                elation_footer_custom_check();
            } else if ( elation_selected_footer == 'footer-social-two' ) {
                $( '#sub-accordion-section-elation-panel-settings-section-footer #customize-control-elation-noteon-footer-default' ).hide();
                $( '#sub-accordion-section-elation-panel-settings-section-footer #customize-control-elation-noteon-footer-social' ).hide();
                $( '#sub-accordion-section-elation-panel-settings-section-footer #customize-control-elation-noteon-footer-split' ).hide();
                $( '#sub-accordion-section-elation-panel-settings-section-footer #customize-control-elation-noteon-footer-none' ).hide();
                $( '#sub-accordion-section-elation-panel-settings-section-footer #customize-control-elation-footer-custom-cols' ).hide();
                $( '#sub-accordion-section-elation-panel-settings-section-footer #customize-control-elation-footer-customize' ).hide();
                $( '#sub-accordion-section-elation-panel-settings-section-footer #customize-control-elation-footer-widget-space' ).hide();
                $( '#sub-accordion-section-elation-panel-settings-section-footer #customize-control-elation-footer-widget-botspace' ).hide();
                $( '#sub-accordion-section-elation-panel-settings-section-footer #customize-control-elation-footalign' ).hide();
                $( '#sub-accordion-section-elation-panel-settings-section-footer #customize-control-elation-footdivide-style' ).hide();
                $( '#sub-accordion-section-elation-panel-font-settings-section-footer #customize-control-elation-footer-title-size' ).hide();
                $( '#sub-accordion-section-elation-panel-font-settings-section-footer #customize-control-elation-footer-title-weight' ).hide();
                $( '#sub-accordion-section-elation-panel-font-settings-section-footer #customize-control-elation-footer-title-uc' ).hide();
                $( '#sub-accordion-section-elation-panel-font-settings-section-footer #customize-control-elation-footer-title-space' ).hide();
                $( '#sub-accordion-section-elation-panel-colors-section-footer #customize-control-elation-footer-title-font-color' ).hide();
                $( '#sub-accordion-section-elation-panel-settings-section-footer #customize-control-elation-footer-social-menuitems-one' ).show();
                $( '#sub-accordion-section-elation-panel-settings-section-footer #customize-control-elation-footer-top-pad' ).show();
                $( '#sub-accordion-section-elation-panel-settings-section-footer #customize-control-elation-footer-bottom-pad' ).show();
                $( '#sub-accordion-section-elation-panel-settings-section-footer #customize-control-elation-footer-icon-style' ).show();
                $( '#sub-accordion-section-elation-panel-settings-section-footer #customize-control-elation-footer-icon-size' ).show();
                $( '#sub-accordion-section-elation-panel-settings-section-footer #customize-control-elation-footer-icon-space' ).show();
                $( '#sub-accordion-section-elation-panel-settings-section-footer #customize-control-elation-noteon-footer-social' ).show();
                $( '#sub-accordion-section-elation-panel-settings-section-footer #customize-control-elation-footer-remove-social' ).show();
                $( '#sub-accordion-section-elation-panel-colors-section-footer #customize-control-elation-footer-social-icons-color' ).show();
                $( '#sub-accordion-panel-elation-panel-font-settings #accordion-section-elation-panel-font-settings-section-footer' ).removeClass( 'elation-remove-panel' );
                elation_footer_custom_check();
            } else if ( elation_selected_footer == 'footer-split' ) {
                $( '#sub-accordion-section-elation-panel-settings-section-footer #customize-control-elation-noteon-footer-default' ).hide();
                $( '#sub-accordion-section-elation-panel-settings-section-footer #customize-control-elation-noteon-footer-social' ).hide();
                $( '#sub-accordion-section-elation-panel-settings-section-footer #customize-control-elation-noteon-footer-none' ).hide();
                $( '#sub-accordion-section-elation-panel-settings-section-footer #customize-control-elation-footer-custom-cols' ).hide();
                $( '#sub-accordion-section-elation-panel-settings-section-footer #customize-control-elation-footer-customize' ).hide();
                $( '#sub-accordion-section-elation-panel-settings-section-footer #customize-control-elation-footer-remove-social' ).hide();
                $( '#sub-accordion-section-elation-panel-settings-section-footer #customize-control-elation-footer-icon-style' ).hide();
                $( '#sub-accordion-section-elation-panel-settings-section-footer #customize-control-elation-footer-icon-size' ).hide();
                $( '#sub-accordion-section-elation-panel-settings-section-footer #customize-control-elation-footer-icon-space' ).hide();
                $( '#sub-accordion-section-elation-panel-settings-section-footer #customize-control-elation-footer-social-menuitems-one' ).hide();
                $( '#sub-accordion-section-elation-panel-settings-section-footer #customize-control-elation-footer-top-pad' ).show();
                $( '#sub-accordion-section-elation-panel-settings-section-footer #customize-control-elation-footer-bottom-pad' ).show();
                $( '#sub-accordion-section-elation-panel-settings-section-footer #customize-control-elation-noteon-footer-split' ).show();
                $( '#sub-accordion-section-elation-panel-settings-section-footer #customize-control-elation-footer-widget-space' ).show();
                $( '#sub-accordion-section-elation-panel-settings-section-footer #customize-control-elation-footer-widget-botspace' ).hide();
                $( '#sub-accordion-section-elation-panel-settings-section-footer #customize-control-elation-footalign' ).show();
                $( '#sub-accordion-section-elation-panel-settings-section-footer #customize-control-elation-footdivide-style' ).show();
                $( '#sub-accordion-section-elation-panel-font-settings-section-footer #customize-control-elation-footer-title-size' ).show();
                $( '#sub-accordion-section-elation-panel-font-settings-section-footer #customize-control-elation-footer-title-weight' ).show();
                $( '#sub-accordion-section-elation-panel-font-settings-section-footer #customize-control-elation-footer-title-uc' ).show();
                $( '#sub-accordion-section-elation-panel-font-settings-section-footer #customize-control-elation-footer-title-space' ).show();
                $( '#sub-accordion-section-elation-panel-colors-section-footer #customize-control-elation-footer-title-font-color' ).show();
                $( '#sub-accordion-section-elation-panel-colors-section-footer #customize-control-elation-footer-social-icons-color' ).hide();
                $( '#sub-accordion-panel-elation-panel-font-settings #accordion-section-elation-panel-font-settings-section-footer' ).removeClass( 'elation-remove-panel' );
                elation_footer_custom_check();
            } else {
                $( '#sub-accordion-section-elation-panel-settings-section-footer #customize-control-elation-noteon-footer-social' ).hide();
                $( '#sub-accordion-section-elation-panel-settings-section-footer #customize-control-elation-noteon-footer-split' ).hide();
                $( '#sub-accordion-section-elation-panel-settings-section-footer #customize-control-elation-noteon-footer-none' ).hide();
                $( '#sub-accordion-section-elation-panel-settings-section-footer #customize-control-elation-footer-remove-social' ).hide();
                $( '#sub-accordion-section-elation-panel-settings-section-footer #customize-control-elation-footer-icon-style' ).hide();
                $( '#sub-accordion-section-elation-panel-settings-section-footer #customize-control-elation-footer-icon-size' ).hide();
                $( '#sub-accordion-section-elation-panel-settings-section-footer #customize-control-elation-footer-icon-space' ).hide();
                $( '#sub-accordion-section-elation-panel-settings-section-footer #customize-control-elation-footer-social-menuitems-one' ).hide();
                $( '#sub-accordion-section-elation-panel-settings-section-footer #customize-control-elation-footer-top-pad' ).show();
                $( '#sub-accordion-section-elation-panel-settings-section-footer #customize-control-elation-footer-bottom-pad' ).show();
                $( '#sub-accordion-section-elation-panel-settings-section-footer #customize-control-elation-noteon-footer-default' ).show();
                $( '#sub-accordion-section-elation-panel-settings-section-footer #customize-control-elation-footer-custom-cols' ).show();
                $( '#sub-accordion-section-elation-panel-settings-section-footer #customize-control-elation-footer-customize' ).show();
                $( '#sub-accordion-section-elation-panel-settings-section-footer #customize-control-elation-footer-widget-space' ).show();
                $( '#sub-accordion-section-elation-panel-settings-section-footer #customize-control-elation-footer-widget-botspace' ).show();
                $( '#sub-accordion-section-elation-panel-settings-section-footer #customize-control-elation-footalign' ).show();
                $( '#sub-accordion-section-elation-panel-settings-section-footer #customize-control-elation-footdivide-style' ).show();
                $( '#sub-accordion-section-elation-panel-font-settings-section-footer #customize-control-elation-footer-title-size' ).show();
                $( '#sub-accordion-section-elation-panel-font-settings-section-footer #customize-control-elation-footer-title-weight' ).show();
                $( '#sub-accordion-section-elation-panel-font-settings-section-footer #customize-control-elation-footer-title-uc' ).show();
                $( '#sub-accordion-section-elation-panel-font-settings-section-footer #customize-control-elation-footer-title-space' ).show();
                $( '#sub-accordion-section-elation-panel-colors-section-footer #customize-control-elation-footer-title-font-color' ).show();
                $( '#sub-accordion-section-elation-panel-colors-section-footer #customize-control-elation-footer-social-icons-color' ).hide();
                $( '#sub-accordion-panel-elation-panel-font-settings #accordion-section-elation-panel-font-settings-section-footer' ).removeClass( 'elation-remove-panel' );
                elation_footer_custom_check();
            }
        }

        $( '#customize-control-elation-footer-custom-cols select, #customize-control-elation-footer-customize input[type=checkbox]' ).on( 'change', function() {
            elation_footer_custom_check();
        });

        function elation_footer_custom_check() {
            if ( $( '#customize-control-elation-footer-layout select' ).val() == 'footer-default' && $( '#customize-control-elation-footer-customize input[type=checkbox]' ).is( ':checked' ) ) {
                if ( $( '#customize-control-elation-footer-custom-cols select' ).val() == 'elation-footer-custom-cols-1' ) {
                    $( '#sub-accordion-section-elation-panel-settings-section-footer #customize-control-elation-footer-customize-col-1' ).show();
                    $( '#sub-accordion-section-elation-panel-settings-section-footer #customize-control-elation-center-col-1' ).show();
                    $( '#sub-accordion-section-elation-panel-settings-section-footer #customize-control-elation-footer-customize-col-2' ).hide();
                    $( '#sub-accordion-section-elation-panel-settings-section-footer #customize-control-elation-footer-customize-col-3' ).hide();
                    $( '#sub-accordion-section-elation-panel-settings-section-footer #customize-control-elation-footer-customize-col-4' ).hide();
                    $( '#sub-accordion-section-elation-panel-settings-section-footer #customize-control-elation-footer-customize-col-5' ).hide();
                } else if ( $( '#customize-control-elation-footer-custom-cols select' ).val() == 'elation-footer-custom-cols-2' ) {
                    $( '#sub-accordion-section-elation-panel-settings-section-footer #customize-control-elation-footer-customize-col-1' ).show();
                    $( '#sub-accordion-section-elation-panel-settings-section-footer #customize-control-elation-center-col-1' ).hide();
                    $( '#sub-accordion-section-elation-panel-settings-section-footer #customize-control-elation-footer-customize-col-2' ).show();
                    $( '#sub-accordion-section-elation-panel-settings-section-footer #customize-control-elation-footer-customize-col-3' ).hide();
                    $( '#sub-accordion-section-elation-panel-settings-section-footer #customize-control-elation-footer-customize-col-4' ).hide();
                    $( '#sub-accordion-section-elation-panel-settings-section-footer #customize-control-elation-footer-customize-col-5' ).hide();
                } else if ( $( '#customize-control-elation-footer-custom-cols select' ).val() == 'elation-footer-custom-cols-4' ) {
                    $( '#sub-accordion-section-elation-panel-settings-section-footer #customize-control-elation-footer-customize-col-1' ).show();
                    $( '#sub-accordion-section-elation-panel-settings-section-footer #customize-control-elation-center-col-1' ).hide();
                    $( '#sub-accordion-section-elation-panel-settings-section-footer #customize-control-elation-footer-customize-col-2' ).show();
                    $( '#sub-accordion-section-elation-panel-settings-section-footer #customize-control-elation-footer-customize-col-3' ).show();
                    $( '#sub-accordion-section-elation-panel-settings-section-footer #customize-control-elation-footer-customize-col-4' ).show();
                    $( '#sub-accordion-section-elation-panel-settings-section-footer #customize-control-elation-footer-customize-col-5' ).hide();
                } else if ( $( '#customize-control-elation-footer-custom-cols select' ).val() == 'elation-footer-custom-cols-5' ) {
                    $( '#sub-accordion-section-elation-panel-settings-section-footer #customize-control-elation-footer-customize-col-1' ).show();
                    $( '#sub-accordion-section-elation-panel-settings-section-footer #customize-control-elation-center-col-1' ).hide();
                    $( '#sub-accordion-section-elation-panel-settings-section-footer #customize-control-elation-footer-customize-col-2' ).show();
                    $( '#sub-accordion-section-elation-panel-settings-section-footer #customize-control-elation-footer-customize-col-3' ).show();
                    $( '#sub-accordion-section-elation-panel-settings-section-footer #customize-control-elation-footer-customize-col-4' ).show();
                    $( '#sub-accordion-section-elation-panel-settings-section-footer #customize-control-elation-footer-customize-col-5' ).show();
                } else {
                    $( '#sub-accordion-section-elation-panel-settings-section-footer #customize-control-elation-footer-customize-col-1' ).show();
                    $( '#sub-accordion-section-elation-panel-settings-section-footer #customize-control-elation-center-col-1' ).hide();
                    $( '#sub-accordion-section-elation-panel-settings-section-footer #customize-control-elation-footer-customize-col-2' ).show();
                    $( '#sub-accordion-section-elation-panel-settings-section-footer #customize-control-elation-footer-customize-col-3' ).show();
                    $( '#sub-accordion-section-elation-panel-settings-section-footer #customize-control-elation-footer-customize-col-4' ).hide();
                    $( '#sub-accordion-section-elation-panel-settings-section-footer #customize-control-elation-footer-customize-col-5' ).hide();
                }
            } else {
                $( '#sub-accordion-section-elation-panel-settings-section-footer #customize-control-elation-footer-customize-col-1' ).hide();
                $( '#sub-accordion-section-elation-panel-settings-section-footer #customize-control-elation-center-col-1' ).hide();
                $( '#sub-accordion-section-elation-panel-settings-section-footer #customize-control-elation-footer-customize-col-2' ).hide();
                $( '#sub-accordion-section-elation-panel-settings-section-footer #customize-control-elation-footer-customize-col-3' ).hide();
                $( '#sub-accordion-section-elation-panel-settings-section-footer #customize-control-elation-footer-customize-col-4' ).hide();
                $( '#sub-accordion-section-elation-panel-settings-section-footer #customize-control-elation-footer-customize-col-5' ).hide();
            }
        }

        // Footer Background Image settings
        elation_footerbgimg_check();
        $( '#customize-control-elation-add-footer-bgimg input[type=checkbox]' ).on( 'change', function() {
            elation_footerbgimg_check();
        });
        function elation_footerbgimg_check() {
            if ( $( '#customize-control-elation-add-footer-bgimg input[type=checkbox]' ).is( ':checked' ) ) {
                $( '#sub-accordion-section-elation-panel-settings-section-footer #customize-control-elation-footer-bgimg' ).show();
                $( '#sub-accordion-section-elation-panel-settings-section-footer #customize-control-elation-footer-bgimg-repeat' ).show();
                $( '#sub-accordion-section-elation-panel-settings-section-footer #customize-control-elation-footer-bgimg-align' ).show();
                $( '#sub-accordion-section-elation-panel-settings-section-footer #customize-control-elation-footer-botbar-clear' ).show();
                $( '#sub-accordion-section-elation-panel-mobile-section-footer #customize-control-elation-onmobile-remove-footer-bgimg' ).show();
            } else {
                $( '#sub-accordion-section-elation-panel-settings-section-footer #customize-control-elation-footer-bgimg' ).hide();
                $( '#sub-accordion-section-elation-panel-settings-section-footer #customize-control-elation-footer-bgimg-repeat' ).hide();
                $( '#sub-accordion-section-elation-panel-settings-section-footer #customize-control-elation-footer-bgimg-align' ).hide();
                $( '#sub-accordion-section-elation-panel-settings-section-footer #customize-control-elation-footer-botbar-clear' ).hide();
                $( '#sub-accordion-section-elation-panel-mobile-section-footer #customize-control-elation-onmobile-remove-footer-bgimg' ).hide();
            }
        }

        // Show / Hide Social Link Settings
        elation_social_set_check();
        $( '#customize-control-elation-social-add-sideicons input[type=checkbox]' ).on( 'change', function() {
            elation_social_set_check();
        });
        function elation_social_set_check() {
            if ( $( '#customize-control-elation-social-add-sideicons input[type=checkbox]' ).is( ':checked' ) ) {
                $( '#sub-accordion-section-elation-panel-social-section-links-settings #customize-control-elation-social-set-sideicons-left' ).show();
                $( '#sub-accordion-section-elation-panel-social-section-links-settings #customize-control-elation-social-let-scroll' ).show();
                $( '#sub-accordion-section-elation-panel-social-section-links-settings #customize-control-elation-site-side-social-top' ).show();
                $( '#sub-accordion-section-elation-panel-social-section-links-settings #customize-control-elation-side-social-look' ).show();
                $( '#sub-accordion-section-elation-panel-social-section-links-settings #customize-control-elation-side-social-size' ).show();
                $( '#sub-accordion-section-elation-panel-social-section-links-settings #customize-control-elation-side-social-space' ).show();
                $( '#sub-accordion-section-elation-panel-mobile-section-footer #customize-control-elation-onmobile-remove-sidesocial' ).show();
            } else {
                $( '#sub-accordion-section-elation-panel-social-section-links-settings #customize-control-elation-social-set-sideicons-left' ).hide();
                $( '#sub-accordion-section-elation-panel-social-section-links-settings #customize-control-elation-social-let-scroll' ).hide();
                $( '#sub-accordion-section-elation-panel-social-section-links-settings #customize-control-elation-site-side-social-top' ).hide();
                $( '#sub-accordion-section-elation-panel-social-section-links-settings #customize-control-elation-side-social-look' ).hide();
                $( '#sub-accordion-section-elation-panel-social-section-links-settings #customize-control-elation-side-social-size' ).hide();
                $( '#sub-accordion-section-elation-panel-social-section-links-settings #customize-control-elation-side-social-space' ).hide();
                $( '#sub-accordion-section-elation-panel-mobile-section-footer #customize-control-elation-onmobile-remove-sidesocial' ).hide();
            }
        }

        
/* Premium Code Stripped by Freemius */


    } );

} )( jQuery );