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
define( 'AUTH_KEY',         'v-EwO*0yLFx._NmkPypc4{@TX<2E]4k|H]!T@;6u4NCAndePf]|TkER*Mye<&wh*' );
define( 'SECURE_AUTH_KEY',  '?kb?2 +T4FLb06-x@m,9@DXptgxlR,*sWSHQ^^n&P1f9zgo3H{PE!?6)|{IC!*o9' );
define( 'LOGGED_IN_KEY',    'H}$Fu3!;dt]]m~fFfi1A>`I`6n2C}R;Cz,3-471e:Fs?]W=[;M-|,}z3MXKh}UK|' );
define( 'NONCE_KEY',        '`2MU&cz(_:`)Wm,U<dg+MG1~!ZX.[t+=KkGYZcn+[)6bqL,&Ih_HsOO6h]?^)G^/' );
define( 'AUTH_SALT',        '6=[!8RwysJB9/5ivPV6z%i7w[KSRx^}3:+g&O8tm3}:,6 xb&?R1e!tJs{kZ%lSb' );
define( 'SECURE_AUTH_SALT', ';T;Uor]6g=<+&~1$Dt9/6,u9?h~,[Np7/ZH-E,*]Es$o@sJUf6Qm()H`BnW`][WD' );
define( 'LOGGED_IN_SALT',   'Ox{!,N7l-]V1st}SyR)gk?X|x~f5~lV:,~BP=>=5y!^SR732?,k#mm e : ~73BB' );
define( 'NONCE_SALT',       '3t~SZBUR(IA=TF[kv`m{|3WJ6 .fm7-7}Y#e`+j|a,S3;c*<~j(Fw9G9Gv2k(wAd' );

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
//define('FS_METHOD', 'direct');
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
