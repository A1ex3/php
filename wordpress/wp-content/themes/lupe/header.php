<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
		<a class="skip-link" href="#site-content"><?php esc_html_e( 'Skip to the content', 'lupe' ) ?></a>
		<!-- wrapper -->
		<div class="wrapper">

			<!-- header -->
			<header class="header site-header clear" role="banner">

					<!-- logo -->
					<div class="logo">
						<a href="<?php echo esc_url(get_home_url()); ?>">
							<?php 
								$header_logo_width = get_theme_mod( 'header_logo_width' );
								$logo_width;

								if( $header_logo_width ) {
									$logo_width = 'width= '. $header_logo_width;
								} 

								$custom_logo_id = get_theme_mod( 'custom_logo' );
								$logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
								 
								if ( has_custom_logo() ) {
								    echo '<img src="' . esc_url( $logo[0] ) . '" alt="' . esc_attr(get_bloginfo( 'name' )). '" '. esc_attr($logo_width).'>';
								} else {
								    echo get_bloginfo( 'name' );
								}

								?>
						
						</a>
					</div>
					<!-- /logo -->

					<!-- nav -->
					<div class="site-main-menu">
						<a href="#" id="show-mobile-menu-btn" class="site-menu-btn" title="<?php esc_attr_e( 'Show page menu', 'lupe' ) ?>"><?php esc_html_e( 'Menu', 'lupe' ) ?></a>
						
						<div id="main-site-menu" class="menu-wrapper">
							<div class="wrapper">
								<a href="#" class="site-menu-btn site-menu-btn--close" title="<?php esc_attr_e( 'Close page menu', 'lupe' ) ?>"><?php esc_html_e('Close','lupe'); ?></a>
								<nav class="nav" role="navigation">
									<?php lupe_nav(); ?>
								</nav>	
							</div>
						</div>
					</div>
			</header>
			<!-- /header -->
