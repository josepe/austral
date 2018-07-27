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
define('DB_NAME', 'austral_db');

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
define('AUTH_KEY',         '6 !TIt&QI-/+.9P&uN1:`Bi,Tc>GK>e<;rF0.vP2&-W/0i>&nWmj-My+]%D9K-@a');
define('SECURE_AUTH_KEY',  '*h*)_F3u.hf^KAkr=b/!bNLyJ0e<<:J4q{,GpBcWHHqJ6h^)jlR#[CCV{2+*;1Y?');
define('LOGGED_IN_KEY',    '/BZZLY$r|2?)_ H09M%FnnM3&_Dr;(1bJu;{}!eZIVt`(iC2Hxl[!H&$tK9oLqux');
define('NONCE_KEY',        'hJtwbM+#E09TbUlJAs1mK[qPzPu[G&<AoQD[cc*6ToERIn%U~(fqUnnHAm^JFvu<');
define('AUTH_SALT',        'nVs*NAOG2<[&Or]nB_F-7yZjp[.aKy~x{#~PAP&jZch H%]S%/k_B0D^D/+pGx8!');
define('SECURE_AUTH_SALT', 'HgO+nH&9t5b~lg4o}i OTT`s/$<v}Ii_yfva2bh:|~;)y7,8i[ t+A%itQ9+!A[]');
define('LOGGED_IN_SALT',   'biV&xWozG`=OKY1mhFw+%ax!yb2)o>K2^[wRkf8y/J0E[fR)w^N5Rgd$:&LYS@hg');
define('NONCE_SALT',       '!4G%wYGGcMaA,%5G%b,&oWXsr=HzGVN%=uQ;nAG[i+IQa[G@hr:;5?f5WCe=JAfE');

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
