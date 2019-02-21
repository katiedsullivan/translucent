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
					<h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
					<?php the_content(); ?>
				</article>

				<?php endwhile;

				else :
					echo '<p>No content found</p>';

				endif;
				?>
				<?php
					$mypages = get_pages( array( 'child_of' => $post->ID, 'sort_column' => 'post_date', 'sort_order' => 'desc' ) );

					foreach( $mypages as $page ) {		
						$content = $page->post_content;
						if ( ! $content ) // Check for empty page
							continue;

						$content = apply_filters( 'the_content', $content );
					?>
						<h5><a href="<?php echo get_page_link( $page->ID ); ?>"><?php echo $page->post_title; ?></a></h5>
						<article class="post"><?php echo $content; ?></article>
					<?php
					}	
				?>
			</div><!-- /blog -->
		</div><!-- /col -->
		<div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-5">
			<div id="sidebar">
				<?php get_sidebar('home'); ?>
			</div><!-- /sidebar-->
		</div><!-- /col -->
	</div><!-- /row -->
<?php

get_footer();

?>