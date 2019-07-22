<?php
/**
 * fitness_passion Theme Customizer, Landing page tempate
 *
 * @package fitness-passion
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

 /* Landing Page Template */
 $wp_customize->add_section( 'fitness_passion_landing_template_section' , array(
    'title'           => esc_html__('Landing Page Template Options','fitness-passion'),
    'panel' 	      => 'fitness_passion_panel',
    'active_callback' => 'fitness_passion_is_landing_template'
));

/*Show content of page */
$wp_customize->add_setting( 'fitness_passion_Simple_Notice' , array(
    'default'           => '',
    'sanitize_callback' => 'sanitize_text_field',
    
));

$wp_customize->add_control( new Fitness_Passion_Simple_Notice_Custom_Control( $wp_customize, 'fitness_passion_Notice_Custom__control', array(
    'label'      => esc_html__( 'Landing Page Template Options', 'fitness-passion' ),
    'description'=> esc_html__( 'This section we can configure a home page with attractive sections that summarize the content of our service. When creating your home page select the template "Landing page" and access it from the customizer to see changes in real time.', 'fitness-passion' ),
    'section'    => 'fitness_passion_landing_template_section',
    'settings'   => 'fitness_passion_Simple_Notice',
    
)));

/*Show content of page */
$wp_customize->add_setting( 'fitness_passion_landing_content_page_show' , array(
    'default'           => true,
    'sanitize_callback' => 'fitness_passion_sanitize_checkbox',
    'transport'         => 'refresh',
));

$wp_customize->add_control( new Fitness_Passion_Toggle_Switch_Custom_control( $wp_customize, 'fitness_passion_landing_content_page_control', array(
    'label'      => esc_html__( 'Show/Hide the content of page', 'fitness-passion' ),
    'section'    => 'fitness_passion_landing_template_section',
    'settings'   => 'fitness_passion_landing_content_page_show',
    
)));


/*Services section*/
$wp_customize->add_setting( 'fitness_passion_landing_services_show' , array(
    'default'           => false,
    'sanitize_callback' => 'fitness_passion_sanitize_checkbox',
    'transport'         => 'refresh',
));

$wp_customize->add_control( new Fitness_Passion_Toggle_Switch_Custom_control( $wp_customize, 'fitness_passion_landing_services_control', array(
    'label'      => esc_html__( 'Show/Hide services section', 'fitness-passion' ),
    'section'    => 'fitness_passion_landing_template_section',
    'settings'   => 'fitness_passion_landing_services_show',
    
)));

for($i=1;$i<=3;$i++){

    //service ++
    $wp_customize->add_setting('fitness_passion_landing_service_'.$i,array(
        'default'           => '0',			
        'sanitize_callback' => 'fitness_passion_sanitize_dropdown_pages'
    ));
     
    $wp_customize->add_control(	'fitness_passion_landing_service_'.$i.'_control',array(
        /* translators: number of service */
        'label'          => sprintf(esc_html__( 'Page for service number %s', 'fitness-passion' ),$i),
        'type'           => 'dropdown-pages',			
        'section'        => 'fitness_passion_landing_template_section',
        'settings'       => 'fitness_passion_landing_service_'.$i,
        'allow_addition' => true,
    ));
}

$wp_customize->add_control( new Fitness_Passion_Separator_Control( $wp_customize, 'fitness_passion_separator_'.$sep++, array(
    'section' 		=> 'fitness_passion_landing_template_section',
    'settings'      => 'fitness_passion_landing_service_3',
) ) );

/* End services section */

