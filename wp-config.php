<?php 
define('USE_FETCH_FOR_REQUESTS',true);
?><?php 
define('WP_HOME','https://diy-pwa.com/scope:0.1708635245508652');
define('WP_SITEURL','https://diy-pwa.com/scope:0.1708635245508652');
?><?php 
define('WP_DEBUG_LOG',true);
define('WP_DEBUG_DISPLAY',false);
?><?php define( 'CONCATENATE_SCRIPTS', false );
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
define( 'DB_NAME', 'database_name_here' );

/** Database username */
define( 'DB_USER', 'username_here' );

/** Database password */
define( 'DB_PASSWORD', 'password_here' );

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
define( 'AUTH_KEY','tUf+WVy-y]X2v3G]o&rgaU(dGT9BW4*L8A??@.F5');
define( 'SECURE_AUTH_KEY','YeI[5SKPcd%qyG=91OW,*FPH04!td.S(-jlvB4S+');
define( 'LOGGED_IN_KEY','0gPYXPGl@H@@u,uF=TWD7aMQr2/uorT)LvfbHEYE');
define( 'NONCE_KEY','yk+[,5D0@mpdGXcOX1ZM9)gR7OPaaIHJ7_JrPnSQ');
define( 'AUTH_SALT','H2/0J@mYa<>0#A@1s%c0m3OU-[GP.?2zu&Ra6fWO');
define( 'SECURE_AUTH_SALT','F^TUd15Z37D*ti40b@*yE5uDtk?5qWmCG7lfLYfR');
define( 'LOGGED_IN_SALT','0P_Eg4j87yp)XS23MfC*Y4ihiY1R5Esr5J+rSehO');
define( 'NONCE_SALT','%)pEacwefPSlAvuy,LerCAs6qp9rFBp1Bi-Ssahh');

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
define( 'WP_DEBUG',true);

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
