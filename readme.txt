=== Spaces Media Editor ===
Contributors: neverything
Tags: frontend editor, vuejs, rest api, media
Requires at least: 5.3
Tested up to: 5.3
Stable tag: 0.2.0
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

A frontend editor to create media items in the Spaces media space.

== Description ==

tbd

== Installation ==

This section describes how to install the plugin and get it working.

1. Upload `spaces-media-editor/` to the `/wp-content/plugins/` directory
1. Activate the plugin through the 'Plugins' menu in WordPress

== Changelog ==

= 0.2.0 =
* Added vue.js and build process based on https://github.com/tareq1988/vue-wp-starter
* For now sticking with a custom build, before https://github.com/dol-lab/spaces/issues/53 is resolved
* Added `api.php` for future REST API enhancements.
* Introduced `shortcode.php` to render the Vue.js App
* Tweaked `webpack.config.js` by removing the admin facing stuff

= 0.1.0 =
* Initial version, still work in progress and not suitable for production.


