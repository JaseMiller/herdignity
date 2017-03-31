<?php get_header(); ?>
<div id="content featured">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<div id="page">
<h2><?php the_title(); ?></h2>
<hr class="dotted" />
<div class="post" id="post-<?php the_ID(); ?>">
<div class="entry">
<?php the_content(__('(more...)')); ?>
<div style="clear:both"> </div>
</div><!--  End entry -->
</div><!--  End post -->
<?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>

</div><!--  End Page -->
<div style="clear:both"> </div>
<hr class="dotted" />
<ul class="h-block"><?php query_posts('post_type=featured&showposts=3'); 
global $more; $more = 0; while (have_posts()) : the_post(); ?>
<li><a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2>
<?php the_excerpt(); ?></a></li>
<?php endwhile; ?>
<?php wp_reset_query(); ?>
</ul>
</div><!--  End Content -->
<?php get_footer(); ?>
