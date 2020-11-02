<?php
/**
 * Functions for users wanting to admin to premium
 *
 * @package Elation
 */

/**
 * Display the admin to Pro page & load styles.
 */
function elation_premium_admin_menu() {
    global $elation_admin_page;
    $elation_admin_page = add_theme_page( __( 'About Elation', 'elation' ), '<span class="premium-link">' . __( 'About Elation', 'elation' ) . '</span>', 'edit_theme_options', 'elation_info', 'elation_render_admin_page' );
}
add_action( 'admin_menu', 'elation_premium_admin_menu' );

/**
 * Enqueue admin stylesheet only on admin page.
 */
function elation_load_admin_page_scripts() {
    global $pagenow;
	if ( $pagenow == 'themes.php' ) {
		wp_enqueue_style( 'elation-upgrade-css', get_template_directory_uri() . '/inc/admin/css/upgrade-admin.css' );
	}
}
add_action( 'admin_enqueue_scripts', 'elation_load_admin_page_scripts' );

/**
 * Render the premium page to download premium admin plugin
 */
function elation_render_admin_page() {
	get_template_part( '/inc/admin/tpl/admin-page' );
}

/**
 * Function to copy Free settingss to Pro, or Pro to Child
 */
function elation_migrate_set_action() {
    if ( current_user_can( 'administrator' ) && isset( $_REQUEST['nonce_elation_migrate_set'] ) && wp_verify_nonce( $_REQUEST['nonce_elation_migrate_set'], 'nonce_elation_migrate_set_action' ) ) {
        if ( isset( $_REQUEST['copy_from'] ) && isset( $_REQUEST['copy_to'] ) ) {
            $from = sanitize_text_field( $_REQUEST['copy_from'] );
            $to = sanitize_text_field( $_REQUEST['copy_to'] );

            if ( $from && $to ) {
                $mods = get_option( 'theme_mods_' . $from ) ;
                update_option( 'theme_mods_' . $to, $mods );

                update_option( 'elation_mods_migrated_' . $to , 1 );

                $url = wp_unslash( admin_url( 'themes.php?page=elation_info' ) );
                $url = add_query_arg( array( 'from' => $from, 'to' => $to, 'copied' => 'success' ), $url );
                wp_redirect( $url );
                die();
            }
        }
    }	
}
add_action( 'admin_post', 'elation_migrate_set_action' );
