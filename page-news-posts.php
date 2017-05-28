<?php
/*
Template Name: 2 Column
*/
?>
<?php get_header(); ?>
<div class="page news-post">
<h2><?php single_cat_title(); ?></h2>
<hr class="dotted" />
</div>
<div id="content">
<div id="category" class="news">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<div class="post-item">
<h2><a href="<?php if ( get_field('external_link') ) { ?><?php the_field('external_link'); ?><?php } else { ?><?php the_permalink(); ?><?php } ?>" target="_blank"><?php the_title(); ?></a></h2>
    <div class="meta">
    <div class="left">Post Date: <?php the_time('m/d/Y') ?><br />
    </div>
    </div>
    <div class="post" id="post-<?php the_ID(); ?>">
    <div class="entry">
    <?php if( get_field('author') ): ?>
        <p style="color:#828282; font-weight: 400;"><strong>By:</strong> <?php the_field('author'); ?></p>
    <?php endif; ?>
    <?php the_excerpt(__('(more...)')); ?>
    <div style="clear:both"> </div>
    </div><!--  End entry -->
    </div><!--  End post -->
</div> <!-- eo .post-item -->

<?php endwhile; else: ?>
<p><?php _e('There are no posts in this category. Please check back soon.'); ?></p>
<?php endif; ?>
<div class="pagination">
<?php if ( $wp_query->max_num_pages > 1 ) : ?>
		<?php next_posts_link( __( '&larr; Older posts', 'twentyten' ) ); ?>
		<?php previous_posts_link( __( 'Newer posts &rarr;', 'twentyten' ) ); ?>
<?php endif; ?>
</div>

</div><!--  End Page -->

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