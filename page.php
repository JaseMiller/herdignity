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




</div><!--  End Content -->
<?php get_footer(); ?>
