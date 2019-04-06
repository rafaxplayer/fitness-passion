<?php
/**
 * fitness_passion Theme Customizer, Landing page tempate
 *
 * @package fitness-passion
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }
 /* Landing Page Template */
 $wp_customize->add_section( 'fitness_passion_landing_template_section' , array(
    'title'      => esc_html__('Landing Page Template Options','fitness-passion'),
    'panel' 	=> 'fitness_passion_panel',
    'active_callback' => 'fitness_passion_is_landing_template'
));

/*Show content of page */
$wp_customize->add_setting( 'fitness_passion_landing_content_page_show' , array(
    'default'   => true,
    'sanitize_callback' => 'fitness_passion_sanitize_checkbox',
    'transport' => 'refresh',
));

$wp_customize->add_control( new Skyrocket_Toggle_Switch_Custom_control( $wp_customize, 'fitness_passion_landing_content_page_control', array(
    'label'      => esc_html__( 'Show/Hide the content of page', 'fitness-passion' ),
    'section'    => 'fitness_passion_landing_template_section',
    'settings'   => 'fitness_passion_landing_content_page_show',
    
)));


/*Services section*/
$wp_customize->add_setting( 'fitness_passion_landing_services_show' , array(
    'default'   => false,
    'sanitize_callback' => 'fitness_passion_sanitize_checkbox',
    'transport' => 'refresh',
));

$wp_customize->add_control( new Skyrocket_Toggle_Switch_Custom_control( $wp_customize, 'fitness_passion_landing_services_control', array(
    'label'      => esc_html__( 'Show/Hide services section', 'fitness-passion' ),
    'section'    => 'fitness_passion_landing_template_section',
    'settings'   => 'fitness_passion_landing_services_show',
    
)));

for($i=1;$i<=3;$i++){

    //service ++
    $wp_customize->add_setting('fitness_passion_landing_service_'.$i,array(
        'default' => '0',			
        'sanitize_callback' => 'fitness_passion_sanitize_dropdown_pages'
    ));
     
    $wp_customize->add_control(	'fitness_passion_landing_service_'.$i.'_control',array(
        /* translators: number of service */
        'label'      => sprintf(esc_html__( 'Page for service nº %s', 'fitness-passion' ),$i),
        'type' => 'dropdown-pages',			
        'section' => 'fitness_passion_landing_template_section',
        'settings'   => 'fitness_passion_landing_service_'.$i,
        'allow_addition' => true,
    ));
}

$wp_customize->add_control( new Separator_Custom_control( $wp_customize, 'fitness_passion_separator_'.$sep++, array(
    'section' 		=> 'fitness_passion_landing_template_section',
    'settings'      => 'fitness_passion_landing_service_3',
) ) );

/* End services section */

