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
define( 'DB_NAME', 'morran-shop' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'mysql' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/** Limit post revisions to 3 */
define('WP_POST_REVISIONS', 3);

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
define( 'AUTH_KEY',         '~H7HHd6(lR9/nL^ngKxI;pT2(6eu 3$&Z,@AT^.42zY6}d8Mg=^<E`eB!*sa-:1*' );
define( 'SECURE_AUTH_KEY',  '{?FI%D`v=yC&hEkVL$@.+A>xQfK$C# YTGSziMJ{8N6_kZp&Mb<o(#0EkUX/j/=p' );
define( 'LOGGED_IN_KEY',    'a`GO<Fy**;0F[fpr=2v1B,[ssFGKce.a]t.$A:Qel++d{}8_6-$~D 1~dPZ2>0~(' );
define( 'NONCE_KEY',        '.-p0^ggW0q]9e*qK|MDwi,;1ChDx>X3q[LX|<H^KCD8azsY^*e<npl#Sv_{G]^f{' );
define( 'AUTH_SALT',        '!mAY_RMah^8J~)YKu-W]n%Y|qP=X%+576~]~R$x>xI|R]X[/FgaZvk8yw=.@SFvw' );
define( 'SECURE_AUTH_SALT', 'NrI `Y^` -ht6h8!]D,b1>cs+{f<R7$!Z%.@4NN)<%Xz<EM ND4{aA<LioV6k5}H' );
define( 'LOGGED_IN_SALT',   'SKn^ 4{`cZkVUg6E-^5})d~!E}2O#G$VKh|a,AT X#S o0eZt0&*Q2Z,9(p/a0)&' );
define( 'NONCE_SALT',       ')_vIsA:1 %.:|os>#T1AQDn*LZ2ne_e|:9]b %^-vv 6{uP@96Lb3]#m*4kz+pPE' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'ms_';

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
