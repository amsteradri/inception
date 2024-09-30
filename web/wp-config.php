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
define( 'AUTH_KEY',          '@%``Gw*DMXQ!g@9[CgwI!ea`EOw[f[2:d3$|D!e$Ts[eIFNO#[D/Mng1G5q:.jJd' );
define( 'SECURE_AUTH_KEY',   '6#7TqPky+~Wuk]L0mJ0f-0t`~B)2?Z%CoPS8sN_<9G)i4hX%pQ9GO>@xpxNYGA00' );
define( 'LOGGED_IN_KEY',     'UI{pML~bf:wfRpDZpX&?yI:apEfR7p$}22R~_(,%gPFXR4dFj1*@^/}Dn^6y;V;E' );
define( 'NONCE_KEY',         'Uh+.CM;+g$jqLX_BDtX[]H#|?D`p}-)j[;p_Y`CflK{YZj7S_Bf.m=Uqiwkc{CI{' );
define( 'AUTH_SALT',         'L{l!7Xwlo )oXYvZ0od7hk#vUW(NRMuYu$!%N|t)-DP$A7NH$N(YrpsP/wX<} dp' );
define( 'SECURE_AUTH_SALT',  '}g],xR|pQ**k fowG-}%1>eu7Pri?IUx2TN^U$>1wWvH|GJNbq:)6}90Ms(Fg_Qf' );
define( 'LOGGED_IN_SALT',    '&pjB.4N3h(#Bc)@YzLoX3OPKd$4B7Odh@ f4`>=HKr@N|ap1A2z4H7*A gf_&/}:' );
define( 'NONCE_SALT',        ' Plv MO?UT-@*qJ3h_Mc(+}KQucM7$M7!Bdt{paS;g~[Mb7]7`zGHC:^&(+Gnp.L' );
define( 'WP_CACHE_KEY_SALT', ')*}xI>aB2|0s(9-6/FrCR=JR=Dv/FS?I9>v||.lh{R.Vj?#=B?{xUmI3dU#n #te' );


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
