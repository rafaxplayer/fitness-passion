<?php
/**
 * fitness-passion Theme Customizer, Layout
 *
 * @package fitness-passion
 */


if ( ! defined( 'ABSPATH' ) ) { exit; }
 /* Layout section*/
 $wp_customize->add_section( 'fitness_passion_layout_section' , array(
    'title'     => esc_html__('Layout Options', 'fitness-passion'),
    'panel' 	=> 'fitness_passion_panel',
    
));

// breadcrumbs header
$wp_customize->add_setting( 'fitness_passion_breadcrumbs' , array(
    'default'           => true,
    'sanitize_callback' => 'fitness_passion_sanitize_checkbox',
    'transport'         => 'refresh',
));

$wp_customize->add_control( new Fitness_Passion_Toggle_Switch_Custom_control( $wp_customize, 'fitness_passion_breadcrumbs_control', array(
    'label'      => esc_html__( 'Show/Hide Breadcrumbs on header', 'fitness-passion' ),
    'section'    => 'fitness_passion_layout_section',
    'settings'   => 'fitness_passion_breadcrumbs',
   
)));

// breadcrumbs content
$wp_customize->add_setting( 'fitness_passion_breadcrumbs_content' , array(
    'default'           => true,
    'sanitize_callback' => 'fitness_passion_sanitize_checkbox',
    'transport'         => 'refresh',
));

$wp_customize->add_control( new Fitness_Passion_Toggle_Switch_Custom_control( $wp_customize, 'fitness_passion_breadcrumbs_content_control', array(
    'label'      => esc_html__( 'Show/Hide Breadcrumbs on content pages', 'fitness-passion' ),
    'section'    => 'fitness_passion_layout_section',
    'settings'   => 'fitness_passion_breadcrumbs_content',
    
)));

// sidebar
$wp_customize->add_setting( 'fitness_passion_sidebar' , array(
    'default'           => 'sidebar',
    'sanitize_callback' => 'sanitize_text_field',
    'transport'         => 'refresh',
));

$wp_customize->add_control( new Fitness_Passion_Image_Radio_Button_Custom_Control( $wp_customize, 'fitness_passion_sidebar_control', array(
    'label'      => esc_html__( 'Show/Hide sidebar', 'fitness-passion' ),
    'section'    => 'fitness_passion_layout_section',
    'settings'   => 'fitness_passion_sidebar',
    'type'		 => 'select',
    'choices'	 => array(
        'nosidebar' => array(
            'image' => trailingslashit( get_template_directory_uri() ) . 'assets/images/sidebar-none.png',
            'name'  => esc_html__('No Sidebar','fitness-passion')
        ),
        'sidebar' => array(
            'image' => trailingslashit( get_template_directory_uri() ) . 'assets/images/sidebar-right.png',
            'name'  => esc_html__('Sidebar right (Default)','fitness-passion')
        )
    )
)));


/* show slider */
$wp_customize->add_setting( 'fitness_passion_show_animations' , array(
    'default'           => true,
    'sanitize_callback' => 'fitness_passion_sanitize_checkbox',
    'transport'         => 'refresh',
));

$wp_customize->add_control( new Fitness_Passion_Toggle_Switch_Custom_control( $wp_customize, 'fitness_passion_show_animations_control', array(
    'label'      => esc_html__( 'Show animations', 'fitness-passion' ),
    'section'    => 'fitness_passion_layout_section',
    'settings'   => 'fitness_passion_show_animations',
   
)));
/* END Layout section*/
