<?php
/**
 * fitness_passion Theme Customizer, Header top
 *
 * @package fitness-passion
 */

if ( ! defined( 'ABSPATH' ) ) { exit; }

	/* Header top section */
	$wp_customize->add_section( 'fitness_passion_top_header_section' , array(
		'title'     => __('Top Bar Header Options','fitness-passion'),
		'panel' 	=>'fitness_passion_panel',
	));
		
	//Show info site on header top
	$wp_customize->add_setting( 'fitness_passion_header_top_show_info' , array(
		'default'           => false,
		'sanitize_callback' => 'fitness_passion_sanitize_checkbox',
		'transport'         => 'refresh',
	));

	$wp_customize->add_control( new Fitness_Passion_Toggle_Switch_Custom_control( $wp_customize, 'fitness_passion_header_top_show_info_control', array(
		'label'       => __( 'Show/Hide info site on header top', 'fitness-passion' ),
		'description' => __('To see edit your info in the Site Info section','fitness-passion'),
		'section'     => 'fitness_passion_top_header_section',
		'settings'    => 'fitness_passion_header_top_show_info',
	)));
		
	//Show social icons on header top
	$wp_customize->add_setting( 'fitness_passion_header_top_show_social' , array(
		'default'           => false,
		'sanitize_callback' => 'fitness_passion_sanitize_checkbox',
		'transport'         => 'refresh',
	));

	$wp_customize->add_control( new Fitness_Passion_Toggle_Switch_Custom_control( $wp_customize, 'fitness_passion_header_top_show_social_control', array(
		'label'       => __( 'Show/Hide Social network icons on header top', 'fitness-passion' ),
		'description' => __('To see the icons you must edit your link in the Site Info section','fitness-passion'),
		'section'     => 'fitness_passion_top_header_section',
		'settings'    => 'fitness_passion_header_top_show_social',
	)));

	$wp_customize->add_setting( 'fitness_passion_info_top' , array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_text_field',
	));
	//admin_url( '/customize.php?autofocus[section]=fitness_passion_site_info_section' )
	$wp_customize->add_control( new Fitness_Passion_Simple_Notice_Custom_Control( $wp_customize, 'top_notice_control', array(
		'label' => __( 'Site Info Options' ,'fitness-passion'),
		'description' => sprintf(__('For configuration go to section <a href="%s">Site info</a>.','fitness-passion' ),"javascript:wp.customize.section('fitness_passion_top_header_section' ).container.find('.customize-section-back').trigger('click');wp.customize.control('fitness_passion_phone_control' ).focus();" ),
		'section'     => 'fitness_passion_top_header_section',
		'settings'    => 'fitness_passion_info_top'
				
	)));

	/* END Header top section */