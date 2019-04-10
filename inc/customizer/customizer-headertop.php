<?php
/**
 * fitness_passion Theme Customizer, Header top
 *
 * @package fitness-passion
 */

if ( ! defined( 'ABSPATH' ) ) { exit; }

	/* Header top section */
	$wp_customize->add_section( 'fitness_passion_top_header_section' , array(
		'title'     => esc_html__('Header top Options','fitness-passion'),
		'panel' 	=>'fitness_passion_panel',
	));
		
	//Show info site on header top
	$wp_customize->add_setting( 'fitness_passion_header_top_show_info' , array(
		'default'           => false,
		'sanitize_callback' => 'fitness_passion_sanitize_checkbox',
		'transport'         => 'refresh',
	));

	$wp_customize->add_control( new Skyrocket_Toggle_Switch_Custom_control( $wp_customize, 'fitness_passion_header_top_show_info_control', array(
		'label'       => esc_html__( 'Show/Hide info site on header top', 'fitness-passion' ),
		'description' => esc_html__('To see edit your info in the Site Info section','fitness-passion'),
		'section'     => 'fitness_passion_top_header_section',
		'settings'    => 'fitness_passion_header_top_show_info',
	)));
		
	//Show social icons on header top
	$wp_customize->add_setting( 'fitness_passion_header_top_show_social' , array(
		'default'           => false,
		'sanitize_callback' => 'fitness_passion_sanitize_checkbox',
		'transport'         => 'refresh',
	));

	$wp_customize->add_control( new Skyrocket_Toggle_Switch_Custom_control( $wp_customize, 'fitness_passion_header_top_show_social_control', array(
		'label'       => esc_html__( 'Show/Hide Social network icons on header top', 'fitness-passion' ),
		'description' => esc_html__('To see the icons you must edit your link in the Site Info section','fitness-passion'),
		'section'     => 'fitness_passion_top_header_section',
		'settings'    => 'fitness_passion_header_top_show_social',
	)));

	/* END Header top section */