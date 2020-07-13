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
define( 'DB_NAME', 'homes' );

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
define( 'AUTH_KEY',         '&l5[$=9>pD&Bk$@1t^.EA:M@E2%cp[A2`+}F,[(tTQCS(8rPPP,6m3=|36(b^x8T' );
define( 'SECURE_AUTH_KEY',  'X Yu8NyyrxcCJ>)sHOF?&cQuGCnX9qk8l;&eIq|ru~>%qMNtW?OI(v$I&VKdZcKx' );
define( 'LOGGED_IN_KEY',    'aj`oHL2J &2=KEaouFx67q8&Wc6dkpvCD<A#$}FGF(*(2J|$)!xxWxz%;)/1wrZH' );
define( 'NONCE_KEY',        '<}(uT&Ax!/j<!@4+oo#C-U$xrRt4VBPE6WhUdq<-IE;@<vR5so6fb&?T8L_,m&Xi' );
define( 'AUTH_SALT',        ']d,lt)#I8+7&*,H(q7{;S;$x$W:|C9OM$JX*oJ`W`S x88V^t*d/@tY:*jC,*[CK' );
define( 'SECURE_AUTH_SALT', 'nN?[AU5XP=O!sD}lVu h^FZcP(CpJQyAh#-IcLkh5Ab*&jHda.&p36&n~*-(0uK`' );
define( 'LOGGED_IN_SALT',   'IqqF3VK{Q`c77>2X|0JmVH~P,QK^wq.%X]WO?g9i(=b]vFean:z^TSTs%JcXq%Jc' );
define( 'NONCE_SALT',       ')obM@&Yjug5pv|u/^FJAADfE?abYOgQ #6$w9[yi>BL2J;?+Nc89($;cTP+1sS&X' );

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
