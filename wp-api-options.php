<?php
/*
Plugin Name: WP REST API Options
Description: WP REST API Options - returns list of options and their values.
Author: Oleg Kostin / Adrian Cando
Version: 1.0.2
Author URI: http://pmr.io
*/

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly


// WP API v2.
include_once 'includes/wp-api-options-v2.php';

/**
 * Check if WP REST API is active
 **/
function wp_rest_options_init() {

	/**
	 * Init JSON REST API options routes.
	 *
	 * @since 1.0.0
	 */

	$class = new WP_REST_Options();
	add_filter( 'rest_api_init', array( $class, 'register_routes' ) );
}

add_action( 'init', 'wp_rest_options_init' );
