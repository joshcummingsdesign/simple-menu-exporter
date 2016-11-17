<?php

/*****************************************
* Register scripts and styles
/****************************************/

function smux_register_scripts() {

	wp_register_style( 'smux_styles', plugin_dir_url( __FILE__ ) . 'css/smux-styles.css' );

  wp_register_script( 'smux_script', plugin_dir_url( __FILE__ ) . 'js/smux-script.js', array( 'jquery' ) );

}
add_action( 'wp_enqueue_scripts', 'smux_register_scripts' );

/*****************************************
* Add shortcode
/****************************************/

function smux_display_slider($atts) {

	$atts = shortcode_atts(
	array(
		'name' => ''
	), $atts);

	$options = get_option( 'smux_options' );

	include ( 'partials/smux-public-content.php' );

}
add_shortcode( 'smux', 'smux_display_slider' );
