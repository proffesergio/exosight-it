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
define( 'AUTH_KEY',          '9%.BQ^$O?kjkg|5p5uV|9,GlxT(jKLM1,m %NmP@0Uiv }swM_)$u9WOQ#G[_f9f' );
define( 'SECURE_AUTH_KEY',   'u#T!;,n#q<2(Zs4=z%:(X5>5qX&M8`1}kn:{XBp~~f}@Bmar()YN3bR*j]Ft~6xM' );
define( 'LOGGED_IN_KEY',     'wmU-=$&Qy{tRp3#+lOJOrWTyW$:,nvU`c(?dW7S(|etE?-<zZY:z2gYe%))J*ypQ' );
define( 'NONCE_KEY',         '4mSA-biu$c/ML4-~LE,sj{l6 eqwl~?e)n;G{dwN!V7_p|$pFAnT{RP2 .:7},5.' );
define( 'AUTH_SALT',         'bB ak$vMH7IgA{L/p>(#%MU65b)CxD:q@r^45IAeX:B9I^?XOD&ZMEkfKJ;M>Gat' );
define( 'SECURE_AUTH_SALT',  'n3KeqIgl3.:,f%o8Q=g<Z$=adcT&HWC9GHXr4yB@4wR9L!x~cG*7(=#Qn:x9/xJj' );
define( 'LOGGED_IN_SALT',    'zdoxlaxZ<H9u(9&bF7iy9:0I!tUaKiP@W,CueLI@zs.8ZNe)KNuZpi6|m<N;<0sV' );
define( 'NONCE_SALT',        'nqp{1G|UGX(vQ!&LVWAY^=Pk.*peoFwyT/B;y6{_edoPJ7.x!w@-{dVC 5RR!]=M' );
define( 'WP_CACHE_KEY_SALT', '^upEZ_Ybw-Zland(} uQUGn&$cba3_&kt5jF[YD9bW(h7H,m5+q$xCNw<dFoIwd>' );


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
define( 'WP_DEBUG', true); // false in production mode
define( 'WP_DISABLE_FATAL_ERROR_HANDLER', true);

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