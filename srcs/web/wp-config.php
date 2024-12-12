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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'wpuser' );

/** Database password */
define( 'DB_PASSWORD', 'password' );

/** Database hostname */
define( 'DB_HOST', 'mariadb' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'EVLqTlKBIH$0tn@#%fG%CH.20k*QOq(F`-oc5O^cl%?I5iXSlYO&pIVicUrp:p^J' );
define( 'SECURE_AUTH_KEY',   'A6|wqNd~`j1g1F:KT]KmONvCFYQh:+<k12U3O0IRSY4+fj1a8m~uZ6~ h T/R5CO' );
define( 'LOGGED_IN_KEY',     'EeIJv>pE?)W?#ENjCqD!`*>1{![~<7*y~(AuEh5/ISgEyCx3h6X5GLT=%,7+Ge]g' );
define( 'NONCE_KEY',         '&,h_r8IWOQ8mnp!B1k1jX>5/)[)PB[[Fi^fX7J|A6Xhu/-;4Yu(ZrIS~Qqf#>F8g' );
define( 'AUTH_SALT',         '>S%e@as?2,pW>=9<IOh{+=NOZ_Ci5flAu1 C7A5L>z_cr}h#h[[q[f!Mk(g:(~Q0' );
define( 'SECURE_AUTH_SALT',  ',rV~nJEPLG~ZRm?L&w>V=:1vz>3z622sM!7#l|JRBh_NgzpxZf0jibS_C8* #Ru|' );
define( 'LOGGED_IN_SALT',    '6WNKCTUL!GsK(hs2(*n47+_MEJFKWe`PQ0EG{@fmyT%!6BC_sCtw7<SJWct$]ej>' );
define( 'NONCE_SALT',        'Pe$-Yxyhc=DJ~fOytU{Z<P_@z7)Pf%~Vv50V4,Ge}>?B#;m hBa=PP!)*}UrQ,ba' );
define( 'WP_CACHE_KEY_SALT', '=[;AW?t@rM:EVD:yeQ?pACkZDh W,Zp@dqMgTuXj8|E||Y+lJc%G,aG[w=.*b1ml' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
