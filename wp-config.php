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
define( 'DB_NAME', 'stillbrookmovie_db' );

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
define( 'AUTH_KEY',         '=%[an3b5,p*a94z.M#E,bMR~{um$Pj{3 /@U)+*3,y59MS,OZaZ= :&,Qq,kXVV4' );
define( 'SECURE_AUTH_KEY',  'CG*(~D$%d&9z&4V;RN`H-4@ y4bc,]j^tXU-6*g2@5|o:vOI-fgx{5eKO45=,Vn;' );
define( 'LOGGED_IN_KEY',    '>y2jlJ~g7Z{E$i)C?E%0=T$tcZuqJBJfKvGs7.0@RW}C!n8$Q1*B]~dHKWDUYIy1' );
define( 'NONCE_KEY',        'o8I2>rJt%g}r`6Ue~WpQ-@JHl{>@{xpxpr,i4m~8At_@~4p*kS^6M*acjG:^~JTR' );
define( 'AUTH_SALT',        'dPBUZ>Xm^<FNs-fC}j-Ax%?_~9-M@9Ym }}%gz*J_3&bRX9u)#,1Wlo1u*QI(O;<' );
define( 'SECURE_AUTH_SALT', ' H N7OXF(cW;}{wV[2|*n[$r-5?ri1={+:ip8cd*z6:+fzZ:kL;>unJcchi0#{a8' );
define( 'LOGGED_IN_SALT',   '8yXni&n[, ix=aTV}!O)`^4#wDYEX/R7K:ar UV%gjr^dh:h2AAc72O6KVw!g~~5' );
define( 'NONCE_SALT',       'Eg_:pfCAr)$,eknXfYR;J$I8]BW+BjZxZoPCW(qhSH:R`wv7/#.PU^<;nO;bln_;' );

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
