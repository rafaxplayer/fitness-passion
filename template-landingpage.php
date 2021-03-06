<?php
/**
 * Template Name: Landing Page
 * 
 * @package fitness-passion
 */

if ( ! defined( 'ABSPATH' ) ) { exit; }

get_header();
?>

	<div id="primary" class="content-area full">
		<main id="main" class="site-main">
			<?php 			
				get_template_part('template-parts/landing-page-template/content-services'); 

				if(get_theme_mod('fitness_passion_landing_content_page_show',true)){

					while ( have_posts() ) : the_post();
			
						get_template_part( 'template-parts/content', 'page' );
			
					endwhile; // End of the loop.
				}

				get_template_part('template-parts/landing-page-template/content-actions');
				get_template_part('template-parts/landing-page-template/content-coaches');
				get_template_part('template-parts/landing-page-template/content-testimonials');
				
				if(get_theme_mod('fitness_passion_landing_latest_posts_show',false)){

					$titleLasPosts = get_theme_mod('fitness_passion_landing_latest_posts_title',__('Latest posts','fitness-passion'));
					?>
					<section class="fp-landing-last-posts" style="background-image:url(<?php echo esc_url(get_theme_mod('fitness_passion_landing_latest_posts_back_image')); ?>);">
						<div class="lastes-posts-wrap">

							<?php if(!empty($titleLasPosts)){ printf('<h2 class="section-title">%s</h2>',esc_html($titleLasPosts)); } ?>
							
							<?php do_action('fitness_passion_show_related_post','latest');?>

							<div class="more-wrap">
								<a class="button" href="<?php echo esc_url(get_permalink( get_option( 'page_for_posts' ) ));?>"><?php esc_html_e('More Posts','fitness-passion'); ?></a>
							</div>
							
						</div>
						
					</section>
				<?php }
				get_template_part('template-parts/landing-page-template/content-plans');
				get_template_part('template-parts/landing-page-template/content-contact');
			?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();