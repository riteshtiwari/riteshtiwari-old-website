<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'dbuserritesh');

/** MySQL database username */
define('DB_USER', 'dbuserritesh');

/** MySQL database password */
define('DB_PASSWORD', 'Pass@2014#');

/** MySQL hostname */
define('DB_HOST', 'dbuserritesh.db.12047013.hostedresource.com');

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
define('AUTH_KEY',         'GWg?y|vvFtekt?inzAq1NGl>a%V@*aXwQ9`CfQ7?P)YoA=~[:LtW/qgfVNc-5@eH');
define('SECURE_AUTH_KEY',  'C~V;T%1KgN`4-=.>/.4!#[+gTFHw#2v`S_Jf?/-(cDRO9mX3n@RNbw^$kbEj[MnE');
define('LOGGED_IN_KEY',    'C8;Y4kE:QiLOR+`L3h!_Tz7Y)y3qV%x(j|}xRYl-~63 D>v8A2WmL7WveH#ge^f~');
define('NONCE_KEY',        '?ZrOLs`8^hAbtW9A@5LX}%@~PRy1@@%V(7vcfTo:n-tHoJVw+)Z0]hx}&~m30]!r');
define('AUTH_SALT',        'TaQu6-0:7qIiKqW`7Um@ZYCfn7r1ZN~wBRt*B.z#3VjgTdFVF011iU6T!YfU9cm8');
define('SECURE_AUTH_SALT', '<w&jg{t2`NcE_rhBR7Q~+pn#bP4is[fp2_dN+$7U%A[C~ogTdho4l7[To|$5ySK]');
define('LOGGED_IN_SALT',   'BcF77A5:y`/x6?Q6:{8.oTsQgU|]).qz}_r/rN-2C *CtYR^&_c_UK1(zy65<;I#');
define('NONCE_SALT',       'CU8[^]{H;cXv+jX=S5O]%{R.`H-3m)js2:Z42{6@sq$$c}O7#C3Ji?6^D6,Ip!Qg');

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
