=== Disable Client Side Media ===
Contributors: adamsilverstein
Tags: media, uploads, performance, wasm
Requires at least: 6.8
Tested up to: 7.1
Stable tag: 1.0.1
Requires PHP: 7.4
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Disables client-side media processing, so media uploads are processed on the server instead of in the browser.

== Description ==

WordPress can process media uploads in the browser, resizing and compressing images on your own device before they are sent to the server. This plugin turns that off, so uploads fall back to the traditional server-side path.

There is nothing to configure - activate the plugin and client-side media processing is off. It is a single filter:

`add_filter( 'wp_client_side_media_processing_enabled', '__return_false' );`

Useful when you want to compare server-side and client-side upload behavior, or when a site needs the server-side path for consistency.

== Installation ==

1. Upload the plugin files to the `/wp-content/plugins/disable-client-side-media` directory, or install the plugin through the WordPress plugins screen directly.
2. Activate the plugin through the "Plugins" screen in WordPress.

== Frequently Asked Questions ==

= Are there any settings? =

No. Activating the plugin disables client-side media processing; deactivating it restores the default behavior.

= Does this change existing media? =

No. It only affects how new uploads are processed.

== Changelog ==

= 1.0.1 =
* Add plugin banner and icon assets for the plugin directory.

= 1.0.0 =
* Initial release.
