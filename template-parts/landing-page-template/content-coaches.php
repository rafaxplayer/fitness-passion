<?php
/**
 * Template part for displaying coachs section on landing template
 *
*
 * @package fitness-passion
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

if( get_theme_mod('fitness_passion_landing_coaches_show', false) ): ?>

    <section class="fit-landing-coaches" style="background-image:url(<?php echo get_theme_mod('fitness_passion_landing_coaches_back_image');?>">
    <div class="coaches-wrap">
    <?php $title = get_theme_mod('fitness_passion_landing_coaches_title',__('Our Coaches','fitness-passion'));

        if(!empty($title)){
            printf('<h2>%s</h2>',$title);
        }?>
        <div class="coaches-content">
        <?php
            $numCouches = get_theme_mod('fitness_passion_landing_coaches_number',3);

            for($i=1; $i<=$numCouches; $i++){
            
                $coachimage = get_theme_mod('fitness_passion_landing_coach'.$i.'_image',get_stylesheet_directory_uri() .'/assets/images/coach.jpg');
                $coachname = get_theme_mod('fitness_passion_landing_coach'.$i.'_name');
                $coachdesc = get_theme_mod('fitness_passion_landing_coach'.$i.'_desc');
                $coachfacebook = get_theme_mod('fitness_passion_landing_coach'.$i.'_facebook');
                $coachtwitter = get_theme_mod('fitness_passion_landing_coach'.$i.'_twitter');
                $coachemail = get_theme_mod('fitness_passion_landing_coach'.$i.'_mail');
            
                if(!empty($coachname)){?>
                    <div class="landing-coach" style="background-image:url(<?php echo esc_url($coachimage); ?>)" data-aos="fade-up" data-aos-duration="600" data-aos-once="true">
                        <div class="coach-wrap">
                            <div class="landing-coach-info">
                            <h4><?php echo esc_html($coachname); ?></h4>
                            <p><?php echo esc_html($coachdesc); ?></p>
                            </div>
                        
                            <div class="landing-coach-social">
                                <a href="<?php echo esc_url($coachfacebook); ?>"><i class="fa fa-facebook"></i></a>
                                <a href="<?php echo esc_url($coachtwitter); ?>"><i class="fa fa-twitter"></i></a>
                                <a href="<?php echo esc_html($coachemail); ?>"><i class="fa fa-envelope"></i></a>
                            </div>
                        </div>
                        
                    </div>

                <?php }
            } ?>
        </div>
        </div>
    </section>

<?php endif;