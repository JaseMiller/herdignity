<?php
if ( function_exists('register_sidebar') )
register_sidebar(array('name'=>'Sidebar',
'before_widget' => '<li>',
'after_widget' => '</li>',
'before_title' => '<h2>',
'after_title' => '</h2>',
));

add_action( 'init', 'create_post_type' );
function create_post_type() {
register_post_type( 'HomeSlides',
	array(
	'labels' => array(
	'name' => __( 'HomeSlides' ),
	'singular_name' => __( 'HomeSlide' )
),
	'public' => true,
	'has_archive' => true,
	'supports' => array( 'title', 'editor', 'custom-fields','thumbnail')
)
	);
register_post_type( 'Featured',
	array(
	'labels' => array(
	'name' => __( 'Featured' ),
	'singular_name' => __( 'Featured' )
),
	'public' => true,
	'has_archive' => true,
	'supports' => array( 'title', 'editor', 'thumbnail','excerpt')
)
	);

}
add_filter('single_template', create_function('$t', 'foreach( (array) get_the_category() as $cat ) { if ( file_exists(TEMPLATEPATH . "/single-{$cat->term_id}.php") ) return TEMPLATEPATH . "/single-{$cat->term_id}.php"; } return $t;' )); 



add_theme_support( 'post-thumbnails', array( 'page', 'post', 'homeslides', 'featured' ) );  

function new_excerpt_length($length) {
	return 20;
}
add_filter('excerpt_length', 'new_excerpt_length');
function new_excerpt_more( $more ) {
	global $post;
	return '... <a class="moretag" href="'. get_permalink($post->ID) . '"> [Read More]</a>';
}
add_filter('excerpt_more', 'new_excerpt_more');


function register_my_menus() {
register_nav_menus(
array(
'header-menu' => __( 'Header Menu' ),
'side-menu' => __( 'Side Menu' ),
'extra-menu' => __( 'Extra Menu' ))
);
}

add_action( 'init', 'register_my_menus' );
$myExcerpt = get_the_excerpt();
  $tags = array("<p>", "</p>");
  $myExcerpt = str_replace($tags, "", $myExcerpt);
  echo $myExcerpt;
?>