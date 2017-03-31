/**
 * HerDignity's functions and definitions
 *
 * @package HerDignity
 * @since HerDignity 2.0
 * revised from v1 by JASE.IS
 */
 
/**
 * First, let's set the maximum content width based on the theme's design and stylesheet.
 * This will limit the width of all uploaded images and embeds.
 */
if ( ! isset( $content_width ) )
    $content_width = 800; /* pixels */
 
if ( ! function_exists( 'herdignity_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which runs
 * before the init hook. The init hook is too late for some features, such as indicating
 * support post thumbnails.
 */
function herdignity_setup() {
 
    /**
     * Make theme available for translation.
     * Translations can be placed in the /languages/ directory.
     */
    load_theme_textdomain( 'herdignity', get_template_directory() . '/languages' );
 
    /**
     * Add default posts and comments RSS feed links to <head>.
     */
    add_theme_support( 'automatic-feed-links' );
 
 	/**
     * Add support for HerDignity v1 post types HomeSlides and Featured.
     */
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

 
    /**
     * Enable support for post thumbnails and featured images.
     * Added array of post-thumbnails from HerDignity v1.
     */
    add_theme_support( 'post-thumbnails', array( 'page', 'post', 'homeslides', 'featured' ) );
 
    /**
     * Add support for two custom navigation menus.
     * Header, Side, and Extra were brought over from HerDignity v1.
     */
    register_nav_menus( array(
        'primary'   => __( 'Primary Menu', 'herdignity' ),
        'secondary' => __('Secondary Menu', 'herdignity' ),
        'header-menu' => __( 'Header Menu' ),
		'side-menu' => __( 'Side Menu' ),
		'extra-menu' => __( 'Extra Menu' )
    ) );
    
    
    /**
     * Enable support for the following post formats:
     * aside, gallery, quote, image, and video
     * Added featured and homeslides based on HerDignity v1 functions, though post-formats was not in the original functions file.
     */
    add_theme_support( 'post-formats', array ( 'aside', 'gallery', 'quote', 'image', 'video', 'featured', 'homeslides' ) );
 	
 	/**
     * Excerpt length function and filter from HerDignity v1
     */
	function new_excerpt_length($length) {
		return 20;
	}
	add_filter('excerpt_length', 'new_excerpt_length');
	function new_excerpt_more( $more ) {
		global $post;
		return '... <a class="moretag" href="'. get_permalink($post->ID) . '"> [Read More]</a>';
	}
	add_filter('excerpt_more', 'new_excerpt_more');


	/**
     * Enable support for Bootstrap navigation menu integration with WordPress.
     * Register Custom Navigation Walker for Bootstrap menu implementation
     */
	require_once('wp-bootstrap-navwalker.php');
	register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'herdignity' ),
	) );
	wp_enqueue_script( 'wp-bootstrap-navwalker.php', get_template_directory_uri() . '', array ( 'jquery' ), 1.1, true);

}
endif; // herdignity_setup
add_action( 'after_setup_theme', 'herdignity_setup' );
add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );