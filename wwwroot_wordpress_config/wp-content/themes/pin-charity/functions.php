<?php
/**
 * Pin Charity functions and definitions
 *
 * @package Pin Charity
 */

if (!function_exists('pin_charity_setup')):
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which runs
	 * before the init hook. The init hook is too late for some features, such as indicating
	 * support post thumbnails.
	 */
	function pin_charity_setup()
	{
		$GLOBALS['content_width'] = apply_filters( 'pin_charity_content_width', 640 );
		load_theme_textdomain('pin-charity', get_template_directory() . '/languages');
		add_theme_support('automatic-feed-links');
		add_theme_support('woocommerce');
		add_theme_support('post-thumbnails');
		add_theme_support('custom-header');
		add_theme_support('title-tag');
		add_theme_support('custom-logo', array(
			'height' => 52,
			'width' => 268,
			'flex-height' => true,
		));
		register_nav_menus(array(
			'primary' => esc_html__('Primary Menu', 'pin-charity') ,
		));
		add_theme_support('custom-background', array(
			'default-color' => 'ffffff'
		));
		add_editor_style( 'editor-style.css' );
		add_post_type_support( 'page', 'excerpt' );
	}
endif; // pin_charity_setup
add_action('after_setup_theme', 'pin_charity_setup');
/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function pin_charity_widgets_init()
{
	register_sidebar(array(
		'name' => esc_html__('Sidebar', 'pin-charity') ,
		'description' => esc_html__('Appears on page/post sidebar', 'pin-charity') ,
		'id' => 'sidebar-1',
		'before_widget' => '<div class="widgetbox">',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3><aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside></div>',
	));
	register_sidebar(array(
		'name' => esc_html__('Footer Column 1', 'pin-charity') ,
		'description' => esc_html__('Appears on footer', 'pin-charity') ,
		'id' => 'fc-1',
		'before_widget' => '',
		'before_title' => '<h5>',
		'after_title' => '</h5><aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
	));
	register_sidebar(array(
		'name' => esc_html__('Footer Column 2', 'pin-charity') ,
		'description' => esc_html__('Appears on footer', 'pin-charity') ,
		'id' => 'fc-2',
		'before_widget' => '',
		'before_title' => '<h5>',
		'after_title' => '</h5><aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
	));
	register_sidebar(array(
		'name' => esc_html__('Footer Column 3', 'pin-charity') ,
		'description' => esc_html__('Appears on footer', 'pin-charity') ,
		'id' => 'fc-3',
		'before_widget' => '',
		'before_title' => '<h5>',
		'after_title' => '</h5><aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
	));
	register_sidebar(array(
		'name' => esc_html__('Footer Column 4', 'pin-charity') ,
		'description' => esc_html__('Appears on footer', 'pin-charity') ,
		'id' => 'fc-4',
		'before_widget' => '',
		'before_title' => '<h5>',
		'after_title' => '</h5><aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
	));	
}
add_action('widgets_init', 'pin_charity_widgets_init');
/**
 * Register custom fonts.
 */
function pin_charity_font_url()
{
	$font_url = '';
	/* Translators: If there are any character that are not
	* supported by Roboto Condensed, trsnalate this to off, do not
	* translate into your own language.
	*/
	$robotocondensed = _x('on', 'robotocondensed:on or off', 'pin-charity');
	/* Translators: If there has any character that are not supported
	*  by Scada, translate this to off, do not translate
	*  into your own language.
	*/
	$scada = _x('on', 'Scada:on or off', 'pin-charity');
	/* Translators: If there has any character that are not supported
	*  by Roboto Slab, translate this to off, do not translate
	*  into your own language.
	*/
	$robotoslab = _x('on', 'Roboto Slab:on or off', 'pin-charity');
	/* Translators: If there has any character that are not supported
	*  by Merriweather, translate this to off, do not translate
	*  into your own language.
	*/
	$roboto = _x('on', 'Roboto:on or off', 'pin-charity');
	/* Translators: If there has any character that are not supported
	*  by Lato, translate this to off, do not translate
	*  into your own language.
	*/
	$assistant = _x('on', 'Assistant:on or off', 'pin-charity');		
	
	
	if ('off' !== $robotocondensed)
	{
		$font_family = array();
		if ('off' !== $robotocondensed)
		{
			$font_family[] = 'Roboto Condensed:300,400,600,700,800,900';
		}
		if ('off' !== $robotoslab)
		{
			$font_family[] = 'Roboto Slab:300,400,700';
		}
		if ('off' !== $roboto)
		{
			$font_family[] = 'Roboto:100,300,300i,400,400i,500,500i,700,700i,900,900i';
		}
		if ('off' !== $assistant)
		{
			$font_family[] = 'Assistant:200,300,400,600,700,800';
		}			
		$query_args = array(
			'family' => urlencode(implode('|', $font_family)) ,
		);
		$font_url = add_query_arg($query_args, '//fonts.googleapis.com/css');
	}
	return $font_url;
}
/**
 * Enqueue scripts and styles.
 */
