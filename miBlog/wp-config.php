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
//e5cd6f519f782392793db66a3f545447cc7da85872c54d66
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
define( 'AUTH_KEY',         'KAi>A3vdP[V?k8Bp7yPCG/-K+a8;O(<%FK1<3o<v?<YUGr,CqWUYiotUPD7{@r=)' );
define( 'SECURE_AUTH_KEY',  'u^I= X-2aRKJ=eb[6rJ{%o&SELUovgy-)P_l-Ki!Y@b.XZJbGN.@@}Ot6eLu$3TV' );
define( 'LOGGED_IN_KEY',    ':c._oaJRkJo*Iu#~/1TTf@2s0 kaxny<Tz<sly0IpR5G?_g@<}d6MTim]mZ.>:&/' );
define( 'NONCE_KEY',        'EAE(F7KcQ)J[I =KXJ{N]O5Hce)|q_@nILG+E8]W*n-Cu;n|WkIkor*7_gdq[ff/' );
define( 'AUTH_SALT',        '7c#:|m8KLW%wQrgJYCd:[ssr`1;&O};u, uoV0ywf##Cf^},oorG7IzBLE_%P5rg' );
define( 'SECURE_AUTH_SALT', 'V)-%_#WFu$(bF?6[HpraCS/ngUCZQdH;!LU!D|>8>:m_#Mn.Gm/&&h?6]R~|H;`c' );
define( 'LOGGED_IN_SALT',   '3A<iLwUA!h4uFc[s70(+YSJ9i2=xD-BEt~.cBU}<G1C:(9v9|C:2En1W=svt9?f@' );
define( 'NONCE_SALT',       ']*/?TAP,eJDj6CBHG!`13rL1^vaam/v2-)?bI}[+1bUwdnWS*FBl@kjmN<aA.h-#' );

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
