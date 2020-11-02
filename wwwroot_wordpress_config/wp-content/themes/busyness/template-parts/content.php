<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Busyness
 */

$options = busyness_get_theme_options();
$class = has_post_thumbnail() ? '' : 'no-post-thumbnail';
$readmore = ! empty( $options['read_more_text'] ) ? $options['read_more_text'] : esc_html__( 'Read More', 'busyness' );
?>

<article class="hentry" id="post-<?php the_ID(); ?>" <?php post_class( $class ); ?>>
    <div class="blog-wrapper">
        <?php if ( has_post_thumbnail() ) : ?>
            <div class="featured-image">
                <a href="<?php the_permalink(); ?>">
                    <img src="<?php the_post_thumbnail_url( ); ?>" alt="post-image">
                </a>
            </div><!-- .featured-image -->
        <?php endif; ?>

        <div class="entry-container">
            <div class="entry-meta">
                <?php
                    if ( ! $options['hide_date'] ) :
                        busyness_posted_on();
                    endif;
                ?>
            </div><!-- .entry-meta -->

            <header class="entry-header">
                <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            </header>

            <div class="entry-content">
                <?php the_excerpt(); ?>
            </div><!-- .entry-content -->

            <?php if ( ! $options['hide_category'] ) : ?>
                    <span class="cat-links">
                        <?php the_category(); ?>
                    </span><!-- .cat-links -->
                <?php endif;
            ?>
        </div><!-- .entry-container -->
    </div><!-- .post-item-wrapper -->
</article><!-- #post-## -->
