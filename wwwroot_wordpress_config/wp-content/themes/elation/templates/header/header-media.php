<?php if ( 'elation-site-media-shortcode' == get_theme_mod( 'elation-site-media-type', customizer_library_get_default( 'elation-site-media-type' ) ) ) : ?>

    <div class="site-container<?php echo ( get_theme_mod( 'elation-sitemedia-fullwidth', customizer_library_get_default( 'elation-sitemedia-fullwidth' ) ) ) ? sanitize_html_class( '-full' ) : ''; ?>">
        <?php
        $page_id = get_queried_object_id();
        if ( class_exists( 'WooCommerce' ) ) :
            if ( is_shop() || is_product_category() || is_product_tag() ) :
                $page_id = wc_get_page_id( 'shop' );
            else :
                $page_id = get_queried_object_id();
            endif;
        else :
            if ( is_single() ) :
                $page_id = '';
            endif;
        endif;

        $elation_media_shortcode = get_post_meta( $page_id, 'elation-page-slider-shortcode', true ) ? get_post_meta( $page_id, 'elation-page-slider-shortcode', true ) : get_theme_mod( 'elation-sitemedia-shortcode', customizer_library_get_default( 'elation-sitemedia-shortcode' ) );
        
        echo do_shortcode( sanitize_text_field( $elation_media_shortcode ) ); ?>
    </div>

<?php elseif ( 'elation-site-media-fimage' == get_theme_mod( 'elation-site-media-type', customizer_library_get_default( 'elation-site-media-type' ) ) ) :
    $elation_fimg_id = get_the_ID();
    if ( is_home() || is_archive() || is_search() ) :
        if ( class_exists( 'WooCommerce' ) ) :
            if ( is_shop() || is_product_category() || is_product_tag() ) :
                $elation_fimg_id = get_option( 'woocommerce_shop_page_id' );
            else :
                $elation_fimg_id = get_option( 'page_for_posts' );
            endif;
        else :
            $elation_fimg_id = get_option( 'page_for_posts' );
        endif;
    else :
        if ( class_exists( 'WooCommerce' ) ) :
            if ( is_product() ) :
                $elation_fimg_id = get_option( 'woocommerce_shop_page_id' );
            endif;
        else :
            $elation_fimg_id = get_the_ID();
        endif;
    endif; ?>
    
    <?php if ( has_post_thumbnail( $elation_fimg_id ) ) : ?>
        <div class="elation-banner-wrap">

            <div class="site-container<?php echo ( get_theme_mod( 'elation-sitemedia-fullwidth', customizer_library_get_default( 'elation-sitemedia-fullwidth' ) ) ) ? sanitize_html_class( '-full' ) : ''; ?>">
                <div class="elation-banner-img" <?php echo esc_html( 'elation-media-fimage-actual' != get_theme_mod( 'elation-site-media-fimage-size', customizer_library_get_default( 'elation-site-media-fimage-size' ) ) ) ? 'style="background-image: url(' . esc_url( get_the_post_thumbnail_url( $elation_fimg_id ) ) . ');"' : ''; ?>>
                    
                    <?php if ( get_theme_mod( 'elation-sitemedia-add-elation', customizer_library_get_default( 'elation-sitemedia-add-elation' ) ) ) : ?>
                        <div class="elation-banner-img-elation"></div>
                    <?php endif; ?>

                    <?php
                    if ( 'elation-pagetitle-cheader' == get_theme_mod( 'elation-pagetitle-layout', customizer_library_get_default( 'elation-pagetitle-layout' ) ) ) : ?>
                        <div class="custom-header-pagetitle">
                            <?php get_template_part( '/templates/title-bar' ); ?>
                        </div>
                    <?php
                    endif; ?>

                    <?php if ( 'elation-media-fimage-small' == get_theme_mod( 'elation-site-media-fimage-size', customizer_library_get_default( 'elation-site-media-fimage-size' ) ) ) : ?>
                        <img src="<?php echo esc_url( get_template_directory_uri() ) ?>/images/fimage_banner_small.gif" />
                    <?php elseif ( 'elation-media-fimage-medium' == get_theme_mod( 'elation-site-media-fimage-size', customizer_library_get_default( 'elation-site-media-fimage-size' ) ) ) : ?>
                        <img src="<?php echo esc_url( get_template_directory_uri() ) ?>/images/fimage_banner_medium.gif" />
                    <?php elseif ( 'elation-media-fimage-large' == get_theme_mod( 'elation-site-media-fimage-size', customizer_library_get_default( 'elation-site-media-fimage-size' ) ) ) : ?>
                        <img src="<?php echo esc_url( get_template_directory_uri() ) ?>/images/fimage_banner_large.gif" />
                    <?php else : ?>
                        <?php echo get_the_post_thumbnail( $elation_fimg_id, 'full' ); ?>
                    <?php endif; ?>

                </div>
            </div>

        </div>
    <?php endif; ?>

<?php elseif ( 'elation-site-media-media' == get_theme_mod( 'elation-site-media-type', customizer_library_get_default( 'elation-site-media-type' ) ) ) : ?>

    <?php if ( has_custom_header() ) : ?>
        <div class="custom-header-wrap">
            <div class="site-container<?php echo ( get_theme_mod( 'elation-sitemedia-fullwidth', customizer_library_get_default( 'elation-sitemedia-fullwidth' ) ) ) ? sanitize_html_class( '-full' ) : ''; ?>">
                
                <?php if ( get_theme_mod( 'elation-sitemedia-add-elation', customizer_library_get_default( 'elation-sitemedia-add-elation' ) ) ) : ?>
                    <div class="elation-banner-img-elation"></div>
                <?php endif; ?>

                <?php
                if ( 'elation-pagetitle-cheader' == get_theme_mod( 'elation-pagetitle-layout', customizer_library_get_default( 'elation-pagetitle-layout' ) ) ) : ?>
                    <div class="custom-header-pagetitle">
                        <?php get_template_part( '/templates/title-bar' ); ?>
                    </div>
                <?php
                endif; ?>

                <?php the_custom_header_markup(); ?>
            </div>
        </div>
    <?php endif; ?>

<?php else : ?>

    <!-- No Header Media -->

<?php endif; ?>