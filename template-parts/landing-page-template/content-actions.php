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

?>

<section class="fp-landing-action">

    <?php if($action_id === 0){

        prinf( __('Select Page for Action Section %s','fitness-passion'),$i); 
       
    }else{
        $page = get_post($action_id);
        $image = wp_get_attachment_image_url( get_post_thumbnail_id($action_id),'custom-size' ); 
        $thumbnail_id = get_post_thumbnail_id( $action_id );
        $permalink = esc_url(get_permalink($action_id));
        $alt = esc_attr(get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true)); 
        $morebtn = esc_html( get_theme_mod('fitness_passion_landing_action'.$i.'_morebtn',""));?>
        <div class="landing-action">
            <a href="<?php echo esc_url( $permalink );?>" ><img src="<?php echo $image; ?>" alt="<?php echo $alt; ?>" data-aos="fade-right" data-aos-duration="600" data-aos-once="true"></a>
            <div class="fp-action-content" data-aos="fade-left" data-aos-duration="600">
                <h2><?php echo esc_html(get_the_title( $action_id ));?></h2>
                <p><?php echo wp_kses_post($page->post_excerpt); ?></p>
                <?php if(!empty($morebtn)){?>
                    <a href="<?php echo $permalink;?>" class="button"><?php echo $morebtn;?></a>

                <?php } ?>
            </div>
        </div>
    <?php } ?>
</section>

<?php endif;
}

