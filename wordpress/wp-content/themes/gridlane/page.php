<?php
/**
* The template for displaying all pages.
*
* This is the template that displays all pages by default.
* Please note that this is the WordPress construct of pages
* and that other 'pages' on your WordPress site may use a
* different template.
*
* @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-page
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

<?php gridlane_before_main_content(); ?>

<div class='gridlane-posts-wrapper' id='gridlane-posts-wrapper'>

<?php while (have_posts()) : the_post();

    get_template_part( 'template-parts/content', 'page' );

    // If comments are open or we have at least one comment, load up the comment template
    if ( comments_open() || get_comments_number() ) :
            comments_template();
    endif;

endwhile; ?>

<div class="clear"></div>
</div><!--/#gridlane-posts-wrapper -->

<?php gridlane_after_main_content(); ?>

</div>
</div>
</div><!-- /#gridlane-main-wrapper -->

<?php get_sidebar(); ?>

<?php get_footer(); ?>