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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'S~:iS!87p,:2$ax^9:;Mi|k3/fj]wk/yI0g^)I<^dF)yxrC}fpd>|)dOHua-5=w7' );
define( 'SECURE_AUTH_KEY',  'I]Y5`Y1Ay`(W|](>8Rn)ZoN/YgYXT{Y3QPJPtm}Bh. 0#P=]h&9ip%)8qi`x*)|I' );
define( 'LOGGED_IN_KEY',    '(T0 k%;!iA?+)/V9^mxha5S,9eACcmpjuij8~(yUs40YRi%FG+1AXTu&MRpr05V9' );
define( 'NONCE_KEY',        '[}he>,s3X;Mo]YTkP[W5wi{Ob5aa-SZgx{{ML.k~2Y~nQfuEr5+;6ksxF.o4IW82' );
define( 'AUTH_SALT',        'i){565qeKcI:Yq}U6IxYNr:6Q&Dz-<F3h=E#k&!2I6da=er2W&aKz,Dj{Wj5$xPk' );
define( 'SECURE_AUTH_SALT', 'CF%b6XllkJiUF-[Y1-u&R,fD!YF[[|ykBZ0xqTTN(M:+#]<-mV313/sq6K8ptSIE' );
define( 'LOGGED_IN_SALT',   '+`|yZK7%SU~v|BBzEk Wh]Aa,?;B}.NqBz0Q^aTDDGCmnLpxe9QLOI[r7Z3k+3[a' );
define( 'NONCE_SALT',       '-Y6;wi?ke-ckq1QYRtyMi~P#@7,S$R|cuL9;wZ7ILoL^bx`lX6I5N(B*UeY=>:!+' );

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
