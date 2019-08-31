<?php
/**
 * fitness_passion Theme Customizer
 *
 * @package fitness_passion
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

function fitness_passion_customize_register( $wp_customize ) {

	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
	$wp_customize->get_setting( 'background_color' )->default   = '#19232f';

	if ( isset( $wp_customize->selective_refresh ) ) {

		$wp_customize->selective_refresh->add_partial( 'blogname', array(
			'selector'        => '.site-title a',
			'render_callback' => 'fitness_passion_customize_partial_blogname',
		) );

		$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
			'selector'        => '.site-description',
			'render_callback' => 'fitness_passion_customize_partial_blogdescription',
		) );

		// header options
		$wp_customize->selective_refresh->add_partial( 'fitness_passion_front_page_header_title', array(
			'selector'        => '.home .fp_header_title',
						
		) );

		$wp_customize->selective_refresh->add_partial( 'fitness_passion_front_page_header_subtitle', array(
			'selector'        => '.home .fp_header_subtitle',
			
		) );

		$wp_customize->selective_refresh->add_partial( 'fitness_passion_front_page_header_button', array(
			'selector'        => '.fp_header_button',
			
		) );

		// header options
		$wp_customize->selective_refresh->add_partial( 'fitness_passion_blog_page_header_title', array(
			'selector'        => '.blog .fp_header_title',
						
		) );

				
	}

	if ( class_exists( 'WP_Customize_Control' ) ) {
				
		require_once( get_template_directory() . '/inc/customizer/custom-controls/separator-control.php' );
		require_once( get_template_directory() . '/inc/customizer/custom-controls/custom-controls.php' );
	}

	
	/**
	 * 
	 * Theme panel
	 * 
	 * */

	 $sep = 0;

	$wp_customize->add_panel( 'fitness_passion_panel', array(
        'priority'       => 10,
        'title'          => __('Fitness Passion Theme', 'fitness-passion'),
        'description'    => __('Several settings pertaining my theme', 'fitness-passion'),
	));


	//Show cart icon of woocommerce plugin
	$wp_customize->add_section( 'fitness_passion_woocommerce_menu' , array(
		'title'     => __('Menu', 'fitness-passion'),
		'panel' 	=> 'woocommerce',
		
	));
	
	$wp_customize->add_setting( 'fitness_passion_cart_icon_show' , array(
		'default'           => true,
		'sanitize_callback' => 'fitness_passion_sanitize_checkbox',
		'transport'         => 'refresh',
	));

	$wp_customize->add_control( new Fitness_Passion_Toggle_Switch_Custom_control( $wp_customize, 'fitness_passion_cart_icon_show_control', array(
		'label'       => __( 'Show/Hide cart icon on main menu', 'fitness-passion' ),
		'description' => __('If you use woocommerce plugin, having access to the cart in your main menu is a good idea.','fitness-passion'),
		'section'     => 'fitness_passion_woocommerce_menu',
		'settings'    => 'fitness_passion_cart_icon_show',
	)));

	//end woocomerce additional optios

	/**
	 * Include site info options
	 */
	require get_parent_theme_file_path( 'inc/customizer/customizer-site-info.php' );
	
		
	/**
	 * Include Front page options
	 */
	require get_parent_theme_file_path( 'inc/customizer/customizer-front-page.php' );

	/**
	 * Include Header top options
	 */
	require get_parent_theme_file_path( 'inc/customizer/customizer-headertop.php' );

	/**
	 * Include Blog options
	 */
	require get_parent_theme_file_path( 'inc/customizer/customizer-blog.php' );
	
	/**
	 * Include Layout options
	 */
	require get_parent_theme_file_path( 'inc/customizer/customizer-layout.php' );

	
	/**
	 * Include Landing page template options
	 */
	require get_parent_theme_file_path( 'inc/customizer/customizer-landingpage-template.php' );

	/**
	 * Include footer options
	 */
	require get_parent_theme_file_path( 'inc/customizer/customizer-footer.php' );

		

}
add_action( 'customize_register', 'fitness_passion_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function fitness_passion_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function fitness_passion_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Sanitize select
 */
function fitness_passion_sanitize_select( $input, $setting ){
      
    //input must be a slug: lowercase alphanumeric characters, dashes and underscores are allowed only
    $input = sanitize_key($input);

    //get the list of possible select options 
    $choices = $setting->manager->get_control( $setting->id )->choices;
                     
    //return input if valid or return default option
    return ( array_key_exists( $input, $choices ) ? $input : $setting->default );                
     
}
/**
 * Sanitize checkbox
 */
function fitness_passion_sanitize_checkbox($value){
	
	return ( 1 === absint( $value ) ) ? true : false;

}

function fitness_passion_sanitize_image( $input, $setting ) {
	return esc_url_raw( fitness_passion_validate_image( $input, $setting->default ) );
}

function fitness_passion_validate_image( $input, $default = '' ) {
	// Array of valid image file types
	// The array includes image mime types
	// that are included in wp_get_mime_types()
	$mimes = array(
		'jpg|jpeg|jpe' => 'image/jpeg',
		'gif'          => 'image/gif',
		'png'          => 'image/png',
		'bmp'          => 'image/bmp',
		'tif|tiff'     => 'image/tiff',
		'ico'          => 'image/x-icon'
	);
	// Return an array with file extension
	// and mime_type
	$file = wp_check_filetype( $input, $mimes );
	// If $input has a valid mime_type,
	// return it; otherwise, return
	// the default.
	return ( $file['ext'] ? $input : $default );
}

/**
 * Sanitize dropdown pages
 */
function fitness_passion_sanitize_dropdown_pages( $page_id, $setting ) {
	// Ensure $input is an absolute integer.
	$page_id = absint( $page_id );
  
	// If $page_id is an ID of a published page, return it; otherwise, return the default.
	return ( 'publish' == get_post_status( $page_id ) ? $page_id : $setting->default );
}

/*
 * {@internal Does not require validation since it is immutable.}} 
 */

function fitness_passion_no_sanitize( $input ) {

	return $input;
}

/**
 * Is Front page
 */
function fitness_passion_is_frontpage(){
	return is_front_page();
}

/**
 * Is Blog page
 */
function fitness_passion_is_blogpage(){
	return !is_front_page() && (is_home() || is_search() || is_archive());
}

/**
 * Is Landing template page
 */
function fitness_passion_is_landing_template(){
	return is_page_template( 'template-landingpage.php' );
}


/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function fitness_passion_customize_preview_js() {
	wp_enqueue_script( 'fitness-passion-customizer', get_template_directory_uri() . '/inc/customizer/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'fitness_passion_customize_preview_js' );


