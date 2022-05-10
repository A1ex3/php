<?php get_header(); ?>

<?php 
	$sidebar = get_theme_mod('posts_sidebar');
?>

	<main role="main" id="site-content">
		<!-- section -->
		<section class="single-content <?php if($sidebar) echo 'sidebar-content'?>">

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<div class="post-header">
								
					<div class="post-header-title">
						<h1>
							<?php the_title(); ?>
						</h1>

						<div class="excerpt"><?php the_excerpt(); ?></div>
					</div>

					<!-- post details -->
					<div class="post-header-details">
						<span class="date"><?php the_time('F j, Y'); ?></span>
						<span class="author"><?php esc_html_e( 'by', 'lupe' ); ?> <?php the_author_posts_link(); ?></span>
						<span class="category"><?php esc_html_e( 'in', 'lupe' ); ?> <?php the_category(); ?></span>
					</div>
					<!-- /post details -->

					<div class="post-header-image">
						<?php if ( has_post_thumbnail()) : ?>		
							<?php the_post_thumbnail(); ?>
						<?php endif; ?>			
					</div>
				</div>

				<div class="post-content">
					
					<!-- post thumbnail -->
					

					<?php the_content(); // Dynamic Content ?>

					<?php wp_link_pages(); ?>
					
					<?php edit_post_link(); // Always handy to have Edit Post Links available ?>

					
				</div>

				<?php if ( $sidebar ) {
					get_sidebar();
				} ?>

				<?php comments_template(); ?>

			</article>
			<!-- /article -->

		<?php endwhile; ?>

		<?php 
			the_post_navigation(
				array(
					'next_text' => '<p class="meta-nav"><span class="post-title">%title</span>__</p>',
					'prev_text' => '<p class="meta-nav">__<span class="post-title">%title</span></p>',
				)
			);
		?>

		<?php else: ?>

			<!-- article -->
			<article>

				<h1><?php esc_html_e( 'Sorry, nothing to display.', 'lupe' ); ?></h1>

			</article>
			<!-- /article -->

		<?php endif; ?>

		</section>
		<!-- /section -->
	</main>

	<?php get_footer(); ?>
