<?php

/**
 * Elation functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Elation
 */
define( 'ELATION_THEME_VERSION', '1.0.4' );

if ( !function_exists( 'elation_fs' ) ) {
    // Create a helper function for easy SDK access.
    function elation_fs()
    {
        global  $elation_fs ;
        
        if ( !isset( $elation_fs ) ) {
            // Include Freemius SDK.
            require_once dirname( __FILE__ ) . '/freemius/start.php';
            $elation_fs = fs_dynamic_init( array(
                'id'              => '6644',
                'slug'            => 'elation',
                'premium_slug'    => 'elation-pro',
                'type'            => 'theme',
                'public_key'      => 'pk_e8612540d1a6dff63a4eaac789cc6',
                'is_premium'      => false,
                'premium_suffix'  => 'Pro',
                'has_addons'      => false,
                'has_paid_plans'  => true,
                'trial'           => array(
                'days'               => 7,
                'is_require_payment' => true,
            ),
                'has_affiliation' => 'selected',
                'menu'            => array(
                'slug'        => 'elation_info',
                'contact'     => false,
                'support'     => false,
                'affiliation' => false,
                'parent'      => array(
                'slug' => 'themes.php',
            ),
            ),
                'is_live'         => true,
            ) );
        }
        
        return $elation_fs;
    }
    
    // Init Freemius.
    elation_fs();
    // Signal that SDK was initiated.
    do_action( 'elation_fs_loaded' );
}

// Include Overlay Upgrade page
require get_template_directory() . '/inc/admin/admin.php';
// Load Customizer Library scripts
require get_template_directory() . '/customizer/customizer-options.php';
require get_template_directory() . '/customizer/customizer-library/customizer-library.php';
require get_template_directory() . '/customizer/styles.php';
require get_template_directory() . '/customizer/mods.php';
// Load TGM plugin class
require_once get_template_directory() . '/inc/class-tgm-plugin-activation.php';
if ( !function_exists( 'elation_setup' ) ) {
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     */
    function elation_setup()
    {
        /*
         * Make theme available for translation.
         * Translations can be filed in the /languages/ directory.
         * If you're building a theme based on Elation, use a find and replace
         * to change 'elation' to the name of your theme in all the template files.
         */
        load_theme_textdomain( 'elation', get_template_directory() . '/languages' );
        // Add default posts and comments RSS feed links to head.
        add_theme_support( 'automatic-feed-links' );
        /*
         * Let WordPress manage the document title.
         * By adding theme support, we declare that this theme does not use a
         * hard-coded <title> tag in the document head, and expect WordPress to
         * provide it for us.
         */
        add_theme_support( 'title-tag' );
        /*
         * Enable support for Post Thumbnails on posts and pages.
         *
         * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
         */
        add_theme_support( 'post-thumbnails' );
        // This theme uses wp_nav_menu() in one location.
        register_nav_menus( array(
            'elation-main-menu'      => esc_html__( 'Header Main Menu', 'elation' ),
            'elation-topbar-menu'    => esc_html__( 'Header Secondary Menu', 'elation' ),
            'elation-bottombar-menu' => esc_html__( 'Footer Menu', 'elation' ),
        ) );
        /*
         * Switch default core markup for search form, comment form, and comments
         * to output valid HTML5.
         */
        add_theme_support( 'html5', array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption'
        ) );
        // Add theme support for custom header.
        add_theme_support( 'custom-header', apply_filters( 'elation_custom_header_args', array(
            'default-image' => '',
            'width'         => 1200,
            'height'        => 500,
            'flex-height'   => true,
            'flex-width'    => true,
            'header-text'   => false,
            'video'         => true,
        ) ) );
        // Set up the WordPress core custom background feature.
        add_theme_support( 'custom-background', apply_filters( 'elation_custom_background_args', array(
            'default-color' => 'ffffff',
            'default-image' => '',
        ) ) );
        // Add theme support for selective refresh for widgets.
        add_theme_support( 'customize-selective-refresh-widgets' );
        /**
         * Add support for core custom logo.
         *
         * @link https://codex.wordpress.org/Theme_Logo
         */
        add_theme_support( 'custom-logo', array(
            'height'      => 250,
            'width'       => 250,
            'flex-width'  => true,
            'flex-height' => true,
        ) );
        /**
         * Add support for Editor Styles.
         */
        add_theme_support( 'editor-styles' );
        add_editor_style( 'editor-style.css' );
    }

}
add_action( 'after_setup_theme', 'elation_setup' );
/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function elation_content_width()
{
    // This variable is intended to be overruled from themes.
    // Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
    // phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
    // $GLOBALS['content_width'] = apply_filters( 'elation_content_width', 640 );
    if ( !isset( $content_width ) ) {
        $content_width = 1110;
    }
}

