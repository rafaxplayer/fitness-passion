<?php
/**
 * Custom template hooks for this theme
 *
 * @package fitnes-passion
 */
if ( !defined( 'ABSPATH' ) ) { exit; }

if(! function_exists('fitness_passion_header_content')):

    function fitness_passion_header_content(){

        if(is_woocommerce_activated()){

            if(is_woocommerce() && is_shop()){
    
                echo '<h1 class="fp_header_title" data-aos="fade-up" data-aos-duration="600" data-aos-once="true">'.woocommerce_page_title(false).'</h1>';
                return;
            }
        } 
        

        $text = "";
        $subtext ="";
        if(is_front_page() || (is_front_page() && is_home())){

            $text = fitness_passion_add_span_last_word(get_theme_mod('fitness_passion_front_page_header_title', 'fitness Passion'));
            $subtext = get_theme_mod('fitness_passion_front_page_header_subtitle', 'Subtitle text');
            $buttonText = get_theme_mod('fitness_passion_front_page_header_button');
            $buttonLink = get_theme_mod('fitness_passion_front_page_header_button_link','#');
        
        }
        else if(is_home() && ! is_front_page()){

            $text = get_theme_mod('fitness_passion_blog_page_header_title', 'Blog');

        }else{

            the_title('<h1 class="fp_header_title" data-aos="fade-up" data-aos-duration="600" data-aos-once="true">','</h1>');
            return;

        }?>
        <h2 class="fp_header_title" data-aos="fade-up" data-aos-duration="600" data-aos-once="true"><?php echo wp_kses_post($text); ?></h2>
        <p class="fp_header_subtitle" data-aos="fade-up" data-aos-duration="600" data-aos-once="true"><?php echo esc_html($subtext); ?></p>
        <?php  

            if($buttonText || !empty($buttonText)){ ?>

                <a href="<?php echo esc_url($buttonLink); ?>" class="fp_header_button" data-aos="fade-up" data-aos-duration="800" data-aos-once="true"><?php echo esc_html($buttonText); ?></a>
        
        <?php }

    }

endif;

add_action('fitness_passion_header', 'fitness_passion_header_content');


if( !function_exists('fitness_passion_breadcrumbs')):

    function fitness_passion_breadcrumbs($show){
        
        if( $show ):
            
            $separator = ' / ';
            $blogname = get_option( 'page_for_posts' )==0 ? 'Blog': get_the_title(get_option( 'page_for_posts' ));
            $bloglink = get_option( 'page_for_posts' )==0 ? esc_url(home_url( '/' ))  : esc_url(get_permalink( get_option( 'page_for_posts' )));
            
            /* si es una pagina de woocommerce*/
            if(is_woocommerce_activated()){

                if(is_woocommerce()){
                    $blogname = woocommerce_page_title(false);
                    $bloglink = is_shop() ? wc_get_page_id('shop') : get_the_ID();
                    
                }
            }

            echo '<div class="fp_breadcrumbs" data-aos="fade-up" data-aos-duration="600" data-aos-once="true">';
            printf('<a href="%1$s" >%2$s</a>%3$s',esc_url(home_url()), esc_html(get_bloginfo('name')), $separator);
            if (!is_home()){
                                
                /* no es el blog index.php*/
                if (is_category() || is_single() ) {

                    /* Es category.php o es single.php por lo tanto estan dentro del blog */
                    $categories = get_the_category('');
                    
                    printf('<a href="%1$s">%2$s</a>%3$s',esc_url($bloglink),esc_html($blogname),$separator);
                    printf('<a href="%1$s" >%2$s</a>',esc_url(get_category_link($categories[0]->term_id)),esc_html($categories[0]->cat_name));
                    
                    if (is_single()) {
                        
                        /* Es solo single.php , imprimimos el titulo del post y el separador*/
                        the_title($separator,'');
                    }
                } elseif (is_page()) {
                    if(is_woocommerce_activated()){
                        /* si es una pagina de woocommerce carrito , pago o cuenta*/
                        if(is_cart() || is_checkout() || is_account_page()){
                            $blogname = woocommerce_page_title(false);
                            $bloglink = is_shop() ? wc_get_page_id('shop') : get_the_ID();
                            printf('<a href="%1$s">%2$s</a>%3$s',esc_url($bloglink),esc_html($blogname),$separator);     
                        }
                    }
                    /* Es page.php , imprimimos el nombre de la pagina*/
                    the_title('</h1>','</h1>');
                }
            }else{
                                
                printf('<a href="%1$s" >%2$s</a>',esc_url($bloglink),esc_html($blogname));
            }
            echo '</div>';
        endif;
    }

