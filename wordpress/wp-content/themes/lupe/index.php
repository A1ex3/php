<?php get_header(); ?>

	<main role="main" id="site-content">
		<!-- section -->
		<section>

			<h1><?php esc_html_e( 'Latest Posts', 'lupe' ); ?></h1>

			<?php get_template_part('/parts/loop'); ?>

			<?php get_template_part('pagination'); ?>

		</section>
		<!-- /section -->
	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
