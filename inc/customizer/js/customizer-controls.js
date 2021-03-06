(function ($) {
    'use strict';

    wp.customize.bind('ready', function () {

        //initialize
        slider_header_check();
        landing_sections_check('all');

        function slider_header_check() {

            // array controls ids for slider pages
            var $control_ids_slider = [

                'fitness_passion_slider_page_1_control',
                'fitness_passion_slider_page_2_control',
                'fitness_passion_slider_page_3_control',
                'fitness_passion_slider_page_4_control',
                'fitness_passion_slide_morebtn_control'

            ];
            // array controls ids for regular header
            var $control_ids_header = [

                'fitness_passion_front_page_header_title_control',
                'fitness_passion_front_page_header_subtitle_control',
                'fitness_passion_front_page_header_button_control',
                'fitness_passion_front_page_header_button_link_control',
            ];


            if (wp.customize.instance('fitness_passion_show_slider').get()) {

                $.each($control_ids_slider, function (id, value) {
                    $('#customize-control-' + value).fadeIn();
                });
                $.each($control_ids_header, function (id, value) {
                    $('#customize-control-' + value).fadeOut();
                })
            } else {

                $.each($control_ids_slider, function (id, value) {
                    $('#customize-control-' + value).fadeOut();
                })

                $.each($control_ids_header, function (id, value) {
                    $('#customize-control-' + value).fadeIn();
                })
            }
        }


        // on change values....
        wp.customize.control('fitness_passion_show_slider_control', function (control) {
            control.setting.bind(function (value) {
                
                // check state
                slider_header_check();
            });

        });

        /*Landing template*/

        function landing_sections_check($section) {

            if ($section == 'page_content' || $section == 'all') {

                //page content
                if (wp.customize.instance('fitness_passion_landing_content_page_show').get()) {
                    
                    $('#customize-control-fitness_passion_landing_content_page_title_control').fadeIn();

                } else {
                    
                    $('#customize-control-fitness_passion_landing_content_page_title_control').fadeOut();
                    
                }
            }

            if ($section == 'services' || $section == 'all') {

                // array controls ids for landing section services
                var $control_ids_landing_section_services = [

                    'fitness_passion_landing_page_service_1_control',
                    'fitness_passion_landing_page_service_2_control',
                    'fitness_passion_landing_page_service_3_control',

                ];
                //services
                if (wp.customize.instance('fitness_passion_landing_services_show').get()) {

                    $.each($control_ids_landing_section_services, function (id, value) {
                        $('#customize-control-' + value).fadeIn();
                    });

                } else {

                    $.each($control_ids_landing_section_services, function (id, value) {
                        $('#customize-control-' + value).fadeOut();
                    })

                }
            }


            if ($section == 'action1' || $section == 'all') {

                // array controls ids for landing section action1
                var $control_ids_landing_section_actions1 = [
                    'fitness_passion_landing_page_action1_control',
                    'fitness_passion_landing_action1_morebtn_control',

                ];
                //actions1
                if (wp.customize.instance('fitness_passion_landing_action1_show').get()) {


                    $.each($control_ids_landing_section_actions1, function (id, value) {
                        $('#customize-control-' + value).fadeIn();
                    });
                } else {


                    $.each($control_ids_landing_section_actions1, function (id, value) {
                        $('#customize-control-' + value).fadeOut();
                    });
                }
            }
            if ($section == 'action2' || $section == 'all') {

                // array controls ids for landing section action2
                var $control_ids_landing_section_actions2 = [
                    'fitness_passion_landing_page_action2_control',
                    'fitness_passion_landing_action2_morebtn_control',

                ];
                //actions2
                if (wp.customize.instance('fitness_passion_landing_action2_show').get()) {


                    $.each($control_ids_landing_section_actions2, function (id, value) {
                        $('#customize-control-' + value).fadeIn();
                    });
                } else {


                    $.each($control_ids_landing_section_actions2, function (id, value) {
                        $('#customize-control-' + value).fadeOut();
                    });
                }
            }
            if ($section == 'action3' || $section == 'all') {

                // array controls ids for landing section action3
                var $control_ids_landing_section_actions3 = [
                    'fitness_passion_landing_page_action3_control',
                    'fitness_passion_landing_action3_morebtn_control',
                ];
                //actions3
                if (wp.customize.instance('fitness_passion_landing_action3_show').get()) {


                    $.each($control_ids_landing_section_actions3, function (id, value) {
                        $('#customize-control-' + value).fadeIn();
                    });
                } else {


                    $.each($control_ids_landing_section_actions3, function (id, value) {
                        $('#customize-control-' + value).fadeOut();
                    });
                }
            }

            if ($section == 'coaches' || $section == 'all') {
                // array controls ids for landing section coaches
                var $control_ids_landing_section_coaches = [
                    'fitness_passion_landing_coaches_title_control',
                    'fitness_passion_landing_coaches_back_image_control',
                    'fitness_passion_landing_coaches_number_control',
                ];
                

                for(var i =1;i<= theme_options.couches_number;i++){

                    $control_ids_landing_section_coaches.push(
                        'fitness_passion_landing_coach'+i+'_page_control',
                        'fitness_passion_landing_coach'+i+'_facebook_control',
                        'fitness_passion_landing_coach'+i+'_twitter_control',
                        'fitness_passion_landing_coach'+i+'_email_control');
                }
                

                //coaches
                if (wp.customize.instance('fitness_passion_landing_coaches_show').get()) {

                    $.each($control_ids_landing_section_coaches, function (id, value) {
                        $('#customize-control-' + value).fadeIn();
                    });
                } else {

                    $.each($control_ids_landing_section_coaches, function (id, value) {
                        $('#customize-control-' + value).fadeOut();
                    });
                }

            }

            if ($section == 'testimonials' || $section == 'all') {
                // array controls ids for landing section testimonials
                var $control_ids_landing_section_testimonials = [
                    'fitness_passion_landing_testimonials_title_control',
                    'fitness_passion_landing_testimonials_back_image_control',
                    'fitness_passion_landing_testimonials_jetpack_control',
                    'fitness_passion_landing_testimonial_category_control',
                    'fitness_passion_landing_testimonials_exclude_control',
                ];
                               
        
                //testimonials
                if (wp.customize.instance('fitness_passion_landing_testimonials_show').get()) {

                    $.each($control_ids_landing_section_testimonials, function (id, value) {
                        $('#customize-control-' + value).fadeIn();
                    });
                } else {

                    $.each($control_ids_landing_section_testimonials, function (id, value) {
                        $('#customize-control-' + value).fadeOut();
                    });
                }

            }


            if ($section == 'latest-posts' || $section == 'all'){

                 // array controls ids for landing section latest posts
                 var $control_ids_landing_section_latestposts = [
                    'fitness_passion_landing_latest_posts_title_control',
                    'fitness_passion_landing_latest_posts_back_image_control',
                ];

                //latests posts
                if (wp.customize.instance('fitness_passion_landing_latest_posts_show').get()) {

                    $.each($control_ids_landing_section_latestposts, function (id, value) {
                        $('#customize-control-' + value).fadeIn();
                    });
                } else {

                    $.each($control_ids_landing_section_latestposts, function (id, value) {
                        $('#customize-control-' + value).fadeOut();
                    });
                }

            }

            if ($section == 'plans' || $section == 'all'){

                // array controls ids for landing section plans
                var $control_ids_landing_section_plans = [
                   'fitness_passion_landing_plans_title_control',
                   'fitness_passion_Simple_Notice_shortcodes_control',
                   'fitness_passion_landing_plans_back_image_control',
                   'fitness_passion_landing_plans_shortcode1_control',
                   'fitness_passion_landing_plans_shortcode2_control',
                   'fitness_passion_landing_plans_shortcode3_control'
               ];

               //plans
               if (wp.customize.instance('fitness_passion_landing_plans_show').get()) {

                   $.each($control_ids_landing_section_plans, function (id, value) {
                       $('#customize-control-' + value).fadeIn();
                   });
               } else {

                   $.each($control_ids_landing_section_plans, function (id, value) {
                       $('#customize-control-' + value).fadeOut();
                   });
               }

           }

            if ($section == 'contact' || $section == 'all'){

                // array controls ids for landing section contact
                var $control_ids_landing_section_contact = [
                   'fitness_passion_landing_contact_title_control',
                   'fitness_passion_landing_contact_back_image_control',
                   'fitness_passion_landing_contact_form_shortcode_control',
               ];

               //contact
               if (wp.customize.instance('fitness_passion_landing_contact_show').get()) {

                   $.each($control_ids_landing_section_contact, function (id, value) {
                       $('#customize-control-' + value).fadeIn();
                   });
               } else {

                   $.each($control_ids_landing_section_contact, function (id, value) {
                       $('#customize-control-' + value).fadeOut();
                   });
               }

           }

        }
        // on change values home page content....
        wp.customize.control('fitness_passion_landing_content_page_control', function (control) {
            control.setting.bind(function (value) {
                // check state
                landing_sections_check('page_content');
            });

        });

        // on change values services....
        wp.customize.control('fitness_passion_landing_services_control', function (control) {
            control.setting.bind(function (value) {
                // check state
                landing_sections_check('services');
            });

        });

        // on change values action1....
        wp.customize.control('fitness_passion_landing_action1_show_control', function (control) {
            control.setting.bind(function (value) {
                landing_sections_check('action1');
            });

        });

        // on change values action2....
        wp.customize.control('fitness_passion_landing_action2_show_control', function (control) {
            control.setting.bind(function (value) {
                landing_sections_check('action2');
            });

        });

        // on change values action3....
        wp.customize.control('fitness_passion_landing_action3_show_control', function (control) {
            control.setting.bind(function (value) {
                landing_sections_check('action3');
            });

        })

        // on change values coaches....
        wp.customize.control('fitness_passion_landing_coaches_show_control', function (control) {
            control.setting.bind(function (value) {
                landing_sections_check('coaches');
            });

        })

         // on change values testimonials....
         wp.customize.control('fitness_passion_landing_testimonials_show_control', function (control) {
            control.setting.bind(function (value) {
                landing_sections_check('testimonials');
            });

        })
        // on change values testimonials jetpack....
        wp.customize.control('fitness_passion_landing_testimonials_jetpack_control', function (control) {
            control.setting.bind(function (value) {
               //if use jectpack testimonials post type show/hide custom post testimonials controls
               if (wp.customize.instance('fitness_passion_landing_testimonials_jetpack').get()) {
                
                    $('#customize-control-fitness_passion_landing_testimonial_category_control').fadeOut();
                    $('#customize-control-fitness_passion_landing_testimonials_exclude_control').fadeOut();

                } else {
                    
                    $('#customize-control-fitness_passion_landing_testimonial_category_control').fadeIn();
                    $('#customize-control-fitness_passion_landing_testimonials_exclude_control').fadeIn();
                    
                }
            });

        })


        // on change values latest posts....
        wp.customize.control('fitness_passion_landing_latest_posts_show_control', function (control) {
            control.setting.bind(function (value) {
                
                landing_sections_check('latest-posts');
            });

        });

        // on change values plans section....
        wp.customize.control('fitness_passion_landing_plans_show_control', function (control) {
            control.setting.bind(function (value) {
                
                landing_sections_check('plans');
            });

        });

        // on change values contact section....
        wp.customize.control('fitness_passion_landing_contact_show_control', function (control) {
            control.setting.bind(function (value) {
                
                landing_sections_check('contact');
            });

        });

        

    });


})(jQuery);