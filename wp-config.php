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
define( 'DB_NAME', 'wpdatabase' );

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
define( 'AUTH_KEY',         'F8I=@,7=4?-|<uJ(H,/*0JK2H9X8JMte#+X+Z$3|nWs+i*V@H`azMhZnD:PL9r6R' );
define( 'SECURE_AUTH_KEY',  'xs+6EDmvBu[kr]+B;0TR^)gE=n=/r:/(,PR7~#E%zReG18 ^L5Ve ~I8L/e5_5a:' );
define( 'LOGGED_IN_KEY',    '~1x-4/|QzP.8gO{#[iB`u~r4sNK@5H[^{RaH1~L Je7l+#<qXWm~ygQ<qJ.TT,bG' );
define( 'NONCE_KEY',        '*yK;%=8[T&,ln<},0&_RRh]8[(Nd>lsVNz;l-04MbFq4;)2vOe]mWKxx=d=DP#)&' );
define( 'AUTH_SALT',        'FSQY.u~*}r`q1swe0mdDLJd9W6f/fKd@Z|Yzr$OAOR5ouUAlK>*,_IGzy16{E]0M' );
define( 'SECURE_AUTH_SALT', 'r0^co8Ehi7LAo2<|i3~|:^O]^>qPR/w}0oyy:#X6s#VpG0({EOIgV*{W0/&aBF4K' );
define( 'LOGGED_IN_SALT',   '*{X?*y4lcgT)1x(7P}0K[1,yz$C_o}RIl~0zcLMdphK+G_[k4U%v3OBSzi:^.Xij' );
define( 'NONCE_SALT',       'WDPq/LZrY}7WDiByQv?#VT RW <F9N|}F{g/Q2Cq]#+^%8$h |!njQof57a?) 53' );

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
