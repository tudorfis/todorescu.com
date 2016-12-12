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
define('DB_NAME', 'tod0resc_todorescu');

/** MySQL database username */
define('DB_USER', 'tod0resc_todores');

/** MySQL database password */
define('DB_PASSWORD', 'crackthis137');

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
define('AUTH_KEY',         'g.0L]G8q{MOz>o<x:,WKbP.pv_V68Q-t6|z|vbhH9qm5TgWf=U6)6CXR@5M$#iQW');
define('SECURE_AUTH_KEY',  'qgHeMOrH+kOcn.,`8wgS+IHX%SG-:F%0s?/^SR#M$ga.vN|;$5THB2Cj I#krStu');
define('LOGGED_IN_KEY',    '.J{+:qDn45;E]znnvtV)@%#q6E=Bh}7?@kTO-S@M_(N2A=TUgX>,4rJf97d3H%%q');
define('NONCE_KEY',        'yU1&^@dR,$[9y>/tw|JpUTi8wXqooLDt[sh/R.8!13E2up7P^S95]T3wi(t/9 Uv');
define('AUTH_SALT',        'IUQa_>__A+tLVXB}!o0eF4t[UIhRT-{~Z1;FU[/M,s]w%DzdzE0e0ePQ]%uor._<');
define('SECURE_AUTH_SALT', '{qD~j=X,}h&Y+v:wFWGhU2!?9_TeWA,#:YG3*on<re`Pg+$;iiVY_R]02Gt/s/(&');
define('LOGGED_IN_SALT',   'J);bOtXrV2:O<F[{bYRk?Ccq;MCxxE76}(NqxLC=C0Rx{TEpE fX0CF7Hn. N[}&');
define('NONCE_SALT',       ')qC{(w[Z*`u1JQ#:ktN(<gk$HteDG:rhtk;i^Y%9.;6HIeYvv[i+#Xge$t28[gd(');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'tod_';

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
