<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
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
define( 'DB_NAME', 'wordpress_bd' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '>bj>IO[uxpCu5MS;)2_; |V/&cMTkW&oIRmo|DGbph*<4]VQ^TB&@8q;Z)=|KfI&' );
define( 'SECURE_AUTH_KEY',  '0;R`<aV<Jr2$/)EaZDAV_t3fbj8%}w*V*Isf#7><Deh7/kv,W7/[L92j4#pB5Pyy' );
define( 'LOGGED_IN_KEY',    'F06>&urGh|3Q[529K>;;P^#@~6B(4AT+_R~,y4~%,xu5#4Ig:C!Ir8Hn;:^VO9T;' );
define( 'NONCE_KEY',        '_iSlUuREbi R`z3Rm@]3e]$##Uq}whE~t ,#Nh44I3/0N44CO OxwZms; `LK$S>' );
define( 'AUTH_SALT',        ',V3Bf2q(=VU*Ql!zKv4rwv9qh=Ap{e?aRjwi9J07jkfYrxK!Bj8[gf[!XtXZDZEx' );
define( 'SECURE_AUTH_SALT', 'L%Y_UDNY,Yg~:D!}h4^=N~zmCoh9Q@# cmeq(Qel|zX[J?c){PTa|Y^Vyzd>MqUI' );
define( 'LOGGED_IN_SALT',   '*FCwST81>~;J1-By[d7Qk{G&O;s,#T?=8fbU|?I;bikH<A{AeKmPn=0jmt(339N?' );
define( 'NONCE_SALT',       '`n|j$c,^gk6thqlSQN9y%<ltI~iz,t:D.Y/frS9E>qY3qr) 5gPP@w8rs$>qf9Mj' );

/**#@-*/

/**
 * WordPress database table prefix.
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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
