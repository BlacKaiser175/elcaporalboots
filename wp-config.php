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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'elcaporalboots' );

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
define( 'AUTH_KEY',         'AYcd!g4m)`y|iw!o{Ew0{<}IwMwhlCehmIjn2I/^CMq%J9&2}/CZ`*~p,RAzPszP' );
define( 'SECURE_AUTH_KEY',  '106r;jxe`dHE_GD>3i6D&2JOXd,XB>B$B5aRm|kag%rj=ww:{zj-kZ+z0&+m2=ex' );
define( 'LOGGED_IN_KEY',    'b[RSqjK:61sJ!D}K(FkPSZE+U3ICr.lowdf>$c].IE5242p?--Z#0N*bCP %X%d9' );
define( 'NONCE_KEY',        '4tqSb{[+V54%.EeBWX_)y8n>U|`JPz@eoY.)V*a<GqmnD[6yye~9pa!cUtjLA)~u' );
define( 'AUTH_SALT',        'mW59wQn%sD*.LxBj6&XOG`3Jl;NsN@>Rzh?V(t-mZENo/-nHakM1SjgX4Tl{}7.l' );
define( 'SECURE_AUTH_SALT', '}(} bQP:bx&krGGh8k5tJ?Ug90j7r596%kTr2tNPdI+DZy3XKL(;XN]ENRZnq0-u' );
define( 'LOGGED_IN_SALT',   'uD<n=w-,knLYRa/ByaV|6#_|27kFrG;yYvH1|[$OQk|sRgk:kkYl67C}w/;9CAc;' );
define( 'NONCE_SALT',       '0W[xWy-5OHSl{iwx=0xI0x/ug%cmQi8vz/o=FJw~9N(Xi,!GM1}k{ wu~a.GWNZN' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
