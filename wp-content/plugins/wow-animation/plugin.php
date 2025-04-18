<?php
/*
 Plugin Name: WOW Animation for WordPress
 Author: ThachPham
 Author URI: http://thachpham.com
 Description: CSS object animation for WordPress. Check out tutorial <a href="#" target="blank">here</a>.
 Version: 1.0
 */

 /* Insert core files */
 function register_common() {
 	wp_enqueue_script( 'wow-script', plugins_url() . '/wow-animation/wow.min.js', array(), true );
 	wp_enqueue_script( 'wow-custom', plugins_url() . '/wow-animation/custom.js', array(), true );
 	wp_enqueue_style( 'wow-style', plugins_url() . '/wow-animation/animate.css' );
 }
 add_action( 'wp_enqueue_scripts', 'register_common' );

 /* Register shortcode */

 function wow_shortcode( $ts, $content ) {

 	return '
 		<div class="wow '.$ts['class'].'" data-wow-duration="'.$ts['duration'].'">'.$content.'</div>
 	';

 }
add_shortcode( 'wow', 'wow_shortcode' );