<?php
/**
 * Filter Pin Charity custom-header support arguments.
 *
 * @package Pin Charity
 *
 * @param array $args {
 *     An array of custom-header support arguments.
 *
 *     @type string $default_text_color      Default color of the header text.
 *     @type int    $width                   Width in pixels of the custom header image. Default 954.
 *     @type int    $height                  Height in pixels of the custom header image. Default 1300.
 *     @type string $wp-head-callback        Callback function used to styles the header image and text
 *                                           displayed on the blog.
 *	   @type string $admin-head-callback     Call on custom background administration screen.
 *	   @type string $admin-preview-callback  Output a custom background image div on the custom background administration                                                 screen. Optional.
 * }

 */

function pin_charity_custom_header_setup()
{
	add_theme_support('custom-header', apply_filters('pin_charity_custom_header_args', array(
		'default-text-color' => 'ffffff',
		'width' => 1600,
		'height' => 200,
		'wp-head-callback' => 'pin_charity_header_style',
		'admin-head-callback' => 'pin_charity_admin_header_style',
		'admin-preview-callback' => 'pin_charity_admin_header_image',
	)));
}

add_action('after_setup_theme', 'pin_charity_custom_header_setup');

if (!function_exists('pin_charity_header_style')):
	/**
	 * Styles the header image and text displayed on the blog
	 *
	 * @see pin_charity_custom_header_setup().
	 */
	function pin_charity_header_style()
	{
?>
	<style type="text/css">
	<?php
		// Check if user has defined any header image.
		if (get_header_image()):
	?>
		.header, .inrheader{
			background: url(<?php
			echo esc_url(get_header_image()); ?>) no-repeat;
			background-position: center top;
		}
	<?php
		endif; ?>	
	</style>
	<?php
	}
endif; // pin_charity_header_style

if (!function_exists('pin_charity_admin_header_style')):
	/**
	 * Styles the header image displayed on the Appearance > Header admin panel.
	 *
	 * @see pin_charity_custom_header_setup().
	 */
	function pin_charity_admin_header_style()
	{ ?>
	<style type="text/css">
	.appearance_page_custom-header #headimg { border: none; }
	</style><?php
	}

endif; // pin_charity_admin_header_style

if (!function_exists('pin_charity_admin_header_image')):
	/**
	 * Custom header image markup displayed on the Appearance > Header admin panel.
	 *
	 * @see pin_charity_custom_header_setup().
	 */
	function pin_charity_admin_header_image()
	{
?>
	<div id="headimg">
		<?php
		if (get_header_image()): ?>
		<img src="<?php
			header_image(); ?>" alt="">
		<?php
		endif; ?>
	</div>
<?php
	}
endif; // pin_charity_admin_header_image