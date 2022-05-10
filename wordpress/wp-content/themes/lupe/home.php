<?php get_header(); ?>

	<main role="main" id="site-content">
		<!-- section -->
		<section>
			<header class="header-home">
				<h1>
					<?php 
					$home_logo = get_theme_mod( 'home_logo' );
					$home_logo_width = get_theme_mod( 'home_logo_width' );

					if( $home_logo_width ) {
						$logo_width = 'width= '. $home_logo_width;
					} 

					if ( !empty($home_logo) && $home_logo != "" ) { ?>
						<img src="<?php echo esc_url(wp_get_attachment_url($home_logo)); ?>" alt="<?php echo esc_html_e('Logo','lupe'); ?>" class="logo-img" <?php echo esc_attr($logo_width); ?>>
					<?php } else { 
							echo get_bloginfo( 'name' );
					} ?>
					
					
				</h1>

				<p><?php echo esc_html(get_bloginfo('description')); ?></p>
			</header>

			<?php get_template_part('parts/loop','home'); ?>

			<?php get_template_part('pagination'); ?>
		</section>
		<!-- /section -->
	</main>
<?php get_footer(); ?>