/* Actions */
for($i=1;$i<=3;$i++){

    $wp_customize->add_setting( 'fitness_passion_landing_action'.$i.'_show' , array(
        'default'   => false,
        'sanitize_callback' => 'fitness_passion_sanitize_checkbox',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control( new Skyrocket_Toggle_Switch_Custom_control( $wp_customize, 'fitness_passion_landing_action'.$i.'_show_control', array(
        /* translators: number of action */
        'label'      => sprintf(esc_html__( 'Show/Hide action %s section', 'fitness-passion' ),$i),
        'section'    => 'fitness_passion_landing_template_section',
        'settings'   => 'fitness_passion_landing_action'.$i.'_show',
        'type'        => 'ios',
    )));

    //page for action 
    $wp_customize->add_setting('fitness_passion_landing_page_action'.$i,array(
        'default' => '0',			
        'sanitize_callback' => 'fitness_passion_sanitize_dropdown_pages'
    ));
     
    $wp_customize->add_control(	'fitness_passion_landing_page_action'.$i.'_control',array(
        /* translators: number of action */
        'label'      => sprintf(esc_html__( 'Page for action nº %s', 'fitness-passion' ),$i),
        'type' => 'dropdown-pages',			
        'section' => 'fitness_passion_landing_template_section',
        'settings'   => 'fitness_passion_landing_page_action'.$i,
        'allow_addition' => true,
    ));

    // Text Button action 
    $wp_customize->add_setting( 'fitness_passion_landing_action'.$i.'_morebtn' , array(
        'default'   => '',
        'sanitize_callback' => 'sanitize_text_field',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'fitness_passion_landing_action'.$i.'_morebtn_control', array(
        /* translators: number of action */
        'label'      => sprintf(esc_html__( 'Text Buton more for action %s', 'fitness-passion' ),$i),
        'section'    => 'fitness_passion_landing_template_section',
        'settings'   => 'fitness_passion_landing_action'.$i.'_morebtn',
    )));

    $wp_customize->add_control( new Separator_Custom_control( $wp_customize, 'fitness_passion_separator_'.$sep++, array(
        'section'    => 'fitness_passion_landing_template_section',
        'settings'   => 'fitness_passion_landing_action'.$i.'_morebtn',
    ) ) );
}
/*End Actions section*/


/*Coaches section*/
$wp_customize->add_setting( 'fitness_passion_landing_coaches_show' , array(
    'default'   => false,
    'sanitize_callback' => 'fitness_passion_sanitize_checkbox',
    'transport' => 'refresh',
));

$wp_customize->add_control( new Skyrocket_Toggle_Switch_Custom_control( $wp_customize, 'fitness_passion_landing_coaches_show_control', array(
    'label'      => esc_html__( 'Show/Hide coaches section', 'fitness-passion' ),
    'section'    => 'fitness_passion_landing_template_section',
    'settings'   => 'fitness_passion_landing_coaches_show',
    
)));

$wp_customize->add_setting( 'fitness_passion_landing_coaches_title' , array(
    'default'   => esc_html__('Our Coaches','fitness-passion'),
    'sanitize_callback' => 'sanitize_text_field',
    'transport' => 'refresh',
));

$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'fitness_passion_landing_coaches_title_control', array(
    'label'      => esc_html__( 'Coaches section title', 'fitness-passion' ),
    'section'    => 'fitness_passion_landing_template_section',
    'settings'   => 'fitness_passion_landing_coaches_title',
)));

// image background coaches section
$wp_customize->add_setting( 'fitness_passion_landing_coaches_back_image' , array(
    'default'   => '',
    'sanitize_callback' => 'fitness_passion_sanitize_image',
    'transport' => 'refresh',
));

$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize,'fitness_passion_landing_coaches_back_image_control',array(
    'label'      => esc_html__( 'Upload image for coaches background section', 'fitness-passion' ),
    'section'    => 'fitness_passion_landing_template_section',
    'settings'   => 'fitness_passion_landing_coaches_back_image'
)));

// Coaches number
$wp_customize->add_setting( 'fitness_passion_landing_coaches_number' , array(
    'default'   => 3,
    'sanitize_callback' => 'absint',
    'transport' => 'refresh',
));

$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'fitness_passion_landing_coaches_number_control', array(
    'label'      => esc_html__( 'Number of coaches to show', 'fitness-passion' ),
    'description'=> esc_html__('It is necessary to refresh the page to show or hide the changes of couches', 'fitness-passion'),
    'section'    => 'fitness_passion_landing_template_section',
    'settings'   => 'fitness_passion_landing_coaches_number',
    'type'		 => 'number',
)));


$coaches_number = get_theme_mod('fitness_passion_landing_coaches_number',3);


