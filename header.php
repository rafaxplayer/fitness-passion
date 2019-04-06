<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package fitness-passion
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'fitness-passion' ); ?></a>

	<header id="masthead" class="site-header">
		
		<div class="header-top">
			<?php
			 if(get_theme_mod('fitness_passion_header_top_show_info', true)):
				$phone = get_theme_mod('fitness_passion_phone', '');
				$whatsapp = get_theme_mod('fitness_passion_whatsapp', '');
				$address = get_theme_mod('fitness_passion_address', '');
				$email = get_theme_mod('fitness_passion_email', '');?>

				<div class="top-info">
					<?php if(!empty($address)):?>
						<a href="http://maps.google.com/maps?q=<?php echo esc_html(urlencode($address)); ?>" target="_blank" ><span class="fa fa-map-marker"> <?php echo esc_html($address); ?></span></a>
					<?php endif;?>
					<?php if(!empty($phone)):?>
						<a href="tel:<?php echo esc_html($phone); ?>" target="_blank"><span class="fa fa-phone"> <?php echo esc_html($phone); ?></span></a>
					<?php endif;?>
					<?php if(!empty($whatsapp)):?>
						<a href="tel:<?php echo esc_html($whatsapp); ?>" target="_blank"><span class="fa fa-whatsapp"> <?php echo esc_html($whatsapp); ?></span></a>
					<?php endif;?>
					<?php if(!empty($email)):?>
						<a href="mailto:<?php echo esc_html($email); ?>" target="_blank"><span class="fa fa-envelope-o"> <?php echo esc_html($email); ?></span></a>
					<?php endif;?>
					
				</div>
				<?php endif;
        
				if(get_theme_mod('fitness_passion_header_top_show_social', true)):
					do_action('fitness_passion_social_icons');
				endif;?>
        
		</div>
		<div class="header-wrap">
		<div class="site-branding">
			<?php
			the_custom_logo();
			if ( is_front_page() || is_home() ) :
				?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif;
			$fitness_passion_description = get_bloginfo( 'description', 'display' );
			if ( $fitness_passion_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo esc_html($fitness_passion_description); /* WPCS: xss ok. */ ?></p>
			<?php endif; ?>
		</div><!-- .site-branding -->
		
		<i id="button-toogle" class="menu-toggle fa fa-bars" aria-controls="primary-menu" aria-expanded="false"></i>
		
		<nav id="site-navigation" class="main-navigation">
			
			<?php

			wp_nav_menu( array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
				
			) );
			?>
		</nav><!-- #site-navigation -->
		<a href="#" class="search-btn" data-toggle="modal" data-target="#searchmodal"><i class="fa fa-search"></i><span></a>
		<?php 
		
			$image_header = get_template_directory_uri().'/assets/images/header_default.jpg';
			
			if ( (get_custom_header() && (is_home() && is_front_page())) ||  (get_custom_header() && is_front_page())): 

				$image_header = get_header_image() ? get_header_image() : get_template_directory_uri().'/assets/images/header_default.jpg';
				
			elseif(is_Home()):
				$blog_home_id = get_option( 'page_for_posts' );
    			
				$image_header = get_the_post_thumbnail_url($blog_home_id, 'full') ? get_the_post_thumbnail_url($blog_home_id, 'full') : get_template_directory_uri().'/assets/images/header_default.jpg';
			else:

				$image_header = get_the_post_thumbnail_url() ? get_the_post_thumbnail_url() : get_template_directory_uri().'/assets/images/header_default.jpg';
				
			
			endif;
			
			if( get_theme_mod('fitness_passion_show_slider', false) && is_front_page() ):

				get_template_part('template-parts/header-slider');

			else:
			
			?>
			</div>
			<div class="header-image" style="background-image:url(<?php echo esc_url($image_header); ?>)">

				<?php 
					do_action('fitness_passion_header'); 
					do_action('fitness_passion_show_breadcrumbs',get_theme_mod('fitness_passion_breadcrumbs',true));
					
				?>
		
			</div>	
			<?php endif; ?>

		<!-- Modal Search form -->
		<div class="modal fade" id="searchmodal" role="dialog">
			<div class="modal-dialog">
			
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
				<h4 class="modal-title"><?php esc_html_e('Search For','fitness-passion'); ?></h4>
				</div>
				<div class="modal-body">
				<?php echo get_search_form(); ?>
				</div>
				<div class="modal-footer">
				<button type="button" class="btn" data-dismiss="modal"><?php esc_html_e('Close','fitness-passion'); ?></button>
				</div>
			</div>
			
			</div>
      	</div>
		
	</header><!-- #masthead -->


	<div id="content" class="site-content">

	