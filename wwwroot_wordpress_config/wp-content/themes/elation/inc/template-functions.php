<?php

/**
 * Functions which enhance the theme by hooking into WordPress
 * @package Elation
 */
/**
 * Adds custom classes to the array of body classes.
 */
function elation_body_classes( $classes )
{
    // Adds a class of hfeed to non-singular pages.
    if ( !is_singular() ) {
        $classes[] = 'hfeed';
    }
    // Adds a class of no-sidebar when there is no sidebar present.
    if ( !is_active_sidebar( 'sidebar-1' ) ) {
        $classes[] = 'no-sidebar';
    }
    return $classes;
}

add_filter( 'body_class', 'elation_body_classes' );
/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function elation_pingback_header()
{
    if ( is_singular() && pings_open() ) {
        printf( '<link rel="pingback" href="%s">', esc_url( get_bloginfo( 'pingback_url' ) ) );
    }
}

add_action( 'wp_head', 'elation_pingback_header' );
/**
 * Function to remove Category pre-title text
 */
function elation_remove_page_title_pretext( $elation_title )
{
    if ( get_theme_mod( 'elation-blog-cats-remove-pretext', customizer_library_get_default( 'elation-blog-cats-remove-pretext' ) ) ) {
        
        if ( is_category() ) {
            $elation_title = single_cat_title( '', false );
        } elseif ( is_tag() ) {
            $elation_title = single_tag_title( '', false );
        } elseif ( is_post_type_archive() ) {
            $elation_title = post_type_archive_title( '', false );
        } elseif ( is_author() ) {
            $elation_title = '<span class="vcard">' . get_the_author() . '</span>';
        }
    
    }
    return $elation_title;
}

add_filter( 'get_the_archive_title', 'elation_remove_page_title_pretext' );