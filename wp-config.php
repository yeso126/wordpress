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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'p;vd0CHQtG@MyiTW.[4h>jmOG=i4-)jII5?!9]CifCH#7o,M=g~^oi+rEf%A3+!{');
define('SECURE_AUTH_KEY',  ': N{jP+u=e6&#enfk;+~{9z)&y]>Tx_Txc&&>VNqVf!1=8+Z[4&Z*.[-rJE7c4;T');
define('LOGGED_IN_KEY',    '3[;UA3rah%:L}2E+`TX7`)fTA3-u1EG,~o3Gw:B.~9kiU<.e-F?rLd^Cny|0+Dy_');
define('NONCE_KEY',        '/7;1=;LNH^6WG|8Q)vuv-.t-PVFkyMoV|(k|SO]ZQ)XPCFKP*1}rYUJ31F@,d;I3');
define('AUTH_SALT',        'L1o8T?O-R !c/K4Qz+-pEN@n]G<|u*S|vU2{@p%pC_@/;OXH&DmpO#!JyX6Q2{sf');
define('SECURE_AUTH_SALT', 'V;5< K`hSb4}+SkuNbKrA@_)HqZ,(r?W+9ShsK<EIy-t`T(/[w64@,Z{?:~u{mx!');
define('LOGGED_IN_SALT',   'E|uKu#ECi+~U/#eWh_cKgK`yc77F:3,.:rOY0H (D:eF9D /oM-w5anH5eMJ2gFI');
define('NONCE_SALT',       'ol z>`}}K0/L{FEL#qof|z+:hSHq1KY/cDq6BW,<y[=]H=lywz*vw@mFX}/`f#2o');

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
