<?php
/**
* The file for displaying the search form
*
* @package GridLane WordPress Theme
* @copyright Copyright (C) 2022 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/
?>

<form role="search" method="get" class="gridlane-search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
<label>
    <span class="gridlane-sr-only"><?php echo esc_html_x( 'Search for:', 'label', 'gridlane' ); ?></span>
    <input type="search" class="gridlane-search-field" placeholder="<?php echo esc_attr_x( 'Search &hellip;', 'placeholder', 'gridlane' ); ?>" value="<?php echo get_search_query(); ?>" name="s" />
</label>
<input type="submit" class="gridlane-search-submit" value="<?php echo esc_attr_x( '&#xf002;', 'submit button', 'gridlane' ); ?>" />
</form>