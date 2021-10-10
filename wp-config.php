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
define( 'DB_NAME', 'wordpressdev' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define('AUTH_KEY',         'K+@HDpM4rz 7<*LpG6#WD;~-`|*+>5XU8`#u*3]PE/<[$vajCEIKybN7#h)fIiID');
define('SECURE_AUTH_KEY',  'w8mA%F|E5&CF{+dI?Oq4tuFr+{}WeEcJSfu`UZ|YVmmMzFDc&0SOYoLG(MqQGc/ ');
define('LOGGED_IN_KEY',    '(K+q(t4U/Jv8|UK9`Bu/-P=YZpd5O)^!m[|(_TLDBD0[20+|*W>6,`&R7sAH~%J!');
define('NONCE_KEY',        '=qoJGpk(P0=</L~MlHAj$mOJm,Gv_Q<~}T<-Y_M3+.~h$1LZr!5`R&>-X4c=t?lG');
define('AUTH_SALT',        '^9si8&Vv^}pC<7:TkFH.6<?0%]VV6nK%nCu-H}5/xI0^>%Zb@`j4~-9_RGIo$MD ');
define('SECURE_AUTH_SALT', '$)OxO(_H* -4>L>(PE!V-s2f||1%8VXBK=RS|l<2o4_yn,CBQ O}g2oI6aFm?q A');
define('LOGGED_IN_SALT',   '+l,!_^d[&(a.GFlXK`Yw586Uy-,35#5><;7{N5&-s<RG?x}cTu,AL9J; dqM02I|');
define('NONCE_SALT',       'K+cZy` vl2vjA700<N4 -*9zg+F{iZtc=$nDRJETSBYJ|ix+WD+HrQpNEsEoAZ1*');
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
 *
 * NOTE: No need for this; WP_ENVIRONMENT_TYPE set below will determine this.
 */
// define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */

if ( $_SERVER['HTTP_HOST'] === 'localhost' ) {
	define( 'WP_ENVIRONMENT_TYPE', 'development' );
}

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