add_action( 'after_setup_theme', 'elation_content_width', 0 );
/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function elation_widgets_init()
{
    // Sidear Widget Area
    register_sidebar( array(
        'name'          => esc_html__( 'Sidebar', 'elation' ),
        'id'            => 'sidebar-1',
        'description'   => esc_html__( 'Add widgets to the Sidebar here.', 'elation' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h4 class="widget-title">',
        'after_title'   => '</h4>',
    ) );
    // Default/Custom Footer Layout
    register_sidebar( array(
        'name'         => esc_html__( 'Elation Custom Footer 1', 'elation' ),
        'id'           => 'elation-site-footer-custom-1',
        'before_title' => '<h4 class="widget-title">',
        'after_title'  => '</h4>',
    ) );
    register_sidebar( array(
        'name'         => esc_html__( 'Elation Custom Footer 2', 'elation' ),
        'id'           => 'elation-site-footer-custom-2',
        'before_title' => '<h4 class="widget-title">',
        'after_title'  => '</h4>',
    ) );
    register_sidebar( array(
        'name'         => esc_html__( 'Elation Custom Footer 3', 'elation' ),
        'id'           => 'elation-site-footer-custom-3',
        'before_title' => '<h4 class="widget-title">',
        'after_title'  => '</h4>',
    ) );
    register_sidebar( array(
        'name'         => esc_html__( 'Elation Custom Footer 4', 'elation' ),
        'id'           => 'elation-site-footer-custom-4',
        'before_title' => '<h4 class="widget-title">',
        'after_title'  => '</h4>',
    ) );
    register_sidebar( array(
        'name'         => esc_html__( 'Elation Custom Footer 5', 'elation' ),
        'id'           => 'elation-site-footer-custom-5',
        'before_title' => '<h4 class="widget-title">',
        'after_title'  => '</h4>',
    ) );
    // Split Footer Layout
    register_sidebar( array(
        'name'         => esc_html__( 'Elation Footer - Split Widgets Layout', 'elation' ),
        'id'           => 'elation-site-footer-split',
        'description'  => esc_html__( 'The footer will be split by the amount of widgets added', 'elation' ),
        'before_title' => '<h4 class="widget-title">',
        'after_title'  => '</h4>',
    ) );
}

add_action( 'widgets_init', 'elation_widgets_init' );
/*
 * Change Widgets Title Tags for SEO
 */
function elation_change_widget_titles( array $params )
{
    $elation_widgettitle_tag = get_theme_mod( 'elation-seo-widget-title', customizer_library_get_default( 'elation-seo-widget-title' ) );
    $widget =& $params[0];
    $widget['before_title'] = '<' . tag_escape( $elation_widgettitle_tag ) . ' class="widget-title">';
    $widget['after_title'] = '</' . tag_escape( $elation_widgettitle_tag ) . '>';
    return $params;
}

add_filter( 'dynamic_sidebar_params', 'elation_change_widget_titles', 20 );
/**
 * Enqueue scripts and styles.
 */
function elation_scripts()
{
    if ( !get_theme_mod( 'elation-responsive-disable', customizer_library_get_default( 'elation-responsive-disable' ) ) ) {
        wp_enqueue_style(
            'elation-fonts',
            '//fonts.googleapis.com/css2?family=Crimson+Text:ital,wght@0,400;0,700;1,400;1,700&family=Nunito+Sans:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&display=swap',
            array(),
            ELATION_THEME_VERSION
        );
    }
    wp_enqueue_style( 'elation-style', get_stylesheet_uri() );
    wp_enqueue_style(
        'elation-font-awesome',
        get_template_directory_uri() . '/inc/font-awesome/css/all.css',
        array(),
        '5.11.2'
    );
    // Load Header Style
    wp_enqueue_style(
        'elation-header-style',
        get_template_directory_uri() . "/templates/header/header-style.css",
        array( 'elation-style' ),
        ELATION_THEME_VERSION
    );
    // Load Footer Style
    wp_enqueue_style(
        'elation-footer-style',
        get_template_directory_uri() . "/templates/footer/css/" . get_theme_mod( 'elation-footer-layout', customizer_library_get_default( 'elation-footer-layout' ) ) . ".css",
        array( 'elation-style' ),
        ELATION_THEME_VERSION
    );
    // Load Responsive Stylesheets
    
    if ( !get_theme_mod( 'elation-responsive-disable', customizer_library_get_default( 'elation-responsive-disable' ) ) ) {
        $elation_resp_menu = get_theme_mod( 'elation-menu-breakat', customizer_library_get_default( 'elation-menu-breakat' ) );
        $elation_resp_tablet = get_theme_mod( 'elation-tablet-breakat', customizer_library_get_default( 'elation-tablet-breakat' ) );
        $elation_resp_mobile = get_theme_mod( 'elation-mobile-breakat', customizer_library_get_default( 'elation-mobile-breakat' ) );
        switch ( $elation_resp_menu ) {
            case 'always':
                $elation_resp_menu = 'all';
                break;
            case 'mobile':
                $elation_resp_menu = '(max-width: ' . esc_attr( $elation_resp_mobile ) . 'px)';
                break;
            case 'custom':
                $elation_resp_menu = '(max-width: ' . esc_attr( get_theme_mod( 'elation-menu-custom-breakat', customizer_library_get_default( 'elation-menu-custom-breakat' ) ) ) . 'px)';
                break;
            default:
                // Defaults to Tablet
                $elation_resp_menu = '(max-width: ' . esc_attr( $elation_resp_tablet ) . 'px)';
        }
        wp_enqueue_style(
            'elation-resp-menu',
            get_template_directory_uri() . "/inc/css/menu-mobile.css",
            array( 'elation-style', 'elation-header-style', 'elation-footer-style' ),
            ELATION_THEME_VERSION,
            esc_attr( $elation_resp_menu )
        );
        wp_enqueue_style(
            'elation-resp-tablet',
            get_template_directory_uri() . "/inc/css/responsive-tablet.css",
            array( 'elation-style', 'elation-header-style', 'elation-footer-style' ),
            ELATION_THEME_VERSION,
            '(max-width: ' . esc_attr( $elation_resp_tablet ) . 'px)'
        );
        wp_enqueue_style(
            'elation-resp-mobile',
            get_template_directory_uri() . "/inc/css/responsive-mobile.css",
            array( 'elation-style', 'elation-header-style', 'elation-footer-style' ),
            ELATION_THEME_VERSION,
            '(max-width: ' . esc_attr( $elation_resp_mobile ) . 'px)'
        );
    }
    
    wp_enqueue_script(
        'elation-custom',
        get_template_directory_uri() . '/js/custom.js',
        array( 'jquery' ),
        ELATION_THEME_VERSION,
        true
    );
    wp_localize_script( 'elation-custom', 'elation_js', array(
        'menu_breakpoint' => get_theme_mod( 'elation-menu-breakat', customizer_library_get_default( 'elation-menu-breakat' ) ),
        'menu_mobile'     => get_theme_mod( 'elation-mobile-breakat', customizer_library_get_default( 'elation-mobile-breakat' ) ),
        'menu_tablet'     => get_theme_mod( 'elation-tablet-breakat', customizer_library_get_default( 'elation-tablet-breakat' ) ),
    ) );
    wp_enqueue_script( 'elation-custom' );
    
    if ( 'elation-blog-grid' == get_theme_mod( 'elation-blog-list-layout', customizer_library_get_default( 'elation-blog-list-layout' ) ) || 'elation-blog-tile' == get_theme_mod( 'elation-blog-list-layout', customizer_library_get_default( 'elation-blog-list-layout' ) ) ) {
        wp_enqueue_script( 'jquery-masonry' );
        wp_enqueue_script(
            'elation-masonry',
            get_template_directory_uri() . '/js/layout-blocks.js',
            array( 'jquery' ),
            ELATION_THEME_VERSION,
            true
        );
        if ( class_exists( 'Jetpack' ) && Jetpack::is_module_active( 'infinite-scroll' ) ) {
            wp_enqueue_script(
                'elation-jetpack-scroll',
                get_template_directory_uri() . '/js/jetpack-infinite-scroll.js',
                array( 'jquery' ),
                ELATION_THEME_VERSION,
                true
            );
        }
    }
    
    // EDD Styling
    if ( get_theme_mod( 'elation-plugin-edd-style', customizer_library_get_default( 'elation-plugin-edd-style' ) ) ) {
        wp_enqueue_style(
            'elation-edd-css',
            get_template_directory_uri() . "/inc/css/edd.css",
            array( 'dashicons' ),
            ELATION_THEME_VERSION
        );
    }
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}

add_action( 'wp_enqueue_scripts', 'elation_scripts' );
/**
 * Fix skip link focus in IE11. Too small to load as own script
 */
function elation_custom_footer_scripts()
{
    // The following is minified via 'terser --compress --mangle -- js/skip-link-focus-fix.js'
    ?>
	<script>
	/(trident|msie)/i.test(navigator.userAgent)&&document.getElementById&&window.addEventListener&&window.addEventListener("hashchange",function(){var t,e=location.hash.substring(1);/^[A-z0-9_-]+$/.test(e)&&(t=document.getElementById(e))&&(/^(?:a|select|input|button|textarea)$/i.test(t.tagName)||(t.tabIndex=-1),t.focus())},!1);
	</script>
    <?php 
}

add_action( 'wp_print_footer_scripts', 'elation_custom_footer_scripts' );
/**
 * Enqueue admin styling.
 */
function elation_admin_scripts()
{
    global  $pagenow ;
    $elation_editor_css = '.elation-notice-close { float: right;position: relative;top: -28px; }a[href="themes.php?page=elation_info-account"], a[href="themes.php?page=elation_info-pricing"] { display: none !important; }';
    wp_register_style( 'elation-freemius-css', false );
    wp_enqueue_style( 'elation-freemius-css' );
    wp_add_inline_style( 'elation-freemius-css', $elation_editor_css );
    if ( $pagenow == 'widgets.php' ) {
        wp_enqueue_style(
            'elation-notice-css',
            get_template_directory_uri() . '/inc/admin/css/admin.css',
            array(),
            ELATION_THEME_VERSION
        );
    }
}

add_action( 'admin_enqueue_scripts', 'elation_admin_scripts' );
/**
 * Add classes to the body tag from settings
 */
function elation_add_body_class( $classes )
{
    $classes[] = sanitize_html_class( get_theme_mod( 'elation-site-layout', customizer_library_get_default( 'elation-site-layout' ) ) );
    if ( 'elation-site-full-width-blocked' == get_theme_mod( 'elation-site-layout', customizer_library_get_default( 'elation-site-layout' ) ) ) {
        
        if ( get_theme_mod( 'elation-break-content', customizer_library_get_default( 'elation-break-content' ) ) ) {
            $classes[] = 'elation-break-content';
        } else {
            $classes[] = 'elation-joined-content';
        }
    
    }
    $classes[] = sanitize_html_class( get_theme_mod( 'elation-menu-position', customizer_library_get_default( 'elation-menu-position' ) ) );
    if ( is_page() && !is_page_template() ) {
        $classes[] = sanitize_html_class( get_theme_mod( 'elation-page-layout', customizer_library_get_default( 'elation-page-layout' ) ) );
    }
    if ( get_theme_mod( 'elation-widget-area-stick', customizer_library_get_default( 'elation-widget-area-stick' ) ) ) {
        $classes[] = 'enable-sticky-widgets';
    }
    // -- ELATION FREE VERSION
    
    if ( class_exists( 'WooCommerce' ) ) {
        
        if ( is_home() || is_archive() && !is_woocommerce() ) {
            $classes[] = sanitize_html_class( get_theme_mod( 'elation-blog-layout', customizer_library_get_default( 'elation-blog-layout' ) ) );
            if ( get_theme_mod( 'elation-break-content', customizer_library_get_default( 'elation-break-content' ) ) && get_theme_mod( 'elation-blog-break', customizer_library_get_default( 'elation-blog-break' ) ) ) {
                $classes[] = 'break-blog-blocks';
            }
        }
        
        if ( is_shop() || is_product_category() || is_product_tag() ) {
            if ( get_theme_mod( 'elation-wc-remove-title', customizer_library_get_default( 'elation-wc-remove-title' ) ) ) {
                $classes[] = 'wc-remove-shop-title';
            }
        }
        if ( is_single() && !is_woocommerce() ) {
            $classes[] = sanitize_html_class( get_theme_mod( 'elation-blog-post-layout', customizer_library_get_default( 'elation-blog-post-layout' ) ) );
        }
        if ( is_cart() ) {
            $classes[] = sanitize_html_class( get_theme_mod( 'elation-wc-cartpage-style', customizer_library_get_default( 'elation-wc-cartpage-style' ) ) );
        }
        if ( is_checkout() ) {
            $classes[] = sanitize_html_class( get_theme_mod( 'elation-wc-checkout-style', customizer_library_get_default( 'elation-wc-checkout-style' ) ) );
        }
        if ( is_account_page() ) {
            $classes[] = sanitize_html_class( get_theme_mod( 'elation-wc-account-style', customizer_library_get_default( 'elation-wc-account-style' ) ) );
        }
    } else {
        
        if ( is_home() || is_archive() ) {
            $classes[] = sanitize_html_class( get_theme_mod( 'elation-blog-layout', customizer_library_get_default( 'elation-blog-layout' ) ) );
            if ( get_theme_mod( 'elation-break-content', customizer_library_get_default( 'elation-break-content' ) ) && get_theme_mod( 'elation-blog-break', customizer_library_get_default( 'elation-blog-break' ) ) ) {
                $classes[] = 'break-blog-blocks';
            }
        }
        
        if ( is_single() ) {
            $classes[] = sanitize_html_class( get_theme_mod( 'elation-blog-post-layout', customizer_library_get_default( 'elation-blog-post-layout' ) ) );
        }
    }
    
    // ---- Freemius
    
    if ( is_search() ) {
        $classes[] = sanitize_html_class( get_theme_mod( 'elation-blog-search-layout', customizer_library_get_default( 'elation-blog-search-layout' ) ) );
        if ( get_theme_mod( 'elation-break-content', customizer_library_get_default( 'elation-break-content' ) ) && get_theme_mod( 'elation-blog-break', customizer_library_get_default( 'elation-blog-break' ) ) ) {
            $classes[] = 'break-blog-blocks';
        }
    }
    
    if ( get_theme_mod( 'elation-site-remove-editlink', customizer_library_get_default( 'elation-site-remove-editlink' ) ) ) {
        $classes[] = 'elation-noedit';
    }
    return $classes;
}

add_filter( 'body_class', 'elation_add_body_class' );
/**
 * Add classes to the blog list for styling.
 */
function elation_blog_post_classes( $classes )
{
    global  $elation_current_class ;
    
    if ( is_home() || is_archive() || is_search() ) {
        
        if ( 'elation-blog-alt' == get_theme_mod( 'elation-blog-list-layout', customizer_library_get_default( 'elation-blog-list-layout' ) ) || 'elation-blog-alt' == get_theme_mod( 'elation-blog-search-list-layout', customizer_library_get_default( 'elation-blog-search-list-layout' ) ) ) {
            $classes[] = $elation_current_class;
            $elation_current_class = ( 'blog-alt-odd' == $elation_current_class ? sanitize_html_class( 'blog-alt-even' ) : sanitize_html_class( 'blog-alt-odd' ) );
        }
        
        if ( 'elation-blog-grid' == get_theme_mod( 'elation-blog-list-layout', customizer_library_get_default( 'elation-blog-list-layout' ) ) || 'elation-blog-tile' == get_theme_mod( 'elation-blog-list-layout', customizer_library_get_default( 'elation-blog-list-layout' ) ) ) {
            $classes[] = sanitize_html_class( 'blog-grid-block' );
        }
    }
    
    return $classes;
}

$elation_current_class = sanitize_html_class( 'blog-alt-odd' );
add_filter( 'post_class', 'elation_blog_post_classes' );
/**
 * Add classes to the admin body tag for
 */
function elation_admin_body_classes( $admin_classes )
{
    global  $pagenow ;
    if ( $pagenow != 'widgets.php' ) {
        return $admin_classes;
    }
    
    if ( 'footer-default' == get_theme_mod( 'elation-footer-layout', customizer_library_get_default( 'elation-footer-layout' ) ) ) {
        $admin_classes .= ' ' . sanitize_html_class( 'elation-footer-default' ) . ' ' . sanitize_html_class( get_theme_mod( 'elation-footer-custom-cols', customizer_library_get_default( 'elation-footer-custom-cols' ) ) );
    } else {
        $admin_classes .= ' ' . sanitize_html_class( 'elation-' . get_theme_mod( 'elation-footer-layout', customizer_library_get_default( 'elation-footer-layout' ) ) );
    }
    
    return $admin_classes;
}

add_filter( 'admin_body_class', 'elation_admin_body_classes' );
/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/gutenberg.php';
/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';
/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';
/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';
/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
    require get_template_directory() . '/inc/jetpack.php';
}
/**
 * Load WooCommerce compatibility file.
 */
