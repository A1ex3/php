<?php
/**
* Template part for displaying single posts.
*
* @link https://developer.wordpress.org/themes/basics/template-hierarchy/
*
* @package GridLane WordPress Theme
* @copyright Copyright (C) 2022 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/
?>

<?php gridlane_before_single_post(); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class('gridlane-post-singular gridlane-box'); ?>>
<div class="gridlane-box-inside">

    <?php gridlane_before_single_post_title(); ?>

    <?php if ( !(gridlane_get_option('hide_post_header')) ) { ?>
    <header class="entry-header">
    <div class="entry-header-inside gridlane-clearfix">
        <?php if ( !(gridlane_get_option('hide_post_title')) ) { ?>

        <?php if ( gridlane_get_option('remove_post_title_link') ) { ?>
            <?php the_title( '<h1 class="post-title entry-title">', '</h1>' ); ?>
        <?php } else { ?>
            <?php the_title( sprintf( '<h1 class="post-title entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>
        <?php } ?>

        <?php } ?>

        <?php gridlane_single_postmeta(); ?>
    </div>
    </header><!-- .entry-header -->
    <?php } ?>

    <?php if ( !(gridlane_get_option('hide_share_buttons')) ) { ?>
        <?php echo wp_kses_post( force_balance_tags( gridlane_social_sharing_buttons() ) ); ?>
    <?php } ?>

    <?php gridlane_after_single_post_title(); ?>

    <div class="entry-content gridlane-clearfix">
            <?php
            gridlane_top_single_post_content();

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

            gridlane_bottom_single_post_content();
            ?>
    </div><!-- .entry-content -->

    <?php gridlane_after_single_post_content(); ?>

    <?php if ( !(gridlane_get_option('hide_author_bio_box')) ) { ?>
        <?php echo wp_kses_post( force_balance_tags( gridlane_add_author_bio_box() ) ); ?>
    <?php } ?>

    <?php if ( !(gridlane_get_option('hide_post_tags')) ) { ?>
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

<?php gridlane_after_single_post(); ?>