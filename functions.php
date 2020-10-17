<?php
/**
 * tu-isapre functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package tu-isapre
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'tu_isapre_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function tu_isapre_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on tu-isapre, use a find and replace
		 * to change 'tu-isapre' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'tu-isapre', get_template_directory() . '/languages' );

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
				'menu-1' => esc_html__( 'Primary', 'tu-isapre' ),
			)
		);

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
				'tu_isapre_custom_background_args',
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
endif;
add_action( 'after_setup_theme', 'tu_isapre_setup' );


function tu_isapre_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'tu-isapre' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'tu-isapre' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'tu_isapre_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function tu_isapre_scripts() {
	wp_enqueue_style( 'tu-isapre-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'tu-isapre-style', 'rtl', 'replace' );

	wp_enqueue_script( 'tu-isapre-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'tu_isapre_scripts' );


// Registro de menú
register_nav_menus(array(
	'Menu Principal' => esc_html__( 'Menú Principal', 'tu_isapre' ),
	'Menu Enlaces'  =>esc_html__( 'Menú Enlaces', 'tu_isapre'),
));
// Llama a navwalker
require get_template_directory() . '/bootstrap-navwalker.php';


// Css y js // 


function middleton_scripts() {

	wp_deregister_script('jquery');
    wp_register_script( 'jquery', 'https://code.jquery.com/jquery-3.5.1.js','',true );
	wp_enqueue_script( 'bootstrap-js','https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js', array( 'jquery' ),'',true );
	wp_enqueue_script( 'popper','https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js', array( 'jquery' ),'',true );
	wp_enqueue_script( 'aos-animate-js','https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.1/aos.js', array( 'jquery' ),'',true);
	wp_enqueue_script( 'main', get_template_directory_uri() . '/js/main.js',array('jquery'),'',true);
	
	wp_enqueue_style( 'font-awesome', 'https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
	wp_enqueue_style( 'aos-animate', 'https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.1/aos.css');
	wp_enqueue_style( 'bootstrap4', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css');
	wp_enqueue_style( 'animate-css','https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css');
	wp_enqueue_style( 'style', get_template_directory_uri() .'/css/main.css', false, null, 'all');
	}

	add_action( 'wp_enqueue_scripts', 'middleton_scripts' );

