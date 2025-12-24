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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp_latihan' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
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
define( 'AUTH_KEY',         'bRc4UBDcEE:W*%agvg.Zsu_]{31g?G/O.&9FyX/)PAX[^N;<`-uLV5[P6[tR:gY%' );
define( 'SECURE_AUTH_KEY',  'W3= 3wmStv{AR}^|#r;*u`:Z*Zaq%56Hl?m582KhAK@:v?#8o%99Lt$v$O^w#$+M' );
define( 'LOGGED_IN_KEY',    'm8 bizgfg!qabIkxo`<9%etcCT<VKFM4r{/(UxOM08XR6a$Uo6oJ.Wg(4<iJxqC^' );
define( 'NONCE_KEY',        'K]7BExd<1^mYXtVI;j?@>@Gz&keby*^[b%!Oln6)4T/R/=;3=m9k{t1uJ9ac`b(s' );
define( 'AUTH_SALT',        'G_fO|UU#(n3(3m##L3f/|c>gMKN%,(,TU#IeqmV8|rYb7g&PJE6M]<FLk6%wzvF$' );
define( 'SECURE_AUTH_SALT', '!s)[h2by/Kh_78bB(RfPecevVda&Z6B~HX(uv%q;yf.c}FT5FWLbm2_Y-v%M0OXH' );
define( 'LOGGED_IN_SALT',   'nxP<gQ?zj?6QLX)O`)P x1&|Sv[3T6M%lh[C_J:*^r8Akk.AI?hh$Dct|K]Y%(1e' );
define( 'NONCE_SALT',       'lB 1VV8;}^BQglMp;Jc*Lq5Z]&)V/{UNPh#vx?3aPEUA9?/PY-GupEuu Rv,4@)5' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
