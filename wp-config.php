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
define( 'AUTH_KEY',          '8Qt23Xnyu8)/eh0O7VbIg] x)4xW.{rwFl|I_xJ2UtBvwkEe]Zex%%Hp)XmG)@71' );
define( 'SECURE_AUTH_KEY',   ')Fwgk`p)BH%~*:.{zUXuX/gG>6T/d`oydy0K@i<l)n>-^F8@@<|!F8TC>3c[[Jp9' );
define( 'LOGGED_IN_KEY',     ';L;k^<;A`9!S>(Hi.!IzI+q~X2YFzD|4k|[_e-Y>4>Y=^}%w>kgc&SQl47-#cuAy' );
define( 'NONCE_KEY',         'Y8C3(g8I .c+u#Q54!BP3S<[h7]ZJA@``gys4@~Mt2 +6T`P98-YK|Ut aU*BFFn' );
define( 'AUTH_SALT',         'ssa/wj9;U)?*mh.?kT1%H@0`w=|Z=)2 %I;9c)UWCq9;u7fxX.O/fz1rCdCw^R|h' );
define( 'SECURE_AUTH_SALT',  'w?2ohuM7J4AcE.>/]B|bAlN+uwiXU4;)u+/y[wBkF}YVUB`PlpAFufP#_RH(Y dT' );
define( 'LOGGED_IN_SALT',    'NFNbKC&&!j8-HM*Wzswn>=8?-i8+6H}ar1eCNOg-0p(kf15@ #p2d=Bq:e*.R%8w' );
define( 'NONCE_SALT',        'kdwa]AVFd8{Ol&@pd=ymxO}aduj.+[K5-L@liR,]*o$G!4|v?25AyUso#(R{Hpp%' );
define( 'WP_CACHE_KEY_SALT', 'hu^AD%z7:zA8*Q;qA6|cHYvkQ:F^@z(=F%x-N/`nLY@:x0IE!MN_>zVfKtLCyy2t' );


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

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
