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
define( 'DB_NAME', 'maleich_web-test' );

/** Database username */
define( 'DB_USER', 'maleich_web-test' );

/** Database password */
define( 'DB_PASSWORD', '240709Art' );

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
define( 'AUTH_KEY',         'lpr$FuMOGG4HHDHDu)#Jy^)R,,9Zz*BH+Rw;F<Q1eKO|M0#o&|27_NRb-wYvl>#%' );
define( 'SECURE_AUTH_KEY',  '*H({:(O4PQRu$(o[jbyzFI/hiuFGh&g@<T3cwFMUFb[y/X17m#$OsYja&<>P7>te' );
define( 'LOGGED_IN_KEY',    '1/8e~hv0~0Z&pi_mU]oz|!4]L=BiG AI|7t? <#7p[trnB8HnV9+E?Ie9[?i~)!T' );
define( 'NONCE_KEY',        'N<qr[- #ODmVtv)$IfxMp[8xm@`5`C-[=}z/S%jIpdE) W($74ofplB{,v<8EjIW' );
define( 'AUTH_SALT',        'XipdkD6:Z%v1RFBCWp*%8Q%wwPiOOC@V.w:i.rf4bs!U]JbkFXr]6]O%(YNW9p4&' );
define( 'SECURE_AUTH_SALT', 'FUFn9&{7BLdEQH&.96m@22=zDT} D?d.xv( 6m-V[dhRagq?YXq[d_q=RkjSL~!f' );
define( 'LOGGED_IN_SALT',   'cdV~P 5D5IjNudd/=rL,tJ]pzN|LOlZwPh;&VH+PlY?}X5F57YkKIMowCb^~rp2+' );
define( 'NONCE_SALT',       '(i&i${6XX:wB Gw. vtADx7_rlpX&lyCa~WFFK2r5T,V~cNE HLw/v?JlZwU(QL`' );

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
