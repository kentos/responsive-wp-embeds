<?php
/*
Plugin Name: Reponsive wp Embeds
Plugin URI: http://kentcederstrom.se
Description: Makes the automatic WP embed of responsive
Author: Kent Cederström
Version: 1.0
Author URI: http://kentcederstrom.se
*/

// Do it!
function rwd_wp_init( $val, $attr, $content ) {
	return "<div class='responsive-wp-embed'>". $val ."</div>";
}
add_filter( 'embed_oembed_html', 'rwd_wp_init', 10, 3 );


// Add some stylesheets to make this work
function rwd_wp_cue_stylesheets() {
	wp_enqueue_style( 'responsive-wp-styles', plugin_dir_url(__FILE__) . '/responsive-wp.css', null, 1, "all" );
}
add_action( 'init', 'rwd_wp_cue_stylesheets' );