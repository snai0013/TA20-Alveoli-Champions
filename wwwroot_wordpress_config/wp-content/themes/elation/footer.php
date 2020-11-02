<?php

/**
 * The template for displaying the footer
 *
 * @package Elation
 */
?>
			</div><!-- .site-content-inner -->
		</div><!-- #content -->

		<?php 

if ( !function_exists( 'elementor_theme_do_location' ) || !elementor_theme_do_location( 'footer' ) ) {
    ?>

			<?php 
    // Get Site Footer
    get_template_part( '/templates/footer/' . get_theme_mod( 'elation-footer-layout', customizer_library_get_default( 'elation-footer-layout' ) ) );
    ?>

		<?php 
}

?>
		
	</div><!-- .site-boxed / .site-not-boxed -->

    <?php 
?>
</div><!-- #page -->
<?php 
wp_footer();
?>
</body>
</html>
