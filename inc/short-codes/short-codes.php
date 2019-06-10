
<?php
/**
 * Short codes
 *
 * @package fitnes-passion
 */

function fitness_passion_button_shortcode( $atts, $content = null ) {
	
	// Extract shortcode attributes
	extract( shortcode_atts( array(
		'url'    => '',
		'title'  => '',
		'target' => '',
		'text'   => '',
		'color'  => 'blue',
	), $atts ) );

	// Use text value for items without content
	$content = $text ? $text : $content;

	// Return button with link
	if ( $url ) {

		$link_attr = array(
			'href'   => esc_url( $url ),
			'title'  => esc_attr( $title ),
			'target' => ( 'blank' == $target ) ? '_blank' : '',
			'class'  => 'fp-button fp-color-' . esc_attr( $color ),
		);

		$link_attrs_str = '';

		foreach ( $link_attr as $key => $val ) {

			if ( $val ) {

				$link_attrs_str .= ' ' . $key . '="' . $val . '"';

			}

		}


		return '<a' . $link_attrs_str . '><span>' . do_shortcode( $content ) . '</span></a>';

	}

	// No link defined so return button as a span
	else {

		return '<span class="fp-button"><span>' . do_shortcode( $content ) . '</span></span>';

	}

}
add_shortcode( 'fp-button', 'fitness_passion_button_shortcode' );



function fitness_passion_text_boxes_shorcode($atts, $content = ""){

	// Extract shortcode attributes
	extract( shortcode_atts( array(
		'type' 		=> '',
		
	), $atts ) );

	$content = $content ? $content :__('Sin Contenido','fitness-passion');
	$typeClass = $type ? 'fp-alert-'.$type : 'fp-alert-info';

	return '<div class="fp-alert '.$typeClass.'">'.$content.'</div>';


}
add_shortcode( 'fp-text-box', 'fitness_passion_text_boxes_shorcode' );

function fitness_passion_planning_shortcode( $atts, $content = "" ) {
	
	// Extract shortcode attributes
	extract( shortcode_atts( array(
		'title' 		=> '',
		'price'			=> '',
		'recurrent' 	=> 'Mo',
		'outstanding' 	=> 'false',
		'currency'		=> '$',
		'button_text' 	=> 'Contract',
		'button_link'   => '#'
	), $atts ) );

	
	$outstanding = wp_validate_boolean($outstanding) ? ' fp_outstanding' : '';

	return '<div class="fp_planning'.$outstanding.'">
					<h2 class="fp_planning_title">'.$title.'</h2>
					<h3 class="fp_plannig_price">
						<span class="fp_planning_currency">'.$currency.'</span>'.$price
						.'<span class="fp_planning_recurrent">'.$recurrent.'</span>
					</h3>
					<div class="fp_plannig_desc">'.$content.'</div>
					<a class="fp_planning_button" href="'.esc_url($button_link).'">'.esc_html($button_text).'</a>
				</div>';

	

	

}
add_shortcode( 'fp-planning', 'fitness_passion_planning_shortcode' );