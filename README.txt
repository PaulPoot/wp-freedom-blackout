=== Plugin Name ===
Tags: blackout
Requires at least: 3.0.1
Tested up to: 4.7.5
Stable tag: 4.7.5
License: GPLv3
License URI: https://www.gnu.org/licenses/gpl-3.0.txt

Plugin that (partially) hides your website depending on the progress towards a goal.

== Description ==

This plugin was created for a campaign of Bits of Freedom. The plugin adds a black overlay to the bottom of your website.
The overlay can be customised by changing the values in the settings menu.

== Installation ==

This section describes how to install the plugin and get it working.

1. Download the plugin and upload it to the `/wp-content/plugins/` directory
1. Activate the plugin through the 'Plugins' menu in WordPress
1. Change the settings in the 'Settings > Freedom Blackout' menu in WordPress  

== Frequently Asked Questions ==

= What can I use this plugin for? =

Good question! This plugin was designed to fit a very specific usecase, namely to hide a website and make parts visible
depending on how many new benefactors sign up. To accomplish this, the settings would be changed manually.

You can use this plugin in the same way, or make changes to automate this process.

= I just want to hide a certain amount of my website. Can I use this plugin for that? =

You can! If you have a percentage, you can just enter 100 as the goal in the settings menu. You can enter how much % should be visible
in the progress field. For example, if you want to hide 70% of your page, you enter 30 / 100.

= Does this plugin affect the performance of my website in any way? =

Freedom Blackout should not affect the performance in a significant way. The plugin loads no javascript files or stylesheets.
The overlay is added by printing a div tag with some inline styles to the Wordpress page.

== Screenshots ==

1. This is the settings menu. Here you can change how much of the website is hidden and edit the message that is displayed.
2. This is how the homepage looks with the plugin activated and the percentage set to 42%. 

== Changelog ==

= 1.1 =
* Added more customisation.
* Changed how cover percentage is calculated.

= 1.0 =
* Initial version of Freedom Blackout.

== Upgrade Notice ==

= 1.0 =
First version.
