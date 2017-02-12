<?php
/*
Template Name: Welcome
*/
?>
<?php get_header(); ?>

<div id="banner">
<?php do_shortcode('[home_slider max_slides="4" slider_layout="numbers-top" post_type="HomeSlides" slider_fx="fade" hide_arrows="yes" slide_img_size="full" orderby="date" order="ASC"]'); ?></div>

<div id="top">
<div class="tagline"><?php
query_posts('page_id=29'); 
global $more;
$more = 0; 
while (have_posts()) : the_post(); ?>
<?php the_content(); ?>				
<?php endwhile; ?>
<?php wp_reset_query(); ?>
</div>
</div>

<div id="home">
<div class="left-col">
<div id="sidebar">
<ul class="block">
<?php query_posts('post_type=featured&showposts=3'); 
global $more; $more = 0; while (have_posts()) : the_post(); ?>
<li><a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2>
<?php the_excerpt(); ?></a></li>
<?php endwhile; ?>
<?php wp_reset_query(); ?>
</ul>
</div></div>

<div class="right-col">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<div class="post" id="post-<?php the_ID(); ?>">
<div class="entry">
<?php the_content(__('(more...)')); ?>
</div>
</div><!--  End post -->
<?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>

</div>
</div>


<?php get_footer(); ?>