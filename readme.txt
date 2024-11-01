=== Artiss Social Share ===
Contributors: dartiss
Donate link: http://artiss.co.uk/donate
Tags: analytics, artiss, facebook, function, google, google+, link, plusone, share, shortcode, simple, social, theme, twitter
Requires at least: 2.5
Tested up to: 3.4.1
Stable tag: 2.1

Artiss Social Share (formally Artiss Facebook Link and Simple Twitter Link) will generate a URL that allows you to quickly and easily share a post or page on Facebook, Twitter or Google+.

== Description ==

Artiss Social Share is an easy way to generate a link to Facebook, Twitter or Google+, allowing you to share post or page URLs.

Features include...

* Fully XHTML compliant output
* Use a PHP function call in your theme or a shortcode in your post or page
* Twitter URLs can be shortened using Artiss URL Shortener plugin - choose from over 100 shortening services
* Grabs the current URL and title - or override them to your own if you wish
* Using the shortcode you can add a sharing link directly in the middle of a post
* Automatic caching ensures minimal performance impact!

The simplest way to use this plugin is with one of the 3 shortcodes - `[facebook]`, `[google]` or `[twitter]`. Simply wrap these around a piece of text to link to the social site of choice.

For example...

`[facebook]Share on Facebook[/facebook]`

This would generate link to Facebook, sharing the current page.

