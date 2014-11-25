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
define('DB_NAME', 'embassy');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '_a[Z-j48nrd)H*>+UJ(5ORPO-$a?OsHK0w9jG:MDxOq{>M~|g ^)B!b8O5+@S9+^');
define('SECURE_AUTH_KEY',  '+.N|J;WCE:ik-zeDou,{5a-/qAHZ;8&xKc9N>k-2p$i2#Xz.IGLU_J&CL|/ADEXa');
define('LOGGED_IN_KEY',    '7]RPI|`:6!r2/|hX6,vxbOreq(n[2j3+e -v{S9!K-,(--yC+dxFNClMNgoG+=S:');
define('NONCE_KEY',        'c^kxPn7bJ_HGd-}*|@aY!g)! c!OTtp+o{*A#y9s4<h^0:hyf&8;bw:1&|e[Il!Z');
define('AUTH_SALT',        'QHkl5~d7otulFwKNP((Q/,ug5F{4-WX8x!ycWI=8R xK.Lno<@Qz0TEBCpM%-w3U');
define('SECURE_AUTH_SALT', 'LaI|Z}2jAH5wkOkk |biN8SnqdS>mc>sXojMHncM <-:|hX!zMt`a=L>T.^aUVMS');
define('LOGGED_IN_SALT',   ';i|)UvN-3vtweG+`5f+mRxKW A7Cgfl]cq.&im)+x3Wr6iPP;WeRdD3A[J5IF3=4');
define('NONCE_SALT',       '7i7put(6G(DYX UK}2`]]S3Z7kCgca)gtzUm<e1$Rq,%)0o3ph2#+@fa.!4/0I%*');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_embassy_';

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
