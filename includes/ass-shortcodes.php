<?php
/**
* Shortcodes
*
* Define the shortcodes
*
* @package	Artiss-Social-Share
*/

/**
* Facebook link shortcode
*
* Create a shortcode to a link to Facebook
*
* @since	1.5
*
* @uses 	ass_create_facebook_link	Generate Facebook link code
*
* @param	string  $paras		List of shortcode parameters
* @param	string	$content	Description to add Facebook link to
* @return			$output		Facebook link to return
*/

function ass_facebook_sc( $paras = '', $content = '' ) {

	extract( shortcode_atts( array( 'url' =>'', 'title' => '', 'target' => '', 'rel' => '' ), $paras ) );

	// Get the Facebook share URL

	$share_url = ass_create_facebook_link( $url, $title );

	// Now create the link

	$output = '<a href="' . $share_url . '"';
	if ( $target != "") { $output .= ' target="' . $target . '"'; }
	if ( $rel != "") { $output .= ' rel="' . $rel . '"'; }
	$output .= " onclick=\"javascript:_gaq.push(['_trackEvent','outbound-article','http://www.facebook.com']);\"";
	$output .= '>' . $content . "</a>";

	return $output;
}
add_shortcode( 'facebook', 'ass_facebook_sc' );

/**
* Google +1 link shortcode
*
* Create a shortcode to a link to Google +1
*
* @since	2.0
*
* @uses 	ass_create_google_link	Generate Google +1 link code
*
* @param	string	$paras		List of shortcode parameters
* @param	string	$content	Description to add Facebook link to
* @return			$output		Facebook link to return
*/

function ass_google_sc( $paras = '', $content = '' ) {

	extract( shortcode_atts( array( 'url' => '', 'target' => '', 'rel' => '' ), $paras ) );

	// Get the Google share URL

	$share_url = ass_create_google_link( $url );

	// Now create the link

	$output = '<a href="' . $share_url . '"';

	if ( $target != "") { $output .= ' target="' . $target . '"'; }
	if ( $rel != "") { $output .= ' rel="' . $rel . '"'; }
	$output .= " onclick=\"javascript:_gaq.push(['_trackEvent','outbound-article','http://plus.google.com']);\"";
	$output .= '>' . $content . "</a>";

	return $output;
}
add_shortcode( 'google', 'ass_google_sc' );

/**
* Twitter link shortcode
*
* Create a shortcode to a link to Twitter
*
* @since	1.7
*
* @uses 	asl_create_twitter_link	Generate Facebook link code
*
* @param	string	$paras		List of shortcode parameters
* @param	string	$content	Description to add Twitter link to
* @return			$output		Twitter link to return
*/

function ass_twitter_sc( $paras = '', $content = '' ) {

	extract( shortcode_atts( array( 'url' => '', 'title' => '', 'target' => '', 'rel' => '', 'cache' => '', 'apikey' => '', 'login' => '', 'password' => '', 'text' => '' ), $paras ) );

	// Combine any parameters

	$paras = '';
	if ( $cache != '' ) { $paras .= '&cache=' . $cache; }
	if ( $apikey != '' ) { $paras .= '&apikey=' . $apikey; }
	if ( $password != '' ) { $paras .= '&password=' . $password; }
	if ( $login != '' ) { $paras .= '&login=' . $login; }
	if ( strlen( $paras ) > 0 ) { $paras = substr( $paras, 1 ); }

	// Get the Twitter share URL

	$share_url = ass_create_twitter_link( $text, $url, $title, $paras );

	// Now create the link

	$output = '<a href="' . $share_url . '"';
	if ( $target != "") { $output .= ' target="' . $target . '"'; }
	if ( $rel != "") { $output .= ' rel="' . $rel . '"'; }
	$output .= " onclick=\"javascript:_gaq.push(['_trackEvent','outbound-article','http://www.twitter.com']);\"";
	$output .= '>' . $content . "</a>";

	return $output;
}
add_shortcode( 'twitter', 'ass_twitter_sc' );
?>