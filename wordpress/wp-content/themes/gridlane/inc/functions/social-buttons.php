<?php
/**
* Social buttons
*
* @package GridLane WordPress Theme
* @copyright Copyright (C) 2022 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/

function gridlane_footer_social_buttons() { ?>

<div class='gridlane-footer-social-icons gridlane-clearfix'>
<div class="gridlane-outer-wrapper">
    <?php if ( gridlane_get_option('twitterlink') ) : ?>
            <a href="<?php echo esc_url( gridlane_get_option('twitterlink') ); ?>" target="_blank" rel="nofollow" class="gridlane-footer-social-icon-twitter" aria-label="<?php esc_attr_e('Twitter Button','gridlane'); ?>"><i class="fab fa-twitter" aria-hidden="true" title="<?php esc_attr_e('Twitter','gridlane'); ?>"></i></a><?php endif; ?>
    <?php if ( gridlane_get_option('facebooklink') ) : ?>
            <a href="<?php echo esc_url( gridlane_get_option('facebooklink') ); ?>" target="_blank" rel="nofollow" class="gridlane-footer-social-icon-facebook" aria-label="<?php esc_attr_e('Facebook Button','gridlane'); ?>"><i class="fab fa-facebook-f" aria-hidden="true" title="<?php esc_attr_e('Facebook','gridlane'); ?>"></i></a><?php endif; ?>
    <?php if ( gridlane_get_option('googlelink') ) : ?>
            <a href="<?php echo esc_url( gridlane_get_option('googlelink') ); ?>" target="_blank" rel="nofollow" class="gridlane-footer-social-icon-google-plus" aria-label="<?php esc_attr_e('Google Plus Button','gridlane'); ?>"><i class="fab fa-google-plus-g" aria-hidden="true" title="<?php esc_attr_e('Google Plus','gridlane'); ?>"></i></a><?php endif; ?>
    <?php if ( gridlane_get_option('pinterestlink') ) : ?>
            <a href="<?php echo esc_url( gridlane_get_option('pinterestlink') ); ?>" target="_blank" rel="nofollow" class="gridlane-footer-social-icon-pinterest" aria-label="<?php esc_attr_e('Pinterest Button','gridlane'); ?>"><i class="fab fa-pinterest" aria-hidden="true" title="<?php esc_attr_e('Pinterest','gridlane'); ?>"></i></a><?php endif; ?>
    <?php if ( gridlane_get_option('linkedinlink') ) : ?>
            <a href="<?php echo esc_url( gridlane_get_option('linkedinlink') ); ?>" target="_blank" rel="nofollow" class="gridlane-footer-social-icon-linkedin" aria-label="<?php esc_attr_e('Linkedin Button','gridlane'); ?>"><i class="fab fa-linkedin-in" aria-hidden="true" title="<?php esc_attr_e('Linkedin','gridlane'); ?>"></i></a><?php endif; ?>
    <?php if ( gridlane_get_option('instagramlink') ) : ?>
            <a href="<?php echo esc_url( gridlane_get_option('instagramlink') ); ?>" target="_blank" rel="nofollow" class="gridlane-footer-social-icon-instagram" aria-label="<?php esc_attr_e('Instagram Button','gridlane'); ?>"><i class="fab fa-instagram" aria-hidden="true" title="<?php esc_attr_e('Instagram','gridlane'); ?>"></i></a><?php endif; ?>
    <?php if ( gridlane_get_option('flickrlink') ) : ?>
            <a href="<?php echo esc_url( gridlane_get_option('flickrlink') ); ?>" target="_blank" rel="nofollow" class="gridlane-footer-social-icon-flickr" aria-label="<?php esc_attr_e('Flickr Button','gridlane'); ?>"><i class="fab fa-flickr" aria-hidden="true" title="<?php esc_attr_e('Flickr','gridlane'); ?>"></i></a><?php endif; ?>
    <?php if ( gridlane_get_option('youtubelink') ) : ?>
            <a href="<?php echo esc_url( gridlane_get_option('youtubelink') ); ?>" target="_blank" rel="nofollow" class="gridlane-footer-social-icon-youtube" aria-label="<?php esc_attr_e('Youtube Button','gridlane'); ?>"><i class="fab fa-youtube" aria-hidden="true" title="<?php esc_attr_e('Youtube','gridlane'); ?>"></i></a><?php endif; ?>
    <?php if ( gridlane_get_option('vimeolink') ) : ?>
            <a href="<?php echo esc_url( gridlane_get_option('vimeolink') ); ?>" target="_blank" rel="nofollow" class="gridlane-footer-social-icon-vimeo" aria-label="<?php esc_attr_e('Vimeo Button','gridlane'); ?>"><i class="fab fa-vimeo-v" aria-hidden="true" title="<?php esc_attr_e('Vimeo','gridlane'); ?>"></i></a><?php endif; ?>
    <?php if ( gridlane_get_option('soundcloudlink') ) : ?>
            <a href="<?php echo esc_url( gridlane_get_option('soundcloudlink') ); ?>" target="_blank" rel="nofollow" class="gridlane-footer-social-icon-soundcloud" aria-label="<?php esc_attr_e('SoundCloud Button','gridlane'); ?>"><i class="fab fa-soundcloud" aria-hidden="true" title="<?php esc_attr_e('SoundCloud','gridlane'); ?>"></i></a><?php endif; ?>
    <?php if ( gridlane_get_option('messengerlink') ) : ?>
            <a href="<?php echo esc_url( gridlane_get_option('messengerlink') ); ?>" target="_blank" rel="nofollow" class="gridlane-footer-social-icon-messenger" aria-label="<?php esc_attr_e('Messenger Button','gridlane'); ?>"><i class="fab fa-facebook-messenger" aria-hidden="true" title="<?php esc_attr_e('Messenger','gridlane'); ?>"></i></a><?php endif; ?>
    <?php if ( gridlane_get_option('whatsapplink') ) : ?>
            <a href="<?php echo esc_url( gridlane_get_option('whatsapplink') ); ?>" target="_blank" rel="nofollow" class="gridlane-footer-social-icon-whatsapp" aria-label="<?php esc_attr_e('WhatsApp Button','gridlane'); ?>"><i class="fab fa-whatsapp" aria-hidden="true" title="<?php esc_attr_e('WhatsApp','gridlane'); ?>"></i></a><?php endif; ?>
    <?php if ( gridlane_get_option('lastfmlink') ) : ?>
            <a href="<?php echo esc_url( gridlane_get_option('lastfmlink') ); ?>" target="_blank" rel="nofollow" class="gridlane-footer-social-icon-lastfm" aria-label="<?php esc_attr_e('Lastfm Button','gridlane'); ?>"><i class="fab fa-lastfm" aria-hidden="true" title="<?php esc_attr_e('Lastfm','gridlane'); ?>"></i></a><?php endif; ?>
    <?php if ( gridlane_get_option('mediumlink') ) : ?>
            <a href="<?php echo esc_url( gridlane_get_option('mediumlink') ); ?>" target="_blank" rel="nofollow" class="gridlane-footer-social-icon-medium" aria-label="<?php esc_attr_e('Medium Button','gridlane'); ?>"><i class="fab fa-medium-m" aria-hidden="true" title="<?php esc_attr_e('Medium','gridlane'); ?>"></i></a><?php endif; ?>
    <?php if ( gridlane_get_option('githublink') ) : ?>
            <a href="<?php echo esc_url( gridlane_get_option('githublink') ); ?>" target="_blank" rel="nofollow" class="gridlane-footer-social-icon-github" aria-label="<?php esc_attr_e('Github Button','gridlane'); ?>"><i class="fab fa-github" aria-hidden="true" title="<?php esc_attr_e('Github','gridlane'); ?>"></i></a><?php endif; ?>
    <?php if ( gridlane_get_option('bitbucketlink') ) : ?>
            <a href="<?php echo esc_url( gridlane_get_option('bitbucketlink') ); ?>" target="_blank" rel="nofollow" class="gridlane-footer-social-icon-bitbucket" aria-label="<?php esc_attr_e('Bitbucket Button','gridlane'); ?>"><i class="fab fa-bitbucket" aria-hidden="true" title="<?php esc_attr_e('Bitbucket','gridlane'); ?>"></i></a><?php endif; ?>
    <?php if ( gridlane_get_option('tumblrlink') ) : ?>
            <a href="<?php echo esc_url( gridlane_get_option('tumblrlink') ); ?>" target="_blank" rel="nofollow" class="gridlane-footer-social-icon-tumblr" aria-label="<?php esc_attr_e('Tumblr Button','gridlane'); ?>"><i class="fab fa-tumblr" aria-hidden="true" title="<?php esc_attr_e('Tumblr','gridlane'); ?>"></i></a><?php endif; ?>
    <?php if ( gridlane_get_option('digglink') ) : ?>
            <a href="<?php echo esc_url( gridlane_get_option('digglink') ); ?>" target="_blank" rel="nofollow" class="gridlane-footer-social-icon-digg" aria-label="<?php esc_attr_e('Digg Button','gridlane'); ?>"><i class="fab fa-digg" aria-hidden="true" title="<?php esc_attr_e('Digg','gridlane'); ?>"></i></a><?php endif; ?>
    <?php if ( gridlane_get_option('deliciouslink') ) : ?>
            <a href="<?php echo esc_url( gridlane_get_option('deliciouslink') ); ?>" target="_blank" rel="nofollow" class="gridlane-footer-social-icon-delicious" aria-label="<?php esc_attr_e('Delicious Button','gridlane'); ?>"><i class="fab fa-delicious" aria-hidden="true" title="<?php esc_attr_e('Delicious','gridlane'); ?>"></i></a><?php endif; ?>
    <?php if ( gridlane_get_option('stumblelink') ) : ?>
            <a href="<?php echo esc_url( gridlane_get_option('stumblelink') ); ?>" target="_blank" rel="nofollow" class="gridlane-footer-social-icon-stumbleupon" aria-label="<?php esc_attr_e('Stumbleupon Button','gridlane'); ?>"><i class="fab fa-stumbleupon" aria-hidden="true" title="<?php esc_attr_e('Stumbleupon','gridlane'); ?>"></i></a><?php endif; ?>
    <?php if ( gridlane_get_option('mixlink') ) : ?>
            <a href="<?php echo esc_url( gridlane_get_option('mixlink') ); ?>" target="_blank" rel="nofollow" class="gridlane-footer-social-icon-mix" aria-label="<?php esc_attr_e('Mix Button','gridlane'); ?>"><i class="fab fa-mix" aria-hidden="true" title="<?php esc_attr_e('Mix','gridlane'); ?>"></i></a><?php endif; ?>
    <?php if ( gridlane_get_option('redditlink') ) : ?>
            <a href="<?php echo esc_url( gridlane_get_option('redditlink') ); ?>" target="_blank" rel="nofollow" class="gridlane-footer-social-icon-reddit" aria-label="<?php esc_attr_e('Reddit Button','gridlane'); ?>"><i class="fab fa-reddit" aria-hidden="true" title="<?php esc_attr_e('Reddit','gridlane'); ?>"></i></a><?php endif; ?>
    <?php if ( gridlane_get_option('dribbblelink') ) : ?>
            <a href="<?php echo esc_url( gridlane_get_option('dribbblelink') ); ?>" target="_blank" rel="nofollow" class="gridlane-footer-social-icon-dribbble" aria-label="<?php esc_attr_e('Dribbble Button','gridlane'); ?>"><i class="fab fa-dribbble" aria-hidden="true" title="<?php esc_attr_e('Dribbble','gridlane'); ?>"></i></a><?php endif; ?>
    <?php if ( gridlane_get_option('flipboardlink') ) : ?>
            <a href="<?php echo esc_url( gridlane_get_option('flipboardlink') ); ?>" target="_blank" rel="nofollow" class="gridlane-footer-social-icon-flipboard" aria-label="<?php esc_attr_e('Flipboard Button','gridlane'); ?>"><i class="fab fa-flipboard" aria-hidden="true" title="<?php esc_attr_e('Flipboard','gridlane'); ?>"></i></a><?php endif; ?>
    <?php if ( gridlane_get_option('bloggerlink') ) : ?>
            <a href="<?php echo esc_url( gridlane_get_option('bloggerlink') ); ?>" target="_blank" rel="nofollow" class="gridlane-footer-social-icon-blogger" aria-label="<?php esc_attr_e('Blogger Button','gridlane'); ?>"><i class="fab fa-blogger" aria-hidden="true" title="<?php esc_attr_e('Blogger','gridlane'); ?>"></i></a><?php endif; ?>
    <?php if ( gridlane_get_option('etsylink') ) : ?>
            <a href="<?php echo esc_url( gridlane_get_option('etsylink') ); ?>" target="_blank" rel="nofollow" class="gridlane-footer-social-icon-etsy" aria-label="<?php esc_attr_e('Etsy Button','gridlane'); ?>"><i class="fab fa-etsy" aria-hidden="true" title="<?php esc_attr_e('Etsy','gridlane'); ?>"></i></a><?php endif; ?>
    <?php if ( gridlane_get_option('behancelink') ) : ?>
            <a href="<?php echo esc_url( gridlane_get_option('behancelink') ); ?>" target="_blank" rel="nofollow" class="gridlane-footer-social-icon-behance" aria-label="<?php esc_attr_e('Behance Button','gridlane'); ?>"><i class="fab fa-behance" aria-hidden="true" title="<?php esc_attr_e('Behance','gridlane'); ?>"></i></a><?php endif; ?>
    <?php if ( gridlane_get_option('amazonlink') ) : ?>
            <a href="<?php echo esc_url( gridlane_get_option('amazonlink') ); ?>" target="_blank" rel="nofollow" class="gridlane-footer-social-icon-amazon" aria-label="<?php esc_attr_e('Amazon Button','gridlane'); ?>"><i class="fab fa-amazon" aria-hidden="true" title="<?php esc_attr_e('Amazon','gridlane'); ?>"></i></a><?php endif; ?>
    <?php if ( gridlane_get_option('meetuplink') ) : ?>
            <a href="<?php echo esc_url( gridlane_get_option('meetuplink') ); ?>" target="_blank" rel="nofollow" class="gridlane-footer-social-icon-meetup" aria-label="<?php esc_attr_e('Meetup Button','gridlane'); ?>"><i class="fab fa-meetup" aria-hidden="true" title="<?php esc_attr_e('Meetup','gridlane'); ?>"></i></a><?php endif; ?>
    <?php if ( gridlane_get_option('mixcloudlink') ) : ?>
            <a href="<?php echo esc_url( gridlane_get_option('mixcloudlink') ); ?>" target="_blank" rel="nofollow" class="gridlane-footer-social-icon-mixcloud" aria-label="<?php esc_attr_e('Mixcloud Button','gridlane'); ?>"><i class="fab fa-mixcloud" aria-hidden="true" title="<?php esc_attr_e('Mixcloud','gridlane'); ?>"></i></a><?php endif; ?>
    <?php if ( gridlane_get_option('slacklink') ) : ?>
            <a href="<?php echo esc_url( gridlane_get_option('slacklink') ); ?>" target="_blank" rel="nofollow" class="gridlane-footer-social-icon-slack" aria-label="<?php esc_attr_e('Slack Button','gridlane'); ?>"><i class="fab fa-slack" aria-hidden="true" title="<?php esc_attr_e('Slack','gridlane'); ?>"></i></a><?php endif; ?>
    <?php if ( gridlane_get_option('snapchatlink') ) : ?>
            <a href="<?php echo esc_url( gridlane_get_option('snapchatlink') ); ?>" target="_blank" rel="nofollow" class="gridlane-footer-social-icon-snapchat" aria-label="<?php esc_attr_e('Snapchat Button','gridlane'); ?>"><i class="fab fa-snapchat" aria-hidden="true" title="<?php esc_attr_e('Snapchat','gridlane'); ?>"></i></a><?php endif; ?>
    <?php if ( gridlane_get_option('spotifylink') ) : ?>
            <a href="<?php echo esc_url( gridlane_get_option('spotifylink') ); ?>" target="_blank" rel="nofollow" class="gridlane-footer-social-icon-spotify" aria-label="<?php esc_attr_e('Spotify Button','gridlane'); ?>"><i class="fab fa-spotify" aria-hidden="true" title="<?php esc_attr_e('Spotify','gridlane'); ?>"></i></a><?php endif; ?>
    <?php if ( gridlane_get_option('yelplink') ) : ?>
            <a href="<?php echo esc_url( gridlane_get_option('yelplink') ); ?>" target="_blank" rel="nofollow" class="gridlane-footer-social-icon-yelp" aria-label="<?php esc_attr_e('Yelp Button','gridlane'); ?>"><i class="fab fa-yelp" aria-hidden="true" title="<?php esc_attr_e('Yelp','gridlane'); ?>"></i></a><?php endif; ?>
    <?php if ( gridlane_get_option('wordpresslink') ) : ?>
            <a href="<?php echo esc_url( gridlane_get_option('wordpresslink') ); ?>" target="_blank" rel="nofollow" class="gridlane-footer-social-icon-wordpress" aria-label="<?php esc_attr_e('WordPress Button','gridlane'); ?>"><i class="fab fa-wordpress" aria-hidden="true" title="<?php esc_attr_e('WordPress','gridlane'); ?>"></i></a><?php endif; ?>
    <?php if ( gridlane_get_option('twitchlink') ) : ?>
            <a href="<?php echo esc_url( gridlane_get_option('twitchlink') ); ?>" target="_blank" rel="nofollow" class="gridlane-footer-social-icon-twitch" aria-label="<?php esc_attr_e('Twitch Button','gridlane'); ?>"><i class="fab fa-twitch" aria-hidden="true" title="<?php esc_attr_e('Twitch','gridlane'); ?>"></i></a><?php endif; ?>
    <?php if ( gridlane_get_option('telegramlink') ) : ?>
            <a href="<?php echo esc_url( gridlane_get_option('telegramlink') ); ?>" target="_blank" rel="nofollow" class="gridlane-footer-social-icon-telegram" aria-label="<?php esc_attr_e('Telegram Button','gridlane'); ?>"><i class="fab fa-telegram" aria-hidden="true" title="<?php esc_attr_e('Telegram','gridlane'); ?>"></i></a><?php endif; ?>
    <?php if ( gridlane_get_option('bandcamplink') ) : ?>
            <a href="<?php echo esc_url( gridlane_get_option('bandcamplink') ); ?>" target="_blank" rel="nofollow" class="gridlane-footer-social-icon-bandcamp" aria-label="<?php esc_attr_e('Bandcamp Button','gridlane'); ?>"><i class="fab fa-bandcamp" aria-hidden="true" title="<?php esc_attr_e('Bandcamp','gridlane'); ?>"></i></a><?php endif; ?>
    <?php if ( gridlane_get_option('quoralink') ) : ?>
            <a href="<?php echo esc_url( gridlane_get_option('quoralink') ); ?>" target="_blank" rel="nofollow" class="gridlane-footer-social-icon-quora" aria-label="<?php esc_attr_e('Quora Button','gridlane'); ?>"><i class="fab fa-quora" aria-hidden="true" title="<?php esc_attr_e('Quora','gridlane'); ?>"></i></a><?php endif; ?>
    <?php if ( gridlane_get_option('foursquarelink') ) : ?>
            <a href="<?php echo esc_url( gridlane_get_option('foursquarelink') ); ?>" target="_blank" rel="nofollow" class="gridlane-footer-social-icon-foursquare" aria-label="<?php esc_attr_e('Foursquare Button','gridlane'); ?>"><i class="fab fa-foursquare" aria-hidden="true" title="<?php esc_attr_e('Foursquare','gridlane'); ?>"></i></a><?php endif; ?>
    <?php if ( gridlane_get_option('deviantartlink') ) : ?>
            <a href="<?php echo esc_url( gridlane_get_option('deviantartlink') ); ?>" target="_blank" rel="nofollow" class="gridlane-footer-social-icon-deviantart" aria-label="<?php esc_attr_e('DeviantArt Button','gridlane'); ?>"><i class="fab fa-deviantart" aria-hidden="true" title="<?php esc_attr_e('DeviantArt','gridlane'); ?>"></i></a><?php endif; ?>
    <?php if ( gridlane_get_option('imdblink') ) : ?>
            <a href="<?php echo esc_url( gridlane_get_option('imdblink') ); ?>" target="_blank" rel="nofollow" class="gridlane-footer-social-icon-imdb" aria-label="<?php esc_attr_e('IMDB Button','gridlane'); ?>"><i class="fab fa-imdb" aria-hidden="true" title="<?php esc_attr_e('IMDB','gridlane'); ?>"></i></a><?php endif; ?>
    <?php if ( gridlane_get_option('vklink') ) : ?>
            <a href="<?php echo esc_url( gridlane_get_option('vklink') ); ?>" target="_blank" rel="nofollow" class="gridlane-footer-social-icon-vk" aria-label="<?php esc_attr_e('VK Button','gridlane'); ?>"><i class="fab fa-vk" aria-hidden="true" title="<?php esc_attr_e('VK','gridlane'); ?>"></i></a><?php endif; ?>
    <?php if ( gridlane_get_option('codepenlink') ) : ?>
            <a href="<?php echo esc_url( gridlane_get_option('codepenlink') ); ?>" target="_blank" rel="nofollow" class="gridlane-footer-social-icon-codepen" aria-label="<?php esc_attr_e('Codepen Button','gridlane'); ?>"><i class="fab fa-codepen" aria-hidden="true" title="<?php esc_attr_e('Codepen','gridlane'); ?>"></i></a><?php endif; ?>
    <?php if ( gridlane_get_option('jsfiddlelink') ) : ?>
            <a href="<?php echo esc_url( gridlane_get_option('jsfiddlelink') ); ?>" target="_blank" rel="nofollow" class="gridlane-footer-social-icon-jsfiddle" aria-label="<?php esc_attr_e('JSFiddle Button','gridlane'); ?>"><i class="fab fa-jsfiddle" aria-hidden="true" title="<?php esc_attr_e('JSFiddle','gridlane'); ?>"></i></a><?php endif; ?>
    <?php if ( gridlane_get_option('stackoverflowlink') ) : ?>
            <a href="<?php echo esc_url( gridlane_get_option('stackoverflowlink') ); ?>" target="_blank" rel="nofollow" class="gridlane-footer-social-icon-stackoverflow" aria-label="<?php esc_attr_e('Stack Overflow Button','gridlane'); ?>"><i class="fab fa-stack-overflow" aria-hidden="true" title="<?php esc_attr_e('Stack Overflow','gridlane'); ?>"></i></a><?php endif; ?>
    <?php if ( gridlane_get_option('stackexchangelink') ) : ?>
            <a href="<?php echo esc_url( gridlane_get_option('stackexchangelink') ); ?>" target="_blank" rel="nofollow" class="gridlane-footer-social-icon-stackexchange" aria-label="<?php esc_attr_e('Stack Exchange Button','gridlane'); ?>"><i class="fab fa-stack-exchange" aria-hidden="true" title="<?php esc_attr_e('Stack Exchange','gridlane'); ?>"></i></a><?php endif; ?>
    <?php if ( gridlane_get_option('bsalink') ) : ?>
            <a href="<?php echo esc_url( gridlane_get_option('bsalink') ); ?>" target="_blank" rel="nofollow" class="gridlane-footer-social-icon-buysellads" aria-label="<?php esc_attr_e('BuySellAds Button','gridlane'); ?>"><i class="fab fa-buysellads" aria-hidden="true" title="<?php esc_attr_e('BuySellAds','gridlane'); ?>"></i></a><?php endif; ?>
    <?php if ( gridlane_get_option('web500pxlink') ) : ?>
            <a href="<?php echo esc_url( gridlane_get_option('web500pxlink') ); ?>" target="_blank" rel="nofollow" class="gridlane-footer-social-icon-web500px" aria-label="<?php esc_attr_e('500px Button','gridlane'); ?>"><i class="fab fa-500px" aria-hidden="true" title="<?php esc_attr_e('500px','gridlane'); ?>"></i></a><?php endif; ?>
    <?php if ( gridlane_get_option('ellolink') ) : ?>
            <a href="<?php echo esc_url( gridlane_get_option('ellolink') ); ?>" target="_blank" rel="nofollow" class="gridlane-footer-social-icon-ello" aria-label="<?php esc_attr_e('Ello Button','gridlane'); ?>"><i class="fab fa-ello" aria-hidden="true" title="<?php esc_attr_e('Ello','gridlane'); ?>"></i></a><?php endif; ?>
    <?php if ( gridlane_get_option('discordlink') ) : ?>
            <a href="<?php echo esc_url( gridlane_get_option('discordlink') ); ?>" target="_blank" rel="nofollow" class="gridlane-footer-social-icon-discord" aria-label="<?php esc_attr_e('Discord Button','gridlane'); ?>"><i class="fab fa-discord" aria-hidden="true" title="<?php esc_attr_e('Discord','gridlane'); ?>"></i></a><?php endif; ?>
    <?php if ( gridlane_get_option('goodreadslink') ) : ?>
            <a href="<?php echo esc_url( gridlane_get_option('goodreadslink') ); ?>" target="_blank" rel="nofollow" class="gridlane-footer-social-icon-goodreads" aria-label="<?php esc_attr_e('Goodreads Button','gridlane'); ?>"><i class="fab fa-goodreads" aria-hidden="true" title="<?php esc_attr_e('Goodreads','gridlane'); ?>"></i></a><?php endif; ?>
    <?php if ( gridlane_get_option('odnoklassnikilink') ) : ?>
            <a href="<?php echo esc_url( gridlane_get_option('odnoklassnikilink') ); ?>" target="_blank" rel="nofollow" class="gridlane-footer-social-icon-odnoklassniki" aria-label="<?php esc_attr_e('Odnoklassniki Button','gridlane'); ?>"><i class="fab fa-odnoklassniki" aria-hidden="true" title="<?php esc_attr_e('Odnoklassniki','gridlane'); ?>"></i></a><?php endif; ?>
    <?php if ( gridlane_get_option('houzzlink') ) : ?>
            <a href="<?php echo esc_url( gridlane_get_option('houzzlink') ); ?>" target="_blank" rel="nofollow" class="gridlane-footer-social-icon-houzz" aria-label="<?php esc_attr_e('Houzz Button','gridlane'); ?>"><i class="fab fa-houzz" aria-hidden="true" title="<?php esc_attr_e('Houzz','gridlane'); ?>"></i></a><?php endif; ?>
    <?php if ( gridlane_get_option('pocketlink') ) : ?>
            <a href="<?php echo esc_url( gridlane_get_option('pocketlink') ); ?>" target="_blank" rel="nofollow" class="gridlane-footer-social-icon-pocket" aria-label="<?php esc_attr_e('Pocket Button','gridlane'); ?>"><i class="fab fa-get-pocket" aria-hidden="true" title="<?php esc_attr_e('Pocket','gridlane'); ?>"></i></a><?php endif; ?>
    <?php if ( gridlane_get_option('xinglink') ) : ?>
            <a href="<?php echo esc_url( gridlane_get_option('xinglink') ); ?>" target="_blank" rel="nofollow" class="gridlane-footer-social-icon-xing" aria-label="<?php esc_attr_e('XING Button','gridlane'); ?>"><i class="fab fa-xing" aria-hidden="true" title="<?php esc_attr_e('XING','gridlane'); ?>"></i></a><?php endif; ?>
    <?php if ( gridlane_get_option('googleplaylink') ) : ?>
            <a href="<?php echo esc_url( gridlane_get_option('googleplaylink') ); ?>" target="_blank" rel="nofollow" class="gridlane-footer-social-icon-googleplay" aria-label="<?php esc_attr_e('Google Play Button','gridlane'); ?>"><i class="fab fa-google-play" aria-hidden="true" title="<?php esc_attr_e('Google Play','gridlane'); ?>"></i></a><?php endif; ?>
    <?php if ( gridlane_get_option('slidesharelink') ) : ?>
            <a href="<?php echo esc_url( gridlane_get_option('slidesharelink') ); ?>" target="_blank" rel="nofollow" class="gridlane-footer-social-icon-slideshare" aria-label="<?php esc_attr_e('SlideShare Button','gridlane'); ?>"><i class="fab fa-slideshare" aria-hidden="true" title="<?php esc_attr_e('SlideShare','gridlane'); ?>"></i></a><?php endif; ?>
    <?php if ( gridlane_get_option('dropboxlink') ) : ?>
            <a href="<?php echo esc_url( gridlane_get_option('dropboxlink') ); ?>" target="_blank" rel="nofollow" class="gridlane-footer-social-icon-dropbox" aria-label="<?php esc_attr_e('Dropbox Button','gridlane'); ?>"><i class="fab fa-dropbox" aria-hidden="true" title="<?php esc_attr_e('Dropbox','gridlane'); ?>"></i></a><?php endif; ?>
    <?php if ( gridlane_get_option('paypallink') ) : ?>
            <a href="<?php echo esc_url( gridlane_get_option('paypallink') ); ?>" target="_blank" rel="nofollow" class="gridlane-footer-social-icon-paypal" aria-label="<?php esc_attr_e('PayPal Button','gridlane'); ?>"><i class="fab fa-paypal" aria-hidden="true" title="<?php esc_attr_e('PayPal','gridlane'); ?>"></i></a><?php endif; ?>
    <?php if ( gridlane_get_option('viadeolink') ) : ?>
            <a href="<?php echo esc_url( gridlane_get_option('viadeolink') ); ?>" target="_blank" rel="nofollow" class="gridlane-footer-social-icon-viadeo" aria-label="<?php esc_attr_e('Viadeo Button','gridlane'); ?>"><i class="fab fa-viadeo" aria-hidden="true" title="<?php esc_attr_e('Viadeo','gridlane'); ?>"></i></a><?php endif; ?>
    <?php if ( gridlane_get_option('wikipedialink') ) : ?>
            <a href="<?php echo esc_url( gridlane_get_option('wikipedialink') ); ?>" target="_blank" rel="nofollow" class="gridlane-footer-social-icon-wikipedia" aria-label="<?php esc_attr_e('Wikipedia Button','gridlane'); ?>"><i class="fab fa-wikipedia-w" aria-hidden="true" title="<?php esc_attr_e('Wikipedia','gridlane'); ?>"></i></a><?php endif; ?>
    <?php if ( gridlane_get_option('skypeusername') ) : ?>
            <a href="skype:<?php echo esc_html( gridlane_get_option('skypeusername') ); ?>?chat" class="gridlane-footer-social-icon-skype" aria-label="<?php esc_attr_e('Skype Button','gridlane'); ?>"><i class="fab fa-skype" aria-hidden="true" title="<?php esc_attr_e('Skype','gridlane'); ?>"></i></a><?php endif; ?>
    <?php if ( gridlane_get_option('emailaddress') ) : ?>
            <a href="mailto:<?php echo esc_html( gridlane_get_option('emailaddress') ); ?>" class="gridlane-footer-social-icon-email" aria-label="<?php esc_attr_e('Email Us Button','gridlane'); ?>"><i class="far fa-envelope" aria-hidden="true" title="<?php esc_attr_e('Email Us','gridlane'); ?>"></i></a><?php endif; ?>
    <?php if ( gridlane_get_option('rsslink') ) : ?>
            <a href="<?php echo esc_url( gridlane_get_option('rsslink') ); ?>" target="_blank" rel="nofollow" class="gridlane-footer-social-icon-rss" aria-label="<?php esc_attr_e('RSS Button','gridlane'); ?>"><i class="fas fa-rss" aria-hidden="true" title="<?php esc_attr_e('RSS','gridlane'); ?>"></i></a><?php endif; ?>
    <?php if ( gridlane_get_option('show_footer_login_button') ) { ?><?php if (is_user_logged_in()) : ?><a href="<?php echo esc_url( wp_logout_url( get_permalink() ) ); ?>" aria-label="<?php esc_attr_e( 'Logout Button', 'gridlane' ); ?>" class="gridlane-footer-social-icon-login"><i class="fas fa-sign-out-alt" aria-hidden="true" title="<?php esc_attr_e('Logout','gridlane'); ?>"></i></a><?php else : ?><a href="<?php echo esc_url( wp_login_url( get_permalink() ) ); ?>" aria-label="<?php esc_attr_e( 'Login / Register Button', 'gridlane' ); ?>" class="gridlane-footer-social-icon-login"><i class="fas fa-sign-in-alt" aria-hidden="true" title="<?php esc_attr_e('Login / Register','gridlane'); ?>"></i></a><?php endif;?><?php } ?>
</div>
</div>

<?php }