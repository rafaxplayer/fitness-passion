<?php
/**
 * fitness_passion functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package fitness_passion
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

if ( ! function_exists( 'fitness_passion_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function fitness_passion_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on fitness-passion, use a find and replace
		 * to change 'fitness-passion' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'fitness-passion', get_template_directory() . '/languages' );

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

		add_image_size( 'custom-size', 500, 370, true );
		add_image_size( 'widget-posts', 80, 80 );


		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'fitness-passion' ),
			'social-nav' => __( 'Social Nav', 'fitness-passion' ),
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

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'fitness_passion_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
		// Add styles for editor
		add_editor_style( 'editor-style.css' );

		// Add support for woocommerce
		add_theme_support( 'woocommerce' );

	}
endif;
add_action( 'after_setup_theme', 'fitness_passion_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function fitness_passion_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'fitness_passion_content_width', 640 );
}
add_action( 'after_setup_theme', 'fitness_passion_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function fitness_passion_widgets_init() {

	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'fitness-passion' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'fitness-passion' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'fitness_passion_widgets_init' );


function fitness_passion_excerpt_more($more) {
	global $post;
 return '<a class="moretag" href="'. esc_url(get_permalink($post->ID)) . '">'.__(' Read More','fitness-passion').'</a>';
}
add_filter('excerpt_more', 'fitness_passion_excerpt_more');


function fitness_passion_excerpt_length ($length) {
	return get_theme_mod('fitness_passion_blog_excerpt', 55);
}
add_filter ('excerpt_length', 'fitness_passion_excerpt_length', 999);

 
/**
 * Enqueue scripts and styles.
 */
function fitness_passion_scripts() {

	wp_enqueue_style( 'bootsrap-css', get_template_directory_uri() . '/assets/css/bootstrap.min.css' ,array(),'3.3.7');
		
	wp_enqueue_style( 'font-awesome-css', get_template_directory_uri() . '/assets/fonts/font-awesome.min.css' ,array(),'4.7.0');
	
	wp_enqueue_style( 'fitness-passion_main_menu', get_template_directory_uri() . '/assets/css/main-menu.css' );
		
	wp_enqueue_style('fitness-passion-google-fonts-Assistant', '//fonts.googleapis.com/css?family=Assistant:200,300,400,700,800');
	
	wp_enqueue_style('fitness-passion-google-fonts-Teko', '//fonts.googleapis.com/css?family=Teko:400,500,700,900');
	
	wp_enqueue_style( 'fitness-passion-style', get_stylesheet_uri() );
	
	wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array(), '3.3.7', true );
		
	wp_enqueue_script( 'fitness-passion-navigation', get_template_directory_uri() . '/assets/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'fitness-passion-skip-link-focus-fix', get_template_directory_uri() . '/assets/js/skip-link-focus-fix.js', array(), '20151215', true );

	wp_enqueue_script( 'fitness-passion-init', get_template_directory_uri() . '/assets/js/init.js', array('jquery'), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	if(get_theme_mod('fitness_passion_show_slider') || get_theme_mod('fitness_passion_landing_testimonials_show')){
			wp_enqueue_style( 'jquery-cycle2-css', get_template_directory_uri() . '/assets/css/jquery.cycle2.css' ,array(),'');
			wp_enqueue_script( 'jquery-cycle2-js', get_template_directory_uri() . '/assets/js/jquery.cycle2.js', array('jquery'), '2.1.6', true );
	}

	if(get_theme_mod('fitness_passion_show_animations',true)){
			wp_enqueue_style( 'aos-css', get_template_directory_uri() .'/assets/css/aos.css' );
			wp_enqueue_script( 'aos-js', get_template_directory_uri() . '/assets/js/aos.min.js', array('jquery'), '2.0.0', true );
		
	}
}
add_action( 'wp_enqueue_scripts', 'fitness_passion_scripts' );

/**
 * Enqueue editor scripts for Customizer
 */
function fitness_passion_customize_controls_js(){

	wp_enqueue_script( 'fit-passion-customizer-controls', get_template_directory_uri() . '/assets/js/customizer-controls.js', array( 'jquery' ), '20151215', true );
	
	$arrayOptions = array(
		'couches_number' => get_theme_mod('fitness_passion_landing_coaches_number'),
		'testimonials_number' => get_theme_mod('fitness_passion_landing_testimonials_number'),
	);
		
	wp_localize_script('fit-passion-customizer-controls', 'theme_options', $arrayOptions);

}

add_action( 'customize_controls_enqueue_scripts', 'fitness_passion_customize_controls_js' );


/**
 * Enqueue editor styles for Gutenberg
 */
function fitness_passion_block_editor_styles() {
	// Block styles.
	wp_enqueue_style( 'fitness_passion-block-editor-style', get_template_directory_uri() . 'assets/css/editor-blocks.css' );
		
}

add_action( 'enqueue_block_editor_assets', 'fitness_passion_block_editor_styles' );


/**
 * Add customizer link on admin panel
 */
function fitness_passion_customizer_menu() {

	add_theme_page( __('Fitness Passion Theme','fitness-passion'), __('Fitness Passion Theme','fitness-passion'), 'edit_theme_options', 'customize.php' );
}

add_action( 'admin_menu', 'fitness_passion_customizer_menu' );

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * load template hooks
 */
require get_template_directory() . '/inc/template-hooks.php';

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/customizer/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer/customizer.php';

/**
 * Customizer css.
 */
require get_template_directory() . '/inc/customizer/customizer-css.php';

/**
 * TGM.
 */
require get_template_directory() . '/inc/tgm/plugins-recomended.php';

/**
 * widgets.
 */
require get_template_directory() . '/inc/widgets/recent-posts.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}



