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
define( 'DB_NAME', 'wordpress_dras' );

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
define( 'AUTH_KEY',         ' vg}bE22DK@w%*HTimo24Ml~[jT*}73z~/]f=F,3c[et#qS<s|gw204z803C)x5_' );
define( 'SECURE_AUTH_KEY',  'o}PUv5S+ua*!vcX/nO;4NqK?gn$%~0~0<N~S(RIR.E`. 0-=C@u|,FA X @mhYYM' );
define( 'LOGGED_IN_KEY',    '9sR8(xTY2_x<!3Gv3%eM4{-{u~}mki(4hfL.wdKjqyd/2i>T`V?JF$esjBI:JsQj' );
define( 'NONCE_KEY',        'tTmYygZYLSeJ~6Xrqb[U.+]@PxH{[bwDN`R^MCu7PX]@_8rHg~Y16toz0*-;{&0(' );
define( 'AUTH_SALT',        ']zeG}O8AvP,bHDM7CsIBLPEFGkH(1!P-vl[-CT:>G71B8|hq5,*0hJLGx1SWE!1>' );
define( 'SECURE_AUTH_SALT', 'a><-5NQgT8lSmr0?O(jAz&/#e:65Q:ZKz4F,5s&!IQ%9#/e= RdHoX)n)=j0.O_M' );
define( 'LOGGED_IN_SALT',   ']M3B_{.=hQa/8U{q4,XAAL9JM.[h51.Y&VLkop/a.to#RT1^#pujW<Hd +{,#$@+' );
define( 'NONCE_SALT',       '/@]Uv(9Vibj+PlaKfesQ#AKr%`s{-QQwwaN}?i4H]LsyW{_vDfRyIIZTF(kA+|JQ' );

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
