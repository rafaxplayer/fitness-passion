<?php
/**
 * Template part for displaying posts single
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package fitness-passion
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('row'); ?>>
		
		<header class="entry-header">
			
			<?php
			
			the_title( '<h1 class="entry-title">', '</h1>' );
			

			if ( 'post' === get_post_type() ) :
				?>
				<div class="entry-meta">
					<?php
					fitnes_passion_posted_on();
					fitnes_passion_posted_by();
					?>
				</div><!-- .entry-meta -->
			<?php endif; ?>
		</header><!-- .entry-header -->

		<div class="entry-content">
			<?php
			the_content();

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'fitness-passion' ),
				'after'  => '</div>',
			) );
			?>
		</div><!-- .entry-content -->

		<footer class="entry-footer">
			<?php fitnes_passion_entry_footer(); ?>
		</footer><!-- .entry-footer -->
	
</article><!-- #post-<?php the_ID(); ?> -->
