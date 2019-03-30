<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package fitness-passion
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

get_header();
?>

	<div id="primary" class="content-area row">
		<main id="main" class="site-main col-md-8">
		<?php do_action('fitnes_passion_show_breadcrumbs',get_theme_mod('fitness_passion_breadcrumbs_content',true)); ?>
		<?php
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) :
				?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
				<?php
			endif;

			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content');

			endwhile;

			the_posts_pagination(array(
				'mid_size'  => 5
			));

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

		</main><!-- #main -->
		<?php get_sidebar(); ?>
	</div><!-- #primary -->
	
<?php

get_footer();
