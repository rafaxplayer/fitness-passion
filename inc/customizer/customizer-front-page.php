<?php
/**
 * fitness-passion Theme Customizer, Front page 
 *
 * @package fitness-passion
 */

if ( ! defined( 'ABSPATH' ) ) { exit; }
/* Front page section*/
	$wp_customize->add_section( 'fitness_passion_front_page_section' , array(
		'title'           => esc_html__('Front Page Options','fitness-passion'),
		'panel' 	      =>'fitness_passion_panel',
		'active_callback' => 'is_front_page'
	));

	/* show slider */
	$wp_customize->add_setting( 'fitness_passion_show_slider' , array(
		'default'            => false,
		'sanitize_callback'  => 'fitness_passion_sanitize_checkbox',
		'transport'          => 'refresh',
	));

	$wp_customize->add_control( new Fitness_Passion_Toggle_Switch_Custom_control( $wp_customize, 'fitness_passion_show_slider_control', array(
		'label'      => esc_html__( 'Show/Hide slider on header', 'fitness-passion' ),
		'section'    => 'fitness_passion_front_page_section',
		'settings'   => 'fitness_passion_show_slider',
	
	)));

	// slider page 1
	$wp_customize->add_setting('fitness_passion_slider_page_1',array(
		'default' => '0',			
		'sanitize_callback' => 'fitness_passion_sanitize_dropdown_pages'
	));
 
	$wp_customize->add_control(	'fitness_passion_slider_page_1_control',array(
		'label'          => esc_html__( 'First page for slider header', 'fitness-passion' ),
		'type'           => 'dropdown-pages',			
		'section'        => 'fitness_passion_front_page_section',
		'settings'       => 'fitness_passion_slider_page_1',
		'allow_addition' => true,
	));	

	// slider page 2
	$wp_customize->add_setting('fitness_passion_slider_page_2',array(
		'default' => '0',			
		'sanitize_callback' => 'fitness_passion_sanitize_dropdown_pages'
	));
 
	$wp_customize->add_control(	'fitness_passion_slider_page_2_control',array(
		'label'          => esc_html__( 'Second page for slider header', 'fitness-passion' ),
		'type'           => 'dropdown-pages',			
		'section'        => 'fitness_passion_front_page_section',
		'settings'       => 'fitness_passion_slider_page_2',
		'allow_addition' => true,
	));	

	// slider page 3
	$wp_customize->add_setting('fitness_passion_slider_page_3',array(
		'default' => '0',			
		'sanitize_callback' => 'fitness_passion_sanitize_dropdown_pages'
	));
 
	$wp_customize->add_control(	'fitness_passion_slider_page_3_control',array(
		'label'          => esc_html__( 'Third page for slider header', 'fitness-passion' ),
		'type'           => 'dropdown-pages',			
		'section'        => 'fitness_passion_front_page_section',
		'settings'       => 'fitness_passion_slider_page_3',
		'allow_addition' => true,
	));	

	// slider page 4
	$wp_customize->add_setting('fitness_passion_slider_page_4',array(
		'default'           => '0',			
		'sanitize_callback' => 'fitness_passion_sanitize_dropdown_pages'
	));
 	
	$wp_customize->add_control(	'fitness_passion_slider_page_4_control',array(
		'label'          => esc_html__( 'Third page for slider header', 'fitness-passion' ),
		'type'           => 'dropdown-pages',			
		'section'        => 'fitness_passion_front_page_section',
		'settings'       => 'fitness_passion_slider_page_4',
		'allow_addition' => true,
	));

	// button more slider text
	$wp_customize->add_setting( 'fitness_passion_slide_morebtn' , array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_text_field',
		'transport'         => 'refresh',
	));
	
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'fitness_passion_slide_morebtn_control', array(
		'label'      => esc_html__( 'Text for slider button', 'fitness-passion' ),
		'section'    => 'fitness_passion_front_page_section',
		'settings'   => 'fitness_passion_slide_morebtn',
	)));

	
	/* Front Page header without slider*/

	// Text title
	$wp_customize->add_setting( 'fitness_passion_front_page_header_title' , array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_text_field',
		'transport'         => 'refresh',
	));
	
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'fitness_passion_front_page_header_title_control', array(
		'label'      => esc_html__( 'Title for Front Page Header', 'fitness-passion' ),
		'section'    => 'fitness_passion_front_page_section',
		'settings'   => 'fitness_passion_front_page_header_title',
	)));

	// Text subtitle
	$wp_customize->add_setting( 'fitness_passion_front_page_header_subtitle' , array(
		'default'   => '',
		'sanitize_callback' => 'sanitize_text_field',
		'transport' => 'refresh',
	));
	
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'fitness_passion_front_page_header_subtitle_control', array(
		'label'      => esc_html__( 'Subtitle for FrontPage Header', 'fitness-passion' ),
		'section'    => 'fitness_passion_front_page_section',
		'settings'   => 'fitness_passion_front_page_header_subtitle',
	)));

	// Text Button
	$wp_customize->add_setting( 'fitness_passion_front_page_header_button' , array(
		'default'   => '',
		'sanitize_callback' => 'sanitize_text_field',
		'transport' => 'refresh',
	));

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'fitness_passion_front_page_header_button_control', array(
		'label'      => esc_html__( 'Text for FrontPage Header Buton Text', 'fitness-passion' ),
		'section'    => 'fitness_passion_front_page_section',
		'settings'   => 'fitness_passion_front_page_header_button',
	)));

	//link button
	$wp_customize->add_setting( 'fitness_passion_front_page_header_button_link' , array(
		'default'           => '#',
		'sanitize_callback' => 'esc_url_raw',
		'transport'         => 'refresh',
	));

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'fitness_passion_front_page_header_button_link_control', array(
		'label'      => esc_html__( 'Link for FrontPage Header Buton Text', 'fitness-passion' ),
		'section'    => 'fitness_passion_front_page_section',
		'settings'   => 'fitness_passion_front_page_header_button_link',
	)));
	/* END Front Page header */