/* Actions */
for($i=1;$i<=3;$i++){

    $wp_customize->add_setting( 'fitness_passion_landing_action'.$i.'_show' , array(
        'default'           => false,
        'sanitize_callback' => 'fitness_passion_sanitize_checkbox',
        'transport'         => 'refresh',
    ));

    $wp_customize->add_control( new Fitness_Passion_Toggle_Switch_Custom_control( $wp_customize, 'fitness_passion_landing_action'.$i.'_show_control', array(
        /* translators: number of action */
        'label'      => sprintf(esc_html__( 'Show/Hide action %s section', 'fitness-passion' ),$i),
        'section'    => 'fitness_passion_landing_template_section',
        'settings'   => 'fitness_passion_landing_action'.$i.'_show',
        'type'       => 'ios',
    )));

    //page for action 
    $wp_customize->add_setting('fitness_passion_landing_page_action'.$i,array(
        'default'           => '0',			
        'sanitize_callback' => 'fitness_passion_sanitize_dropdown_pages'
    ));
     
    $wp_customize->add_control(	'fitness_passion_landing_page_action'.$i.'_control',array(
        /* translators: number of action */
        'label'          => sprintf(esc_html__( 'Page for action number %s', 'fitness-passion' ),$i),
        'type'           => 'dropdown-pages',			
        'section'        => 'fitness_passion_landing_template_section',
        'settings'       => 'fitness_passion_landing_page_action'.$i,
        'allow_addition' => true,
    ));

    // Text Button action 
    $wp_customize->add_setting( 'fitness_passion_landing_action'.$i.'_morebtn' , array(
        'default'           => '',
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    ));

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'fitness_passion_landing_action'.$i.'_morebtn_control', array(
        /* translators: number of action */
        'label'      => sprintf(esc_html__( 'Text Buton more for action %s', 'fitness-passion' ),$i),
        'section'    => 'fitness_passion_landing_template_section',
        'settings'   => 'fitness_passion_landing_action'.$i.'_morebtn',
    )));

    $wp_customize->add_control( new Fitness_Passion_Separator_Control( $wp_customize, 'fitness_passion_separator_'.$sep++, array(
        'section'    => 'fitness_passion_landing_template_section',
        'settings'   => 'fitness_passion_landing_action'.$i.'_morebtn',
    ) ) );
}
/*End Actions section*/


/*Coaches section*/
$wp_customize->add_setting( 'fitness_passion_landing_coaches_show' , array(
    'default'           => false,
    'sanitize_callback' => 'fitness_passion_sanitize_checkbox',
    'transport'         => 'refresh',
));

$wp_customize->add_control( new Fitness_Passion_Toggle_Switch_Custom_control( $wp_customize, 'fitness_passion_landing_coaches_show_control', array(
    'label'      => esc_html__( 'Show/Hide coaches section', 'fitness-passion' ),
    'section'    => 'fitness_passion_landing_template_section',
    'settings'   => 'fitness_passion_landing_coaches_show',
    
)));

$wp_customize->add_setting( 'fitness_passion_landing_coaches_title' , array(
    'default'           => esc_html__('Our Coaches','fitness-passion'),
    'sanitize_callback' => 'sanitize_text_field',
    'transport'         => 'refresh',
));

$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'fitness_passion_landing_coaches_title_control', array(
    'label'      => esc_html__( 'Coaches section title', 'fitness-passion' ),
    'section'    => 'fitness_passion_landing_template_section',
    'settings'   => 'fitness_passion_landing_coaches_title',
)));

// image background coaches section
$wp_customize->add_setting( 'fitness_passion_landing_coaches_back_image' , array(
    'default'           => '',
    'sanitize_callback' => 'fitness_passion_sanitize_image',
    'transport'         => 'refresh',
));

$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize,'fitness_passion_landing_coaches_back_image_control',array(
    'label'      => esc_html__( 'Upload image for coaches background section', 'fitness-passion' ),
    'section'    => 'fitness_passion_landing_template_section',
    'settings'   => 'fitness_passion_landing_coaches_back_image'
)));

// Coaches number
$wp_customize->add_setting( 'fitness_passion_landing_coaches_number' , array(
    'default'           => 3,
    'sanitize_callback' => 'absint',
    'transport'         => 'refresh',
));

