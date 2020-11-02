<?php

/**
 * WooCommerce Compatibility File
 *
 * @package Elation
 */
/**
 * WooCommerce setup function.
 *
 * @link https://docs.woocommerce.com/document/third-party-custom-theme-compatibility/
 * @link https://github.com/woocommerce/woocommerce/wiki/Enabling-product-gallery-features-(zoom,-swipe,-lightbox)-in-3.0.0
 *
 * @return void
 */
function elation_woocommerce_setup()
{
    add_theme_support( 'woocommerce' );
    add_theme_support( 'wc-product-gallery-zoom' );
    add_theme_support( 'wc-product-gallery-lightbox' );
    add_theme_support( 'wc-product-gallery-slider' );
}

add_action( 'after_setup_theme', 'elation_woocommerce_setup' );
/**
 * WooCommerce Scripts & Stylesheets.
 *
 * @return void
 */
function elation_woocommerce_scripts()
{
    wp_enqueue_style( 'elation-woocommerce-style', get_template_directory_uri() . '/inc/css/woocommerce.css' );
    $font_path = esc_url( WC()->plugin_url() . '/assets/fonts/' );
    $inline_font = '@font-face {
			font-family: "star";
			src: url("' . $font_path . 'star.eot");
			src: url("' . $font_path . 'star.eot?#iefix") format("embedded-opentype"),
				url("' . $font_path . 'star.woff") format("woff"),
				url("' . $font_path . 'star.ttf") format("truetype"),
				url("' . $font_path . 'star.svg#star") format("svg");
			font-weight: normal;
			font-style: normal;
		}';
    wp_add_inline_style( 'elation-woocommerce-style', $inline_font );
}

add_action( 'wp_enqueue_scripts', 'elation_woocommerce_scripts' );
/**
 * Disable the default WooCommerce stylesheet.
 */
// add_filter( 'woocommerce_enqueue_styles', '__return_empty_array' );
/**
 * Add 'woocommerce-active' class to the body tag.
 *
 * @param  array $classes CSS classes applied to the body tag.
 * @return array $classes modified to include 'woocommerce-active' class.
 */
function elation_woocommerce_active_body_class( $classes )
{
    $classes[] = 'woocommerce-active';
    return $classes;
}

add_filter( 'body_class', 'elation_woocommerce_active_body_class' );
/**
 * Remove WooCommerce functionality.
 */
function elation_remove_wc_extras()
{
    // Remove Breadcrumbs
    if ( is_woocommerce() && get_theme_mod( 'elation-wc-remove-bcrumbs', customizer_library_get_default( 'elation-wc-remove-bcrumbs' ) ) ) {
        remove_action(
            'woocommerce_before_main_content',
            'woocommerce_breadcrumb',
            20,
            0
        );
    }
}

add_action( 'template_redirect', 'elation_remove_wc_extras' );
/**
 * Remove default WooCommerce wrapper.
 */
remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10 );
remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10 );
// -- ELATION FREE VERSION
if ( !function_exists( 'elation_woocommerce_wrapper_before' ) ) {
    /**
     * Before Content.
     *
     * Wraps all WooCommerce content in wrappers which match the theme markup.
     *
     * @return void
     */
    function elation_woocommerce_wrapper_before()
    {
        ?>
            <div id="primary" class="content-area <?php 
        echo  ( get_theme_mod( 'elation-btn-takeon-primary', customizer_library_get_default( 'elation-btn-takeon-primary' ) ) ? sanitize_html_class( 'wc-btn-color' ) : '' ) ;
        ?>">
                <main id="main" class="site-main" role="main"><?php 
    }

}
add_action( 'woocommerce_before_main_content', 'elation_woocommerce_wrapper_before' );
// -- Freemius
if ( !function_exists( 'elation_woocommerce_wrapper_after' ) ) {
    /**
     * After Content.
     *
     * Closes the wrapping divs.
     *
     * @return void
     */
    function elation_woocommerce_wrapper_after()
    {
        ?>
			</main><!-- #main -->
		</div><!-- #primary --><?php 
    }

}
add_action( 'woocommerce_after_main_content', 'elation_woocommerce_wrapper_after' );
/**
* Sample implementation of the WooCommerce Mini Cart.
*
* You can add the WooCommerce Mini Cart to header.php like so ...
*
	<?php
	if ( function_exists( 'elation_woocommerce_header_cart' ) ) {
		elation_woocommerce_header_cart();
	} ?>
*/
if ( !function_exists( 'elation_woocommerce_cart_link_fragment' ) ) {
    /**
     * Cart Fragments.
     *
     * Ensure cart contents update when products are added to the cart via AJAX.
     *
     * @param array $fragments Fragments to refresh via AJAX.
     * @return array Fragments to refresh via AJAX.
     */
    function elation_woocommerce_cart_link_fragment( $fragments )
    {
        ob_start();
        elation_woocommerce_cart_link();
        $fragments['a.cart-contents'] = ob_get_clean();
        return $fragments;
    }

}
add_filter( 'woocommerce_add_to_cart_fragments', 'elation_woocommerce_cart_link_fragment' );
if ( !function_exists( 'elation_woocommerce_cart_link' ) ) {
    /**
     * Cart Link.
     *
     * Displayed a link to the cart including the number of items present and the cart total.
     *
     * @return void
     */
    function elation_woocommerce_cart_link()
    {
        ?>
		<a class="cart-contents <?php 
        echo  sanitize_html_class( get_theme_mod( 'elation-wc-cart', customizer_library_get_default( 'elation-wc-cart' ) ) ) ;
        ?>" href="<?php 
        echo  esc_url( wc_get_cart_url() ) ;
        ?>" title="<?php 
        esc_attr_e( 'View your shopping cart', 'elation' );
        ?>">
			<?php 
        
        if ( 'total-count' == get_theme_mod( 'elation-wc-cart', customizer_library_get_default( 'elation-wc-cart' ) ) || 'count-only' == get_theme_mod( 'elation-wc-cart', customizer_library_get_default( 'elation-wc-cart' ) ) ) {
            $item_count_text = WC()->cart->get_cart_contents_count();
        } else {
            $item_count_text = sprintf(
                /* translators: number of items in the mini cart. */
                _n(
                    '%d item',
                    '%d items',
                    WC()->cart->get_cart_contents_count(),
                    'elation'
                ),
                WC()->cart->get_cart_contents_count()
            );
        }
        
        ?>
			<span class="amount"><?php 
        echo  wp_kses_data( WC()->cart->get_cart_subtotal() ) ;
        ?></span> <span class="count"><?php 
        echo  esc_html( '(' . $item_count_text . ')' ) ;
        ?></span>
		</a>
		<?php 
    }

}
if ( !function_exists( 'elation_woocommerce_header_cart' ) ) {
    /**
     * Display Header Cart.
     *
     * @return void
     */
    function elation_woocommerce_header_cart()
    {
        
        if ( is_cart() ) {
            $class = 'current-menu-item';
        } else {
            $class = '';
        }
        
        ?>
		<ul id="site-header-cart" class="site-header-cart">
			<li class="<?php 
        echo  esc_attr( $class ) ;
        ?>">
				<?php 
        elation_woocommerce_cart_link();
        ?>
			</li>
            <?php 
        ?>
		</ul>
		<?php 
    }

}

if ( !function_exists( 'elation_add_menu_cart' ) ) {
    /**
     * Add a WC cart to the end of the main menu.
     */
    function elation_add_menu_cart( $items, $args )
    {
        if ( function_exists( 'elation_woocommerce_header_cart' ) ) {
            if ( get_theme_mod( 'elation-add-menu-cart', customizer_library_get_default( 'elation-add-menu-cart' ) ) ) {
                
                if ( $args->theme_location == 'elation-main-menu' ) {
                    $items .= '<li class="elation-menu-cart">';
                    ob_start();
                    elation_woocommerce_cart_link();
                    $items .= ob_get_clean();
                    $items .= '</li>';
                }
            
            }
        }
        return $items;
    }
    
    add_filter(
        'wp_nav_menu_items',
        'elation_add_menu_cart',
        10,
        2
    );
}
