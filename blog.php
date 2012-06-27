<?php
/*
Template Name: Blog
*/
get_header(); ?>
			<?php $args = array( 'post_type' => 'homepage-content', 'posts_per_page' => 5 );
				$loop = new WP_Query( $args ); ?>
				<?php while ($loop->have_posts()) : $loop->the_post(); ?>
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
			
		</div> <!-- /#main -->
		<script type='text/javascript'>			
			$("section").toggle(
			function () {
				$("section.clicked").click();
				$("#main").addClass("click");
				$(this).toggleClass("clicked");
			}, function () {
				$("#main").removeClass("click");
				$(".section-mask").parent().removeClass("clicked");
			});
		</script>




<?
/* get_header(); ?>

		<?php rewind_posts(); ?>
		
		<?php while (have_posts()) : the_post(); ?>
		
			<h2><?php the_title(); ?></h2>
			<div class="section-content entry">
				<?php the_content(); ?>
			</div>
		<?php endwhile; ?>
		
		</div> <!-- /#main -->*/
