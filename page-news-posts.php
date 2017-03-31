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
<div style="clear:both"> </div>
<hr class="dotted" />
<ul class="h-block"><?php query_posts('post_type=featured&showposts=3'); 
global $more; $more = 0; while (have_posts()) : the_post(); ?>
<li><a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2>
<?php the_excerpt(); ?></a></li>
<?php endwhile; ?>
<?php wp_reset_query(); ?></ul>
</div><!--  End Content -->
<?php get_footer(); ?>