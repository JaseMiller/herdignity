<?php get_header(); ?>
<div id="content">
<div id="category">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
<div class="meta">
<div class="left">Post Date: <?php the_time('m/d/Y') ?><br />
</div>
<div class="right">Categories: <?php the_category(', '); ?></div>
</div>

<div class="post" id="post-<?php the_ID(); ?>">
<div class="entry">
<?php the_excerpt(__('(more...)')); ?>
<div style="clear:both"> </div>
</div><!--  End entry -->
</div><!--  End post -->

<?php endwhile; else: ?>
<p><?php _e('There are no posts in this category. Please check back soon.'); ?></p>
<?php endif; ?>

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
