<?php
/**
* Post options
*
* @package GridLane WordPress Theme
* @copyright Copyright (C) 2022 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/

function gridlane_post_options($wp_customize) {

    $wp_customize->add_section( 'gridlane_section_post', array( 'title' => esc_html__( 'Post Options', 'gridlane' ), 'panel' => 'gridlane_main_options_panel', 'priority' => 180 ) );

    $wp_customize->add_setting( 'gridlane_options[thumbnail_link]', array( 'default' => 'yes', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'gridlane_sanitize_yes_no' ) );

    $wp_customize->add_control( 'gridlane_thumbnail_link_control', array( 'label' => esc_html__( 'Featured Image Link', 'gridlane' ), 'description' => esc_html__('Do you want the featured image in a single post to be linked to its post?', 'gridlane'), 'section' => 'gridlane_section_post', 'settings' => 'gridlane_options[thumbnail_link]', 'type' => 'select', 'choices' => array( 'yes' => esc_html__('Yes', 'gridlane'), 'no' => esc_html__('No', 'gridlane') ) ) );

    $wp_customize->add_setting( 'gridlane_options[hide_thumbnail]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'gridlane_sanitize_checkbox', ) );

    $wp_customize->add_control( 'gridlane_hide_thumbnail_control', array( 'label' => esc_html__( 'Hide Featured Image from Full Post', 'gridlane' ), 'section' => 'gridlane_section_post', 'settings' => 'gridlane_options[hide_thumbnail]', 'type' => 'checkbox', ) );

    $wp_customize->add_setting( 'gridlane_options[featured_media_under_post_title]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'gridlane_sanitize_checkbox', ) );

    $wp_customize->add_control( 'gridlane_featured_media_under_post_title_control', array( 'label' => esc_html__( 'Move Featured Image to Bottom of Full Post Title', 'gridlane' ), 'section' => 'gridlane_section_post', 'settings' => 'gridlane_options[featured_media_under_post_title]', 'type' => 'checkbox', ) );

    $wp_customize->add_setting( 'gridlane_options[hide_post_header]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'gridlane_sanitize_checkbox', ) );

    $wp_customize->add_control( 'gridlane_hide_post_header_control', array( 'label' => esc_html__( 'Hide Post Header from Full Post', 'gridlane' ), 'description' => esc_html__('If you check this option, it will hide post title and post header meta data from full post.', 'gridlane'), 'section' => 'gridlane_section_post', 'settings' => 'gridlane_options[hide_post_header]', 'type' => 'checkbox', ) );

    $wp_customize->add_setting( 'gridlane_options[hide_post_title]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'gridlane_sanitize_checkbox', ) );

    $wp_customize->add_control( 'gridlane_hide_post_title_control', array( 'label' => esc_html__( 'Hide Post Title from Full Post', 'gridlane' ), 'section' => 'gridlane_section_post', 'settings' => 'gridlane_options[hide_post_title]', 'type' => 'checkbox', ) );

    $wp_customize->add_setting( 'gridlane_options[remove_post_title_link]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'gridlane_sanitize_checkbox', ) );

    $wp_customize->add_control( 'gridlane_remove_post_title_link_control', array( 'label' => esc_html__( 'Remove Link from Full Post Title', 'gridlane' ), 'section' => 'gridlane_section_post', 'settings' => 'gridlane_options[remove_post_title_link]', 'type' => 'checkbox', ) );

    $wp_customize->add_setting( 'gridlane_options[hide_post_categories]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'gridlane_sanitize_checkbox', ) );

    $wp_customize->add_control( 'gridlane_hide_post_categories_control', array( 'label' => esc_html__( 'Hide Post Categories from Full Post', 'gridlane' ), 'section' => 'gridlane_section_post', 'settings' => 'gridlane_options[hide_post_categories]', 'type' => 'checkbox', ) );

    $wp_customize->add_setting( 'gridlane_options[hide_post_author]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'gridlane_sanitize_checkbox', ) );

    $wp_customize->add_control( 'gridlane_hide_post_author_control', array( 'label' => esc_html__( 'Hide Post Author from Full Post', 'gridlane' ), 'section' => 'gridlane_section_post', 'settings' => 'gridlane_options[hide_post_author]', 'type' => 'checkbox', ) );

    $wp_customize->add_setting( 'gridlane_options[hide_posted_date]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'gridlane_sanitize_checkbox', ) );

    $wp_customize->add_control( 'gridlane_hide_posted_date_control', array( 'label' => esc_html__( 'Hide Posted Date from Full Post', 'gridlane' ), 'section' => 'gridlane_section_post', 'settings' => 'gridlane_options[hide_posted_date]', 'type' => 'checkbox', ) );

    $wp_customize->add_setting( 'gridlane_options[hide_comments_link]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'gridlane_sanitize_checkbox', ) );

    $wp_customize->add_control( 'gridlane_hide_comments_link_control', array( 'label' => esc_html__( 'Hide Comment Link from Full Post', 'gridlane' ), 'section' => 'gridlane_section_post', 'settings' => 'gridlane_options[hide_comments_link]', 'type' => 'checkbox', ) );

    $wp_customize->add_setting( 'gridlane_options[show_post_edit]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'gridlane_sanitize_checkbox', ) );

    $wp_customize->add_control( 'gridlane_show_post_edit_control', array( 'label' => esc_html__( 'Show Post Edit Link', 'gridlane' ), 'section' => 'gridlane_section_post', 'settings' => 'gridlane_options[show_post_edit]', 'type' => 'checkbox', ) );

    $wp_customize->add_setting( 'gridlane_options[hide_post_tags]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'gridlane_sanitize_checkbox', ) );

    $wp_customize->add_control( 'gridlane_hide_post_tags_control', array( 'label' => esc_html__( 'Hide Post Tags from Full Post', 'gridlane' ), 'section' => 'gridlane_section_post', 'settings' => 'gridlane_options[hide_post_tags]', 'type' => 'checkbox', ) );

    $wp_customize->add_setting( 'gridlane_options[hide_author_bio_box]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'gridlane_sanitize_checkbox', ) );

    $wp_customize->add_control( 'gridlane_hide_author_bio_box_control', array( 'label' => esc_html__( 'Hide Author Bio Box', 'gridlane' ), 'section' => 'gridlane_section_post', 'settings' => 'gridlane_options[hide_author_bio_box]', 'type' => 'checkbox', ) );

}