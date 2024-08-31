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
define( 'AUTH_KEY',          '[yc~fQ(<Vwr<1q;Lc>cQLmXhsb!DoGbJ]NTVp},}`:g eF}/u#q]X:g%5`_KY[^w' );
define( 'SECURE_AUTH_KEY',   '%+}DtVe>oqxVWVj{9gIvF:T_v @X#jXz |6?V{0S>CdwJx<HiF:g;zH+PIN>QI^0' );
define( 'LOGGED_IN_KEY',     '/Jc,%( +9O:Z2z.;9cLU9O}6~jS#DU9.D._ng$VVkOyU#y~nSm_;DC@?mJ_,i:c^' );
define( 'NONCE_KEY',         '$oT,i[yvizIF aSCZ{-fy$ 9!J@WKw,Qkl5XyCkh7~eC$pMGCc72#!k4x$O{|zvf' );
define( 'AUTH_SALT',         'n>ZM8l{U6Uk%zkVG=~#NJ5-Us]wH/v3`@d#IltpRxtze4:1Q6_F7#^Z_-L_V*qn(' );
define( 'SECURE_AUTH_SALT',  'T}}%D[c^E*TP2jx&@MtoH|RT}y{~<b7d+,L5@_Qq~)4E#C/FQ9_.EaiiU1@?*@x$' );
define( 'LOGGED_IN_SALT',    'ni^ `li7*F(P0Dvhh}Q~~46*A|(RgB2,,VwBWQj*)3-vzt:D=~e$91>HTAuzFXkv' );
define( 'NONCE_SALT',        'Le5d*q8,Tws{6FvJn%+dM18dqHg)KS.:10h{CR-wKZ,%yUoQx$ @a<$o]9%LDRs;' );
define( 'WP_CACHE_KEY_SALT', '=.6qgQCn8~#2Ntg?PE?-ks67K2.f4TD.{W.IZ}n|(O 8V/$QNi:4?_Zt8FR&C#v1' );


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
