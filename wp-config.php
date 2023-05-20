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
define( 'DB_NAME', 'baocao' );

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
define( 'AUTH_KEY',         'FRN3Rl:C04LcDx*yq7DYFLQ:i8!OvZZdY}DwB-X[o*#sgvnI.U8u]5Y[D=HEnE^z' );
define( 'SECURE_AUTH_KEY',  '#6*C8 O.e1  WzU`Q!-e<+0FzcjX23sK(2bQ:8ET[}&CMu&[io8snCR?H%pI.`S:' );
define( 'LOGGED_IN_KEY',    'H(*%X1Xj.?iYjJ4AExTuFa+IGe{]u `gd@Mt>hket8VyzK9y]A68,6<xY.E8&bJ9' );
define( 'NONCE_KEY',        '#N>9,pRRZo|,Pv|1-|7eH.qchMI%{NEd/$1-;v0f0xTIp*G$`|,BaH=mW+)U]3T6' );
define( 'AUTH_SALT',        'l?yrgD_|!3I$8~,>h6kL6S0Q@m7ATC[Zv!<4Ss(LN}#@P0:!,s@77Nwr)KW8A0@0' );
define( 'SECURE_AUTH_SALT', '8w`{.?,.E.Q,*o5RjT5E,|eUfRU(up6G<69p:GAJ|:R3=CMEoja+=IE~o)|sF~3m' );
define( 'LOGGED_IN_SALT',   'V_DBjX.=^~z!+UuG0RizH@J63T;p`Xq(r+*n76_ah=|Ek[gt*zN>7*pLm2M:DibS' );
define( 'NONCE_SALT',       'r@Kl_1>G(A$=@;tP{+m75|h QsFM*Rj]=r:e>K!*t .P/J,QB @*N&GPAA$oD}M8' );

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
