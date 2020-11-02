<?php

/**
 * Template part for displaying results in search pages
 *
 * @package Elation
 */
$elation_img_cut = get_theme_mod( 'elation-blog-list-img-cut', customizer_library_get_default( 'elation-blog-list-img-cut' ) );
$elation_img_proportions = get_theme_mod( 'elation-blog-list-img-prop', customizer_library_get_default( 'elation-blog-list-img-prop' ) );
?>
<article id="post-<?php 
the_ID();
?>" <?php 
post_class();
?>>
	<div class="post-inner">

		<?php 

if ( has_post_thumbnail() ) {
    ?>

			<div class="post-img <?php 
    echo  ( 'actual' != $elation_img_proportions ? sanitize_html_class( 'prop-img' ) : '' ) ;
    ?> <?php 
    echo  ( 'elation-imgstyle-none' != get_theme_mod( 'elation-blog-img-style-anim', customizer_library_get_default( 'elation-blog-img-style-anim' ) ) ? sanitize_html_class( get_theme_mod( 'elation-blog-img-style-anim', customizer_library_get_default( 'elation-blog-img-style-anim' ) ) ) : '' ) ;
    ?>" <?php 
    echo  ( esc_html( '1-1' == $elation_img_proportions || '3-2' == $elation_img_proportions || '4-3' == $elation_img_proportions || 'round' == $elation_img_proportions ) ? 'style="background-image: url(' . esc_url( get_the_post_thumbnail_url( $post->ID, $elation_img_cut ) ) . ');"' : '' ) ;
    ?>>
				
				<?php 
    
    if ( '1-1' == $elation_img_proportions || '3-2' == $elation_img_proportions || '4-3' == $elation_img_proportions || 'round' == $elation_img_proportions ) {
        ?>
					<img src="<?php 
        echo  esc_url( get_template_directory_uri() ) ;
        ?>/images/blog-img-<?php 
        echo  esc_attr( $elation_img_proportions ) ;
        ?>.png" alt="<?php 
        the_title();
        ?>" />
				<?php 
    } else {
        ?>
					<?php 
        elation_post_thumbnail();
        ?>
				<?php 
    }
    
    ?>

			</div>
			
		<?php 
} else {
    ?>
			<div class="post-no-img">
				<img src="<?php 
    echo  esc_url( get_template_directory_uri() ) ;
    ?>/images/blog-img-<?php 
    echo  ( esc_html( '1-1' == $elation_img_proportions || '3-2' == $elation_img_proportions || '4-3' == $elation_img_proportions || 'round' == $elation_img_proportions ) ? esc_attr( $elation_img_proportions ) : esc_attr( '3-2' ) ) ;
    ?>.png" alt="<?php 
    the_title();
    ?>" />
			</div>
		<?php 
}

?>

		<?php 

