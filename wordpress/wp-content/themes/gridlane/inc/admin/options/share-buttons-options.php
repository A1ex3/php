<?php
/**
* Share Button options
*
* @package GridLane WordPress Theme
* @copyright Copyright (C) 2022 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/

function gridlane_share_buttons_options($wp_customize) {

    $wp_customize->add_section( 'gridlane_section_share', array( 'title' => esc_html__( 'Share Buttons Options', 'gridlane' ), 'panel' => 'gridlane_main_options_panel', 'priority' => 260 ) );

    $wp_customize->add_setting( 'gridlane_options[hide_share_buttons_home]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'gridlane_sanitize_checkbox', ) );

    $wp_customize->add_control( 'gridlane_hide_share_buttons_home_control', array( 'label' => esc_html__( 'Hide Share Buttons from Posts Summaries', 'gridlane' ), 'section' => 'gridlane_section_share', 'settings' => 'gridlane_options[hide_share_buttons_home]', 'type' => 'checkbox', ) );

    $wp_customize->add_setting( 'gridlane_options[hide_share_twitter_home]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'gridlane_sanitize_checkbox', ) );

    $wp_customize->add_control( 'gridlane_hide_share_twitter_home_control', array( 'label' => esc_html__( 'Hide Twitter Share Button from Posts Summaries', 'gridlane' ), 'section' => 'gridlane_section_share', 'settings' => 'gridlane_options[hide_share_twitter_home]', 'type' => 'checkbox', ) );

    $wp_customize->add_setting( 'gridlane_options[hide_share_facebook_home]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'gridlane_sanitize_checkbox', ) );

    $wp_customize->add_control( 'gridlane_hide_share_facebook_home_control', array( 'label' => esc_html__( 'Hide Facebook Share Button from Posts Summaries', 'gridlane' ), 'section' => 'gridlane_section_share', 'settings' => 'gridlane_options[hide_share_facebook_home]', 'type' => 'checkbox', ) );

    $wp_customize->add_setting( 'gridlane_options[hide_share_pinterest_home]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'gridlane_sanitize_checkbox', ) );

    $wp_customize->add_control( 'gridlane_hide_share_pinterest_home_control', array( 'label' => esc_html__( 'Hide Pinterest Share Button from Posts Summaries', 'gridlane' ), 'section' => 'gridlane_section_share', 'settings' => 'gridlane_options[hide_share_pinterest_home]', 'type' => 'checkbox', ) );

    $wp_customize->add_setting( 'gridlane_options[hide_share_linkedin_home]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'gridlane_sanitize_checkbox', ) );

    $wp_customize->add_control( 'gridlane_hide_share_linkedin_home_control', array( 'label' => esc_html__( 'Hide Linkedin Share Button from Posts Summaries', 'gridlane' ), 'section' => 'gridlane_section_share', 'settings' => 'gridlane_options[hide_share_linkedin_home]', 'type' => 'checkbox', ) );


    $wp_customize->add_setting( 'gridlane_options[hide_share_buttons]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'gridlane_sanitize_checkbox', ) );

    $wp_customize->add_control( 'gridlane_hide_share_buttons_control', array( 'label' => esc_html__( 'Hide Share Buttons from Single Posts', 'gridlane' ), 'section' => 'gridlane_section_share', 'settings' => 'gridlane_options[hide_share_buttons]', 'type' => 'checkbox', ) );

    $wp_customize->add_setting( 'gridlane_options[hide_share_text]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'gridlane_sanitize_checkbox', ) );

    $wp_customize->add_control( 'gridlane_hide_share_text_control', array( 'label' => esc_html__( 'Hide Share Text from Single Posts', 'gridlane' ), 'section' => 'gridlane_section_share', 'settings' => 'gridlane_options[hide_share_text]', 'type' => 'checkbox', ) );

    $wp_customize->add_setting( 'gridlane_options[share_text]', array( 'default' => esc_html__( 'Share:', 'gridlane' ), 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'sanitize_text_field', ) );

    $wp_customize->add_control( 'gridlane_share_text_control', array( 'label' => esc_html__( 'Share Text', 'gridlane' ), 'section' => 'gridlane_section_share', 'settings' => 'gridlane_options[share_text]', 'type' => 'text', ) );

    $wp_customize->add_setting( 'gridlane_options[hide_share_twitter]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'gridlane_sanitize_checkbox', ) );

    $wp_customize->add_control( 'gridlane_hide_share_twitter_control', array( 'label' => esc_html__( 'Hide Twitter Share Button from Single Posts', 'gridlane' ), 'section' => 'gridlane_section_share', 'settings' => 'gridlane_options[hide_share_twitter]', 'type' => 'checkbox', ) );

    $wp_customize->add_setting( 'gridlane_options[hide_share_facebook]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'gridlane_sanitize_checkbox', ) );

    $wp_customize->add_control( 'gridlane_hide_share_facebook_control', array( 'label' => esc_html__( 'Hide Facebook Share Button from Single Posts', 'gridlane' ), 'section' => 'gridlane_section_share', 'settings' => 'gridlane_options[hide_share_facebook]', 'type' => 'checkbox', ) );

    $wp_customize->add_setting( 'gridlane_options[hide_share_pinterest]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'gridlane_sanitize_checkbox', ) );

    $wp_customize->add_control( 'gridlane_hide_share_pinterest_control', array( 'label' => esc_html__( 'Hide Pinterest Share Button from Single Posts', 'gridlane' ), 'section' => 'gridlane_section_share', 'settings' => 'gridlane_options[hide_share_pinterest]', 'type' => 'checkbox', ) );

    $wp_customize->add_setting( 'gridlane_options[hide_share_linkedin]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'gridlane_sanitize_checkbox', ) );

    $wp_customize->add_control( 'gridlane_hide_share_linkedin_control', array( 'label' => esc_html__( 'Hide Linkedin Share Button from Single Posts', 'gridlane' ), 'section' => 'gridlane_section_share', 'settings' => 'gridlane_options[hide_share_linkedin]', 'type' => 'checkbox', ) );

    $wp_customize->add_setting( 'gridlane_options[hide_share_mix]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'gridlane_sanitize_checkbox', ) );

    $wp_customize->add_control( 'gridlane_hide_share_mix_control', array( 'label' => esc_html__( 'Hide Mix Share Button from Single Posts', 'gridlane' ), 'section' => 'gridlane_section_share', 'settings' => 'gridlane_options[hide_share_mix]', 'type' => 'checkbox', ) );

    $wp_customize->add_setting( 'gridlane_options[hide_share_reddit]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'gridlane_sanitize_checkbox', ) );

    $wp_customize->add_control( 'gridlane_hide_share_reddit_control', array( 'label' => esc_html__( 'Hide Reddit Share Button from Single Posts', 'gridlane' ), 'section' => 'gridlane_section_share', 'settings' => 'gridlane_options[hide_share_reddit]', 'type' => 'checkbox', ) );

    $wp_customize->add_setting( 'gridlane_options[hide_share_digg]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'gridlane_sanitize_checkbox', ) );

    $wp_customize->add_control( 'gridlane_hide_share_digg_control', array( 'label' => esc_html__( 'Hide Digg Share Button from Single Posts', 'gridlane' ), 'section' => 'gridlane_section_share', 'settings' => 'gridlane_options[hide_share_digg]', 'type' => 'checkbox', ) );

    $wp_customize->add_setting( 'gridlane_options[hide_share_vk]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'gridlane_sanitize_checkbox', ) );

    $wp_customize->add_control( 'gridlane_hide_share_vk_control', array( 'label' => esc_html__( 'Hide VK Share Button from Single Posts', 'gridlane' ), 'section' => 'gridlane_section_share', 'settings' => 'gridlane_options[hide_share_vk]', 'type' => 'checkbox', ) );

}