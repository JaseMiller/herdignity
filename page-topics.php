<?php
/*
Template Name: Topic Secondary Page
*/
?>
<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<div id="content">
<div id="topic-banner">
<?php if($post->post_parent) {$parent_link = get_permalink($post->post_parent); ?>
<div class="image"><a href="<?php echo $parent_link; ?>"><?php the_post_thumbnail();?></a></div>
<?php } ?>
<div class="tagline"><h2><?php the_title(); ?></h2></div>
<div class="text"><?php the_content(); ?></div>
<div class="subheads"><div class="colhead left">Research &amp; Policy</div><div class="colhead right">Impact</span></div>

</div>
<?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>
<!--  End post -->


<div id="inner">
<div class="left-col">
<?php
$pageslug = $post->post_name;
$category = get_category_by_slug($pageslug);
$the_id = $category->term_id;
$categories = get_categories( 'hide_empty=0&orderby=id&order=ASC&show_count=0&parent=' .$the_id . '&title_li=' );
foreach ( $categories as $category ) {
	echo '<div class="topics-box"><a href="' . get_category_link( $category->term_id ) . '"><h3>' . $category->name . '</h3></a></div>';
}
?>
</div>
<?php wp_reset_query(); ?>
<div class="right-col">
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