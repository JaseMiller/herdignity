<?php
/*
Template Name: Topics Basic Page
*/
?>
<?php get_header(); ?>
<div class="page issue content">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<div class="issues-banner">
<div class="image"><img class="img-responsive" src="<?php the_post_thumbnail_url();?>" /></div>
</div>


<div class="gradientbox gray">
	<div class="text"><?php the_content(); ?></div>	
	<div class="css3-shadow">
		<div class="white-bg">
			<div class="tag"><h2>Issues</h2></div>
		</div>
	</div>
</div>


<div class="row banner">
	<div class="col-md-12 col-sm-12">

<?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>
<!--  End post -->

		<div id="inner" class="row">
			<div class="col-md-6">

<?php $this_page_id=$wp_query->post->ID; ?>
<?php query_posts(array('post_parent' => $this_page_id, 'post_type' => 'page'));?>
<?php if (have_posts()) : while(have_posts()) : $i++; if(($i % 2) == 0) : $wp_query->next_post(); else : the_post(); ?>

	<div class="box left-col"><a href="<?php the_permalink() ?>"><h3><?php the_title(); ?></h3><?php the_excerpt(); ?></a>
	</div>

<?php endif; endwhile; else: ?>
<?php endif; ?>
</div>

<?php $i = 0; rewind_posts(); ?>

			<div class="col-md-6">

<?php if (have_posts()) : while(have_posts()) : $i++; if(($i % 2) !== 0) : $wp_query->next_post(); else : the_post(); ?>

	<div class="box right-col"><a href="<?php the_permalink() ?>"><h3><?php the_title(); ?></h3><?php the_excerpt(); ?></a>
	</div>

<?php endif; endwhile; else: ?>
<?php endif; ?>

			</div>

	</div><!--  End Inner -->


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