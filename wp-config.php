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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'imgfy' );

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
define( 'AUTH_KEY',         '[vm?b)v4BU:g~XklsPBn4icFD{|g%!x(@FT-1#gjBN0[0m_jpch20t[{)NgQG0Na' );
define( 'SECURE_AUTH_KEY',  '})fu=/QVKu30sxPU94 h9PPLS8r)^pkZRiG(3ocyZ|}_u }[^g!`(4la4D^Cu9d<' );
define( 'LOGGED_IN_KEY',    ',q;)h-4o|^zgZ&(Ke)4@@D_8+(%3_(8s+r!LSN;F(^!~Cw2,8G{ib([Y&TQe||Q9' );
define( 'NONCE_KEY',        'vu:k0^|UC-k`$Br{n-xfhpu2:.9<1e+4X +>j+pM1IE*(2=m@?(:$p;F7k#3Bx$w' );
define( 'AUTH_SALT',        'Ch>jeHoX6M6e?YA25|jo7mXuX`[d)2P0ct9,}<5~h.LKQUKVaW|!d_-^dA7;4]_B' );
define( 'SECURE_AUTH_SALT', 'rLiic0L1/&li+XG,2;WAV1>F5P~Rh1y=Ny18@jG@VJ=+O^ox6DoN@Ot&cK#NmqM#' );
define( 'LOGGED_IN_SALT',   'D,p|Rgm=42RbY#=7s<(xR:|7df19w}TpF8H6 o#WJx$Yh:WY%;>8cdk>XbPa:Mir' );
define( 'NONCE_SALT',       '3J*=3RtVilYisw5At;|ElGbK^rcz/n.T|a(,fgOT?c+KF^!^,`DOSsHLW]<blNuh' );

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
