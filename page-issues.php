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