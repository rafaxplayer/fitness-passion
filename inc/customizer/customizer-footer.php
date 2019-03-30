<?php
/**
 * fitness-passion Theme Customizer, Footer 
 *
 * @package fitness-passion
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }
 /* Footer section*/
 $wp_customize->add_section( 'fitness_passion_footer_section' , array(
    'title'      => __('Footer Options','fitness-passion'),
    'panel' 	=>'fitness_passion_panel',
    
));

// footer info
$wp_customize->add_setting( 'fitness_passion_footer_info' , array(
    'default'   => '',
    'transport' => 'refresh',
    'sanitize_callback' => 'wp_kses_post',
));

$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'fitness_passion_footer_info_control', array(
    'label'      => __( 'Text for footer info ', 'fitness-passion' ),
    'description'=> __('You can use valid html code','fitness-passion'),
    'section'    => 'fitness_passion_footer_section',
    'settings'   => 'fitness_passion_footer_info',
)));

//Show social icons on header top
$wp_customize->add_setting( 'fitness_passion_footer_show_social' , array(
    'default'   => false,
    'sanitize_callback' => 'fitness_passion_sanitize_checkbox',
    'transport' => 'refresh',
));

$wp_customize->add_control( new Skyrocket_Toggle_Switch_Custom_control( $wp_customize, 'fitness_passion_footer_show_social_control', array(
    'label'      => __( 'Show/Hide Social network icons on footer', 'fitness-passion' ),
    'description' => __('To see the icons you must edit your link in the Social icons section','fitness-passion'),
    'section'    => 'fitness_passion_footer_section',
    'settings'   => 'fitness_passion_footer_show_social',
    
)));

/* End Footer section */