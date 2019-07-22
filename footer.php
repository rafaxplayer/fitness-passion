<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package fitness-passion
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }
?>

	</div><!-- #content -->
	
	<footer id="colophon" class="site-footer row">
		<?php if(get_theme_mod('fitness_passion_footer_show_social',true)):?>
			<div class="col-xs-12 col-md-6 col-lg-6">
				<?php do_action('fitness_passion_social_icons'); ?>
			</div>
		<?php endif;?>

		<div class="site-info col-xs-12 col-md-6 col-lg-6">
			<?php
				$info_footer = get_theme_mod('fitness_passion_footer_info');

				if(empty($info_footer)){
					 
					/* translators: 1: Theme name, 2: Theme author. */
					printf( esc_html__( '&copy; %1$s Theme: %2$s by %3$s.', 'fitness-passion' ),esc_html(date('Y')), 'Fitness Passion', '<a href="https://juanrafaelsimarro.com/">J.Rafael Simarro</a>' );
				}else{
					echo wp_kses_post($info_footer);
				}
				
			?>
		</div><!-- .site-info -->
		<i class="button-up fa fa-angle-up"></i><!-- button up -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
