<?php
/**
 * Template part for displaying services section on landing template
 *
 * @package fitness-passion
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

if( get_theme_mod('fitness_passion_landing_services_show', false) === false){ return; } ?>

<section class="fp-landing-services">

    <?php 
    $d=5;
    for($i=1; $i<=3; $i++) {?>
        <div class="landing-service" data-aos="zoom-in" data-aos-duration="1000" data-aos-once="true" data-aos-delay="<?php echo absint($d) ?>00">
            <?php
            $service_id = absint( get_theme_mod('fitness_passion_landing_page_service_'.$i));

            if($service_id === 0):

                fitness_passion_box_message( sprintf(esc_html__('Select Page For Service %1$s ','fitness-passion'), $i));
                
            else:

                $image = wp_get_attachment_image_url( get_post_thumbnail_id($service_id),'fitness_passion_custom_size'); 
                $thumbnail_id = get_post_thumbnail_id( $service_id );
                $permalink = get_permalink($service_id);
                $alt = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true); ?>
                
                <img src="<?php echo esc_url($image); ?>" alt="<?php echo esc_attr($alt); ?>">
                
                <div class="landing-service-content">
                    <div class="overlap"></div>
                    <a href="<?php echo esc_url($permalink); ?>"><h3><?php echo esc_html(get_the_title($service_id)); ?></h3></a>
                </div>
            <?php endif;?>
        </div>
        <?php $d= $d + 4;
    } ?>
</section>