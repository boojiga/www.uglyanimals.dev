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
define('DB_NAME', 'uglyanimDB1itoz');

/** MySQL database username */
define('DB_USER', 'uglyanimDB1itoz');

/** MySQL database password */
define('DB_PASSWORD', 'pM8Pb2BepH');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

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
define('AUTH_KEY',         'tqq;*E6ba*t2.H6a$BUFg,@BBfUyj>^F!G8dOsh[>NBgRsk[Lph#x6;SZ~w5_H9d');
define('SECURE_AUTH_KEY',  '}MPMqf,^Eg|!F4kgg,@F0VNrOtl[~D5ed!-8[SKp;TLqf.+EDia*q;]r3{QBgY$^I');
define('LOGGED_IN_KEY',    '5V_t5:S2XPujb.#PHma*+Ac^$B}RJnrn{$B3b8dV@o:|ONsz8[|Jl]_L6aSx-91WK');
define('NONCE_KEY',        'Ecb,Gok[~-88cY@s0[R;OHla.+9ChZ~tp:Pyq^IEji<*TEieBgY$r0>RQun{^F7c');
define('AUTH_SALT',        'ZZs!Shxat_1t_5L2HWlVl~hw|5w#9O1GWp${AP6LbqMbuXm$*;DP6LaqPeu.m*;E');
define('SECURE_AUTH_SALT', 'tt]bq^m$A$BQ7Mbqbq*2+]AP{ET6Lbq,4JYBQgzVo@gv|4,7McFUjyYn@0z}Bo~');
define('LOGGED_IN_SALT',   'D9Wl2IXqXm+bq^y{AQATeuWq*;u.2+]ETgv>7^0JY4NcJYn@n^B,3Mb7M$}Zo~k');
define('NONCE_SALT',       's8[8NgQkzgv,7z}CV8Ncr_1K:DShHWp*h+]-[CS4OdsOhwds_5ix{A.6Lb6MbIXq*');

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
define('WP_DEBUG', false);define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
