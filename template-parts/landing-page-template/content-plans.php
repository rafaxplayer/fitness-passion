<?php
/**
 * Template part for displaying pricing plans section on landing template
 *
 *
 * @package fitnes-passion
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

if( !get_theme_mod('fitness_passion_landing_plans_show', false) ){ return; }

if( !function_exists('fitness_passion_planning_shortcode')){

    fitness_passion_box_message( esc_html__('To show this content it is necessary to install or active the "Fitness Passion Short Codes" plugin.','fitness-passion'));
    return;
}

$section_title = get_theme_mod('fitness_passion_landing_plans_title',__('Prices plan','fitness-passion'));
$plan1 = get_theme_mod('fitness_passion_landing_plans_shortcode1','');
$plan2 = get_theme_mod('fitness_passion_landing_plans_shortcode2','');
$plan3 = get_theme_mod('fitness_passion_landing_plans_shortcode3','');
?>

<section class="fp-landing-plans" style="background-image:url(<?php echo esc_url(get_theme_mod('fitness_passion_landing_plans_back_image'));?>);">
    <div class="plans-wrap">
        <?php if(!empty($section_title)){ printf('<h2 class="section-title">%s</h2>',esc_html($section_title)); }?>
        <div class="plans-shortcodes">
            <?php if(!empty($plan1)){ echo do_shortcode($plan1); }?>
            <?php if(!empty($plan2)){ echo do_shortcode($plan2); }?>
            <?php if(!empty($plan3)){ echo do_shortcode($plan3); }?>
        </div>
    </div>     
</section>