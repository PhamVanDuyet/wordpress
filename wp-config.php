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
define( 'DB_NAME', 'database_1' );

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
define( 'AUTH_KEY',         'dl(3LaZ/=)j&yR82psK2wNEZ|l$][BFK{pR2=E`?1!iE=S{/E`x;aoR`5=3/|os)' );
define( 'SECURE_AUTH_KEY',  'fM4G%[Y)AM2`1y]U^UwLm#tqWQ,=3QT9]CYYc@Y5p9]rTH8>7;7%wo/jQ@j|J`P5' );
define( 'LOGGED_IN_KEY',    '&K},{3L8]u^p1Cg$lwBKk%4bKZv`3/7?K>*IYdGf^sXBU]eY=xUtxAIA^IPRUCcn' );
define( 'NONCE_KEY',        '1Fz|jl&&jgA,f= %aeu3gOw.,nMxqQk-Y>4qND`n~uSNKIIYLC{~08(n;d;]^sXO' );
define( 'AUTH_SALT',        'mEvEQ9P]6~C*|g^.tM+k-)PN_udI0KNbtW:BcEG_IU50BmV[$2s5*g8Q*<xk${D#' );
define( 'SECURE_AUTH_SALT', 'Z6//$k(%XaZu(DYo-*unj>`{[U+=Jl9OWxl3.@9S(&|]fmTCG,.qCiQ`3ui&{m_r' );
define( 'LOGGED_IN_SALT',   'X;,i_?O2wX%4VJU:%9NHG:p/~ l/,2**=Wuf QtO4e=@L7K5^TtJ=}Iz 2>N;=Bs' );
define( 'NONCE_SALT',       'k4oBFeZ%3|E5Rl {puQknsOzH-gZj0Z34I6svtg!+o6Be)Y4  |dp;>3:X0 L[NJ' );

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
