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
define('DB_NAME', 'bridge');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '/XcI;K:z?+`p(ZO.UtK6HO=a>b5GH/)50ykB3j!q~Pg>r=keh<Oj~0{_>W??vbs@');
define('SECURE_AUTH_KEY',  'B3YY)wS;|vMVw6m5TZWOoNz*a;2T@sU{lveRpF~u0=)P@70Y+1m?jqn#w3s*]8(^');
define('LOGGED_IN_KEY',    'P)lxN#d,+U>4@OE%YCiTqqVAj0c^y<Wr{BotgX6qb6}l46u]Hyp$cNU8!6zp`dQ5');
define('NONCE_KEY',        'ww4gUg^*l]R[Q3!$Q XRKK#!+iv!:j,`Lc;?-:!RIok!6&4#hpK[q+)<j@e/iN7X');
define('AUTH_SALT',        'X0u3Bh|4nE@1NQ}[v^Sz@frB-:qAF-ARgI6X-k/M@A<Xl`*9K2oFuPj5XboXt*<+');
define('SECURE_AUTH_SALT', '/Ed]CBZTj2fr;K!B/o/3HvuxgCdkajq6jzG[,&)X^/^,DXGb-&o5h[QZ4Dfeg?7h');
define('LOGGED_IN_SALT',   '*$B#NJSt8 Bm8tyvXcL8; d?PxGGpwd#G:;hS8Fu1`MwtFo%B_Igr)|>@k_sxaF[');
define('NONCE_SALT',       '3<$1SFvRo&B2aTj39l:#~hCCh:drF5IOE.]a*Okuw$jc(?^]iY hh~@}d1ok*qif');

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
