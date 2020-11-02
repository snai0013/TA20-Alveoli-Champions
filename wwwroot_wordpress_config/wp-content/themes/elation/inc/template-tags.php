<?php

/**
 * Custom template tags for this theme
 * @package Elation
 */
if ( !function_exists( 'elation_posted_on' ) ) {
    /**
     * Prints HTML with meta information for the current post-date/time.
     */
    function elation_posted_on()
    {
        $time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
        if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
            $time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time><time class="updated" datetime="%3$s">%4$s</time>';
        }
        $time_string = sprintf(
            $time_string,
            esc_attr( get_the_date( DATE_W3C ) ),
            esc_html( get_the_date() ),
            esc_attr( get_the_modified_date( DATE_W3C ) ),
            esc_html( get_the_modified_date() )
        );
        $elation_posted_on = sprintf(
            /* translators: %s: post date. */
            esc_html_x( 'Posted on %s', 'post date', 'elation' ),
            '<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">' . $time_string . '</a>'
        );
        // echo '<span class="posted-on">' . $posted_on . '</span>'; // WPCS: XSS OK.
        $elation_postedon_html = array(
            'a'    => array(
            'href' => array(),
            'rel'  => array(),
        ),
            'time' => array(
            'datetime' => array(),
            'class'    => array(),
        ),
        );
        echo  '<span class="posted-on">' . wp_kses( $elation_posted_on, $elation_postedon_html ) . '</span>' ;
        // WPCS: XSS OK.
    }

}
if ( !function_exists( 'elation_posted_by' ) ) {
    /**
     * Prints HTML with meta information for the current author.
     */
    function elation_posted_by()
    {
        $byline = sprintf(
            /* translators: %s: post author. */
            esc_html_x( 'by %s', 'post author', 'elation' ),
            '<span class="author vcard"><a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' . esc_html( get_the_author() ) . '</a></span>'
        );
        $elation_byline_html = array(
            'a'    => array(
            'href'  => array(),
            'class' => array(),
        ),
            'span' => array(
            'class' => array(),
        ),
        );
        echo  '<span class="byline"> ' . wp_kses( $byline, $elation_byline_html ) . '</span>' ;
        // WPCS: XSS OK.
    }

}
if ( !function_exists( 'elation_entry_footer' ) ) {
    /**
     * Prints HTML with meta information for the categories, tags and comments.
     */
    function elation_entry_footer()
    {
        // Hide category and tag text for pages.
        
        if ( 'post' === get_post_type() ) {
            $elation_cattags_html = array(
                'a' => array(
                'href' => array(),
                'rel'  => array(),
            ),
            );
            /* translators: used between list items, there is a space after the comma */
            $elation_cats_list = get_the_category_list( esc_html__( ', ', 'elation' ) );
            
            if ( $elation_cats_list ) {
                /* translators: 1: list of categories. */
                printf( '<span class="cat-links">' . esc_html__( 'Posted in %1$s', 'elation' ) . '</span>', wp_kses( $elation_cats_list, $elation_cattags_html ) );
                // WPCS: XSS OK.
            }
            
            /* translators: used between list items, there is a space after the comma */
            $elation_tags_list = get_the_tag_list( '', esc_html_x( ', ', 'list item separator', 'elation' ) );
            
            if ( $elation_tags_list ) {
                /* translators: 1: list of tags. */
                printf( '<span class="tags-links">' . esc_html__( 'Tagged %1$s', 'elation' ) . '</span>', wp_kses( $elation_tags_list, $elation_cattags_html ) );
                // WPCS: XSS OK.
            }
        
        }
        
        
        if ( !is_single() && !post_password_required() && (comments_open() || get_comments_number()) ) {
            echo  '<span class="comments-link">' ;
            comments_popup_link( sprintf( wp_kses(
                /* translators: %s: post title */
                __( 'Leave a Comment<span class="screen-reader-text"> on %s</span>', 'elation' ),
                array(
                    'span' => array(
                    'class' => array(),
                ),
                )
            ), get_the_title() ) );
            echo  '</span>' ;
        }
        
        edit_post_link( sprintf( wp_kses(
            /* translators: %s: Name of current post. Only visible to screen readers */
            __( 'Edit <span class="screen-reader-text">%s</span>', 'elation' ),
            array(
                'span' => array(
                'class' => array(),
            ),
            )
        ), get_the_title() ), '<span class="edit-link">', '</span>' );
    }

}
if ( !function_exists( 'elation_post_thumbnail' ) ) {
    /**
     * Displays an optional post thumbnail.
     *
     * Wraps the post thumbnail in an anchor element on index views, or a div
     * element when on single views.
     */
    function elation_post_thumbnail()
    {
        if ( post_password_required() || is_attachment() || !has_post_thumbnail() ) {
            return;
        }
        
        if ( is_singular() ) {
            ?>

			<div class="post-thumbnail">
				<?php 
            the_post_thumbnail();
            ?>
			</div><!-- .post-thumbnail -->

		<?php 
        } else {
            ?>

		<a class="post-thumbnail" href="<?php 
            the_permalink();
            ?>" aria-hidden="true" tabindex="-1">
			<?php 
            $elation_thumbnail = ( 'actual' == get_theme_mod( 'elation-blog-list-img-prop', customizer_library_get_default( 'elation-blog-list-img-prop' ) ) ? get_theme_mod( 'elation-blog-list-img-cut', customizer_library_get_default( 'elation-blog-list-img-cut' ) ) : 'post-thumbnail' );
            the_post_thumbnail( $elation_thumbnail, array(
                'alt' => the_title_attribute( array(
                'echo' => false,
            ) ),
            ) );
            ?>
		</a>
		<?php 
        }
        
        // End is_singular().
    }

}
/**
 * Added for backwards compatibility to support pre 5.2.0 WordPress versions.
 */
if ( !function_exists( 'wp_body_open' ) ) {
    /**
     * Fire the wp_body_open action.
     */
    function wp_body_open()
    {
        /**
         * Triggered after the opening <body> tag.
         */
        do_action( 'wp_body_open' );
    }

}