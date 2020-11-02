<?php
/**
 * About section
 *
 * This is the template for the content of about section
 *
 * @package Busyness
 */

if ( ! function_exists( 'busyness_add_about_section' ) ) :
    /**
    * Add about section
    *
    *@since Busyness 1.0.0
    */
    function busyness_add_about_section() {
        $options = busyness_get_theme_options();
        // Check if about is enabled on frontpage
        $about_enable = apply_filters( 'busyness_section_status', true, 'about_section_enable' );

        if ( true !== $about_enable ) {
            return false;
        }
        // Get about section details
        $section_details = array();
        $section_details = apply_filters( 'busyness_filter_about_section_details', $section_details );

        if ( empty( $section_details ) ) {
            return;
        }

        // Render about section now.
        busyness_render_about_section( $section_details );
    }
endif;

if ( ! function_exists( 'busyness_get_about_section_details' ) ) :
    /**
    * about section details.
    *
    * @since Busyness 1.0.0
    * @param array $input about section details.
    */
    function busyness_get_about_section_details( $input ) {
        $options = busyness_get_theme_options();

        $content = array();

        $page_id   = ! empty( $options['about_content_page'] ) ? $options['about_content_page'] : '';
        $btn_title  = $options['about_btn_title'];

        $args = array(
            'post_type'         => 'page',
            'page_id'          => $page_id,
            'posts_per_page'    => 1,
            'orderby'           => 'post__in',
            );



        // Run The Loop.
        $query = new WP_Query( $args );
        if ( $query->have_posts() ) :
            $i = 0;
            while ( $query->have_posts() ) : $query->the_post();
                $page_post['id']        = get_the_id();
                $page_post['title']     = get_the_title();
                $page_post['url']       = get_the_permalink();
                $page_post['btn_title'] = $btn_title;
                $page_post['excerpt']   = busyness_trim_content( 25 );
                $page_post['image']     = has_post_thumbnail() ? get_the_post_thumbnail_url( get_the_id(), 'post-thumbnail' ) : '';

                // Push to the main array.
                array_push( $content, $page_post );
                $i++;
            endwhile;
        endif;
        wp_reset_postdata();


        if ( ! empty( $content ) ) {
            $input = $content;
        }
        return $input;
    }
endif;
// about section content details.
add_filter( 'busyness_filter_about_section_details', 'busyness_get_about_section_details' );


if ( ! function_exists( 'busyness_render_about_section' ) ) :
  /**
   * Start about section
   *
   * @return string about content
   * @since Busyness 1.0.0
   *
   */
   function busyness_render_about_section( $content_details = array() ) {
        $options = busyness_get_theme_options();

        if ( empty( $content_details ) ) {
            return;
        } ?>

        <div id="about-us" class="relative page-section">
            <div class="wrapper">
                <?php foreach ( $content_details as $content ) : ?>
                    <article>
                         <?php if ( ! empty( $content['image'] ) ) : ?>
                            <div class="featured-image" style="background-image: url('<?php echo esc_url( $content['image'] ); ?>');">
                                <a href="<?php echo esc_url( $content['url'] ); ?>" class="post-thumbnail-link"></a>
                            </div><!-- .featured-image -->
                        <?php endif; ?>

                        <div class="entry-container">
                           <div class="section-header">
                                <h2 class="section-title"><?php echo esc_html( $content['title'] ); ?></h2>
                            </div><!-- .section-header -->

                            <div class="section-content">
                                <p><?php echo esc_html( $content['excerpt'] ); ?></p>
                            </div><!-- .section-content -->

                            <?php if ( ! empty( $content['btn_title'] ) ): ?>
                                <div class="more-link">
                                    <a href="<?php echo esc_url( $content['url'] ); ?>" class="btn btn-transparent">
                                        <span class="screen-reader-text"><?php echo esc_html( $content['title'] ); ?></span>
                                        <?php echo esc_html( $content['btn_title'] ); ?></a>
                                </div><!-- .more-link -->
                            <?php endif ?>

                        </div><!-- .entry-container -->
                    </article>
                <?php endforeach; ?>
            </div><!-- .wrapper -->
        </div><!-- #about-us -->
    <?php }
endif;