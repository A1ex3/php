<?php
/**
* Enqueue scripts and styles
*
* @package GridLane WordPress Theme
* @copyright Copyright (C) 2022 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/

function gridlane_scripts() {
    wp_enqueue_style('gridlane-maincss', get_stylesheet_uri(), array(), NULL);
    wp_enqueue_style('fontawesome', get_template_directory_uri() . '/assets/css/all.min.css', array(), NULL );
    wp_enqueue_style('gridlane-webfont', '//fonts.googleapis.com/css?family=Poppins:400,400i,500,500i,700,700i&amp;display=swap', array(), NULL);

    $gridlane_fitvids_active = FALSE;
    if ( gridlane_is_fitvids_active() ) {
        $gridlane_fitvids_active = TRUE;
    }
    if ( $gridlane_fitvids_active ) {
        wp_enqueue_script('fitvids', get_template_directory_uri() .'/assets/js/jquery.fitvids.min.js', array( 'jquery' ), NULL, true);
    }

    $gridlane_backtotop_active = FALSE;
    if ( gridlane_is_backtotop_active() ) {
        $gridlane_backtotop_active = TRUE;
    }

    $gridlane_primary_menu_active = FALSE;
    if ( gridlane_is_primary_menu_active() ) {
        $gridlane_primary_menu_active = TRUE;
    }
    $gridlane_secondary_menu_active = FALSE;
    if ( gridlane_is_secondary_menu_active() ) {
        $gridlane_secondary_menu_active = TRUE;
    }

    $gridlane_sticky_header_active = FALSE;
    $gridlane_sticky_header_mobile_active = FALSE;
    if ( gridlane_is_sticky_header_active() ) {
        $gridlane_sticky_header_active = TRUE;
    }
    if ( gridlane_is_sticky_mobile_header_active() ) {
        $gridlane_sticky_header_mobile_active = TRUE;
    }

    $gridlane_sticky_sidebar_active = TRUE;
    if ( is_page_template( array( 'template-full-width-page.php', 'template-full-width-post.php' ) ) ) {
       $gridlane_sticky_sidebar_active = FALSE;
    }
    if ( is_404() ) {
        $gridlane_sticky_sidebar_active = FALSE;
    }
    if ( $gridlane_sticky_sidebar_active ) {
        wp_enqueue_script('ResizeSensor', get_template_directory_uri() .'/assets/js/ResizeSensor.min.js', array( 'jquery' ), NULL, true);
        wp_enqueue_script('theia-sticky-sidebar', get_template_directory_uri() .'/assets/js/theia-sticky-sidebar.min.js', array( 'jquery' ), NULL, true);
    }

    wp_enqueue_script('gridlane-navigation', get_template_directory_uri() . '/assets/js/navigation.js', array(), NULL, true );
    wp_enqueue_script('gridlane-skip-link-focus-fix', get_template_directory_uri() . '/assets/js/skip-link-focus-fix.js', array(), NULL, true );
    wp_enqueue_script('gridlane-customjs', get_template_directory_uri() .'/assets/js/custom.js', array( 'jquery', 'imagesloaded' ), NULL, true);

    wp_localize_script( 'gridlane-customjs', 'gridlane_ajax_object',
        array(
            'ajaxurl' => esc_url_raw( admin_url( 'admin-ajax.php' ) ),
            'primary_menu_active' => $gridlane_primary_menu_active,
            'secondary_menu_active' => $gridlane_secondary_menu_active,
            'sticky_header_active' => $gridlane_sticky_header_active,
            'sticky_header_mobile_active' => $gridlane_sticky_header_mobile_active,
            'sticky_sidebar_active' => $gridlane_sticky_sidebar_active,
            'fitvids_active' => $gridlane_fitvids_active,
            'backtotop_active' => $gridlane_backtotop_active,
        )
    );

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }

    wp_enqueue_script('gridlane-html5shiv-js', get_template_directory_uri() .'/assets/js/html5shiv.js', array('jquery'), NULL, true);

    wp_localize_script('gridlane-html5shiv-js','gridlane_custom_script_vars',array(
        'elements_name' => esc_html__('abbr article aside audio bdi canvas data datalist details dialog figcaption figure footer header hgroup main mark meter nav output picture progress section summary template time video', 'gridlane'),
    ));
}
add_action( 'wp_enqueue_scripts', 'gridlane_scripts' );

/**
 * Enqueue IE compatible scripts and styles.
 */
function gridlane_ie_scripts() {
    wp_enqueue_script( 'respond', get_template_directory_uri(). '/assets/js/respond.min.js', array(), NULL, false );
    wp_script_add_data( 'respond', 'conditional', 'lt IE 9' );
}
add_action( 'wp_enqueue_scripts', 'gridlane_ie_scripts' );

/**
 * Enqueue styles for the block-based editor.
 */
function gridlane_block_editor_styles() {
    wp_enqueue_style( 'gridlane-block-editor-style', get_template_directory_uri() . '/assets/css/editor-blocks.css', array(), NULL );
}
add_action( 'enqueue_block_editor_assets', 'gridlane_block_editor_styles' );

/**
 * Enqueue customizer styles.
 */
function gridlane_enqueue_customizer_styles() {
    wp_enqueue_style( 'gridlane-customizer-styles', get_template_directory_uri() . '/inc/admin/css/customizer-style.css', array(), NULL );
    wp_enqueue_style('fontawesome', get_template_directory_uri() . '/assets/css/all.min.css', array(), NULL );
}
add_action( 'customize_controls_enqueue_scripts', 'gridlane_enqueue_customizer_styles' );