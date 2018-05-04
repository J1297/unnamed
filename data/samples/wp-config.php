<?php

// BEGIN iThemes Security - Diese Zeile nicht verändern oder entfernen
// iThemes Security Config Details: 2
define('DISALLOW_FILE_EDIT', true); // Datei-Editor deaktivieren - Sicherheit > Einstellungen > WordPress-Optimierungen > Datei-Editor
// END iThemes Security - Diese Zeile nicht verändern oder entfernen

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
 * @link    https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('WP_CACHE', true);
define('WPCACHEHOME', '/var/www/app/wp-content/plugins/wp-super-cache/');
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
define('AUTH_KEY', '^ZONpF2)mYhendYB,b<;b|?vyM#fk<C(GzXZ{~CeQ2h{e(y|_Yo)z.F4dyUV h4q');
define('SECURE_AUTH_KEY', '9PjgA<J&&.M<wL!]9o^h01h7Qn`(U]bugL/ED.3:= oC?mN`^ft5P{w`?[{oEW,t');
define('LOGGED_IN_KEY', '<Fnv>O/[m^=C3pkg-euesE0=8dNG`lS<a 5]aW3TX=f)>-1>H|IN[vHV%Hc?weru');
define('NONCE_KEY', 'F9:LO[PfJv-?^HkLUH+.Ak8vpeP1,*=%8@s)qkkFAhA9ha|QW6jObc;vs1#P#X#a');
define('AUTH_SALT', '];)/KHtbkp)|u2AiPW!7pM,odE8E!hfFXF[|FQ$zd7xteZKF/[z21q(A<3s$+lbJ');
define('SECURE_AUTH_SALT', 'Z,rJ7_9C8P57/;V#Rw47sVEWGF-?17bpljt9IOkKvu.(%xKwZb,YF!b6R$CpD5~F');
define('LOGGED_IN_SALT', '+%wNV)hAFZHRkskj`5/=*6=X1x^SZ1 )X+(;&[`0&keG-~5W:[Y!B=y 66R8^LK7');
define('NONCE_SALT', '_MbjY <96V8 m[lG+_d+M3Y^SfZ0w.B@9:Z6F02qK3{l1CEZ9k<2o2=BA]fN/eF,');

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
$devEnv = getenv('DEVELOPMENT') ? true : false;
define('WP_DEBUG', $devEnv);
error_reporting($devEnv ? E_ALL : 0);
ini_set('display_errors', intval($devEnv));

/** Absolute path to the WordPress directory. */
if( ! defined('ABSPATH')){
    define('ABSPATH', dirname(__FILE__) . '/');
}

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
