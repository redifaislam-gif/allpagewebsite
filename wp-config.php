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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'allpagewebsite_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '_xo>;H-j%|bL`@Asc3A@whKN*tHZs<w4cs?m1^>p.Cky,M)Gd#M-^xP(WttT!hb~' );
define( 'SECURE_AUTH_KEY',  'p]j$|U ]qlw|Ndo~p1`.VYTV<^EUVUXY6V?G%=r?49H=htd4w0xM<gKOR<N 7#8%' );
define( 'LOGGED_IN_KEY',    'g[;fgxeXj7RqmcoI[q;xiY~6*3Gbyd$mjhK?#0w<Mr0mMP@0t3DqAzdM}6{BP5(=' );
define( 'NONCE_KEY',        '+{_t,4lSS@6`Ml|QeCw5SOh|;[e rSK44p?rTGV%ofF;a&i[(`=bZ7KzBMiiN.{C' );
define( 'AUTH_SALT',        '`~swhvr|{l?@~bcIeBr1m.{R@>0fEk[CnYO3C3R8,xqG/hYIST_No0y1r#/A6QkT' );
define( 'SECURE_AUTH_SALT', 'a^bHc}2qxi.bL0%jvuiI{7}LV{#[RYUp?m$LXAiA^$@G}bv#],L/CaEf>@wzXfoP' );
define( 'LOGGED_IN_SALT',   '$b*J<E&QavKTq<f`kbE;{QKxunF^>yULDVk{y1T{AnBl8P>EUoOf=4;/-R)Gtx}#' );
define( 'NONCE_SALT',       '?D>.Z(iHVv4ATjp/}G4!RW4:oJ$OquH^c?s+a]-Tbd`.oQ(CqtV^Z7Q7!~&Jf3|O' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
