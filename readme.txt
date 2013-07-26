=== WP URLs Shorten ===
Contributors: Ali
Donate link: http://www.thesetemplates.com/2013/07/wordpress-shorten-url-plugin.html
Tags: short url, short, url, url shorten, shorten url, shortener, url shortener, url shortening, urls, links, tinyurl, twitter, microblogging, refli
Requires at least: 3.0
Tested up to: 3.6
Stable tag: trunk
License: GPLv3

Automatically shortens the blog post URL via ref.li for twitter and can be used to hide your referer.

== Description ==

This plugin adds ability to instantly create short URL/link for post, pages, categories, archieves, users, tags, custom taxonomies or custom post types and stores it
in the database, to make it easier for users to recall and share it with friends and readers, it can also be used to hide your referrer links.

<strong>Plugin homepage:</strong>
http://www.thesetemplates.com/2013/07/wordpress-shorten-url-plugin.html

For support use WordPress.org or this page:
http://www.thesetemplates.com/2013/07/wordpress-shorten-url-plugin.html

<strong>Advance users only:</strong>
<p>
In your single.php or single-custom.php file place:
</p>
<pre>&quot;Shortlink: &lt;?php echo refli_show_url() ?&gt;&quot;</pre>
After &lt;?php the_content(); ?&gt;
to automatically show post shortlink to your visitors.
or you can use refli_show_url() anywhere in your template to print the shortlink.

<strong>Refli Chrome Extension</strong>
<p>
Quickly Shorten any link just by clicking the extension, then copy your shortlink
<a target="_blank" href="http://ref.li/asset/refli-chrome.crx">Click here to download</a>
</p>

Enjoy!
Thanks!

== Installation ==

1. Upload the `refli-short-urls` folder to `/wp-content/plugins/`.
2. Activate the plugin through the 'Plugins' menu in WordPress.
3. In the blog post edit window using Button "Get shortlink" to get short link of this post.


== Screenshots ==

1. The Get Shortlink button in Post Editor screenshot-1.png

== Changelog ==

= 0.2 =
* Fix bug in call to undefined function.

= 0.1 =


== Frequently Asked Questions ==

= How do I use the refli_show_url() function? =
This function can be used in your theme files. For example, we echo refli_show_url() in post.php and this will show "http://ref.li/123".

== Upgrade Notice ==
= None. =
