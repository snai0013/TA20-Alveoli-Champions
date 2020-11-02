<!doctype html><?php 
?><!-- Elation FREE --><?php 
?>
<html <?php 
language_attributes();
?>>
<head>
	<meta charset="<?php 
bloginfo( 'charset' );
?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php 
wp_head();
?>
</head>

<body <?php 
body_class();
?>>
<?php 
wp_body_open();
?>
<div id="page" class="site <?php 
echo  sanitize_html_class( get_theme_mod( 'elation-site-shadows', customizer_library_get_default( 'elation-site-shadows' ) ) ) ;
?>  <?php 
echo  sanitize_html_class( get_theme_mod( 'elation-header-search-type', customizer_library_get_default( 'elation-header-search-type' ) ) ) ;
?>">

    <?php 
// -- ELATION FREE VERSION

if ( get_theme_mod( 'elation-social-add-sideicons', customizer_library_get_default( 'elation-social-add-sideicons' ) ) ) {
    ?>
            <div class="elation-side-social elation-side-social-square <?php 
    echo  ( get_theme_mod( 'elation-social-let-scroll', customizer_library_get_default( 'elation-social-let-scroll' ) ) ? sanitize_html_class( 'elation-sideicons-scroll' ) : '' ) ;
    ?> <?php 
    echo  ( get_theme_mod( 'elation-social-set-sideicons-left', customizer_library_get_default( 'elation-social-set-sideicons-left' ) ) ? sanitize_html_class( 'elation-icons-sideleft' ) : sanitize_html_class( 'elation-icons-sideright' ) ) ;
    ?>">
                <?php 
    get_template_part( 'templates/social-links' );
    ?>
            </div>
        <?php 
}

?>

	<?php 
echo  ( esc_html( 'elation-site-boxed' == get_theme_mod( 'elation-site-layout', customizer_library_get_default( 'elation-site-layout' ) ) ) ? '<div class="site-boxed">' : '<div class="site-not-boxed">' ) ;
?>

		<a class="skip-link screen-reader-text" href="#content"><?php 
esc_html_e( 'Skip to content', 'elation' );
?></a>

		<?php 

if ( !function_exists( 'elementor_theme_do_location' ) || !elementor_theme_do_location( 'header' ) ) {
    ?>

			<?php 
    // Get Site Header
    get_template_part( '/templates/header/header' );
    ?>

		<?php 
}

?>

		<?php 
if ( 'elation-pagetitle-banner' == get_theme_mod( 'elation-pagetitle-layout', customizer_library_get_default( 'elation-pagetitle-layout' ) ) ) {
    get_template_part( '/templates/title-bar' );
}
?>

		<?php 
// Header Media / Slider

if ( get_theme_mod( 'elation-sitemedia-display-all', customizer_library_get_default( 'elation-sitemedia-display-all' ) ) || 'elation-site-media-fimage' == get_theme_mod( 'elation-site-media-type', customizer_library_get_default( 'elation-site-media-type' ) ) ) {
    get_template_part( '/templates/header/header-media' );
} else {
    if ( is_front_page() ) {
        get_template_part( '/templates/header/header-media' );
    }
}

?>

		<div id="content" class="site-container site-content <?php 
echo  sanitize_html_class( 'heading-prop-' . get_theme_mod( 'elation-heading-fonts-size', customizer_library_get_default( 'elation-heading-fonts-size' ) ) ) ;
?>">
			<div class="site-content-inner <?php 
echo  ( get_theme_mod( 'elation-content-divider-line', customizer_library_get_default( 'elation-content-divider-line' ) ) ? sanitize_html_class( 'remove-line' ) : '' ) ;
?>">