if ( class_exists( 'WooCommerce' ) ) {
    require get_template_directory() . '/inc/woocommerce.php';
}
/**
 * Display recommended plugins with the TGM class
 */
function elation_tgm_recommended_plugins()
{
    $plugins = array(
        array(
        'name'     => __( 'Contact Form by WPForms', 'elation' ),
        'slug'     => 'wpforms-lite',
        'required' => false,
    ),
        array(
        'name'     => __( 'Elementor Page Builder', 'elation' ),
        'slug'     => 'elementor',
        'required' => false,
    ),
        array(
        'name'     => __( 'WooCommerce', 'elation' ),
        'slug'     => 'woocommerce',
        'required' => false,
    ),
        array(
        'name'     => __( 'WooCustomizer', 'elation' ),
        'slug'     => 'woocustomizer',
        'required' => false,
    ),
        array(
        'name'     => __( 'Breadcrumb NavXT', 'elation' ),
        'slug'     => 'breadcrumb-navxt',
        'required' => false,
    )
    );
    $config = array(
        'id'   => 'elation',
        'menu' => 'tgmpa-install-plugins',
    );
    tgmpa( $plugins, $config );
}

add_action( 'tgmpa_register', 'elation_tgm_recommended_plugins' );
/**
 * Admin notice to enter a purchase license
 */
