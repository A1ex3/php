<?php
/*
	Theme Setup
*/
function lupe_setup() {
    if ( function_exists('add_theme_support') ) {
        // Add Thumbnail Theme Support
        add_theme_support('post-thumbnails');
        add_image_size('lupe_large', 700, '', true); // Large Thumbnail
        add_image_size('lupe_medium', 250, '', true); // Medium Thumbnail
        add_image_size('lupe_small', 120, '', true); // Small Thumbnail

        // Enables post and comment RSS feed links to head
        add_theme_support('automatic-feed-links');

        // Localisation Support
        load_theme_textdomain('lupe', get_template_directory() . '/languages');

        // Custom logo
        add_theme_support( "custom-logo", array(
            'height' => 90,
            'width'  => 62,
            'flex-width' => true,
        ) );

        // Title tag manage by WordPress, not hardcoded
        add_theme_support( 'title-tag' );

        // HTML5 tags
        add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script' ) );
        
        // Responsive Embeds
        add_theme_support( "responsive-embeds" );
        
        // Default Gutenberg block styles
        add_theme_support( 'wp-block-styles' );

        // Support for align full and align wide option for the block editor
        add_theme_support( 'align-wide' );
    }
}
add_action( 'after_setup_theme', 'lupe_setup' );


/*
    Functions
*/
// Lupe navigation
function lupe_nav() {
	wp_nav_menu(
	array(
		'theme_location'  => 'header-menu',
		'menu'            => '',
		'container'       => 'div',
		'container_class' => 'menu-{menu slug}-container',
		'container_id'    => '',
		'menu_class'      => 'menu',
		'menu_id'         => '',
		'echo'            => true,
		'fallback_cb'     => 'wp_page_menu',
		'before'          => '',
		'after'           => '',
		'link_before'     => '',
		'link_after'      => '',
		'items_wrap'      => '<ul>%3$s</ul>',
		'depth'           => 0,
		'walker'          => ''
		)
	);
}

// Lupe sidebars
function lupe_register_widgets() {
     register_sidebar(array(
        'name' => __('Posts Widget', 'lupe'),
        'description' => __('Sidebar for single post page', 'lupe'),
        'id' => 'widget-area-posts',
        'before_widget' => '<div id="%1$s" class="%2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));

    register_sidebar( array(
        'name' => __('Archive Widget', 'lupe'),
        'description' => __('Sidebar for archive pages', 'lupe'),
        'id' => 'widget-area-archive',
        'before_widget' => '<div id="%1$s" class="%2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));
}
add_action('widgets_init', 'lupe_register_widgets');


// Load Lupe scripts (header.php)
function lupe_header_scripts() {   
    wp_register_script('lupescripts', get_template_directory_uri() . '/assets/scripts/scripts.js', array('jquery'), '1.0.0');
    wp_enqueue_script('lupescripts');
}
add_action('init', 'lupe_header_scripts');


// Load Lupe styles
function lupe_styles() {
    wp_register_style('lupe', get_template_directory_uri() . '/assets/styles/style.css', array(), '1.0', 'all');
    wp_enqueue_style('lupe');
}
add_action('wp_enqueue_scripts', 'lupe_styles'); 


// Register Lupe Navigation
function lupe_register_menu() {
    register_nav_menus(array( 
        'header-menu' => __('Header Menu', 'lupe'), // Main Navigation
        'contact-menu' => __('Contact Menu', 'lupe'), // Contact navigation for footer
    ));
}
add_action('init', 'lupe_register_menu');

// Remove thumbnail width and height dimensions that prevent fluid images in the_thumbnail
function lupe_remove_thumbnail_dimensions( $html ) {
    $html = preg_replace('/(width|height)=\"\d*\"\s/', "", $html);
    return $html;
}

// Enable threaded Comments
function lupe_enable_threaded_comments() {
    if (!is_admin()) {
        if (is_singular() AND comments_open() AND (get_option('thread_comments') == 1)) {
            wp_enqueue_script('comment-reply');
        }
    }
}


// Changing excerpt more
function lupe_excerpt_more($more) {
  if ( is_admin() ) return $more;

  global $post;
  remove_filter('excerpt_more', 'lupe_excerpt_more'); 
  return '...';
}


// WordPress wp_body_open backward compatibility
if ( ! function_exists( 'wp_body_open' ) ) {
    function wp_body_open() {
        do_action( 'wp_body_open' );
    }
}


/*
    Actions and Filters
*/
// Add Actions
add_action('get_header', 'lupe_enable_threaded_comments');


// Add Filters to customize default behaviour
add_filter('post_thumbnail_html', 'lupe_remove_thumbnail_dimensions', 10); // Remove width and height dynamic attributes to thumbnails
add_filter('excerpt_more','lupe_excerpt_more',11);


/*
    Theme customizer
*/
require get_parent_theme_file_path( '/inc/customizer.php' );