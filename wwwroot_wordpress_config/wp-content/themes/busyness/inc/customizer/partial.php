<?php
/**
* Partial functions
*
* @package Busyness
*/


if ( ! function_exists( 'business_pro_slider_btn_label_partial' ) ) :
    // about title
    function business_pro_slider_btn_label_partial() {
        $options = busyness_get_theme_options();
        return esc_html( $options['slider_btn_label'] );
    }
endif;


if ( ! function_exists( 'busyness_about_btn_title_partial' ) ) :
    // about button Title
    function busyness_about_btn_title_partial() {
        $options = busyness_get_theme_options();
        return esc_html( $options['about_btn_title'] );
    }
endif;

if ( ! function_exists( 'busyness_service_title_partial' ) ) :
    // service title
    function busyness_service_title_partial() {
        $options = busyness_get_theme_options();
        return esc_html( $options['service_title'] );
    }
endif;

if ( ! function_exists( 'busyness_blog_title_partial' ) ) :
    // blog title
    function busyness_blog_title_partial() {
        $options = busyness_get_theme_options();
        return esc_html( $options['blog_title'] );
    }
endif;


if ( ! function_exists( 'busyness_blog_btn_title_partial' ) ) :
    // blog btn title
    function busyness_blog_btn_title_partial() {
        $options = busyness_get_theme_options();
        return esc_html( $options['blog_btn_title'] );
    }
endif;






