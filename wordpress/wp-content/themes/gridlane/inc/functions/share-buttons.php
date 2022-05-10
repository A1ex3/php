<?php
/**
* Post share buttons
*
* @package GridLane WordPress Theme
* @copyright Copyright (C) 2022 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/

function gridlane_share_text() {
    $sharetext = esc_html__( 'Share:', 'gridlane' );
    if ( gridlane_get_option('hide_share_text') ) {return;}
    if ( gridlane_get_option('share_text') ) {
        $sharetext = gridlane_get_option('share_text');
    }
    return apply_filters( 'gridlane_share_text', $sharetext );
}

function gridlane_social_sharing_buttons() {

        global $post;

        // Get current page URL 
        $posturl = rawurlencode(get_permalink($post->ID));

        // Get current page title
        $posttitle = rawurlencode(the_title_attribute('echo=0'));

        // Construct sharing URL without using any script
        $buffer_url = 'https://buffer.com/add?url='.$posturl.'&amp;text='.$posttitle;
        $twitter_url = 'https://twitter.com/intent/tweet?text='.$posttitle.'&amp;url='.$posturl;
        $facebook_url = 'https://www.facebook.com/sharer.php?u='.$posturl;
        $reddit_url = 'https://www.reddit.com/submit?url='.$posturl.'&amp;title='.$posttitle;
        $vk_url = 'https://vk.com/share.php?url='.$posturl.'&amp;title='.$posttitle;
        $digg_url = 'https://digg.com/submit?url='.$posturl.'&amp;title='.$posttitle;
        $linkedin_url = 'https://www.linkedin.com/shareArticle?mini=true&amp;title='.$posttitle.'&amp;url='.$posturl;
        $mix_url = 'https://mix.com/add?url='.$posturl;
        $google_url = 'https://plus.google.com/share?url='.$posturl;
        $delicious_url = 'http://del.icio.us/post?url='.$posturl.'&amp;title='.$posttitle;
        $line_url = 'https://social-plugins.line.me/lineit/share?url='.$posturl.'&amp;text='.$posttitle;
        $flipboard_url = 'https://share.flipboard.com/bookmarklet/popout?v=2&amp;title='.$posttitle.'&amp;url='.$posturl;
        $telegram_url = 'https://t.me/share/url?url='.$posturl.'&amp;text='.$posttitle;
        $skype_url = 'https://web.skype.com/share?url='.$posturl.'&amp;text='.$posttitle;
        $blogger_url = 'https://www.blogger.com/blog-this.g?u='.$posturl.'&amp;n='.$posttitle;
        $xing_url = 'https://www.xing.com/spi/shares/new?url='.$posturl;
        $whatsapp_url = 'https://wa.me/?text='.$posttitle.'%20'.$posturl;
        $tumblr_url = 'https://www.tumblr.com/share/link?url='.$posturl.'&amp;name='.$posttitle;
        $evernote_url = 'https://www.evernote.com/clip.action?url='.$posturl.'&amp;title='.$posttitle;
        $gmail_url = 'https://mail.google.com/mail/?view=cm&amp;su='.$posttitle.'&amp;body='.$posturl;
        $yahoomail_url = 'http://compose.mail.yahoo.com/?subject='.$posttitle.'&amp;body='.$posturl;
        $email_url = 'mailto:?subject='.$posttitle.'&amp;body=%20Check%20out%20this%20site%3A%20'.$posturl;
        $wordpress_url = 'https://wordpress.com/press-this.php?u='.$posturl.'&amp;t='.$posttitle;
        $pocket_url = 'https://getpocket.com/save?url='.$posturl.'&amp;title='.$posttitle;
        $odnoklassniki_url = 'https://connect.ok.ru/dk?st.cmd=WidgetSharePreview&amp;st.shareUrl='.$posturl;
        $googlebookmark_url = 'https://www.google.com/bookmarks/mark?op=edit&bkmk='.$posturl.'&amp;title='.$posttitle;
        $addthis_url = 'https://www.addthis.com/bookmark.php?url='.$posturl;

        $postthumb = '';
        $postthumb_attributes = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full', false );
        $postthumb = isset($postthumb_attributes[0]) ? $postthumb_attributes[0] : '';

        if(!empty($postthumb)) {
            $pinterest_url = 'https://pinterest.com/pin/create/button/?url='.$posturl.'&amp;media='.$postthumb.'&amp;description='.$posttitle;
        }

        // Add sharing button at the end of page/page content
        $socialcontent = '<div class="gridlane-share-buttons gridlane-clearfix"><span class="gridlane-share-text">'.esc_html(gridlane_share_text()).' </span>';
        if ( !(gridlane_get_option('hide_share_twitter')) ) {
            $socialcontent .= '<a class="gridlane-share-buttons-twitter" href="'.esc_url($twitter_url).'" target="_blank" rel="nofollow" title="'.esc_attr__('Tweet This!', 'gridlane').'"><i class="fab fa-twitter" aria-hidden="true"></i>'.esc_html__('Twitter', 'gridlane').'</a>';
        }
        if ( !(gridlane_get_option('hide_share_facebook')) ) {
            $socialcontent .= '<a class="gridlane-share-buttons-facebook" href="'.esc_url($facebook_url).'" target="_blank" rel="nofollow" title="'.esc_attr__('Share this on Facebook', 'gridlane').'"><i class="fab fa-facebook-f" aria-hidden="true"></i>'.esc_html__('Facebook', 'gridlane').'</a>';
        }
        if ( !(gridlane_get_option('hide_share_pinterest')) && !(empty($postthumb)) ) {
            $socialcontent .= '<a class="gridlane-share-buttons-pinterest" href="'.esc_url($pinterest_url).'" target="_blank" rel="nofollow" title="'.esc_attr__('Share this on Pinterest', 'gridlane').'"><i class="fab fa-pinterest" aria-hidden="true"></i>'.esc_html__('Pinterest', 'gridlane').'</a>';
        }
        if ( !(gridlane_get_option('hide_share_reddit')) ) {
            $socialcontent .= '<a class="gridlane-share-buttons-reddit" href="'.esc_url($reddit_url).'" target="_blank" rel="nofollow" title="'.esc_attr__('Share this on Reddit', 'gridlane').'"><i class="fab fa-reddit" aria-hidden="true"></i>'.esc_html__('Reddit', 'gridlane').'</a>';
        }
        if ( !(gridlane_get_option('hide_share_vk')) ) {
            $socialcontent .= '<a class="gridlane-share-buttons-vk" href="'.esc_url($vk_url).'" target="_blank" rel="nofollow" title="'.esc_attr__('Share this on VK', 'gridlane').'"><i class="fab fa-vk" aria-hidden="true"></i>'.esc_html__('VK', 'gridlane').'</a>';
        }
        if ( !(gridlane_get_option('hide_share_digg')) ) {
            $socialcontent .= '<a class="gridlane-share-buttons-digg" href="'.esc_url($digg_url).'" target="_blank" rel="nofollow" title="'.esc_attr__('Share this on Digg', 'gridlane').'"><i class="fab fa-digg" aria-hidden="true"></i>'.esc_html__('Digg', 'gridlane').'</a>';
        }
        if ( !(gridlane_get_option('hide_share_linkedin')) ) {
            $socialcontent .= '<a class="gridlane-share-buttons-linkedin" href="'.esc_url($linkedin_url).'" target="_blank" rel="nofollow" title="'.esc_attr__('Share this on Linkedin', 'gridlane').'"><i class="fab fa-linkedin-in" aria-hidden="true"></i>'.esc_html__('Linkedin', 'gridlane').'</a>';
        }
        if ( !(gridlane_get_option('hide_share_mix')) ) {
            $socialcontent .= '<a class="gridlane-share-buttons-mix" href="'.esc_url($mix_url).'" target="_blank" rel="nofollow" title="'.esc_attr__('Share this on Mix', 'gridlane').'"><i class="fab fa-mix" aria-hidden="true"></i>'.esc_html__('Mix', 'gridlane').'</a>';
        }
        $socialcontent .= '</div>';

        return apply_filters( 'gridlane_social_sharing_buttons', $socialcontent );

}

function gridlane_grid_sharing_buttons( $postimg = '' ) {

        global $post;

        // Get current page URL
        $posturl = rawurlencode(get_permalink($post->ID));

        // Get current page title
        $posttitle = rawurlencode(the_title_attribute('echo=0'));

        // Get Post Thumbnail for pinterest
        //$postimg = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' );

        // Construct sharing URL without using any script
        $buffer_url = 'https://bufferapp.com/add?url='.$posturl.'&amp;text='.$posttitle;
        $twitter_url = 'https://twitter.com/intent/tweet?text='.$posttitle.'&amp;url='.$posturl;
        $facebook_url = 'https://www.facebook.com/sharer.php?u='.$posturl;
        $google_url = 'https://plus.google.com/share?url='.$posturl;
        $reddit_url = 'https://www.reddit.com/submit?url='.$posturl.'&amp;title='.$posttitle;
        $vk_url = 'https://vk.com/share.php?url='.$posturl.'&amp;title='.$posttitle;
        $digg_url = 'https://digg.com/submit?url='.$posturl.'&amp;title='.$posttitle;
        $linkedin_url = 'https://www.linkedin.com/shareArticle?mini=true&amp;title='.$posttitle.'&amp;url='.$posturl;
        $delicious_url = 'http://del.icio.us/post?url='.$posturl.'&amp;title='.$posttitle;
        $addthis_url = 'https://www.addthis.com/bookmark.php?url='.$posturl;

        $image_url_regex = '/(http(s?):)([\/|.|\w|\s|-])*\.(?:jpg|jpeg|gif|png)/i';
        $postthumb = '';

        if( !empty($postimg) ) {
            preg_match( $image_url_regex, $postimg, $image_url_matches);
            if(isset($image_url_matches[0])) {
                $postthumb = $image_url_matches[0];
            }
        } else {
            $postthumb_attributes = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full', false );
            $postthumb = isset($postthumb_attributes[0]) ? $postthumb_attributes[0] : '';
        }

        if(!empty($postthumb)) {
            $pinterest_url = 'https://pinterest.com/pin/create/button/?url='.$posturl.'&amp;media='.$postthumb.'&amp;description='.$posttitle;
        }

        // Add sharing button at the end of page/page content
        $sharecontent = '<div class="gridlane-grid-share-buttons-wrapper"><div class="gridlane-grid-share-buttons gridlane-clearfix">';
        if ( !(gridlane_get_option('hide_share_twitter_home')) ) {
            $sharecontent .= '<a class="gridlane-grid-share-button gridlane-grid-share-button-twitter" href="'.esc_url($twitter_url).'" target="_blank" rel="nofollow" aria-label="'.esc_attr__('Tweet', 'gridlane').' : '.the_title_attribute('echo=0').'"><i class="fab fa-twitter" aria-hidden="true" title="'.esc_attr__('Tweet This!', 'gridlane').'"></i></a>';
        }
        if ( !(gridlane_get_option('hide_share_facebook_home')) ) {
            $sharecontent .= '<a class="gridlane-grid-share-button gridlane-grid-share-button-facebook" href="'.esc_url($facebook_url).'" target="_blank" rel="nofollow" aria-label="'.esc_attr__('Share on Facebook', 'gridlane').' : '.the_title_attribute('echo=0').'"><i class="fab fa-facebook-f" aria-hidden="true" title="'.esc_attr__('Share this on Facebook', 'gridlane').'"></i></a>';
        }
        if ( !(gridlane_get_option('hide_share_pinterest_home')) && !(empty($postthumb)) ) {
            $sharecontent .= '<a class="gridlane-grid-share-button gridlane-grid-share-button-pinterest" href="'.esc_url($pinterest_url).'" target="_blank" rel="nofollow" aria-label="'.esc_attr__('Share on Pinterest', 'gridlane').': '.the_title_attribute('echo=0').'"><i class="fab fa-pinterest" aria-hidden="true" title="'.esc_attr__('Share this on Pinterest', 'gridlane').'"></i></a>';
        }
        if ( !(gridlane_get_option('hide_share_linkedin_home')) ) {
            $sharecontent .= '<a class="gridlane-grid-share-button gridlane-grid-share-button-linkedin" href="'.esc_url($linkedin_url).'" target="_blank" rel="nofollow" aria-label="'.esc_attr__('Share on Linkedin', 'gridlane').' : '.the_title_attribute('echo=0').'"><i class="fab fa-linkedin-in" aria-hidden="true" title="'.esc_attr__('Share this on Linkedin', 'gridlane').'"></i></a>';
        }
        $sharecontent .= '</div></div>';

        return apply_filters( 'gridlane_grid_sharing_buttons', $sharecontent );

}