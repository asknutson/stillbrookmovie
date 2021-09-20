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
define( 'DB_NAME', 'stillbrook_db' );

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
define( 'AUTH_KEY',         'WNpV:f$]8aNS@QkCe4rRgGqW|O4o4GxFeJm5W8.JiFo< gLdGf;9|X+Se#$p)xH2' );
define( 'SECURE_AUTH_KEY',  'jCB1]9W&Tf,38eA7F8|}+m5=HB0@F#T*h,{ngN@,_pTn@sW^;:+6/#ps&@:*3So6' );
define( 'LOGGED_IN_KEY',    'b~<Fq4[i<&w~x0B u(W?Wc`x)ea|,!M{SI(v4V>MWUQ6NV:{|wuOwAAp.l.WN~(F' );
define( 'NONCE_KEY',        '+e9OZk@w`C)Nvr67KO1d6Ywvt y,VG<!5yK!5WM{3(zL2:3J/q[ZXdG5Qw-sG!kN' );
define( 'AUTH_SALT',        'bJ 2v1P1S5Jr2E5deps*O)F3)40(*LN*3Y}xx^Johx&$Y1MC/Fwp4_|mi@&_9VTW' );
define( 'SECURE_AUTH_SALT', 'hSo3$D&m-X%6Y;,bKCQ!Nh![y1rYKIm@R*~xUim1B?%Q@6G|%0{WQl{Wx 4Loj-x' );
define( 'LOGGED_IN_SALT',   'e%Q;rY@,?k!`2TE:5Z6uI-nfx/~d42MG+<&a!wCu*IBL9cH$4a]+OolhS,nBt Y:' );
define( 'NONCE_SALT',       'r`R?]TCrE!pxA9[uZD6|~#!drjybg|Ch]0hlJLLlf1b7Cqa0K!WZl(AawC`</Dm4' );

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
