<?php
/**
 * Template part for displaying contact section on landing template
 *
*
 * @package fitnes-passion
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

    if( get_theme_mod('fitnes_passion_landing_contact_show', false) ): 

        $title = get_theme_mod('fitness_passion_landing_contact_title',__('Contact us','fitness-passion'));
    ?>
        <section class="fit-landing-contact">
            <div class="contcat-wrap">

                <?php if(!empty($title)){ printf('<h2 class="section-title">%s</h2>',$title); }?>

                <div class="contact-info row">
                <div class="col-md-6">


                </div>
                <div class="col-md-6">

                    <?php if(!empty($address)):?>
                        <a href="http://maps.google.com/maps?q=<?php echo esc_html(urlencode($address)); ?>" target="_blank" ><span class="fa fa-map-marker"> <?php echo esc_html($address); ?></span></a>
                    <?php endif;?>
                    <?php if(!empty($phone)):?>
                        <a href="tel:<?php echo esc_html($phone); ?>" target="_blank"><span class="fa fa-phone"> <?php echo esc_html($phone); ?></span></a>
                    <?php endif;?>
                    <?php if(!empty($whatsapp)):?>
                        <a href="tel:<?php echo esc_html($whatsapp); ?>" target="_blank"><span class="fa fa-whatsapp"> <?php echo esc_html($whatsapp); ?></span></a>
                    <?php endif;?>

                </div>
                </div>
                
            </div>
            

        </section>

    <?php endif;?>