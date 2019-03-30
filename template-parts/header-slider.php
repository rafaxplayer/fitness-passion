<?php
/**
 * Template part for header slider
 *
 *
 * @package fitness-passion
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }
    $slider_Arr=array();
	for($i=1; $i<=4; $i++) {
       
	  if( get_theme_mod('fitness_passion_slider_page_'.$i,false) != 0) {
		$slider_Arr[] = absint( get_theme_mod('fitness_passion_slider_page_'.$i));
	  }
    }
    if(empty($slider_Arr)){
        
        return;
    }?>
   
    <div id="slider" class="cycle-slideshow"  
        data-cycle-timeout="4000"
        data-cycle-swipe=true
        data-cycle-pause-on-hover="true"
        data-cycle-slides=">.slide">
        <div class = "cycle-prev"> </div> 
        <div class = "cycle-next"> </div>
        <?php
        $i=1;
        $slidequery = new WP_Query( array( 'post_type' => 'page', 'post__in' => $slider_Arr, 'orderby' => 'post__in' ) );
        while( $slidequery->have_posts() ) : $slidequery->the_post();
            $image = wp_get_attachment_url( get_post_thumbnail_id($post->ID)); 
            $thumbnail_id = get_post_thumbnail_id( $post->ID );
            $permalink = get_permalink($post->ID);
            $alt = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true); 
            $morebtn = get_theme_mod('fitness_passion_slide_morebtn',"");
            if(empty($image)): 
                $image = get_template_directory_uri()."/assets/images/header_default.jpg";
            endif;
            ?>
            <div class="slide" style="background-image:url(<?php echo esc_url($image); ?> );">
                <div class="slide-wrap">
                    <div class="slide-content animated">
                        <h3><?php the_title(); ?></h3>
                        <?php the_excerpt(); 
                        if(!empty($morebtn)):?>
                            <a href="<?php echo esc_url($permalink); ?>" class="button"><?php echo esc_html($morebtn); ?></a>
                        <?php endif;?>
                    </div>
                </div>        
            </div>
            <?php $i++;
        endwhile;
        wp_reset_postdata(); ?>
                
    </div> 
    
    