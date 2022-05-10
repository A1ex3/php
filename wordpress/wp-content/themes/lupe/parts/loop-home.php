<div class="home-grid">
	<?php if (have_posts()): while (have_posts()) : the_post(); ?>

		<!-- article -->
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

			<?php 
				$categories = get_the_category();
				$primary_cat;
 
				if ( ! empty( $categories ) ) {
				    $primary_cat = $categories[0]->name;   
				}
			?>
			<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
				<div class="img-wrapper" style="--background: url('<?php echo esc_url(get_the_post_thumbnail_url());?>')">
					<?php the_post_thumbnail(); // Declare pixel size you need inside the array ?>					
				</div>
				
				<span class="post__meta"><h2 class="post__meta__title"><?php the_title(); ?></h2><span class="post__meta__category"><?php echo esc_html($primary_cat); ?></span>
			</a>
			

		</article>
	<?php endwhile; ?>
	<?php endif; ?>
</div>

