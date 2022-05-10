<?php get_header(); ?>

	<main role="main" id="site-content">
		<!-- section -->
		<section>

			<h1>
			<?php if( is_author() ) :
			 	esc_html_e( 'Author Archives for ', 'lupe' ); ?><span><?php echo get_the_author(); ?></span>
			<?php elseif( is_tag() ) :
				esc_html_e( 'Tag Archive: ', 'lupe' );?><span><?php echo single_tag_title('', false); ?> </span>
			<?php elseif( is_category() ) :
				esc_html_e( 'Categories for ', 'lupe' ); ?><span><?php echo single_cat_title(); ?></span>
			<?php elseif( is_archive() ) :
			 	esc_html_e( 'Archives', 'lupe' ); ?><span><?php single_cat_title(); ?></span>

			<?php endif; ?>
			 </h1>

			<?php get_template_part('/parts/loop'); ?>

			<?php get_template_part('pagination'); ?>
		</section>
		<!-- /section -->
	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
