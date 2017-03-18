<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=UTF-8" />

<!-- responsive -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	

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

<div class="row header">
	<div class="col-md-12 col-sm-12">
	
<!--  Begin Header -->
<?php get_search_form(); ?>
<h1 id="logo"><a href="<?php bloginfo('url'); ?>" title="<?php bloginfo('name'); ?>"><?php bloginfo('name'); ?></a></h1>
<div id="join"><a href="<?php bloginfo('url'); ?>/join/"><?php bloginfo('description'); ?></a></div>

<!--  Begin Menu -->
<div id="menu"><?php wp_nav_menu(  array( 'theme_location' => 'header-menu', 'container' => ''));  ?></div>

	</div> <!-- /.col -->
</div> <!-- /.row -->
<!--  End Header -->