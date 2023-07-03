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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'db_wordpress' );

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
define( 'AUTH_KEY',         '+#G<>SU`Tk!a]&SY{qJ!16O/;)HICS,?5Cg)y961zCF]:B6Jq[~tBEUkW59/B5k}' );
define( 'SECURE_AUTH_KEY',  ',j}q!:z^USmS$^=*4< +q<z4INO922Vn?t*BS4q)W&<;S@4m*e.WLCyx=13*dzwp' );
define( 'LOGGED_IN_KEY',    '0nR(JhW`K2rpeFfy1Q$YyWaM;0f56w?Kd2,/Ov8<:{ta?@jxff78;_GCNB:.xt1j' );
define( 'NONCE_KEY',        'BiM65}%-lTuME)WS<67/MI)m3UcT1f!3[nT!]QxTWwymTM9nj?{nBmC<w3!azXe#' );
define( 'AUTH_SALT',        '51:lwdy.1_H50Jt<+r7N$VXlSgw72[FaSs KVv.9u6(jCg&sglUeGJ3_4lqIUZMG' );
define( 'SECURE_AUTH_SALT', 'dNl2P]YO9I4Q7-|+]iABLMfdxG3[@OIg/KGT}vbu;kEu+vItvw{Xo4K1vHzERrV@' );
define( 'LOGGED_IN_SALT',   '7o.*YD+1PWugUy.2*`oG%<dq&w+_K:BP/h@G^/Z:|3J~Z;{.2h0R2*}bSRk%G}18' );
define( 'NONCE_SALT',       ':G?oIbb=5]~DHf|j*nFTZ7Ycg_[Pu C8>uz0!QTAYE@W*R(;MJ( h(V>UXuo*@ns' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
