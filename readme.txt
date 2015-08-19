=== WP URLs Shortener + Social icons [Official] ===
Contributors: AliSaleem252, zinger252, TheseTemplates
Donate link: https://www.paypal.com/cgi-bin/webscr?cmd=_donations&business=alisaleem252%40gmail%2ecom&lc=US&item_name=Refli&item_number=refli&no_note=0&currency_code=USD&bn=PP%2dDonationsBF%3abtn_donateCC_LG%2egif%3aNonHostedGuest
Tags: short url, short, url, url shorten, shorten url, shortener, url shortener, url shortening, urls, links, tinyurl, twitter, microblogging, refli
Requires at least: 3.1
Tested up to: 4.3
Stable tag: trunk
License: GPLv3

Automatic wordpress link shortner, shorterns posts, pages, categories, affiliate links, shorten external links or any URL via ref.li

== Description ==
<p>** NOW WITH CLICK STATS FOR EACH POST AND ALL SHORTLINKS **</p>

<p>Credits: https://studio.envato.com/users/alisaleem252
</p>
This plugin adds ability to instantly create short link for your post, pages, categories, archieves, users, tags, custom taxonomies or custom post types or anything then stores it
in the database, to make it easier for users to recall and share it with friends and readers, it can also be used to hide your referrer links by simply placing refli short codes to shorten any external link in post.
<p>
To Show the Short link of current page or post use the following shortcode on post, page or sidebar widget:
</p>
<p>
[refli-url]
</p>
<p>
To quickly shorten any External URL within post use the following short code:
</p>
Example: taking google.com as extrnal link, then
<p>
[refli-url u="http://google.com"]
</p>
<strong>Plugin homepage:</strong>
http://www.thesetemplates.com/2013/07/wordpress-shorten-url-plugin.html

For support use WordPress.org or this link:
http://www.thesetemplates.com/2013/07/wordpress-shorten-url-plugin.html

<strong>Advance users only:</strong>
<p>
In your single.php or single-custom.php file place:
</p>
<pre>&quot;Shortlink: &lt;?php echo refli_show_url() ?&gt;&quot;</pre>
After &lt;?php the_content(); ?&gt;
to automatically show post shortlink to your visitors for everypost.
or you can use refli_show_url() anywhere in your template to print the shortlink.


<strong>Report links</strong>

<p>Instantly report any suspicious, spam, malware link to refli directly for removal <a href="http://ref.li/contact">Ref.li/report.php</a></p>
<p>We use Google Safe Browsing API to detect links with malware, so this is 100% safe</p>

Get Shortend! Thousands of Unique Custom Shortlinks are available Get them before someone does.
Thanks!

== Installation ==
<p>Manual</p>
1. Upload the `refli-short-urls` folder to `/wp-content/plugins/`.
2. Activate the plugin through the 'Plugins' menu in WordPress.
3. In the blog post edit window using Button "Get shortlink" to get short link of this post.
<p>Automatic</p>
1. Goto Dasboard Plugin click 'Add New' search for 'WP URLs shorten' .
2. Click Install.
3. Activate Plugin.


== Screenshots ==

1. The Get Shortlink button in Post Editor screenshot-1.png
2. Refli Second screenshot-2.png
3. Refli Third screenshot-3.png
4. Refli Third screenshot-4.png
5. Refli Third screenshot-5.png

== Changelog ==

= 3.1 =
* database prefix

= 3.0 =
* Improved Social Icons
* Improved Settings
* Live Statistics of Short URLS
* Added Meta Box For Live Short URL Stats


= 2.3 =
* Improved Social Icons

= 2.0 =
* Introduced API system, Custom URL tracking, Login to ref.li to see stats.


= 1.3 =
* Social icons with one click share.

= 1.2 =
* Display Shortlink Fixed.
* Display Tweet this link fixed.

= 1.0 =
* Added Admin Menu.
* Shortcode Usage and help in menu page.
* Report a link.
* Bug fixed for twitter display.

= 0.5 =
* Added Shortcode functionality, instantly shorten external links using shortcode.

= 0.2 =
* Fix bug in call to undefined function.

= 0.1 =


== Frequently Asked Questions ==

= How do I use the refli_show_url() function? =
This function can be used in your theme files. For example, we echo refli_show_url() in post.php and this will show "http://ref.li/123".

= How to use shortcode? =
In your post editor placing [refli-url] will show your current post short link.

= How to shorten External links in the posts? =
External links can be shorten using shortcode such as [refli-url u="http://external.link"].

= How to shorten All External links in the page? =
Right now this feature is not available but javascript plugins will be available soon.

= How to create custom shortlink? =
This feature is not avialable yet in the plugin but this can be done using API http://ref.li/api-about.php

== Upgrade Notice ==
= None. =
