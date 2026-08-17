# Disable Client Side Media

A single-purpose WordPress plugin that turns off client side media processing, so uploads are handled on the server instead of in the browser.

## What it does

```php
add_filter( 'wp_client_side_media_processing_enabled', '__return_false' );
```

That is the whole plugin. Activate it and media processing falls back to the server.

## Installation

1. Copy this directory into `wp-content/plugins/`.
2. Activate **Disable Client Side Media** from the Plugins screen.

Or install with WP-CLI:

```sh
wp plugin install https://github.com/adamsilverstein/disable-client-side-media/archive/refs/heads/main.zip --activate
```

## License

GPL-2.0-or-later
