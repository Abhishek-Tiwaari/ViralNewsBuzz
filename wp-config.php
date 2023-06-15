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
define( 'DB_NAME', 'ViralNewsBuzzz' );

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
define( 'AUTH_KEY',         ':_6wNn#suSCbrG0; tG?OT/_1R@I7WfY^,hZ<OMZf:+G[?2fVYv%uP:NY2[|$F~#' );
define( 'SECURE_AUTH_KEY',  'L 2G.>k<<N!=yvJ#&u*!{2yS4SnzwEt32)Wy7I+S>wfzH(&/w%HX^R1e<s)^MNet' );
define( 'LOGGED_IN_KEY',    'tQ!rM9SMn&n !K|q~0GH>nUNr;oLplksz`)vqqSDRd,d{xp3.V$BGC2o:Fpz34op' );
define( 'NONCE_KEY',        'U%V+IzV|IDwto6~8C:`.&l.CRE; TMD}jcvX^~> :@w<aC9e-~`-@(p9u`tL#*&L' );
define( 'AUTH_SALT',        '%Z?.QAjoR.Wm3dntgm.{CmaFSgA9>Ry:<RJ.ey:{Q!5<!Q0LQM%Ac&-e?DI!c/R<' );
define( 'SECURE_AUTH_SALT', 'X~~aA6}`tPWre^9SQhK9Acch(aHr>1ldj~ ~5V|ABwnsz sCv)m/!y$uj0)[>w9K' );
define( 'LOGGED_IN_SALT',   '`Q];h2aMbDb/nm-/W^%0Rpd:[4`q,vaNm>2na{k8%o_5c}!Dr,(pu(pwiLlBzkX/' );
define( 'NONCE_SALT',       '=Erc$3+8s.B4I(LE#,.CPd-*-3JV%<K;w#.QdyA_#3__xD#,H@W!-{Bsg#0CG$O2' );

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