//coaches
for($i = 1; $i <= $coaches_number; $i++){

    //coach
    $wp_customize->add_setting( 'fitness_passion_landing_coach'.$i.'_image' , array(
        'default'   => esc_url_raw(get_stylesheet_directory_uri() .'/assets/images/coach.jpg'),
        'sanitize_callback' => 'fitness_passion_sanitize_image',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize,'fitness_passion_landing_coach'.$i.'_image_control',array(
        /* translators: number of coach */
        'label'      => sprintf(esc_html__( 'Upload image for coach nº %s', 'fitness-passion' ),$i),
        'section'    => 'fitness_passion_landing_template_section',
        'settings'   => 'fitness_passion_landing_coach'.$i.'_image'
    )));

    $wp_customize->add_setting( 'fitness_passion_landing_coach'.$i.'_name' , array(
        'default'   => '',
        'sanitize_callback' => 'sanitize_text_field',
        'transport' => 'refresh',
    ));
    
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'fitness_passion_landing_coach'.$i.'_name_control', array(
        /* translators: numer of coach */
        'label'      => sprintf(esc_html__( 'Name of coach nº %s', 'fitness-passion' ),$i),
        'description'=> esc_html__('It is necessary for it to be shown','fitness-passion'),
        'section'    => 'fitness_passion_landing_template_section',
        'settings'   => 'fitness_passion_landing_coach'.$i.'_name',
    )));

    $wp_customize->add_setting( 'fitness_passion_landing_coach'.$i.'_desc' , array(
        'default'   => '',
        'sanitize_callback' => 'sanitize_text_field',
        'transport' => 'refresh',
    ));
    
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'fitness_passion_landing_coach'.$i.'_desc_control', array(
        'label'      => sprintf(esc_html__( 'Description for coach nº %s', 'fitness-passion' ),$i),
        'section'    => 'fitness_passion_landing_template_section',
        'settings'   => 'fitness_passion_landing_coach'.$i.'_desc',
    )));

    $wp_customize->add_setting( 'fitness_passion_landing_coach'.$i.'_facebook' , array(
        'default'   => '',
        'sanitize_callback' => 'sanitize_text_field',
        'transport' => 'refresh',
    ));
    
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'fitness_passion_landing_coach'.$i.'_facebook_control', array(
        'label'      => sprintf(esc_html__( 'Facebook url for coach nº %s', 'fitness-passion' ),$i),
        'section'    => 'fitness_passion_landing_template_section',
        'settings'   => 'fitness_passion_landing_coach'.$i.'_facebook',
    )));

    $wp_customize->add_setting( 'fitness_passion_landing_coach'.$i.'_twitter' , array(
        'default'   => '',
        'sanitize_callback' => 'sanitize_text_field',
        'transport' => 'refresh',
    ));
    
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'fitness_passion_landing_coach'.$i.'_twitter_control', array(
        /* translators: numer of coach */
        'label'      => sprintf(esc_html__( 'Twitter url for coach nº %s', 'fitness-passion' ),$i),
        'section'    => 'fitness_passion_landing_template_section',
        'settings'   => 'fitness_passion_landing_coach'.$i.'_twitter',
    )));

    $wp_customize->add_setting( 'fitness_passion_landing_coach'.$i.'_email' , array(
        'default'   => '',
        'sanitize_callback' => 'sanitize_email',
        'transport' => 'refresh',
    ));
    
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'fitness_passion_landing_coach'.$i.'_email_control', array(
        /* translators: numer of coach */
        'label'      => sprintf(esc_html__( 'Email address for coach nº %s', 'fitness-passion' ),$i),
        'section'    => 'fitness_passion_landing_template_section',
        'settings'   => 'fitness_passion_landing_coach'.$i.'_email',
    )));

    
}

$wp_customize->add_control( new Separator_Custom_control( $wp_customize, 'fitness_passion_separator_'.$sep++, array(
    'section'    => 'fitness_passion_landing_template_section',
    'settings'   => 'fitness_passion_landing_coach'.$coaches_number.'_email',
) ) );
/*End coaches*/


/* Testimonials*/
$wp_customize->add_setting( 'fitness_passion_landing_testimonials_show' , array(
    'default'   => false,
    'sanitize_callback' => 'fitness_passion_sanitize_checkbox',
    'transport' => 'refresh',
));

$wp_customize->add_control( new Skyrocket_Toggle_Switch_Custom_control( $wp_customize, 'fitness_passion_landing_testimonials_show_control', array(
    'label'      => esc_html__( 'Show/Hide testimonials section', 'fitness-passion' ),
    'section'    => 'fitness_passion_landing_template_section',
    'settings'   => 'fitness_passion_landing_testimonials_show',
    
)));

$wp_customize->add_setting( 'fitness_passion_landing_testimonials_title' , array(
    'default'   => esc_html__('Testimonials','fitness-passion'),
    'sanitize_callback' => 'sanitize_text_field',
    'transport' => 'refresh',
));

$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'fitness_passion_landing_testimonials_title_control', array(
    'label'      => esc_html__( 'Testimonials section title', 'fitness-passion' ),
    'section'    => 'fitness_passion_landing_template_section',
    'settings'   => 'fitness_passion_landing_testimonials_title',
)));

// Image background testimonials section
$wp_customize->add_setting( 'fitness_passion_landing_testimonials_back_image' , array(
    'default'   => '',
    'sanitize_callback' => 'fitness_passion_sanitize_image',
    'transport' => 'refresh',
));

$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize,'fitness_passion_landing_testimonials_back_image_control',array(
    
    'label'      => esc_html__( 'Upload image for testimonials background section', 'fitness-passion' ),
    'section'    => 'fitness_passion_landing_template_section',
    'settings'   => 'fitness_passion_landing_testimonials_back_image'
)));

