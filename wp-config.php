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
define( 'DB_NAME', 'ceej_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'Kp=e)1-wzn:*+MRG,acw~~ec)>_q~yZ2Z(?J~C4hYaPlOyx-dp5G=tPl%hOCKmS ' );
define( 'SECURE_AUTH_KEY',  'e7k,qrtz#J8}Rd7U;{:d{>-:?bN1`M/t*~=7$gOk4Ovf&:d69_?]RQS(VIHk:Hn7' );
define( 'LOGGED_IN_KEY',    'z4DM((1]A*21ziR9dO)]ZdcG/0P;X{X(+BVkVtfXpG%{Cm:OG;Gt}ne:XF$VB%xa' );
define( 'NONCE_KEY',        'a/aENgu`7+JA3c@*QzalrZ7!IOEN$bc?CSre0F,lOi/.lx@:7H^.EvA)LZbLYlq=' );
define( 'AUTH_SALT',        'aY>AFdEr:P8];?Sq5o9M7v9b/)a&_r}d#U+2579SRH!3L<.4Y_tcEjo$e`mxBYl|' );
define( 'SECURE_AUTH_SALT', '-1x*hSd#O+(Y-$cOF jA+a,D8:VU[]RB&J0BTJ4I~GG:@gklaTVE,O{$#*(d(q%+' );
define( 'LOGGED_IN_SALT',   '`W?h_uugZulyuMElV5t/5SF3Zm?|kK9eq7q3]`<*;vY&[XMT@4JPR|W(l+D`t?WP' );
define( 'NONCE_SALT',       '|MMN/O%#eJn3Ft1}[-2`|KRlvE49sX|ZM%]P^ZGB)PO-G++0A90,e}<{22 dBe)j' );

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
