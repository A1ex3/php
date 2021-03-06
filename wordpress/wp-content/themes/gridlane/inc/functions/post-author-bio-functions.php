<?php
/**
* Author bio box
*
* @package GridLane WordPress Theme
* @copyright Copyright (C) 2022 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/

function gridlane_add_author_bio_box() {
    $content='';
    if (is_single()) {
        $content .= '
            <div class="gridlane-author-bio">
            <div class="gridlane-author-bio-inside">
            <div class="gridlane-author-bio-top">
            <span class="gridlane-author-bio-gravatar">
                '. get_avatar( get_the_author_meta('email') , 80 ) .'
            </span>
            <div class="gridlane-author-bio-text">
                <div class="gridlane-author-bio-name">'.esc_html__( 'Author: ', 'gridlane' ).'<span>'. get_the_author_link() .'</span></div><div class="gridlane-author-bio-text-description">'. wp_kses_post( get_the_author_meta('description',get_query_var('author') ) ) .'</div>
            </div>
            </div>
            </div>
            </div>
        ';
    }
    return apply_filters( 'gridlane_add_author_bio_box', $content );
}