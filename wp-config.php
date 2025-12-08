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
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',          'ZC<Pe+i4f`6/CY((ykYSYNLUfJW<IW7~iNi<>*(npl6s,bJxp?B}b^:#12.fBC<;' );
define( 'SECURE_AUTH_KEY',   'Y]3X6TF30R8@>U4U?BGB 48MBR|c4u#1_sJ)}pRMj`Ii~0H*%!w i%ws0Z}k@4,6' );
define( 'LOGGED_IN_KEY',     'WuE1[p!3`ABX6P[OC|<|4xwoBEY1]ivhyge0&YqHBG^O<{3kAY(nsV4BYyWFkvgX' );
define( 'NONCE_KEY',         'Te@TbpKKf,Nz3L.vNRKPx)1!cN)bIB/F$+&.7~%!m&swmamy4Y@WtG:wH@f){Y*P' );
define( 'AUTH_SALT',         '$$2uE+j)WFyZ{_+$i65a QtrIKP}|:[mQ.FJwpz80@}OZF(./6#&J(rUmb?5U_LA' );
define( 'SECURE_AUTH_SALT',  'vmp*^_-(~@{D1[HQ F3B^}iLimE7_cD,]3SD^^11p@YbFg*wE3>> lE=lPq([eHZ' );
define( 'LOGGED_IN_SALT',    'NQbZ+RFEy=yJSUKu:GR.xVN >c#YpnhN86M!J>T(>n4(wq;f6a@^/!j{8!{a5m!6' );
define( 'NONCE_SALT',        'Tu?0wdziV_[EqZ[>wpewx<N<@~n.inagR.xgqp9{]qd9b%d*WY=u<(T60qW[,c%Z' );
define( 'WP_CACHE_KEY_SALT', 'Yq%I(aD,oRC[yZp51^%q9x(B^08DqePfxwPOx|:Yif]S{<5y,O-2c4@yxIZ;-Y>C' );


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

define( 'WP_ENVIRONMENT_TYPE', 'local' );
define('WP_HOME', 'http://dnsstudios.local');
define('WP_SITEURL', 'http://dnsstudios.local');
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';



