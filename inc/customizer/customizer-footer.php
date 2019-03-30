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
));

$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'fitness_passion_footer_info_control', array(
    'label'      => __( 'Text for footer info ', 'fitness-passion' ),
    'section'    => 'fitness_passion_footer_section',
    'settings'   => 'fitness_passion_footer_info',
)));

/* End Footer section */