<?php get_header(); ?>
<div id="content single">

<div id="inner">

<div id="resource">

<div class="issues-banner">
<div class="image"><img class="img-responsive" src="<?php the_post_thumbnail_url();?>" /></div>
</div>

<div class="row banner">
	<div class="col-md-12 col-sm-12">

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

</div><!-- /.col -->
</div><!-- /.row -->

</div><!--  End Resource -->




</div><!--  End Inner -->

<div class="footer-menu row">
	<div class="col-md-4 col-sm-4 col-xs-12">
		<a href="http://www.herdignity.net/join/">
		<h2>Growing the Network</h2><p>Help develop a global network of men &amp; women, individuals &amp; organizations, committed to the broader health needs of girls and women.</p>
		</a>
	</div><!-- /.col -->
	<div class="col-md-4 col-sm-4 col-xs-12">
		<a href="http://www.herdignity.net/join/">
		<h2>Reduce Maternal Mortality</h2><p>Join us as we promote continued progress in reducing maternal mortality worldwide through community education, research, and opportunities to make a difference.</p>
		</a>
	</div><!-- /.col -->
	<div class="col-md-4 col-sm-4 col-xs-12">
		<a href="http://www.herdignity.net/join/">
		<h2>Network Members</h2><p>Individuals and organizations who have already joined the Network.</p>
		</a>
	</div><!-- /.col -->
</div><!-- /.row -->




</div><!-- End Content -->

<?php get_footer(); ?>