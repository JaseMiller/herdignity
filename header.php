<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=UTF-8" />

<!-- responsive // js is called here as a workaround from v1 -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="   crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js" integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU="   crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<!-- SmartMenus jQuery Bootstrap Addon CSS -->
	<link href="<?php bloginfo('template_directory'); ?>/js/addons/bootstrap/jquery.smartmenus.bootstrap.css" rel="stylesheet">
	<!-- SmartMenus jQuery plugin -->
	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.smartmenus.js"></script>
	<!-- SmartMenus jQuery Bootstrap Addon -->
	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/addons/bootstrap/jquery.smartmenus.bootstrap.js"></script>
	
	
	
	
	
<title><?php if (is_single() || is_page() || is_archive()) { wp_title('',true); } else { bloginfo('name'); echo(' &#8212; '); bloginfo('description'); } ?></title>
<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" /> <!-- leave this for stats -->
<link rel="Shortcut Icon" href="<?php bloginfo('template_directory'); ?>/favicon.ico"/>
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/style2.css" type="text/css" media="screen" />

<meta http-equiv="X-UA-Compatible" content="IE=8" />
<!--[if gte IE 7]>
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/ie7.css" type="text/css" />
<![endif]-->
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<link href='http://fonts.googleapis.com/css?family=Lato:100' rel='stylesheet' type='text/css'>
<?php wp_head(); ?>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/media-scroll.js"></script>


</head>

<body <?php if(is_singular()) { echo ' class="'.$post->post_name.'"'; } ?>>

	<div class="container">
        <div class="content">
        
			<div id="wrapper">

<!--  Begin Header -->
<div class="row header-top">

	<div class="search col-md-6 col-md-offset-4 col-sm-8 col-sm-offset-2 col-xs-8 col-xs-offset-2">
		<?php get_search_form(); ?>
	</div> <!-- /.col -->

</div> <!-- /.row -->
<div class="row header is-table-row">

	<div class="logo col-md-3 col-sm-3 col-xs-12">
		<h1><a href="<?php bloginfo('url'); ?>" title="<?php bloginfo('name'); ?>">
		<img class="" src="<?php bloginfo('template_directory'); ?>/img/separate/logo.png" alt="<?php bloginfo('name'); ?>" /></a></h1>
	</div> <!-- /.col -->
	
	<div class="joinheader col-md-7 col-sm-7 col-xs-8">
		<div class="tag">
			<a href="<?php bloginfo('url'); ?>/join/">
			<?php bloginfo('description'); ?></a>
		</div> <!-- /.joinheader -->
	</div> <!-- /.col -->
	<div class="joinheader col-md-2 col-sm-2 col-xs-4">
		<a href="<?php bloginfo('url'); ?>/join/">
			<img class="join-circle pull-right" src="<?php bloginfo('template_directory'); ?>/img/join-the-network.svg" alt="Join the Network" /></a>
	</div>

</div> <!-- /.row -->

	<div class="tag-mobile">
		<?php bloginfo('description'); ?>
	</div>
	
<div class="row header-bottom">

	<div class="navigation col-md-12 col-sm-12 col-xs-12">
		<!--  Begin Menu -->
		<nav class="navbar navbar-default" role="navigation">
  			<div class="container-fluid navbar-right">
    		<!-- Brand and toggle get grouped for better mobile display -->
    			<div class="navbar-header">
      				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        			<span class="sr-only">Toggle navigation</span>
        			<span class="icon-bar"></span>
        			<span class="icon-bar"></span>
        			<span class="icon-bar"></span>
      				</button>
    			</div>
    
				<?php wp_nav_menu( 
				array(
				'menu'              => 'primary',
                'theme_location'    => 'header-menu',
                'depth'             => 4,
                'container'         => 'div',
                'container_class'   => 'collapse navbar-collapse',
                'container_id'      => 'bs-example-navbar-collapse-1',
                'menu_class'        => 'nav navbar-nav navbar-hdn navbar-right dropdown hover',
                'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                'walker'            => new WP_Bootstrap_Navwalker())
                );  ?>
			
			</div>
		</nav>
	
	</div> <!-- /.col -->

</div> <!-- /.row --> <!--  /.header -->

