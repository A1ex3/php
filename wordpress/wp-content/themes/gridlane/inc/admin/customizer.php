<?php
/**
* GridLane Theme Customizer.
*
* @package GridLane WordPress Theme
* @copyright Copyright (C) 2022 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/

if ( ! class_exists( 'WP_Customize_Control' ) ) {return NULL;}

require_once( trailingslashit( get_template_directory() ) . 'inc/admin/classes/class-customize-static-text-control.php' ); /* phpcs:ignore WPThemeReview.CoreFunctionality.FileInclude.FileIncludeFound */
require_once( trailingslashit( get_template_directory() ) . 'inc/admin/classes/class-customize-button-control.php' ); /* phpcs:ignore WPThemeReview.CoreFunctionality.FileInclude.FileIncludeFound */
require_once( trailingslashit( get_template_directory() ) . 'inc/admin/classes/class-customize-submit-control.php' ); /* phpcs:ignore WPThemeReview.CoreFunctionality.FileInclude.FileIncludeFound */
require_once( trailingslashit( get_template_directory() ) . 'inc/admin/options/getting-started.php' ); /* phpcs:ignore WPThemeReview.CoreFunctionality.FileInclude.FileIncludeFound */
require_once( trailingslashit( get_template_directory() ) . 'inc/admin/options/menu-options.php' ); /* phpcs:ignore WPThemeReview.CoreFunctionality.FileInclude.FileIncludeFound */
require_once( trailingslashit( get_template_directory() ) . 'inc/admin/options/header-options.php' ); /* phpcs:ignore WPThemeReview.CoreFunctionality.FileInclude.FileIncludeFound */
require_once( trailingslashit( get_template_directory() ) . 'inc/admin/options/posts-summaries-options.php' ); /* phpcs:ignore WPThemeReview.CoreFunctionality.FileInclude.FileIncludeFound */
require_once( trailingslashit( get_template_directory() ) . 'inc/admin/options/singular-post-options.php' ); /* phpcs:ignore WPThemeReview.CoreFunctionality.FileInclude.FileIncludeFound */
require_once( trailingslashit( get_template_directory() ) . 'inc/admin/options/navigation-options.php' ); /* phpcs:ignore WPThemeReview.CoreFunctionality.FileInclude.FileIncludeFound */
require_once( trailingslashit( get_template_directory() ) . 'inc/admin/options/singular-page-options.php' ); /* phpcs:ignore WPThemeReview.CoreFunctionality.FileInclude.FileIncludeFound */
require_once( trailingslashit( get_template_directory() ) . 'inc/admin/options/social-profiles.php' ); /* phpcs:ignore WPThemeReview.CoreFunctionality.FileInclude.FileIncludeFound */
require_once( trailingslashit( get_template_directory() ) . 'inc/admin/options/share-buttons-options.php' ); /* phpcs:ignore WPThemeReview.CoreFunctionality.FileInclude.FileIncludeFound */
require_once( trailingslashit( get_template_directory() ) . 'inc/admin/options/footer-options.php' ); /* phpcs:ignore WPThemeReview.CoreFunctionality.FileInclude.FileIncludeFound */
require_once( trailingslashit( get_template_directory() ) . 'inc/admin/options/search-404-options.php' ); /* phpcs:ignore WPThemeReview.CoreFunctionality.FileInclude.FileIncludeFound */
require_once( trailingslashit( get_template_directory() ) . 'inc/admin/options/other-options.php' ); /* phpcs:ignore WPThemeReview.CoreFunctionality.FileInclude.FileIncludeFound */
require_once( trailingslashit( get_template_directory() ) . 'inc/admin/options/upgrade-to-pro.php' ); /* phpcs:ignore WPThemeReview.CoreFunctionality.FileInclude.FileIncludeFound */
require_once( trailingslashit( get_template_directory() ) . 'inc/admin/options/sanitize-callbacks.php' ); /* phpcs:ignore WPThemeReview.CoreFunctionality.FileInclude.FileIncludeFound */

function gridlane_register_theme_customizer( $wp_customize ) {

    if(method_exists('WP_Customize_Manager', 'add_panel')):
    $wp_customize->add_panel('gridlane_main_options_panel', array( 'title' => esc_html__('Theme Options', 'gridlane'), 'priority' => 10, ));
    endif;

    $wp_customize->get_section( 'title_tagline' )->panel = 'gridlane_main_options_panel';
    $wp_customize->get_section( 'title_tagline' )->priority = 20;
    $wp_customize->get_section( 'header_image' )->panel = 'gridlane_main_options_panel';
    $wp_customize->get_section( 'header_image' )->priority = 26;
    $wp_customize->get_section( 'background_image' )->panel = 'gridlane_main_options_panel';
    $wp_customize->get_section( 'background_image' )->priority = 27;
    $wp_customize->get_section( 'colors' )->panel = 'gridlane_main_options_panel';
    $wp_customize->get_section( 'colors' )->priority = 40;
      
    $wp_customize->get_setting( 'blogname' )->transport = 'postMessage';
    $wp_customize->get_setting( 'blogdescription' )->transport = 'postMessage';
    $wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
    $wp_customize->get_setting( 'background_color' )->transport = 'postMessage';
    $wp_customize->get_control( 'background_color' )->description = esc_html__('To change Background Color, need to remove background image first:- go to Appearance : Customize : Theme Options : Background Image', 'gridlane');

    if ( isset( $wp_customize->selective_refresh ) ) {
        $wp_customize->selective_refresh->add_partial( 'blogname', array(
            'selector'        => '.gridlane-site-title a',
            'render_callback' => 'gridlane_customize_partial_blogname',
        ) );
        $wp_customize->selective_refresh->add_partial( 'blogdescription', array(
            'selector'        => '.gridlane-site-description',
            'render_callback' => 'gridlane_customize_partial_blogdescription',
        ) );
    }

    gridlane_getting_started($wp_customize);
    gridlane_menu_options($wp_customize);
    gridlane_header_options($wp_customize);
    gridlane_posts_grid_options($wp_customize);
    gridlane_post_options($wp_customize);
    gridlane_navigation_options($wp_customize);
    gridlane_page_options($wp_customize);
    gridlane_social_profiles($wp_customize);
    gridlane_share_buttons_options($wp_customize);
    gridlane_footer_options($wp_customize);
    gridlane_search_404_options($wp_customize);
    gridlane_other_options($wp_customize);
    gridlane_upgrade_to_pro($wp_customize);

}

add_action( 'customize_register', 'gridlane_register_theme_customizer' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function gridlane_customize_partial_blogname() {
    bloginfo( 'name' );
}
/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function gridlane_customize_partial_blogdescription() {
    bloginfo( 'description' );
}

function gridlane_customizer_js_scripts() {
    wp_enqueue_script('gridlane-theme-customizer-js', get_template_directory_uri() . '/inc/admin/js/customizer.js', array( 'jquery', 'customize-preview' ), NULL, true);
}
add_action( 'customize_preview_init', 'gridlane_customizer_js_scripts' );