<?php if (have_posts()): while (have_posts()) : the_post(); ?>

	<!-- article -->
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

		<!-- post thumbnail -->
		<?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
			<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
				<?php the_post_thumbnail(array(300,300)); // Declare pixel size you need inside the array ?>
			</a>
		<?php else : ?>
			<div class="empty-square"></div>
		<?php endif; ?>
		<!-- /post thumbnail -->

		<!-- post title -->
		<h2>
			<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
		</h2>
		<!-- /post title -->

		<!-- post details -->
		<p class="meta"><span class="date"><?php the_time('F j, Y'); ?></span> -
		<span class="author"><?php esc_html_e( 'by', 'lupe' ); ?> <?php the_author_posts_link(); ?></span></p>
		<!-- /post details -->

		<?php the_excerpt(); // Build your custom callback length in functions.php ?>

		<?php edit_post_link(); ?>

	</article>
	<!-- /article -->

<?php endwhile; ?>

<?php else: ?>

	<!-- article -->
	<article>
		<h2><?php esc_html_e( 'Sorry, nothing to display.', 'lupe' ); ?></h2>
	</article>
	<!-- /article -->

<?php endif; ?>
