<?php
/**
* Posts navigation functions
*
* @package GridLane WordPress Theme
* @copyright Copyright (C) 2022 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/

if ( ! function_exists( 'gridlane_wp_pagenavi' ) ) :
function gridlane_wp_pagenavi() {
    ?>
    <nav class="navigation posts-navigation gridlane-clearfix" role="navigation">
        <?php wp_pagenavi(); ?>
    </nav><!-- .navigation -->
    <?php
}
endif;

if ( ! function_exists( 'gridlane_posts_navigation' ) ) :
function gridlane_posts_navigation() {
    if ( !(gridlane_get_option('hide_posts_navigation')) ) {
        if ( function_exists( 'wp_pagenavi' ) ) {
            gridlane_wp_pagenavi();
        } else {
            if ( gridlane_get_option('posts_navigation_type') === 'normalnavi' ) {
                the_posts_navigation(array('prev_text' => esc_html__( 'Older posts', 'gridlane' ), 'next_text' => esc_html__( 'Newer posts', 'gridlane' )));
            } else {
                the_posts_pagination(array('mid_size' => 2, 'prev_text' => esc_html__( '&larr; Newer posts', 'gridlane' ), 'next_text' => esc_html__( 'Older posts &rarr;', 'gridlane' )));
            }
        }
    }
}
endif;

if ( ! function_exists( 'gridlane_post_navigation' ) ) :
function gridlane_post_navigation() {
    if ( !(gridlane_get_option('hide_post_navigation')) ) {
        the_post_navigation(array('prev_text' => esc_html__( '%title &rarr;', 'gridlane' ), 'next_text' => esc_html__( '&larr; %title', 'gridlane' )));
    }
}
endif;