<?php
/**
* Css Classes Functions
*
* @package GridLane WordPress Theme
* @copyright Copyright (C) 2022 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/

// Category ids in post class
function gridlane_category_id_class($classes) {
    global $post;
    foreach((get_the_category($post->ID)) as $category) {
        $classes[] = 'wpcat-' . $category->cat_ID . '-id';
    }
    return apply_filters( 'gridlane_category_id_class', $classes );
}
add_filter('post_class', 'gridlane_category_id_class');


// Adds custom classes to the array of body classes.
function gridlane_body_classes( $classes ) {
    // Adds a class of group-blog to blogs with more than 1 published author.
    if ( is_multi_author() ) {
        $classes[] = 'gridlane-group-blog';
    }

    $classes[] = 'gridlane-theme-is-active';

    if ( get_header_image() ) {
        $classes[] = 'gridlane-header-image-active';
    }

    if ( gridlane_get_option('header_image_cover') ) {
        $classes[] = 'gridlane-header-image-cover';
    }

    if ( has_custom_logo() ) {
        $classes[] = 'gridlane-custom-logo-active';
    }

    $classes[] = 'gridlane-layout-type-full';

    $classes[] = 'gridlane-masonry-inactive';

    if ( !(is_singular()) ) {
        if ( gridlane_get_option('featured_nongrid_media_under_post_title') ) {
            $classes[] = 'gridlane-nongrid-media-under-title';
        }
    }

    if( is_single() ) {
        if ( gridlane_get_option('featured_media_under_post_title') ) {
            $classes[] = 'gridlane-single-media-under-title';
        }
    }
    if( is_page() ) {
        if ( gridlane_get_option('featured_media_under_page_title') ) {
            $classes[] = 'gridlane-single-media-under-title';
        }
    }

    if ( is_page_template( array( 'template-full-width-page.php', 'template-full-width-post.php' ) ) ) {
       $classes[] = 'gridlane-layout-full-width';
    }

    if ( is_404() ) {
        $classes[] = 'gridlane-layout-full-width';
    }

    if ( !(gridlane_is_primary_menu_active()) ) {
        $classes[] = 'gridlane-header-full-active';
    } else {
        $classes[] = 'gridlane-header-menu-active';
    }

    if ( gridlane_get_option('hide_tagline') ) {
        $classes[] = 'gridlane-tagline-inactive';
    }

    if ( 'beside-title' === gridlane_get_option('logo_location') ) {
        $classes[] = 'gridlane-logo-beside-title';
    } elseif ( 'above-title' === gridlane_get_option('logo_location') ) {
        $classes[] = 'gridlane-logo-above-title';
    } else {
        $classes[] = 'gridlane-logo-above-title';
    }

    if ( gridlane_is_primary_menu_active() ) {
        $classes[] = 'gridlane-primary-menu-active';
    }
    $classes[] = 'gridlane-primary-mobile-menu-active';

    if ( gridlane_is_secondary_menu_active() ) {
        $classes[] = 'gridlane-secondary-menu-active';
    }
    $classes[] = 'gridlane-secondary-mobile-menu-active';
    if ( !(gridlane_get_option('no_center_secondary_menu')) ) {
        $classes[] = 'gridlane-secondary-menu-centered';
    }

    return apply_filters( 'gridlane_body_classes', $classes );
}
add_filter( 'body_class', 'gridlane_body_classes' );