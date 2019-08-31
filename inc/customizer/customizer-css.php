<?php 

/**
 * Customizer Display css
 *
 * @package fitness-passion
 */

if ( ! defined( 'ABSPATH' ) ) { exit; }

if(!function_exists('fitness_passion_custom_css')){

    function fitness_passion_custom_css(){

        $sidebar_option = get_theme_mod('fitness_passion_sidebar', 'sidebar' );
        $blog_layout_option = get_theme_mod('fitness_passion_blog_layout', 'one-column' );

        $customcss="";
        if( $sidebar_option ){
            if( $sidebar_option === 'nosidebar'){
                $customcss .= "
                    .site-main{
                        width:100%;
                    }
                    #secondary{
                        display:none;
                    }";
            }
        }
        if($blog_layout_option){
            if($blog_layout_option == "two-columns"){
                $customcss .= "
                    @media screen and (min-width: 37.5em){
                        .posts-content{
                            display:flex;
                            flex-wrap:wrap;
                        }
                        .posts-content .post{
                            flex:0 0 50%;
                            max-width: 50%;
                            padding-left: 10px;
                            padding-right: 10px;
                        }
                        .site-main .fp_breadcrumbs{
                            max-width:100%;
                            margin-left: 10px;
                            margin-right: 10px;
                        }

                    }";
            }
        }
        

    ?>
        <style id="fitness_passion_custom_css">

            <?php echo esc_html($customcss); ?>

        </style>
    <?php
    }
}
add_action( 'wp_head', 'fitness_passion_custom_css');
