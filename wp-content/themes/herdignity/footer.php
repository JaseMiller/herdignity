<!--  Begin Footer -->
<div id="footer">
<div class="tagline"><?php
query_posts('page_id=29'); 
global $more;
$more = 0; 
while (have_posts()) : the_post(); ?>
<?php the_content(); ?>				
<?php endwhile; ?>
<?php wp_reset_query(); ?>
</div>
<div class="copy">
<p class="slogan"><?php bloginfo('description'); ?></p>
<ul class="social">
<li class="fb"><a href="http://www.facebook.com/HerDignityNetwork" target="_blank">fb</a></li><li class="tw"><a href="http://www.twitter.com/herdignitynet" target="_blank">twitter</a></li><li class="pin"><a href="http://www.pinterest.com/herdignitynet" target="_blank">pinterest</a></li>
<li class="gplus"><a href="https://plus.google.com/u/2/100401946075114166668/posts"  target="_blank">google plus</a></li>
<li class="linkedin"><a href="http://www.linkedin.com/groups/Her-Dignity-Network-4892068?gid=4892068&trk=hb_side_g" target="_blank">linkedin</a></li>
<li class="rss"><a href="<?php bloginfo('url'); ?>/rss-2">rss</a></li>
</ul>
<?php
query_posts('page_id=35'); 
global $more;
$more = 0; 
while (have_posts()) : the_post(); ?>
<?php the_content(); ?>				
<?php endwhile; ?>
<?php wp_reset_query(); ?>
</div>


<div id="deco"></div>

</div>


</div> <!--  End Wrapper -->

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-1686586-7', 'herdignity.net');
  ga('send', 'pageview');

</script>
<?php wp_footer(); ?>
</body>
</html>