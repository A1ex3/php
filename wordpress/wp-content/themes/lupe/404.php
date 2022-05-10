<?php get_header(); ?>

	<main role="main" id="site-content">
		<!-- section -->
		<section>

			<!-- article -->
			<article id="post-404">
				<div class="distortion" data-text="404 error">404 error</div>
  				
				<h1><?php esc_html_e( 'Page not found', 'lupe' ); ?></h1>
				
				<?php get_search_form( ); ?>

				<h2>
					<a href="<?php echo esc_html( home_url() ); ?>"><?php esc_html_e( 'Return home?', 'lupe' ); ?></a>
				</h2>

			</article>
			<!-- /article -->

		</section>
		<!-- /section -->
	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
