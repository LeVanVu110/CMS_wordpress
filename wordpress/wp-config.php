<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress_db' );

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
define( 'AUTH_KEY',         '`j9ljW Sp&3&ic2dLXW+oW:+iJ+xH@U~5V(D,f3%U).?{C)-Qi9U}3f&`?L:zN@a' );
define( 'SECURE_AUTH_KEY',  'SNU:[O!T,;r[d%t&McRF>,gQmc>bAS+hr:fao+7jU]( SGJtOID>2R@i:2Izn3$s' );
define( 'LOGGED_IN_KEY',    '3m]-,M0^R5ZXIO=y2JXFCP~O+B[zTB_Zh,%#g 7nrGMl q-^` %e9Hs0[U%oHd<j' );
define( 'NONCE_KEY',        '}5|fs<?.9&2!$H?Z@)mv-$Ev3_}+{m*^3%8+U1bp3kJuU4UXB.`1-g;]P7``0NX1' );
define( 'AUTH_SALT',        'WcGw9@G/Ci0Ro/D3PQ!U%mo@5D:[U~`A27NgMjU)(AJ$jRP+g4+P(>n3h8aSe4kE' );
define( 'SECURE_AUTH_SALT', 'y/|+?,c3r^MM@|1v^7Ou91*I]hwVzHT7O(yT9kSidJ&<iEew` V!_eK=K*b=;8jH' );
define( 'LOGGED_IN_SALT',   '4RV}%mWeSXO93c1TTm[`Ws!]G[GPT,y<DSgH[pJ=WV-Re~YM0iQi^j/CdXP6:B@B' );
define( 'NONCE_SALT',       'DajUN{obtJskdx#B)C(pjQ8,k!Nq[alwv?sxT:EJVfPMgB5({u-FI);_JO-Q3#Tr' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
