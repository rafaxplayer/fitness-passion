<?php
/**
 * fitness-passion Theme Customizer, Site info data 
 *
 * @package fitness-passion
 */

if ( ! defined( 'ABSPATH' ) ) { exit; }

$wp_customize->add_section( 'fitness_passion_site_info_section' , array(
    'title'      => esc_html__('Site Options','fitness-passion'),
    'panel' 	=>'fitness_passion_panel',
));

// phone
$wp_customize->add_setting( 'fitness_passion_phone' , array(
    'default'   => '',
    'transport' => 'refresh',
    'sanitize_callback' => 'sanitize_text_field',
));

$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'fitness_passion_phone_control', array(
    'label'      => esc_html__('Phone info', 'fitness-passion' ),
    'section'    => 'fitness_passion_site_info_section',
    'settings'   => 'fitness_passion_phone',
)));

//  whatsapp
$wp_customize->add_setting( 'fitness_passion_whatsapp' , array(
    'default'   => '',
    'transport' => 'refresh',
    'sanitize_callback' => 'sanitize_text_field',
));

$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'fitness_passion_whatsapp_control', array(
    'label'      => esc_html__( 'Whatsapp info', 'fitness-passion' ),
    'section'    => 'fitness_passion_site_info_section',
    'settings'   => 'fitness_passion_whatsapp',
)));

// address
$wp_customize->add_setting( 'fitness_passion_address' , array(
    'default'   => '',
    'transport' => 'refresh',
    'sanitize_callback' => 'sanitize_text_field',
));

$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'fitness_passion_address_control', array(
    'label'      => esc_html__( 'Address info', 'fitness-passion' ),
    'section'    => 'fitness_passion_site_info_section',
    'settings'   => 'fitness_passion_address',
)));

// email
$wp_customize->add_setting( 'fitness_passion_email' , array(
    'default'   => '',
    'transport' => 'refresh',
    'sanitize_callback' => 'sanitize_email',
));

$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'fitness_passion_email_control', array(
    'label'      => esc_html__( 'Email info', 'fitness-passion' ),
    'section'    => 'fitness_passion_site_info_section',
    'settings'   => 'fitness_passion_email',
)));

// facebook
$wp_customize->add_setting( 'fitness_passion_facebook' , array(
    'default'   => '',
    'sanitize_callback' => 'esc_url_raw',
    'transport' => 'refresh',
));

$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'fitness_passion_facebook_control', array(
    'label'      => esc_html__( 'Url for facebook icon ', 'fitness-passion' ),
    'section'    => 'fitness_passion_site_info_section',
    'settings'   => 'fitness_passion_facebook',
)));

// twitter
$wp_customize->add_setting( 'fitness_passion_twitter' , array(
    'default'   => '',
    'sanitize_callback' => 'esc_url_raw',
    'transport' => 'refresh',
));

$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'fitness_passion_twitter_control', array(
    'label'      => esc_html__( 'Url for twitter icon ', 'fitness-passion' ),
    'section'    => 'fitness_passion_site_info_section',
    'settings'   => 'fitness_passion_twitter',
)));

// instagram
$wp_customize->add_setting( 'fitness_passion_instagram' , array(
    'default'   => '',
    'sanitize_callback' => 'esc_url_raw',
    'transport' => 'refresh',
));

$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'fitness_passion_instagram_control', array(
    'label'      => esc_html__( 'Url for instagram icon', 'fitness-passion' ),
    'section'    => 'fitness_passion_site_info_section',
    'settings'   => 'fitness_passion_instagram',
)));

// youtube
$wp_customize->add_setting( 'fitness_passion_youtube' , array(
    'default'   => '',
    'sanitize_callback' => 'esc_url_raw',
    'transport' => 'refresh',
));

$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'fitness_passion_youtube_control', array(
    'label'      => esc_html__( 'Url for youtube icon', 'fitness-passion' ),
    'section'    => 'fitness_passion_site_info_section',
    'settings'   => 'fitness_passion_youtube',
)));


/* END Social site info*/