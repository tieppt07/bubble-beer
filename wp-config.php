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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'bubble_beer_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         '-T`KAW5<*2xSROVfPssbWKEv4]|-2Pi{y{m(H0.a[F]75+}|AjIql=Dt-q98eiiB' );
define( 'SECURE_AUTH_KEY',  'G]Fr23+&B&Y5`#adnI !aW27]BD]7*4S+*Qp0{6(,d@[hw)l8W?/Q3sh;}MGJ[dk' );
define( 'LOGGED_IN_KEY',    '(v;{zxDYki{F_YD{k,=5KHy|e;]a6QIsac<em{gvsIoP`EXY^IM(C^00>|Q8T1k&' );
define( 'NONCE_KEY',        '~KydpnKuEfDZ1>9:b,Bv&)=?7U@or6?H.)x?jy/Nyo@Nmi$ ,|LEt?.vP_v,BvH7' );
define( 'AUTH_SALT',        'aHW9b+[@{j_M3{XVAPZasVp6GY:iyc7:EGv:?,TXk9%%f_;Wd*fmmUZJb+L35mwA' );
define( 'SECURE_AUTH_SALT', 'j{>X_wTeGNOoLQz>}jH(5%pS_%T]g2_B20lQ.2@7n>^04vgnC?{sV2K>>y;xwI<d' );
define( 'LOGGED_IN_SALT',   'Bc@z+p+o@j-z1|Z,zgc3WZ;3k8>0Y#&,WY2U0=,W4K`XU!y0l?<5=o#%6R0O/e8e' );
define( 'NONCE_SALT',       'u0O3V3|RbxtJ5Ajj%NtD%YxU9#,DyUcty bTWm*G!h|dpE<$ne59:GDT`6.~RY;$' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
