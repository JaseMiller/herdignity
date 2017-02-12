<?php get_header(); ?>
<div id="content">
<h2>News</h2>

<?php get_sidebar(); ?>


<div id="page">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<div class="post" id="post-<?php the_ID(); ?>">
<h3><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h3>
<?php the_date('m/d/Y') ?>
	<div class="entry">
		<?php the_excerpt(__('(more...)')); ?>
	</div>

	

</div><!--  End post -->
<?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>

</div><!--  End Page -->

</div><!--  End Content -->

<?php get_footer(); ?>
