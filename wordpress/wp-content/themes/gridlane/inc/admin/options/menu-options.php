<?php
/**
* Menu options
*
* @package GridLane WordPress Theme
* @copyright Copyright (C) 2022 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/

function gridlane_menu_options($wp_customize) {

    $wp_customize->add_section( 'gridlane_section_menu_options', array( 'title' => esc_html__( 'Menu Options', 'gridlane' ), 'panel' => 'gridlane_main_options_panel', 'priority' => 100 ) );

   $wp_customize->add_setting( 'gridlane_options[primary_menu_text]', array( 'default' => esc_html__( 'Menu', 'gridlane' ), 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'sanitize_text_field', ) );

    $wp_customize->add_control( 'gridlane_primary_menu_text_control', array( 'label' => esc_html__( 'Primary Menu Mobile Text', 'gridlane' ), 'section' => 'gridlane_section_menu_options', 'settings' => 'gridlane_options[primary_menu_text]', 'type' => 'text', ) );

    $wp_customize->add_setting( 'gridlane_options[disable_primary_menu]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'gridlane_sanitize_checkbox', ) );

    $wp_customize->add_control( 'gridlane_disable_primary_menu_control', array( 'label' => esc_html__( 'Disable Primary Menu', 'gridlane' ), 'section' => 'gridlane_section_menu_options', 'settings' => 'gridlane_options[disable_primary_menu]', 'type' => 'checkbox', ) );

    $wp_customize->add_setting( 'gridlane_options[hide_header_search_button]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'gridlane_sanitize_checkbox', ) );

    $wp_customize->add_control( 'gridlane_hide_header_search_button_control', array( 'label' => esc_html__( 'Hide Header Search Button', 'gridlane' ), 'description' => esc_html__('This option has no effect if you checked the option: "Disable Primary Menu"', 'gridlane'), 'section' => 'gridlane_section_menu_options', 'settings' => 'gridlane_options[hide_header_search_button]', 'type' => 'checkbox', ) );


    $wp_customize->add_setting( 'gridlane_options[secondary_menu_text]', array( 'default' => esc_html__( 'Menu', 'gridlane' ), 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'sanitize_text_field', ) );

    $wp_customize->add_control( 'gridlane_secondary_menu_text_control', array( 'label' => esc_html__( 'Secondary Menu Mobile Text', 'gridlane' ), 'section' => 'gridlane_section_menu_options', 'settings' => 'gridlane_options[secondary_menu_text]', 'type' => 'text', ) );

    $wp_customize->add_setting( 'gridlane_options[disable_secondary_menu]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'gridlane_sanitize_checkbox', ) );

    $wp_customize->add_control( 'gridlane_disable_secondary_menu_control', array( 'label' => esc_html__( 'Disable Secondary Menu', 'gridlane' ), 'section' => 'gridlane_section_menu_options', 'settings' => 'gridlane_options[disable_secondary_menu]', 'type' => 'checkbox', ) );

    $wp_customize->add_setting( 'gridlane_options[no_center_secondary_menu]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'gridlane_sanitize_checkbox', ) );

    $wp_customize->add_control( 'gridlane_no_center_secondary_menu_control', array( 'label' => esc_html__( 'Do not Center Secondary Menu', 'gridlane' ), 'section' => 'gridlane_section_menu_options', 'settings' => 'gridlane_options[no_center_secondary_menu]', 'type' => 'checkbox', ) );

}