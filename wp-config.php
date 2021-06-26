<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
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
define( 'DB_NAME', 'saturday_stuff' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '|~K/i,`{|%5W}DnW;.9eXo;lT/q=_,XTks.E.p6;@%h|%@V)AjRTdc7~[$n]eOC-' );
define( 'SECURE_AUTH_KEY',  'xYMgN;zJG?~A`7?]9BI!f;*4J=@WuDZC,EIo^81PbR.H-Y7w9A$QT/Qny/PLc4e?' );
define( 'LOGGED_IN_KEY',    'qTDVWY+LoNZa7m{!K_!c)XG8i!>VeFwm._,98`Y0DQ;FTz&dQ!&BE[xKM}%=+100' );
define( 'NONCE_KEY',        'CAv^v)j,mzS6?w #iq*TIg0),0N&ZMkU_|E`qgtNxF|`n=o&aCiXsF$+zI|AR<7U' );
define( 'AUTH_SALT',        'y=}nBdc]A.KEIBQp^W1,bDzUry~KAAaEc<A=sfH/|gO^;#OA$,Cgi+%3E]D,fV..' );
define( 'SECURE_AUTH_SALT', 'wZvSc]8%12Xl0*)K>4?J);Fd@_yyPOj2XM^(jz4Z0c?DMr^}WHDQ%BT+b1T4tN,X' );
define( 'LOGGED_IN_SALT',   'e,/P$m,,9$h0.NtH9w; ,.eq:=vf[,iF`a$y h/!|IsH?0?<pQVIf|,a7d@.E%#,' );
define( 'NONCE_SALT',       'UQ_Gx,~vbjaV)9w~Z-5rffMS *$r5Ua%GMGxi;/jQLHK.f!68#qG:.>G$^6Ifq+w' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
