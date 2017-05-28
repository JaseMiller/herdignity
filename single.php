<?php get_header(); ?>
<div id="content single" class="content">

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

	
	
		<div id="inner">
		<div id="resource">

	
			<div class="issues-banner">
				<div class="image"><img class="img-responsive" src="<?php the_post_thumbnail_url();?>" /></div>
				
				<div class="child-title">Issues <span class="diff"><?php
$category = get_the_category(); 
echo $category[0]->cat_name;
?></span>
			</div>

			<div class="tagline"><h2>Resource</h2></div>
			
			</div>
			
			
		<div class="row banner" style="margin-top: 40px;">
		<div class="col-md-12 col-sm-12">


			


			<?php endwhile; else: ?>
			<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
			<?php endif; ?>
			<!--  End post -->


					<?php $related_links = get_related_links(true); if ($related_links) {
?>
					<div class="related-posts">
						<div class="related-posts">
							<h2>Additional Resources</h2>
							<?php related_links(); ?>
						</div>
					</div>
<?php } else { ?>
<?php } ?>

					<div class="post" id="post-<?php the_ID(); ?>">
						<h3><?php the_title(); ?></h3>
						<div class="meta">
							<div class="left">Post Date: <?php the_date('m/d/Y') ?><br />
							<?php $author = get_post_meta($post->ID, "Author", true);
if ($author != "") { echo 'Author: ' .$author;
} else {}  ?>

    						<?php if( get_field('author') ): ?>
        					<p style="color:#828282; font-weight: 400;"><strong>By:</strong> <?php the_field('author'); ?></p>
    						<?php endif; ?>
							</div><!-- /.left -->
							<div class="right">Categories: <?php the_category(', '); ?></div>
						</div>
						<div class="entry">
							<?php the_content(__('(more...)')); ?>
						</div>
					</div><!--  End post -->

				</div><!-- /#resource -->
				
			</div><!-- /#inner -->
			
		</div><!-- /.col -->
	</div><!-- /.row -->
			
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