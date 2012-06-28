<?php
/*
Template Name: Blog
*/
get_header(); ?>
			<?php if (have_posts()) : ?>
				<?php while (have_posts()) : the_post(); ?>
					<?php $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 5600,1000 ), false, '' );?>
					<section style="background-image: url(<?php echo $src[0]; ?>);">
						<span class="section-mask">
							<a href="#<?php the_title(); ?>" class="section-trigger">
								<h2 id="post-<?php the_ID(); ?>" class="section-title">
										<?php the_title(); ?>
								</h2>
							</a>
							<div class="section-content entry">
								<?php the_content(); ?>
							</div>
						</span>
					</section>
				<?php endwhile; ?>
			<?php endif; ?>
		</div> <!-- /#main -->

		<!-- BLOG.HTML -->