<?php
/**
 * fitness-passion Theme Customizer, Blog 
 *
 * @package fitness-passion
 */

if ( ! defined( 'ABSPATH' ) ) { exit; }
/* Blog section*/
	$wp_customize->add_section( 'fitness_passion_blog_page_section' , array(
		'title'      => esc_html__('Blog Page Options','fitness-passion'),
		'panel' 	=>'fitness_passion_panel',
		'active_callback' => 'fitness_passion_is_blogpage'
	));
	// Title
	$wp_customize->add_setting( 'fitness_passion_blog_page_header_title' , array(
		'default'   => '',
		'transport' => 'refresh',
		'sanitize_callback' => 'sanitize_text_field',
	));

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'fitness_passion_blog_page_header_title_control', array(
		'label'      => esc_html__( 'Text for BlogPage Header', 'fitness-passion' ),
		'section'    => 'fitness_passion_blog_page_section',
		'settings'   => 'fitness_passion_blog_page_header_title',
	)));
	
	
	// Related post
	$wp_customize->add_setting( 'fitness_passion_related_post' , array(
		'default'   => true,
		'sanitize_callback' => 'fitness_passion_sanitize_checkbox',
		'transport' => 'refresh',
	));

	$wp_customize->add_control( new Skyrocket_Toggle_Switch_Custom_control( $wp_customize, 'fitness_passion_related_post_control', array(
		'label'      => esc_html__( 'Show/Hide Related post on single post page', 'fitness-passion' ),
		'section'    => 'fitness_passion_blog_page_section',
		'settings'   => 'fitness_passion_related_post',
		
	)));
	

	/* END Blog section*/