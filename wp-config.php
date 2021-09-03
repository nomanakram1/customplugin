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
define( 'DB_NAME', 'customplugin' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '`uL>CHp3/f6z9xg1N/3}t|tT>:E<(?Xb@H?`4 45~v AoTC8>>i5F0eR-P~UXmR|' );
define( 'SECURE_AUTH_KEY',  'F~56Wu);fNYB]3vR<8Uue~R2*WQ<=Ew1,b/20o+!9Ba>qf<q3OK~xD8aSYvJQr/l' );
define( 'LOGGED_IN_KEY',    'X=FoK5h#oZKC3nfF],-yk }wy^f&cFOnT3N5JQdHLwxwQg hxAtkhr>|^f 5&19&' );
define( 'NONCE_KEY',        'lO#2%|?)T~z?B<,guRqJi,U.`o::kgS(oce?~W#c[rF-Luq?`NsGE86%8XJ/:x~_' );
define( 'AUTH_SALT',        '-/DfPs~Bca,>1pB6^VE:,;cHQ[2hfUdzcD]@9-.STV!%_Sj:G1/u@ xSHD!fB=!q' );
define( 'SECURE_AUTH_SALT', '3z_gth%55<}jB1D{5|q0/3qFvP,_#p,Hm%k*LHzDCnL=K!OXZ28_&A_83DqNOE#p' );
define( 'LOGGED_IN_SALT',   '%@WNQ4PN0:~RAa?tgU6IC.-vQvR3^>-,(*1PQ(o#W7^Y xd-SWwiQ24Mi(-1z5ek' );
define( 'NONCE_SALT',       'Tjo(QNkVtHR5?_Gx8+.( !Wx})~7~otWS}$;[JM=D#984 hdz`3Y9|B!Y5@9on^`' );

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
