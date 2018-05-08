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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'wordpress');

/** MySQL database password */
define('DB_PASSWORD', 'wordpress');

/** MySQL hostname */
define('DB_HOST', 'mysql');

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
define('AUTH_KEY',         'V8%xb^1_MY3kmU{%`!8yOzE#,Dei,sRR:F GNWaR4wPv& DMO*I#iz6zt#Kr6<^!');
define('SECURE_AUTH_KEY',  ':{,.nG<TX~=ulKNwS,2fU84,Ty-f2dd,5{RYb1h0tW+WyZ.sZsE>MfzN&USsp*uE');
define('LOGGED_IN_KEY',    'FQqzNyiMlI~)k=$ZESe&F(ZqHkd2|!zbyi/V`mKKzX4J+lcv&l4{NQ_L T[#*xG4');
define('NONCE_KEY',        '[=o2Ke,}sJ:#*hy!h~WwznO2dN%wMApw&E8p9,i=GOt$h 4buxRNOr?$CXzG&Y@G');
define('AUTH_SALT',        'PwO]SY?z8bBC}J,CX]sr;:9u`DDkW<Jl/( JUcjkB6k@}pdF9 O)7b@1,31:d0=Y');
define('SECURE_AUTH_SALT', '(*Z7Sg+U_?WuraW(NSJ4Caw35i!:6^+<8y>tvAm,FGbUi,,uC|%:=lT }G6oAELf');
define('LOGGED_IN_SALT',   'qrpYM]lHTrMmuFt?Xv|2=L~)~vxI/}4+;Xg&[n;|U==}_eYtg_`3v[iw#AQu!Zv.');
define('NONCE_SALT',       'h,.[*DzOKW3>VeQq{u>?_thp5pTXz`B2SVfWu?/D0Vr2]jw_uNEO8``zf6ScM&*0');

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