$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'fitness_passion_landing_coaches_number_control', array(
    'label'      => esc_html__( 'Number of coaches to show', 'fitness-passion' ),
    'description'=> esc_html__( 'It is necessary to refresh the page to show or hide the changes of couches', 'fitness-passion'),
    'section'    => 'fitness_passion_landing_template_section',
    'settings'   => 'fitness_passion_landing_coaches_number',
    'type'		 => 'number',
)));


$coaches_number = get_theme_mod('fitness_passion_landing_coaches_number',3);


//coaches
for($i = 1; $i <= $coaches_number; $i++){

    //coach page  
   $wp_customize->add_setting('fitness_passion_landing_coach'.$i.'_page',array(
    'default'           => '0',			
    'sanitize_callback' => 'fitness_passion_sanitize_dropdown_pages'
    ));
 
    $wp_customize->add_control(	'fitness_passion_landing_coach'.$i.'_page_control',array(
        /* translators: number of action */
        'label'          => sprintf(esc_html__( 'Page for coach number %s', 'fitness-passion' ),$i),
        'type'           => 'dropdown-pages',			
        'section'        => 'fitness_passion_landing_template_section',
        'settings'       => 'fitness_passion_landing_coach'.$i.'_page',
        'allow_addition' => true,
    ));

    $wp_customize->add_setting( 'fitness_passion_landing_coach'.$i.'_facebook' , array(
        'default'           => '',
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    ));
    
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'fitness_passion_landing_coach'.$i.'_facebook_control', array(
        /* translators: %s: Number of coach , translation not required */
        'label'      => sprintf(esc_html__( 'Facebook url for coach number %s', 'fitness-passion' ),$i),
        'section'    => 'fitness_passion_landing_template_section',
        'settings'   => 'fitness_passion_landing_coach'.$i.'_facebook',
    )));

    $wp_customize->add_setting( 'fitness_passion_landing_coach'.$i.'_twitter' , array(
        'default'           => '',
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    ));
    
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'fitness_passion_landing_coach'.$i.'_twitter_control', array(
        /* translators: numer of coach */
        'label'      => sprintf(esc_html__( 'Twitter url for coach number %s', 'fitness-passion' ),$i),
        'section'    => 'fitness_passion_landing_template_section',
        'settings'   => 'fitness_passion_landing_coach'.$i.'_twitter',
    )));

    $wp_customize->add_setting( 'fitness_passion_landing_coach'.$i.'_email' , array(
        'default'           => '',
        'sanitize_callback' => 'sanitize_email',
        'transport'         => 'refresh',
    ));
    
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'fitness_passion_landing_coach'.$i.'_email_control', array(
        /* translators: numer of coach */
        'label'      => sprintf(esc_html__( 'Email address for coach number %s', 'fitness-passion' ),$i),
        'section'    => 'fitness_passion_landing_template_section',
        'settings'   => 'fitness_passion_landing_coach'.$i.'_email',
    )));

    
}

$wp_customize->add_control( new Fitness_Passion_Separator_Control( $wp_customize, 'fitness_passion_separator_'.$sep++, array(
    'section'    => 'fitness_passion_landing_template_section',
    'settings'   => 'fitness_passion_landing_coach'.$coaches_number.'_email',
) ) );
/*End coaches*/


/* Testimonials*/
$wp_customize->add_setting( 'fitness_passion_landing_testimonials_show' , array(
    'default'           => false,
    'sanitize_callback' => 'fitness_passion_sanitize_checkbox',
    'transport'         => 'refresh',
));

$wp_customize->add_control( new Fitness_Passion_Toggle_Switch_Custom_control( $wp_customize, 'fitness_passion_landing_testimonials_show_control', array(
    'label'      => esc_html__( 'Show/Hide testimonials section', 'fitness-passion' ),
    'section'    => 'fitness_passion_landing_template_section',
    'settings'   => 'fitness_passion_landing_testimonials_show',
    
)));

$wp_customize->add_setting( 'fitness_passion_landing_testimonials_title' , array(
    'default'           => esc_html__('Testimonials','fitness-passion'),
    'sanitize_callback' => 'sanitize_text_field',
    'transport'         => 'refresh',
));

