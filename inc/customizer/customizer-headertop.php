<?php
/**
 * fitness_passion Theme Customizer, Header top
 *
 * @package fitness-passion
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }
/* Header top section */
	$wp_customize->add_section( 'fitness_passion_top_header_section' , array(
		'title'      => __('Header top Options','fitness-passion'),
		'panel' 	=>'fitness_passion_panel',
		
	));

	// Header top phone
	$wp_customize->add_setting( 'fitness_passion_phone' , array(
		'default'   => '',
		'transport' => 'refresh',
		'sanitize_callback' => 'sanitize_text_field',
	));

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'fitness_passion_phone_control', array(
		'label'      => __( 'Phone for Header top info', 'fitness-passion' ),
		'section'    => 'fitness_passion_top_header_section',
		'settings'   => 'fitness_passion_phone',
		
	)));

	// Header top whatsapp
	$wp_customize->add_setting( 'fitness_passion_whatsapp' , array(
		'default'   => '',
		'transport' => 'refresh',
		'sanitize_callback' => 'sanitize_text_field',
	));

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'fitness_passion_whatsapp_control', array(
		'label'      => __( 'Whatsapp for Header top info', 'fitness-passion' ),
		'section'    => 'fitness_passion_top_header_section',
		'settings'   => 'fitness_passion_whatsapp',
		
	)));

	// Header top address
	$wp_customize->add_setting( 'fitness_passion_address' , array(
		'default'   => '',
		'transport' => 'refresh',
		'sanitize_callback' => 'sanitize_text_field',
	));

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'fitness_passion_address_control', array(
		'label'      => __( 'Address for Header top info', 'fitness-passion' ),
		'section'    => 'fitness_passion_top_header_section',
		'settings'   => 'fitness_passion_address',
		
	)));
	
	//Show social icons on header top
	$wp_customize->add_setting( 'fitness_passion_header_top_show_social' , array(
		'default'   => false,
		'sanitize_callback' => 'fitness_passion_sanitize_checkbox',
		'transport' => 'refresh',
	));

	$wp_customize->add_control( new Skyrocket_Toggle_Switch_Custom_control( $wp_customize, 'fitness_passion_header_top_show_social_control', array(
		'label'      => __( 'Show/Hide Social network icons on header top', 'fitness-passion' ),
		'description' => __('To see the icons you must edit your link in the Social icons section','fitness-passion'),
		'section'    => 'fitness_passion_top_header_section',
		'settings'   => 'fitness_passion_header_top_show_social',
		
	)));
	/* END Header top section */