<?php
/**
 * Template part for displaying contact section on landing template
 *
*
 * @package fitnes-passion
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

    if( get_theme_mod('fitness_passion_landing_contact_show', false) ): 

        $section_title = get_theme_mod('fitness_passion_landing_contact_title',__('Contact Us','fitness-passion'));
        $phone = get_theme_mod('fitness_passion_phone', '');
		$whatsapp = get_theme_mod('fitness_passion_whatsapp', '');
		$address = get_theme_mod('fitness_passion_address', '');
		$email = get_theme_mod('fitness_passion_email', '');?>
        
        <section class="fp-landing-contact" style="background-image:url(<?php echo esc_url(get_theme_mod('fitness_passion_landing_contact_back_image'));?>);">
            <div class="contact-wrap">

                <?php if(!empty($section_title)){ printf('<h2 class="section-title">%s</h2>',esc_html($section_title)); }?>

                <div class="contact-info">

                    <?php 

                    $contact_shortcode = get_theme_mod('fitness_passion_landing_contact_form_shortcode');
                    if(!empty($contact_shortcode)):
                        include_once( ABSPATH . 'wp-admin/includes/plugin.php' );
                        if(is_plugin_active( 'contact-form-7/wp-contact-form-7.php' )):?>
                            <div class="contact-form">
                            
                                <?php echo do_shortcode($contact_shortcode,true); ?>

                            </div>
                    <?php 
                    endif; 
                        endif; 
                        if( !empty($phone) || !empty($phone) || !empty($whatsapp) || !empty($email)): ?>
                    <div class="site-info-contact">

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
                    <?php endif; ?>
                </div>
            </div>
            

        </section>

    <?php endif;?>