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

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> data-aos="fade-up" data-aos-duration="800" data-aos-once="true">
	<div class="post-wrap">

	<?php fitness_passion_post_thumbnail(); ?>
			
		<header class="entry-header">
			
			<?php
			
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
			
			if ( 'post' === get_post_type() ) :
				?>
				<div class="entry-meta">
					<?php
					fitness_passion_posted_on();
					fitness_passion_posted_by();
					?>
				</div><!-- .entry-meta -->
			<?php endif; ?>
		</header><!-- .entry-header -->

		<div class="entry-content">
			<?php
			$count_words = absint(get_theme_mod('fitness_passion_blog_excerpt_length',30));
			if ( empty( $post->post_excerpt ) ) : 
            	echo '<p>'.wp_kses_post( wp_trim_words( $post->post_content, $count_words ) ).'<p>'; 
        	else : 
            	echo fitness_passion_excerpt($count_words);
         	endif; 

			wp_link_pages();
			?>
		</div><!-- .entry-content -->

		<footer class="entry-footer">
			<?php fitness_passion_entry_footer(); ?>
		</footer><!-- .entry-footer -->
	</div>
</article><!-- #post-<?php the_ID(); ?> -->
