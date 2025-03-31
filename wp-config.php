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
define( 'AUTH_KEY',          'S?MB;xt:5_{yx41/<VH!o|gt+Kb=b[}xgLr=k)y4Hy@~;m|[Kp>[,mL+TwMS]y[C' );
define( 'SECURE_AUTH_KEY',   'K=/9(fLxIVh%gIdphbQyWv8Jq3/JZw8gBklcmpfq:i)chbYWFwU`MmTzi&]h6S2s' );
define( 'LOGGED_IN_KEY',     'H[bI*Z5t`OL3H.7~wO1`iOo58~2)jerKt6NMGu-95`ZYnrmTXW4iQFBE<f*U%.@J' );
define( 'NONCE_KEY',         'wt{?,Z8#dvj*%71&,)6tCbnV}/x z/XsEFa652Dx+M[|08o*.W|ZQgMK21kfdw9t' );
define( 'AUTH_SALT',         '_; Y>P~N7.x!5K}JX-M1D4.^l$q7-145C#s.~3j9`JL7#M7LSu+D8MTP^`Tp@-)8' );
define( 'SECURE_AUTH_SALT',  'Xc;wW4fT,L/EpjFogWAH#NO6o<7uCy?=?G7amz$(iN={Q@l7BxGo[5ldZ@BjoN6C' );
define( 'LOGGED_IN_SALT',    'h.#r=/f&FGL-ZH$kv|P^6e]q]?.481Eq?{A]D;J7-|F[Cr8pw3xZWAq1)!,2R^rq' );
define( 'NONCE_SALT',        'w|%.yj&^[-wq%TK(Cmp+@4F5ccc2!{r,>4L_#VmCf0Pb,.rdh/^J*FqmmHATGHy-' );
define( 'WP_CACHE_KEY_SALT', '$JLt72 X3U|Gl]I;]S>0btMuk hIWsf lB9V1=/vV 8&,%yGbWN?mKdPo:uBD3N%' );


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
