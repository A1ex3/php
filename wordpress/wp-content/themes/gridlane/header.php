<?php
/**
* The header for GridLane theme.
*
* @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
*
* @package GridLane WordPress Theme
* @copyright Copyright (C) 2022 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="profile" href="http://gmpg.org/xfn/11">
<?php wp_head(); ?>
</head>

<body <?php body_class('gridlane-animated gridlane-fadein'); ?> id="gridlane-site-body" itemscope="itemscope" itemtype="http://schema.org/WebPage">
<?php wp_body_open(); ?>
<a class="skip-link screen-reader-text" href="#gridlane-content-wrapper"><?php esc_html_e( 'Skip to content', 'gridlane' ); ?></a>

<?php gridlane_before_header(); ?>

<?php gridlane_header_image(); ?>

<div class="gridlane-site-header gridlane-container" id="gridlane-header" itemscope="itemscope" itemtype="http://schema.org/WPHeader" role="banner">
<div class="gridlane-head-content gridlane-clearfix" id="gridlane-head-content">

<?php if ( gridlane_is_header_content_active() ) { ?>
<div class="gridlane-header-inside gridlane-clearfix">
<div class="gridlane-header-inside-content gridlane-clearfix">
<div class="gridlane-outer-wrapper">
<div class="gridlane-header-inside-container">

<div class="gridlane-logo">
<?php if ( has_custom_logo() ) : ?>
    <div class="site-branding site-branding-full">
    <div class="gridlane-custom-logo-image">
    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="gridlane-logo-img-link">
        <img src="<?php echo esc_url( gridlane_custom_logo() ); ?>" alt="" class="gridlane-logo-img"/>
    </a>
    </div>
    <div class="gridlane-custom-logo-info"><?php gridlane_site_title(); ?></div>
    </div>
<?php else: ?>
    <div class="site-branding">
      <?php gridlane_site_title(); ?>
    </div>
<?php endif; ?>
</div>

<?php if ( gridlane_is_primary_menu_active() ) { ?>
<div class="gridlane-header-menu">
<div class="gridlane-container gridlane-primary-menu-container gridlane-clearfix">
<div class="gridlane-primary-menu-container-inside gridlane-clearfix">
<nav class="gridlane-nav-primary" id="gridlane-primary-navigation" itemscope="itemscope" itemtype="http://schema.org/SiteNavigationElement" role="navigation" aria-label="<?php esc_attr_e( 'Primary Menu', 'gridlane' ); ?>">
<button class="gridlane-primary-responsive-menu-icon" aria-controls="gridlane-menu-primary-navigation" aria-expanded="false"><?php echo esc_html( gridlane_primary_menu_text() ); ?></button>
<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'gridlane-menu-primary-navigation', 'menu_class' => 'gridlane-primary-nav-menu gridlane-menu-primary gridlane-clearfix', 'fallback_cb' => 'gridlane_fallback_menu', 'container' => '', ) ); ?>
</nav>
</div>
</div>
</div>
<?php } ?>

</div>
</div>
</div>
</div>
<?php } else { ?>
<div class="gridlane-no-header-content">
  <?php gridlane_site_title(); ?>
</div>
<?php } ?>

</div><!--/#gridlane-head-content -->
</div><!--/#gridlane-header -->

<?php if ( gridlane_is_primary_menu_active() ) { ?>
<?php if ( !(gridlane_get_option('hide_header_search_button')) ) { ?>
<div id="gridlane-search-overlay-wrap" class="gridlane-search-overlay">
  <div class="gridlane-search-overlay-content">
    <?php get_search_form(); ?>
  </div>
  <button class="gridlane-search-closebtn" aria-label="<?php esc_attr_e( 'Close Search', 'gridlane' ); ?>" title="<?php esc_attr_e('Close Search','gridlane'); ?>">&#xD7;</button>
</div>
<?php } ?>
<?php } ?>

<?php gridlane_after_header(); ?>

<div id="gridlane-header-end"></div>

<?php gridlane_top_wide_widgets(); ?>

<div class="gridlane-outer-wrapper" id="gridlane-wrapper-outside">

<div class="gridlane-container gridlane-clearfix" id="gridlane-wrapper">
<div class="gridlane-content-wrapper gridlane-clearfix" id="gridlane-content-wrapper">