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
define('DB_NAME', 'wp');

/** MySQL database username */
define('DB_USER', 'wp');

/** MySQL database password */
define('DB_PASSWORD', 'wp');

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
define('AUTH_KEY',         '9;O<:@tc#D?=diJLc)qIJh7}c&O%tyW$T_zOZgOhtO~D8q->t%f~VUyqu&~v/06$');
define('SECURE_AUTH_KEY',  '(mt>Ckp/VTGCqV27UqFE>O)yXtzcK9603J/loZvuDZ^c!hSR`Hxl>_-C7e6I}U,v');
define('LOGGED_IN_KEY',    'fJ`(O.2Y@0=cl|ZC8=($[b|$2KnH)dmU1fa9r4^+AtE2VkkVkAeGE|.C4#9`Q%+y');
define('NONCE_KEY',        'm(!j]RvTXZ#v:GbHVO]@X IYC88b@)#~UEi#3i~.GoIanb?;i?u_M6f4ce_/Um;,');
define('AUTH_SALT',        'm9(;vZ}%0^~XDRb[(Va?sJ+[?.Q67E2bxf]MNcm6yM4U!> l/_7P>8k< (+ubzLD');
define('SECURE_AUTH_SALT', 'FrQVJxBMVy)7?z,uxArv!4zJQyZm&U>3l}^x+-/Z@V]h;}gP]3dc qim<i#f:v{p');
define('LOGGED_IN_SALT',   '|lbVpPzBQVRc994h~1&Fv3Ic9E|Z& Plc{$B$EqQng sRP,Aa@/c]^~RQYC9uu=|');
define('NONCE_SALT',       'CcZvRC3-8+4y8!u3qTd6?D`M!li D51z Y0UYhuIg! sX /?V=E2t8G#bf1,%$4Q');

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
