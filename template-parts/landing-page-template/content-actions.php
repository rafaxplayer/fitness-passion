<?php
/**
 * Template part for displaying action section on landing template
 *
*
 * @package fitness-passion
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

for($i=1;$i<=3;$i++){

if( get_theme_mod('fitness_passion_landing_action'.$i.'_show', false) ):

$action_id = absint( get_theme_mod('fitness_passion_landing_page_action'.$i));

    if($action_id === 0){
 
        fitness_passion_box_message( sprintf(esc_html__('Select Page For Action Section %1$s ','fitness-passion'), $i));
          
    }else{

        $cur_page = get_post($action_id);
        $image = wp_get_attachment_image_url( get_post_thumbnail_id($action_id),'fitness_passion_custom_size' ); 
        $thumbnail_id = get_post_thumbnail_id( $action_id );
        $permalink = get_permalink($action_id);
        $alt = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true); 
        $morebtn = get_theme_mod('fitness_passion_landing_action'.$i.'_morebtn',"");?>
        
        <section id="fp-landing-action<?php echo $i; ?>" class="fp-landing-action">
            <div class="landing-action">
                <a href="<?php echo esc_url( $permalink );?>" ><img src="<?php echo esc_url($image); ?>" alt="<?php echo esc_attr($alt); ?>" data-aos="fade-right" data-aos-duration="600" data-aos-once="true"></a>
                <div class="fp-action-content" data-aos="fade-left" data-aos-duration="600">
                    <h2><?php echo esc_html(get_the_title( $action_id ));?></h2>
                    <p><?php echo wp_kses_post($cur_page->post_excerpt); ?></p>
                    <?php if(!empty($morebtn)){?>
                        <a href="<?php echo esc_url($permalink);?>" class="button"><?php echo esc_html($morebtn);?></a>

                    <?php } ?>
                </div>
            </div>
        </section>
    <?php } ?>
<?php endif;
}

