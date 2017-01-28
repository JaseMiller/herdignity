<?php
/*
Template Name: Sitemap
*/
?>

<?php get_header(); ?>

<div id="content">

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<div class="post" id="post-<?php the_ID(); ?>">

	<div class="entry">
		<h3>All pages:</h3>
		<ul>
			<?php wp_list_pages('exclude=29,35,110&title_li='); ?>
		</ul>
		<p>&nbsp;</p>
	
		<h3>Categories:</h3>
		<ul>
			<?php wp_list_categories('title_li=0'); ?>
		</ul>
<p>&nbsp;</p>

<h3>All posts:</h3>
<ul>
	<?php $archive_query = new WP_Query('showposts=1000');
		while ($archive_query->have_posts()) : $archive_query->the_post(); ?>
	<li><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a> <strong><?php comments_number('0', '1', '%'); ?></strong></li>
	<?php endwhile; ?>
</ul>
<p>&nbsp;</p>
		<h3>Archives:</h3>
		<ul>
			<select name="archive-dropdown" onchange="document.location.href=this.options[this.selectedIndex].value;">
  <option value=""><?php echo esc_attr( __( 'Select Month' ) ); ?></option> 
  <?php wp_get_archives( 'type=monthly&format=option&show_post_count=1' ); ?>
</select>
		</ul><p>&nbsp;</p>
		<h3>Available RSS Feeds:</h3>
		<ul>
			<li><a href="<?php bloginfo('rdf_url'); ?>" title="RDF/RSS 1.0 feed"><acronym title="Resource Description Framework">RDF</acronym>/<acronym title="Really Simple Syndication">RSS</acronym> 1.0 feed</a></li>
			<li><a href="<?php bloginfo('rss_url'); ?>" title="RSS 0.92 feed"><acronym title="Really Simple Syndication">RSS</acronym> 0.92 feed</a></li>
			<li><a href="<?php bloginfo('rss2_url'); ?>" title="RSS 2.0 feed"><acronym title="Really Simple Syndication">RSS</acronym> 2.0 feed</a></li>
			<li><a href="<?php bloginfo('atom_url'); ?>" title="Atom feed">Atom feed</a></li>
		</ul>
	</div>


</div>
<?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>

</div>
<?php get_footer(); ?>
