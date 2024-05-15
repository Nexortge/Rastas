<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
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
define( 'DB_NAME', 'wordpress1' );

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
define( 'AUTH_KEY',         'Lx|{yv`26p3Xzb{he|Gm7)7rBN>?*]IU~@G})-zu>hFajE}l~9H9$zKJ+j|b<~2j' );
define( 'SECURE_AUTH_KEY',  '~#h4::I.T{n._REplz,qy|O&(W@7z+9&Y-}{-rHuS#GRrNQbD68xa9kb)pp|a}Zy' );
define( 'LOGGED_IN_KEY',    'Pnm[hSvY`Bt$j=io/GUAB.:K@?9_[B7p-#bw,~]DW=DjOA@_fqsjkTJnW`OJLTD4' );
define( 'NONCE_KEY',        '3<+&u3)qb3v_@9M=z/t7t{eg2OdC}x6Wv~DV.YTScRC0LL4_}tCUy#&d<:mP&Z!<' );
define( 'AUTH_SALT',        'TxT_}kBY^2M !j##ywkNa GL3q7`S:lF]VTl!lP+t&H(U3T4(wxr};fm`:B3xTP3' );
define( 'SECURE_AUTH_SALT', 'zWP?3!=87T:|2-]_{p3xK6)LT4!P=m~6;]Ld&bzwt_/7<u4kJyb_ezwz;5nmD!ca' );
define( 'LOGGED_IN_SALT',   'AOR]<.?ZD^AzLt(zq=`Z90b>CObW@2~@z{VK{j@d>#q*S#RP8dLtHQ6A?2m<t3X+' );
define( 'NONCE_SALT',       ',<![E/*[MRe1D/ox|`#tF^D~C~D2dYGFwvf;$jh1(DN=MRX;D 4Z#dIBV]$7i}a1' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'bl_';

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
