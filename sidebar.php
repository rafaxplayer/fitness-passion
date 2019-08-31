<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package fitness-passion
 */
if ( !defined( 'ABSPATH' ) ) { exit; }

if ( !is_active_sidebar( 'sidebar-1' ) ) { 
	
	if(current_user_can( 'administrator')){?>

	<aside id="secondary" class="widget-area col-md-4">
		<?php fitness_passion_box_message( __('Add widgets on sidebar ','fitness-passion')); ?>
	</aside>
	
<?php }
	return;
} ?>

<aside id="secondary" class="widget-area col-md-4">
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</aside><!-- #secondary -->
