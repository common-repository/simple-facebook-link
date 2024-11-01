<?php
/*
Plugin Name: Artiss Social Share
Plugin URI: http://www.artiss.co.uk/social-share
Description: Add sharing links for popular social sites
Version: 2.1
Author: David Artiss
Author URI: http://www.artiss.co.uk
*/

/**
* Artiss Social Share
*
* Main code - include various functions
*
* @package	Artiss-Social-Share
* @since	2.0
*/

$functions_dir = WP_PLUGIN_DIR . '/simple-facebook-link/includes/';

// Include all the various functions

if ( is_admin() ) {

	include_once( $functions_dir . 'ass-admin-config.php' );					// Assorted admin configuration changes

} else {

	include_once( $functions_dir . 'ass-generate-links.php' );					// Generate the code

	include_once( $functions_dir . 'ass-deprecated.php' );						// Deprecated functionality

	include_once( $functions_dir . 'ass-function-calls.php' );					// User function calls

	include_once( $functions_dir . 'ass-shortcodes.php' );  					// Shortcodes

}
?>