<?php
/**
* Getting started options
*
* @package GridLane WordPress Theme
* @copyright Copyright (C) 2022 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/

function gridlane_getting_started($wp_customize) {

    $wp_customize->add_section( 'gridlane_section_getting_started', array( 'title' => esc_html__( 'Getting Started', 'gridlane' ), 'description' => esc_html__( 'Thanks for your interest in GridLane! If you have any questions or run into any trouble, please visit us the following links. We will get you fixed up!', 'gridlane' ), 'panel' => 'gridlane_main_options_panel', 'priority' => 5, ) );

    $wp_customize->add_setting( 'gridlane_options[documentation]', array( 'default' => '', 'sanitize_callback' => '__return_false', ) );

    $wp_customize->add_control( new GridLane_Customize_Button_Control( $wp_customize, 'gridlane_documentation_control', array( 'label' => esc_html__( 'Documentation', 'gridlane' ), 'section' => 'gridlane_section_getting_started', 'settings' => 'gridlane_options[documentation]', 'type' => 'gridlane-button', 'button_tag' => 'a', 'button_class' => 'button button-primary', 'button_href' => esc_url( 'https://themesdna.com/gridlane-wordpress-theme/' ), 'button_target' => '_blank', ) ) );

    $wp_customize->add_setting( 'gridlane_options[contact]', array( 'default' => '', 'sanitize_callback' => '__return_false', ) );

    $wp_customize->add_control( new GridLane_Customize_Button_Control( $wp_customize, 'gridlane_contact_control', array( 'label' => esc_html__( 'Contact Us', 'gridlane' ), 'section' => 'gridlane_section_getting_started', 'settings' => 'gridlane_options[contact]', 'type' => 'gridlane-button', 'button_tag' => 'a', 'button_class' => 'button button-primary', 'button_href' => esc_url( 'https://themesdna.com/contact/' ), 'button_target' => '_blank', ) ) );

}