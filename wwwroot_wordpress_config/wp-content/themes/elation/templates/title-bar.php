<?php if ( !is_front_page() ) : ?>
    <?php if ( !get_theme_mod( 'elation-remove-pagetitles', customizer_library_get_default( 'elation-remove-pagetitles' ) ) ) :
        $page_id = get_the_ID(); ?>

        <?php if ( empty( get_post_meta( $page_id, 'elation-page-remove-title' , true ) ) ) : ?>

            <header class="elation-page-title <?php echo sanitize_html_class( get_theme_mod( 'elation-pagetitle-layout', customizer_library_get_default( 'elation-pagetitle-layout' ) ) ); ?>">

                <?php echo esc_html( 'elation-pagetitle-banner' == get_theme_mod( 'elation-pagetitle-layout', customizer_library_get_default( 'elation-pagetitle-layout' ) ) ) ? '<div class="site-container">' : ''; ?>
                    
                    <<?php echo tag_escape( get_theme_mod( 'elation-seo-page-title', customizer_library_get_default( 'elation-seo-page-title' ) ) ); ?> class="elation-h-title">
                        <?php
                        if ( is_home() ) :
                            $elation_blog_id = get_option( 'page_for_posts' );  ?>
                            <?php echo esc_html( get_page( $elation_blog_id )->post_title );
                        elseif ( is_archive() ) :
                            if ( class_exists( 'WooCommerce' ) ) :
                                if ( is_shop() || is_product_category() || is_product_tag() ) :
                                    $elation_shop_id = get_option( 'woocommerce_shop_page_id' );
                                    echo esc_html( get_page( $elation_shop_id )->post_title );
                                else :
                                    the_archive_title();
                                    the_archive_description( '<div class="archive-description">', '</div>' );
                                endif;
                            else :
                                the_archive_title();
                                the_archive_description( '<div class="archive-description">', '</div>' );
                            endif;
                        elseif ( is_search() ) :
                            /* translators: %s: search query. */
                            printf( esc_html__( 'Search Results for: %s', 'elation' ), '<span>' . get_search_query() . '</span>' );
                        else :
                            if ( class_exists( 'WooCommerce' ) ) :
                                if ( is_product() ) :
                                    $elation_shop_id = get_option( 'woocommerce_shop_page_id' );
                                    echo esc_html( get_page( $elation_shop_id )->post_title . ' - ' );
                                endif;
                            endif;
                            the_title();
                        endif;
                        ?>
                    </<?php echo tag_escape( get_theme_mod( 'elation-seo-page-title', customizer_library_get_default( 'elation-seo-page-title' ) ) ); ?>>
                    <?php if ( function_exists( 'bcn_display' ) ) : ?>
                        <div class="elation-breadcrumbs">
                            <?php bcn_display(); ?>
                        </div>
                    <?php endif; ?>

                <?php echo esc_html( 'elation-pagetitle-banner' == get_theme_mod( 'elation-pagetitle-layout', customizer_library_get_default( 'elation-pagetitle-layout' ) ) ) ? '</div>' : ''; ?>

            </header>

        <?php endif; ?>

    <?php endif; ?>
<?php endif; ?>
