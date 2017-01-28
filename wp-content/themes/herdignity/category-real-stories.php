<?php
/*
Template Name: Real Stories Category Page
*/
?>
<?php get_header(); ?>

<div id="content">

<div id="stories-banner">
<div class="image"><img src="<?php if (function_exists('z_taxonomy_image_url')) echo z_taxonomy_image_url(); ?>"></div>
<div class="child-title">Issues <span class="diff"> <?php $parentCatList = get_category_parents($cat,false,',');
$parentCatListArray = split(",",$parentCatList);
$topParentName = $parentCatListArray[0];
$sdacReplace = array(" " => "-", "(" => "", ")" => "");
$topParent = strtolower(strtr($topParentName,$sdacReplace));
echo $topParentName;
 ?></span></div>
<div class="tagline"><h2>Real Stories</h2></div>
</div>


<div id="inner">

<div id="story">
<div class="left">
<?php $recent = new WP_Query($query_string . "&showposts=1&offset=0"); 
while($recent->have_posts()) : $recent->the_post();?>
<h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
<?php the_content(); ?>
<?php endwhile; wp_reset_query();?></div><!--  End Left -->
</div><!--  End Story -->

<div style="clear:both;"></div>

<div id="more-stories">
<h3>More Stories</h3>
<div class="scroll">
<div class="story">
<ul class="storyList">
<?php $recent = new WP_Query($query_string . "&offset=1"); 
while($recent->have_posts()) : $recent->the_post();?>
<li class="storyItem"><a href="<?php the_permalink() ?>" rel="bookmark">
<h4><?php the_title();?></h4></a><?php the_excerpt();?></li>
<?php endwhile; ?></ul></div>
<div class="arrows"><a id="prev" href="#">Prev</a><a id="next" href="#">Next</a></div>
</div><!--  End scroll -->

</div><!--  End more stories -->


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