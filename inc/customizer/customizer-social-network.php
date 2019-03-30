<?php
/**
 * fitness-passion Theme Customizer, Front page 
 *
 * @package fitness-passion
 */

if ( ! defined( 'ABSPATH' ) ) { exit; }
/* Social network section*/
$wp_customize->add_section( 'fitness_passion_social_network_section' , array(
    'title'      => __('Social Icons Options','fitness-passion'),
    'panel' 	=>'fitness_passion_panel',
    
));

// facebook
$wp_customize->add_setting( 'fitness_passion_facebook' , array(
    'default'   => '',
    'sanitize_callback' => 'esc_url_raw',
    'transport' => 'refresh',
));

$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'fitness_passion_facebook_control', array(
    'label'      => __( 'Url for facebook icon ', 'fitness-passion' ),
    'section'    => 'fitness_passion_social_network_section',
    'settings'   => 'fitness_passion_facebook',
)));

// twitter
$wp_customize->add_setting( 'fitness_passion_twitter' , array(
    'default'   => '',
    'sanitize_callback' => 'esc_url_raw',
    'transport' => 'refresh',
));

$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'fitness_passion_twitter_control', array(
    'label'      => __( 'Url for twitter icon ', 'fitness-passion' ),
    'section'    => 'fitness_passion_social_network_section',
    'settings'   => 'fitness_passion_twitter',
)));

// instagram
$wp_customize->add_setting( 'fitness_passion_instagram' , array(
    'default'   => '',
    'sanitize_callback' => 'esc_url_raw',
    'transport' => 'refresh',
));

$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'fitness_passion_instagram_control', array(
    'label'      => __( 'Url for instagram icon', 'fitness-passion' ),
    'section'    => 'fitness_passion_social_network_section',
    'settings'   => 'fitness_passion_instagram',
)));

// youtube
$wp_customize->add_setting( 'fitness_passion_youtube' , array(
    'default'   => '',
    'sanitize_callback' => 'esc_url_raw',
    'transport' => 'refresh',
));

$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'fitness_passion_youtube_control', array(
    'label'      => __( 'Url for youtube icon', 'fitness-passion' ),
    'section'    => 'fitness_passion_social_network_section',
    'settings'   => 'fitness_passion_youtube',
)));

/* END Social network section*/