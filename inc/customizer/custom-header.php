<?php
/**
 * Sample implementation of the Custom Header feature
 *
 * You can add an optional custom header image to header.php like so ...
 *
	<?php the_header_image_tag(); ?>
 *
 * @link https://developer.wordpress.org/themes/functionality/custom-headers/
 *
 * @package fitness-passion
 */

/**
 * Set up the WordPress core custom header feature.
 *
 * @uses fitness_passion_header_style()
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

function fitness_passion_custom_header_setup() {
	add_theme_support( 'custom-header', apply_filters( 'fitness_passion_custom_header_args', array(
		'default-image'          => get_template_directory_uri().'/assets/images/header_default.jpg',
		'default-text-color'     => '#ffffff',
		'width'                  => 1000,
		'height'                 => 250,
		'flex-height'            => true,
		'wp-head-callback'       => 'fitness_passion_header_style',
	) ) );
}
add_action( 'after_setup_theme', 'fitness_passion_custom_header_setup' );

if ( ! function_exists( 'fitness_passion_header_style' ) ) :
	/**
	 * Styles the header image and text displayed on the blog.
	 *
	 * @see fitness_passion_custom_header_setup().
	 */
	function fitness_passion_header_style() {
		
		$header_text_color = get_header_textcolor();

		/*
		 * If no custom options for text are set, let's bail.
		 * get_header_textcolor() options: Any hex value, 'blank' to hide text. Default: add_theme_support( 'custom-header' ).
		 */
		if ( get_theme_support( 'custom-header', 'default-text-color' ) === $header_text_color ) {
			return;
		}

		// If we get this far, we have custom styles. Let's do this.
		?>
		<style type="text/css">

		<?php if ( ! display_header_text() ) : ?>
		.site-branding .site-title,
		.site-branding .site-description {
				position: absolute;
				clip: rect(1px, 1px, 1px, 1px);
			}
		<?php else: ?>
		.site-branding .site-title a,
		.site-branding .site-description {
				color: #<?php echo esc_attr( $header_text_color ); ?>;
			}
		<?php endif; ?>
		</style>
		<?php
	}
endif;
