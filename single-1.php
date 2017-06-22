<?php get_header(); ?>
<div id="content single">

<div id="inner">

<div id="resource">

<div class="issues-banner">
<div class="image"><img class="img-responsive" src="<?php the_post_thumbnail_url();?>" /></div>
</div>

<div class="row banner">
	<div class="col-md-9 col-sm-9 col-xs-12 col-lg-9">

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<div class="post" id="post-<?php the_ID(); ?>">
<h3><?php the_title(); ?></h3>
<div class="meta">
<div class="">Post Date: <?php the_date('m/d/Y') ?><br />
<?php $author = get_post_meta($post->ID, "Author", true);
if ($author != "") { echo 'Author: ' .$author;
} else {}  ?>
</div>
<div class="">Categories: <?php the_category(', '); ?></div>
</div>

	<div class="entry">
		<?php the_content(__('(more...)')); ?>
	</div>


</div><!--  End post -->


<?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>

	</div><!-- /.col -->
	<div class="col-md-3 col-sm-2 col-xs-12 col-lg-3">

<?php $related_links = get_related_links(true); if ($related_links) {
?><div class="related-posts"><h2>Additional Resources</h2>
<?php related_links(); ?></div>
<?php } else { ?>
<?php } ?>

	</div> <!-- /col -->
	</div><!-- /.row -->

</div><!--  End Resource -->




</div><!--  End Inner -->

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




</div><!-- End Content -->

<?php get_footer(); ?>