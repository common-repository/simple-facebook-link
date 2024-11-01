<?php
/**
* Function Calls
*
* Various functions, open for user access
*
* @package	Artiss-Social-Share
*/

/**
* Facebook link function
*
* Function call to return a link to Facebook
*
* @since	1.5
*
* @uses		ass_create_facebook_link	Generate Facebook link code
*
* @param	string		$service		Redundant
* @param	string		$url			URL to link to
* @param	string		$title			Title to use
*/

function artiss_facebook_link( $service = '', $url = '', $title = '' ) {

	echo ass_create_facebook_link( $url, $title );

	return;
}

/**
* Google +1 link function
*
* Function call to return a link to Google +1
*
* @since	2.0
*
* @uses 	ass_create_google_link	Generate Google +1 link code
*
* @param	string		$url		URL to link to
*/

function artiss_google_link( $url = '' ) {

	echo ass_create_google_link( $url );

	return;
}

/**
* Twitter link function
*
* Function call to return a link to Twitter
*
* @since	2.0
*
* @uses 	ass_create_twitter_link	Generate Google +1 link code
*
* @param	string		$text		Twitter text
* @param	string		$url		URL to link to
* @param	string		$title		Title to use
* @param	string		$service	Various options
*/

function artiss_twitter_link( $text = '', $url = '', $service = '', $title = '' ) {

	echo ass_create_twitter_link( $text, $url, $title, $service );

	return;
}
?>