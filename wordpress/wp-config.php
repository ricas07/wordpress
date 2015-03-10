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
define('DB_NAME', 'ricas07wordpres');


/** MySQL database username */
define('DB_USER', 'ricas07wordpres');


/** MySQL database password */
define('DB_PASSWORD', 'Player007!');


/** MySQL hostname */
define('DB_HOST', 'ricas07wordpres.db.9439016.hostedresource.com');


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
define('AUTH_KEY',         ' Z|*vZ^|`z6~O}pIl @X)uVG(@snSI_8Og*(uVL+!t0K0Qt%!jbc1pnwm9j8B&?Y');

define('SECURE_AUTH_KEY',  'Qrpjt4&8*dve/nD1-SWMW/>e2C+gB$A{aN92es7Cv!T9.IxbQTdvQ<GfYsL|e;e4');

define('LOGGED_IN_KEY',    '[+?(DQrO15i}#R%oi3R+)t<nPZN$[Z34X}ow$rjKs^f-+t8?#v?8zJN5Y N:_eC.');

define('NONCE_KEY',        '^b7=?3$k{j0ZJN!ab7%%s6+S~<|C}.)X/K#h,(D]hP;vaKfH7,AKslQN2D_9rjXB');

define('AUTH_SALT',        'DVDgFWS0eQn5D1jAMIUr]S[P(v>ya|+s;i$AMTmJKj253&4UVSZDOZptI-F7SL(E');

define('SECURE_AUTH_SALT', '%YX:-c8=w<qPlt(qoSscA&+eL|vlL}Py:slFHB+X#E{ONL|gsrQq^B45La(1)O%-');

define('LOGGED_IN_SALT',   'N4jv162||z;1RKG}15y03Om*Bt6/FPs@jyfN)xjQ4GAH)?r+5PkduGDLL9r<%,9z');

define('NONCE_SALT',       '!@wp46hZqXK@dw_yBXEQUJDc6u1f[J32!<&McJl,YIrlq-~Gg^;2#Se3|3#E0)]9');


/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';


/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

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
