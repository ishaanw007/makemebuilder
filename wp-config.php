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

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'Make Me Builder' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'UK[:njwIkZKv`iVg_NWWV4`PU1{OIE{7iOVc2W:VFy;[$eDiF4Yf`-W_rY!$]#$0' );
define( 'SECURE_AUTH_KEY',  '/ESFBWVd_c.|Wr?S&5>:`s=zxg|}s=8*R}|WX}Q|1/^RR-*S>Yh@8_;S7:yu7vzG' );
define( 'LOGGED_IN_KEY',    'wQ Hz]=,fr~$eq8y&jbWRs9A(~~>UBS3L5>Eo{K,f{YOuh*j;9#kBU}OWIVU 8.<' );
define( 'NONCE_KEY',        'dB9ie>x;;Y$tgmVdD!:XB0D6IwY$&m.uXy1$RI %&c&!nFzH3I_:gxrcxtl(ET2b' );
define( 'AUTH_SALT',        'Mcd0|h D|<8J<PS~Gin]jtj1<o/l{kV N=4T![Nx,rw#=DcrS>%0P$Sz0d$`2p3-' );
define( 'SECURE_AUTH_SALT', ':PD?WE}[8rg8!gWzGQD&f] eoJ{0`|GF1}wA_6oLOXWhm1x.tn;3J/{8}$OgS@n,' );
define( 'LOGGED_IN_SALT',   'm x+&mP7=~?>C2}vvJz;QIO 2<DWEei9ZzNY0$Pr+0Cw+EkWFoD(21Ax?Z}S3M~(' );
define( 'NONCE_SALT',       '@ESbt3nnpjm8>)bpU7^~VSVtU[ty!n5#La2zW-j:lp.nx<o+OK->ZW`:.,Gi:.6q' );

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
