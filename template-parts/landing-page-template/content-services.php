<?php
/**
 * Template part for displaying services section on landing template
 *
*
 * @package fitness-passion
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

if( !get_theme_mod('fitness_passion_landing_services_show', false) ){ return; }

$services_arr=array();
	for($i=1; $i<=3; $i++) {
       
	  if( get_theme_mod('fitness_passion_landing_service_'.$i, false) != 0) {

	    $services_arr[] = absint( get_theme_mod('fitness_passion_landing_service_'.$i, true));
	  }
    }
   ?>
<section class="fit-landing-services">

    <?php 
     if(empty($services_arr)){
        echo _e('Select Pages for services Section','fitness-passion'); 
        return;
    }
    $d=5;
        $servicesquery = new WP_Query( array( 'post_type' => 'page', 'post__in' => $services_arr, 'orderby' => 'post__in' ) );
        while( $servicesquery->have_posts() ) : $servicesquery->the_post();
            $image = wp_get_attachment_image_url( get_post_thumbnail_id($post->ID),'large'); 
            $thumbnail_id = get_post_thumbnail_id( $post->ID );
            $permalink = get_permalink($post->ID);
            $alt = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true); 
                       
            ?>
            <div class="landing-service" data-aos="zoom-in" data-aos-duration="1000" data-aos-once="true" data-aos-delay="<?php echo $d ?>00">
                
                <img src="<?php echo esc_url($image); ?>" alt="<?php echo esc_attr($alt); ?>">
                
                <div class="landing-service-content">
                    <div class="overlap"></div>
                    <a href="<?php echo esc_url($permalink); ?>"><h3><?php the_title(); ?></h3></a>
                </div>
            </div>
            <?php $d=$d+4;
        endwhile;
        wp_reset_postdata(); ?>
    

</section>