<?php
/*
Template Name: Projects Category Page
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
<div class="tagline"><h2><?php single_cat_title(); ?></h2></div>
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
<h3>More <?php single_cat_title(); ?></h3>
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