<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div class="container">
 *
 * @package Pin Charity
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
    <link rel="pingback" href="<?php echo esc_url( get_bloginfo( 'pingback_url' ) ); ?>">
    <?php endif; ?>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php do_action( 'wp_body_open' ); ?>
<a class="skip-link screen-reader-text" href="#skipper">
<?php esc_html_e( 'Skip to content', 'pin-charity' ); ?>
</a>
<div class="<?php if (!is_home() && !is_front_page()) { ?>inrheader<?php } else{?>header<?php } ?>" aria-label="<?php esc_attr_e( 'header', 'pin-charity' ); ?>">
  <div class="container">
    <div class="logo">
		<?php the_custom_logo(); ?>
        <div class="clear"></div>
        <?php if (display_header_text()==true){ ?>
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
        <h2><?php bloginfo('name'); ?></h2>
        <p><?php bloginfo( 'description' ); ?></p>                          
        </a>
        <?php } ?>
    </div>
    
         <div id="navigatearea">       
		   <button class="menu-toggle" aria-controls="main-navigation" aria-expanded="false" type="button">
			<span aria-hidden="true"><?php esc_html_e( 'Menu', 'pin-charity' ); ?></span>
			<span class="dashicons" aria-hidden="true"></span>
		   </button>
		  <nav id="main-navigation" class="site-navigation primary-navigation" role="navigation">
			<?php wp_nav_menu( array('theme_location' => 'primary', 'container' => 'ul', 'menu_id' => 'primary', 'menu_class' => 'primary-menu menu' ) );
			?>
		  </nav><!-- .site-navigation -->
	    </div><!-- navigate-main--> 
        
        
        <div class="clear"></div> 
  </div> <!-- container -->
</div><!--.header -->