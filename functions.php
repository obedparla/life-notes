<?php
/**
 * life-notes functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package life-notes
 */

if ( ! function_exists( 'life_notes_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function life_notes_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on life-notes, use a find and replace
	 * to change 'life-notes' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'life-notes', get_template_directory() . '/languages' );

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
        add_image_size('large-thumb', 9999, 9999, true);
        add_image_size('index-thumb', 1024, 460, true);
        add_image_size('index-thumb2', 1024, 360, true);
        add_image_size('index-thumb3', 1024, 420, true);

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary', 'life-notes' ),
                'social' => __( 'Social Menu', 'my-simone'),

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

	/*
	 * Enable support for Post Formats.
	 * See https://developer.wordpress.org/themes/functionality/post-formats/
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
	) );

	// Set up the WordPress core custom background feature.
//	add_theme_support( 'custom-background', apply_filters( 'life_notes_custom_background_args', array(
//		'default-color' => 'ffffff',
//		'default-image' => '',
//	) ) );
}
endif;
add_action( 'after_setup_theme', 'life_notes_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function life_notes_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'life_notes_content_width', 770 );
}
add_action( 'after_setup_theme', 'life_notes_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function life_notes_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Widget Area', 'life-notes' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
            ) );
            
        register_sidebar( array(
		'name'          => esc_html__( 'Footer Widgets', 'life-notes' ),
		'id'            => 'sidebar-2',
		'description'   => __('Adds widgets to the footer', 'life-notes'), 
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'life_notes_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function life_notes_scripts() {
	wp_enqueue_style( 'life-notes-style', get_stylesheet_uri() );
        
        wp_enqueue_style('life-notes-content-sidebar', get_template_directory_uri() . '/layouts/content-sidebar.css');
        
        wp_enqueue_style('life-notes-google-fonts','https://fonts.googleapis.com/css?family=PT+Serif:400,400italic,700,700italic|Lato:100,100italic,400italic,700,900,900italic,700italic,400|Rock+Salt|Handlee|Merriweather:400,400italic,700,700italic|Fira+Sans:400,400italic,700,700italic');

        wp_enqueue_style('life-notes-awesome-fonts','https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css');
        
	wp_enqueue_script( 'life-notes-navigation', get_template_directory_uri() . '/js/functions.js', array( 'jquery' ), '20120206', true );
        
        wp_enqueue_script( 'life-notes-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );
        
        wp_enqueue_script( 'life-notes-show-search-toggle', get_template_directory_uri() . '/js/show-toggle-search.js', array(), '20160202', true );
        
        //wp_enqueue_script( 'life-notes-superfish', get_template_directory_uri() . '/js/superfish.min.js', array('jquery'), '20151230', true );

        //wp_enqueue_script( 'life-notes-superfish-settings', get_template_directory_uri() . '/js/superfish-settings.js', array('life-notes-superfish'), '20151230', true );
        
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'life_notes_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';