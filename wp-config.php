<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'test');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'usbw');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'oQmbjf%r}OXte,z$VEb+ZEyGi|f)yGX<v+,rKvMB+3D9A(.2g^[smh<vAr?--THY');
define('SECURE_AUTH_KEY',  '0b<)CyI:1Ic7W;ex_QLW+lEEj|p0tvqpBs{&a#3p@h^H/#>Jm%#Qe3l7bzHO{U(!');
define('LOGGED_IN_KEY',    'Kvf[`!sG;LoGk:|v1up:&X2$qzE{&]hS.HA:Fz[5-&RwC1|(~enYs+QxZ[xC-Ii#');
define('NONCE_KEY',        'V<q]GbMd-+&m`!d`*#3+0!RJ|&56y|_6N+]l4V[+4|_x?b>):5yc*NY9RZ7rSXnt');
define('AUTH_SALT',        'mX71R_y/Z,C-FBtg%l>Iefq~l6SH{DsSO~a-lS= Y8J/-eg<p4dB)`.ZTgcF|G.V');
define('SECURE_AUTH_SALT', 'i6>ye-ya|U}w51Y5.X-]aT2y?cwN9[TkOb/Ad|iMA49O5ZFe$r4q,X|yZ?ImX+;3');
define('LOGGED_IN_SALT',   'n$Z3y2+Zn&d#qH+p2 cBPyxTOvsxY/{>(]g8p 9hZ/:NZ*r+[R$FD2CT7*u@OJ2|');
define('NONCE_SALT',       '!d{0bvUN8/NXtq $+.ylR)wH-O3%T%ot)93BJ*TwMZ|Y[~@tMk*~/+rq6HxA}cm%');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
