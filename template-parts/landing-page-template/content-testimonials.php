<?php
/**
 * Template part for displaying services section on landing template
 *
*
 * @package fitness-passion
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

if( ! get_theme_mod('fitness_passion_landing_testimonials_show', false) ){ return; }?>

<section class="fit-landing-testimonials" style="background-image:url(<?php echo get_theme_mod('fitness_passion_landing_testimonials_back_image');?>">
  <div class="testimonials-wrap">
    <?php $test_count = get_theme_mod( 'fitness_passion_landing_testimonials_number', 5);
    $title = get_theme_mod('fitness_passion_landing_testimonials_title',__('Testimonials','fitness-passion'));?>
    
    <h2><?php echo esc_html($title); ?></h2>

    <div id="slider-test" class="cycle-slideshow"
        data-cycle-fx="scrollHorz"
        data-cycle-swipe=true
        data-cycle-timeout="4500"
        data-cycle-pause-on-hover="true"
        data-cycle-auto-height="calc"
        data-cycle-slides=">.slide-test">

        <div class = "cycle-prev"></div> 
        <div class = "cycle-next"></div>
    
        <?php for($i=1; $i<=$test_count; $i++) {

            $image = get_theme_mod('fitness_passion_landing_testimonial'.$i.'_avatar',get_stylesheet_directory_uri() .'/assets/images/testimonials.jpg');
            $name = get_theme_mod('fitness_passion_landing_testimonial'.$i.'_name');
            $desc = get_theme_mod('fitness_passion_landing_testimonial'.$i.'_desc');
            $text = get_theme_mod('fitness_passion_landing_testimonial'.$i.'_text');
            if( empty($name) || empty($text) ){ return; }
            ?>
            <div class="slide-test">
                <div class="testimonial-content">
                    <img src="<?php echo esc_url($image); ?>" alt="<?php echo esc_html($name); ?>">
                    <h3><?php echo esc_html($name); ?></h3>
                    <span><?php echo esc_html( $desc); ?></span>
                    <p><?php echo wp_trim_words($text,40); ?></p>
               
                </div>
            </div>  

            <?php } 
            ?>
        </div>
    </div>
</section>


    