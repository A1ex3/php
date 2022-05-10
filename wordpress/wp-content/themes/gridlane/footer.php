<?php
/**
* The template for displaying the footer
*
* @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
*
* @package GridLane WordPress Theme
* @copyright Copyright (C) 2022 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/
?>

</div>

</div><!--/#gridlane-content-wrapper -->
</div><!--/#gridlane-wrapper -->

<?php gridlane_bottom_wide_widgets(); ?>

<?php gridlane_before_footer(); ?>

<?php if ( !(gridlane_hide_footer_widgets()) ) { ?>
<?php if ( is_active_sidebar( 'gridlane-footer-1' ) || is_active_sidebar( 'gridlane-footer-2' ) || is_active_sidebar( 'gridlane-footer-3' ) || is_active_sidebar( 'gridlane-footer-4' ) || is_active_sidebar( 'gridlane-footer-5' ) || is_active_sidebar( 'gridlane-top-footer' ) || is_active_sidebar( 'gridlane-bottom-footer' ) ) : ?>
<div class='gridlane-clearfix' id='gridlane-footer-blocks' itemscope='itemscope' itemtype='http://schema.org/WPFooter' role='contentinfo'>
<div class='gridlane-container gridlane-clearfix'>
<div class="gridlane-outer-wrapper">

<?php if ( is_active_sidebar( 'gridlane-top-footer' ) ) : ?>
<div class='gridlane-clearfix'>
<div class='gridlane-top-footer-block'>
<?php dynamic_sidebar( 'gridlane-top-footer' ); ?>
</div>
</div>
<?php endif; ?>

<?php if ( is_active_sidebar( 'gridlane-footer-1' ) || is_active_sidebar( 'gridlane-footer-2' ) || is_active_sidebar( 'gridlane-footer-3' ) || is_active_sidebar( 'gridlane-footer-4' ) || is_active_sidebar( 'gridlane-footer-5' ) ) : ?>
<div class='gridlane-footer-block-cols gridlane-clearfix'>

<div class="gridlane-footer-block-col gridlane-footer-5-col" id="gridlane-footer-block-1">
<?php dynamic_sidebar( 'gridlane-footer-1' ); ?>
</div>

<div class="gridlane-footer-block-col gridlane-footer-5-col" id="gridlane-footer-block-2">
<?php dynamic_sidebar( 'gridlane-footer-2' ); ?>
</div>

<div class="gridlane-footer-block-col gridlane-footer-5-col" id="gridlane-footer-block-3">
<?php dynamic_sidebar( 'gridlane-footer-3' ); ?>
</div>

<div class="gridlane-footer-block-col gridlane-footer-5-col" id="gridlane-footer-block-4">
<?php dynamic_sidebar( 'gridlane-footer-4' ); ?>
</div>

<div class="gridlane-footer-block-col gridlane-footer-5-col" id="gridlane-footer-block-5">
<?php dynamic_sidebar( 'gridlane-footer-5' ); ?>
</div>

</div>
<?php endif; ?>

<?php if ( is_active_sidebar( 'gridlane-bottom-footer' ) ) : ?>
<div class='gridlane-clearfix'>
<div class='gridlane-bottom-footer-block'>
<?php dynamic_sidebar( 'gridlane-bottom-footer' ); ?>
</div>
</div>
<?php endif; ?>

</div>
</div>
</div><!--/#gridlane-footer-blocks-->
<?php endif; ?>
<?php } ?>

<?php if ( gridlane_is_footer_social_buttons_active() ) { ?>
<?php gridlane_footer_social_buttons(); ?>
<?php } ?>

<div class='gridlane-clearfix' id='gridlane-copyright-area'>
<div class='gridlane-copyright-area-inside gridlane-container'>
<div class="gridlane-outer-wrapper">

<div class='gridlane-copyright-area-inside-content gridlane-clearfix'>
<?php if ( gridlane_get_option('footer_text') ) : ?>
  <p class='gridlane-copyright'><?php echo esc_html(gridlane_get_option('footer_text')); ?></p>
<?php else : ?>
  <p class='gridlane-copyright'><?php /* translators: %s: Year and site name. */ printf( esc_html__( 'Copyright &copy; %s', 'gridlane' ), esc_html(date_i18n(__('Y','gridlane'))) . ' ' . esc_html(get_bloginfo( 'name' ))  ); ?></p>
<?php endif; ?>
<p class='gridlane-credit'><a href="<?php echo esc_url( 'https://themesdna.com/' ); ?>"><?php /* translators: %s: Theme author. */ printf( esc_html__( 'Design by %s', 'gridlane' ), 'ThemesDNA.com' ); ?></a></p>
</div>

</div>
</div>
</div><!--/#gridlane-copyright-area -->

<?php gridlane_after_footer(); ?>

<?php if ( gridlane_is_backtotop_active() ) { ?><button class="gridlane-scroll-top" title="<?php esc_attr_e('Scroll to Top','gridlane'); ?>"><i class="fas fa-arrow-up" aria-hidden="true"></i><span class="gridlane-sr-only"><?php esc_html_e('Scroll to Top', 'gridlane'); ?></span></button><?php } ?>

<?php wp_footer(); ?>
</body>
</html>