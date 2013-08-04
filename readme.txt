=== Farticles ===
Contributors: numeeja
Donate link: http://cubecolour.co.uk/donate
Tags: fart, fartscroll, flatulence, gas, wind, cut the cheese, onion, cubecolour
Requires at least: 3.5
Tested up to: 3.6
Stable tag: 1.1.0
License: GPLv3

Give your WordPress site wind.

== Description ==

Farticles makes your WordPress site fart when a page is scrolled.

Now with added backend and login farts

**Important**

After installing, you will need to visit your general options page to set where you would like to fart.

-  Frontend Farts
-  Backend Farts
-  Login Farts

> Use with care as websites playing any kind of audio without a warning or permission from the user are generally obnoxious and annoying.

This plugin uses the fartscroll.js script from the onion

== Installation ==

1. Upload the 'Farticles' folder to the '/wp-content/plugins/' directory
1. Activate the plugin through the 'Plugins' menu in WordPress
1. Visit settings -> general and set where your would like your farts to appear

== Frequently Asked Questions ==

= Why doesn't it work? =

It does. You probably didn't notice the instruction that you need to visit your general options page to set where you would like to fart.

= What is fartscroll.js? =

The fartscroll.js script came from the [the onion](https://github.com/theonion/fartscroll.js/ "The Onion")
- [More info](http://theonion.github.io/fartscroll.js "The Onion")

= Whats with the base 64 stuff in the js file? =

That is the MP3 & ogg audio

= It doesn't work on my iPad =

The fartscroll.js script could probably be modified to replace the .scroll() function with a touchend event listener when an iPad is used. May have a look at doing this sometime. For now the plugin will not work on apple iDevices.

= The github page shows how to configure the number of pixels scrolled before a fart, so where are the settings? =

The value is set to 400px by default. I might add a config page for selecting a value for the interval

= I want my admin area and/or login page to fart as well =

This has been added in version 1.1.0

== Screenshots ==

1. Options are set in Settings -> General

== Changelog ==

= 1.1.0 =
* Section added to general settings to enable frontend, backend and login farts

= 1.0.1 =
* Prevent the plugin scripts being added on iPad/iPhone/iPod. As the .scroll() function is used, iDevices will not trigger the farts, but in some themes the plugin caused an white div to appear under the footer.

= 1.0.0 =
* Initial Version

== Upgrade Notice ==

= 1.1.0 =
Section added to general settings to enable frontend, backend and login farts

= 1.0.1 =
Minor display issue in iPad cleaned up (fartscroll.js does not support iPad anyway)