if ( !get_theme_mod( 'elation-blog-content-off', customizer_library_get_default( 'elation-blog-content-off' ) ) ) {
    ?>
			<div class="post-content <?php 
    echo  ( !has_post_thumbnail() ? sanitize_html_class( 'no-thumbnail' ) : '' ) ;
    ?> <?php 
    echo  ( 'elation-blog-tile' == get_theme_mod( 'elation-blog-list-layout', customizer_library_get_default( 'elation-blog-list-layout' ) ) ? sanitize_html_class( get_theme_mod( 'elation-blog-tile-anim', customizer_library_get_default( 'elation-blog-tile-anim' ) ) ) : '' ) ;
    ?>">
				<div class="post-content-inner">

					<?php 
    
    if ( !get_theme_mod( 'elation-blog-remove-list-title', customizer_library_get_default( 'elation-blog-remove-list-title' ) ) || !get_theme_mod( 'elation-blog-remove-list-date', customizer_library_get_default( 'elation-blog-remove-list-date' ) ) || !get_theme_mod( 'elation-blog-remove-list-auth', customizer_library_get_default( 'elation-blog-remove-list-auth' ) ) ) {
        ?>
						<header class="entry-header">

							<?php 
        
        if ( !get_theme_mod( 'elation-blog-remove-list-title', customizer_library_get_default( 'elation-blog-remove-list-title' ) ) ) {
            ?>
								<?php 
            
            if ( is_singular() ) {
                the_title( '<h1 class="entry-title">', '</h1>' );
            } else {
                the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
            }
            
            ?>
							<?php 
        }
        
        ?>
							
							<?php 
        
        if ( !get_theme_mod( 'elation-blog-remove-list-date', customizer_library_get_default( 'elation-blog-remove-list-date' ) ) || !get_theme_mod( 'elation-blog-remove-list-auth', customizer_library_get_default( 'elation-blog-remove-list-auth' ) ) ) {
            ?>
								<?php 
            
            if ( 'post' === get_post_type() ) {
                ?>
									<div class="entry-meta <?php 
                echo  ( get_theme_mod( 'elation-blog-remove-list-date', customizer_library_get_default( 'elation-blog-remove-list-date' ) ) ? sanitize_html_class( 'elation-blog-list-remdate' ) : '' ) ;
                ?> <?php 
                echo  ( get_theme_mod( 'elation-blog-remove-list-auth', customizer_library_get_default( 'elation-blog-remove-list-auth' ) ) ? sanitize_html_class( 'elation-blog-list-remauth' ) : '' ) ;
                ?>">
										<?php 
                elation_posted_on();
                elation_posted_by();
                ?>
									</div><!-- .entry-meta -->
								<?php 
            }
            
            ?>
							<?php 
        }
        
        ?>

						</header><!-- .entry-header -->
					<?php 
    }
    
    ?>
					
					<?php 
    
    if ( !get_theme_mod( 'elation-blog-remove-list-cont', customizer_library_get_default( 'elation-blog-remove-list-cont' ) ) ) {
        ?>
						<div class="entry-content">

                            <?php 
        // -- ELATION FREE VERSION
        
        if ( has_excerpt() ) {
            the_excerpt();
        } else {
            the_content( sprintf( wp_kses(
                /* translators: %s: Name of current post. Only visible to screen readers */
                __( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'elation' ),
                array(
                    'span' => array(
                    'class' => array(),
                ),
                )
            ), get_the_title() ) );
        }
        
        // ---- Freemius
        ?>

							<?php 
        wp_link_pages( array(
            'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'elation' ),
            'after'  => '</div>',
        ) );
        ?>
						</div><!-- .entry-content -->
					<?php 
    }
    
    ?>
					
					<?php 
    
    if ( !get_theme_mod( 'elation-blog-remove-list-cats', customizer_library_get_default( 'elation-blog-remove-list-cats' ) ) || !get_theme_mod( 'elation-blog-remove-list-tags', customizer_library_get_default( 'elation-blog-remove-list-tags' ) ) || !get_theme_mod( 'elation-blog-remove-list-com', customizer_library_get_default( 'elation-blog-remove-list-com' ) ) ) {
        ?>
						<footer class="entry-footer <?php 
        echo  ( get_theme_mod( 'elation-blog-remove-list-cats', customizer_library_get_default( 'elation-blog-remove-list-cats' ) ) ? sanitize_html_class( 'elation-blog-list-remcats' ) : '' ) ;
        ?> <?php 
        echo  ( get_theme_mod( 'elation-blog-remove-list-tags', customizer_library_get_default( 'elation-blog-remove-list-tags' ) ) ? sanitize_html_class( 'elation-blog-list-remtags' ) : '' ) ;
        ?> <?php 
        echo  ( get_theme_mod( 'elation-blog-remove-list-com', customizer_library_get_default( 'elation-blog-remove-list-com' ) ) ? sanitize_html_class( 'elation-blog-list-remcoms' ) : '' ) ;
        ?>">
							<?php 
        elation_entry_footer();
        ?>
						</footer><!-- .entry-footer -->
					<?php 
    }
    
    ?>
					
				</div>
			</div>
		<?php 
}

?>

	</div>
</article><!-- #post-<?php 
the_ID();
?> -->