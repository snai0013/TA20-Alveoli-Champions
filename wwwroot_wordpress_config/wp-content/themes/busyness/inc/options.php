<?php
/**
 * Busyness options
 *
 * @package Busyness
 */

/**
 * List of pages for page choices.
 * @return Array Array of page ids and name.
 */
function busyness_page_choices() {
    $pages = get_pages();
    $choices = array();
    $choices[0] = esc_html__( '--Select--', 'busyness' );
    foreach ( $pages as $page ) {
        $choices[ $page->ID ] = $page->post_title;
    }
    return  $choices;
}


/**
 * List of category for category choices.
 * @return Array Array of post ids and name.
 */
function busyness_category_choices() {
    $tax_args = array(
        'hierarchical' => 0,
        'taxonomy'     => 'category',
    );
    $taxonomies = get_categories( $tax_args );
    $choices = array();
    $choices[0] = esc_html__( '--Select--', 'busyness' );
    foreach ( $taxonomies as $tax ) {
        $choices[ $tax->term_id ] = $tax->name;
    }
    return  $choices;
}


if ( ! function_exists( 'busyness_site_layout' ) ) :
    /**
     * Site Layout
     * @return array site layout options
     */
    function busyness_site_layout() {
        $busyness_site_layout = array(
            'wide'  => get_template_directory_uri() . '/assets/images/full.png',
            'boxed-layout' => get_template_directory_uri() . '/assets/images/boxed.png',
        );

        $output = apply_filters( 'busyness_site_layout', $busyness_site_layout );
        return $output;
    }
endif;

if ( ! function_exists( 'busyness_selected_sidebar' ) ) :
    /**
     * Sidebars options
     * @return array Sidbar positions
     */
    function busyness_selected_sidebar() {
        $busyness_selected_sidebar = array(
            'sidebar-1'             => esc_html__( 'Default Sidebar', 'busyness' ),
            'optional-sidebar'      => esc_html__( 'Optional Sidebar 1', 'busyness' ),
            'optional-sidebar-2'    => esc_html__( 'Optional Sidebar 2', 'busyness' ),
            'optional-sidebar-3'    => esc_html__( 'Optional Sidebar 3', 'busyness' ),
            'optional-sidebar-4'    => esc_html__( 'Optional Sidebar 4', 'busyness' ),
        );

        $output = apply_filters( 'busyness_selected_sidebar', $busyness_selected_sidebar );

        return $output;
    }
endif;


if ( ! function_exists( 'busyness_global_sidebar_position' ) ) :
    /**
     * Global Sidebar position
     * @return array Global Sidebar positions
     */
    function busyness_global_sidebar_position() {
        $busyness_global_sidebar_position = array(
            'right-sidebar' => get_template_directory_uri() . '/assets/images/right.png',
            'no-sidebar'    => get_template_directory_uri() . '/assets/images/full.png',
        );

        $output = apply_filters( 'busyness_global_sidebar_position', $busyness_global_sidebar_position );

        return $output;
    }
endif;


if ( ! function_exists( 'busyness_sidebar_position' ) ) :
    /**
     * Sidebar position
     * @return array Sidbar positions
     */
    function busyness_sidebar_position() {
        $busyness_sidebar_position = array(
            'right-sidebar' => get_template_directory_uri() . '/assets/images/right.png',
            'no-sidebar'    => get_template_directory_uri() . '/assets/images/full.png',
        );

        $output = apply_filters( 'busyness_sidebar_position', $busyness_sidebar_position );

        return $output;
    }
endif;


if ( ! function_exists( 'busyness_pagination_options' ) ) :
    /**
     * Pagination
     * @return array site pagination options
     */
    function busyness_pagination_options() {
        $busyness_pagination_options = array(
            'numeric'   => esc_html__( 'Numeric', 'busyness' ),
            'default'   => esc_html__( 'Default(Older/Newer)', 'busyness' ),
        );

        $output = apply_filters( 'busyness_pagination_options', $busyness_pagination_options );

        return $output;
    }
endif;


if ( ! function_exists( 'busyness_switch_options' ) ) :
    /**
     * List of custom Switch Control options
     * @return array List of switch control options.
     */
    function busyness_switch_options() {
        $arr = array(
            'on'        => esc_html__( 'Enable', 'busyness' ),
            'off'       => esc_html__( 'Disable', 'busyness' )
        );
        return apply_filters( 'busyness_switch_options', $arr );
    }
endif;

if ( ! function_exists( 'busyness_hide_options' ) ) :
    /**
     * List of custom Switch Control options
     * @return array List of switch control options.
     */
    function busyness_hide_options() {
        $arr = array(
            'on'        => esc_html__( 'Yes', 'busyness' ),
            'off'       => esc_html__( 'No', 'busyness' )
        );
        return apply_filters( 'busyness_hide_options', $arr );
    }
endif;

