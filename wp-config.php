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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'jBUM3PWM' );

/** MySQL hostname */
define( 'DB_HOST', 'mysql-59973-0.cloudclusters.net' );

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
define( 'AUTH_KEY',         '?p][_`b;0?GM}6l9gOEd?froab{/.|]{!ux]l_8Bv.n;@n@/@P*~Xmt^*c~bz#7(' );
define( 'SECURE_AUTH_KEY',  'v)/[{OBG)WkpBACWSOsVH1`],=-J6mDk- 1{_G}e0(Z6LZ/dCrKz9YAdO/7#GLx%' );
define( 'LOGGED_IN_KEY',    '#s|&5 1^][?d>cd:Y4b=k&=kNJR;@yP<B(BS(U=W;MFmtx1J2NpPmtt#K4tj, W[' );
define( 'NONCE_KEY',        '/C9p,4Ds~O<lt%u5x?8n8[R;-GSuKhN*0,vjGfb_XkAFNk^BP]%62%u@pW<C,fzo' );
define( 'AUTH_SALT',        'ePml4jzyf/7E#1@ teOsBY+uj+0Q&HhsAPJtlCAYT=-2kHit@}O}J8GYN5a2og;4' );
define( 'SECURE_AUTH_SALT', 'tnYL!M4Xn(i*t&HdpL11FTrV+ASbUcc>^q8 Z6QpU_1)X]H)$Z%K,l]Jj.?WEL8r' );
define( 'LOGGED_IN_SALT',   'TkLyc^BhdC UkFlz&iq{)R0FE~=tO/g&`(*G)IaIaJql#.6II&}p{Fj.>)spT):6' );
define( 'NONCE_SALT',       'b.3*/;lQWCGTPI6z0h6d~-zN:a*xmo|15=8@_%l5_7/CNrtxu` k?N?5F|l%<} A' );

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
