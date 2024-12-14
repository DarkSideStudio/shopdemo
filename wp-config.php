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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'bawazir' );

/** Database username */
define( 'DB_USER', 'demo' );

/** Database password */
define( 'DB_PASSWORD', '1234' );

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
define( 'AUTH_KEY',         'kR<e5[l:QW_7Yzb(&BYl#pW4pXEmm ]qr7?wRac<hw?EAoR<9SaY=nuf8hCb:79]' );
define( 'SECURE_AUTH_KEY',  '[Y%Oz08k_D3,=H;Vr{1GXJg|L1U+g5KbM5%]|jH tRv9a#:ck YYvpocr$xv,LsF' );
define( 'LOGGED_IN_KEY',    'PnZP$T(|`]T_ovLs}TRbD+Hh` YyO lqe<jqD0S`5;(57Mt,*:>oNk81,EY-TK+V' );
define( 'NONCE_KEY',        'IJ>i>|(+[&sT3^px jp.PlziaM:o7;QMOBDh+^Q]|sf,D&:KM;QkXa5,HA7e]]~j' );
define( 'AUTH_SALT',        'mu?3!Y-$|RA+cm(6{3,Gwv?nE0_4}a$U#yI<QjC-7$$LXnku3{yBh,@#o|1(U`I ' );
define( 'SECURE_AUTH_SALT', '4}j>v_}H~IB>U6fcMM^xjT/n-^ Is}+$.[72;EnnN*_L-+b$Ipm7~%;MeLhv6/9j' );
define( 'LOGGED_IN_SALT',   '{?1ey=gQ{$#)JT8zJQ63V3tLh%x&iG1>ix5 PG9bg2]:P@hF]?iOyL?3L*A--z+a' );
define( 'NONCE_SALT',       '`[$DIqz*7wlJbMXA_2#+=/MwQ99_o**~E!uxtCkp<`_JgMggW/m-mKeS*.bCGzs&' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
