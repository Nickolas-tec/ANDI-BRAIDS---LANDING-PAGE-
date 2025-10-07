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
define( 'AUTH_KEY',          'WjAx,ped4&K`QUgnoW? ],T7?[_)p!z] @l6KR,=nuSs,rtM;LsnJpDDB-,Z -T/' );
define( 'SECURE_AUTH_KEY',   'aA/nxB9oY8-;=o|g>t7,[j/5pVmiB`t[ZLVgQpTcz48R>]<TGw~y^gl7f+3tOcz&' );
define( 'LOGGED_IN_KEY',     'sBxb@&8O9G?(hu_{Su,QZ0QV%=fZzXnhGX(tBPaf6V*Bv^oMT%c}j`sTAqtK)rsC' );
define( 'NONCE_KEY',         'X2yYT&8zkr,/0bP|H{jS-Y*efG$,P/Fx|^v)Jp5<j~vT~_$qS$brQp%d;@]XZiL=' );
define( 'AUTH_SALT',         'EdMj7Okxe{p1+*T>b9g(Zh,*$23?f,kN=xuPA&!K$pLt-/c90EWj *mNMm}J2unh' );
define( 'SECURE_AUTH_SALT',  'g<*o_k|lYtX$oz)qMsvm]hBcJ;o<DXH1/CJNM>(JRu.g@k1^>.*G{4Y5Tch99{^#' );
define( 'LOGGED_IN_SALT',    'WF/:k+?V<-J|!>>T5,<Q*DDh#8i3$s?i8b68#^q$EsRrJpj8ZfN-0O@!MV_X#ELw' );
define( 'NONCE_SALT',        'oG(Mky4Y)ttIPE/O(pw(_D1Fn38y2)|[:kvj#px=b_UH{M6xvdq[C8,Y9k$j@r]M' );
define( 'WP_CACHE_KEY_SALT', 'w~|_8r,j-SmT_i(6XevDV(a*LJoJmh%R/_9:`=:sY4X^H9G6kOU8!{G3.R`@;;%A' );


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
