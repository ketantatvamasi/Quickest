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
define( 'DB_NAME', 'quickestimatewp' );

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
define( 'AUTH_KEY',         'V&HsJ8ARu}M+]-sr,SxJw@L.CV]lB|6>?d<KCy9J}p>jag&t3;!%>:j<A lBUJv]' );
define( 'SECURE_AUTH_KEY',  'b0fRr?`UD!tMSEphRXQ(9@iC0r+zo*UjqY[C8ifkWMN!uCZ|g``-.UDDx|F8g#yv' );
define( 'LOGGED_IN_KEY',    '&]5BsWM-|P!-?J)yj=nh3Hhl8m00I,dCTG#|+y:9wZ$uy!lsb<F(@X-r mmD7#3Z' );
define( 'NONCE_KEY',        'as&0Mfh?/Tx>+f|1/IJO*Ecr_T;Cw~Q/xSF`)1?sB+3-&8-A$gg|!2u8:VZr:)Q)' );
define( 'AUTH_SALT',        '[W&>DJJ6c/:7=0$)zSF&C/,iu8e#~X:J$:->Eq`PYU40hFd65LX4H|TZNEp&WyBc' );
define( 'SECURE_AUTH_SALT', '/C?PzNJ/$#s[;|^ON^V*(!>x%%)(YEe!l[rS6vM2ok^,bLvTF-DO;>bJw}en+3VH' );
define( 'LOGGED_IN_SALT',   'Lrn{|cm57V5u>u|qR7J|=HFrgoYb<0E5cFX|c.Kh)c V-Tw}V5,<~7=Ur?}>(=6H' );
define( 'NONCE_SALT',       '4C9P4L&-7q_s?Z;!YxJpE}P%Dw>@hkr=?cEC8`:;#^@(Du+qwR/_.p@sj/m+Rvt^' );

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
define('FS_METHOD', 'direct');
