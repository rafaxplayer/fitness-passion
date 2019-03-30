<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package fitness-passion
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('row'); ?> data-aos="fade-up" data-aos-duration="800" data-aos-once="true">

	<?php fitnes_passion_post_thumbnail(); ?>
			
		<header class="entry-header">
			
			<?php
			
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
			
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
			
			if ( empty( $post->post_excerpt ) ) : 
            	echo wp_kses_post( wp_trim_words( $post->post_content, 20 ) ); 
        	else : 
            	echo wp_kses_post( $post->post_excerpt ); 
         	endif; 

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
