<?php
/**
 * Template part for displaying gallery posts 
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package fitness-passion
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> data-aos="fade-up" data-aos-duration="800" data-aos-once="true">
	
	<div class="post-wrap">

	<?php 
    if ( get_post_gallery(get_the_ID())) :
		
        echo '<div class="entry-gallery">';
			echo get_post_gallery(get_the_ID(),false);
        echo '</div>';
	else:
		ivanicof_post_thumbnail();
	endif; ?>
	 
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

		<footer class="entry-footer">
			<?php fitness_passion_entry_footer(); ?>
		</footer><!-- .entry-footer -->
	</div>
</article><!-- #post-<?php the_ID(); ?> -->
