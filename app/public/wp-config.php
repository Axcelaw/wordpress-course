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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

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


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}


define('AUTH_KEY',         '4tH51guUh2uqjFwXSyZuH16IulQJjvCltElQcXpobfPnZAf2YSaHKSmmKgRqq/2VtZ32iyT9N78wW8BHzC314w==');
define('SECURE_AUTH_KEY',  '58V1RjZz5WgY+fNwEpgc1aCPnlUsmCOQ5luSsCBSdYnkhvcgRmPgZuP20RkJB32VX2akygKoBDGc9LW5n7/ySg==');
define('LOGGED_IN_KEY',    'xdzi8HFuoNdw0Uspzhr5zkgbogoCI0TBye9UJyW01hkZfsFUbaIqPggHIsC8gtlZzxntwfsUv+rJnMwjFGiVIw==');
define('NONCE_KEY',        'O1WYVS7Ikk58W+vjA6c6O3Zy1YpU8sEfnP+reqTOTd1IzxwJy9lEcxJiejwxmBdfcbquK+JkjZZAzjAMzAQqdg==');
define('AUTH_SALT',        'N+a88EB5dRZ14ZrLDzKubXHSMb1jT/q+3gGIRC1GRGzmkK+4vZIeKVNFfZ3CTsVNI04e7BNbAvwmsh7rw2JBYQ==');
define('SECURE_AUTH_SALT', 'iD5P40UrPmHGkeIkVoctFkyg9sLJ5lBDfLLbQxWWte1QF5hOJaVNdXwxo3HS+CHe1qn4tOnpJBNwVBmoXhJ5cQ==');
define('LOGGED_IN_SALT',   'ZzLzr+eK+QTz9x0l3N20Xh8OTOMq1PIEu082GbT+KeLV3BALOMUskGbHOWl4Yxaz4YRjAb4H48XUvl4vYuXACA==');
define('NONCE_SALT',       'tLYvsqdaBYMhAxy1fgHmB0S4fme5yhgEDd/R949IoH7/w2CexfeG8SFeuEcOvxNmoj7gPf8QzGFcLQda2mNg2Q==');
define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
