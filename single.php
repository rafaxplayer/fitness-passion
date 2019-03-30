<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package fitness-passion
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

get_header();
?>

	<div id="primary" class="content-area row">
		<main id="main" class="site-main col-md-8">
		<?php do_action('fitnes_passion_show_breadcrumbs',get_theme_mod('fitnes_passion_breadcrumbs_content',true)); 
		
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content','single' );
			
			the_post_navigation( array(
				'prev_text'                  => __( ' &larr; %title','fitness-passion' ),
				'next_text'                  => __( ' %title &rarr;','fitness-passion' ),
				'screen_reader_text' => __( 'Continue Reading','fitness-passion' ),
			) );
			
			if(get_theme_mod('fitnes_passion_related_post',true)){?>
				<h2><?php echo esc_html('Related Posts','fitness-passion');?></h2>
				<?php do_action('fitnes_passion_show_related_post');
			}

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
		<?php get_sidebar(); ?>
	</div><!-- #primary -->

<?php

get_footer();
