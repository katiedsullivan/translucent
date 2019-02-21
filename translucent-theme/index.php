<?php

get_header();

?>
	<div class="row bg-color">
		<div class="col-12 col-sm-12 col-md-8 col-lg-8 col-xl-7">
			<div id="blog">
				<?php
				if (have_posts()) :
					while (have_posts()) : the_post(); ?>

				<article class="post">
					<h5 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
					<h6 class="timestamp"><?php the_time('l, j F, Y') ?></h6>
					<?php the_content(); ?>
					<h8 class="sign">Posted by <?php the_author(); ?><?php the_time(' @ g:i A') ?> <?php edit_post_link(__('Edit')); ?></h8>

				</article>

				<?php endwhile;

				else :
					echo '<p>No content found</p>';

				endif;
				?>
			</div><!-- /blog -->
		</div><!-- /col -->
		<div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-5">
			<div id="sidebar">
				<?php get_sidebar('custom-header-widget'); ?>
			</div><!-- /sidebar-->
		</div><!-- /col -->
	</div><!-- /row -->
<?php
get_footer();

?>