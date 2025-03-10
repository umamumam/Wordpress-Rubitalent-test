<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'rubitalent' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}



/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'mv1fzRS12XmaNFBEd7gEhNaxN5XitroOM8aZFiiHewzHUyrlSkwDFUpLdSGAS90c' );
define( 'SECURE_AUTH_KEY',  'KGZMjKVpqcWqq8n0MK7SsZQgnDku33F3Gl7kchmx8dE5bcvQeEW5DxnoiPzq4zqg' );
define( 'LOGGED_IN_KEY',    'eM4huQwHgq9qHeoziCTmnQsa7e5SsKAeBu0Hg1PRWzCSmE0SpmxKaEmJgfumk3t7' );
define( 'NONCE_KEY',        'emjT69whO0ScTQ3PH3l7pxQkSudEaFBR1xwng26A7mAVyeX0AnxOZYv6zWC5rBbq' );
define( 'AUTH_SALT',        'EOHfsXq0y4hZCvA1i62R3DhwhOnTFYbB7I0HxSaGVYwAUaQVSnQxHm9I3ujpkDt2' );
define( 'SECURE_AUTH_SALT', 'i5t7DifuFyrXKHLx4YAdHRPHQ72bmHrr7hcEAjBCK76farSyJjHAMhzPe5ki3Is1' );
define( 'LOGGED_IN_SALT',   '09ErAaXi0El7grAqYI19ocvRAk8wdQnlZfGdokopBJjUl5320d6WgKOq0FGHxR0o' );
define( 'NONCE_SALT',       '2qHsv0BZo88m0Zol4eDRvfNuTud7d0zLOCFUZ4VziMm5N0JxFf75LtMoc3vsZKtj' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
