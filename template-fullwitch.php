<?php
/**
 * Template Name: Page Full Witch (No Sidebar)
 * @package fitness-passion
 */

if ( ! defined( 'ABSPATH' ) ) { exit; }

get_header();
?>

	<div id="primary" class="content-area full">
		<main id="main" class="site-main">
		<?php do_action('fitnes_passion_show_breadcrumbs',get_theme_mod('fitnes_passion_breadcrumbs_content',true)); ?>
		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();
