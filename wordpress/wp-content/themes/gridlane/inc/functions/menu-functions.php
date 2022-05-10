<?php
/**
* Menu Functions
*
* @package GridLane WordPress Theme
* @copyright Copyright (C) 2022 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/

// Get our wp_nav_menu() fallback, wp_page_menu(), to show a "Home" link as the first item
function gridlane_page_menu_args( $args ) {
    $args['show_home'] = true;
    return $args;
}
add_filter( 'wp_page_menu_args', 'gridlane_page_menu_args' );

function gridlane_primary_menu_text() {
   $menu_text = esc_html__( 'Menu', 'gridlane' );
    if ( gridlane_get_option('primary_menu_text') ) {
        $menu_text = gridlane_get_option('primary_menu_text');
    }
   return apply_filters( 'gridlane_primary_menu_text', $menu_text );
}

function gridlane_secondary_menu_text() {
   $menu_text = esc_html__( 'Menu', 'gridlane' );
    if ( gridlane_get_option('secondary_menu_text') ) {
        $menu_text = gridlane_get_option('secondary_menu_text');
    }
   return apply_filters( 'gridlane_secondary_menu_text', $menu_text );
}

function gridlane_top_fallback_menu() {
   wp_page_menu( array(
        'sort_column'  => 'menu_order, post_title',
        'menu_id'      => 'gridlane-menu-secondary-navigation',
        'menu_class'   => 'gridlane-secondary-nav-menu gridlane-menu-secondary',
        'container'    => 'ul',
        'echo'         => true,
        'link_before'  => '',
        'link_after'   => '',
        'before'       => '',
        'after'        => '',
        'item_spacing' => 'discard',
        'walker'       => '',
    ) );
}

function gridlane_fallback_menu() {
   wp_page_menu( array(
        'sort_column'  => 'menu_order, post_title',
        'menu_id'      => 'gridlane-menu-primary-navigation',
        'menu_class'   => 'gridlane-primary-nav-menu gridlane-menu-primary',
        'container'    => 'ul',
        'echo'         => true,
        'link_before'  => '',
        'link_after'   => '',
        'before'       => '',
        'after'        => '',
        'item_spacing' => 'discard',
        'walker'       => '',
    ) );
}

function gridlane_secondary_menu_area() {
if ( gridlane_is_secondary_menu_active() ) { ?>
<div class="gridlane-container gridlane-secondary-menu-container gridlane-clearfix">
<div class="gridlane-secondary-menu-container-inside gridlane-clearfix">
<nav class="gridlane-nav-secondary" id="gridlane-secondary-navigation" itemscope="itemscope" itemtype="http://schema.org/SiteNavigationElement" role="navigation" aria-label="<?php esc_attr_e( 'Secondary Menu', 'gridlane' ); ?>">
<div class="gridlane-outer-wrapper">
<button class="gridlane-secondary-responsive-menu-icon" aria-controls="gridlane-menu-secondary-navigation" aria-expanded="false"><?php echo esc_html( gridlane_secondary_menu_text() ); ?></button>
<?php wp_nav_menu( array( 'theme_location' => 'secondary', 'menu_id' => 'gridlane-menu-secondary-navigation', 'menu_class' => 'gridlane-secondary-nav-menu gridlane-menu-secondary gridlane-clearfix', 'fallback_cb' => 'gridlane_top_fallback_menu', 'container' => '', ) ); ?>
</div>
</nav>
</div>
</div>
<?php }
}