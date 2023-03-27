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
define( 'DB_NAME', 'travel_agency_wp' );

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
define( 'AUTH_KEY',         'fy:B)-XW[5^E^F.<~}=@K6mB!L~[n):n{[A_F0}.a/1&8+FfA&>Kgc=e,8jm6tZ]' );
define( 'SECURE_AUTH_KEY',  'w*zS{y*1a<i9`UteXfh+Pn((Qrw,Nocz9-p~ElM&-VB}v%E76bKdILC#TXz{agl0' );
define( 'LOGGED_IN_KEY',    'pw~r5MfwIEAdS6K34%9N0a.$c5<6 u2ZllObZE_^PDn3MEEz 7[gf,VP;s<@W6Y(' );
define( 'NONCE_KEY',        'iE-j7^kJ5E%Ulkwjf8+Vl)Ph;qv/]zXQ-.<-wLOKJno%p-X5/ {mxvtXyT*P5B{I' );
define( 'AUTH_SALT',        'Dnv)]0ulz*m!IuA)|?V2^ Vu3qx2mkLk9ndw{5)nps<Wcje|tWNicCdJx1+5~uB^' );
define( 'SECURE_AUTH_SALT', 'Pb<;HJZifL[(o+M;vuBD[;c$WK*0|t=D, zT_Kv5WBzH|<2w[:NV_)t$hz7_wMgH' );
define( 'LOGGED_IN_SALT',   '@^8)=-q{#XLVJ$l1%[0)Qci>}V1F#C)vsm|(0]?nQoFBRy{KF_~>x~A>Wn_FZT6q' );
define( 'NONCE_SALT',       '2#FV)$4OuadT6M^@RQnv+Ve3rr%iMC$jrGi)*]=]V*Qtg|fmzl@;YeO7cL$3Y&_U' );

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
