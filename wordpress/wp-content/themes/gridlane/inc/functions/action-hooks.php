<?php
/**
* Custom Hooks
*
* @package GridLane WordPress Theme
* @copyright Copyright (C) 2022 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/

function gridlane_before_header() {
    do_action('gridlane_before_header');
}

function gridlane_after_header() {
    do_action('gridlane_after_header');
}

function gridlane_before_main_content() {
    do_action('gridlane_before_main_content');
}
add_action('gridlane_before_main_content', 'gridlane_top_widgets', 20 );

function gridlane_after_main_content() {
    do_action('gridlane_after_main_content');
}
add_action('gridlane_after_main_content', 'gridlane_bottom_widgets', 10 );

function gridlane_sidebar_one() {
    do_action('gridlane_sidebar_one');
}
add_action('gridlane_sidebar_one', 'gridlane_sidebar_one_widgets', 10 );

function gridlane_before_single_post() {
    do_action('gridlane_before_single_post');
}

function gridlane_before_single_post_title() {
    do_action('gridlane_before_single_post_title');
}

function gridlane_after_single_post_title() {
    do_action('gridlane_after_single_post_title');
}

function gridlane_top_single_post_content() {
    do_action('gridlane_top_single_post_content');
}

function gridlane_bottom_single_post_content() {
    do_action('gridlane_bottom_single_post_content');
}

function gridlane_after_single_post_content() {
    do_action('gridlane_after_single_post_content');
}

function gridlane_after_single_post() {
    do_action('gridlane_after_single_post');
}

function gridlane_before_single_page() {
    do_action('gridlane_before_single_page');
}

function gridlane_before_single_page_title() {
    do_action('gridlane_before_single_page_title');
}

function gridlane_after_single_page_title() {
    do_action('gridlane_after_single_page_title');
}

function gridlane_after_single_page_content() {
    do_action('gridlane_after_single_page_content');
}

function gridlane_after_single_page() {
    do_action('gridlane_after_single_page');
}

function gridlane_before_comments() {
    do_action('gridlane_before_comments');
}

function gridlane_after_comments() {
    do_action('gridlane_after_comments');
}

function gridlane_before_footer() {
    do_action('gridlane_before_footer');
}

function gridlane_after_footer() {
    do_action('gridlane_after_footer');
}

function gridlane_before_nongrid_post_title() {
    do_action('gridlane_before_nongrid_post_title');
}

function gridlane_after_nongrid_post_title() {
    do_action('gridlane_after_nongrid_post_title');
}

add_action('gridlane_before_footer', 'gridlane_secondary_menu_area', 50 );

if ( !(gridlane_get_option('enable_widgets_block_editor')) ) {
    // Disables the block editor from managing widgets in the Gutenberg plugin.
    add_filter( 'gutenberg_use_widgets_block_editor', '__return_false', 100 );

    // Disables the block editor from managing widgets.
    add_filter( 'use_widgets_block_editor', '__return_false' );
}

if ( ! function_exists( 'gridlane_remove_theme_support' ) ) :
function gridlane_remove_theme_support() {

    if ( gridlane_is_fitvids_active() ) {
        // Remove responsive embedded content support.
        remove_theme_support( 'responsive-embeds' );
    }

}
endif;
add_action( 'after_setup_theme', 'gridlane_remove_theme_support', 1000 );