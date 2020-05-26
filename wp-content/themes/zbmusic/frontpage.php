﻿<?php get_header(); ?>

<?php
/*
Template Name: Home
*/

?>

<div class="featured">
	<div class="wrap-featured zerogrid">
		<div class="slider">
			<div class="rslides_container">
				<ul class="rslides" id="slider">
					<?php
						$slideritems = new WP_Query(array(
							'post_type' => 'zbmusicslider',
							'posts_per_page' => -1
						));

					?>
					<?php while($slideritems->have_posts()) : $slideritems->the_post(); ?>

					<li><?php the_post_thumbnail(); ?></li>

					<?php endwhile; ?>
					
				</ul>
			</div>
		</div>
	</div>
</div>

<!--------------Content--------------->
<section id="content">
	<div class="wrap-content zerogrid">
		<div class="row block01">
			<?php
				$blockitems = new WP_Query(array(
					'post_type' => 'zbmusicservices',
					'posts_per_page' => 3
				));
			?>

			<?php while($blockitems->have_posts()): $blockitems->the_post(); ?>

			<div class="col-1-3">
				<div class="wrap-col box">
					<h2><?php the_title(); ?></h2>
					<p><?php read_more(10); ?></p>
					<div class="more"><a href="<?php the_permalink(); ?>">[...]</a></div>
				</div>
			</div>
			<?php endwhile; ?>
	
		</div>
		<div class="row block02">
			<div class="col-2-3">
				<div class="wrap-col">
					<div class="heading"><h2>Latest Blog</h2></div>
					<?php
						$post_contentssss= new WP_Query(array(
							'post_type' => 'post',
							'posts_per_page' =>5

						));


					?>
					<?php while($post_contentssss->have_posts()) : $post_contentssss->the_post(); ?>
					<article class="row">
						<div class="col-1-3">
							<div class="wrap-col">
								<?php the_post_thumbnail(); ?>
							</div>
						</div>
						<div class="col-2-3">
							<div class="wrap-col">
								<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
								<div class="info">By <?php the_author(); ?> on <?php the_time('F, d, Y'); ?> with <?php comments_popup_link(); ?></div>
								<p><?php read_more(12); ?><a href="<?php the_permalink(); ?>"> [...]</a></p>
							</div>
						</div>
					</article>

					<?php endwhile; ?>
		
				</div>
			</div>
			<div class="col-1-3">
				<?php get_sidebar(); ?>
			</div>
		</div>
	</div>
</section>
<!--------------Footer--------------->
<?php get_footer(); ?>