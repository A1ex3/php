<?php
/**
* Media functions
*
* @package GridLane WordPress Theme
* @copyright Copyright (C) 2022 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/

function gridlane_media_content_grid() {
    global $post; ?>
    <?php if ( !(gridlane_get_option('hide_thumbnail_home')) ) { ?>
    <?php if ( has_post_thumbnail($post->ID) ) { ?>
    <div class="gridlane-grid-post-thumbnail gridlane-grid-post-block">
        <?php if ( gridlane_get_option('thumbnail_link_home') == 'no' ) { ?>
            <?php the_post_thumbnail('gridlane-360w-360h-image', array('class' => 'gridlane-grid-post-thumbnail-img', 'title' => the_title_attribute('echo=0'))); ?>
        <?php } else { ?>
            <a href="<?php echo esc_url( get_permalink() ); ?>" class="gridlane-grid-post-thumbnail-link" title="<?php /* translators: %s: post title. */ echo esc_attr( sprintf( __( 'Permanent Link to %s', 'gridlane' ), the_title_attribute( 'echo=0' ) ) ); ?>"><?php the_post_thumbnail('gridlane-360w-360h-image', array('class' => 'gridlane-grid-post-thumbnail-img', 'title' => the_title_attribute('echo=0'))); ?></a>
        <?php } ?>

        <?php if ( !(gridlane_get_option('hide_post_categories_home')) && has_category() ) { ?>
            <?php gridlane_grid_cats(); ?>
        <?php } ?>

        <?php if ( !(gridlane_get_option('hide_share_buttons_home')) ) { ?>
            <?php echo wp_kses_post( force_balance_tags( gridlane_grid_sharing_buttons() ) ); ?>
        <?php } ?>
    </div>
    <?php } else { ?>
    <?php if ( !(gridlane_get_option('hide_default_thumbnail')) ) { ?>
    <div class="gridlane-grid-post-thumbnail gridlane-grid-post-thumbnail-default gridlane-grid-post-block">
        <?php if ( gridlane_get_option('thumbnail_link_home') == 'no' ) { ?>
            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/no-image-360-360.jpg' ); ?>" class="gridlane-grid-post-thumbnail-img"/>
        <?php } else { ?>
            <a href="<?php echo esc_url( get_permalink() ); ?>" class="gridlane-grid-post-thumbnail-link" title="<?php /* translators: %s: post title. */ echo esc_attr( sprintf( __( 'Permanent Link to %s', 'gridlane' ), the_title_attribute( 'echo=0' ) ) ); ?>"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/no-image-360-360.jpg' ); ?>" class="gridlane-grid-post-thumbnail-img"/></a>
        <?php } ?>

        <?php if ( !(gridlane_get_option('hide_post_categories_home')) && has_category() ) { ?>
            <?php gridlane_grid_cats(); ?>
        <?php } ?>

        <?php if ( !(gridlane_get_option('hide_share_buttons_home')) ) { ?>
            <?php echo wp_kses_post( force_balance_tags( gridlane_grid_sharing_buttons() ) ); ?>
        <?php } ?>
    </div>
    <?php } ?>
    <?php } ?>
    <?php } ?>
<?php }

function gridlane_media_content_single() {
    global $post;
    if ( has_post_thumbnail($post->ID) ) {
        if ( !(gridlane_get_option('hide_thumbnail')) ) {
            if ( gridlane_get_option('thumbnail_link') == 'no' ) { ?>
                <div class="gridlane-post-thumbnail-single">
                <?php
                if ( is_page_template( array( 'template-full-width-post.php' ) ) ) {
                    the_post_thumbnail('gridlane-1218w-autoh-image', array('class' => 'gridlane-post-thumbnail-single-img', 'title' => the_title_attribute('echo=0')));
                } else {
                    the_post_thumbnail('gridlane-880w-autoh-image', array('class' => 'gridlane-post-thumbnail-single-img', 'title' => the_title_attribute('echo=0')));
                }
                ?>
                </div>
            <?php } else { ?>
                <div class="gridlane-post-thumbnail-single">
                <?php if ( is_page_template( array( 'template-full-width-post.php' ) ) ) { ?>
                    <a href="<?php echo esc_url( get_permalink() ); ?>" title="<?php /* translators: %s: post title. */ echo esc_attr( sprintf( __( 'Permanent Link to %s', 'gridlane' ), the_title_attribute( 'echo=0' ) ) ); ?>" class="gridlane-post-thumbnail-single-link"><?php the_post_thumbnail('gridlane-1218w-autoh-image', array('class' => 'gridlane-post-thumbnail-single-img', 'title' => the_title_attribute('echo=0'))); ?></a>
                <?php } else { ?>
                    <a href="<?php echo esc_url( get_permalink() ); ?>" title="<?php /* translators: %s: post title. */ echo esc_attr( sprintf( __( 'Permanent Link to %s', 'gridlane' ), the_title_attribute( 'echo=0' ) ) ); ?>" class="gridlane-post-thumbnail-single-link"><?php the_post_thumbnail('gridlane-880w-autoh-image', array('class' => 'gridlane-post-thumbnail-single-img', 'title' => the_title_attribute('echo=0'))); ?></a>
                <?php } ?>
                </div>
    <?php   }
        }
    }
}

