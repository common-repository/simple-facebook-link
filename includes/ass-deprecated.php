<?php
/**
* Deprecated Code
*
* Various pieces of code, now deprecated, but kept here for backwards compatibility
*
* @package		Artiss-Social-Share
* @since		2.0
*/

/**
* Simple Facebook Link
*
* Function call to return a link to Facebook
*
* @since		1.5
* @deprecated	deprecated since version 1.5
*
* @uses 	artiss_facebook_link	Call replacement routine
*
* @param	string		$service	Shortening service parameters
* @param	string		$url		URL to link to
*/

function simple_facebook_link( $service = '', $url = '' ) {

	artiss_facebook_link( $service, $url );
	return;
}

/**
* Simple Twitter Link
*
* Function call to return a link to Twitter
*
* @package		Artiss-Twitter-Link
* @since		1.0
* @deprecated	deprecated since version 1.7
*
* @uses		artiss_twitter_link		Call replacement routine
*
* @param	string	$twitter_text	Text to output to Twitter status
* @param	string	$url			URL to link to
* @param	string	$paras_in		Additional parameters for URL Shortener
*/

function simple_twitter_link ( $twitter_text = '' , $url = '', $paras_in = '' ) {

	artiss_twitter_link( $twitter_text, $url, '', $paras_in );
	return;
}
?>