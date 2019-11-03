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
define( 'DB_NAME', 'wp-blog-2019-2' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'e738b0da4d513ca4a7bcdead3b12a7835dab232849908bf1' );

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
define( 'AUTH_KEY',         '|N?2P/mS*^}m,c2<.G8j45%9Fq5yUTB}ATu@]}VMIg:VFwm{-Z1-m>&AKkw&:@z|' );
define( 'SECURE_AUTH_KEY',  'KkdB}xKuO3PwUqsAtRoXIF[8GB0CopaG>J>FTP&gf_a?D);Z)nU e>q{5*f(~Z47' );
define( 'LOGGED_IN_KEY',    ':87s=EF6+h7N8fJrg1!jY=mG];.+!kaf;)CrEL%TiPDTyj&XrD0OP0kb#l:Ey03,' );
define( 'NONCE_KEY',        'q 8:t=Evm<k6gqls#cT;MmIQ+HR7QopRT)-*eIpi/s%5p-qb-RJ`}}4i~qe_Z4?x' );
define( 'AUTH_SALT',        'fc#T~poqGM(]&XSh3=S.d`vBG3HoP*&*Z)7aR-$m+B?MJ8NdCcHv![`%hN_J`)j%' );
define( 'SECURE_AUTH_SALT', '[`E}bOsq;Z[2VyhJ7a7G)]3=[:q!6Tq_UbsBO6{XZ.bFsHj}NP$t3lrQf{m+UHqc' );
define( 'LOGGED_IN_SALT',   '5JTk[56?>tYr m<ni!#1ew|N#AqKpDfZZEc1sBpNa=g;4Joa#81+nJYQ.na&YZg1' );
define( 'NONCE_SALT',       '8$/MWyI32LNw 2_Q2e_Fv4Y$(xAPJfV/jo^_cq(rq92D4Ha#q*w9haAwCdvR] &L' );

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
