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

<article id="gridlane-nongrid-post-<?php the_ID(); ?>" <?php post_class('gridlane-post-singular gridlane-post-nongrid gridlane-box'); ?>>
<div class="gridlane-box-inside">

    <?php gridlane_before_nongrid_post_title(); ?>

    <?php if ( !(gridlane_get_option('hide_post_header_home')) ) { ?>
    <header class="entry-header">
    <div class="entry-header-inside gridlane-clearfix">
        <?php if ( !(gridlane_get_option('hide_post_title_home')) ) { ?>

        <?php if ( gridlane_get_option('remove_post_title_link_home') ) { ?>
            <?php the_title( '<h1 class="post-title entry-title">', '</h1>' ); ?>
        <?php } else { ?>
            <?php the_title( sprintf( '<h1 class="post-title entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>
        <?php } ?>

        <?php } ?>

        <?php gridlane_nongrid_postmeta(); ?>
    </div>
    </header><!-- .entry-header -->
    <?php } ?>

    <?php if ( !(gridlane_get_option('hide_share_buttons_home')) ) { ?>
        <?php echo wp_kses_post( force_balance_tags( gridlane_social_sharing_buttons() ) ); ?>
    <?php } ?>

    <?php gridlane_after_nongrid_post_title(); ?>

    <div class="entry-content gridlane-clearfix">
            <?php
            the_content( sprintf(
                wp_kses(
                    /* translators: %s: Name of current post. Only visible to screen readers */
                    __( 'Continue reading<span class="gridlane-sr-only"> "%s"</span> <span class="meta-nav">&rarr;</span>', 'gridlane' ),
                    array(
                        'span' => array(
                            'class' => array(),
                        ),
                    )
                ),
                wp_kses_post( get_the_title() )
            ) );

            wp_link_pages( array(
             'before'      => '<div class="page-links"><span class="page-links-title">' . esc_html__( 'Pages:', 'gridlane' ) . '</span>',
             'after'       => '</div>',
             'link_before' => '<span>',
             'link_after'  => '</span>',
             ) );
            ?>
    </div><!-- .entry-content -->

    <?php if ( !(gridlane_get_option('hide_post_tags_home')) ) { ?>
    <?php if ( has_tag() ) { ?>
    <footer class="entry-footer gridlane-entry-footer">
    <div class="gridlane-entry-footer-inside">
        <?php gridlane_post_tags(); ?>
    </div>
    </footer><!-- .entry-footer -->
    <?php } ?>
    <?php } ?>

</div>
</article>