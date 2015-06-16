<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
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
define('AUTH_KEY',         '=uAS}PzeUP<J(+MDSB5Ia.-EPwpOup|#D!D_*{{L|xw-$7q.K}.|$zju;ZiApwn5');
define('SECURE_AUTH_KEY',  '@FF:z]Z-7m^+Z4xHjVp7>P8?7VpqsjAVQ:3,hq+cG>$kHh0<9L}KvB QdY{!-c6J');
define('LOGGED_IN_KEY',    'u-$zv|3{M+mKvXye;HQsM-*%iyEdl3&tmE$b=1hY9/@q}VdQ<ROKG%]_=)C;ffku');
define('NONCE_KEY',        '7.jl~:Kyjol$S?cz,iTB&)7;+A[9Xg^oR`~}>#>15W`S;cF/wYO]B94|o-sd?^qB');
define('AUTH_SALT',        'N)=JOy1kLi|?(|R:KEnJhDTW6j)$sX<UG8jqe4fBLdevlrhEg%=j-5wyFAw[x53z');
define('SECURE_AUTH_SALT', ']]Hxc@6;2VTq(yUq/?mU-CW@pt5YR^ SM:<z?FT4W4`FO!O(U0/#@1,<gaE,c +u');
define('LOGGED_IN_SALT',   'od-uux}+m-aiu[pg/pJ5S43` uW*hOLXlj1d|aeM/xO-sA?HpHUd(=IY{Ge[|a5q');
define('NONCE_SALT',       '9|-wiTGoK)4e5F5VT-9w6YW3@7IoOEyh+(g!9pt>J=uGqUXyW8m}DG>dS42evt{}');

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
