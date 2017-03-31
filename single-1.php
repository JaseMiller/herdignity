<?php get_header(); ?>
<div id="content single">

<div id="inner">

<div id="resource">

<?php $related_links = get_related_links(true); if ($related_links) {
?><div class="related-posts"><div class="related-posts"><h2>Additional Resources</h2>
<?php related_links(); ?></div></div>
<?php } else { ?>
<?php } ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<div class="post" id="post-<?php the_ID(); ?>">
<h3><?php the_title(); ?></h3>
<div class="meta">
<div class="left">Post Date: <?php the_date('m/d/Y') ?><br />
<?php $author = get_post_meta($post->ID, "Author", true);
if ($author != "") { echo 'Author: ' .$author;
} else {}  ?>
</div>
<div class="right">Categories: <?php the_category(', '); ?></div>
</div>

	<div class="entry">
		<?php the_content(__('(more...)')); ?>
	</div>


</div><!--  End post -->
<?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>
</div><!--  End Inner -->
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