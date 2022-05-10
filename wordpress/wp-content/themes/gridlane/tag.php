<?php
/**
* The template for displaying tag archive pages.
*
* @link https://developer.wordpress.org/themes/basics/template-hierarchy/
*
* @package GridLane WordPress Theme
* @copyright Copyright (C) 2022 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/

get_header(); ?>

<div class="gridlane-main-wrapper gridlane-clearfix" id="gridlane-main-wrapper" itemscope="itemscope" itemtype="http://schema.org/Blog" role="main">
<div class="theiaStickySidebar">
<div class="gridlane-main-wrapper-inside gridlane-clearfix">

<?php gridlane_before_main_content(); ?>

<div class="gridlane-posts-wrapper" id="gridlane-posts-wrapper">

<?php if ( !(gridlane_get_option('hide_tags_title')) ) { ?>
<div class="gridlane-page-header-outside">
<header class="gridlane-page-header">
<div class="gridlane-page-header-inside">
<?php the_archive_title( '<h1 class="page-title">', '</h1>' ); ?>
<?php if ( !(gridlane_get_option('hide_tags_description')) ) { ?><?php the_archive_description( '<div class="taxonomy-description">', '</div>' ); ?><?php } ?>
</div>
</header>
</div>
<?php } ?>

<div class="gridlane-posts-content">

<?php if (have_posts()) : ?>

    <?php if ( 'grid' === gridlane_post_summaries_style() ) { ?>

    <div class="gridlane-posts gridlane-posts-grid">
    <?php $gridlane_post_counter=1; while (have_posts()) : the_post(); ?>

        <?php get_template_part( 'template-parts/content-grid' ); ?>

    <?php $gridlane_post_counter++; endwhile; ?>
    </div>

    <?php } else { ?>

    <?php while (have_posts()) : the_post(); ?>
        <?php get_template_part( 'template-parts/content-nongrid' ); ?>
    <?php endwhile; ?>

    <?php } ?>
    <div class="clear"></div>

    <?php gridlane_posts_navigation(); ?>

<?php else : ?>

  <?php get_template_part( 'template-parts/content', 'none' ); ?>

<?php endif; ?>

</div>

</div><!--/#gridlane-posts-wrapper -->

<?php gridlane_after_main_content(); ?>

</div>
</div>
</div><!-- /#gridlane-main-wrapper -->

<?php get_sidebar(); ?>

<?php get_footer(); ?>