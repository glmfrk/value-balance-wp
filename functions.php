<?php
/**
 * value-balance functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package value-balance
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function value_balance_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on value-balance, use a find and replace
		* to change 'value-balance' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'value-balance', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support( 'title-tag' );

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'header-main-menu' => 	__( 'Header menu ', 'value-balance' ),
			'footer-menu-2' => 	  	__( 'Footer menu 2', 'value-balance' ),
			'footer-menu-3' => 	  	__( 'Footer menu 3', 'value-balance' ),
			'footer-menu-4' => 	  	__( 'Footer menu 4', 'value-balance' ),
		)
	);

	// This theme slider register function 



	


	// function testimonial_slider_func() {
	// 	$args = array(
	// 		'public'    => true,
	// 		'label'     => __( 'Icon Box', 'value-balance' ),
	// 		'menu_icon' => 'dashicons-format-quote',
	// 		'menu_position' => 27,
	// 		'supports' => array('title', 'editor','thumbnail', 'custom-field','post-formats' ),
			
	// 	);
	// 	register_post_type( 'iconBox', $args );

	// 	$args = array(
	// 		'public'    => true,
	// 		'label'     => __( 'Accordion', 'value-balance' ),
	// 		'menu_icon' => 'dashicons-format-quote',
	// 		'menu_position' => 29,
	// 		'supports' => array('title', 'editor', ),
			
	// 	);
	// 	register_post_type( 'accordion', $args );
	// }
	// add_action( 'init', 'testimonial_slider_func' );

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'value_balance_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'value_balance_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function value_balance_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'value_balance_content_width', 640 );
}
add_action( 'after_setup_theme', 'value_balance_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function value_balance_widgets_init() {

	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer Column 1', 'value-balance' ),
			'id'            => 'footer-column-1',
			'description'   => esc_html__( 'Add widgets here.', 'value-balance' ),
			'before_widget' => '<div class="footer-widget footer-widget-text"> ',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="footer-widget-title">',
			'after_title'   => '</h3>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer Column 2', 'value-balance' ),
			'id'            => 'footer-column-2',
			'description'   => esc_html__( 'Add widgets here.', 'value-balance' ),
			'before_widget' => '<div class="footer-widget footer-widget-nav">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="footer-widget-title">',
			'after_title'   => '</h3>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer Column 3', 'value-balance' ),
			'id'            => 'footer-column-3',
			'description'   => esc_html__( 'Add widgets here.', 'value-balance' ),
			'before_widget' => '<div class="footer-widget footer-widget-nav">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="footer-widget-title">',
			'after_title'   => '</h3>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer Column 4', 'value-balance' ),
			'id'            => 'footer-column-4',
			'description'   => esc_html__( 'Add widgets here.', 'value-balance' ),
			'before_widget' => '<div class="footer-widget footer-widget-nav">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="footer-widget-title">',
			'after_title'   => '</h3>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer Column 5', 'value-balance' ),
			'id'            => 'footer-column-5',
			'description'   => esc_html__( 'Add widgets here.', 'value-balance' ),
			'before_widget' => '<div class="footer-widget footer-widget-nav">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="footer-widget-title">',
			'after_title'   => '</h3>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer Copyright Left', 'value-balance' ),
			'id'            => 'copyright-left',
			'description'   => esc_html__( 'Add Copyright Text Here.', 'value-balance' ),
			'before_widget'  => '<p>',
			'after_widget'   => '</p>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer Copyright Right', 'value-balance' ),
			'id'            => 'copyright-right',
			'description'   => esc_html__( 'Add Developer Info Here.', 'value-balance' ),
			'before_widget'  => '<p>',
			'after_widget'   => '</p>',
		)
	);

}
add_action( 'widgets_init', 'value_balance_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function value_balance_scripts() {

	wp_enqueue_style('fontawedome', get_template_directory_uri() . '/assets/css/all.min.css', array(), '1.0.0', 'all');
	wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '1.0.0', 'all');
	wp_enqueue_style('owl-carousel', get_template_directory_uri() . '/assets/css/owl.carousel.min.css', array(), '1.0.0', 'all');
	wp_enqueue_style('base-styles', get_template_directory_uri() . '/assets/css/style.css', array(), '1.0.0', 'all');
	wp_enqueue_style('custom-styles', get_template_directory_uri() . '/assets/css/custom.css', array(), '1.0.0', 'all');
	wp_enqueue_style( 'value-balance-style', get_stylesheet_uri(), array(), '1.0.0', 'all');

	// js files enqueue start
	wp_enqueue_script( 'bootstrap',get_template_directory_uri() . '/assets/js/bootstrap.min.js',array('jquery'), '1.0.0', 'all', true);
	wp_enqueue_script( 'ow-carousel',get_template_directory_uri() . '/assets/js/owl.carousel.min.js',array('jquery'), '1.0.0', 'all', true);
	wp_enqueue_script( 'custom-scripts',get_template_directory_uri() . '/assets/js/scripts.js',array('jquery'), '1.0.0', 'all', true);
}
add_action( 'wp_enqueue_scripts', 'value_balance_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

