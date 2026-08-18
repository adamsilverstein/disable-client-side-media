<?php
/**
 * Plugin Name: Disable Client Side Media
 * Plugin URI:  https://github.com/adamsilverstein/disable-client-side-media
 * Description: Disables client-side media processing, so media uploads are processed on the server instead of in the browser.
 * Version:     1.0.1
 * Requires at least: 6.8
 * Requires PHP: 7.4
 * Author:      Adam Silverstein
 * Author URI:  https://profiles.wordpress.org/adamsilverstein/profile/
 * License:     GPL-2.0-or-later
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: disable-client-side-media
 *
 * @package DisableClientSideMedia
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

add_filter( 'wp_client_side_media_processing_enabled', '__return_false' );
