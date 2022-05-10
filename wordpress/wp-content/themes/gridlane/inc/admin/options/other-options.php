<?php
/**
* Other options
*
* @package GridLane WordPress Theme
* @copyright Copyright (C) 2022 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/

function gridlane_other_options($wp_customize) {

    $wp_customize->add_section( 'gridlane_section_other_options', array( 'title' => esc_html__( 'Other Options', 'gridlane' ), 'panel' => 'gridlane_main_options_panel', 'priority' => 600 ) );

    $wp_customize->add_setting( 'gridlane_options[enable_widgets_block_editor]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'gridlane_sanitize_checkbox', ) );

    $wp_customize->add_control( 'gridlane_enable_widgets_block_editor_control', array( 'label' => esc_html__( 'Enable Gutenberg Widget Block Editor', 'gridlane' ), 'section' => 'gridlane_section_other_options', 'settings' => 'gridlane_options[enable_widgets_block_editor]', 'type' => 'checkbox', ) );

    $wp_customize->add_setting( 'gridlane_options[disable_fitvids]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'gridlane_sanitize_checkbox', ) );

    $wp_customize->add_control( 'gridlane_disable_fitvids_control', array( 'label' => esc_html__( 'Disable FitVids.JS', 'gridlane' ), 'description' => esc_html__( 'You can disable fitvids.js script if you are not using videos on your website or if you do not want fluid width videos in your post content.', 'gridlane' ), 'section' => 'gridlane_section_other_options', 'settings' => 'gridlane_options[disable_fitvids]', 'type' => 'checkbox', ) );

}