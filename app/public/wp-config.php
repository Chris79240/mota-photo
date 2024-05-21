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
define( 'AUTH_KEY',          ' 8QJawKxw!rXwDc^pXCU7S`/WIpGhP(g!5Yk-vz*Lb<bm(4G/iNRAj|cRN9D4A_E' );
define( 'SECURE_AUTH_KEY',   'qr4K^82+i=yA]XSS4;v}tE$H F.Zn43$/_!fe<EtIcOH,Em@K6X*AJ<M{+BMVGM,' );
define( 'LOGGED_IN_KEY',     '8|f,:K+Mo) ]mzU(FFTfa5V&l&bJy#oG+yV8Du?*vZQowQyN6]cD+8Qg|Q!Q]WYe' );
define( 'NONCE_KEY',         ' XArDdFn7I4X~}vV}$tro}[OFJwp)-Xqy`~MhUcMW1s{|YjL%Z:H-|Rdu3bBG!q>' );
define( 'AUTH_SALT',         '(6= F9$l0 cs-% /A^cr+[W<)|ep.gBFY.SXN/.fHfLQ4P0fKcfS!q|0_J3Wws|5' );
define( 'SECURE_AUTH_SALT',  'pX/{{J`[8v{`X_;UpwB8n&8a/_4cBhJiQ+Z$`Jbe5vt|!H=a3eky0m:~bRfvmQ/4' );
define( 'LOGGED_IN_SALT',    'lQ!f|4!*0nwWd0wt6MBdjU3=A*C_t#CQf. -/v%g17qlb2c;x~UJxsjk.IlkqU:h' );
define( 'NONCE_SALT',        'BSf-,ORWxlM[sF]3@s:50vDL]`#p%!o.I:=l&)Lij !/YZQjGm!87wAV]F^f[B~)' );
define( 'WP_CACHE_KEY_SALT', 'OLT<x7[*}MA?E3k(p8{6vges`AF[KceR$)S+yPL@*WE]y;<l.&mdVbtyc=hsFk,l' );


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
