<?php
/**
* Posts Summaries options
*
* @package GridLane WordPress Theme
* @copyright Copyright (C) 2022 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/

function gridlane_posts_grid_options($wp_customize) {

    $wp_customize->add_section( 'gridlane_section_posts_summaries', array( 'title' => esc_html__( 'Posts Summaries Options', 'gridlane' ), 'panel' => 'gridlane_main_options_panel', 'priority' => 160 ) );

    $wp_customize->add_setting( 'gridlane_options[hide_posts_heading]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'gridlane_sanitize_checkbox', ) );

    $wp_customize->add_control( 'gridlane_hide_posts_heading_control', array( 'label' => esc_html__( 'Hide HomePage Posts Heading', 'gridlane' ), 'section' => 'gridlane_section_posts_summaries', 'settings' => 'gridlane_options[hide_posts_heading]', 'type' => 'checkbox', ) );

    $wp_customize->add_setting( 'gridlane_options[posts_heading]', array( 'default' => esc_html__( 'Recent Posts', 'gridlane' ), 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'sanitize_text_field', ) );

    $wp_customize->add_control( 'gridlane_posts_heading_control', array( 'label' => esc_html__( 'HomePage Posts Heading', 'gridlane' ), 'section' => 'gridlane_section_posts_summaries', 'settings' => 'gridlane_options[posts_heading]', 'type' => 'text', ) );

    $wp_customize->add_setting( 'gridlane_options[post_summaries_style]', array( 'default' => 'grid', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'gridlane_sanitize_post_summaries_style' ) );

    $wp_customize->add_control( 'gridlane_post_summaries_style_control', array( 'label' => esc_html__( 'Post Summaries Style', 'gridlane' ), 'description' => esc_html__('Select the post summaries style for non-singular pages.', 'gridlane'), 'section' => 'gridlane_section_posts_summaries', 'settings' => 'gridlane_options[post_summaries_style]', 'type' => 'select', 'choices' => array( 'grid' => esc_html__('Grid Posts', 'gridlane'), 'non-grid' => esc_html__('Non-Grid Posts', 'gridlane') ) ) );

    $wp_customize->add_setting( 'gridlane_options[hide_thumbnail_home]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'gridlane_sanitize_checkbox', ) );

    $wp_customize->add_control( 'gridlane_hide_thumbnail_home_control', array( 'label' => esc_html__( 'Hide Featured Images from Grid | Non-Grid Posts Summaries', 'gridlane' ), 'section' => 'gridlane_section_posts_summaries', 'settings' => 'gridlane_options[hide_thumbnail_home]', 'type' => 'checkbox', ) );

    $wp_customize->add_setting( 'gridlane_options[hide_default_thumbnail]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'gridlane_sanitize_checkbox', ) );

    $wp_customize->add_control( 'gridlane_hide_default_thumbnail_control', array( 'label' => esc_html__( 'Hide Default Featured Image from Grid Posts Summaries', 'gridlane' ), 'description' => esc_html__( 'The default thumbnail image is shown when there is no featured image is set.', 'gridlane' ), 'section' => 'gridlane_section_posts_summaries', 'settings' => 'gridlane_options[hide_default_thumbnail]', 'type' => 'checkbox', ) );

    $wp_customize->add_setting( 'gridlane_options[featured_nongrid_media_under_post_title]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'gridlane_sanitize_checkbox', ) );

    $wp_customize->add_control( 'gridlane_featured_nongrid_media_under_post_title_control', array( 'label' => esc_html__( 'Move Featured Images to the Bottom of Post Titles on Non-Grid Post Summaries', 'gridlane' ), 'section' => 'gridlane_section_posts_summaries', 'settings' => 'gridlane_options[featured_nongrid_media_under_post_title]', 'type' => 'checkbox', ) );

    $wp_customize->add_setting( 'gridlane_options[thumbnail_link_home]', array( 'default' => 'yes', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'gridlane_sanitize_yes_no' ) );

    $wp_customize->add_control( 'gridlane_thumbnail_link_home_control', array( 'label' => esc_html__( 'Featured Images Links', 'gridlane' ), 'description' => esc_html__('Do you want thumbnails in grid | non-grid posts summaries to be linked to their posts?', 'gridlane'), 'section' => 'gridlane_section_posts_summaries', 'settings' => 'gridlane_options[thumbnail_link_home]', 'type' => 'select', 'choices' => array( 'yes' => esc_html__('Yes', 'gridlane'), 'no' => esc_html__('No', 'gridlane') ) ) );

    $wp_customize->add_setting( 'gridlane_options[hide_post_header_home]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'gridlane_sanitize_checkbox', ) );

    $wp_customize->add_control( 'gridlane_hide_post_header_home_control', array( 'label' => esc_html__( 'Hide Post Headers from Non-Grid Posts Summaries', 'gridlane' ), 'description' => esc_html__('If you check this option, it will hide both post titles and post header meta data from non-grid posts summaries.', 'gridlane'), 'section' => 'gridlane_section_posts_summaries', 'settings' => 'gridlane_options[hide_post_header_home]', 'type' => 'checkbox', ) );

    $wp_customize->add_setting( 'gridlane_options[hide_post_title_home]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'gridlane_sanitize_checkbox', ) );

    $wp_customize->add_control( 'gridlane_hide_post_title_home_control', array( 'label' => esc_html__( 'Hide Post Titles from Grid | Non-Grid Posts Summaries', 'gridlane' ), 'section' => 'gridlane_section_posts_summaries', 'settings' => 'gridlane_options[hide_post_title_home]', 'type' => 'checkbox', ) );

    $wp_customize->add_setting( 'gridlane_options[remove_post_title_link_home]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'gridlane_sanitize_checkbox', ) );

    $wp_customize->add_control( 'gridlane_remove_post_title_link_home_control', array( 'label' => esc_html__( 'Remove Links of Post Titles from Grid | Non-Grid Posts Summaries', 'gridlane' ), 'section' => 'gridlane_section_posts_summaries', 'settings' => 'gridlane_options[remove_post_title_link_home]', 'type' => 'checkbox', ) );

    $wp_customize->add_setting( 'gridlane_options[show_post_author_home]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'gridlane_sanitize_checkbox', ) );

    $wp_customize->add_control( 'gridlane_show_post_author_home_control', array( 'label' => esc_html__( 'Show Post Author Names on Grid | Non-Grid Posts Summaries', 'gridlane' ), 'section' => 'gridlane_section_posts_summaries', 'settings' => 'gridlane_options[show_post_author_home]', 'type' => 'checkbox', ) );

    $wp_customize->add_setting( 'gridlane_options[hide_posted_date_home]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'gridlane_sanitize_checkbox', ) );

    $wp_customize->add_control( 'gridlane_hide_posted_date_home_control', array( 'label' => esc_html__( 'Hide Posted Dates from Grid | Non-Grid Posts Summaries', 'gridlane' ), 'section' => 'gridlane_section_posts_summaries', 'settings' => 'gridlane_options[hide_posted_date_home]', 'type' => 'checkbox', ) );

    $wp_customize->add_setting( 'gridlane_options[show_comments_link_home]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'gridlane_sanitize_checkbox', ) );

    $wp_customize->add_control( 'gridlane_show_comments_link_home_control', array( 'label' => esc_html__( 'Show Comment Links on Grid | Non-Grid Posts Summaries', 'gridlane' ), 'section' => 'gridlane_section_posts_summaries', 'settings' => 'gridlane_options[show_comments_link_home]', 'type' => 'checkbox', ) );

    $wp_customize->add_setting( 'gridlane_options[hide_post_categories_home]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'gridlane_sanitize_checkbox', ) );

    $wp_customize->add_control( 'gridlane_hide_post_categories_home_control', array( 'label' => esc_html__( 'Hide Post Categories from Grid | Non-Grid Posts Summaries', 'gridlane' ), 'section' => 'gridlane_section_posts_summaries', 'settings' => 'gridlane_options[hide_post_categories_home]', 'type' => 'checkbox', ) );

    $wp_customize->add_setting( 'gridlane_options[hide_post_tags_home]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'gridlane_sanitize_checkbox', ) );

    $wp_customize->add_control( 'gridlane_hide_post_tags_home_control', array( 'label' => esc_html__( 'Hide Post Tags from Non-Grid Posts Summaries', 'gridlane' ), 'section' => 'gridlane_section_posts_summaries', 'settings' => 'gridlane_options[hide_post_tags_home]', 'type' => 'checkbox', ) );

    $wp_customize->add_setting( 'gridlane_options[hide_post_snippet]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'gridlane_sanitize_checkbox', ) );

    $wp_customize->add_control( 'gridlane_hide_post_snippet_control', array( 'label' => esc_html__( 'Hide Post Snippets on Grid Posts Summaries', 'gridlane' ), 'section' => 'gridlane_section_posts_summaries', 'settings' => 'gridlane_options[hide_post_snippet]', 'type' => 'checkbox', ) );

    $wp_customize->add_setting( 'gridlane_options[read_more_length]', array( 'default' => 17, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'gridlane_sanitize_read_more_length' ) );

    $wp_customize->add_control( 'gridlane_read_more_length_control', array( 'label' => esc_html__( 'Post Snippets Length of Grid Posts Summaries', 'gridlane' ), 'description' => esc_html__('Enter the number of words need to display in grid post summaries. Default is 17 words.', 'gridlane'), 'section' => 'gridlane_section_posts_summaries', 'settings' => 'gridlane_options[read_more_length]', 'type' => 'text' ) );

}