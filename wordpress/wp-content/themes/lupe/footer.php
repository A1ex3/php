			<!-- footer -->
			<footer id="site-footer" class="footer" role="contentinfo">
				<div class="columns columns--two">
					<div class="column">
						<!-- Footer logo -->
						<div class="footer-logo">
							<?php 
								$footer_logo = get_theme_mod( 'footer_logo' );

								if ( !empty($footer_logo) && $footer_logo != "" ) {
									$logo_url = wp_get_attachment_url ($footer_logo);
									$footer_logo_width = get_theme_mod( 'footer_logo_width' );

									if( $footer_logo_width ) {
										$logo_width = 'width= '. $footer_logo_width;
									} ?>

									<a href="<?php echo esc_url(get_home_url()); ?>"><img src="<?php echo esc_url($logo_url) ?>" alt="<?php echo esc_html(get_bloginfo('title')); ?>" <?php echo esc_attr($logo_width); ?>></a>
							<?php }?>
						</div>
					</div>
					
					<div class="column">
						<!-- Conctact menu -->
						<div class="footer-menu">

							<?php if ( has_nav_menu( 'contact-menu' ) ) { ?>
								<nav class="nav" role="navigation">
									<?php wp_nav_menu( array('theme_location' => 'contact-menu' ));  ?>
								</nav>
							<?php }?>
						</div>
					</div>
				</div>

				<!-- copyright -->
				<p class="copyright">
					<?php 
						$copy_text = get_theme_mod( 'copyright_text' );
						$arr = array('p' => array(), 'a' => array());
					
						echo( wp_kses( $copy_text, $arr ) )
					?>
				</p>

			</footer>
			<!-- /footer -->
		</div>
		<!-- /wrapper -->

		<?php wp_footer(); ?>
	</body>
</html>
