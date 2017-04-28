=== XdN List Pages ===
Contributors: BitingChaos
Author: Nicholas Caito
Donate link: http://xenomorph.net/
Tags: child, list, pages, menu, simple
Requires at least: 4.0
Tested up to: 4.7
Stable tag: 0.3.5
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

This lists the child pages of whatever page that you specify.

== Description ==

This plugin will list child objects.

== Installation ==

This section describes how to install the plugin and get it working.

e.g.

1. Upload the folder to your **/wp-content/plugins/** directory or install it through the WordPress "Add New" function under the Plugins menu.
2. Activate the plugin through the 'Plugins' menu in WordPress.
3. Add the shortcode to any one of your pages, posts, or widgets on your site.

> **Example Usage**
>
> You can use just the shortcode, or optionally tell it what page to list the child pages of.
>
> `[list_subpages]`
>
> `[list_subpages title="Menu"]`
>
> `[list_subpages parent="3"]`
>
> `[list_subpages depth="2"]`
>
> `[list_subpages parent="5" sort="desc"]`
>
> `[list_subpages parent="25" depth="4"]`
>

== Frequently Asked Questions ==

* None!

== Screenshots ==

* None!

== Changelog ==

= 0.3.5 =
* use own list title instead of the one WordPress adds
* no longer include <ul> formatting.

= 0.3.0 =
* changed 'post_parent' parameter to just 'parent'
* added sort parameter
* listed title parameter in examples
* streamlined value defaults
* improved html output

= 0.2.1 =
* updated php
* fixed spelling error

= 0.2.0 =
* added "depth" parameter
* updated php

= 0.1.0 =
* initial release

== Upgrade Notice ==

* None!
