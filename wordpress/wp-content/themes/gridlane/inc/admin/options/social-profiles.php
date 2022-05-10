<?php
/**
* Social profiles options
*
* @package GridLane WordPress Theme
* @copyright Copyright (C) 2022 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/

function gridlane_social_profiles($wp_customize) {

    $wp_customize->add_section( 'gridlane_section_social', array( 'title' => esc_html__( 'Social Links Options', 'gridlane' ), 'panel' => 'gridlane_main_options_panel', 'priority' => 240, ));

    $wp_customize->add_setting( 'gridlane_options[hide_footer_social_buttons]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'gridlane_sanitize_checkbox', ) );

    $wp_customize->add_control( 'gridlane_hide_footer_social_buttons_control', array( 'label' => esc_html__( 'Hide Footer Social + Login/Logout Buttons', 'gridlane' ), 'description' => esc_html__('If you checked this option, all buttons will disappear from footer. There is no any effect from these option: "Show Login/Logout Button in Footer".', 'gridlane'), 'section' => 'gridlane_section_social', 'settings' => 'gridlane_options[hide_footer_social_buttons]', 'type' => 'checkbox', ) );

    $wp_customize->add_setting( 'gridlane_options[show_footer_login_button]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'gridlane_sanitize_checkbox', ) );

    $wp_customize->add_control( 'gridlane_show_footer_login_button_control', array( 'label' => esc_html__( 'Show Login/Logout Button in Footer', 'gridlane' ), 'description' => esc_html__('This option has no effect if you checked the option: "Hide Footer Social + Login/Logout Buttons"', 'gridlane'), 'section' => 'gridlane_section_social', 'settings' => 'gridlane_options[show_footer_login_button]', 'type' => 'checkbox', ) );

    $wp_customize->add_setting( 'gridlane_options[twitterlink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'gridlane_twitterlink_control', array( 'label' => esc_html__( 'Twitter URL', 'gridlane' ), 'section' => 'gridlane_section_social', 'settings' => 'gridlane_options[twitterlink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'gridlane_options[facebooklink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'gridlane_facebooklink_control', array( 'label' => esc_html__( 'Facebook URL', 'gridlane' ), 'section' => 'gridlane_section_social', 'settings' => 'gridlane_options[facebooklink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'gridlane_options[googlelink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) ); 

    $wp_customize->add_control( 'gridlane_googlelink_control', array( 'label' => esc_html__( 'Google Plus URL', 'gridlane' ), 'section' => 'gridlane_section_social', 'settings' => 'gridlane_options[googlelink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'gridlane_options[pinterestlink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'gridlane_pinterestlink_control', array( 'label' => esc_html__( 'Pinterest URL', 'gridlane' ), 'section' => 'gridlane_section_social', 'settings' => 'gridlane_options[pinterestlink]', 'type' => 'text' ) );
    
    $wp_customize->add_setting( 'gridlane_options[linkedinlink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'gridlane_linkedinlink_control', array( 'label' => esc_html__( 'Linkedin Link', 'gridlane' ), 'section' => 'gridlane_section_social', 'settings' => 'gridlane_options[linkedinlink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'gridlane_options[instagramlink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'gridlane_instagramlink_control', array( 'label' => esc_html__( 'Instagram Link', 'gridlane' ), 'section' => 'gridlane_section_social', 'settings' => 'gridlane_options[instagramlink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'gridlane_options[vklink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'gridlane_vklink_control', array( 'label' => esc_html__( 'VK Link', 'gridlane' ), 'section' => 'gridlane_section_social', 'settings' => 'gridlane_options[vklink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'gridlane_options[flickrlink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'gridlane_flickrlink_control', array( 'label' => esc_html__( 'Flickr Link', 'gridlane' ), 'section' => 'gridlane_section_social', 'settings' => 'gridlane_options[flickrlink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'gridlane_options[youtubelink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'gridlane_youtubelink_control', array( 'label' => esc_html__( 'Youtube URL', 'gridlane' ), 'section' => 'gridlane_section_social', 'settings' => 'gridlane_options[youtubelink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'gridlane_options[vimeolink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'gridlane_vimeolink_control', array( 'label' => esc_html__( 'Vimeo URL', 'gridlane' ), 'section' => 'gridlane_section_social', 'settings' => 'gridlane_options[vimeolink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'gridlane_options[soundcloudlink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'gridlane_soundcloudlink_control', array( 'label' => esc_html__( 'Soundcloud URL', 'gridlane' ), 'section' => 'gridlane_section_social', 'settings' => 'gridlane_options[soundcloudlink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'gridlane_options[messengerlink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'gridlane_messengerlink_control', array( 'label' => esc_html__( 'Messenger URL', 'gridlane' ), 'section' => 'gridlane_section_social', 'settings' => 'gridlane_options[messengerlink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'gridlane_options[whatsapplink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'gridlane_whatsapplink_control', array( 'label' => esc_html__( 'WhatsApp URL', 'gridlane' ), 'section' => 'gridlane_section_social', 'settings' => 'gridlane_options[whatsapplink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'gridlane_options[lastfmlink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'gridlane_lastfmlink_control', array( 'label' => esc_html__( 'Lastfm URL', 'gridlane' ), 'section' => 'gridlane_section_social', 'settings' => 'gridlane_options[lastfmlink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'gridlane_options[mediumlink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'gridlane_mediumlink_control', array( 'label' => esc_html__( 'Medium URL', 'gridlane' ), 'section' => 'gridlane_section_social', 'settings' => 'gridlane_options[mediumlink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'gridlane_options[githublink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'gridlane_githublink_control', array( 'label' => esc_html__( 'Github URL', 'gridlane' ), 'section' => 'gridlane_section_social', 'settings' => 'gridlane_options[githublink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'gridlane_options[bitbucketlink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'gridlane_bitbucketlink_control', array( 'label' => esc_html__( 'Bitbucket URL', 'gridlane' ), 'section' => 'gridlane_section_social', 'settings' => 'gridlane_options[bitbucketlink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'gridlane_options[tumblrlink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'gridlane_tumblrlink_control', array( 'label' => esc_html__( 'Tumblr URL', 'gridlane' ), 'section' => 'gridlane_section_social', 'settings' => 'gridlane_options[tumblrlink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'gridlane_options[digglink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'gridlane_digglink_control', array( 'label' => esc_html__( 'Digg URL', 'gridlane' ), 'section' => 'gridlane_section_social', 'settings' => 'gridlane_options[digglink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'gridlane_options[deliciouslink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'gridlane_deliciouslink_control', array( 'label' => esc_html__( 'Delicious URL', 'gridlane' ), 'section' => 'gridlane_section_social', 'settings' => 'gridlane_options[deliciouslink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'gridlane_options[stumblelink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'gridlane_stumblelink_control', array( 'label' => esc_html__( 'Stumbleupon URL', 'gridlane' ), 'section' => 'gridlane_section_social', 'settings' => 'gridlane_options[stumblelink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'gridlane_options[mixlink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'gridlane_mixlink_control', array( 'label' => esc_html__( 'Mix URL', 'gridlane' ), 'section' => 'gridlane_section_social', 'settings' => 'gridlane_options[mixlink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'gridlane_options[redditlink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'gridlane_redditlink_control', array( 'label' => esc_html__( 'Reddit URL', 'gridlane' ), 'section' => 'gridlane_section_social', 'settings' => 'gridlane_options[redditlink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'gridlane_options[dribbblelink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'gridlane_dribbblelink_control', array( 'label' => esc_html__( 'Dribbble URL', 'gridlane' ), 'section' => 'gridlane_section_social', 'settings' => 'gridlane_options[dribbblelink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'gridlane_options[flipboardlink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'gridlane_flipboardlink_control', array( 'label' => esc_html__( 'Flipboard URL', 'gridlane' ), 'section' => 'gridlane_section_social', 'settings' => 'gridlane_options[flipboardlink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'gridlane_options[bloggerlink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'gridlane_bloggerlink_control', array( 'label' => esc_html__( 'Blogger URL', 'gridlane' ), 'section' => 'gridlane_section_social', 'settings' => 'gridlane_options[bloggerlink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'gridlane_options[etsylink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'gridlane_etsylink_control', array( 'label' => esc_html__( 'Etsy URL', 'gridlane' ), 'section' => 'gridlane_section_social', 'settings' => 'gridlane_options[etsylink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'gridlane_options[behancelink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'gridlane_behancelink_control', array( 'label' => esc_html__( 'Behance URL', 'gridlane' ), 'section' => 'gridlane_section_social', 'settings' => 'gridlane_options[behancelink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'gridlane_options[amazonlink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'gridlane_amazonlink_control', array( 'label' => esc_html__( 'Amazon URL', 'gridlane' ), 'section' => 'gridlane_section_social', 'settings' => 'gridlane_options[amazonlink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'gridlane_options[meetuplink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'gridlane_meetuplink_control', array( 'label' => esc_html__( 'Meetup URL', 'gridlane' ), 'section' => 'gridlane_section_social', 'settings' => 'gridlane_options[meetuplink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'gridlane_options[mixcloudlink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'gridlane_mixcloudlink_control', array( 'label' => esc_html__( 'Mixcloud URL', 'gridlane' ), 'section' => 'gridlane_section_social', 'settings' => 'gridlane_options[mixcloudlink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'gridlane_options[slacklink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'gridlane_slacklink_control', array( 'label' => esc_html__( 'Slack URL', 'gridlane' ), 'section' => 'gridlane_section_social', 'settings' => 'gridlane_options[slacklink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'gridlane_options[snapchatlink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'gridlane_snapchatlink_control', array( 'label' => esc_html__( 'Snapchat URL', 'gridlane' ), 'section' => 'gridlane_section_social', 'settings' => 'gridlane_options[snapchatlink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'gridlane_options[spotifylink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'gridlane_spotifylink_control', array( 'label' => esc_html__( 'Spotify URL', 'gridlane' ), 'section' => 'gridlane_section_social', 'settings' => 'gridlane_options[spotifylink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'gridlane_options[yelplink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'gridlane_yelplink_control', array( 'label' => esc_html__( 'Yelp URL', 'gridlane' ), 'section' => 'gridlane_section_social', 'settings' => 'gridlane_options[yelplink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'gridlane_options[wordpresslink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'gridlane_wordpresslink_control', array( 'label' => esc_html__( 'WordPress URL', 'gridlane' ), 'section' => 'gridlane_section_social', 'settings' => 'gridlane_options[wordpresslink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'gridlane_options[twitchlink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'gridlane_twitchlink_control', array( 'label' => esc_html__( 'Twitch URL', 'gridlane' ), 'section' => 'gridlane_section_social', 'settings' => 'gridlane_options[twitchlink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'gridlane_options[telegramlink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'gridlane_telegramlink_control', array( 'label' => esc_html__( 'Telegram URL', 'gridlane' ), 'section' => 'gridlane_section_social', 'settings' => 'gridlane_options[telegramlink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'gridlane_options[bandcamplink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'gridlane_bandcamplink_control', array( 'label' => esc_html__( 'Bandcamp URL', 'gridlane' ), 'section' => 'gridlane_section_social', 'settings' => 'gridlane_options[bandcamplink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'gridlane_options[quoralink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'gridlane_quoralink_control', array( 'label' => esc_html__( 'Quora URL', 'gridlane' ), 'section' => 'gridlane_section_social', 'settings' => 'gridlane_options[quoralink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'gridlane_options[foursquarelink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'gridlane_foursquarelink_control', array( 'label' => esc_html__( 'Foursquare URL', 'gridlane' ), 'section' => 'gridlane_section_social', 'settings' => 'gridlane_options[foursquarelink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'gridlane_options[deviantartlink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'gridlane_deviantartlink_control', array( 'label' => esc_html__( 'DeviantArt URL', 'gridlane' ), 'section' => 'gridlane_section_social', 'settings' => 'gridlane_options[deviantartlink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'gridlane_options[imdblink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'gridlane_imdblink_control', array( 'label' => esc_html__( 'IMDB URL', 'gridlane' ), 'section' => 'gridlane_section_social', 'settings' => 'gridlane_options[imdblink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'gridlane_options[codepenlink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'gridlane_codepenlink_control', array( 'label' => esc_html__( 'Codepen URL', 'gridlane' ), 'section' => 'gridlane_section_social', 'settings' => 'gridlane_options[codepenlink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'gridlane_options[jsfiddlelink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'gridlane_jsfiddlelink_control', array( 'label' => esc_html__( 'JSFiddle URL', 'gridlane' ), 'section' => 'gridlane_section_social', 'settings' => 'gridlane_options[jsfiddlelink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'gridlane_options[stackoverflowlink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'gridlane_stackoverflowlink_control', array( 'label' => esc_html__( 'Stack Overflow URL', 'gridlane' ), 'section' => 'gridlane_section_social', 'settings' => 'gridlane_options[stackoverflowlink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'gridlane_options[stackexchangelink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'gridlane_stackexchangelink_control', array( 'label' => esc_html__( 'Stack Exchange URL', 'gridlane' ), 'section' => 'gridlane_section_social', 'settings' => 'gridlane_options[stackexchangelink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'gridlane_options[bsalink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'gridlane_bsalink_control', array( 'label' => esc_html__( 'BuySellAds URL', 'gridlane' ), 'section' => 'gridlane_section_social', 'settings' => 'gridlane_options[bsalink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'gridlane_options[web500pxlink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'gridlane_web500pxlink_control', array( 'label' => esc_html__( '500px URL', 'gridlane' ), 'section' => 'gridlane_section_social', 'settings' => 'gridlane_options[web500pxlink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'gridlane_options[ellolink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'gridlane_ellolink_control', array( 'label' => esc_html__( 'Ello URL', 'gridlane' ), 'section' => 'gridlane_section_social', 'settings' => 'gridlane_options[ellolink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'gridlane_options[discordlink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'gridlane_discordlink_control', array( 'label' => esc_html__( 'Discord URL', 'gridlane' ), 'section' => 'gridlane_section_social', 'settings' => 'gridlane_options[discordlink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'gridlane_options[goodreadslink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'gridlane_goodreadslink_control', array( 'label' => esc_html__( 'Goodreads URL', 'gridlane' ), 'section' => 'gridlane_section_social', 'settings' => 'gridlane_options[goodreadslink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'gridlane_options[odnoklassnikilink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'gridlane_odnoklassnikilink_control', array( 'label' => esc_html__( 'Odnoklassniki URL', 'gridlane' ), 'section' => 'gridlane_section_social', 'settings' => 'gridlane_options[odnoklassnikilink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'gridlane_options[houzzlink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'gridlane_houzzlink_control', array( 'label' => esc_html__( 'Houzz URL', 'gridlane' ), 'section' => 'gridlane_section_social', 'settings' => 'gridlane_options[houzzlink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'gridlane_options[pocketlink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'gridlane_pocketlink_control', array( 'label' => esc_html__( 'Pocket URL', 'gridlane' ), 'section' => 'gridlane_section_social', 'settings' => 'gridlane_options[pocketlink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'gridlane_options[xinglink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'gridlane_xinglink_control', array( 'label' => esc_html__( 'XING URL', 'gridlane' ), 'section' => 'gridlane_section_social', 'settings' => 'gridlane_options[xinglink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'gridlane_options[googleplaylink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'gridlane_googleplaylink_control', array( 'label' => esc_html__( 'Google Play URL', 'gridlane' ), 'section' => 'gridlane_section_social', 'settings' => 'gridlane_options[googleplaylink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'gridlane_options[slidesharelink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'gridlane_slidesharelink_control', array( 'label' => esc_html__( 'SlideShare URL', 'gridlane' ), 'section' => 'gridlane_section_social', 'settings' => 'gridlane_options[slidesharelink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'gridlane_options[dropboxlink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'gridlane_dropboxlink_control', array( 'label' => esc_html__( 'Dropbox URL', 'gridlane' ), 'section' => 'gridlane_section_social', 'settings' => 'gridlane_options[dropboxlink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'gridlane_options[paypallink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'gridlane_paypallink_control', array( 'label' => esc_html__( 'PayPal URL', 'gridlane' ), 'section' => 'gridlane_section_social', 'settings' => 'gridlane_options[paypallink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'gridlane_options[viadeolink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'gridlane_viadeolink_control', array( 'label' => esc_html__( 'Viadeo URL', 'gridlane' ), 'section' => 'gridlane_section_social', 'settings' => 'gridlane_options[viadeolink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'gridlane_options[wikipedialink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'gridlane_wikipedialink_control', array( 'label' => esc_html__( 'Wikipedia URL', 'gridlane' ), 'section' => 'gridlane_section_social', 'settings' => 'gridlane_options[wikipedialink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'gridlane_options[skypeusername]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'sanitize_text_field' ) );

    $wp_customize->add_control( 'gridlane_skypeusername_control', array( 'label' => esc_html__( 'Skype Username', 'gridlane' ), 'section' => 'gridlane_section_social', 'settings' => 'gridlane_options[skypeusername]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'gridlane_options[emailaddress]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'gridlane_sanitize_email' ) );

    $wp_customize->add_control( 'gridlane_emailaddress_control', array( 'label' => esc_html__( 'Email Address', 'gridlane' ), 'section' => 'gridlane_section_social', 'settings' => 'gridlane_options[emailaddress]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'gridlane_options[rsslink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'gridlane_rsslink_control', array( 'label' => esc_html__( 'RSS Feed URL', 'gridlane' ), 'section' => 'gridlane_section_social', 'settings' => 'gridlane_options[rsslink]', 'type' => 'text' ) );

}