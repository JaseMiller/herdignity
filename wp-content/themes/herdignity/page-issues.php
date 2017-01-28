<?php
/*
Template Name: Topics Basic Page
*/
?>
<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<div id="content">
<div id="issues-banner">
<div class="image"><?php the_post_thumbnail();?></div>
<div class="text"><?php the_content(); ?></div>
<div class="tagline"><h2>Issues</h2></div>
</div>

<?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>
<!--  End post -->


<div id="inner">


<div class="left-col">
<?php $this_page_id=$wp_query->post->ID; ?>
<?php query_posts(array('post_parent' => $this_page_id, 'post_type' => 'page'));?>
<?php if (have_posts()) : while(have_posts()) : $i++; if(($i % 2) == 0) : $wp_query->next_post(); else : the_post(); ?>
<div class="box"><a href="<?php the_permalink() ?>"><h3><?php the_title(); ?></h3><?php the_excerpt(); ?></a></div>
<?php endif; endwhile; else: ?>
<?php endif; ?>
</div>

<?php $i = 0; rewind_posts(); ?>


<div class="right-col">
<?php if (have_posts()) : while(have_posts()) : $i++; if(($i % 2) !== 0) : $wp_query->next_post(); else : the_post(); ?>

<div class="box"><a href="<?php the_permalink() ?>"><h3><?php the_title(); ?></h3><?php the_excerpt(); ?></a></div>

<?php endif; endwhile; else: ?>
<?php endif; ?>
</div>

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