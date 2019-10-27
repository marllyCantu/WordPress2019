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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp-blog-2019' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'e5cd6f519f782392793db66a3f545447cc7da85872c54d66' );

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
define( 'AUTH_KEY',         'eMj}QO]Xr=mfJ0!|f=&(R-ro?G|wW6|25CH:}>:wpa[%tzsaWFoowdZk4D3kk=?a' );
define( 'SECURE_AUTH_KEY',  'G::e.XV0kk8OHCA1jn>zM-6TDO9plVe|RBu943)o1<$zk^[N^ze}6#t~/~8r{5ZF' );
define( 'LOGGED_IN_KEY',    '8>s RZB=Cd~xQ}myIgB+CFhz2KLl2.mc{qXGT:o0]r3j]^,Fe^UG =W]DMFSEL4;' );
define( 'NONCE_KEY',        'w=|t#>Z,?tSF1=WkiB*4J4T__dys8X33>8J z+vX=:a,`/FkdH_k6-IjXTI$]:h#' );
define( 'AUTH_SALT',        'z;$MMu #JSPJx6QD[K>oArA2a1GU)rQA6tjR26xQ|$J.#!Ahi}ph0^fFK%=1>V>F' );
define( 'SECURE_AUTH_SALT', 'rzOR}Tg*%^H.=[TFE4L!$ZwheG`{{w+!7~(U:J7ME+&TY?BVRJXcjT94St%NTwZA' );
define( 'LOGGED_IN_SALT',   'kENfidS:S]8WW|+$/X?P/l:yJ SCL<sj}Ipf&Z.BSuS~XG+dhReGMf5,me+.@c|-' );
define( 'NONCE_SALT',       'T|UC)LxBY{!~}{gZXKAWn%vE!<Z!~.[btUzs9b{AgcY[/q$m1H%~s]?SRam4vuYz' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
