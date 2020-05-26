<?php get_header(); ?>

<!--------------Content--------------->
<section id="content">
	<div class="wrap-content zerogrid">
		<div class="row block03">
			<div class="col-2-3">
				<div class="wrap-col">

					<?php while(have_posts()) : the_post(); ?>
					<article>
						<?php the_post_thumbnail(); ?>
						<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
						<div class="info">[By <?php the_author(); ?> on <?php the_time('F d, Y'); ?> with <?php comments_popup_link('No comment', '1 comment', '% comments', 'manik', 'comments off'); ?>]</div>


						<?php read_more(30); ?> <a href="<?php the_permalink(); ?>">read more</a>
					</article>
					<?php endwhile; ?>

						<div id="pagi">
							<?php
								the_posts_pagination(array(
									'prev_text' => __('PREV', 'zbmusic'),
									'next_text'=> __('NEXT', 'zbmusic'),
									'screen_reader_text' => ' ',
									'show_all' => true, /* show all number */
									'before_page_number' => '<b>',
									'after_page_nummber' => '</b>',

									/* 
								
									'before_page_number' => 'Page '
									*/
								));

							?>
						</div>

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