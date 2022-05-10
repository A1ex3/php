<?php
/**
* Template part for displaying posts.
*
* @link https://developer.wordpress.org/themes/basics/template-hierarchy/
*
* @package GridLane WordPress Theme
* @copyright Copyright (C) 2022 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/
?>

<?php $gridlane_grid_post_content = get_the_content(); ?>
<div id="gridlane-grid-post-<?php the_ID(); ?>" class="gridlane-grid-post gridlane-3-col gridlane-360w-360h-grid-thumbnail gridlane-square-grid-thumbnail">
<div class="gridlane-grid-post-inside">

    <?php gridlane_media_content_grid(); ?>

    <?php if ( !(gridlane_get_option('hide_post_title_home')) || !(gridlane_get_option('hide_post_snippet')) ) { ?>

    <div class="gridlane-grid-post-details gridlane-grid-post-block">
    <?php if ( !(gridlane_get_option('hide_post_title_home')) ) { ?>

    <?php if ( gridlane_get_option('remove_post_title_link_home') ) { ?>
        <?php the_title( '<h3 class="gridlane-grid-post-title">', '</h3>' ); ?>
    <?php } else { ?>
        <?php the_title( sprintf( '<h3 class="gridlane-grid-post-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h3>' ); ?>
    <?php } ?>

    <?php } ?>

    <?php if ( !(gridlane_get_option('hide_post_snippet')) ) { ?>
        <?php if ( !empty( $gridlane_grid_post_content ) ) { ?>
            <div class="gridlane-grid-post-snippet"><div class="gridlane-grid-post-snippet-inside"><?php the_excerpt(); ?></div></div>
        <?php } ?>
    <?php } ?>
    </div>

    <?php } ?>

    <?php gridlane_grid_postmeta(); ?>

</div>
</div>