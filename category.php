<?php get_header(); ?>

<div class="page content">

	<div id="category">
	
		<div class="tag"><h2><?php single_cat_title(); ?></h2></div>
		<hr class="dotted" />
	
		<div class="row banner">
asdf
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>	
	
			<div class="cat-col col-md-6 col-sm-6 col-xs-12">
				
				<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

				<div class="meta">
					
					<div class="left">Post Date: <?php the_time('m/d/Y') ?><br /></div>

				<!--	<div class="right">Categories: <?php the_category(', '); ?></div>	-->

				</div>

				<div class="post" id="post-<?php the_ID(); ?>">

					<div class="entry">
						
						<?php the_excerpt(__('(more...)')); ?>

			<!--remove?			<div style="clear:both"> </div>  	-->
	
					</div><!--  End entry -->

				</div><!--  End post -->
				</div><!-- /.col -->

			<?php endwhile; else: ?>

				<p><?php _e('There are no posts in this category. Please check back soon.'); ?></p>

			<?php endif; ?>
			
		</div><!-- /.row -->

	</div><!-- /#category -->

<div class="footer-menu row">
	<div class="col-md-4 col-sm-4 col-xs-12">
		<?php $post_id = 145; $queried_post = get_post($post_id); $post_url = get_permalink($post_id); ?>
<a href="<?php echo $post_url; ?>"><h2><?php echo $queried_post->post_title; ?></h2>
<?php echo $queried_post->post_excerpt; ?></a>
	</div><!-- /.col -->
	<div class="col-md-4 col-sm-4 col-xs-12">
		<?php $post_id = 144; $queried_post = get_post($post_id); $post_url = get_permalink($post_id); ?>
<a href="<?php echo $post_url; ?>"><h2><?php echo $queried_post->post_title; ?></h2>
<?php echo $queried_post->post_excerpt; ?></a>
	</div><!-- /.col -->
	<div class="col-md-4 col-sm-4 col-xs-12">
		<?php $post_id = 143; $queried_post = get_post($post_id); $post_url = get_permalink($post_id); ?>
<a href="<?php echo $post_url; ?>"><h2><?php echo $queried_post->post_title; ?></h2>
<?php echo $queried_post->post_excerpt; ?></a>
	</div><!-- /.col -->
</div><!-- /.row -->

</div><!--  End Content -->

<?php get_footer(); ?>
