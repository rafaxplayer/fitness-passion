<?php
/**
 * Template part for displaying coachs section on landing template
 *
*
 * @package fitness-passion
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

if( get_theme_mod('fitness_passion_landing_coaches_show', false) ): ?>

    <section class="fp-landing-coaches" style="background-image:url(<?php echo esc_url(get_theme_mod('fitness_passion_landing_coaches_back_image'));?>);">
    <div class="coaches-wrap">
    <?php $section_title = get_theme_mod('fitness_passion_landing_coaches_title',__('Our Coaches','fitness-passion'));

        if(!empty($section_title)){
            printf('<h2 class="section-title">%s</h2>',esc_html($section_title));
        }?>
        <div class="coaches-content">
        <?php
            $numCouches = get_theme_mod('fitness_passion_landing_coaches_number',3);

            for($i=1; $i<=$numCouches; $i++){

                $coach_id = absint( get_theme_mod('fitness_passion_landing_coach'.$i.'_page'));

                if($coach_id === 0){

                    fitness_passion_box_message(sprintf(esc_html__('Select Page for coach %d','fitness-passion'), absint($i)));
                                        
                }else{

                    $cur_page = get_post($coach_id);
                    $coach_image = wp_get_attachment_image_url( get_post_thumbnail_id($coach_id),'fitness_passion_custom_size' ); 
                    $coach_permalink = get_permalink($coach_id);
                    
                    $coach_image = $coach_image ? $coach_image : get_stylesheet_directory_uri() .'/assets/images/coach.jpg';
                    $coach_name = get_the_title( $coach_id );
                    $coach_desc = $cur_page->post_excerpt;
                    $coach_facebook = get_theme_mod('fitness_passion_landing_coach'.$i.'_facebook');
                    $coach_twitter = get_theme_mod('fitness_passion_landing_coach'.$i.'_twitter');
                    $coach_email = get_theme_mod('fitness_passion_landing_coach'.$i.'_email');
            
                    if(!empty($coach_name)){?>
                        <div class="landing-coach" style="background-image:url(<?php echo esc_url($coach_image); ?>)" data-aos="fade-up" data-aos-duration="600" data-aos-once="true">
                            
                                <div class="coach-wrap">
                                <a href="<?php echo esc_url( $coach_permalink ); ?>">
                                    <div class="landing-coach-info">
                                        <h4><?php echo esc_html( $coach_name ); ?></h4>
                                        <p><?php echo esc_html( $coach_desc ); ?></p>
                                    </div>
                                    </a>
                                    <div class="landing-coach-social">
                                        <?php if($coach_facebook): ?>
                                            <a href="<?php echo esc_url( $coach_facebook ); ?>"><i class="fa fa-facebook"></i></a>
                                        <?php endif; ?>
                                        <?php if($coach_twitter): ?>
                                            <a href="<?php echo esc_url( $coach_twitter ); ?>"><i class="fa fa-twitter"></i></a>
                                        <?php endif; ?>
                                        <?php if($coach_email): ?>
                                            <a href="<?php echo esc_html( $coach_email ); ?>"><i class="fa fa-envelope"></i></a>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            
                        </div>

                    <?php }
                }
            } ?>
        </div>
        </div>
    </section>

<?php endif;