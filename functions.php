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

		add_post_type_support( 'page', 'excerpt' );

		add_image_size( 'fitness_passion_custom_size', 686, 370, true );
		add_image_size( 'fitness_passion_widget_posts', 80, 80 );


		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'fitness-passion' )
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
		*
		* See: https://codex.wordpress.org/Post_Formats
		*/
		add_theme_support(
			'post-formats',
			array(
				'video',
				'quote',
				'link',
				'gallery',
				'audio',
			)
		);

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


/**
 * Enqueue scripts and styles.
 */
function fitness_passion_scripts() {
	
	wp_enqueue_style( 'bootsrap-css', get_template_directory_uri() . '/assets/css/bootstrap.min.css' ,array(),'3.3.7');
		
	wp_enqueue_style( 'font-awesome-css', get_template_directory_uri() . '/assets/fonts/font-awesome.min.css' ,array(),'4.7.0');
	
	wp_enqueue_style( 'fitness-passion_main_menu', get_template_directory_uri() . '/assets/css/main-menu.min.css' );
		
	wp_enqueue_style('fitness-passion-google-fonts-open-sans', '//fonts.googleapis.com/css?family=Assistant:200,300,400,600,700,800&display=swap');
	
	wp_enqueue_style('fitness-passion-google-fonts-Teko', '//fonts.googleapis.com/css?family=Teko:400,500,700,900');
	
	wp_enqueue_style( 'fitness-passion-style', get_stylesheet_uri());
	wp_style_add_data( 'fitness-passion-style', 'rtl', 'replace' );
	
	wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array(), '3.3.7', true );
	
	wp_enqueue_script( 'fitness-passion-navigation', get_template_directory_uri() . '/assets/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'fitness-passion-skip-link-focus-fix', get_template_directory_uri() . '/assets/js/skip-link-focus-fix.js', array(), '20151215', true );

	wp_enqueue_script( 'fitness-passion-init', get_template_directory_uri() . '/assets/js/init.js', array('jquery'), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	if(get_theme_mod('fitness_passion_show_slider') || get_theme_mod('fitness_passion_landing_testimonials_show')){
			wp_enqueue_style( 'jquery-cycle2-css', get_template_directory_uri() . '/assets/css/jquery.cycle2.min.css' ,array(),'');
			wp_enqueue_script( 'jquery-cycle2-js', get_template_directory_uri() . '/assets/js/jquery.cycle2.min.js', array('jquery'), '2.1.6', true );
	}

	if(get_theme_mod('fitness_passion_show_animations',true)){
			wp_enqueue_style( 'aos-css', get_template_directory_uri() .'/assets/css/aos.min.css' );
			wp_enqueue_script( 'aos-js', get_template_directory_uri() . '/assets/js/aos.min.js', array('jquery'), '2.0.0', true );
		
	}

	$arrayOptions = array(
		'animations' => get_theme_mod('fitness_passion_show_animations',true),
	);
	
	wp_localize_script('fitness-passion-init', 'theme_options', $arrayOptions);

}
add_action( 'wp_enqueue_scripts', 'fitness_passion_scripts' );

/**
 * admin scripts
 */
function fitness_passion_admin_scripts( $hook )
{
	wp_enqueue_style( 'fitness-passion-admin-css', get_template_directory_uri() . '/assets/css/admin.min.css' );
    
}
add_action( 'admin_enqueue_scripts', 'fitness_passion_admin_scripts' );

/**
 * Enqueue editor scripts for Customizer
 */
function fitness_passion_customize_controls_js(){

	wp_enqueue_script( 'fit-passion-customizer-controls', get_template_directory_uri() . '/inc/customizer/js/customizer-controls.js', array( 'jquery' ), '20151215', true );
	
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
 * Filter navigation post links.
 *
 * split titles
 */

function fitness_passion_next_post_link( $output, $format, $link, $post ) {
	if ( ! $post ) {
	return '';
  }

  return sprintf(
	  '<div class="nav-next"><a href="%1$s" title="%2$s">%3$s &rarr;</a></div>',
		esc_url(get_permalink( $post )),
		$post->post_title,
		wp_trim_words($post->post_title,3,'...')
  );
}
add_filter( 'next_post_link','fitness_passion_next_post_link' , 10, 4 );

function fitness_passion_previous_post_link( $output, $format, $link, $post ) {
	if ( ! $post ) {
	return '';
  }

  return sprintf(
	  '<div class="nav-previous"><a href="%1$s" title="%2$s">&larr; %3$s</a></div>',
		esc_url(get_permalink( $post )),
		$post->post_title,
		wp_trim_words($post->post_title,3,'...')
  );
}
add_filter( 'previous_post_link', 'fitness_passion_previous_post_link', 10, 4 );


/**
 * Remove testimonials category for the loop
 */
function fitness_passion_testimonials_cat( $wp_query ) {  
	if(get_theme_mod('fitness_passion_landing_testimonials_exclude',true)){
		$testimonials_slug = get_theme_mod('fitness_passion_landing_testimonial_category', 'testimonials');
		if(get_category_by_slug($testimonials_slug)){
			$excluded = '-'.get_category_by_slug($testimonials_slug)->term_id;
			if( !is_admin() && $wp_query->is_main_query() && (is_home() || is_archive() || is_search())) {
				$wp_query->set( 'cat', $excluded );
				
			}
		}

		
	}
}
add_action( 'pre_get_posts', 'fitness_passion_testimonials_cat' );

/**
 * A get_post_gallery() polyfill for Gutenberg
 *
 * @param string $gallery The current gallery html that may have already been found (through shortcodes).
 * @param int $post The post id.
 * @return string The gallery html.
 */
function fitness_passion_get_post_gallery( $gallery, $post ) {
	// Already found a gallery so lets quit.
	if ( $gallery ) {
		return $gallery;
	}
	// Check the post exists.
	$post = get_post( $post );
	if ( ! $post ) {
		return $gallery;
	}
	// Not using Gutenberg so let's quit.
	if ( ! function_exists( 'has_blocks' ) ) {
		return $gallery;
	}
	// Not using blocks so let's quit.
	if ( ! has_blocks( $post->post_content ) ) {
		return $gallery;
	}
	/**
	 * Search for gallery blocks and then, if found, return the html from the
	 * first gallery block.
	 *
	 * Thanks to Gabor for help with the regex:
	 * https://twitter.com/javorszky/status/1043785500564381696.
	 */
	$pattern = "/<!--\ wp:gallery.*-->([\s\S]*?)<!--\ \/wp:gallery -->/i";
	preg_match_all( $pattern, $post->post_content, $the_galleries );
	// Check a gallery was found and if so change the gallery html.
	if ( ! empty( $the_galleries[1] ) ) {
	
		$gallery = reset( $the_galleries[1] );
		
	}
	return $gallery;
}
add_filter( 'get_post_gallery', 'fitness_passion_get_post_gallery', 10, 2 );


/**
 *
 * Append cart item (and cart count) to end of main menu.
 *
 */

function fitness_passion_append_cart_icon( $items, $args ) {

	if( get_theme_mod('fitness_passion_cart_icon_show', true) && fitness_passion_is_woocommerce_activated()){

		$cart_item_count = WC()->cart->get_cart_contents_count();
		$cart_count_span = '';
		if ( $cart_item_count ) {
			$cart_count_span = '<span class="count">'.$cart_item_count.'</span>';
		} 
		$cart_link = '<li class="cart menu-item menu-item-type-post_type menu-item-object-page"><a href="' . get_permalink( wc_get_page_id( 'cart' ) ) . '"><i class="fa fa-shopping-cart">'.$cart_count_span.'</i></a></li>';
		// Add the cart link to the end of the menu.
		$items = $items . $cart_link;
		
	}
	return $items;
}
add_filter( 'wp_nav_menu_items', 'fitness_passion_append_cart_icon', 10, 2 );

/**
 * Modify comments form fields
 */

add_filter( 'comment_form_defaults', 'fitness_passion_modify_fields_form' );

function fitness_passion_modify_fields_form( $args ){

	$commenter = wp_get_current_commenter();
	$req = get_option( 'require_name_email' );
	$aria_req = ( $req ? " aria-required='true'" : '' );

	$author = '<input placeholder="'.__( 'Name','fitness-passion' ) . ( $req ? ' *' : '' ).'" id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) .'" size="30"' . $aria_req . ' />';
	$email = '<div class="fields-wrap"><input placeholder="'.__( 'Email','fitness-passion'  ) . ( $req ? ' *' : '' ).'" id="email" name="email" type="text" value="' . esc_attr( $commenter['comment_author_email'] ) .'" size="30"' . $aria_req . ' />';
	$url = '<input placeholder="'.__( 'Website','fitness-passion'  ).'" id="url" name="url" type="text" value="' . esc_attr( $commenter['comment_author_url'] ) .'" size="30" /></div>';
	$comment = '<textarea placeholder="'. __( 'Comment', 'fitness-passion' ).'" id="comment" name="comment" cols="45" rows="8" aria-required="true"></textarea>';
	
	
	$args['fields']['author'] = $author;
	$args['fields']['email'] = $email;
	$args['fields']['url'] = $url;
	$args['comment_field'] = $comment;

	return $args;

}

/**
 * Modify comments form fields order
 */

add_filter( 'comment_form_fields', 'fitness_passion_modify_order_fields' );

function fitness_passion_modify_order_fields( $fields ){
	//var_dump($fields);
	$val = $fields['comment'];
	$val2 = $fields['cookies'];
	unset($fields['comment']);
	unset($fields['cookies']);

	$fields += array('comment' => $val );
	$fields += array('cookies' => $val2 );

	return $fields;
}


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

/**
 * Admin panel.
 */
require get_template_directory() . '/inc/theme-panel.php';





