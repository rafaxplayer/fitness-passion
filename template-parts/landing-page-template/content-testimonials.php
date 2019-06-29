<?php
/**
 * Template part for displaying services section on landing template
 *
*
 * @package fitness-passion
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

if( ! get_theme_mod('fitness_passion_landing_testimonials_show', false) ){ return; }?>

<section class="fp-landing-testimonials" style="background-image:url(<?php echo esc_url(get_theme_mod('fitness_passion_landing_testimonials_back_image')); ?>);">
    <div class="testimonials-wrap">
        <?php 
        $title = get_theme_mod('fitness_passion_landing_testimonials_title',__('Testimonials','fitness-passion'));
        
        if(!empty($title)){
            printf('<h2 class="section-title">%s</h2>',$title);
        }?>

        <div id="slider-test" class="cycle-slideshow"
            data-cycle-fx="scrollHorz"
            data-cycle-swipe=true
            data-cycle-timeout="6000"
            data-cycle-pause-on-hover="true"
            data-cycle-auto-height="calc"
            data-cycle-slides=">.slide-test">

            <div class = "cycle-prev"></div> 
            <div class = "cycle-next"></div>
        
        <?php 

        $r = new WP_Query( apply_filters( 'testimonials_posts_args', array(
            'no_found_rows'       => true,
            'post_status'         => 'publish',
            'category_name' => get_theme_mod('fitness_passion_landing_testimonial_category', 'testimonials')
        ) ) );

        while ( $r->have_posts() ) : $r->the_post(); 

                $image = has_post_thumbnail() ? get_the_post_thumbnail_url(): get_stylesheet_directory_uri() .'/assets/images/testimonials.jpg';
                $name = get_the_title();
                $permalink = get_the_permalink();
                $desc = 'User';
                $text = get_the_content();

                if( !empty($name) && !empty($text) ):  ?>

                <div class="slide-test">
                    <div class="testimonial-content">
                    
                        <div class="author">
                            <div class="author-info">
                                <h3><?php echo esc_html($name); ?></h3>
                                <!-- <span><?php echo esc_html( $desc); ?></span> -->
                            </div>
                            <a href="<?php echo esc_url($permalink); ?>">
                                <img src="<?php echo esc_url($image); ?>" alt="<?php echo esc_attr($name); ?>">
                            </a>
                        </div>
                        
                        <p><?php echo sanitize_text_field($text); ?></p>
                    
                    </div>
                </div> 
        <?php endif; 

        endwhile;?>
        </div>
    </div>
</section>


    