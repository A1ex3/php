<?php
/**
* Sanitize callback functions
*
* @package GridLane WordPress Theme
* @copyright Copyright (C) 2022 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/

function gridlane_sanitize_checkbox( $input ) {
    return ( ( isset( $input ) && ( true == $input ) ) ? true : false );
}

function gridlane_sanitize_html( $input ) {
    return wp_kses_post( force_balance_tags( $input ) );
}

function gridlane_sanitize_yes_no( $input, $setting ) {
    $valid = array('yes','no');
    if ( in_array( $input, $valid ) ) {
        return $input;
    } else {
        return $setting->default;
    }
}

function gridlane_sanitize_post_summaries_style( $input, $setting ) {
    $valid = array('grid','non-grid');
    if ( in_array( $input, $valid ) ) {
        return $input;
    } else {
        return $setting->default;
    }
}

function gridlane_sanitize_posts_navigation_type( $input, $setting ) {
    $valid = array('normalnavi','numberednavi');
    if ( in_array( $input, $valid ) ) {
        return $input;
    } else {
        return $setting->default;
    }
}

function gridlane_sanitize_email( $input, $setting ) {
    if ( '' != $input && is_email( $input ) ) {
        $input = sanitize_email( $input );
        return $input;
    } else {
        return $setting->default;
    }
}

function gridlane_sanitize_logo_location( $input, $setting ) {
    $valid = array('beside-title','above-title');
    if ( in_array( $input, $valid ) ) {
        return $input;
    } else {
        return $setting->default;
    }
}

function gridlane_sanitize_read_more_length( $input, $setting ) {
    $input = absint( $input ); // Force the value into non-negative integer.
    return ( 0 < $input ) ? $input : $setting->default;
}

function gridlane_sanitize_positive_integer( $input, $setting ) {
    $input = absint( $input ); // Force the value into non-negative integer.
    return ( 0 < $input ) ? $input : $setting->default;
}

function gridlane_sanitize_positive_float( $input, $setting ) {
    $input = (float) $input;
    return ( 0 < $input ) ? $input : $setting->default;
}

function gridlane_sanitize_include_posts( $input, $setting ) {
    $include_posts_regex = '/^\d+(?:,\d+)*$/';
    $input = ( preg_match($include_posts_regex, $input) ) ? sanitize_text_field( $input ) : $setting->default;
    return $input;
}

function gridlane_sanitize_exclude_posts( $input, $setting ) {
    $exclude_posts_regex = '/^\d+(?:,\d+)*$/';
    $input = ( preg_match($exclude_posts_regex, $input) ) ? sanitize_text_field( $input ) : $setting->default;
    return $input;
}