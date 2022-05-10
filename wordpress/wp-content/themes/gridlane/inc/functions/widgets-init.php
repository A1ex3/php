<?php
/**
* Register widget area.
*
* @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
*
* @package GridLane WordPress Theme
* @copyright Copyright (C) 2022 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/

function gridlane_widgets_init() {

register_sidebar(array(
    'id' => 'gridlane-sidebar-one',
    'name' => esc_html__( 'Sidebar 1 Widgets', 'gridlane' ),
    'description' => esc_html__( 'This widget area is located on the left-hand side of your web page.', 'gridlane' ),
    'before_widget' => '<div id="%1$s" class="gridlane-side-widget widget gridlane-widget-box %2$s"><div class="gridlane-widget-box-inside">',
    'after_widget' => '</div></div>',
    'before_title' => '<div class="gridlane-widget-header"><h2 class="gridlane-widget-title"><span class="gridlane-widget-title-inside">',
    'after_title' => '</span></h2></div>'));

register_sidebar(array(
    'id' => 'gridlane-home-fullwidth-widgets',
    'name' => esc_html__( 'Top Full Width Widgets (Default HomePage)', 'gridlane' ),
    'description' => esc_html__( 'This full-width widget area is located after the header of your website. Widgets of this widget area are displayed on the default homepage of your website (when you are showing your latest posts on homepage).', 'gridlane' ),
    'before_widget' => '<div id="%1$s" class="gridlane-main-widget widget gridlane-widget-box %2$s"><div class="gridlane-widget-box-inside">',
    'after_widget' => '</div></div>',
    'before_title' => '<div class="gridlane-widget-header"><h2 class="gridlane-widget-title"><span class="gridlane-widget-title-inside">',
    'after_title' => '</span></h2></div>'));

register_sidebar(array(
    'id' => 'gridlane-fullwidth-widgets',
    'name' => esc_html__( 'Top Full Width Widgets (Everywhere)', 'gridlane' ),
    'description' => esc_html__( 'This full-width widget area is located after the header of your website. Widgets of this widget area are displayed on every page of your website.', 'gridlane' ),
    'before_widget' => '<div id="%1$s" class="gridlane-main-widget widget gridlane-widget-box %2$s"><div class="gridlane-widget-box-inside">',
    'after_widget' => '</div></div>',
    'before_title' => '<div class="gridlane-widget-header"><h2 class="gridlane-widget-title"><span class="gridlane-widget-title-inside">',
    'after_title' => '</span></h2></div>'));

register_sidebar(array(
    'id' => 'gridlane-home-top-widgets',
    'name' => esc_html__( 'Above Content Widgets (Default HomePage)', 'gridlane' ),
    'description' => esc_html__( 'This widget area is located at the top of the main content (above posts) of your website. Widgets of this widget area are displayed on the default homepage of your website (when you are showing your latest posts on homepage).', 'gridlane' ),
    'before_widget' => '<div id="%1$s" class="gridlane-main-widget widget gridlane-widget-box %2$s"><div class="gridlane-widget-box-inside">',
    'after_widget' => '</div></div>',
    'before_title' => '<div class="gridlane-widget-header"><h2 class="gridlane-widget-title"><span class="gridlane-widget-title-inside">',
    'after_title' => '</span></h2></div>'));

register_sidebar(array(
    'id' => 'gridlane-top-widgets',
    'name' => esc_html__( 'Above Content Widgets (Everywhere)', 'gridlane' ),
    'description' => esc_html__( 'This widget area is located at the top of the main content (above posts) of your website. Widgets of this widget area are displayed on every page of your website.', 'gridlane' ),
    'before_widget' => '<div id="%1$s" class="gridlane-main-widget widget gridlane-widget-box %2$s"><div class="gridlane-widget-box-inside">',
    'after_widget' => '</div></div>',
    'before_title' => '<div class="gridlane-widget-header"><h2 class="gridlane-widget-title"><span class="gridlane-widget-title-inside">',
    'after_title' => '</span></h2></div>'));

register_sidebar(array(
    'id' => 'gridlane-home-bottom-widgets',
    'name' => esc_html__( 'Below Content Widgets (Default HomePage)', 'gridlane' ),
    'description' => esc_html__( 'This widget area is located at the bottom of the main content (below posts) of your website. Widgets of this widget area are displayed on the default homepage of your website (when you are showing your latest posts on homepage).', 'gridlane' ),
    'before_widget' => '<div id="%1$s" class="gridlane-main-widget widget gridlane-widget-box %2$s"><div class="gridlane-widget-box-inside">',
    'after_widget' => '</div></div>',
    'before_title' => '<div class="gridlane-widget-header"><h2 class="gridlane-widget-title"><span class="gridlane-widget-title-inside">',
    'after_title' => '</span></h2></div>'));

register_sidebar(array(
    'id' => 'gridlane-bottom-widgets',
    'name' => esc_html__( 'Below Content Widgets (Everywhere)', 'gridlane' ),
    'description' => esc_html__( 'This widget area is located at the bottom of the main content (below posts) of your website. Widgets of this widget area are displayed on every page of your website.', 'gridlane' ),
    'before_widget' => '<div id="%1$s" class="gridlane-main-widget widget gridlane-widget-box %2$s"><div class="gridlane-widget-box-inside">',
    'after_widget' => '</div></div>',
    'before_title' => '<div class="gridlane-widget-header"><h2 class="gridlane-widget-title"><span class="gridlane-widget-title-inside">',
    'after_title' => '</span></h2></div>'));

register_sidebar(array(
    'id' => 'gridlane-home-fullwidth-bottom-widgets',
    'name' => esc_html__( 'Bottom Full Width Widgets (Default HomePage)', 'gridlane' ),
    'description' => esc_html__( 'This full-width widget area is located before the footer of your website. Widgets of this widget area are displayed on the default homepage of your website (when you are showing your latest posts on homepage).', 'gridlane' ),
    'before_widget' => '<div id="%1$s" class="gridlane-main-widget widget gridlane-widget-box %2$s"><div class="gridlane-widget-box-inside">',
    'after_widget' => '</div></div>',
    'before_title' => '<div class="gridlane-widget-header"><h2 class="gridlane-widget-title"><span class="gridlane-widget-title-inside">',
    'after_title' => '</span></h2></div>'));

register_sidebar(array(
    'id' => 'gridlane-fullwidth-bottom-widgets',
    'name' => esc_html__( 'Bottom Full Width Widgets (Everywhere)', 'gridlane' ),
    'description' => esc_html__( 'This full-width widget area is located before the footer of your website. Widgets of this widget area are displayed on every page of your website.', 'gridlane' ),
    'before_widget' => '<div id="%1$s" class="gridlane-main-widget widget gridlane-widget-box %2$s"><div class="gridlane-widget-box-inside">',
    'after_widget' => '</div></div>',
    'before_title' => '<div class="gridlane-widget-header"><h2 class="gridlane-widget-title"><span class="gridlane-widget-title-inside">',
    'after_title' => '</span></h2></div>'));

register_sidebar(array(
    'id' => 'gridlane-single-post-bottom-widgets',
    'name' => esc_html__( 'Single Post Bottom Widgets', 'gridlane' ),
    'description' => esc_html__( 'This widget area is located at the bottom of single post of any post type (except attachments and pages).', 'gridlane' ),
    'before_widget' => '<div id="%1$s" class="gridlane-main-widget widget gridlane-widget-box %2$s"><div class="gridlane-widget-box-inside">',
    'after_widget' => '</div></div>',
    'before_title' => '<div class="gridlane-widget-header"><h2 class="gridlane-widget-title"><span class="gridlane-widget-title-inside">',
    'after_title' => '</span></h2></div>'));

register_sidebar(array(
    'id' => 'gridlane-top-footer',
    'name' => esc_html__( 'Footer Top Widgets', 'gridlane' ),
    'description' => esc_html__( 'This widget area is located on the top of the footer of your website.', 'gridlane' ),
    'before_widget' => '<div id="%1$s" class="gridlane-footer-widget widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="gridlane-widget-title"><span class="gridlane-widget-title-inside">',
    'after_title' => '</span></h2>'));

register_sidebar(array(
    'id' => 'gridlane-footer-1',
    'name' => esc_html__( 'Footer 1 Widgets', 'gridlane' ),
    'description' => esc_html__( 'This widget area is the column 1 of the footer of your website.', 'gridlane' ),
    'before_widget' => '<div id="%1$s" class="gridlane-footer-widget widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="gridlane-widget-title"><span class="gridlane-widget-title-inside">',
    'after_title' => '</span></h2>'));

register_sidebar(array(
    'id' => 'gridlane-footer-2',
    'name' => esc_html__( 'Footer 2 Widgets', 'gridlane' ),
    'description' => esc_html__( 'This widget area is the column 2 of the footer of your website.', 'gridlane' ),
    'before_widget' => '<div id="%1$s" class="gridlane-footer-widget widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="gridlane-widget-title"><span class="gridlane-widget-title-inside">',
    'after_title' => '</span></h2>'));

register_sidebar(array(
    'id' => 'gridlane-footer-3',
    'name' => esc_html__( 'Footer 3 Widgets', 'gridlane' ),
    'description' => esc_html__( 'This widget area is the column 3 of the footer of your website.', 'gridlane' ),
    'before_widget' => '<div id="%1$s" class="gridlane-footer-widget widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="gridlane-widget-title"><span class="gridlane-widget-title-inside">',
    'after_title' => '</span></h2>'));

register_sidebar(array(
    'id' => 'gridlane-footer-4',
    'name' => esc_html__( 'Footer 4 Widgets', 'gridlane' ),
    'description' => esc_html__( 'This widget area is the column 4 of the footer of your website.', 'gridlane' ),
    'before_widget' => '<div id="%1$s" class="gridlane-footer-widget widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="gridlane-widget-title"><span class="gridlane-widget-title-inside">',
    'after_title' => '</span></h2>'));

register_sidebar(array(
    'id' => 'gridlane-footer-5',
    'name' => esc_html__( 'Footer 5 Widgets', 'gridlane' ),
    'description' => esc_html__( 'This widget area is the column 5 of the footer of your website.', 'gridlane' ),
    'before_widget' => '<div id="%1$s" class="gridlane-footer-widget widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="gridlane-widget-title"><span class="gridlane-widget-title-inside">',
    'after_title' => '</span></h2>'));

register_sidebar(array(
    'id' => 'gridlane-bottom-footer',
    'name' => esc_html__( 'Footer Bottom Widgets', 'gridlane' ),
    'description' => esc_html__( 'This widget area is located on the bottom of the footer of your website.', 'gridlane' ),
    'before_widget' => '<div id="%1$s" class="gridlane-footer-widget widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="gridlane-widget-title"><span class="gridlane-widget-title-inside">',
    'after_title' => '</span></h2>'));

register_sidebar(array(
    'id' => 'gridlane-404-widgets',
    'name' => esc_html__( '404 Page Widgets', 'gridlane' ),
    'description' => esc_html__( 'This widget area is located on the 404(not found) page of your website.', 'gridlane' ),
    'before_widget' => '<div id="%1$s" class="gridlane-main-widget widget gridlane-widget-box %2$s"><div class="gridlane-widget-box-inside">',
    'after_widget' => '</div></div>',
    'before_title' => '<div class="gridlane-widget-header"><h2 class="gridlane-widget-title"><span class="gridlane-widget-title-inside">',
    'after_title' => '</span></h2></div>'));

}
add_action( 'widgets_init', 'gridlane_widgets_init' );


function gridlane_sidebar_one_widgets() {
    dynamic_sidebar( 'gridlane-sidebar-one' );
}

function gridlane_top_wide_widgets() { ?>

<?php if ( is_active_sidebar( 'gridlane-home-fullwidth-widgets' ) || is_active_sidebar( 'gridlane-fullwidth-widgets' ) ) : ?>
<div class="gridlane-outer-wrapper">
<div class="gridlane-top-wrapper-outer gridlane-clearfix">
<div class="gridlane-featured-posts-area gridlane-top-wrapper gridlane-clearfix">
<?php if ( is_front_page() && is_home() && !is_paged() ) { ?>
<?php dynamic_sidebar( 'gridlane-home-fullwidth-widgets' ); ?>
<?php } ?>

<?php dynamic_sidebar( 'gridlane-fullwidth-widgets' ); ?>
</div>
</div>
</div>
<?php endif; ?>

<?php }


function gridlane_bottom_wide_widgets() { ?>

<?php if ( is_active_sidebar( 'gridlane-home-fullwidth-bottom-widgets' ) || is_active_sidebar( 'gridlane-fullwidth-bottom-widgets' ) ) : ?>
<div class="gridlane-outer-wrapper">
<div class="gridlane-bottom-wrapper-outer gridlane-clearfix">
<div class="gridlane-featured-posts-area gridlane-bottom-wrapper gridlane-clearfix">
<?php if ( is_front_page() && is_home() && !is_paged() ) { ?>
<?php dynamic_sidebar( 'gridlane-home-fullwidth-bottom-widgets' ); ?>
<?php } ?>

<?php dynamic_sidebar( 'gridlane-fullwidth-bottom-widgets' ); ?>
</div>
</div>
</div>
<?php endif; ?>

<?php }


function gridlane_top_widgets() { ?>

<?php if ( is_active_sidebar( 'gridlane-home-top-widgets' ) || is_active_sidebar( 'gridlane-top-widgets' ) ) : ?>
<div class="gridlane-featured-posts-area gridlane-featured-posts-area-top gridlane-clearfix">
<?php if ( is_front_page() && is_home() && !is_paged() ) { ?>
<?php dynamic_sidebar( 'gridlane-home-top-widgets' ); ?>
<?php } ?>

<?php dynamic_sidebar( 'gridlane-top-widgets' ); ?>
</div>
<?php endif; ?>

<?php }


function gridlane_bottom_widgets() { ?>

<?php if ( is_active_sidebar( 'gridlane-home-bottom-widgets' ) || is_active_sidebar( 'gridlane-bottom-widgets' ) ) : ?>
<div class='gridlane-featured-posts-area gridlane-featured-posts-area-bottom gridlane-clearfix'>
<?php if ( is_front_page() && is_home() && !is_paged() ) { ?>
<?php dynamic_sidebar( 'gridlane-home-bottom-widgets' ); ?>
<?php } ?>

<?php dynamic_sidebar( 'gridlane-bottom-widgets' ); ?>
</div>
<?php endif; ?>

<?php }


function gridlane_404_widgets() { ?>

<?php if ( is_active_sidebar( 'gridlane-404-widgets' ) ) : ?>
<div class="gridlane-featured-posts-area gridlane-featured-posts-area-top gridlane-clearfix">
<?php dynamic_sidebar( 'gridlane-404-widgets' ); ?>
</div>
<?php endif; ?>

<?php }


function gridlane_post_bottom_widgets() {
    if ( is_singular() ) {
        global $post;
        if ( is_active_sidebar( 'gridlane-single-post-bottom-widgets' ) ) : ?>
            <div class="gridlane-featured-posts-area gridlane-clearfix">
            <?php dynamic_sidebar( 'gridlane-single-post-bottom-widgets' ); ?>
            </div>
        <?php endif;
    }
}