// Testimonials count
$wp_customize->add_setting( 'fitness_passion_landing_testimonials_number' , array(
    'default'   => 5,
    'sanitize_callback' => 'absint',
    'transport' => 'refresh',
));

$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'fitness_passion_landing_testimonials_number_control', array(
    'label'      => esc_html__( 'Number of testimonials to show', 'fitness-passion' ),
    'description'=> esc_html__('It is necessary to refresh the page to show or hide the changes of testimonials', 'fitness-passion'),
    'section'    => 'fitness_passion_landing_template_section',
    'settings'   => 'fitness_passion_landing_testimonials_number',
    'type'		 => 'number',
)));

$wp_customize->add_control( new Separator_Custom_control( $wp_customize, 'fitness_passion_separator_'.$sep++, array(
    'section'    => 'fitness_passion_landing_template_section',
    'settings'   => 'fitness_passion_landing_testimonials_number',
) ) );

$testimonials_number = get_theme_mod('fitness_passion_landing_testimonials_number',5);

//testimnials
for($i = 1; $i <= $testimonials_number; $i++){

    $wp_customize->add_setting( 'fitness_passion_landing_testimonial'.$i.'_avatar' , array(
        'default'   => esc_url_raw(get_stylesheet_directory_uri() .'/assets/images/testimonials.jpg'),
        'sanitize_callback' => 'fitness_passion_sanitize_image',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize,'fitness_passion_landing_testimonial'.$i.'_avatar_control',array(
        /* translators: numer of testiomonial */
        'label'      => sprintf(esc_html__( 'Upload avatar for testimonial nº %s', 'fitness-passion' ),$i),
        'section'    => 'fitness_passion_landing_template_section',
        'settings'   => 'fitness_passion_landing_testimonial'.$i.'_avatar'
    )));

    $wp_customize->add_setting( 'fitness_passion_landing_testimonial'.$i.'_name' , array(
        'default'   => '',
        'sanitize_callback' => 'sanitize_text_field',
        'transport' => 'refresh',
    ));
    
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'fitness_passion_landing_testimonial'.$i.'_name_control', array(
        /* translators: numer of testiomonial */
        'label'      => sprintf(esc_html__( 'Author name of testimonial nº %s', 'fitness-passion' ),$i),
        'section'    => 'fitness_passion_landing_template_section',
        'settings'   => 'fitness_passion_landing_testimonial'.$i.'_name',
    )));

    $wp_customize->add_setting( 'fitness_passion_landing_testimonial'.$i.'_desc' , array(
        'default'   => '',
        'sanitize_callback' => 'sanitize_text_field',
        'transport' => 'refresh',
    ));
    
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'fitness_passion_landing_testimonial'.$i.'_desc_control', array(
        /* translators: numer of testiomonial */
        'label'      => sprintf(esc_html__( 'Author description of testimonial nº %s', 'fitness-passion' ),$i),
        'section'    => 'fitness_passion_landing_template_section',
        'settings'   => 'fitness_passion_landing_testimonial'.$i.'_desc',
    )));

    $wp_customize->add_setting( 'fitness_passion_landing_testimonial'.$i.'_text' , array(
        'default'   => '',
        'sanitize_callback' => 'sanitize_text_field',
        'transport' => 'refresh',
    ));
    
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'fitness_passion_landing_testimonial'.$i.'_text_control', array(
        /* translators: numer of testiomonial */
        'label'      => sprintf(esc_html__( 'Text for textimonial nº %s', 'fitness-passion' ),$i),
        'description'=> esc_html__('Maximum 35 words to see a correct design.','fitness-passion'),
        'section'    => 'fitness_passion_landing_template_section',
        'settings'   => 'fitness_passion_landing_testimonial'.$i.'_text',
        'type'       => 'textarea'
    )));

}
$wp_customize->add_control( new Separator_Custom_control( $wp_customize, 'fitness_passion_separator_'.$sep++, array(
    'section'    => 'fitness_passion_landing_template_section',
        'settings'   => 'fitness_passion_landing_testimonial'.$testimonials_number.'_text',
) ) );

/*End testimonials */

/* Latest posts */
$wp_customize->add_setting( 'fitness_passion_landing_latest_posts_show' , array(
    'default'   => false,
    'sanitize_callback' => 'fitness_passion_sanitize_checkbox',
    'transport' => 'refresh',
));

