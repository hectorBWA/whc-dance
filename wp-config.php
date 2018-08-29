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
define('DB_NAME', 'whc-dance_db');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'zLM>_:382m*M{[rOC%PO_ho-8>X5izrg_OQ@)+4q41pUto=J):!j?x6?d#bAm`Q1');
define('SECURE_AUTH_KEY',  '3cT{2AC[iFHX7%KD[hnWPF*(B]w:YTBe%UcJdzySwS(>dcdup+FC2:KK7$iiFEbT');
define('LOGGED_IN_KEY',    'uo69F_,DwVej26o)?CGunr,XO&>vS m!bmS%.Y!;sG#gReTNX8p_:S&|kCKs@p]V');
define('NONCE_KEY',        'VTy0muM8_i-pU>?)f~x!BJ,~7q>+qf-U+9t{9B8JgK6ck5rI?_NZlu@%nuY7+5=s');
define('AUTH_SALT',        's)`H-*NhBM;mW?6P}p%^f~[(LGN.M207bFsj]R2d%Nk48 Qno2c*:~562BW{Ugc,');
define('SECURE_AUTH_SALT', 'jRy4u69?JO8RHLhOv&>TS3oy/2uzsg>_d_L]+|e=-DpsfUX&..&Pcy6dc4|VdAwb');
define('LOGGED_IN_SALT',   'nVNe!Ep/iO|s3PD;pX ZMUmxyX}P*FWAeB-x,9wAGRL<.w9olx;55mUBL|wJ[(0#');
define('NONCE_SALT',       'hU>rq3e1m;}`f6l7OvY2~]ghrLjaXHZ4O@P?#,[wp807k@#~Z})Z]+NqX8RX~yOI');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
