<?php
/**
* Footer options
*
* @package GridLane WordPress Theme
* @copyright Copyright (C) 2022 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/

function gridlane_footer_options($wp_customize) {

    $wp_customize->add_section( 'gridlane_section_footer', array( 'title' => esc_html__( 'Footer Options', 'gridlane' ), 'panel' => 'gridlane_main_options_panel', 'priority' => 280 ) );

    $wp_customize->add_setting( 'gridlane_options[footer_text]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'gridlane_sanitize_html', ) );

    $wp_customize->add_control( 'gridlane_footer_text_control', array( 'label' => esc_html__( 'Footer copyright notice', 'gridlane' ), 'section' => 'gridlane_section_footer', 'settings' => 'gridlane_options[footer_text]', 'type' => 'text', ) );

    $wp_customize->add_setting( 'gridlane_options[hide_footer_widgets]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'gridlane_sanitize_checkbox', ) );

    $wp_customize->add_control( 'gridlane_hide_footer_widgets_control', array( 'label' => esc_html__( 'Hide Footer Widgets', 'gridlane' ), 'section' => 'gridlane_section_footer', 'settings' => 'gridlane_options[hide_footer_widgets]', 'type' => 'checkbox', ) );

    $wp_customize->add_setting( 'gridlane_options[disable_backtotop]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'gridlane_sanitize_checkbox', ) );

    $wp_customize->add_control( 'gridlane_disable_backtotop_control', array( 'label' => esc_html__( 'Disable Back to Top Button', 'gridlane' ), 'section' => 'gridlane_section_footer', 'settings' => 'gridlane_options[disable_backtotop]', 'type' => 'checkbox', ) );

}