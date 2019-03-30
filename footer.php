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

		<div class="col-xs-12 col-md-6 col-lg-6">
			<?php do_action('fitnes_passion_social_icons'); ?>
		</div>
		

		<div class="site-info col-xs-12 col-md-6 col-lg-6">
			<?php
				$info_footer = get_theme_mod('fitnes_passion_footer_info');

				if(empty($info_footer)){
					 echo 'JRS &copy; '. date('Y');?>
					 <span> | </span>
					 <?php
					/* translators: 1: Theme name, 2: Theme author. */
					printf( esc_html__( 'Theme: %1$s by %2$s.', 'fitness-passion' ), 'Fit Passion', '<a href="http://juanrafaelsimarro.com/">JRS</a>' );
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
