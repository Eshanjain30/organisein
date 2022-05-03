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
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'organisein' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
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
define( 'AUTH_KEY',         '64egQO6Y4:1g|iM<kpAA/|<d0pR:&md~muzt#oqVp7gsnU.,8fhoTb9SGmLX}Vz^' );
define( 'SECURE_AUTH_KEY',  ',<]#VZ2x&+hE3/x12e%fT(kM !n`MxT56YKxt,kS9fr9=g0RV)@:>b*g}]C>*1| ' );
define( 'LOGGED_IN_KEY',    'L>%J<Y{Wa/U&VLDp{3F?aOR[41t{tMKL>BDl!n$>-yOa!sBl*/]Muv(uR-BPAZ)j' );
define( 'NONCE_KEY',        'X13&kbZHar:RM!)?T2v/.EFqG8.H5M^a,0o/X(O}$k8M4P? xcZqL;-c<8$ V]2?' );
define( 'AUTH_SALT',        '>fRBYKA}Y|#2+2.N/tmve58Hi>?{~Gs^:S6_6Q;3:,GfRziKXNTO[.q:qd-:r:#Z' );
define( 'SECURE_AUTH_SALT', '95_; :qL*}7a$l]@}I1*CcHQPEh*x~Y1j0/,C7T,Md}&shjRcv65LyOphNS4H2UV' );
define( 'LOGGED_IN_SALT',   'Zrtq!}duOi-E]W-67R!vesBY_ v+@Ml*zR^a_O([eF#_UGz5fI)-8 9-s/b})NL{' );
define( 'NONCE_SALT',       'vG=kpRZ}JA=RZ~@m{T6`p!K)*Bj|+^w_5phiU|sCd#TjhBgXTL$}qgFM(  YZ*D@' );

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
