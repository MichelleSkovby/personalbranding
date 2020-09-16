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

define('FS_METHOD','direct');


// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpresslocalhost' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         ';oaw>7`9a31pRZH9VC;nr,<$}9:D%F|OZ/:osW-pr>C(-d&+:<!cYl+.,a.^ccX@');
define('SECURE_AUTH_KEY',  '39pC!#*}AS+zP)L5p;I~|bLS{o:40]9lfn(M-v.ImyLRLC-W$h8D@-IT?[|aNu%R');
define('LOGGED_IN_KEY',    ',~?l[RfWOpMCM@5>7 HUs4@hq[{IOqwWH%7XyTgzF{&9bk;QCO-|%>{,9<xA-3]l');
define('NONCE_KEY',        '_|HxT+SANBY)&Fl++h}<<Guj]$2NIht{kd|K|r*lPB%-]ig8?f24=.+{%Hhc+3 k');
define('AUTH_SALT',        'jWoa*emQ<7)#cb0-.tAEew[Vl:JW-X35h3!|0Hfa,<WxNd(|oaslX-U9yUR0,$Kf');
define('SECURE_AUTH_SALT', 'Y4KJBgkX5G/qU.9G0pQzzQ9rm-}Mdk.l=1M^l:!?@%y^j`Bys>ws@ZDBfiDrj}&j');
define('LOGGED_IN_SALT',   'y+tmr6fP5#0mKNqN`sqzBfVJ-j%G<?<T$+M;|H.3fQ ~UVb=&g:RuKh--2 P_ItH');
define('NONCE_SALT',       ']oA$sSn`J,6t<|P<oA2B_nC9;@V8 1R>zL^<r@I73|*/-N_^,}iD-]XXh)uzRjQD');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wplocalhost_';

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
