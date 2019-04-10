<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package fitnes-passion
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }
function fitness_passion_body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	// Adds a class of no-sidebar when there is no sidebar present.
	if ( ! is_active_sidebar( 'sidebar-1' ) ) {
		$classes[] = 'no-sidebar';
	}

	return $classes;
}
add_filter( 'body_class', 'fitness_passion_body_classes' );

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function fitness_passion_pingback_header() {
	if ( is_singular() && pings_open() ) {
		printf( '<link rel="pingback" href="%s">', esc_url( get_bloginfo( 'pingback_url' ) ) );
	}
}
add_action( 'wp_head', 'fitness_passion_pingback_header' );

function fitness_passion_add_span_last_word($string){
	$array = explode(" ", $string);
	$text = "";
	for($i=0;$i<sizeof($array);$i++){
		if($i == 0 || $i%2==0){
			$text .= $array[$i].' ';
		}else{
			$text .='<span>'.$array[$i].'</span>'." ";
		} 
	}
	return $text;
}