endif;

 
add_action('fitness_passion_show_breadcrumbs', 'fitness_passion_breadcrumbs');

if(!function_exists('fitness_passion_social_links')):

    function fitness_passion_social_links(){
        ?>
            <div class="social_icons">
                <?php 
                $facebook = get_theme_mod('fitness_passion_facebook');
                $twitter = get_theme_mod('fitness_passion_twitter');
                $instagram = get_theme_mod('fitness_passion_instagram');
                $youtube = get_theme_mod('fitness_passion_youtube');
                if(!empty($facebook)):?>
                    <a href="<?php echo esc_url($facebook); ?>"><i class="fa fa-facebook"></i></a>
                <?php endif;
                if(!empty($twitter)):?>
                    <a href="<?php echo esc_url($twitter); ?>"><i class="fa fa-twitter"></i></a>
                <?php endif;
                if(!empty($instagram)):?>
                    <a href="<?php echo esc_url($instagram); ?>"><i class="fa fa-instagram"></i></a>
                <?php endif;
                if(!empty($youtube)):?>
                    <a href="<?php echo esc_url($youtube); ?>"><i class="fa fa-youtube"></i></a>
                <?php endif;?>
            </div>
        <?php

    }

endif;

add_action('fitness_passion_social_icons','fitness_passion_social_links');


 if(!function_exists('fitness_passion_related_post')):

    function fitness_passion_related_post($type='related'){
        
        // Get a list of the current post's categories
        global $post;
        $categories = get_the_category( $post->ID );
        $catidlist = '';
        foreach( $categories as $category) {
            $catidlist .= $category->cat_ID . ",";
        }

        // Build our category based custom query arguments
        $custom_query_args = array( 
            'posts_per_page' => 3, // Number of related posts to display
            'post__not_in' => array($post->ID), // Ensure that the current post is not displayed
            'orderby' => 'rand', // Randomize the results
            'cat' => $catidlist, // Select posts in the same categories as the current post
        );

        if($type == 'latest'){
             // Build our category based custom query arguments
            $custom_query_args = array( 
                'posts_per_page' => 6, // Number of related posts to display
                'post_type' => 'post',
                
            );
        }
        
        // Initiate the custom query
        $custom_query = new WP_Query( $custom_query_args );

        ?>
        <div class="fp_related_posts row">
           
        <?php
        // Run the loop and output data for the results
        if ( $custom_query->have_posts() ) : ?>
        <?php while ( $custom_query->have_posts() ) : $custom_query->the_post(); ?>
                       
            <div class="fp_related_post col-md-4 col-sm-6 col-12" style="background-image:url(<?php the_post_thumbnail_url( 'medium' ); ?>);" data-aos="fade-up" data-aos-duration="600" data-aos-once="true">
                <a href="<?php the_permalink(); ?>"> 
                    <div class="related_post_info">
                        <?php the_title('<h3>','</h3>'); ?>
                        <p><?php if ( empty( get_the_excerpt())) : 
            	                    echo wp_kses_post( wp_trim_words( get_the_content(), 20 )); 
        	                    else : 
            	                    echo wp_kses_post( wp_trim_words(get_the_excerpt(),20) ); 
         	                    endif; ?></p>
                    </div>
                </a>
            </div>
      
        
        <?php endwhile; ?>
        <?php else : ?>
            <p><?php _e('Sorry, no related articles to display.','fitness-passion'); ?></p>
        <?php endif;
        // Reset postdata
        wp_reset_postdata();?>
        </div><?php
    }

endif;

add_action('fitness_passion_show_related_post','fitness_passion_related_post');

?>