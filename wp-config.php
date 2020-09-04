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
define( 'DB_NAME', 'test-wordpress_db' );

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
define( 'AUTH_KEY',         '3-ab|:V;z1abIUTOb-MN62v<!etV3vsYam4p:4Rje2@VZ2N7hk,mL&h,apiUbenN' );
define( 'SECURE_AUTH_KEY',  '-gQD:6`PltIWq8VD^K&CWd^QW!?N4}(sAZs@yKfn);E.]?5 pcMK/ .B$:^il*/]' );
define( 'LOGGED_IN_KEY',    '--8PkN)Fe_k,:&%Ld[#8|K2<{Y1q=)/w/Z4`cZ{a,g1e[th5tXK;;.g+]d[_t,2!' );
define( 'NONCE_KEY',        'Z<_=eoa$0*7i`0%bBgZO.4zb~bpvjQbIbkO/:pn-X|df}Y4*oe0?4xt``c[F:cz`' );
define( 'AUTH_SALT',        '5}k`+b.WK#M_io@K2uCU|P#T$%*(]W)2gtuE;aJgQW*&@@pE,I.as%)-^A*}T>rL' );
define( 'SECURE_AUTH_SALT', '6M[}M7 :/6nc(?^0`jjeEP#O+[o7N16 :l7Tik0MKoEj=X/+LN/9#`ot-8P,miv@' );
define( 'LOGGED_IN_SALT',   'QB6L:HL/oXFH8K[:SB!G?2q?h;]#Gj474Rfb&w+7*~CiMwRAjk<J{(T-Y9=B*45n' );
define( 'NONCE_SALT',       'T<@pN!ho/zyg)&HhEAig&PmLyHW!NxHPS%co]i@wFS2xX.9vC2mi&7@dJnh5A$z$' );

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
