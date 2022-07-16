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
define( 'DB_NAME', 'nuevo_proyecto' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'admin' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '0$P0HM[]M(OV$]GOOR1(W2vr?CDUT,8X|UKvj.wD%o`%A~:VN>vB-`kjL7>b$}9j' );
define( 'SECURE_AUTH_KEY',  'a~;/abZRZs=Zdl51%9=#>nM&0D8jYr.fvip.W{M!xhduMwE!kWa.~P|oU/eN#2y#' );
define( 'LOGGED_IN_KEY',    '@T+e~u(bgZjTg8/ZfG5|LO_+&9t|hU$*X{;8f=HZ!t1Xz,Zhd=3b5n=YnH_31c>R' );
define( 'NONCE_KEY',        ')bOzj/%G,sx?joHsBbFLnfSDX.iqH?EL[KBe_tr)^,9^$5H|R:HF?R7IkV; )/pQ' );
define( 'AUTH_SALT',        ';Ml)u;8?c_r(y_1[xh}k=IRoc!M?w])%S~;;Nn`98(4a;N&uNMZKE&2rINv$+>X<' );
define( 'SECURE_AUTH_SALT', '_a}kFySFjoIC_/vINzG@t;^=%D$w*4@K}-[]haky4/m,8P+m323(h7,i9R?g]+Xs' );
define( 'LOGGED_IN_SALT',   '/EC=6@bM?(]JlG eJ@Eqh{ujcan^M3TyL:;C&4j9pGl@J]UI%?DY<aC6`H}x4E-,' );
define( 'NONCE_SALT',       '@=}~`URg$_+LQf@,T:z@DHrH.R.Aj@$`P.}e- QF+ANY>?f`O$C05JW x=%/@qz`' );

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
