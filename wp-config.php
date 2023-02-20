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
define( 'DB_NAME', 'austinspalala_new' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'Admin@123' );

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
define( 'AUTH_KEY',         'P.w%>9}$M-,Y}x[eYE#`&52tGE?4JKG`]T$`Bz!~E!w{mX+mqwM+Vjv[FgC[Wp1k' );
define( 'SECURE_AUTH_KEY',  '8oc6gTNTBV5iFS8,9-TPs5=.acgt-n^F@NGTgsaqymrCNis}[{@$bC)|E*2D/SdV' );
define( 'LOGGED_IN_KEY',    'Z)UvL<:X.7Pr+>T$w@z:RU-.n7X$I)QvKK .[$(Cxy`&(xo.?3SpGMV[s55VR.KO' );
define( 'NONCE_KEY',        'csQsXofPlWQ8u$5 oN.IYUgXP$1~D#h.`&q|rJL9mT`/<|Hz3?0XK.#[gquh$o`6' );
define( 'AUTH_SALT',        'l_e~@Us<#Bnd5f{4[mOku/ Z%y-y%GV.5r=r?d}dZd4I#aS`zJY8)GCp).p(F[N.' );
define( 'SECURE_AUTH_SALT', 'Tgx(4`Z2-`b[_I5IAu$@m:HkRD8_NCcf|5;TaC<J_zI`V:h<2{7T4$ M9yTsV/j2' );
define( 'LOGGED_IN_SALT',   'd;&7!3+-!>.l jS-$%~U1#wud+l#8%:FpWNjr[CWW0t^m1okR}9mDH}E`T#-9uyH' );
define( 'NONCE_SALT',       'WppJ@MFC3 ETFHq@_aEPfedq{THlFli6k;i][PX><&L)~kle7OtQsL=rLBt7lmM*' );

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
define ('FS_METHOD', 'direct');

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
