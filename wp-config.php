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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'webcoded_wplmset' );

/** MySQL database username */
define( 'DB_USER', 'webcoded_wplmset' );

/** MySQL database password */
define( 'DB_PASSWORD', '(ySp[9J772' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'o9blojjvpc9osollij5i3yvwqtnhwyncrynckdmnlqe1ngc0x0ztplnl0bfjgcbk' );
define( 'SECURE_AUTH_KEY',  '1bcfdc3g3bcgiv4bmi9bsat8actdqlay5jftae3rpc4r8eak9yixbgstgqailiv3' );
define( 'LOGGED_IN_KEY',    'x7k5v7fuwvia2s6ilp02oato4xk5orgn1bwbalsirxqxdkkpvbnzfsz7p8nun82x' );
define( 'NONCE_KEY',        'jwrwdokxzdummb0wtniaso9jfxsmuqvhsfigz1jjhzcpicugbb2h1m9h8zqacdzc' );
define( 'AUTH_SALT',        '6giju57yo7myzxfzovpxt61y2ryebcct7jb5evcw87yoyg0ojwrroom3fkhh6puz' );
define( 'SECURE_AUTH_SALT', '7zlu9no6m4v5oyfzsddpzbffgigcmzzb7xxc86isas0ntzskxn64ed9wtoe2wwby' );
define( 'LOGGED_IN_SALT',   'ggx5dnyw7lehr4alq9bmdeaia2ruzdyjxpuecbazwywkol8y1v3esxwqkegzkdaj' );
define( 'NONCE_SALT',       'v5v7rzqqhgvlrf5mqdvacb59kcrtzhj5safbvdz08yh6jwpsbdamqqgdh6r4de8h' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpsy_';

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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
