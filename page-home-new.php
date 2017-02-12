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

<div id="buttons">
<ul class="row1">
 	<li class="girl"></li>
 	<li class="prenatal"><a title="Prenatal / Infancy" href="http://www.herdignity.net/prenatal-infancy/">Prental / Infancy</a></li>
 	<li class="childhood"><a title="Childhood" href="http://www.herdignity.net/childhood/">Childhood</a></li>
 	<li class="teen"><a title="Adolescence" href="http://www.herdignity.net/adolescence/">Adolescence</a></li>
</ul>
<ul class="row2">
 	<li class="woman"></li>
 	<li class="women"><a title="Women" href="http://www.herdignity.net/women/">Women</a></li>
 	<li class="mother"><a title="Motherhood" href="http://www.herdignity.net/motherhood/">Motherhood</a></li>
 	<li class="aging"><a title="Aging" href="http://www.herdignity.net/aging/">Aging</a></li>
</ul>
<ul class="row3">
 	<li class="health"></li>
 	<li class="hiv"><a title="HIV / AIDS" href="http://www.herdignity.net/hiv-aids/">HIV / AIDS</a></li>
 	<li class="communities"><a title="Healthy Communities" href="http://www.herdignity.net/healthy-communities/">Healthy Communities</a></li>
 	<li class="public"><a title="Public Health" href="http://www.herdignity.net/public-health/">Public Health</a></li>
</ul>
</div>

</div>
</div>


<?php get_footer(); ?>