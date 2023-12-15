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
define( 'DB_NAME', 'db_wordpress' );

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
define( 'AUTH_KEY',         'vt$h#wZ20OyEc1Dd:+FA96GOck$Go8n1QUFPdSlEX:R5?H~ SjORX?qR&^o#jmP]' );
define( 'SECURE_AUTH_KEY',  '#+P,KoLN(vyPmtaNzk4 :?Yl.AL/87[>7hXE^LU)VPH^3C-gIC_E_u).`k$5.#rq' );
define( 'LOGGED_IN_KEY',    ',`E+{hT-f{^g!iX#km5*;D,U;WGZf=7lQ+=u6;xTHcQI]FTmX$;!kMq?&ZuydWM>' );
define( 'NONCE_KEY',        ' sZ~MDlY$)txP8^Yz%g6WI6bb$<fPaF$M#H*`jDD;$eisw72S`ro+Dgg%@S;!oxS' );
define( 'AUTH_SALT',        'jGR,yT1h95|i<y;)AZh4-Yd!-d/uRG9Ce3PP|9H5cw:L-H}/i1G18}nR~%.W+iB#' );
define( 'SECURE_AUTH_SALT', '.i&oSxHK@H;+a2j$j%9ZRb`@;^_u_XQz$9lR=<8Qw.t:nO]n$UmSaMr_%m%Dsn +' );
define( 'LOGGED_IN_SALT',   'i`]~{0gzwv0urrp(JBj-evmRe1Z*&).jX5=hGVJ*c?Ip!1HNb}z|&p5-ANB*b>& ' );
define( 'NONCE_SALT',       '%@Z4Ey$ds^:w-TXq]Akom`9`Pj5[D a6Z6CVxEo:kU&u*lIbz++h&^x Tx66{+U~' );

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
