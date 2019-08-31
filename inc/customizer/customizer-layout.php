<?php
/**
 * fitness-passion Theme Customizer, Layout
 *
 * @package fitness-passion
 */


if ( ! defined( 'ABSPATH' ) ) { exit; }
 /* Layout section*/
 $wp_customize->add_section( 'fitness_passion_layout_section' , array(
    'title'     => __('Layout Options', 'fitness-passion'),
    'panel' 	=> 'fitness_passion_panel',
    
));

// breadcrumbs header
$wp_customize->add_setting( 'fitness_passion_breadcrumbs' , array(
    'default'           => true,
    'sanitize_callback' => 'fitness_passion_sanitize_checkbox',
    'transport'         => 'refresh',
));

$wp_customize->add_control( new Fitness_Passion_Toggle_Switch_Custom_control( $wp_customize, 'fitness_passion_breadcrumbs_control', array(
    'label'      => __( 'Show/Hide Breadcrumbs on header', 'fitness-passion' ),
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
    'label'      => __( 'Show/Hide Breadcrumbs on content pages', 'fitness-passion' ),
    'section'    => 'fitness_passion_layout_section',
    'settings'   => 'fitness_passion_breadcrumbs_content',
    
)));

// Related post
$wp_customize->add_setting( 'fitness_passion_related_post' , array(
    'default'           => true,
    'sanitize_callback' => 'fitness_passion_sanitize_checkbox',
    'transport' => 'refresh',
));

$wp_customize->add_control( new Fitness_Passion_Toggle_Switch_Custom_control( $wp_customize, 'fitness_passion_related_post_control', array(
    'label'      => __( 'Show/Hide Related post on single post page', 'fitness-passion' ),
    'description'=> __('Show posts related to the entry we are seeing.','fitness-passion'),
    'section'    => 'fitness_passion_layout_section',
    'settings'   => 'fitness_passion_related_post',
    
)));

// sidebar
$wp_customize->add_setting( 'fitness_passion_sidebar' , array(
    'default'           => 'sidebar',
    'sanitize_callback' => 'sanitize_text_field',
    'transport'         => 'refresh',
));

$wp_customize->add_control( new Fitness_Passion_Image_Radio_Button_Custom_Control( $wp_customize, 'fitness_passion_sidebar_control', array(
    'label'      => __( 'Sidebar', 'fitness-passion' ),
    'description'=> __( 'Show or hide right sidebar of widgets', 'fitness-passion'),
    'section'    => 'fitness_passion_layout_section',
    'settings'   => 'fitness_passion_sidebar',
    'type'		 => 'select',
    'choices'	 => array(
        'nosidebar' => array(
            'image' => trailingslashit( get_template_directory_uri() ) . 'assets/images/sidebar-none.png',
            'name'  => __('No Sidebar','fitness-passion')
        ),
        'sidebar' => array(
            'image' => trailingslashit( get_template_directory_uri() ) . 'assets/images/sidebar-right.png',
            'name'  => __('Sidebar right (Default)','fitness-passion')
        )
    )
)));


/* show animations */
$wp_customize->add_setting( 'fitness_passion_show_animations' , array(
    'default'           => true,
    'sanitize_callback' => 'fitness_passion_sanitize_checkbox',
    'transport'         => 'refresh',
));

$wp_customize->add_control( new Fitness_Passion_Toggle_Switch_Custom_control( $wp_customize, 'fitness_passion_show_animations_control', array(
    'label'      => __( 'Animations', 'fitness-passion' ),
    'description'=> __('Activate animations, if you deactivate them, it will help the fastest load of your site.','fitness-passion'),
    'section'    => 'fitness_passion_layout_section',
    'settings'   => 'fitness_passion_show_animations',
   
)));
/* END Layout section*/
