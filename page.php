<?php get_header(); ?>
<div class="page content">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<div class="row banner">
	<div class="col-md-12 col-sm-12">

<h2><?php the_title(); ?></h2>
<hr class="dotted" />
<div class="post" id="post-<?php the_ID(); ?>">
<div class="entry">
<?php if( get_field('author_1') ): ?>
        <p style="color:#828282; font-weight: 400;"><strong>By:</strong> <?php the_field('author_1'); ?></p>
    <?php endif; ?>
<?php the_content(__('(more...)')); ?>
<div style="clear:both"> </div>
</div><!--  End entry -->
</div><!--  End post -->
<?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>

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
