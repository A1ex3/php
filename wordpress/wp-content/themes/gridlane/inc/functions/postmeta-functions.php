<?php
/**
* Post meta functions
*
* @package GridLane WordPress Theme
* @copyright Copyright (C) 2022 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/

if ( ! function_exists( 'gridlane_post_tags' ) ) :
/**
 * Prints HTML with meta information for the tags.
 */
function gridlane_post_tags() {
    if ( 'post' == get_post_type() ) {
        /* translators: used between list items, there is a space after the comma */
        $tags_list = get_the_tag_list( '', esc_html_x( ', ', 'list item separator', 'gridlane' ) );
        if ( $tags_list ) {
            /* translators: 1: list of tags. */
            printf( '<span class="gridlane-tags-links"><i class="fas fa-tags" aria-hidden="true"></i> ' . esc_html__( 'Tagged %1$s', 'gridlane' ) . '</span>', $tags_list ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
        }
    }
}
endif;


if ( ! function_exists( 'gridlane_grid_cats' ) ) :
function gridlane_grid_cats() {
    if ( 'post' == get_post_type() ) {
        /* translators: used between list items, there is a space */
        $categories_list = get_the_category_list( esc_html__( '&nbsp;', 'gridlane' ) );
        if ( $categories_list ) {
            /* translators: 1: list of categories. */
            printf( '<div class="gridlane-grid-post-categories">' . __( '<span class="gridlane-sr-only">Posted in </span>%1$s', 'gridlane' ) . '</div>', $categories_list ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
        }
    }
}
endif;


if ( ! function_exists( 'gridlane_grid_postmeta' ) ) :
function gridlane_grid_postmeta() { ?>
    <?php global $post; ?>
    <?php if ( gridlane_get_option('show_post_author_home') || !(gridlane_get_option('hide_posted_date_home')) || gridlane_get_option('show_comments_link_home') ) { ?>
    <div class="gridlane-grid-post-footer gridlane-grid-post-block">
    <div class="gridlane-grid-post-footer-inside">
    <?php if ( gridlane_get_option('show_post_author_home') ) { ?><span class="gridlane-grid-post-author gridlane-grid-post-meta"><a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>"><?php echo esc_html( get_the_author() ); ?></a></span><?php } ?>
    <?php if ( !(gridlane_get_option('hide_posted_date_home')) ) { ?><span class="gridlane-grid-post-date gridlane-grid-post-meta"><?php echo esc_html( get_the_date() ); ?></span><?php } ?>
    <?php if ( gridlane_get_option('show_comments_link_home') ) { ?><?php if ( ! post_password_required() && ( comments_open() || get_comments_number() ) ) { ?>
    <span class="gridlane-grid-post-comment gridlane-grid-post-meta"><?php comments_popup_link( sprintf( wp_kses( /* translators: %s: post title */ __( '0 Comment<span class="gridlane-sr-only"> on %s</span>', 'gridlane' ), array( 'span' => array( 'class' => array(), ), ) ), wp_kses_post( get_the_title() ) ) ); ?></span>
    <?php } ?><?php } ?>
    </div>
    </div>
    <?php } ?>
<?php }
endif;


if ( ! function_exists( 'gridlane_nongrid_postmeta' ) ) :
function gridlane_nongrid_postmeta() { ?>
    <?php global $post; ?>
    <?php if ( gridlane_get_option('show_post_author_home') || !(gridlane_get_option('hide_posted_date_home')) || gridlane_get_option('show_comments_link_home') || !(gridlane_get_option('hide_post_categories_home')) ) { ?>
    <div class="gridlane-entry-meta-single">
    <?php if ( gridlane_get_option('show_post_author_home') ) { ?><span class="gridlane-entry-meta-single-author"><i class="far fa-user-circle" aria-hidden="true"></i>&nbsp;<span class="author vcard" itemscope="itemscope" itemtype="http://schema.org/Person" itemprop="author"><a class="url fn n" href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>"><?php echo esc_html( get_the_author() ); ?></a></span></span><?php } ?>
    <?php if ( !(gridlane_get_option('hide_posted_date_home')) ) { ?><span class="gridlane-entry-meta-single-date"><i class="far fa-clock" aria-hidden="true"></i>&nbsp;<?php echo esc_html( get_the_date() ); ?></span><?php } ?>
    <?php if ( gridlane_get_option('show_comments_link_home') ) { ?><?php if ( ! post_password_required() && ( comments_open() || get_comments_number() ) ) { ?>
    <span class="gridlane-entry-meta-single-comments"><i class="far fa-comments" aria-hidden="true"></i>&nbsp;<?php comments_popup_link( sprintf( wp_kses( /* translators: %s: post title */ __( 'Leave a Comment<span class="gridlane-sr-only"> on %s</span>', 'gridlane' ), array( 'span' => array( 'class' => array(), ), ) ), wp_kses_post( get_the_title() ) ) ); ?></span>
    <?php } ?><?php } ?>
    <?php if ( !(gridlane_get_option('hide_post_categories_home')) ) { ?><?php gridlane_single_cats(); ?><?php } ?>
    </div>
    <?php } ?>
<?php }
endif;


if ( ! function_exists( 'gridlane_single_cats' ) ) :
function gridlane_single_cats() {
    if ( 'post' == get_post_type() ) {
        /* translators: used between list items, there is a space */
        $categories_list = get_the_category_list( esc_html__( ', ', 'gridlane' ) );
        if ( $categories_list ) {
            /* translators: 1: list of categories. */
            printf( '<span class="gridlane-entry-meta-single-cats"><i class="far fa-folder-open" aria-hidden="true"></i>&nbsp;' . __( '<span class="gridlane-sr-only">Posted in </span>%1$s', 'gridlane' ) . '</span>', $categories_list ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
        }
    }
}
endif;


if ( ! function_exists( 'gridlane_single_postmeta' ) ) :
function gridlane_single_postmeta() { ?>
    <?php global $post; ?>
    <?php if ( !(gridlane_get_option('hide_post_author')) || !(gridlane_get_option('hide_posted_date')) || !(gridlane_get_option('hide_comments_link')) || !(gridlane_get_option('hide_post_categories')) || gridlane_get_option('show_post_edit') ) { ?>
    <div class="gridlane-entry-meta-single">
    <?php if ( !(gridlane_get_option('hide_post_author')) ) { ?><span class="gridlane-entry-meta-single-author"><i class="far fa-user-circle" aria-hidden="true"></i>&nbsp;<span class="author vcard" itemscope="itemscope" itemtype="http://schema.org/Person" itemprop="author"><a class="url fn n" href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>"><?php echo esc_html( get_the_author() ); ?></a></span></span><?php } ?>
    <?php if ( !(gridlane_get_option('hide_posted_date')) ) { ?><span class="gridlane-entry-meta-single-date"><i class="far fa-clock" aria-hidden="true"></i>&nbsp;<?php echo esc_html( get_the_date() ); ?></span><?php } ?>
    <?php if ( !(gridlane_get_option('hide_comments_link')) ) { ?><?php if ( ! post_password_required() && ( comments_open() || get_comments_number() ) ) { ?>
    <span class="gridlane-entry-meta-single-comments"><i class="far fa-comments" aria-hidden="true"></i>&nbsp;<?php comments_popup_link( sprintf( wp_kses( /* translators: %s: post title */ __( 'Leave a Comment<span class="gridlane-sr-only"> on %s</span>', 'gridlane' ), array( 'span' => array( 'class' => array(), ), ) ), wp_kses_post( get_the_title() ) ) ); ?></span>
    <?php } ?><?php } ?>
    <?php if ( !(gridlane_get_option('hide_post_categories')) ) { ?><?php gridlane_single_cats(); ?><?php } ?>
    <?php if ( gridlane_get_option('show_post_edit') ) { ?><?php edit_post_link( sprintf( wp_kses( /* translators: %s: Name of current post. Only visible to screen readers */ __( 'Edit<span class="gridlane-sr-only"> %s</span>', 'gridlane' ), array( 'span' => array( 'class' => array(), ), ) ), wp_kses_post( get_the_title() ) ), '<span class="edit-link">&nbsp;&nbsp;<i class="far fa-edit" aria-hidden="true"></i> ', '</span>' ); ?><?php } ?>
    </div>
    <?php } ?>
<?php }
endif;


if ( ! function_exists( 'gridlane_page_postmeta' ) ) :
function gridlane_page_postmeta() { ?>
    <?php global $post; ?>
    <?php if ( !(gridlane_get_option('hide_page_author')) || !(gridlane_get_option('hide_page_date')) || !(gridlane_get_option('hide_page_comments')) ) { ?>
    <div class="gridlane-entry-meta-single">
    <?php if ( !(gridlane_get_option('hide_page_author')) ) { ?><span class="gridlane-entry-meta-single-author"><i class="far fa-user-circle" aria-hidden="true"></i>&nbsp;<span class="author vcard" itemscope="itemscope" itemtype="http://schema.org/Person" itemprop="author"><a class="url fn n" href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>"><?php echo esc_html( get_the_author() ); ?></a></span></span><?php } ?>
    <?php if ( !(gridlane_get_option('hide_page_date')) ) { ?><span class="gridlane-entry-meta-single-date"><i class="far fa-clock" aria-hidden="true"></i>&nbsp;<?php echo esc_html( get_the_date() ); ?></span><?php } ?>
    <?php if ( !(gridlane_get_option('hide_page_comments')) ) { ?><?php if ( ! post_password_required() && ( comments_open() || get_comments_number() ) ) { ?>
    <span class="gridlane-entry-meta-single-comments"><i class="far fa-comments" aria-hidden="true"></i>&nbsp;<?php comments_popup_link( sprintf( wp_kses( /* translators: %s: post title */ __( 'Leave a Comment<span class="gridlane-sr-only"> on %s</span>', 'gridlane' ), array( 'span' => array( 'class' => array(), ), ) ), wp_kses_post( get_the_title() ) ) ); ?></span>
    <?php } ?><?php } ?>
    </div>
    <?php } ?>
<?php }
endif;