$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'fitness_passion_landing_testimonials_title_control', array(
    'label'      => esc_html__( 'Testimonials section title', 'fitness-passion' ),
    'section'    => 'fitness_passion_landing_template_section',
    'settings'   => 'fitness_passion_landing_testimonials_title',
)));

// Image background testimonials section
$wp_customize->add_setting( 'fitness_passion_landing_testimonials_back_image' , array(
    'default'           => '',
    'sanitize_callback' => 'fitness_passion_sanitize_image',
    'transport'         => 'refresh',
));

$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize,'fitness_passion_landing_testimonials_back_image_control',array(
    
    'label'      => esc_html__( 'Upload image for testimonials background section', 'fitness-passion' ),
    'section'    => 'fitness_passion_landing_template_section',
    'settings'   => 'fitness_passion_landing_testimonials_back_image'
)));


$wp_customize->add_setting( 'fitness_passion_landing_testimonials_jetpack' , array(
    'default'           => false,
    'sanitize_callback' => 'fitness_passion_sanitize_checkbox',
    'transport'         => 'refresh',
));

$wp_customize->add_control( new Fitness_Passion_Toggle_Switch_Custom_control( $wp_customize, 'fitness_passion_landing_testimonials_jetpack_control', array(
    'label'      => esc_html__( 'Use testimonials from jetpack', 'fitness-passion' ),
    'section'    => 'fitness_passion_landing_template_section',
    'settings'   => 'fitness_passion_landing_testimonials_jetpack',
    
)));


$wp_customize->add_setting( 'fitness_passion_landing_testimonial_category' , array(
    'default'           => 'testimonials',
    'sanitize_callback' => 'sanitize_text_field',
    'transport'         => 'refresh',
));

$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'fitness_passion_landing_testimonial_category_control', array(
    /* translators: numer of testiomonial */
    'label'      => esc_html__( 'Custom category for testimonials posts, default "testimonials"', 'fitness-passion' ),
    'section'    => 'fitness_passion_landing_template_section',
    'settings'   => 'fitness_passion_landing_testimonial_category',
)));

$wp_customize->add_setting( 'fitness_passion_landing_testimonials_exclude' , array(
    'default'           => true,
    'sanitize_callback' => 'fitness_passion_sanitize_checkbox',
    'transport'         => 'refresh',
));

$wp_customize->add_control( new Fitness_Passion_Toggle_Switch_Custom_control( $wp_customize, 'fitness_passion_landing_testimonials_exclude_control', array(
    'label'      => esc_html__( 'Show/Hide testimonials category for lists entries', 'fitness-passion' ),
    'section'    => 'fitness_passion_landing_template_section',
    'settings'   => 'fitness_passion_landing_testimonials_exclude',
    
)));



$wp_customize->add_control( new Fitness_Passion_Separator_Control( $wp_customize, 'fitness_passion_separator_'.$sep++, array(
    'section'    => 'fitness_passion_landing_template_section',
    'settings'   => 'fitness_passion_landing_testimonial_category',
) ) );

/*End testimonials */

/* Latest posts */
$wp_customize->add_setting( 'fitness_passion_landing_latest_posts_show' , array(
    'default'           => false,
    'sanitize_callback' => 'fitness_passion_sanitize_checkbox',
    'transport'         => 'refresh',
));

$wp_customize->add_control( new Fitness_Passion_Toggle_Switch_Custom_control( $wp_customize, 'fitness_passion_landing_latest_posts_show_control', array(
    'label'      => esc_html__( 'Show/Hide latest posts section', 'fitness-passion' ),
    'section'    => 'fitness_passion_landing_template_section',
    'settings'   => 'fitness_passion_landing_latest_posts_show',
    
)));

// Title latets posts
$wp_customize->add_setting( 'fitness_passion_landing_latest_posts_title' , array(
    'default'            => esc_html__('latest posts','fitness-passion'),
    'transport'          => 'refresh',
    'sanitize_callback'  => 'sanitize_text_field',
));

