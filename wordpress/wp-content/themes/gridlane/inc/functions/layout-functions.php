<?php
/**
* Layout Functions
*
* @package GridLane WordPress Theme
* @copyright Copyright (C) 2022 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/

function gridlane_hide_footer_widgets() {
    $hide_footer_widgets = FALSE;

    if ( gridlane_get_option('hide_footer_widgets') ) {
        $hide_footer_widgets = TRUE;
    }

    return apply_filters( 'gridlane_hide_footer_widgets', $hide_footer_widgets );
}

function gridlane_is_header_content_active() {
    $header_content_active = TRUE;

    if ( gridlane_get_option('hide_header_content') ) {
        $header_content_active = FALSE;
    }

    return apply_filters( 'gridlane_is_header_content_active', $header_content_active );
}

function gridlane_is_primary_menu_active() {
    $primary_menu_active = TRUE;

    if ( gridlane_get_option('disable_primary_menu') ) {
        $primary_menu_active = FALSE;
    }

    return apply_filters( 'gridlane_is_primary_menu_active', $primary_menu_active );
}

function gridlane_is_secondary_menu_active() {
    $secondary_menu_active = TRUE;

    if ( gridlane_get_option('disable_secondary_menu') ) {
        $secondary_menu_active = FALSE;
    }

    return apply_filters( 'gridlane_is_secondary_menu_active', $secondary_menu_active );
}

function gridlane_is_sticky_header_active() {
    $sticky_header_active = TRUE;

    if ( gridlane_get_option('disable_sticky_header') ) {
        $sticky_header_active = FALSE;
    }

    return apply_filters( 'gridlane_is_sticky_header_active', $sticky_header_active );
}

function gridlane_is_sticky_mobile_header_active() {
    $sticky_mobile_header_active = FALSE;

    if ( gridlane_get_option('enable_sticky_mobile_header') ) {
        $sticky_mobile_header_active = TRUE;
    }

    return apply_filters( 'gridlane_is_sticky_mobile_header_active', $sticky_mobile_header_active );
}

function gridlane_is_footer_social_buttons_active() {
    $footer_social_buttons_active = TRUE;

    if ( gridlane_get_option('hide_footer_social_buttons') ) {
        $footer_social_buttons_active = FALSE;
    }

    return apply_filters( 'gridlane_is_footer_social_buttons_active', $footer_social_buttons_active );
}

function gridlane_is_fitvids_active() {
    $fitvids_active = TRUE;

    if ( gridlane_get_option('disable_fitvids') ) {
        $fitvids_active = FALSE;
    }

    return apply_filters( 'gridlane_is_fitvids_active', $fitvids_active );
}

function gridlane_is_backtotop_active() {
    $backtotop_active = TRUE;

    if ( gridlane_get_option('disable_backtotop') ) {
        $backtotop_active = FALSE;
    }

    return apply_filters( 'gridlane_is_backtotop_active', $backtotop_active );
}

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function gridlane_content_width() {
    $content_width = 880;

    if ( is_page_template( array( 'template-full-width-page.php', 'template-full-width-post.php' ) ) ) {
        $content_width = 1218;
    }

    if ( is_404() ) {
        $content_width = 1218;
    }

    $GLOBALS['content_width'] = apply_filters( 'gridlane_content_width', $content_width ); /* phpcs:ignore WPThemeReview.CoreFunctionality.PrefixAllGlobals.NonPrefixedVariableFound */
}
add_action( 'template_redirect', 'gridlane_content_width', 0 );

function gridlane_post_summaries_style() {
   $summaries_style = 'grid';
    if ( gridlane_get_option('post_summaries_style') ) {
        $summaries_style = gridlane_get_option('post_summaries_style');
    }
   return apply_filters( 'gridlane_post_summaries_style', $summaries_style );
}