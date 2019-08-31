<?php
/**
 * claudio Theme Customizer, Site info data 
 *
 * @package claudio
 */

if ( ! defined( 'ABSPATH' ) ) { exit; }

$wp_customize->add_section( 'fitness_passion_site_info_section' , array(
    'title'     => __('Site Info Options','claudio'),
    'panel' 	=>'fitness_passion_panel',
));

// phone
$wp_customize->add_setting( 'fitness_passion_phone' , array(
    'default'   => '',
    'transport' => 'refresh',
    'sanitize_callback' => 'sanitize_text_field',
));

$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'fitness_passion_phone_control', array(
    'label'      => __('Phone info', 'claudio' ),
    'section'    => 'fitness_passion_site_info_section',
    'settings'   => 'fitness_passion_phone',
)));

//  whatsapp
$wp_customize->add_setting( 'fitness_passion_whatsapp' , array(
    'default'           => '',
    'transport'         => 'refresh',
    'sanitize_callback' => 'sanitize_text_field',
));

$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'fitness_passion_whatsapp_control', array(
    'label'      => __( 'Whatsapp info', 'claudio' ),
    'section'    => 'fitness_passion_site_info_section',
    'settings'   => 'fitness_passion_whatsapp',
)));

// address
$wp_customize->add_setting( 'fitness_passion_address' , array(
    'default'           => '',
    'transport'         => 'refresh',
    'sanitize_callback' => 'sanitize_text_field',
));

$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'fitness_passion_address_control', array(
    'label'      => __( 'Address info', 'claudio' ),
    'section'    => 'fitness_passion_site_info_section',
    'settings'   => 'fitness_passion_address',
)));

// email
$wp_customize->add_setting( 'fitness_passion_email' , array(
    'default'           => '',
    'transport'         => 'refresh',
    'sanitize_callback' => 'sanitize_email',
));

$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'fitness_passion_email_control', array(
    'label'      => __( 'Email info', 'claudio' ),
    'section'    => 'fitness_passion_site_info_section',
    'settings'   => 'fitness_passion_email',
)));

// facebook
$wp_customize->add_setting( 'fitness_passion_facebook' , array(
    'default'           => '',
    'sanitize_callback' => 'esc_url_raw',
    'transport'         => 'refresh',
));

$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'fitness_passion_facebook_control', array(
    'label'      => __( 'Url for facebook icon ', 'claudio' ),
    'section'    => 'fitness_passion_site_info_section',
    'settings'   => 'fitness_passion_facebook',
)));

// twitter
$wp_customize->add_setting( 'fitness_passion_twitter' , array(
    'default'           => '',
    'sanitize_callback' => 'esc_url_raw',
    'transport'         => 'refresh',
));

$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'fitness_passion_twitter_control', array(
    'label'      => __( 'Url for twitter icon ', 'claudio' ),
    'section'    => 'fitness_passion_site_info_section',
    'settings'   => 'fitness_passion_twitter',
)));

// instagram
$wp_customize->add_setting( 'fitness_passion_instagram' , array(
    'default'           => '',
    'sanitize_callback' => 'esc_url_raw',
    'transport'         => 'refresh',
));

$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'fitness_passion_instagram_control', array(
    'label'      => __( 'Url for instagram icon', 'claudio' ),
    'section'    => 'fitness_passion_site_info_section',
    'settings'   => 'fitness_passion_instagram',
)));

// youtube
$wp_customize->add_setting( 'fitness_passion_youtube' , array(
    'default'           => '',
    'sanitize_callback' => 'esc_url_raw',
    'transport'         => 'refresh',
));

$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'fitness_passion_youtube_control', array(
    'label'      => __( 'Url for youtube icon', 'claudio' ),
    'section'    => 'fitness_passion_site_info_section',
    'settings'   => 'fitness_passion_youtube',
)));

// linkedin
$wp_customize->add_setting( 'fitness_passion_linkedin' , array(
    'default'           => '',
    'sanitize_callback' => 'esc_url_raw',
    'transport'         => 'refresh',
));

$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'fitness_passion_linkedin_control', array(
    'label'      => __( 'Url for linkedin icon', 'claudio' ),
    'section'    => 'fitness_passion_site_info_section',
    'settings'   => 'fitness_passion_linkedin',
)));

// pinterest
$wp_customize->add_setting( 'fitness_passion_pinterest' , array(
    'default'           => '',
    'sanitize_callback' => 'esc_url_raw',
    'transport'         => 'refresh',
));

$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'fitness_passion_pinterest_control', array(
    'label'      => __( 'Url for pinterest icon', 'claudio' ),
    'section'    => 'fitness_passion_site_info_section',
    'settings'   => 'fitness_passion_pinterest',
)));

/* END Social site info*/