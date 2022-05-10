<?php
/**
* The template for displaying 404 pages (not found).
*
* @link https://codex.wordpress.org/Creating_an_Error_404_Page
*
* @package GridLane WordPress Theme
* @copyright Copyright (C) 2022 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/

get_header(); ?>

<div class='gridlane-main-wrapper gridlane-clearfix' id='gridlane-main-wrapper' itemscope='itemscope' itemtype='http://schema.org/Blog' role='main'>
<div class='theiaStickySidebar'>
<div class="gridlane-main-wrapper-inside gridlane-clearfix">

<div class='gridlane-posts-wrapper' id='gridlane-posts-wrapper'>

<div class='gridlane-posts gridlane-box'>
<div class="gridlane-box-inside">

<div class="gridlane-page-header-outside">
<header class="gridlane-page-header">
<div class="gridlane-page-header-inside">
    <?php if ( gridlane_get_option('error_404_heading') ) : ?>
    <h1 class="page-title"><?php echo esc_html( gridlane_get_option('error_404_heading') ); ?></h1>
    <?php else : ?>
    <h1 class="page-title"><?php esc_html_e( 'Oops! That page can not be found.', 'gridlane' ); ?></h1>
    <?php endif; ?>
</div>
</header><!-- .gridlane-page-header -->
</div>

<div class='gridlane-posts-content'>

    <?php if ( gridlane_get_option('error_404_message') ) : ?>
    <p><?php echo wp_kses_post( force_balance_tags( gridlane_get_option('error_404_message') ) ); ?></p>
    <?php else : ?>
    <p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'gridlane' ); ?></p>
    <?php endif; ?>

    <?php if ( !(gridlane_get_option('hide_404_search')) ) { ?><?php get_search_form(); ?><?php } ?>

</div>

</div>
</div>

</div><!--/#gridlane-posts-wrapper -->

<?php gridlane_404_widgets(); ?>

</div>
</div>
</div><!-- /#gridlane-main-wrapper -->

<?php get_footer(); ?>