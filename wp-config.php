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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wscube' );

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
define( 'AUTH_KEY',         ';py>>);-myu}[bi1}M |y1_6ufMO@2Gyp:y%sKnQokRPk0i83}$qZ`LQ$MH9$|l}' );
define( 'SECURE_AUTH_KEY',  'g eWt$4[9fbTIs8 rTUGkBgtr~mz=L5UBjk03siIP/Aj/93&E1fQC[bsni}q~B$4' );
define( 'LOGGED_IN_KEY',    'vO/;&P=TB=>lS4 H%JY9{T2`^mHNMr4~^D51ToX>*$,|b:W*o;J}509Uk~O^q(WO' );
define( 'NONCE_KEY',        '+&-TSjm98SL#5K3I[V48, kI?pXlA/EGgxSnX;4Y><E>TJ4)_lR^yg6.tf5E)l*|' );
define( 'AUTH_SALT',        'I-c=zkn:2HNC&#jE3KKk0N4GF&vjy {x)4n%+oP=k2ZopPn%S1Wy3nFmx%#>h671' );
define( 'SECURE_AUTH_SALT', ',I ~mNwOC.m*k*|Iy~fUhe|yb~m&zk*Ay5YR_L+!Eog> J3~8IPpp]<cW?SaS2`Q' );
define( 'LOGGED_IN_SALT',   '/%c}pI1tX@wrA=l%N2DTCDf?j=7JKI|<*7!hJ_}P4SA!-eK~U[km1Zo)QyI>zurA' );
define( 'NONCE_SALT',       '>}IQH@aN~kn,~~I</&Q3s.h4W!dsHE4d] 1+0>F560:j47,n8oJx[i^Wq5[YhFn~' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
