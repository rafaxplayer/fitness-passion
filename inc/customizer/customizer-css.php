<?php 

/**
 * Customizer Display css
 *
 * @package fitness-passion
 */

if ( ! defined( 'ABSPATH' ) ) { exit; }

if(!function_exists('fitness_passion_custom_css')){

    function fitness_passion_custom_css(){
    ?>
        <style id="fitness_passion_custom_css">

            <?php fitness_passion_blog_sidebar_css(); ?>

            
        </style>
    <?php
    }
}
add_action( 'wp_head', 'fitness_passion_custom_css');

if(! function_exists('fitness_passion_blog_sidebar_css')):

     function fitness_passion_blog_sidebar_css(){

        $option_layout = get_theme_mod('fitness_passion_sidebar', 'sidebar' );
                
        if( $option_layout === 'nosidebar'){

            ?>
            .site-main{
                width:100%;
            }
            #secondary{
                display:none;
            }
            
        <?php
        }
    
    } 

endif;