$wp_customize->add_control( new Skyrocket_Toggle_Switch_Custom_control( $wp_customize, 'fitness_passion_landing_latest_posts_show_control', array(
    'label'      => esc_html__( 'Show/Hide latest posts section', 'fitness-passion' ),
    'section'    => 'fitness_passion_landing_template_section',
    'settings'   => 'fitness_passion_landing_latest_posts_show',
    
)));

// Title latets posts
$wp_customize->add_setting( 'fitness_passion_landing_latest_posts_title' , array(
    'default'   => esc_html__('latest posts','fitness-passion'),
    'transport' => 'refresh',
    'sanitize_callback' => 'sanitize_text_field',
));

$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'fitness_passion_landing_latest_posts_title_control', array(
    'label'      => esc_html__( 'Text for latests posts section', 'fitness-passion' ),
    'section'    => 'fitness_passion_landing_template_section',
    'settings'   => 'fitness_passion_landing_latest_posts_title',
)));

// image background latest posts section
$wp_customize->add_setting( 'fitness_passion_landing_latest_posts_back_image' , array(
    'default'   => '',
    'sanitize_callback' => 'fitness_passion_sanitize_image',
    'transport' => 'refresh',
));

$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize,'fitness_passion_landing_latest_posts_back_image_control',array(
    'label'      => esc_html__( 'Upload image background for latest posts section', 'fitness-passion' ),
    'section'    => 'fitness_passion_landing_template_section',
    'settings'   => 'fitness_passion_landing_latest_posts_back_image'
)));

$wp_customize->add_control( new Separator_Custom_control( $wp_customize, 'fitness_passion_separator_'.$sep++, array(
    'section'    => 'fitness_passion_landing_template_section',
        'settings'   => 'fitness_passion_landing_testimonial'.$testimonials_number.'_text',
) ) );

/* End Latests posts*/


/* Contact section*/
$wp_customize->add_setting( 'fitnes_passion_landing_contact_show' , array(
    'default'   => false,
    'sanitize_callback' => 'fitness_passion_sanitize_checkbox',
    'transport' => 'refresh',
));

$wp_customize->add_control( new Skyrocket_Toggle_Switch_Custom_control( $wp_customize, 'fitnes_passion_landing_contact_show_control', array(
    'label'      => esc_html__( 'Show/Hide contact section', 'fitness-passion' ),
    'section'    => 'fitness_passion_landing_template_section',
    'settings'   => 'fitnes_passion_landing_contact_show',
    
)));

$wp_customize->add_setting( 'fitness_passion_landing_contact_title' , array(
    'default'   => esc_html__('Contact Us','fitness-passion'),
    'sanitize_callback' => 'sanitize_text_field',
    'transport' => 'refresh',
));

$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'fitness_passion_landing_contact_title_control', array(
    'label'      => esc_html__( 'Contact section title', 'fitness-passion' ),
    'section'    => 'fitness_passion_landing_template_section',
    'settings'   => 'fitness_passion_landing_contact_title',
)));

// Image background contact section
$wp_customize->add_setting( 'fitness_passion_landing_contact_back_image' , array(
    'default'   => '',
    'sanitize_callback' => 'fitness_passion_sanitize_image',
    'transport' => 'refresh',
));

$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize,'fitness_passion_landing_contact_back_image_control',array(
    'label'      => esc_html__( 'Upload image for contact background section', 'fitness-passion' ),
    'section'    => 'fitness_passion_landing_template_section',
    'settings'   => 'fitness_passion_landing_contact_back_image'
)));

// Short code contact form
$wp_customize->add_setting( 'fitness_passion_landing_contact_form_shortcode' , array(
    'default'   => '',
    'sanitize_callback' => 'sanitize_text_field',
    'transport' => 'refresh',
));

$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'fitness_passion_landing_contact_form_shortcode_control', array(
    'label'      => esc_html__( 'Contact Form 7 shortcode', 'fitness-passion' ),
    'description'=> esc_html__('Use contact form plugin 7 for your form, you can use the short code of another plugin but you will have to adjust your own style.','fitness-passion'),
    'section'    => 'fitness_passion_landing_template_section',
    'settings'   => 'fitness_passion_landing_contact_form_shortcode',
)));

/* End Contact section */

/* END Landing page template */