<?php
/**
* GridLane functions and definitions.
*
* @link https://developer.wordpress.org/themes/basics/theme-functions/
*
* @package GridLane WordPress Theme
* @copyright Copyright (C) 2022 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/

define( 'GRIDLANE_PROURL', 'https://themesdna.com/gridlane-pro-wordpress-theme/' );
define( 'GRIDLANE_CONTACTURL', 'https://themesdna.com/contact/' );
define( 'GRIDLANE_THEMEOPTIONSDIR', get_template_directory() . '/inc/admin' );

require_once( GRIDLANE_THEMEOPTIONSDIR . '/customizer.php' );

/**
 * This function return a value of given theme option name from database.
 *
 * @since 1.0.0
 *
 * @param string $option Theme option to return.
 * @return mixed The value of theme option.
 */
function gridlane_get_option($option) {
    $gridlane_options = get_option('gridlane_options');
    if ((is_array($gridlane_options)) && (array_key_exists($option, $gridlane_options))) {
        return $gridlane_options[$option];
    }
    else {
        return '';
    }
}

function gridlane_is_option_set($option) {
    $gridlane_options = get_option('gridlane_options');
    if ((is_array($gridlane_options)) && (array_key_exists($option, $gridlane_options))) {
        return true;
    } else {
        return false;
    }
}

if ( ! function_exists( 'gridlane_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function gridlane_setup() {
    
    global $wp_version;

    /*
     * Make theme available for translation.
     * Translations can be filed in the /languages/ directory.
     * If you're building a theme based on GridLane, use a find and replace
     * to change 'gridlane' to the name of your theme in all the template files.
     */
    load_theme_textdomain( 'gridlane', get_template_directory() . '/languages' );

    // Add default posts and comments RSS feed links to head.
    add_theme_support( 'automatic-feed-links' );

    /*
     * Let WordPress manage the document title.
     * By adding theme support, we declare that this theme does not use a
     * hard-coded <title> tag in the document head, and expect WordPress to
     * provide it for us.
     */
    add_theme_support( 'title-tag' );

    /*
     * Enable support for Post Thumbnails on posts and pages.
     *
     * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
     */
    add_theme_support( 'post-thumbnails' );

    if ( function_exists( 'add_image_size' ) ) {
        add_image_size( 'gridlane-1218w-autoh-image', 1218, 9999, false );
        add_image_size( 'gridlane-880w-autoh-image', 880, 9999, false );
        add_image_size( 'gridlane-360w-360h-image', 360, 360, true );
    }

    // This theme uses wp_nav_menu() in one location.
    register_nav_menus( array(
    'primary' => esc_html__('Primary Menu', 'gridlane'),
    'secondary' => esc_html__('Secondary Menu', 'gridlane')
    ) );

    /*
     * Switch default core markup for search form, comment form, and comments
     * to output valid HTML5.
     */
    $markup = array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'navigation-widgets' );
    add_theme_support( 'html5', $markup );

    /*
    * Enable support for Post Formats.
    *
    * See: https://codex.wordpress.org/Post_Formats
    */
    add_theme_support( 'post-formats', array(
        'aside', 'image', 'video', 'quote', 'link', 'gallery', 'status', 'audio', 'chat'
    ) );

    add_theme_support( 'custom-logo', array(
        'height'      => 37,
        'width'       => 280,
        'flex-height' => true,
        'flex-width'  => true,
        'header-text' => array( 'site-title', 'site-description' ),
    ) );

    // Support for Custom Header
    add_theme_support( 'custom-header', apply_filters( 'gridlane_custom_header_args', array(
    'default-image'          => '',
    'default-text-color'     => 'ffffff',
    'width'                  => 1920,
    'height'                 => 400,
    'flex-width'            => true,
    'flex-height'            => true,
    'wp-head-callback'       => 'gridlane_header_style',
    'uploads'                => true,
    ) ) );

    // Set up the WordPress core custom background feature.
    $background_args = array(
            'default-color'          => 'fafafa',
            'default-image'          => '',
            'default-repeat'         => 'repeat',
            'default-position-x'     => 'left',
            'default-position-y'     => 'top',
            'default-size'     => 'auto',
            'default-attachment'     => 'fixed',
            'wp-head-callback'       => '_custom_background_cb',
            'admin-head-callback'    => 'admin_head_callback_func',
            'admin-preview-callback' => 'admin_preview_callback_func',
    );
    add_theme_support( 'custom-background', apply_filters( 'gridlane_custom_background_args', $background_args) );
    
    // Support for Custom Editor Style
    add_editor_style( 'assets/css/editor-style.css' );

    // Add support for responsive embedded content.
    add_theme_support( 'responsive-embeds' );

    // Add support for Block Styles.
    add_theme_support( 'wp-block-styles' );

    if ( !(gridlane_get_option('enable_widgets_block_editor')) ) {
        remove_theme_support( 'widgets-block-editor' );
    }

}
endif;
add_action( 'after_setup_theme', 'gridlane_setup' );

require_once( trailingslashit( get_template_directory() ) . 'inc/functions/layout-functions.php' );
require_once( trailingslashit( get_template_directory() ) . 'inc/functions/widgets-init.php' );
require_once( trailingslashit( get_template_directory() ) . 'inc/functions/share-buttons.php' );
require_once( trailingslashit( get_template_directory() ) . 'inc/functions/social-buttons.php' );
require_once( trailingslashit( get_template_directory() ) . 'inc/functions/post-author-bio-functions.php' );
require_once( trailingslashit( get_template_directory() ) . 'inc/functions/postmeta-functions.php' );
require_once( trailingslashit( get_template_directory() ) . 'inc/functions/posts-navigation.php' );
require_once( trailingslashit( get_template_directory() ) . 'inc/functions/menu-functions.php' );
require_once( trailingslashit( get_template_directory() ) . 'inc/functions/header-functions.php' );
require_once( trailingslashit( get_template_directory() ) . 'inc/functions/css-functions.php' );
require_once( trailingslashit( get_template_directory() ) . 'inc/functions/other-functions.php' );
require_once( trailingslashit( get_template_directory() ) . 'inc/functions/action-hooks.php' );
require_once( trailingslashit( get_template_directory() ) . 'inc/functions/media-functions.php' );
require_once( trailingslashit( get_template_directory() ) . 'inc/functions/enqueue-scripts.php' );
require_once( trailingslashit( get_template_directory() ) . 'inc/functions/block-styles.php' );
require_once( trailingslashit( get_template_directory() ) . 'inc/admin/custom.php' );