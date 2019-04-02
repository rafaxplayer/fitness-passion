<?php
/**
 * Template part for displaying contact section on landing template
 *
*
 * @package fitnes-passion
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

    if( get_theme_mod('fitnes_passion_landing_contact_show', false) ): 

        $title = get_theme_mod('fitness_passion_landing_contact_title',__('Contact Us','fitness-passion'));
        $phone = get_theme_mod('fitness_passion_phone', '');
		$whatsapp = get_theme_mod('fitness_passion_whatsapp', '');
		$address = get_theme_mod('fitness_passion_address', '');
		$email = get_theme_mod('fitness_passion_email', '');?>
    
    
        <section class="fit-landing-contact" style="background-image:url(<?php echo get_theme_mod('fitness_passion_landing_contact_back_image');?>">
            <div class="contact-wrap">

                <?php if(!empty($title)){ printf('<h2 class="section-title">%s</h2>',$title); }?>

                <div class="contact-info row">

                <?php 

                $contact_shortcode = get_theme_mod('fitness_passion_landing_contact_form_shortcode');
                if(!empty($contact_shortcode)):
                    include_once( ABSPATH . 'wp-admin/includes/plugin.php' );
                    if(is_plugin_active( 'contact-form-7/wp-contact-form-7.php' )):?>
                <div class="contact-form col-md-6">
                   
                    <?php echo do_shortcode($contact_shortcode,true); ?>

                </div>
                <?php 
                endif; 
                    endif; ?>
                <div class="site-info col-md-6">

                    <?php if(!empty($address)):?>
                        <a href="http://maps.google.com/maps?q=<?php echo esc_html(urlencode($address)); ?>" target="_blank" ><span class="fa fa-map-marker"> <?php echo esc_html($address); ?></span></a>
                    <?php endif;?>
                    <?php if(!empty($phone)):?>
                        <a href="tel:<?php echo esc_html($phone); ?>" target="_blank"><span class="fa fa-phone"> <?php echo esc_html($phone); ?></span></a>
                    <?php endif;?>
                    <?php if(!empty($whatsapp)):?>
                        <a href="tel:<?php echo esc_html($whatsapp); ?>" target="_blank"><span class="fa fa-whatsapp"> <?php echo esc_html($whatsapp); ?></span></a>
                    <?php endif;?>
                    <?php if(!empty($email)):?>
						<a href="mailto:<?php echo esc_html($email); ?>" target="_blank"><span class="fa fa-envelope-o"> <?php echo esc_html($email); ?></span></a>
					<?php endif;?>

                </div>
                </div>
                
            </div>
            

        </section>

    <?php endif;?>