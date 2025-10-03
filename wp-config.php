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
define( 'DB_NAME', 'wpress' );

/** Database username */
define( 'DB_USER', 'admin' );

/** Database password */
define( 'DB_PASSWORD', 'admin' );

/** Database hostname */
define( 'DB_HOST', '127.0.1.28' );

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
define( 'AUTH_KEY',         'jUG?n8H+I#L5uvgWGI]irNUE%=:zt;io{;va=0}.z4J4O/J`>GeByJ&5Z?!OX^e)' );
define( 'SECURE_AUTH_KEY',  '6J.58Ne4_,( .abBc[yk?m{(X88(sWGgaRc;ZmZ,s.0M%`/y{ oIbuIq(NcKD`;<' );
define( 'LOGGED_IN_KEY',    'SOy_scb_S)RbTM8JxWrQ~4Di|P~Hfc<g1cz7&~|nHBj M4Amt+~kz#s+cK(W?K3J' );
define( 'NONCE_KEY',        '{)tW09fuhbAO)/hoNDcyZ9B1LJMBieP3j[+RSbgQ2/qIw~HR .4>A.K7D?50{B_C' );
define( 'AUTH_SALT',        ')PgF,{EVBE1sA(KFpJMzg;K$-aAU#dxi/cfn..8aTX$UH$I/OP4o,@c@uId_*m}!' );
define( 'SECURE_AUTH_SALT', 'Vg A42{P#mI@Mspq>.H-AVQ$s[b&$H6_~c98[&H*N%[/=z=korO-OmLmdQfo>IHm' );
define( 'LOGGED_IN_SALT',   'HH@gy|(udp_bm1`*UkdCd,MRcB~^c4/0HGS.<a*:r1hzYI-.pp~QmuMET$Xv{_8f' );
define( 'NONCE_SALT',       'j^}H@{L-6deBJrwB5DU#89V<zfi4-5$DR|~|N2:G<Fc9!p*>YtdpcKP2S,/%_rq&' );

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
