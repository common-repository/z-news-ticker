=== Z News Ticker ===
Tags: news, ticker, headline, news effect, headline effect, type effect, jquery effect, post effect, page effect, category effect, theme post effect, theme page effect
Requires at least: 3.0.1
Tested up to: 4.0
Stable tag: 1.2.3
License: GGPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-3.0.html

This is a special plugin for showing news ticker as headlines.

== Description ==

This is a special plugin for showing news ticker as headlines. You can view the latest headlines (title) from page, post, custom post, category or custom taxonomy. Z News Ticker is fully customizable using simple shortcode.

More information can be found <a href='http://imwebdeveloper.tk/plugins/z-news-ticker/'>here</a>.
For support please visit the <a href='http://wordpress.org/support/plugin/z-news-ticker'>Support forum</a>.

== Installation ==

This section describes how to install the plugin and get it working.

e.g.

1. Upload `znews-ticker` to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress
3. Place `<?php echo do_shortcode('YOURSHORTCODE'); ?>` in your template file
or you can directly use the shortcode in your page, post, custom post or sidebar like as follows:

<em><strong>Default Settings:</strong></em>
<pre>[ticker id="1"]</pre>

<hr />

<em><strong>Change Type (from posts, pages or other custom posts)</strong></em>
[These are from <em>page</em>]
<pre>[ticker id="2" type="page"]</pre>

<hr />

<em><strong>Change Category (or custom taxonomy)</strong></em>
<pre>[ticker id="3" type="post" category="Ticker"]</pre>

<hr />

<em><strong>Change Number of Items to show as ticker</strong></em>
(These are the latest 2 <em>items</em>)
<pre>[ticker id="4" type="post" category="Ticker" count="2"]</pre>

<hr />

<em><strong>Color Variation (Change Text Color)</strong></em>
<pre>[ticker type="post" id="5" count="5" txtcolor="#FFD7D8"]</pre>

<hr />

<em><strong>Color Variation (Change Background Color)</strong></em>
<pre>[ticker type="post" id="6" count="5" category="" txtcolor="#53AA35" bgcolor="#DEE9B4"]</pre>

<hr />

<em><strong>Change Text:</strong></em>
<pre>[ticker type="post" id="7" count="5" category="" text="Another News"]</pre>

<hr />

<em><strong>Change Speed of Items:</strong></em>
(Next Item shows after <em>10 seconds</em>)
<pre>[ticker type="post" id="8" count="5" category="" speed="10000"]</pre>

<hr />

<em><strong>Change Speed of Typing:</strong></em>
<pre>[ticker type="post" id="9" count="5" category="" typespeed="10"]</pre>

<hr />

<em><strong>Change Cursor1:</strong></em>
<pre>[ticker type="post" id="10" count="5" category="" typespeed="300" cursor1="|"]</pre>

<hr />

<em><strong>Change Cursor2:</strong></em>
<pre>[ticker type="post" id="11" count="5" category="" typespeed="300" cursor2="..."]</pre>

<hr />

<em><strong>Change Cursor Both:</strong></em>
<pre>[ticker type="post" id="12" count="5" category="" typespeed="300" cursor1="|" cursor2="|"]</pre>

<hr />

<em><strong>Instant Pause when your cursor hovers on the Item:</strong></em>
<pre>[ticker type="post" id="13" count="5" text= "Others Options" category="" typespeed="100" pause="true" finish="false"]</pre>

<hr />

<em><strong>Never Pause when your cursor hovers on the Item:</strong></em>
<pre>[ticker type="post" id="14" count="5" text= "Others Options" category="" typespeed="100" pause="false" finish="false"]</pre>

<hr />

<em><strong>Using MCE Button:</strong></em>
<pre>[ticker id="123456789" type="post" category="" txtcolor="" bgcolor="" count="" text="Latest News" speed="3000" typespeed="50" cursor1="-" cursor2="_" pause="true" finish="true"]</pre>

== Frequently Asked Questions ==

= How can I install this plugin =

You can install this plugin as usual. See Installaion tab for details.

= Can I customize all the values in this plugin =

Yes, all the values are customizable, you can set your preferences as your needed by following the example of installation tab.

= Can I get the button generated shortcode =

Button generated shorcode is available in premium version.

== Screenshots ==

1. For live demo, click this <a href='http://imwebdeveloper.tk/plugins/z-news-ticker/'>link</a>.
2. MCE Button to generate your shortcode (for premium verison)
3. Changing your preference
4. Insert your preference as your needed
5. Your button Generated Code (for premium verison)

== Changelog ==

= 1.2.3 =
* Initial release.