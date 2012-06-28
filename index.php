<?php get_header(); ?>

			<?php $args = array( 'post_type' => 'post', 'posts_per_page' => 5 );
				$loop = new WP_Query( $args ); ?>
				<div class="blog-content">
					<?php while ($loop->have_posts()) : $loop->the_post(); ?>
						<div class="post-entry">
							<h1 id="post-<?php the_ID(); ?>" class="post-title"><?php the_title(); ?></h1>
							<div class="entry">
									<?php the_content(); ?>
							</div>
						</div>
					<?php endwhile; ?>
				</div>
		</div> <!-- /#main -->
		
		<?php is_single($post); ?>