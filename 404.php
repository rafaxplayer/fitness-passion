<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package fitnes-passion
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }
get_header();
?>

	<div id="primary" class="content-area row">
		<main id="main" class="site-main col-md-8">

			<section class="error-404 not-found">
				<header class="page-header">
					<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'fitness-passion' ); ?></h1>
				</header><!-- .page-header -->

				<div class="page-content">
					<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'fitness-passion' ); ?></p>

					<?php
					get_search_form();

					
					?>

					

					

				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</main><!-- #main -->
		<aside id="secondary" class="widget-area col-md-4">
		<?php
					/* translators: %1$s: smiley */
					$fitnes_passion_archive_content = '<p>' . sprintf( esc_html__( 'Try looking in the monthly archives. %1$s', 'fitness-passion' ), convert_smilies( ':)' ) ) . '</p>';
					the_widget( 'WP_Widget_Archives', 'dropdown=1', "after_title=</h2>$fitness_passion_archive_content" );
					the_widget( 'WP_Widget_Recent_Posts' );?>
					<div class="widget widget_categories">
						<h2 class="widget-title"><?php esc_html_e( 'Most Used Categories', 'fitness-passion' ); ?></h2>
						<ul>
							<?php
							wp_list_categories( array(
								'orderby'    => 'count',
								'order'      => 'DESC',
								'show_count' => 1,
								'title_li'   => '',
								'number'     => 10,
							) );
							?>
						</ul>
					</div><!-- .widget -->
					<?php the_widget( 'WP_Widget_Tag_Cloud' );
					?>
		</aside><!-- #secondary -->
		
	</div><!-- #primary -->

<?php
get_footer();