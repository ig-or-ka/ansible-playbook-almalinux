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
define( 'DB_USER', '{{ db_user }}' );

/** Database password */
define( 'DB_PASSWORD', '{{ db_password }}' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

define('WP_PROXY_HOST', '{{ proxy_ip }}');
define('WP_PROXY_PORT', {{ proxy_port }});

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
define( 'AUTH_KEY',         '{_+#QAq^]|Zo.x*q@:{AJd`FN!!%*_-OYuRR)w>m~L8MYc7Satqg&5r3nVOYp9Vk' );
define( 'SECURE_AUTH_KEY',  '`Cn:M?j2DIWI& -Y,m}Bbs50I J2`HfaA^>8!s:&Q=h^4eSWlo{BVyDt}Dn=yYY&' );
define( 'LOGGED_IN_KEY',    '<7k<=v|gi_`EY~9<bBwNL27JB1?G[}w@NeT|C(p28qU;&7a&Jpnn_JH?midroTh^' );
define( 'NONCE_KEY',        'V/QOTW<BP?8.EU.auMzLtu 7-+NGwY4dI:`c^m,a+LI?6z$O^=$=>M>(U}HR*jHD' );
define( 'AUTH_SALT',        'm1FBN]qJ9$bY/+P(je]^MaPdG37n8C ivem[[Z;WXVdX(:gsUDWy-H4;f!-b#GPC' );
define( 'SECURE_AUTH_SALT', 'Wp>Xhdx$*^huUz?u9>(5=3$qtpAe!q={wIQK[%94cH%GD2aweUvo7/*_2Av%(0~!' );
define( 'LOGGED_IN_SALT',   'I7&:B,j;69nDxI`PVx?4Xr;^Xra:bYmQC&N+Gbjexy76K9Sg:*6e:Ks0]isHq7fu' );
define( 'NONCE_SALT',       '~wS5Z*9F)y*J4ehA4i&Ks`aH5{^gIdvf:&7p0MdsYWC-kY]3khsI#8p+9t|sO*EK' );

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
