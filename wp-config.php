<?php

//Begin Really Simple Security session cookie settings
@ini_set('session.cookie_httponly', true);
@ini_set('session.cookie_secure', true);
@ini_set('session.use_only_cookies', true);
//END Really Simple Security cookie settings
//Begin Really Simple Security key
define('RSSSL_KEY', 'VoCtvwuSw1VNplyTZwP0eJALKf88tZkJVs9GKqTQEsnEPncj17xlALcHccvCMpBG');
//END Really Simple Security key
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
/**define( 'DB_NAME', 'local' );*/
define( 'DB_NAME', 'if0_38750760_db_limpiezaswp' );

/** Database username */
/** define( 'DB_USER', 'root' );*/
define( 'DB_USER', 'if0_38750760' );

/** Database password */
/**define( 'DB_PASSWORD', 'root' );*/
define( 'DB_PASSWORD', '1xSKrlEyHO' );

/** Database hostname */
/**define( 'DB_HOST', 'localhost' );*/
define( 'DB_HOST', 'sql106.infinityfree.com' );

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
/**define( 'DB_NAME', 'local' );*/

/** Database username */
/** define( 'DB_USER', 'root' );*/

/** Database password */
/**define( 'DB_PASSWORD', 'root' );*/

/** Database hostname */
/**define( 'DB_HOST', 'localhost' );*/


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
define( 'AUTH_KEY',          '>/JmCF|R2?xuhk-b!~g<?tIr#v7],D#UTa)}G[np1-W}d3p5NL~br 0j+k9]Y~PK' );
define( 'SECURE_AUTH_KEY',   'D96M5!rtEgb*=;77Ps%$Xk~_MRZ@<M)4Hs^ZAc*VEFkG@~602Zkq;t5,J:R12`C`' );
define( 'LOGGED_IN_KEY',     'ym/SZV1uVRm:CoO2f.#H, xmkq]7<2_~y9^98Qa>ESC-wB[KuG!/_eYA;x.*2[(n' );
define( 'NONCE_KEY',         'BW~Gm*E{#b07rQMw!p6jR7*RGL 5c+W`nK.KFS.WW4aGJtZ(f^qWi<v156urX|`4' );
define( 'AUTH_SALT',         'N0O-iHDK/wi.ZQ;/nJ<({vFef[S5m)uO./u.jRgIkqn-?4;)CB0ivwr}5RJ7WCmq' );
define( 'SECURE_AUTH_SALT',  'TdtWk`!!Dgo[g{m%&o!y:oriG7:LBmUJ4o}?$d-lPb^w}oP)%bkvjRF/L|yv&n#@' );
define( 'LOGGED_IN_SALT',    '?o$i`hh6h+d9bNL%;W)`:}D*eJZ|FbC!^q/]_z_rJ;]Pk1]-{41jLZ#Vu~!hR^)}' );
define( 'NONCE_SALT',        'f_lX|X|Tb|[4~JD|V]syO81Mu8mDq)Bk=t5I?8<zb 6(+b7Gw:y$D>Vrd;,x%+W7' );
define( 'WP_CACHE_KEY_SALT', 'wc~E[T#}),t#RM#E=cC><yy$o_Waj0?Pr7Gvrj>l4I_v*.-mrKY?2r{Ai7HeYli.' );


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
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
