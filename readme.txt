=== Farticles ===
Contributors: numeeja
Donate link: http://cubecolour.co.uk/donate
Tags: fart, fartscroll, flatulence, gas, wind, cut the cheese, onion
Requires at least: 3.5
Tested up to: 3.8
Stable tag: 1.0.1
License: GPLv3

Give your WordPress site wind.

== Description ==

Farticles makes your WordPress site fart when a page is scrolled.

Use with care as websites playing any kind of audio without a warning or permission from the user are generally obnoxious and annoying.

This plugin uses the fartscroll.js script from the onion

== Installation ==

1. Upload the 'Farticles' folder to the '/wp-content/plugins/' directory
2. Activate the plugin through the 'Plugins' menu in WordPress

== Frequently Asked Questions ==

= What is fartscroll.js? =

The fartscroll.js script came from the onion:
https://github.com/theonion/fartscroll.js
More info at http://theonion.github.io/fartscroll.js

= Whats with the base 64 stuff in the js file? =

That is the MP3 & ogg audio

= It doesn't work on my iPad =

The fartscroll.js script could probably be modified to replace the .scroll() function with a touchend event listener when an iPad is used. May have a look at doing this sometime.

= The github page shows how to configure the number of pixels scrolled before a fart, so where are the settings? =

The value is set to 400px by default. I might add a config page for selecting a value for the interval

= I want my admin area and/or login page to fart as well =

These might be added as an option in a later version.

== Screenshots ==

= There are no Screenshots as there is no settings page yet and this plugin does not make any visual changes to a site =

== Changelog ==

= 1.0.1 =
* Prevent the plugin scripts being added on iPad/iPhone/iPod. As the .scroll() function is used, iDevices will not trigger the farts, but in some themes the plugin caused an white div to appear under the footer.

= 1.0.0 =
* Initial Version

== Upgrade Notice ==

= 1.0.1 =
Do not add the scripts on iPad/iPhone/iPod as fartscroll.js does not support these and can cause a minor display issue