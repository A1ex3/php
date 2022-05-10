<?php
/**
 * Lupe: Customizer
**/

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */

function lupe_customize_register( $wp_customize ) {


	lupe_register_custom_sections($wp_customize);

	// HEADER
	// Header logo width
	$wp_customize->add_setting(
		'header_logo_width' , array(
			'default' => '',
      		'transport' => 'refresh',
      		'sanitize_callback' => 'absint'
		)
	);

	$wp_customize-> add_control('header_logo_width',
	   array(
	      'label' => __( 'Header logo width', 'lupe' ),
	      'description' => __( 'Set the width of the header logo in pixels (do not include "px")', 'lupe' ),
	      'section' => 'title_tagline', 
	      'type' => 'number',
	   )
	);

	
	// FOOTER
	// Footer logo
	$wp_customize->add_setting(
		'footer_logo' , array(
			'default' => '',
      		'transport' => 'refresh',
      		'sanitize_callback' => 'lupe_sanitize_file',
		)
	);

	$wp_customize-> add_control(new WP_Customize_Media_Control( $wp_customize, 'footer_logo',
	   array(
	      'label' => __( 'Footer logo', 'lupe' ),
	      'description' => __( 'Select a logo to place on your footer.', 'lupe' ),
	      'section' => 'footer-settings',
	      'mime_type' => 'image',  
	   )
	));

	// Footer logo width
	$wp_customize->add_setting(
		'footer_logo_width' , array(
			'default' => '',
      		'transport' => 'refresh',
      		'sanitize_callback' => 'absint'
		)
	);

	$wp_customize-> add_control('footer_logo_width',
	   array(
	      'label' => __( 'Footer logo width', 'lupe' ),
	      'description' => __( 'Set the width of the footer logo in pixels (do not include "px")', 'lupe' ),
	      'section' => 'footer-settings', 
	      'type' => 'number',
	   )
	);


	// Copyright bar text
	$wp_customize->add_setting(
		'copyright_text', array(
			'sanitize_callback' => 'wp_kses_post'
		)
	);

	$wp_customize-> add_control(
		'copyright_text', array(
			'type'        => 'textarea',
			'section'     => 'footer-settings',
			'label'       => __('Copyright bar text', 'lupe'),
			'description' => __('HTML is allowed.','lupe'),
		)
	);


	// Posts sidebar
	$wp_customize->add_setting(
		'posts_sidebar', array(
			'default'   => 0,
			'sanitize_callback' => 'lupe_chkbox_sanitization',
		)
	);

	$wp_customize-> add_control(
		'posts_sidebar', array(
			'type'        => 'checkbox',
			'section'     => 'posts_sidebar',
			'label'       => __('Posts sidebar', 'lupe'),
			'description' => __('Check for enabling posts sidebar','lupe'),
			'priority'     => 1
		)
	);


	// HOME
	// Logo
	$wp_customize->add_setting(
		'home_logo' , array(
			'default' => '',
      		'transport' => 'refresh',
      		'sanitize_callback' => 'lupe_sanitize_file',
		)
	);

	$wp_customize-> add_control(new WP_Customize_Media_Control( $wp_customize, 'home_logo',
	   array(
	      'label' => __( 'Home logo', 'lupe' ),
	      'description' => __( 'Select the home logo.', 'lupe' ),
	      'section' => 'title_tagline',
	      'mime_type' => 'image',  
	   )
	));

	// Header logo width
	$wp_customize->add_setting(
		'home_logo_width' , array(
			'default' => '',
      		'transport' => 'refresh',
      		'sanitize_callback' => 'absint'
		)
	);

	$wp_customize-> add_control('home_logo_width',
	   array(
	      'label' => __( 'Home logo width', 'lupe' ),
	      'description' => __( 'Set the width of the home logo in pixels (do not include "px")', 'lupe' ),
	      'section' => 'title_tagline', 
	      'type' => 'number',
	   )
	);


}
add_action( 'customize_register', 'lupe_customize_register' );

function lupe_register_custom_sections( $wp_customize ) {

	// Posts sidebar
	$wp_customize-> add_section('posts_sidebar', array(
		'title'    => __('Posts sidebar', 'lupe'),
		'priority' => 150,
	));

	// Copyright bar section
	$wp_customize-> add_section('footer-settings', array(
		'title'    => __('Footer settings', 'lupe'),
		'priority' => 160,
	));
}

/**
* Custom sanitization functions
*/
// Checkboxes
function lupe_chkbox_sanitization( $input ) {
	if ( true === $input ) {
	   return 1;
	} else {
	   return 0;
	}
}

// Files
function lupe_sanitize_file($file, $setting) {
    //allowed file types
    $mimes = array(
        'jpg|jpeg|jpe' => 'image/jpeg',
        'gif' => 'image/gif',
        'png' => 'image/png',
    );
    //check file type from file name
    $file_ext = wp_check_filetype($file, $mimes);
    //if file has a valid mime type return it, otherwise return default
    return ($file_ext['ext'] ? $file : $setting->default);
}
