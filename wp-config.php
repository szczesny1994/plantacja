<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'plantacjajodly' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '%^7jaJe[N0_ERQy7OrbyL<+$CMDrGXivi8l4wfWL8wT=i%r~.^83[jyL9!PaxFHI' );
define( 'SECURE_AUTH_KEY',  'AY-7,9E_W}EH{^HV>lH}[X9LUh:-X3_ &|KcjL;V>#}(-Z/w1*6=llwx2}Grax8*' );
define( 'LOGGED_IN_KEY',    'Ocpm73|H_tj>GmAE)i7Q.yecrk#Qn:TW S_f$^Y<HrH&JLZi&qK5]%|l>kIuA&Mr' );
define( 'NONCE_KEY',        'mi)eYR%Vf`X&eI^sS!Ygs+Oln#WO)goRCBYDBNluBY/kC&1mXf}eDI:##rCt6SxL' );
define( 'AUTH_SALT',        'lYco{Q}Yfd0^KEJqCI]e$9ZTfU}5]FwtbXjct&r1<8%$gLi}_2%MUIc =;SDk|!;' );
define( 'SECURE_AUTH_SALT', '~|A}e4@:wXcQJN-a9y3N5g`?IbN_[$SFUs?j:6_/3JSPDO$}]u6j6{uszAq<h0c_' );
define( 'LOGGED_IN_SALT',   'i+6K,CO|!y-%h}`c|aH sc[!|UsX5f`KMT LtR HqK/KHEG?swI7-/BCQw]u0V->' );
define( 'NONCE_SALT',       'cw}X@?.h6g9nj:<-YY2S08n%Iys,`T]V S*bsgQ5+ILV`D/[0>!` 0SD6;06QKJu' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
