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
define('DB_NAME', 'duongviet');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         ',<1>?H$hlp?n0|>|iJ?q2~/H+vjLJy%~Y-&4I&qx $(ZRpNu0p=H`<<D QGQW<F*');
define('SECURE_AUTH_KEY',  'x:,]TlN;e1s7duft&[,>df5x$lQ$F~7<gnd(iyX YUKcK+q0lG5+e+(U~fx=s8N<');
define('LOGGED_IN_KEY',    '8]FV..<KFRnI}DG3qk&5]w:q;~)v~+6=mE^W3.u^0*G^3CcBFcC1a;$5:R|UBU^Z');
define('NONCE_KEY',        '[>Wp9`A3S;E#&IwM>;OQl@#m6N|bO,)waS~R~*Tu{Yli04$J2jW]3ogP50?@x+&b');
define('AUTH_SALT',        '5yscRpgo|KBNl5Es^luG*l0Fm?_{R7wg#!s(u3|^):,jOUbO#a_$ RBlD{%XN9(^');
define('SECURE_AUTH_SALT', 'JQ0nw)7*oinF8 IA<LKVC+?+8q+O&x.zY2<}K7Q;=k5trT0NrFMVV-2dGi#hw v^');
define('LOGGED_IN_SALT',   '?1i<K`V^VhZm4U;O-!k|J_e)v6qIbQGm@(n](?LHx%VKR,xv<ZH)gr:`Hz+c4>~G');
define('NONCE_SALT',       '~AF5jU6V>h4%`)Ba;7z{sRU>Afr{xAEf#,/xt$*cD4$%kIbFJccJGPHzN*`r/C_&');

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