function elation_add_premium_license_notice()
{
    global  $pagenow ;
    global  $current_user ;
    $elation_user_id = $current_user->ID;
    $elationpage = ( isset( $_GET['page'] ) ? $pagenow . '?page=' . $_GET['page'] : $pagenow );
    
    if ( current_user_can( 'manage_options' ) && !get_user_meta( $elation_user_id, 'elation_license_dismiss_pro_count' ) ) {
        ?>
		<div class="notice notice-info elation-admin-notice elation-notice-add">
			<h4><?php 
        esc_html_e( 'Thank you for trying out Elation!', 'elation' );
        ?></h4>
            <p>
                <?php 
        /* translators: %s: 'useful links to help you get started' */
        printf( esc_html__( 'We\'ve got some %1$s with the Elation theme.', 'elation' ), wp_kses( '<a href="' . esc_url( admin_url( 'themes.php?page=elation_info' ) ) . '">' . __( 'useful links to help you get started', 'elation' ) . '</a>', array(
            'a' => array(
            'href' => array(),
        ),
        ) ) );
        ?>
            </p>
            <?php 
        
        if ( $elationpage == 'themes.php?page=elation_info' ) {
            ?>
                <div class="elation-admin-notice-blocks">
                    <div class="elation-admin-notice-block">
                        <h5><?php 
            esc_html_e( 'Let\'s get started !', 'elation' );
            ?></h5>
                        <p>
                            <?php 
            esc_html_e( 'Elation is very easy to set up and start building with.', 'elation' );
            ?>
                        </p>
                        <p>
                            <?php 
            esc_html_e( 'All the Elation theme settings are built into the WordPress Customizer so you can easily and quickly build a great, professional looking website.', 'elation' );
            ?>
                        </p>
                        <a href="<?php 
            echo  esc_url( admin_url( 'customize.php' ) ) ;
            ?>" class="button"><?php 
            esc_html_e( 'Start Customizing Elation', 'elation' );
            ?></a>
                    </div>
                    <div class="elation-admin-notice-block">
                        <h5><?php 
            esc_html_e( 'Unsure of anything? Or found a bug?', 'elation' );
            ?></h5>
                        <p>
                            <?php 
            esc_html_e( 'Please go easy on us if something is not working :)', 'elation' );
            ?>
                        </p>
                        <p>
                            <?php 
            esc_html_e( 'If you\'ve found a bug or something in the theme that is not working as you expect, then please contact us sso we can help you sort it out.', 'elation' );
            ?>
                        </p>
                        <a href="<?php 
            echo  esc_url( 'https://kairaweb.com/contact/' ) ;
            ?>" class="button" target="_blank"><?php 
            esc_html_e( 'Contact Us', 'elation' );
            ?></a>
                    </div>
                    <div class="elation-admin-notice-block">
                        <h5><?php 
            esc_html_e( 'Top help links for getting started:', 'elation' );
            ?></h5>
                        <ul>
                            <li>
                                <a href="<?php 
            echo  esc_url( 'https://kairaweb.com/documentation/increase-the-allowed-file-upload-size/' ) ;
            ?>" target="_blank"><?php 
            esc_html_e( 'File exceeds maximum upload size', 'elation' );
            ?></a>
                            </li>
                            <li>
                                <a href="<?php 
            echo  esc_url( 'https://kairaweb.com/documentation/adding-custom-css-to-wordpress/' ) ;
            ?>" target="_blank"><?php 
            esc_html_e( 'Adding custom CSS to WordPress', 'elation' );
            ?></a>
                            </li>
                            <li>
                                <a href="<?php 
            echo  esc_url( 'https://kairaweb.com/documentation/mobile-menu-not-working/' ) ;
            ?>" target="_blank"><?php 
            esc_html_e( 'Mobile menu not working', 'elation' );
            ?></a>
                            </li>
                            <li>
                                <a href="<?php 
            echo  esc_url( 'https://kairaweb.com/documentation/our-recommended-wordpress-basic-setup/' ) ;
            ?>" target="_blank"><?php 
            esc_html_e( 'Setting up your WordPress Dashboard', 'elation' );
            ?></a>
                            </li>
                        </ul>
                        <a href="<?php 
            echo  esc_url( 'https://kairaweb.com/documentation/' ) ;
            ?>" class="button" target="_blank"><?php 
            esc_html_e( 'Kaira Documentation', 'elation' );
            ?></a>
                    </div>
                </div>
            <?php 
        }
        
        ?>
			<a href="?elation_add_premium_license_notice_ignore=" class="elation-notice-close"><?php 
        esc_html_e( 'Dismiss Notice', 'elation' );
        ?></a>
		</div><?php 
    }

}

add_action( 'admin_notices', 'elation_add_premium_license_notice' );
/**
 * Admin notice save dismiss to wp transient
 */
function elation_add_premium_license_notice_ignore()
{
    global  $current_user ;
    $elation_user_id = $current_user->ID;
    if ( isset( $_GET['elation_add_premium_license_notice_ignore'] ) ) {
        update_user_meta( $elation_user_id, 'elation_license_dismiss_pro_count', true );
    }
}

add_action( 'admin_init', 'elation_add_premium_license_notice_ignore' );
/**
 * Register Elementor Locations
 */
function elation_register_elementor_locations( $elementor_theme_manager )
{
    $elementor_theme_manager->register_all_core_location();
}

add_action( 'elementor/theme/register_locations', 'elation_register_elementor_locations' );