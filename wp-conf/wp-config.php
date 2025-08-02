<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
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
define('WP_CACHE', true);
define( 'WPCACHEHOME', '/home/virtualki/255126/wp-content/plugins/wp-super-cache/' );
define( 'DB_NAME', 'adb378352_b5ad' );

/** Database username */
define( 'DB_USER', 'udb_c1659441b8' );

/** Database password */
define( 'DB_PASSWORD', '8bc71b416e43fae085fbe2a29f475c' );

/** Database hostname */
define( 'DB_HOST', 'mysql06.w3senator.beep.pl' );

/** Database charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'e305ad25ef0a942f1a57b6a60334420288cb9445');
define('SECURE_AUTH_KEY',  '4ab967f62b1bc1cdacef3e683c4e2f110d7f440b');
define('LOGGED_IN_KEY',    'b1d39fc7bbb264a03aa932ae1e361c4602755f54');
define('NONCE_KEY',        '354a97842517b7acf928a894a6ed646c62039653');
define('AUTH_SALT',        '2d19cc2c0c8428bdf8458005f63e59a474604f85');
define('SECURE_AUTH_SALT', '0cccefb19cd148611a71a50fb682607006d0588d');
define('LOGGED_IN_SALT',   '7f3d59f8669bdc0d082d9c75c312675e3c17ebca');
define('NONCE_SALT',       '040904ccf8f837d32fad74c4b8e872b414315301');

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

define('FTP_BASE', '/nowastrona.senator.com.pl/');
define('FTP_CONTENT_DIR', '/nowastrona.senator.com.pl/wp-content/');
define('FTP_PLUGIN_DIR', '/nowastrona.senator.com.pl/wp-content/plugins');
define('FTP_LANG_DIR', '/nowastrona.senator.com.pl/wp-content/languages');
/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
