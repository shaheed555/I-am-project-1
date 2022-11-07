<?php
define( 'WP_CACHE', true );

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
define( 'DB_NAME', 'shaheed.e' );

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
define( 'AUTH_KEY',         ')}V0+Y|1^rnB#-{2pLOZv8L]hh^:h|$%_-UeoIz3y4p2{s8ENB7`XJDoR-GWxgkW' );
define( 'SECURE_AUTH_KEY',  'b_5)xve~Y8`jU r`SkIv7K/raYVH-4usj(LL!(MvbZEWr6qg#ICQUmJi8YF9j6%A' );
define( 'LOGGED_IN_KEY',    '$-v-c11eGCilo^d?DJ0->thI5(9~6yN}6`&S+mow4C%3Rg~MEE*fNJqWeo=&Gm:&' );
define( 'NONCE_KEY',        'BelKa<z2^2zz&XMA/,NrKs ,$0@WD}a$XC#jTzJZhSb^!a)qszuDFZ2Y1|6(jh2v' );
define( 'AUTH_SALT',        'kaAU9P-#GHPC_hn{>un`&z^Z}bSGpxNgKSY{C&B{K~oVQN3gs;qrT-@!pPY)dxlF' );
define( 'SECURE_AUTH_SALT', '*o;S4Reh,K<x1go01%@t}/7[_}!*DsF4:;;Tq-BMU[|7AM.<yq{+#@Q~zCD(fZ?x' );
define( 'LOGGED_IN_SALT',   'T F;oALj?krks5`sQ-rd1MNp;;[bk`fDYYo*OWYYdAY @z^4JWaaX7,|dF!YpYcx' );
define( 'NONCE_SALT',       ')1hx 7I^;cHrNtH/=2H((I/OyuSm3u9m;hXbJq&7fDd<oEu89jK/h9r>YxieaMuf' );

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
