<?php
/**
 * Template part for displaying pricing plans section on landing template
 *
 *
 * @package fitnes-passion
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

if( !get_theme_mod('fitness_passion_landing_plans_show', false) ){ return; }

$title = get_theme_mod('fitness_passion_landing_plans_title',__('Prices plan','fitness-passion'));
$plan1 = get_theme_mod('fitness_passion_landing_plans_shortcode1','');
$plan2 = get_theme_mod('fitness_passion_landing_plans_shortcode2','');
$plan3 = get_theme_mod('fitness_passion_landing_plans_shortcode3','');
?>

<section class="fp-landing-plans" style="background-image:url(<?php echo esc_url(get_theme_mod('fitness_passion_landing_plans_back_image'));?>);">
    <div class="plans-wrap">
        <?php if(!empty($title)){ printf('<h2 class="section-title">%s</h2>',$title); }?>
        <div class="plans-shortcodes">
            <?php if(!empty($plan1)){ echo do_shortcode($plan1); }?>
            <?php if(!empty($plan2)){ echo do_shortcode($plan2); }?>
            <?php if(!empty($plan3)){ echo do_shortcode($plan3); }?>
        </div>
    </div>     
   


</section>