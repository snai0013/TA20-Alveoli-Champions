<?php
/**
 * Template part for displaying post content in single.php
 *
 * @package Elation
 */ ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <?php
	if ( 'elation-fimage-top' == get_theme_mod( 'elation-blog-post-fimage', customizer_library_get_default( 'elation-blog-post-fimage' ) ) ) :
		if ( 'elation-site-media-fimage' != get_theme_mod( 'elation-site-media-type', customizer_library_get_default( 'elation-site-media-type' ) ) ) :
			elation_post_thumbnail();
		endif;
	endif;?>

    <?php
	if ( 'elation-pagetitle-default' == get_theme_mod( 'elation-pagetitle-layout', customizer_library_get_default( 'elation-pagetitle-layout' ) ) || 'elation-pagetitle-other' == get_theme_mod( 'elation-pagetitle-layout', customizer_library_get_default( 'elation-pagetitle-layout' ) ) ) :
		get_template_part( '/templates/title-bar' );
    endif; ?>
    
    <?php
    if ( 'elation-postlay-one' == get_theme_mod( 'elation-blog-postlay', customizer_library_get_default( 'elation-blog-postlay' ) ) ) :
        if ( !get_theme_mod( 'elation-blog-post-remove-date', customizer_library_get_default( 'elation-blog-post-remove-date' ) ) || !get_theme_mod( 'elation-blog-post-remove-auth', customizer_library_get_default( 'elation-blog-post-remove-auth' ) ) ) : ?>
            <?php if ( 'post' === get_post_type() ) : ?>
                <div class="entry-meta <?php echo ( get_theme_mod( 'elation-blog-post-remove-date', customizer_library_get_default( 'elation-blog-post-remove-date' ) ) ) ? sanitize_html_class( 'elation-blog-post-remdate' ) : ''; ?> <?php echo ( get_theme_mod( 'elation-blog-post-remove-auth', customizer_library_get_default( 'elation-blog-post-remove-auth' ) ) ) ? sanitize_html_class( 'elation-blog-post-remauth' ) : ''; ?>">
                    <?php
                    elation_posted_on();
                    elation_posted_by(); ?>
                </div><!-- .entry-meta -->
            <?php endif; ?>
        <?php
        endif;
    endif; ?>
    
    <?php if ( 'elation-postlay-one' == get_theme_mod( 'elation-blog-postlay', customizer_library_get_default( 'elation-blog-postlay' ) ) ) : ?>
        <footer class="entry-footer <?php echo ( get_theme_mod( 'elation-blog-post-remove-cats', customizer_library_get_default( 'elation-blog-post-remove-cats' ) ) ) ? sanitize_html_class( 'elation-blog-post-remcats' ) : ''; ?> <?php echo ( get_theme_mod( 'elation-blog-post-remove-tags', customizer_library_get_default( 'elation-blog-post-remove-tags' ) ) ) ? sanitize_html_class( 'elation-blog-post-remtags' ) : ''; ?>">
            <?php elation_entry_footer(); ?>
        </footer><!-- .entry-footer -->
    <?php endif; ?>

	<?php
	if ( 'elation-fimage-default' == get_theme_mod( 'elation-blog-post-fimage', customizer_library_get_default( 'elation-blog-post-fimage' ) ) ) :
		if ( 'elation-site-media-fimage' != get_theme_mod( 'elation-site-media-type', customizer_library_get_default( 'elation-site-media-type' ) ) ) :
			elation_post_thumbnail();
		endif;
	endif;?>

	<div class="entry-content">

        <?php
        if ( 'elation-postlay-default' == get_theme_mod( 'elation-blog-postlay', customizer_library_get_default( 'elation-blog-postlay' ) ) ) :
            if ( !get_theme_mod( 'elation-blog-post-remove-date', customizer_library_get_default( 'elation-blog-post-remove-date' ) ) || !get_theme_mod( 'elation-blog-post-remove-auth', customizer_library_get_default( 'elation-blog-post-remove-auth' ) ) ) : ?>
                <?php if ( 'post' === get_post_type() ) : ?>
                    <div class="entry-meta <?php echo ( get_theme_mod( 'elation-blog-post-remove-date', customizer_library_get_default( 'elation-blog-post-remove-date' ) ) ) ? sanitize_html_class( 'elation-blog-post-remdate' ) : ''; ?> <?php echo ( get_theme_mod( 'elation-blog-post-remove-auth', customizer_library_get_default( 'elation-blog-post-remove-auth' ) ) ) ? sanitize_html_class( 'elation-blog-post-remauth' ) : ''; ?>">
                        <?php
                        elation_posted_on();
                        elation_posted_by(); ?>
                    </div><!-- .entry-meta -->
                <?php endif; ?>
            <?php
            endif;
        endif; ?>
        
		<?php
		the_content();

		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'elation' ),
			'after'  => '</div>',
        ) ); ?>
        
	</div><!-- .entry-content -->

    <?php
    if ( 'elation-postlay-two' == get_theme_mod( 'elation-blog-postlay', customizer_library_get_default( 'elation-blog-postlay' ) ) ) :
        if ( !get_theme_mod( 'elation-blog-post-remove-date', customizer_library_get_default( 'elation-blog-post-remove-date' ) ) || !get_theme_mod( 'elation-blog-post-remove-auth', customizer_library_get_default( 'elation-blog-post-remove-auth' ) ) ) : ?>
            <?php if ( 'post' === get_post_type() ) : ?>
                <div class="entry-meta <?php echo ( get_theme_mod( 'elation-blog-post-remove-date', customizer_library_get_default( 'elation-blog-post-remove-date' ) ) ) ? sanitize_html_class( 'elation-blog-post-remdate' ) : ''; ?> <?php echo ( get_theme_mod( 'elation-blog-post-remove-auth', customizer_library_get_default( 'elation-blog-post-remove-auth' ) ) ) ? sanitize_html_class( 'elation-blog-post-remauth' ) : ''; ?>">
                    <?php
                    elation_posted_on();
                    elation_posted_by(); ?>
                </div><!-- .entry-meta -->
            <?php endif; ?>
        <?php
        endif;
    endif; ?>
    <?php if ( 'elation-postlay-default' == get_theme_mod( 'elation-blog-postlay', customizer_library_get_default( 'elation-blog-postlay' ) ) || 'elation-postlay-two' == get_theme_mod( 'elation-blog-postlay', customizer_library_get_default( 'elation-blog-postlay' ) ) ) : ?>
        <footer class="entry-footer <?php echo ( get_theme_mod( 'elation-blog-post-remove-cats', customizer_library_get_default( 'elation-blog-post-remove-cats' ) ) ) ? sanitize_html_class( 'elation-blog-post-remcats' ) : ''; ?> <?php echo ( get_theme_mod( 'elation-blog-post-remove-tags', customizer_library_get_default( 'elation-blog-post-remove-tags' ) ) ) ? sanitize_html_class( 'elation-blog-post-remtags' ) : ''; ?>">
            <?php elation_entry_footer(); ?>
        </footer><!-- .entry-footer -->
    <?php endif; ?>

</article><!-- #post-<?php the_ID(); ?> -->