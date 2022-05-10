<?php
/**
* Upgrade to pro options
*
* @package GridLane WordPress Theme
* @copyright Copyright (C) 2022 ThemesDNA
* @license licennse URI, for example : http://www.gnu.org/licenses/gpl-2.0.html
* @author ThemesDNA <themesdna@gmail.com>
*/

function gridlane_upgrade_to_pro($wp_customize) {

    $wp_customize->add_section( 'gridlane_section_upgrade', array( 'title' => esc_html__( 'Upgrade to Pro Version', 'gridlane' ), 'priority' => 400 ) );
    
    $wp_customize->add_setting( 'gridlane_options[upgrade_text]', array( 'default' => '', 'sanitize_callback' => '__return_false', ) );
    
    $wp_customize->add_control( new GridLane_Customize_Static_Text_Control( $wp_customize, 'gridlane_upgrade_text_control', array(
        'label'       => esc_html__( 'GridLane Pro', 'gridlane' ),
        'section'     => 'gridlane_section_upgrade',
        'settings' => 'gridlane_options[upgrade_text]',
        'description' => esc_html__( 'Do you enjoy GridLane? Upgrade to GridLane Pro now and get:', 'gridlane' ).
            '<ul class="gridlane-customizer-pro-features">' .
                '<li><i class="fas fa-check" aria-hidden="true"></i> ' . esc_html__( 'Color Options', 'gridlane' ) . '</li>' .
                '<li><i class="fas fa-check" aria-hidden="true"></i> ' . esc_html__( 'Font Options', 'gridlane' ) . '</li>' .
                '<li><i class="fas fa-check" aria-hidden="true"></i> ' . esc_html__( '1/2/3/4/5/6/7/8/9/10 Columns Options for Posts Grids', 'gridlane' ) . '</li>' .
                '<li><i class="fas fa-check" aria-hidden="true"></i> ' . esc_html__( '10+ Thumbnail Sizes Options for Posts Grids', 'gridlane' ) . '</li>' .
                '<li><i class="fas fa-check" aria-hidden="true"></i> ' . esc_html__( 'Custom Thumbnail Size Options for Posts Grids', 'gridlane' ) . '</li>' .
                '<li><i class="fas fa-check" aria-hidden="true"></i> ' . esc_html__( 'Switch between Masonry Grid (JavaScript based) and CSS only Grid', 'gridlane' ) . '</li>' .
                '<li><i class="fas fa-check" aria-hidden="true"></i> ' . esc_html__( 'Display Ads/Custom Contents between Posts in the Grid', 'gridlane' ) . '</li>' .
                '<li><i class="fas fa-check" aria-hidden="true"></i> ' . esc_html__( 'Switch between Boxed or Full Layout Type', 'gridlane' ) . '</li>' .
                '<li><i class="fas fa-check" aria-hidden="true"></i> ' . esc_html__( '10+ Layout Styles for Posts/Pages', 'gridlane' ) . '</li>' .
                '<li><i class="fas fa-check" aria-hidden="true"></i> ' . esc_html__( '10+ Layout Styles for Non-Singular Pages', 'gridlane' ) . '</li>' .
                '<li><i class="fas fa-check" aria-hidden="true"></i> ' . esc_html__( 'Width Change Options for Full Website/Main Content/Left Sidebar/Right Sidebar', 'gridlane' ) . '</li>' .
                '<li><i class="fas fa-check" aria-hidden="true"></i> ' . esc_html__( '10+ Custom Page Templates', 'gridlane' ) . '</li>' .
                '<li><i class="fas fa-check" aria-hidden="true"></i> ' . esc_html__( '10+ Custom Post Templates', 'gridlane' ) . '</li>' .
                '<li><i class="fas fa-check" aria-hidden="true"></i> ' . esc_html__( '3 Header Layouts with Width options - (Logo + Primary Menu + Social Buttons) / (Logo + Header Banner) / (Full Width Header)', 'gridlane' ) . '</li>' .
                '<li><i class="fas fa-check" aria-hidden="true"></i> ' . esc_html__( 'Footer with Layout Options (1/2/3/4/5/6 columns)', 'gridlane' ) . '</li>' .
                '<li><i class="fas fa-check" aria-hidden="true"></i> ' . esc_html__( 'Ability to Change Website Width/Layout Type/Layout Style/Header Style/Footer Style of any Post/Page', 'gridlane' ) . '</li>' .
                '<li><i class="fas fa-check" aria-hidden="true"></i> ' . esc_html__( 'Capability to Add Different Header Images for Each Post/Page with Unique Link, Title and Description', 'gridlane' ) . '</li>' .
                '<li><i class="fas fa-check" aria-hidden="true"></i> ' . esc_html__( 'Grid Featured Posts Widget (Recent/Categories/Tags/PostIDs based) - with capability to display posts according to Likes/Views/Comments/Dates/... and there are many options', 'gridlane' ) . '</li>' .
                '<li><i class="fas fa-check" aria-hidden="true"></i> ' . esc_html__( 'List Featured Posts Widget (Recent/Categories/Tags/PostIDs based) - with capability to display posts according to Likes/Views/Comments/Dates/... and there are many options', 'gridlane' ) . '</li>' .
                '<li><i class="fas fa-check" aria-hidden="true"></i> ' . esc_html__( 'Tabbed Widget (Recent/Categories/Tags/PostIDs based) - with capability to display posts according to Likes/Views/Comments/Dates/... and there are many options.', 'gridlane' ) . '</li>' .
                '<li><i class="fas fa-check" aria-hidden="true"></i> ' . esc_html__( 'About and Social Widget - 60+ Social Buttons', 'gridlane' ) . '</li>' .
                '<li><i class="fas fa-check" aria-hidden="true"></i> ' . esc_html__( 'News Ticker (Recent/Categories/Tags/PostIDs based) - It can display posts according to Likes/Views/Comments/Dates/... and there are many options.', 'gridlane' ) . '</li>' .
                '<li><i class="fas fa-check" aria-hidden="true"></i> ' . esc_html__( 'Settings Panel to Control Options in Each Post', 'gridlane' ) . '</li>' .
                '<li><i class="fas fa-check" aria-hidden="true"></i> ' . esc_html__( 'Settings Panel to Control Options in Each Page', 'gridlane' ) . '</li>' .
                '<li><i class="fas fa-check" aria-hidden="true"></i> ' . esc_html__( 'Built-in Posts Views Counter', 'gridlane' ) . '</li>' .
                '<li><i class="fas fa-check" aria-hidden="true"></i> ' . esc_html__( 'Built-in Posts Likes System', 'gridlane' ) . '</li>' .
                '<li><i class="fas fa-check" aria-hidden="true"></i> ' . esc_html__( 'Built-in Infinite Scroll and Load More Button', 'gridlane' ) . '</li>' .
                '<li><i class="fas fa-check" aria-hidden="true"></i> ' . esc_html__( 'Post Share Buttons Styles with Options - 25+ Social Networks are Supported', 'gridlane' ) . '</li>' .
                '<li><i class="fas fa-check" aria-hidden="true"></i> ' . esc_html__( 'Related Posts (Categories/Tags/Author/PostIDs based) with Many Options - For both single posts and post summaries', 'gridlane' ) . '</li>' .
                '<li><i class="fas fa-check" aria-hidden="true"></i> ' . esc_html__( 'Sticky Header/Sticky Sidebars with enable/disable capability', 'gridlane' ) . '</li>' .
                '<li><i class="fas fa-check" aria-hidden="true"></i> ' . esc_html__( 'Author Bio Box with Social Buttons - 60+ Social Buttons', 'gridlane' ) . '</li>' .
                '<li><i class="fas fa-check" aria-hidden="true"></i> ' . esc_html__( 'Ability to Enable/Disable Mobile View from Primary and Secondary Menus', 'gridlane' ) . '</li>' .
                '<li><i class="fas fa-check" aria-hidden="true"></i> ' . esc_html__( 'Post Navigation with Thumbnails', 'gridlane' ) . '</li>' .
                '<li><i class="fas fa-check" aria-hidden="true"></i> ' . esc_html__( 'Ability to add Ads under Post Title and under Post Content', 'gridlane' ) . '</li>' .
                '<li><i class="fas fa-check" aria-hidden="true"></i> ' . esc_html__( 'Ability to Disable Google Fonts - for faster loading', 'gridlane' ) . '</li>' .
                '<li><i class="fas fa-check" aria-hidden="true"></i> ' . esc_html__( 'More Widget Areas', 'gridlane' ) . '</li>' .
                '<li><i class="fas fa-check" aria-hidden="true"></i> ' . esc_html__( 'Built-in Contact Form', 'gridlane' ) . '</li>' .
                '<li><i class="fas fa-check" aria-hidden="true"></i> ' . esc_html__( 'WooCommerce Compatible', 'gridlane' ) . '</li>' .
                '<li><i class="fas fa-check" aria-hidden="true"></i> ' . esc_html__( 'Yoast SEO Breadcrumbs Support', 'gridlane' ) . '</li>' .
                '<li><i class="fas fa-check" aria-hidden="true"></i> ' . esc_html__( 'Full RTL Language Support', 'gridlane' ) . '</li>' .
                '<li><i class="fas fa-check" aria-hidden="true"></i> ' . esc_html__( 'Search Engine Optimized', 'gridlane' ) . '</li>' .
                '<li><i class="fas fa-check" aria-hidden="true"></i> ' . esc_html__( 'Random Posts Button in Header', 'gridlane' ) . '</li>' .
                '<li><i class="fas fa-check" aria-hidden="true"></i> ' . esc_html__( 'Many Useful Customizer Theme options', 'gridlane' ) . '</li>' .
                '<li><i class="fas fa-check" aria-hidden="true"></i> ' . esc_html__( 'More Features...', 'gridlane' ) . '</li>' .
            '</ul>'.
            '<strong><a href="'.GRIDLANE_PROURL.'" class="button button-primary" target="_blank"><i class="fas fa-shopping-cart" aria-hidden="true"></i> ' . esc_html__( 'Upgrade To GridLane PRO', 'gridlane' ) . '</a></strong>'
    ) ) );

}