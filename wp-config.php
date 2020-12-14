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
define( 'DB_NAME', 'wordpresscar' );

/** MySQL database username */
define( 'DB_USER', 'wordpressCar' );

/** MySQL database password */
define( 'DB_PASSWORD', '123123' );

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
define( 'AUTH_KEY',         'dE>@<#-Vl$PoiMAp[p}hjvcT&l#7YL2^;oM9GhFHU%E{seA]uQ&{HaB2+H$4n{1J' );
define( 'SECURE_AUTH_KEY',  'k;.1r1e9l(y7_K^4q!m-~6)<XFORHi&2].GOTxo<@xOjFact3$=q?Vy?`ZmF7j0]' );
define( 'LOGGED_IN_KEY',    'c9Q5Aenti:58VoOW=F,9To:~%U-NcV#}ZT7!o/-|*%|)%j{5dIA,6|9d~oNmGi6O' );
define( 'NONCE_KEY',        '79i}6cBL!ZLJBO_~Kbz}J.ohxPf$fuOPSLkL%#[26_jgk-sQMYLNx_7WKO?)Yec^' );
define( 'AUTH_SALT',        'bq)QAb6YQ$lzmZ@I0Kv;X-ul4J6`8ItBfwF%zd#sqgN$GB)uxDbi*Oc)9k[znL!_' );
define( 'SECURE_AUTH_SALT', 'h:%O>azZ@UZRd:u93;B=/lUwm2Pq0~7qt!p8@zFoEh3TP)Oi~uWPiv1WJ~h%<^Fu' );
define( 'LOGGED_IN_SALT',   'gxyOqJN#*H}bLmOcn HPD$3g9{6R/jv2ssR{%FUDV2.drai)p^r^XQ@m1v%F7 A$' );
define( 'NONCE_SALT',       '{?/mt#eE/pOtFU):=0a#]wdzA6F{[D33.c,>T^:j%=7Zn-L0uFi-Fj^GPVxXX3AB' );

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
