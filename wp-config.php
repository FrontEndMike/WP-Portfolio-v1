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
define('DB_NAME', 'frontendDBku87a');

/** MySQL database username */
define('DB_USER', 'frontendDBku87a');

/** MySQL database password */
define('DB_PASSWORD', 'ZYyed50jBB');

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
define('AUTH_KEY',         'H]TD;*paL6HN8[zgRC}wgR8[zkV5|whRdO8[sdO5|whS@nYJ4^rcF0!r@oYJ4zkVG');
define('SECURE_AUTH_KEY',  '6mZS[dZ#~W[|SK_WO+xL_~og7rk4}g80dV}|c[|ZR[3{jb<U{,bT^YQ,^M,$QM6;');
define('LOGGED_IN_KEY',    'y,YU>fY,^UN^RJ@vN+P#*WI+TL*uIAuL7qjA3_-sH-SKL4zRJzNJ!NK@Vb3jb3{f');
define('NONCE_KEY',        'E^7{$nteK5#xhO2_teL9]zkVF}@oYC[zkVG0!kVhRC:@oV9[-lSC:~,vfQB<yjM7J');
define('AUTH_SALT',        '>V0kC4kc0>j6ib.$Q$UM$uU^yIBu_i5;eP.ia]+a;#WI+bT<R|@d0_RK[dO~wV[');
define('SECURE_AUTH_SALT', '8N[@yMEum3{qE6jY{,j>YQ,92le;*S2]eP.xW]yLExXk81kd|~S1[WK~wV_-KDwn');
define('LOGGED_IN_SALT',   'Ib7,W9_pS5xP2+eD#pH]qT]taZC|dG|oR[sS5~V8-dK:w,nQ7^cF@gJ>rU}vR8!kN');
define('NONCE_SALT',       's0sC[sK#sV8_vYB,rU0nU7^Q4^jN@gJ0zA.bE{nQ3qUybI{nF>rYW9xaD*mP#qL2');

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
