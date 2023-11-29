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
define( 'DB_NAME', 'nozumi' );

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
define( 'AUTH_KEY',         's,{1VHu]|1OP!xD[{2n8?PtO0!:+ztrH@,mF`5F<RVHD*_iJ.Cr;w:KKB6at8!{w' );
define( 'SECURE_AUTH_KEY',  'Yag>[kK4PcPK6DG&QD@q:&J2U^f#4Qo_L #5xF5(tV!|]$f5>:Y^Q1.L5),9q$gj' );
define( 'LOGGED_IN_KEY',    '}kZY`6QS:2GuUIDv]lG>;~,.S_g-jNq)NIk%Z!G9).#{!Kxmo!>G~BMFmzt%:F/z' );
define( 'NONCE_KEY',        '5$j91<Vz8AQb5i,;#> 5s&Pzz9tkRN%)&VxMpvhyn{a9),K)ES!N}RGmDvS5^404' );
define( 'AUTH_SALT',        'bha*>X=O[5w*KIme;@REJn?5=0F>%-A.BaxapB5/8lkIUFJ#86!d cS>a8IYq>VC' );
define( 'SECURE_AUTH_SALT', 'hH]s>!QI(F6xs%m[wJ_0q+<lV# 1Y;1)z@Nvk&:5S1}zC](Y>E7ciN[Ui/,x|4zD' );
define( 'LOGGED_IN_SALT',   'mE)ZT}>Zj>:lZOM5Tm3.zSR$ QNm?J^r9*}r-~*u>x]w?|]q:]%oe6?;[t%Ipimt' );
define( 'NONCE_SALT',       '<WrQ/vxns<P)) -k4GdMBly*]$Lvj^WumYLBgr9wt)I&[g(WG/0x(@vAQ1ff7mB;' );

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
// define( 'WP_DEBUG', false );

ini_set('display_errors','Off');
ini_set('error_reporting', E_ALL );
define('WP_DEBUG', false);
define('WP_DEBUG_DISPLAY', false);

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
