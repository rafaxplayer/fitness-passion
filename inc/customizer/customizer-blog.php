<?php
/**
 * fitness-passion Theme Customizer, Blog 
 *
 * @package fitness-passion
 */

if ( ! defined( 'ABSPATH' ) ) { exit; }

/* Blog section*/
	$wp_customize->add_section( 'fitness_passion_blog_page_section' , array(
		'title'      	  => __('Blog Page Options','fitness-passion'),
		'panel' 		  =>'fitness_passion_panel',
		'active_callback' => 'fitness_passion_is_blogpage'
	));
	// Title
	$wp_customize->add_setting( 'fitness_passion_blog_page_header_title' , array(
		'default'   => '',
		'transport' => 'refresh',
		'sanitize_callback' => 'sanitize_text_field',
	));

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'fitness_passion_blog_page_header_title_control', array(
		'label'      => __( 'Text for BlogPage Header', 'fitness-passion' ),
		'section'    => 'fitness_passion_blog_page_section',
		'settings'   => 'fitness_passion_blog_page_header_title',
	)));

	// blog layout
	$wp_customize->add_setting( 'fitness_passion_blog_layout' , array(
		'default'           => 'one-column',
		'sanitize_callback' => 'sanitize_text_field',
		'transport'         => 'refresh',
	));

	$wp_customize->add_control( new Fitness_Passion_Image_Radio_Button_Custom_Control( $wp_customize, 'fitness_passion_blog_layout_control', array(
		'label'      => __( 'Distribution of blog entries.', 'fitness-passion' ),
		'description'=> __( 'How to distribute blog entries, archive, attachments, searches, a column or two columns.', 'fitness-passion'),
		'section'    => 'fitness_passion_blog_page_section',
		'settings'   => 'fitness_passion_blog_layout',
		'type'		 => 'select',
		'choices'	 => array(
			'one-column' => array(
				'image' => trailingslashit( get_template_directory_uri() ) . 'assets/images/one-column.png',
				'name'  => __('One Column (Default)','fitness-passion')
			),
			'two-columns' => array(
				'image' => trailingslashit( get_template_directory_uri() ) . 'assets/images/two-columns.png',
				'name'  => __('Two Columns','fitness-passion')
			)
		)
	)));

	// excerpt length
	$wp_customize->add_setting( 'fitness_passion_blog_excerpt_length' , array(
		'default'   => 30,
		'transport' => 'refresh',
		'sanitize_callback' => 'sanitize_text_field',
	));

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'fitness_passion_blog__excerpt_length_control', array(
		'label'		 => __( 'Excerpt Length', 'fitness-passion' ),
		'description'=> __( 'Number of words to show in the entries in the blog list, search, archive, etc ...', 'fitness-passion' ),
		'section'    => 'fitness_passion_blog_page_section',
		'settings'   => 'fitness_passion_blog_excerpt_length',
		'type'		 => 'number',
	)));
		
	
	/* END Blog section*/