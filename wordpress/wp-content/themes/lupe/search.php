<?php get_header(); ?>

	<main role="main" id="site-content">
		<!-- section -->
		<section>

			<h1><?php echo sprintf( wp_kses( 'Search Results for ', 'lupe' ), $wp_query->found_posts );?><span><?php echo esc_html( get_search_query() ); ?></h1>

			<?php get_template_part('/parts/loop'); ?>

			<?php get_template_part('pagination'); ?>

		</section>
		<!-- /section -->
	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