For further instructions on use please read the [Other Notes](http://wordpress.org/extend/plugins/simple-facebook-link/other_notes/ "Other Notes") section.

== Facebook Share ==

To use the function call (for example within a post loop) you would do the following...

`<a href="<?php artiss_facebook_link(); ?>">Share on Facebook</a>`

This will return a URL to allow the current post/page URL and title to be shared on Facebook.

Three, optional, parameters can be specified - the first one is now redundant, the second is a replacement URL and third is a title. For example...

`<a href="<?php artiss_facebook_link( '', 'http://www.artiss.co.uk', 'Welcome to Artiss.co.uk' ); ?>">Share on Facebook</a>`

The shortcode, `[facebook]`, has 4 optional parameters...

* *url* - If you wish to override the URL
* *title* - If you wish to override the title
* *target* - The link `target`
* *rel* - The link `rel`

For example...

`[facebook url="http://www.artiss.co.uk" title="Welcome to Artiss.co.uk" rel="nofollow" target="_new"]Share on Facebook[/facebook]`

== Google+ Share ==

To use the function call (for example within a post loop) you would do the following...

`<a href="<?php artiss_google_link(); ?>">Share on Google+</a>`

This will return a URL to allow the current post/page URL and title to be shared on Google+.

An optional parameter can be specified - a replacement URL. For example...

`<a href="<?php artiss_google_link( 'http://www.artiss.co.uk' ); ?>">Share on Google+</a>`

The shortcode, `[google]`, has 3 optional parameters...

* *url* - If you wish to override the URL
* *target* - The link `target`
* *rel* - The link `rel`

For example...

`[google url="http://www.artiss.co.uk" rel="nofollow" target="_new"]Share on Google+[/google]`

== Twitter Share ==

To use the function call (for example within a post loop) you would do the following...

`<a href="<?php artiss_twitter_link(); ?>">Share on Twitter</a>`

This will return a URL to allow the current post/page URL and title to be shared on Facebook with a default status.

Four, optional, parameters can be specified. These are...

* The Twitter status message - see below for details
* Your own URL, if you don't wish the current one to be used
* A list of options - see below for more information
* Your own title, if you don't wish the current one to be used

The Twitter status message can contain a number of tags - %url%, %title% and the shortening service that you wish to use (see the next section for further details). These will be replaced with the appropriate text before the status message is sent to Twitter.

For example...

`<a href="<?php artiss_twitter_link( '%tinyurl%Currently reading a blog post called "%title%" - %url%', 'http://www.artiss.co.uk', '', 'Welcome to Artiss.co.uk' ); ?>">Share on Twitter</a>`

The 1st parameter is the Twitter status - %title% and %url% will be replaced, as appropriate. %tinyurl% indicates the URL shortening service to be used and will be omitted in the resulting status.

The 3rd parameter, as mentioned above, is a list of options mainly relating to URL shortening. Each of these are seperated by an ampersand and are all optional...

* *cache=* - How long to cache the output, in hours. The default is 24. Specify as `No` to not cache at all
* *apikey=* - Enables you to pass an API key (if required) to the URL shortening service - see Artiss URL Shortener notes for details
* *login=* - Enables you to pass a login (if required) to the URL shortening service - see Artiss URL Shortener notes for details
* *password=* - Enables you to pass an password (if required) to the URL shortening service - see Artiss URL Shortener notes for details

For example...

`<a href="<?php artiss_twitter_link( '%tinyurl%Currently reading a blog post called "%title%" - %url%', 'http://www.artiss.co.uk', 'cache=4&login=test', 'Welcome to Artiss.co.uk' ); ?>">Share on Twitter</a>`

This overrides the caching to 4 hours and passes a login of `test` to the URL shortening service of `tinyurl`.

The shortcode, `[twitter]`, has 9 optional parameters...

* *url* - If you wish to override the URL
* *title* - If you wish to override the title
* *target* - The link `target`
* *rel* - The link `rel`
* *text* - The status text. Use the tags, as specified above
* *cache* - How long to cache the output, in hours. The default is 24. Specify as `No` to not cache at all
* *apikey* - Enables you to pass an API key (if required) to the URL shortening service - see Artiss URL Shortener notes for details
* *login* - Enables you to pass a login (if required) to the URL shortening service - see Artiss URL Shortener notes for details
* *password* - Enables you to pass an password (if required) to the URL shortening service - see Artiss URL Shortener notes for details

For example...

`[twitter text="%tinyurl%Currently reading a blog post called %title% - %url%" url="http://www.artiss.co.uk" title="Welcome to Artiss.co.uk" rel="nofollow" target="_new" cache="4"]Share on Twitter[/twitter]`

== Licence ==

This WordPress plugin is licensed under the [GPLv2 (or later)](http://wordpress.org/about/gpl/ "GNU General Public License").

== Support ==

All of my plugins are supported via [my website](http://www.artiss.co.uk "Artiss.co.uk").

Please feel free to visit the site for plugin updates and development news - either visit the site regularly or [follow me on Twitter](http://www.twitter.com/artiss_tech "Artiss.co.uk on Twitter") (@artiss_tech).

For problems, suggestions or enhancements for this plugin, there is [a dedicated page](http://www.artiss.co.uk/social-share "Artiss Social Share") and [a forum](http://www.artiss.co.uk/forum "WordPress Plugins Forum"). The dedicated page will also list any known issues and planned enhancements.

**This plugin, and all support, is supplied for free, but [donations](http://artiss.co.uk/donate "Donate") are always welcome.**

== Installation ==

1. Upload the entire `simple-facebook-link` folder to your wp-content/plugins/ directory.
2. Activate the plugin through the 'Plugins' menu in WordPress.
3. That's it, you're done - you just need to add the function call or short code!

== Frequently Asked Questions ==

= Which version of PHP does this plugin work with? =

It has been tested and been found valid from PHP 4 upwards.

Please note, however, that the minimum for WordPress is now PHP 5.2.4. Even though this plugin supports a lower version, I am not coding specifically to achieve this - therefore this minimum may change in the future.

= I'm using a previous version of the plugin (or one of those that was merged into it). Will it still work? =

I maintain backwards compatibility, so it should - if not, let me know and I'll get it fixed.

== Changelog ==

= 2.1 =
* Bug: No longer have to specify all the parameters for the `artiss_twitter_link` function
* Bug: Fixed issue with conversion of characters in titles
* Enhancement: Added basic Google Analytics tracking

= 2.0 =
* Maintenance: Renamed to Artiss Social Links
* Maintenance: Further improvements to code
* Maintenance: Removed URL shortening from Facebook
* Enhancement: Merged Simple Twitter Link
* Enhancement: Added Google+ sharing
* Enhancement: Added new title parameter, allowing the title to be overridden for Facebook and Twitter shares
* Enhancement: Added caching to Twitter share

= 1.5 =
* Maintenance: Plugin renamed as part of new naming policy
* Maintenance: Function name changed to match - old function name still usable
* Maintenance: Updated code to new standards, including addition of PHPDoc
* Maintenance: Re-written instructions
* Enhancement: Added shortcode option

= 1.4 =
* Enhancement: Added ability to send API keys, etc, when requesting shortened URLs

= 1.3 =
* Maintenance: Code tidied
* Enhancement: Now using [Artiss URL Shortener](http://wordpress.org/extend/plugins/simple-url-shortener/ "Artiss URL Shortener") plugin to provide URL shortening
* Enhancement: Added new parameter that allows overriding of passed URL
* Enhancement: Blog title again corrected, using code from Simple Social Bookmarks plugin

= 1.2 =
* Bug: Fixed issue with ampersands (and probably other characters) in the blog title causing linking issues
* Enhancement: Added su.pr as another URL shortening service

= 1.1 =
* Enhancement: Added bit.ly to list of URL shortening services

= 1.0 =
* Initial release

== Upgrade Notice ==

= 2.1 =
* Update to fix a number of bugs and add some basic Google Analytics tracking

= 2.0 =
* Brand new version, integrating a number of plugins into one. Backwards compatible with previous versions.

= 1.5 =
* Upgrade to add a short code option

= 1.4 =
* Upgrade is you use shortened URLs and want to use API keys or logons