function pin_charity_scripts()
{
	wp_enqueue_style('pin-charity-font', pin_charity_font_url() , array());
	wp_enqueue_style('pin-charity-basic-style', get_stylesheet_uri());
	wp_enqueue_style('pin-charity-print-style', get_template_directory_uri() . "/print.css");
	wp_enqueue_style('nivo-slider', get_template_directory_uri() . "/css/nivo-slider.css");
	wp_enqueue_style('font-awesome', get_template_directory_uri() . "/css/font-awesome.css");
	wp_enqueue_style('pin-charity-main-style', get_template_directory_uri() . "/css/responsive.css");
	wp_enqueue_style('pin-charity-base-style', get_template_directory_uri() . "/css/style_base.css");
	wp_enqueue_script('jquery-nivo', get_template_directory_uri() . '/js/jquery.nivo.slider.js', array(
		'jquery'
	));
	wp_enqueue_script('pin-charity-custom-js', get_template_directory_uri() . '/js/custom.js');
	if (is_singular() && comments_open() && get_option('thread_comments'))
	{
		wp_enqueue_script('comment-reply');
	}
	wp_enqueue_script( 'pin-charity-keyboardnav', get_template_directory_uri() . '/js/keyboardnav.js', array(), '01062020', true );
	wp_localize_script( 'pin-charity-keyboardnav', 'pincharityScreenReaderText', array(
		'expandMain'   => __( 'Open main menu', 'pin-charity' ),
		'collapseMain' => __( 'Close main menu', 'pin-charity' ),
		'expandChild'   => __( 'Expand submenu', 'pin-charity' ),
		'collapseChild' => __( 'Collapse submenu', 'pin-charity' ),
	) );	
}
add_action('wp_enqueue_scripts', 'pin_charity_scripts');

define('PIN_CHARITY_URL', 'https://www.pinnaclethemes.net/');
define('PIN_CHARITY_PRO_THEME_URL', 'https://www.pinnaclethemes.net/product/fundraising-wordpress-theme/');
define('PIN_CHARITY_FREE_THEME_URL', 'https://www.pinnaclethemes.net/product/free-fundraising-wordpress-theme/');
define('PIN_CHARITY_THEME_DOC', 'https://pinnaclethemes.net/themedocumentation/free-charity-documentation/');
define('PIN_CHARITY_LIVE_DEMO', 'https://www.pinnaclethemes.net/themedemos/fundraising/');
define('PIN_CHARITY_THEMES', 'https://www.pinnaclethemes.net/cool-wordpress-themes/');

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';
/**
 * Custom template for about theme.
 */
require get_template_directory() . '/inc/about-themes.php';
/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';
/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';
/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

// Add class in body if slide option enable
function pin_charity_body_class( $classes ) {
 	$hideslide = get_theme_mod('hide_slides', 1);
	if (!is_home() && is_front_page()) {
		if( $hideslide == '') {
			$classes[] = 'visibleslide';
		}
	}
    return $classes;
}
add_filter( 'body_class','pin_charity_body_class' );

// get slug by id
function pin_charity_get_slug_by_id($id)
{
	$post_data = get_post($id, ARRAY_A);
	$slug = $post_data['post_name'];
	return $slug;
}
require_once get_template_directory() . '/upgrade-pro/example-1/class-customize.php';

/**
 * Filter the except length to 20 words.
 *
 * @param int $length Excerpt length.
 * @return int (Maybe) modified excerpt length.
 */
function pin_charity_custom_excerpt_length( $length ) {
    if ( is_admin() ) return $length;
    return 20;
}
add_filter( 'excerpt_length', 'pin_charity_custom_excerpt_length', 999 );


/**
 * notice on theme activation
 */
if ( is_admin() && isset($_GET['activated'] ) && $pagenow == "themes.php" ) {
	add_action( 'admin_notices', 'pin_charity_activate_notice' );
}
function pin_charity_activate_notice(){
    ?>
    <div class="notice notice-success is-dismissible"> 
        <p class="largefont"><?php echo esc_html__('Thanks for choosing "Pin Charity" Theme. Kindly click here for ', 'pin-charity'); ?><a href="<?php echo esc_url(PIN_CHARITY_THEME_DOC);?>"><?php echo esc_html__('Documentation', 'pin-charity');?></a><?php echo esc_html__(' which contains 1-click demo import.', 'pin-charity');?></p>
    </div>
    <?php
}

function pin_charity_admin_style($hook) {
	 	if ( 'themes.php' != $hook ) {
			return;
		}
		wp_enqueue_style( 'pin-charity-admin-style', get_template_directory_uri() . '/css/pin-charity-admin-style.css' );
}
add_action( 'admin_enqueue_scripts', 'pin_charity_admin_style' );

/**
 * Fix skip link focus in IE11.
 *
 * This does not enqueue the script because it is tiny and because it is only for IE11,
 * thus it does not warrant having an entire dedicated blocking script being loaded.
 *
 * @link https://git.io/vWdr2
 */
function pin_charity_skip_link_focus() {  
	// The following is minified via `terser --compress --mangle -- js/skip-link-focus-fix.js`.
	?>
	<script>
	/(trident|msie)/i.test(navigator.userAgent)&&document.getElementById&&window.addEventListener&&window.addEventListener("hashchange",function(){var t,e=location.hash.substring(1);/^[A-z0-9_-]+$/.test(e)&&(t=document.getElementById(e))&&(/^(?:a|select|input|button|textarea)$/i.test(t.tagName)||(t.tabIndex=-1),t.focus())},!1);
	</script>
	<?php       
}
add_action( 'wp_print_footer_scripts', 'pin_charity_skip_link_focus' );

/**
 * Load Dashicons
*/ 
 
function pin_charity_load_dashicons(){
   wp_enqueue_style('dashicons');
}
add_action('wp_enqueue_scripts', 'pin_charity_load_dashicons', 999);

// WordPress wp_body_open backward compatibility
if ( ! function_exists( 'wp_body_open' ) ) {
    function wp_body_open() {
        do_action( 'wp_body_open' );
    }
}