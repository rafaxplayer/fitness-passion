<?php
/**
 * The template for displaying archive pages
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

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<?php
				the_archive_title( '<h1 class="page-title">', '</h1>' );
				the_archive_description( '<div class="archive-description">', '</div>' );
				?>
			</header><!-- .page-header -->

			<section class="posts-content">

			<?php
			/* Start the Loop */
			while ( have_posts() ) :
					the_post();
				
				
				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content' );

			endwhile;?>

			</section>

			<?php

			if( !class_exists( 'Jetpack' ) || (class_exists( 'Jetpack' ) && !Jetpack::is_module_active( 'infinite-scroll' )) ) :
				the_posts_pagination(array(
					'mid_size'  => 5
				));
			endif;

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

		</main><!-- #main -->
		<?php get_sidebar(); ?>
	</div><!-- #primary -->

<?php

get_footer();
