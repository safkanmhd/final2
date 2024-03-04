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
define( 'DB_NAME', 'final2' );

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
define( 'AUTH_KEY',         '-x}mOlW5NUjpU)q6{3lx:QSn]hei:G:*o)z8)Y;7sz5.iAC-g9L+VT{0M(t.fU{%' );
define( 'SECURE_AUTH_KEY',  'q F]b):D#)UwdDjM`RaQ]R#p]ED=0~>x3M09BA,Px6~2Jz=~vBVxv@]X^94#?Zh6' );
define( 'LOGGED_IN_KEY',    '&@v%=1yFQ~DKfX*(d,B6gPWu.LqrH=^1CVg%:qoMebrv4Z:UfsIEj@b|pQQL`119' );
define( 'NONCE_KEY',        'eL!Suz=Z94)G$*I{c[4h]R}8rZkgHFac^QbKbl1h&9kp4*F=J68cC]+I8sJnc?.C' );
define( 'AUTH_SALT',        '&P7iPTuZ5BDf12FG@tTi9JEhluKC/C F8z]{bD>o/<10#s}dzib=9M=f~XGH{CjF' );
define( 'SECURE_AUTH_SALT', 'l@68g44)Zxq&%+om,SvX?PO<puP8M3%XaWX/t(1:=1lFp%{x@:MjU*R*M >2Y;;@' );
define( 'LOGGED_IN_SALT',   'i+Ek% 3Xwd0GMnUJT]V~vD,~;O?lSX<,3db_p.-eRli2s|zUCU+gID[%b8`ISiXR' );
define( 'NONCE_SALT',       'f7}{4H3DiJjUd/qPb/}_TFR8Q!*Ulee>RB},;$<0#[QO7Z}E04$8Sou,<rQ|@[0;' );

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
