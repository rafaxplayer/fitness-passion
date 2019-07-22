<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package fitness-passion
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

get_header();
?>

	<section id="primary" class="content-area row">
		<main id="main" class="site-main col-md-8">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<h1 class="page-title">
					<?php
					/* translators: %s: search query. */
					printf( esc_html__( 'Search Results for: %s', 'fitness-passion' ), '<span>' . get_search_query() . '</span>' );
					?>
				</h1>
			</header><!-- .page-header -->

			<section class="posts-content">
			
			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
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
	</section><!-- #primary -->

<?php
 
get_footer();
