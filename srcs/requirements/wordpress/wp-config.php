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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'slimane' );

/** Database password */
define( 'DB_PASSWORD', 'slimane' );

/** Database hostname */
define( 'DB_HOST', 'mariadb' );

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
define( 'AUTH_KEY',         '~BYg/@@1=7Btdv6z~;#[|n76CEO&4~v+]ZJeK/cqX<&9=XXDDR}N%ZQF8I|9?1k8' );
define( 'SECURE_AUTH_KEY',  '?!|4>gR]eBUF:XvAx.k1V@mx#?QU|cHp5t}<-.z21-KNTTAy% <1xU?>?w9gMb*X' );
define( 'LOGGED_IN_KEY',    '9h6{8wrE+U!g:UWK&g;y<~6po$zO)xktX@5 Xo16Fz4&n`t?%kDv} *Z<a5tu]p%' );
define( 'NONCE_KEY',        '}RWe^!F|p|.O<MP>2)SQk327U%?sE9ENp`0#RN1_CqGiQ150<gDuN4-#Q9~Q^4lh' );
define( 'AUTH_SALT',        'N+i^N|aYa8S2B5EUF;GdoMxw{zEwyuU;E8j(Wrp*LeR`glHib9=qK}sH23Q=F)H1' );
define( 'SECURE_AUTH_SALT', 'P5X)^}^k$s%8rB7}gOmfm:8h_@?#X7:FZkb,WC;vQzmC*!r69jue6so{CmNh1)s(' );
define( 'LOGGED_IN_SALT',   '<OT7BAWEjC_%{hV?uv?*DzpzWOS$.j7@&azmOO+&u#$`n;ctid8Nq)~t)ZngnFu_' );
define( 'NONCE_SALT',       '~$*rAbi#B89&QiXZk#U5LRI-IA$cq};*9.>Z5{!( d:r.smf (#CI:K4k^djH,Kd' );

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
