<?php
/*
Template Name: Welcome
*/
?>
<?php get_header(); ?>

<div class="row banner">
	<div class="col-md-12 col-sm-12">



    <?php echo do_shortcode("[metaslider id=2206]"); ?>



	</div> <!-- /.col -->
</div> <!-- /.row -->

<div class="row tagline hidden-sm hidden-xs">
	<div class="col-md-12 col-sm-12">
		<a title="About" href="http://www.herdignity.net/about/">Learn More</a>
		<img class="dot" src="<?php bloginfo('template_directory'); ?>/img/dot.gif" alt="-" width="16" height="25" />
		<a title="Join" href="http://www.herdignity.net/get-involved/">Get Involved</a>
		<img class="dot" src="<?php bloginfo('template_directory'); ?>/img/dot.gif" alt="-" width="16" height="25" />
		<a title="Share" href="http://www.herdignity.net/share/">Share Your Story</a>
		<img class="arrow" src="<?php bloginfo('template_directory'); ?>/img/arrow.gif" alt="" width="43" height="30" />
	</div> <!-- /.col -->
</div> <!-- /.row -->


<div class="hd-categories row is-table-row" style="margin-top: 30px;">

	<div class="aside col-md-2 col-sm-3 hidden-xs">
	<?php $post_id = 145; $queried_post = get_post($post_id); $post_url = get_permalink($post_id); ?>
<a href="<?php echo $post_url; ?>"><h2><?php echo $queried_post->post_title; ?></h2>
<?php echo $queried_post->post_excerpt; ?></a>
		<div class="bottom"></div>
	</div> <!-- /.col -->

	<div class="col-md-1 ls-col hidden-sm hidden-xs">
		<img class="lifespan ls-top" src="<?php bloginfo('template_directory'); ?>/img/ls-top4@2x.png" alt="" />
	</div> <!-- /.col -->

	<div class="extrablocks col-md-3 hidden-sm">
		<img class="category-img" src="<?php bloginfo('template_directory'); ?>/img/home/girl.jpg" alt="" />
	</div> <!-- /.col -->
	
	
	<div class="col-md-2 col-sm-3 col-xs-4">
		<div class="innerbox lightgreen">
		<a title="Prenatal / Infancy" href="http://www.herdignity.net/prenatal-infancy/">
		<div class="cat-title lightgreen"><p>Prenatal / Infancy</p></div>
		<img class="category-img" data-object-fit="cover" src="<?php bloginfo('template_directory'); ?>/img/home/prenatal.jpg" alt="Prenatal / Infancy" /></a>	</div>
	</div> <!-- /.col -->
	
	<div class="col-md-2 col-sm-3 col-xs-4">
		<div class="innerbox lightorange">
		<a title="Childhood" href="http://www.herdignity.net/childhood/">
		<div class="cat-title lightorange"><p>Childhood</p></div>
		<img class="category-img" data-object-fit="cover" src="<?php bloginfo('template_directory'); ?>/img/home/childhood.jpg" alt="Childhood" /></a>
		</div>
	</div> <!-- /.col -->
	
	<div class="col-md-2 col-sm-3 col-xs-4">
		<div class="innerbox darkorange">
		<a title="Adolescence" href="http://www.herdignity.net/adolescence/">
		<div class="cat-title darkorange"><p>Adolescence</p></div>
		<img class="category-img" data-object-fit="cover" src="<?php bloginfo('template_directory'); ?>/img/home/adolescence.jpg" alt="Adolescence" /></a>	</div>
	</div> <!-- /.col -->

</div> <!-- /.row -->

<div class="hd-categories row is-table-row">

	<div class="aside col-md-2 col-sm-3 hidden-xs">
	<?php $post_id = 144; $queried_post = get_post($post_id); $post_url = get_permalink($post_id); ?>
