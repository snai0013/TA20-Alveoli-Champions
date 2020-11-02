<?php
/**
 * Blog section
 *
 * This is the template for the content of blog section
 *
 * @package Busyness
 */

if ( ! function_exists( 'busyness_add_blog_section' ) ) :
    /**
    * Add blog section
    *
    *@since Busyness 1.0.0
    */
    function busyness_add_blog_section() {
    	$options = busyness_get_theme_options();
        // Check if blog is enabled on frontpage
        $blog_enable = apply_filters( 'busyness_section_status', true, 'blog_section_enable' );

        if ( true !== $blog_enable ) {
            return false;
        }
        // Get blog section details
        $section_details = array();
        $section_details = apply_filters( 'busyness_filter_blog_section_details', $section_details );

        if ( empty( $section_details ) ) {
            return;
        }

        // Render blog section now.
        busyness_render_blog_section( $section_details );
    }
endif;

if ( ! function_exists( 'busyness_get_blog_section_details' ) ) :
    /**
    * blog section details.
    *
    * @since Busyness 1.0.0
    * @param array $input blog section details.
    */
    function busyness_get_blog_section_details( $input ) {
        $options = busyness_get_theme_options();

        // Content type.
        $blog_content_type  = $options['blog_content_type'];
        $blog_count = ! empty( $options['blog_count'] ) ? $options['blog_count'] : 3;

        $content = array();
        switch ( $blog_content_type ) {

            case 'page':
                $page_ids = array();

                for ( $i = 1; $i <= $blog_count; $i++ ) {
                    if ( ! empty( $options['blog_content_page_' . $i] ) )
                        $page_ids[] = $options['blog_content_page_' . $i];
                }

                $args = array(
                    'post_type'         => 'page',
                    'post__in'          => ( array ) $page_ids,
                    'posts_per_page'    => absint( $blog_count ),
                    'orderby'           => 'post__in',
                    );
            break;


            case 'category':
                $cat_id = ! empty( $options['blog_content_category'] ) ? $options['blog_content_category'] : '';
                $args = array(
                    'post_type'             => 'post',
                    'posts_per_page'        => absint( $blog_count ),
                    'cat'                   => absint( $cat_id ),
                    'ignore_sticky_posts'   => true,
                    );
            break;

            default:
            break;
        }


        // Run The Loop.
        $query = new WP_Query( $args );
        if ( $query->have_posts() ) :
            while ( $query->have_posts() ) : $query->the_post();
                $page_post['id']        = get_the_id();
                $page_post['title']     = get_the_title();
                $page_post['url']       = get_the_permalink();
                $page_post['excerpt']   = busyness_trim_content( 20 );
                $page_post['image']  	= has_post_thumbnail() ? get_the_post_thumbnail_url( get_the_id(), 'post-thumbnail' ) : '';

                // Push to the main array.
                array_push( $content, $page_post );
            endwhile;
        endif;
        wp_reset_postdata();

        if ( ! empty( $content ) ) {
            $input = $content;
        }
        return $input;
    }
endif;
// blog section content details.
add_filter( 'busyness_filter_blog_section_details', 'busyness_get_blog_section_details' );


if ( ! function_exists( 'busyness_render_blog_section' ) ) :
  /**
   * Start blog section
   *
   * @return string blog content
   * @since Busyness 1.0.0
   *
   */
   function busyness_render_blog_section( $content_details = array() ) {
        $options = busyness_get_theme_options();


        if ( empty( $content_details ) ) {
            return;
        } ?>
        <div id="blog" class="relative page-section">
                <div class="wrapper">
                    <div class="section-header">
                        <?php if ( ! empty($options['blog_title']) ): ?>
                            <h2 class="section-title">
                                <?php echo esc_html( $options['blog_title'] ) ; ?>
                            </h2>
                        <?php endif ?>
                    </div><!-- .section-header -->

                    <div class="section-content section-wrapper posts-wrapper col3">
                        <?php foreach ( $content_details as $content ):
                            $image = ! empty( $content['image'] ) ? $content['image'] : '';
                        ?>
                            <article class="hentry">
                                <div class="blog-wrapper">
                                    <div class="featured-image">
                                        <a href="<?php echo esc_url( $content['url'] ) ; ?>">
                                            <img src="<?php echo esc_url( $image ) ; ?>">
                                        </a>
                                    </div><!-- .featured-image -->

                                    <div class="entry-container">
                                        <div class="entry-meta">
                                            <span class="posted-on">
                                                <span class="screen-reader-text"><?php esc_html_e('Posted on','busyness') ?></span>
                                                <?php busyness_posted_on( $content['id'] ) ; ?>
                                            </span><!-- .posted-on -->
                                        </div>

                                        <header class="entry-header">
                                            <h2 class="entry-title">
                                                <a href="<?php echo esc_url( $content['url'] ) ; ?>">
                                                    <?php echo esc_html( $content['title'] ) ; ?>
                                                </a>
                                            </h2>
                                        </header>

                                        <div class="entry-content">
                                            <p>
                                                <?php echo esc_html( $content['excerpt'] ) ; ?>
                                            </p>
                                        </div><!-- .entry-content -->

                                        <span class="cat-links">
                                            <?php the_category('', '', $content['id'] ) ; ?>
                                        </span>
                                    </div>
                                </div>
                            </article>
                        <?php endforeach ?>
                    </div><!-- .section-content -->
                </div><!-- .wrapper -->
            </div>
    <?php }
endif;