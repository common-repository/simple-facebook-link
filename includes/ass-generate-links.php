<?php
/**
* Generate Social Links
*
* Generate the social link code
*
* @package	Artiss-Social-Share
*/

/**
* Create Facebook Link
*
* Generate a link to Facebook
*
* @since	1.3
*
* @param	string	$service	Shortening service parameters
* @param	string	$url		URL to link to
* @return			$share_url	Facebook URL
*/

function ass_create_facebook_link( $url = '', $title = '' ) {

	// If no URL specified, get the current one along with a title

	if ( $url == '' ) {
		global $post;
		$url = get_permalink( $post->ID );
		$title = html_entity_decode( get_the_title( $post -> ID ), ENT_QUOTES, 'UTF-8' );
	}

	// Now, send the URL and blog title to Facebook

	$share_url = "http://www.facebook.com/sharer.php?u=" . $url;
	if ( $title != '' ) { $share_url .= "&t=" . $title; }

	return $share_url;
}

/**
* Create Google+1 Link
*
* Generate a link to Google+
*
* @since	2.0
*
* @param	string	$url		URL to link to
* @return			$share_url	Facebook URL
*/

function ass_create_google_link( $url = '' ) {

	if ( $url == '' ) { $url = get_permalink( $post->ID ); }

	// Now, send the URL and blog title to Facebook

	$share_url = "https://plusone.google.com/u/0/+1/profile/?type=po&ru=" . $url;

	return $share_url;
}

/**
* Create Twitter Link
*
* Generate a link to Twitter
*
* @since	2.0
*
* @uses 	validate_url_shortener	Ensure the URL shortening service is valid
* @uses		simple_url_shortener	Shorten a URL
* @uses		ass_get_parameters		Extract paramters from a string
*
* @param	string	$twitter_text	Text to output to Twitter status
* @param	string	$url			URL to link to
* @param	string	$title			Alternative title
* @param	string	$paras_in		Additional parameters for URL Shortener
*/

function ass_create_twitter_link( $twitter_text = '', $url = '', $title = '', $paras_in = '' ) {

	// Validate incoming Twitter text - use default if missing or an issue

	if ( ( $twitter_text == '' ) or ( strpos( $twitter_text, '%url%' ) === false ) ) { $twitter_text = 'I\'m currently reading %url%'; }

	// If no URL specified, get the current one along with a title

	if ( $url == '' ) {
		global $post;
		$url = get_permalink( $post -> ID );
		$title = html_entity_decode( get_the_title( $post -> ID ), ENT_QUOTES, 'UTF-8' );
	}

	// Get cache

	$share_url = '';
	$cache = strtolower( ass_get_parameters( $paras_in, 'cache' ) );
	if ( $cache == '' ) { $cache = 24; }
	$cache_key = 'ass_' . md5( $twitter_text . $url . $title . $paras_in );
	if ( $cache != 'no' ) { $share_url = get_transient( $cache_key ); }

	// If no cache, generate the link

	if ( $share_url == '' ) {

		// Use Artiss URL Shortener plugin to get a short URL

		if ( function_exists( 'simple_url_shortener' ) ) {

			$service = validate_url_shortener( $twitter_text, '%{service}%' );

			if ( $service != "" ) {

				if ( $paras_in != '' ) {

					$url = simple_url_shortener( $url, 'service=' . $service . '&' . $paras_in );

				} else {

					$url = simple_url_shortener( $url, $service );
				}

				$twitter_text = str_replace( '%' . $service . '%', '', $twitter_text );

			}

		}

		// Replace the tags in the Twitter text

		if ( strpos( $twitter_text, '%url%' ) !== false ) { $twitter_text = str_replace( '%url%', $url, $twitter_text ); }

		if ( strpos( $twitter_text, '%title%' ) !== false ) { $twitter_text = str_replace( '%title%', $title, $twitter_text ); }

		// Build the resultant Twitter link

		$share_url = 'http://twitter.com/home?status=' . urlencode( $twitter_text );

		// Save the cache, if required

		if ( $cache != 'no' ) { set_transient( $cache_key, $share_url, 3600 * $cache_time ); }

	}

	return $share_url;
}

/**
* Extract Parameters (1.1)
*
* Function to extract parameters from an input string
*
* @since	2.0
*
* @param	$input	string	Input string
* @param	$para	string	Parameter to find
* @return			string	Parameter value
*/

function ass_get_parameters( $input, $para, $divider = '=', $seperator = '&' ) {

	$start = strpos( strtolower( $input ), $para . $divider);
	$content = '';
	if ( $start !== false ) {
		$start = $start + strlen( $para ) + 1;
		$end = strpos( strtolower( $input ), $seperator, $start );
		if ( $end !== false ) { $end = $end - 1; } else { $end = strlen( $input ); }
		$content = substr( $input, $start, $end - $start + 1 );
	}
	return $content;
}
?>