$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'fitness_passion_landing_latest_posts_title_control', array(
    'label'      => esc_html__( 'Text for latests posts section', 'fitness-passion' ),
    'section'    => 'fitness_passion_landing_template_section',
    'settings'   => 'fitness_passion_landing_latest_posts_title',
)));

// image background latest posts section
$wp_customize->add_setting( 'fitness_passion_landing_latest_posts_back_image' , array(
    'default'           => '',
    'sanitize_callback' => 'fitness_passion_sanitize_image',
    'transport'         => 'refresh',
));

$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize,'fitness_passion_landing_latest_posts_back_image_control',array(
    'label'      => esc_html__( 'Upload image background for latest posts section', 'fitness-passion' ),
    'section'    => 'fitness_passion_landing_template_section',
    'settings'   => 'fitness_passion_landing_latest_posts_back_image'
)));

$wp_customize->add_control( new Fitness_Passion_Separator_Control( $wp_customize, 'fitness_passion_separator_'.$sep++, array(
    'section'    => 'fitness_passion_landing_template_section',
    'settings'   => 'fitness_passion_landing_latest_posts_back_image',
) ) );

/* End Latests posts*/

/* Plans section*/
$wp_customize->add_setting( 'fitness_passion_landing_plans_show' , array(
    'default'           => false,
    'sanitize_callback' => 'fitness_passion_sanitize_checkbox',
    'transport'         => 'refresh',
));

$wp_customize->add_control( new Fitness_Passion_Toggle_Switch_Custom_control( $wp_customize, 'fitness_passion_landing_plans_show_control', array(
    'label'      => esc_html__( 'Show/Hide pricing plans section', 'fitness-passion' ),
    'section'    => 'fitness_passion_landing_template_section',
    'settings'   => 'fitness_passion_landing_plans_show',
    
)));

$wp_customize->add_setting( 'fitness_passion_landing_plans_title' , array(
    'default'           => esc_html__('Pricing Plans','fitness-passion'),
    'sanitize_callback' => 'sanitize_text_field',
    'transport'         => 'refresh',
));

$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'fitness_passion_landing_plans_title_control', array(
    'label'      => esc_html__( 'Plans section title', 'fitness-passion' ),
    'section'    => 'fitness_passion_landing_template_section',
    'settings'   => 'fitness_passion_landing_plans_title',
)));

/*Show content of page */
$wp_customize->add_setting( 'fitness_passion_Simple_Notice_shortcodes' , array(
    'default'           => '',
    'sanitize_callback' => 'sanitize_text_field',
    
));

$wp_customize->add_control( new Fitness_Passion_Simple_Notice_Custom_Control( $wp_customize, 'fitness_passion_Simple_Notice_shortcodes_control', array(
    'label'      => esc_html__( 'Price Plans short codes', 'fitness-passion' ),
    /* translators: %s: Url of admin panel info , translation not required */
    'description'=> sprintf(__( 'Use the short codes available in the subject for pricing plan, more info: <a href="%s">About Fitness Passion</a> ', 'fitness-passion' ),esc_url(site_url('wp-admin/themes.php?page=fitness_passion_theme#plans'))),
    'section'    => 'fitness_passion_landing_template_section',
    'settings'   => 'fitness_passion_Simple_Notice_shortcodes',
    
)));

//plan1
$wp_customize->add_setting( 'fitness_passion_landing_plans_shortcode1' , array(
    'default'           => '',
    'sanitize_callback' => 'fitness_passion_no_sanitize',
    'transport'         => 'refresh',
));

$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'fitness_passion_landing_plans_shortcode1_control', array(
    'label'      => esc_html__( 'Plan shortcode 1', 'fitness-passion' ),
    'description'=> esc_html__('Shor code for Price plan 1','fitness-passion'),
    'section'    => 'fitness_passion_landing_template_section',
    'settings'   => 'fitness_passion_landing_plans_shortcode1',
    'type'       => 'textarea'
)));

