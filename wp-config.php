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
define('DB_NAME', 'aestonge');

/** MySQL database username */
define('DB_USER', 'aestonge');

/** MySQL database password */
define('DB_PASSWORD', '7f4b2Us##PAk');

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
define('AUTH_KEY',         'jr(uI].b/kl{^(POQIxVS$-E*BBZkptz^|]?;>808A1-yT[SN|N4xV|~V0?knFF$');
define('SECURE_AUTH_KEY',  'aTKauqlwkz92H(|jpNCb.Vvj <E@-ItSQn!2h[@~T|z.(f}UxiSy~xH-F8A68d+|');
define('LOGGED_IN_KEY',    '5bY@5M]J3%-6=2},pU*9+IjvGl7Lk#4Cy6{YDsu#|k,wLLC@9^Am<h7>%^+)aAkA');
define('NONCE_KEY',        'NbGds@7m^4grT?!)I;BzCzo#o=D^(_vAXvI!-OY6WZN`bQoeAd+N/$NvRsw=sNez');
define('AUTH_SALT',        '9?>pZkcI&t>-vXvG/W(8]?9f8Ho6.mp+n^LUK20$hT,E0j8$i}?8bjGK6b^G+,`@');
define('SECURE_AUTH_SALT', '&NlXz_/1Rwj-(+E_+MhO+ )09mJZ,G-@ZrsPh`5QlHbG>uRi_S[%GqH}fd1:X,ok');
define('LOGGED_IN_SALT',   'G=g{Ef.<T-0O_T2M;A-]D}f$rmL/jhQ!zL*$#^:?KyQeqJJONRH>mWO0&$}j.uE,');
define('NONCE_SALT',       'TtG(_/q5|onz;A%+ R7KuV[g}h$q$<p$0={DVGr)@X:z%TqLJT<puojAl= ~mKMM');

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
