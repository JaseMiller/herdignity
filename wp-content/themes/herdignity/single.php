<?php get_header(); ?>
<div id="content">

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<div id="stories-banner">
<div class="image"><?php the_post_thumbnail();?></div>


<div class="child-title">Issues <span class="diff"><?php
$category = get_the_category(); 
echo $category[0]->cat_name;
?></span></div>
<div class="tagline"><h2>Resource</h2></div>
</div>

<?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>
<!--  End post -->


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

    <?php if( get_field('author') ): ?>
        <p style="color:#828282; font-weight: 400;"><strong>By:</strong> <?php the_field('author'); ?></p>
    <?php endif; ?>
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