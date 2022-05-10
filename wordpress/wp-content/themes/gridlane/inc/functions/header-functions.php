<?php
/**
* Header Functions
*
* @package GridLane WordPress Theme
* @copyright Copyright (C) 2022 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function gridlane_pingback_header() {
    if ( is_singular() && pings_open() ) {
        echo '<link rel="pingback" href="', esc_url( get_bloginfo( 'pingback_url' ) ), '">';
    }
}
add_action( 'wp_head', 'gridlane_pingback_header' );

// Get custom-logo URL
function gridlane_custom_logo() {
    if ( ! has_custom_logo() ) {return;}
    $gridlane_custom_logo_id = get_theme_mod( 'custom_logo' );
    $gridlane_logo = wp_get_attachment_image_src( $gridlane_custom_logo_id , 'full' );
    $gridlane_logo_src = $gridlane_logo[0];
    return apply_filters( 'gridlane_custom_logo', $gridlane_logo_src );
}

// Site Title
function gridlane_site_title() {
    if ( is_front_page() && is_home() ) { ?>
            <h1 class="gridlane-site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
            <?php if ( !(gridlane_get_option('hide_tagline')) ) { ?><p class="gridlane-site-description"><?php bloginfo( 'description' ); ?></p><?php } ?>
    <?php } elseif ( is_home() ) { ?>
            <h1 class="gridlane-site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
            <?php if ( !(gridlane_get_option('hide_tagline')) ) { ?><p class="gridlane-site-description"><?php bloginfo( 'description' ); ?></p><?php } ?>
    <?php } elseif ( is_singular() ) { ?>
            <p class="gridlane-site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
            <?php if ( !(gridlane_get_option('hide_tagline')) ) { ?><p class="gridlane-site-description"><?php bloginfo( 'description' ); ?></p><?php } ?>
    <?php } elseif ( is_category() ) { ?>
            <p class="gridlane-site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
            <?php if ( !(gridlane_get_option('hide_tagline')) ) { ?><p class="gridlane-site-description"><?php bloginfo( 'description' ); ?></p><?php } ?>
    <?php } elseif ( is_tag() ) { ?>
            <p class="gridlane-site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
            <?php if ( !(gridlane_get_option('hide_tagline')) ) { ?><p class="gridlane-site-description"><?php bloginfo( 'description' ); ?></p><?php } ?>
    <?php } elseif ( is_author() ) { ?>
            <p class="gridlane-site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
            <?php if ( !(gridlane_get_option('hide_tagline')) ) { ?><p class="gridlane-site-description"><?php bloginfo( 'description' ); ?></p><?php } ?>
    <?php } elseif ( is_archive() && !is_category() && !is_tag() && !is_author() ) { ?>
            <p class="gridlane-site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
            <?php if ( !(gridlane_get_option('hide_tagline')) ) { ?><p class="gridlane-site-description"><?php bloginfo( 'description' ); ?></p><?php } ?>
    <?php } elseif ( is_search() ) { ?>
            <p class="gridlane-site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
            <?php if ( !(gridlane_get_option('hide_tagline')) ) { ?><p class="gridlane-site-description"><?php bloginfo( 'description' ); ?></p><?php } ?>
    <?php } elseif ( is_404() ) { ?>
            <p class="gridlane-site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
            <?php if ( !(gridlane_get_option('hide_tagline')) ) { ?><p class="gridlane-site-description"><?php bloginfo( 'description' ); ?></p><?php } ?>
    <?php } else { ?>
            <h1 class="gridlane-site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
            <?php if ( !(gridlane_get_option('hide_tagline')) ) { ?><p class="gridlane-site-description"><?php bloginfo( 'description' ); ?></p><?php } ?>
    <?php }
}

function gridlane_header_image_destination() {
    $url = home_url( '/' );

    if ( gridlane_get_option('header_image_destination') ) {
        $url = gridlane_get_option('header_image_destination');
    }

    return apply_filters( 'gridlane_header_image_destination', $url );
}

function gridlane_header_image_markup() {
    if ( get_header_image() ) {
        if ( gridlane_get_option('remove_header_image_link') ) {
            the_header_image_tag( array( 'class' => 'gridlane-header-img' ) );
        } else { ?>
            <a href="<?php echo esc_url( gridlane_header_image_destination() ); ?>" rel="home" class="gridlane-header-img-link"><?php the_header_image_tag( array( 'class' => 'gridlane-header-img' ) ); ?></a>
        <?php }
    }
}

function gridlane_header_image_details() {
    $header_image_custom_title = '';
    if ( gridlane_get_option('header_image_custom_title') ) {
        $header_image_custom_title = gridlane_get_option('header_image_custom_title');
    }

    $header_image_custom_description = '';
    if ( gridlane_get_option('header_image_custom_description') ) {
        $header_image_custom_description = gridlane_get_option('header_image_custom_description');
    }

    if ( !(gridlane_get_option('hide_header_image_details')) ) {
    if ( gridlane_get_option('header_image_custom_text') ) {
        if ( $header_image_custom_title || $header_image_custom_description ) { ?>
            <div class="gridlane-header-image-info">
            <div class="gridlane-header-image-info-inside">
                <?php if ( !(gridlane_get_option('hide_header_image_title')) ) { ?><?php if ( $header_image_custom_title ) { ?><p class="gridlane-header-image-site-title gridlane-header-image-block"><?php echo wp_kses_post( force_balance_tags( do_shortcode($header_image_custom_title) ) ); ?></p><?php } ?><?php } ?>
                <?php if ( !(gridlane_get_option('hide_header_image_description')) ) { ?><?php if ( $header_image_custom_description ) { ?><p class="gridlane-header-image-site-description gridlane-header-image-block"><?php echo wp_kses_post( force_balance_tags( do_shortcode($header_image_custom_description) ) ); ?></p><?php } ?><?php } ?>
            </div>
            </div>
        <?php }
    } else { ?>
        <div class="gridlane-header-image-info">
        <div class="gridlane-header-image-info-inside">
            <?php if ( !(gridlane_get_option('hide_header_image_title')) ) { ?><p class="gridlane-header-image-site-title gridlane-header-image-block"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p><?php } ?>
            <?php if ( !(gridlane_get_option('hide_header_image_description')) ) { ?><p class="gridlane-header-image-site-description gridlane-header-image-block"><?php bloginfo( 'description' ); ?></p><?php } ?>
        </div>
        </div>
    <?php }
    }
}

function gridlane_header_image_wrapper() { ?>
    <div class="gridlane-header-image gridlane-clearfix">
    <?php gridlane_header_image_markup(); ?>
    <?php gridlane_header_image_details(); ?>
    </div>
<?php
}

function gridlane_header_image() {
    if ( gridlane_get_option('hide_header_image') ) { return; }
    if ( get_header_image() ) {
        gridlane_header_image_wrapper();
    }
}