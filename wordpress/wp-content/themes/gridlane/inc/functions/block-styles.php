<?php
/**
* Block Styles
*
* @package GridLane WordPress Theme
* @copyright Copyright (C) 2022 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/

/**
 * Register Custom Block Styles
 */
if ( function_exists( 'register_block_style' ) ) :
    function gridlane_register_block_styles() {

        /**
         * Register block style
         */
        register_block_style( 'core/button', array( 'name' => 'gridlane-button', 'label' => __( 'GridLane Button', 'gridlane' ), 'is_default' => true, 'style_handle' => 'gridlane-maincss', ) ); // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style

    }
    add_action( 'init', 'gridlane_register_block_styles' );
endif;