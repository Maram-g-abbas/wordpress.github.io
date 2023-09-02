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
define( 'DB_NAME', 'woocommerce' );

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
define( 'AUTH_KEY',         '<He8W;2zCc1Uzbr/;au6cuxqdwW`c}ET NM)w7AQbR86IHe[^lG _~G`yb,8WpFJ' );
define( 'SECURE_AUTH_KEY',  'Q9gzwLw14r{lNgV5NN_q3p`oX,U_U*Uv}e0kp&7uolBX#QLi3!RwAQo.&%.Im4qs' );
define( 'LOGGED_IN_KEY',    'U3T{s>4$5n>)J%%zbDI~:Rm~fa$!.k@9d|#B .&Zs>r&C85` {?s)h Tc`sQ7^7 ' );
define( 'NONCE_KEY',        'y6[pU:Ir GE_PH7|xQOR69~O%bb}N)|Dc,BInIuNO]bQ]YD_DZUs=qh,U}+-ipi]' );
define( 'AUTH_SALT',        '&ozeEbD,O$*;iPY,4/nP]<o<<yM68|#f,s8Wp>f>GNosHcZux<SV2U|BLO>{9OV_' );
define( 'SECURE_AUTH_SALT', ':%oy=g|y09y-G@Co}2O?rU/w{^19a/c}}x;5(8O%>CC8YQb2xCIu-ZtZh}_CoMDY' );
define( 'LOGGED_IN_SALT',   '48A/tUq2gF][j]Q]{>e&!w |mtk,CjKW*{X=xM,isb9GS1%|:%}4ykePo29@8GBc' );
define( 'NONCE_SALT',       'WZ{k2&CBEu8S<r]AZV|2J,*#<~E <$rZU$<RukYmxq,>,VA%Rf#PXZ_(Q7U)mq5b' );

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
