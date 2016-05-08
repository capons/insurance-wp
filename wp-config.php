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
define('DB_NAME', 'new-wp');

/** MySQL database username */
define('DB_USER', 'user');

/** MySQL database password */
define('DB_PASSWORD', '11111');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'L55hxJN0c;~}QRyY1Db6.BMTI@gg29_41<l~vtjX1Pk3fw7=lye=T>QW9rE3d.z8');
define('SECURE_AUTH_KEY',  ']N>qWei*LxD.kTbl4_(Qa,FE6Dg4[DYSgzL^eRJ;B*+W!gYY,#=vSLoh(4?Vngvn');
define('LOGGED_IN_KEY',    '/[7z>faHU)5&ES-t>omU28yRr=|2+BKl-W<Wwyd*0hRN!g%WcKfjV-B<z*^,C@RB');
define('NONCE_KEY',        'lD81vC!Mts-@l)p%opGX!%+e>me+7UyV~a4PQ`qS)b4HcV!^ uipt[?7OqlK;_bO');
define('AUTH_SALT',        ' Wanr]@__;2Kng}F[pokSh?=8lD{d_N?9yO[2%Kh?Il>+JkZa3)WE`>U )eQdyWI');
define('SECURE_AUTH_SALT', '-EF,3pk8824!V./Q1S(/O`]U*G]KTHqk+p+~48[-T2$2 %)JcfOs3*TMcsHW1MtM');
define('LOGGED_IN_SALT',   '^s0]8}L80rN[g.(xXzzFMND{rPIF%#/_;x28N`Mbj%6wA5%z]Zl8$0d1HERnG/Sf');
define('NONCE_SALT',       'o]ZP^pzM% TyBiMt8[X!Q9Wt#}tN5g9`|g9>rRy<Q)Q5,m<UcB/V O7<Kkgq:B0v');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