//plan2
$wp_customize->add_setting( 'fitness_passion_landing_plans_shortcode2' , array(
    'default'           => '',
    'sanitize_callback' => 'fitness_passion_no_sanitize',
    'transport'         => 'refresh',
));

$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'fitness_passion_landing_plans_shortcode2_control', array(
    'label'      => esc_html__( 'Plan shortcode 2', 'fitness-passion' ),
    'description'=> esc_html__('Shor code for Price plan 2','fitness-passion'),
    'section'    => 'fitness_passion_landing_template_section',
    'settings'   => 'fitness_passion_landing_plans_shortcode2',
    'type'       => 'textarea'
)));

//plan3
$wp_customize->add_setting( 'fitness_passion_landing_plans_shortcode3' , array(
    'default'           => '',
    'sanitize_callback' => 'fitness_passion_no_sanitize',
    'transport'         => 'refresh',
));

$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'fitness_passion_landing_plans_shortcode3_control', array(
    'label'      => esc_html__( 'Plan shortcode 3', 'fitness-passion' ),
    'description'=> esc_html__('Shor code for Price plan 3','fitness-passion'),
    'section'    => 'fitness_passion_landing_template_section',
    'settings'   => 'fitness_passion_landing_plans_shortcode3',
    'type'       => 'textarea'
)));

$wp_customize->add_control( new Fitness_Passion_Separator_Control( $wp_customize, 'fitness_passion_separator_plans', array(
    'section'    => 'fitness_passion_landing_template_section',
    'settings'   => 'fitness_passion_landing_plans_shortcode3',
) ) );

/* End Plans posts*/


/* Contact section*/
$wp_customize->add_setting( 'fitness_passion_landing_contact_show' , array(
    'default'           => false,
    'sanitize_callback' => 'fitness_passion_sanitize_checkbox',
    'transport'         => 'refresh',
));

$wp_customize->add_control( new Fitness_Passion_Toggle_Switch_Custom_control( $wp_customize, 'fitness_passion_landing_contact_show_control', array(
    'label'      => esc_html__( 'Show/Hide contact section', 'fitness-passion' ),
    'section'    => 'fitness_passion_landing_template_section',
    'settings'   => 'fitness_passion_landing_contact_show',
    
)));

$wp_customize->add_setting( 'fitness_passion_landing_contact_title' , array(
    'default'           => esc_html__('Contact Us','fitness-passion'),
    'sanitize_callback' => 'sanitize_text_field',
    'transport'         => 'refresh',
));

$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'fitness_passion_landing_contact_title_control', array(
    'label'      => esc_html__( 'Contact section title', 'fitness-passion' ),
    'section'    => 'fitness_passion_landing_template_section',
    'settings'   => 'fitness_passion_landing_contact_title',
)));

// Image background contact section
$wp_customize->add_setting( 'fitness_passion_landing_contact_back_image' , array(
    'default'           => '',
    'sanitize_callback' => 'fitness_passion_sanitize_image',
    'transport'         => 'refresh',
));

$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize,'fitness_passion_landing_contact_back_image_control',array(
    'label'      => esc_html__( 'Upload image for contact background section', 'fitness-passion' ),
    'section'    => 'fitness_passion_landing_template_section',
    'settings'   => 'fitness_passion_landing_contact_back_image'
)));

// Short code contact form
$wp_customize->add_setting( 'fitness_passion_landing_contact_form_shortcode' , array(
    'default'           => '',
    'sanitize_callback' => 'sanitize_text_field',
    'transport'         => 'refresh',
));

$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'fitness_passion_landing_contact_form_shortcode_control', array(
    'label'      => esc_html__( 'Contact Form 7 shortcode', 'fitness-passion' ),
    'description'=> esc_html__('Use contact form plugin 7 for your form, you can use the short code of another plugin but you will have to adjust your own style.','fitness-passion'),
    'section'    => 'fitness_passion_landing_template_section',
    'settings'   => 'fitness_passion_landing_contact_form_shortcode',
)));

/* End Contact section */

/* END Landing page template */