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
define( 'DB_NAME', 'database' );

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
define( 'AUTH_KEY',         'ZXmz?nW,/)Hh|$ dCTq;z6iCO*[*-d wB2&%Y221mUqo9Te|H!7:{x!IOR0uTl8[' );
define( 'SECURE_AUTH_KEY',  '[:4]U{F5I$z-LG[A~@,5@E!U;nU`1UBE<Qh-s$&e|tRH0Fn#`4*-Mh,G)idpA<65' );
define( 'LOGGED_IN_KEY',    'y~Jv)e73qpua_d2n+@=bM;)1gALzc=rY`hR[L80s.*ISg,WF@<oT6eJULWOg6o3/' );
define( 'NONCE_KEY',        ']Wz*l(6>1&&Ydmb`Yb1qYdhfXe<5:^PJl}I8L{!1Gb*X#-h?8HKs}D%0h?|BcE{/' );
define( 'AUTH_SALT',        '8H4$9{-vuJpWZpy~5?VC87OWks[.p<).gY5%ug?PC?z,6~[T@C2-V5ToU>gf(^R3' );
define( 'SECURE_AUTH_SALT', '@%b^L^M?WAC+oDc%@kJ :8a#QOrDS6g|c&l=ECHl:%,`3jaWvnY 1|#xcE-!a[>M' );
define( 'LOGGED_IN_SALT',   '3vJ3p^wn=LAbxGylLf91TdbC*|4A{*2/y]W7*$d:s08&5z}J{^Psd)#ae7(K?.YP' );
define( 'NONCE_SALT',       'm%3>Dj,QX-Ft_P^Cc5{~;bs@-3P$aR{RGw6]!NLP~X@t/T`2I9Xs9`8Tf3eAq}B{' );

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