function gridlane_media_content_single_location() {
    global $post;
    if( gridlane_get_option('featured_media_under_post_title') ) {
        add_action('gridlane_after_single_post_title', 'gridlane_media_content_single', 10 );
    } else {
        add_action('gridlane_before_single_post_title', 'gridlane_media_content_single', 10 );
    }
}
add_action('template_redirect', 'gridlane_media_content_single_location', 100 );

function gridlane_media_content_page() {
    global $post;
    if ( has_post_thumbnail($post->ID) ) {
        if ( !(gridlane_get_option('hide_page_thumbnail')) ) {
            if ( gridlane_get_option('thumbnail_link_page') == 'no' ) { ?>
                <div class="gridlane-post-thumbnail-single">
                <?php
                if ( is_page_template( array( 'template-full-width-page.php' ) ) ) {
                    the_post_thumbnail('gridlane-1218w-autoh-image', array('class' => 'gridlane-post-thumbnail-single-img', 'title' => the_title_attribute('echo=0')));
                } else {
                    the_post_thumbnail('gridlane-880w-autoh-image', array('class' => 'gridlane-post-thumbnail-single-img', 'title' => the_title_attribute('echo=0')));
                }
                ?>
                </div>
            <?php } else { ?>
                <div class="gridlane-post-thumbnail-single">
                <?php if ( is_page_template( array( 'template-full-width-page.php' ) ) ) { ?>
                    <a href="<?php echo esc_url( get_permalink() ); ?>" title="<?php /* translators: %s: post title. */ echo esc_attr( sprintf( __( 'Permanent Link to %s', 'gridlane' ), the_title_attribute( 'echo=0' ) ) ); ?>" class="gridlane-post-thumbnail-single-link"><?php the_post_thumbnail('gridlane-1218w-autoh-image', array('class' => 'gridlane-post-thumbnail-single-img', 'title' => the_title_attribute('echo=0'))); ?></a>
                <?php } else { ?>
                    <a href="<?php echo esc_url( get_permalink() ); ?>" title="<?php /* translators: %s: post title. */ echo esc_attr( sprintf( __( 'Permanent Link to %s', 'gridlane' ), the_title_attribute( 'echo=0' ) ) ); ?>" class="gridlane-post-thumbnail-single-link"><?php the_post_thumbnail('gridlane-880w-autoh-image', array('class' => 'gridlane-post-thumbnail-single-img', 'title' => the_title_attribute('echo=0'))); ?></a>
                <?php } ?>
                </div>
    <?php   }
        }
    }
}

function gridlane_media_content_page_location() {
    global $post;
    if( gridlane_get_option('featured_media_under_page_title') ) {
        add_action('gridlane_after_single_page_title', 'gridlane_media_content_page', 10 );
    } else {
        add_action('gridlane_before_single_page_title', 'gridlane_media_content_page', 10 );
    }
}
add_action('template_redirect', 'gridlane_media_content_page_location', 110 );

function gridlane_media_content_nongrid() {
    global $post;
    if ( has_post_thumbnail($post->ID) ) {
        if ( !(gridlane_get_option('hide_thumbnail_home')) ) {
            if ( gridlane_get_option('thumbnail_link_home') == 'no' ) { ?>
                <div class="gridlane-post-thumbnail-single">
                <?php
                if ( is_page_template( array( 'template-full-width-post.php' ) ) ) {
                    the_post_thumbnail('gridlane-1218w-autoh-image', array('class' => 'gridlane-post-thumbnail-single-img', 'title' => the_title_attribute('echo=0')));
                } else {
                    the_post_thumbnail('gridlane-880w-autoh-image', array('class' => 'gridlane-post-thumbnail-single-img', 'title' => the_title_attribute('echo=0')));
                }
                ?>
                </div>
            <?php } else { ?>
                <div class="gridlane-post-thumbnail-single">
                <?php if ( is_page_template( array( 'template-full-width-post.php' ) ) ) { ?>
                    <a href="<?php echo esc_url( get_permalink() ); ?>" title="<?php /* translators: %s: post title. */ echo esc_attr( sprintf( __( 'Permanent Link to %s', 'gridlane' ), the_title_attribute( 'echo=0' ) ) ); ?>" class="gridlane-post-thumbnail-single-link"><?php the_post_thumbnail('gridlane-1218w-autoh-image', array('class' => 'gridlane-post-thumbnail-single-img', 'title' => the_title_attribute('echo=0'))); ?></a>
                <?php } else { ?>
                    <a href="<?php echo esc_url( get_permalink() ); ?>" title="<?php /* translators: %s: post title. */ echo esc_attr( sprintf( __( 'Permanent Link to %s', 'gridlane' ), the_title_attribute( 'echo=0' ) ) ); ?>" class="gridlane-post-thumbnail-single-link"><?php the_post_thumbnail('gridlane-880w-autoh-image', array('class' => 'gridlane-post-thumbnail-single-img', 'title' => the_title_attribute('echo=0'))); ?></a>
                <?php } ?>
                </div>
    <?php   }
        }
    }
}

function gridlane_media_content_nongrid_location() {
    if( gridlane_get_option('featured_nongrid_media_under_post_title') ) {
        add_action('gridlane_after_nongrid_post_title', 'gridlane_media_content_nongrid', 10 );
    } else {
        add_action('gridlane_before_nongrid_post_title', 'gridlane_media_content_nongrid', 10 );
    }
}
add_action('template_redirect', 'gridlane_media_content_nongrid_location', 120 );