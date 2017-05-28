<?php
/*
Template Name: Topic Secondary Page
*/
?>
<?php get_header(); ?>
<div class="page topic content">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<div class="topic-banner">
<?php if($post->post_parent) {$parent_link = get_permalink($post->post_parent); ?>
<div class="image"><a href="<?php echo $parent_link; ?>"><img class="img-responsive" src="<?php the_post_thumbnail_url();?>" /></a></div>
<?php } ?>
</div>


<div class="gradientbox gray">
	<div class="css3-shadow">
		<div class="white-bg">
			<div class="tag"><h2><?php the_title(); ?></h2></div>
		</div>
	</div>
</div>

<div class="text"><?php the_content(); ?></div>

<div class="row banner">
	<div class="col-md-12 col-sm-12">





<?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>
<!--  End post -->


	<div id="inner" class="row">
		<div class="col-md-6">
		
<div class="subheads">
	<div class="colhead left">Research &amp; Policy</div>
</div>
			
			<div class="topics-box left-col">
<?php
$pageslug = $post->post_name;
$category = get_category_by_slug($pageslug);
$the_id = $category->term_id;
$categories = get_categories( 'hide_empty=0&orderby=id&order=ASC&show_count=0&parent=' .$the_id . '&title_li=' );
foreach ( $categories as $category ) {
	echo '<div class="topics-box"><a href="' . get_category_link( $category->term_id ) . '"><h3>' . $category->name . '</h3></a></div>';
}
?>
			</div><!-- /.col -->
			
		</div>
	
<?php wp_reset_query(); ?>

		<div class="col-md-6">
		
<div class="subheads">
	<div class="colhead right">Impact</span></div>
</div>

			<div class="topics-box right-col">
<?php
$pageslug = $post->post_name;
$category = get_category_by_slug($pageslug);
$the_id = $category->term_id;
$categories = get_categories( 'hide_empty=0&orderby=id&order=ASC&show_count=0&number=3&parent=' .$the_id . '&title_li=' );
foreach ( $categories as $category ) {
	echo '<div class="topics-box"><a href="' . get_category_link( $category->term_id ) . '"><h3>' . $category->name . '</h3></a></div>';
}
?>
			</div>
			
		</div><!-- /.col -->

</div><!--  /.row #inner -->

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