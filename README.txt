=== Primary Category ===

Contributors: Pigrecolab, Jacob McKinney
Donate link: https://www.paypal.me/pigrecolab
Tags: Category, Primary, Custom Post
Requires at least: 3.0.1
Tested up to: 4.7.2
Stable tag: 1.0.0
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

WordPress plugin for setting and displaying primary categories for posts and custom post types. This is a fork from Jacob McKinney's Primary Category, with a different UI that doesn't need to update the post in case of new category 

== Description ==

This plugin adds radiobuttons near every category (even if you add a new category) so you can choose the primary category of your post **. Selecting a primary category and updating the post saves this data into a custom field with a meta key of "primary_category".

To display a list of all posts with a particular primary category, use the shortcode [primary-category name="CATEGORY NAME" post_type="POST TYPE"] where CATEGORY NAME is the name of the primary category you wish to display and POST TYPE is the custom post type name. If a name is not specified, the shortcode will default to all posts with "uncategorized" set as the primary category. images or post. 
	
== Installation ==


1. Upload the plugin files to the `/wp-content/plugins/` directory, or install the plugin through the WordPress plugins screen directly.
2. Activate the plugin through the `Plugins` screen in WordPress
3. See the categories tab in your post or custom post edit page. Set the radiobutton near your preferred category. 


== Frequently Asked Questions ==

 = How can I access the primary category data? =

A post's primary category is stored in the post meta under the key 'primary_category'.

 = What shortcode can I use to display posts with a particular primary category? =

`[primary-category name="CATEGORY NAME" post_type="POST TYPE"]`

== Screenshots ==

1. screenshot-1.png: New custom radiobutton for primary category 

== Changelog ==

= 1.0 =
* First version of the plugin

== Upgrade Notice ==
no upgrades

