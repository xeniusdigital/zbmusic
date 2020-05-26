﻿<?php get_header(); ?>

<!--------------Content--------------->
<section id="content">
	<div class="wrap-content zerogrid">
		<div class="row block03">
			<div class="col-2-3">
				<div class="wrap-col">
					<h1>404 Not Found</h1>
					<h2>Maybe, you are looking for something ealse!</h2>
					You may visit <a href="<?php esc_url(bloginfo('home')); ?>">Homepage</a>
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