<?php
/**
 * leisure-state functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package leisure-state
 */

if ( ! function_exists( 'leisure_state_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function leisure_state_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on leisure-state, use a find and replace
		 * to change 'leisure-state' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'leisure-state', get_template_directory() . '/languages' );

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
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'leisure-state' ),
      // 'menu-2' => esc_html__( 'Footer', 'leisure-state' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );
	}
endif;
add_action( 'after_setup_theme', 'leisure_state_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function leisure_state_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'leisure_state_content_width', 640 );
}
add_action( 'after_setup_theme', 'leisure_state_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function leisure_state_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Footer Text', 'leisure-state' ),
		'id'            => 'footer-text',
		'description'   => esc_html__( 'Add widgets here.', 'leisure-state' ),
		'before_widget' => '<div class="site-footer__text">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="site-footer__heading">',
		'after_title'   => '</h3>',
	) );
}
add_action( 'widgets_init', 'leisure_state_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function leisure_state_scripts() {
	wp_enqueue_style( 'leisure-state-style', get_stylesheet_uri() );

  wp_enqueue_script( 'leisure-state-scripts', get_template_directory_uri() . '/js/scripts.js', array('jquery'), '20180103', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'leisure_state_scripts' );

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

/**
 * Hide prefix before tag/category name on archive pages
 */
function my_theme_archive_title( $title ) {
  if ( is_category() ) {
    $title = single_cat_title( '', false );
  } elseif ( is_tag() ) {
    $title = single_tag_title( '', false );
  } elseif ( is_author() ) {
    $title = '<span class="vcard">' . get_the_author() . '</span>';
  } elseif ( is_post_type_archive() ) {
    $title = post_type_archive_title( '', false );
  } elseif ( is_tax() ) {
    $title = single_term_title( '', false );
  }
  return $title;
}
add_filter( 'get_the_archive_title', 'my_theme_archive_title' );