<a href="<?php echo $post_url; ?>"><h2><?php echo $queried_post->post_title; ?></h2>
<?php echo $queried_post->post_excerpt; ?></a>
		<div class="bottom"></div>
	</div> <!-- /.col -->
	
	<div class="col-md-1 hidden-sm hidden-xs ls-col">
		<img class="lifespan" src="<?php bloginfo('template_directory'); ?>/img/ls-middle4@2x.png" alt="" />
	</div>
	
	<div class="extrablocks col-md-3 hidden-sm">
		<img class="category-img" src="<?php bloginfo('template_directory'); ?>/img/home/woman.jpg" alt="" />
	</div> <!-- /.col -->
	
	<div class="col-md-2 col-sm-3 col-xs-4">
		<div class="innerbox blue">
		<a title="Women" href="http://www.herdignity.net/women/">
		<div class="cat-title blue"><p>Women</p></div>
		<img class="category-img" data-object-fit="cover" src="<?php bloginfo('template_directory'); ?>/img/home/women.jpg" alt="Women" /></a>
		</div>
	</div> <!-- /.col -->
	
	<div class="col-md-2 col-sm-3 col-xs-4">
		<div class="innerbox green">
		<a title="Motherhood" href="http://www.herdignity.net/motherhood/">
		<div class="cat-title green"><p>Motherhood</p></div>
		<img class="category-img" data-object-fit="cover" src="<?php bloginfo('template_directory'); ?>/img/home/motherhood.jpg" alt="Motherhood" /></a>	</div>
	</div> <!-- /.col -->
	
	<div class="col-md-2 col-sm-3 col-xs-4">
		<div class="innerbox purple">
		<a title="Aging" href="http://www.herdignity.net/aging/">
		<div class="cat-title purple"><p>Aging</p></div>
		<img class="category-img" data-object-fit="cover" src="<?php bloginfo('template_directory'); ?>/img/home/aging.jpg" alt="Aging" /></a>
		</div>
	</div> <!-- /.col -->
	
</div> <!-- /.row -->

<div class="hd-categories row is-table-row">

	<div class="aside col-md-2 col-sm-3 hidden-xs">
	<?php $post_id = 143; $queried_post = get_post($post_id); $post_url = get_permalink($post_id); ?>
<a href="<?php echo $post_url; ?>"><h2><?php echo $queried_post->post_title; ?></h2>
<?php echo $queried_post->post_excerpt; ?></a>
		<div class="bottom"></div>
	</div> <!-- /.col -->
	
	<div class="col-md-1 hidden-sm hidden-xs ls-col">
		<img class="lifespan ls-bottom" src="<?php bloginfo('template_directory'); ?>/img/ls-bottom4@2x.png" alt="" />
	</div>
	
	<div class="extrablocks col-md-3 hidden-sm">
		<img class="category-img" src="<?php bloginfo('template_directory'); ?>/img/home/health.jpg" alt="" />
	</div> <!-- /.col -->
	
	<div class="col-md-2 col-sm-3 col-xs-4">
	<div class="innerbox medorange">
		<a title="HIV / AIDS" href="http://www.herdignity.net/hiv-aids/">
		<div class="cat-title medorange"><p>HIV / AIDS</p></div>
		<img class="category-img" data-object-fit="cover" src="<?php bloginfo('template_directory'); ?>/img/home/hiv.jpg" alt="HIV / AIDS" /></a>
		</div>
	</div> <!-- /.col -->
	
	<div class="col-md-2 col-sm-3 col-xs-4">
		<div class="innerbox brown">
		<a title="Healthy Communities" href="http://www.herdignity.net/healthy-communities/">
		<div class="cat-title brown"><p>Healthy Communities</p></div>
		<img class="category-img" data-object-fit="cover" src="<?php bloginfo('template_directory'); ?>/img/home/communities.jpg" alt="Healthy Communities" /></a>
		</div>
	</div> <!-- /.col -->
	
	<div class="col-md-2 col-sm-3 col-xs-4">
		<div class="innerbox cyan">
		<a title="Public Health" href="http://www.herdignity.net/public-health/">
		<div class="cat-title cyan"><p>Public Health</p></div>
		<img class="category-img" data-object-fit="cover" src="<?php bloginfo('template_directory'); ?>/img/home/public.jpg" alt="Public Health" /></a>
		</div>
	</div> <!-- /.col -->
	







<!-- 
 	<li class="public"><a title="Public Health" href="http://www.herdignity.net/public-health/">Public Health</a></li>
</ul>
</div>

</div>
-->

</div> <!-- /.row -->


<div class="footer-menu row hidden-md hidden-lg">
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


<?php get_footer(); ?>