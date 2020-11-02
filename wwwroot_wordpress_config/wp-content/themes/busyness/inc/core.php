<?php
/**
 * Core file.
 *
 * This is the template that includes all the other files for core feature
 *
 * @package Busyness
 */

/**
 * Include options function.
 */
require get_template_directory() . '/inc/options.php';


// Load customizer defaults values
require get_template_directory() . '/inc/customizer/defaults.php';


/**
 * Merge values from default options array and values from customizer
 *
 * @return array Values returned from customizer
 * @since Busyness 1.0.0
 */
function busyness_get_theme_options() {
  $busyness_default_options = busyness_get_default_theme_options();

  return array_merge( $busyness_default_options , get_theme_mod( 'busyness_theme_options', $busyness_default_options ) ) ;
}

/**
 * Display custom color CSS.
 */
function busyness_colors_css_wrap() {
    $options= busyness_get_theme_options();
    if ( 'custom' !== $options['colorscheme'] ) {
        return;
    }

    require_once( get_template_directory() . '/inc/color-pattern.php' );
    $color = $options['colorscheme_hue'];
    ?>
    <style type="text/css" id="custom-theme-colors" <?php if ( is_customize_preview() ) { echo 'data-color="' . esc_attr( $color ) . '"'; } ?>>
        <?php echo busyness_custom_colors_css(); ?>
    </style>
<?php }
add_action( 'wp_head', 'busyness_colors_css_wrap' );

/**
 * Load admin custom styles
 *
 */
function busyness_load_admin_style() {
    wp_register_style( 'busyness_admin_css', get_template_directory_uri() . '/assets/css/admin-style.css', false, '1.0.0' );
    wp_enqueue_style( 'busyness_admin_css' );
}
add_action( 'admin_enqueue_scripts', 'busyness_load_admin_style' );

/**
 * Add breadcrumb functions.
 */
require get_template_directory() . '/inc/breadcrumb-class.php';

/**
 * Add helper functions.
 */
require get_template_directory() . '/inc/helpers.php';

/**
 * Add structural hooks.
 */
require get_template_directory() . '/inc/structure.php';

/**
 * Add metabox
 */
require get_template_directory() . '/inc/metabox.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer/customizer.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/sections/sections.php';

/**
* TGM plugin additions.
*/
require get_template_directory() . '/inc/tgm-plugin/tgm-hook.php';

/* Custom widget additions
 */
  require get_template_directory() . '/inc/widgets/widgets.php';
