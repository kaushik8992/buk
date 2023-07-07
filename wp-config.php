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
define( 'DB_NAME', "db2en2iarwasbw" );

/** Database username */
define( 'DB_USER', "u0nsyueorwuha" );

/** Database password */
define( 'DB_PASSWORD', "pbtxuvtajo3r" );

/** Database hostname */
define( 'DB_HOST', "localhost" );

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
define( 'AUTH_KEY',         ']i)/}U#TNG7K@)#Kr et;h33HxdMI?Q5Y*Nc@Bl[{%HSIQDEyv/E[SQ7<uxO]TUg' );
define( 'SECURE_AUTH_KEY',  '6KR$avDwll#x_o|`L]bzb{Sf~,Il<cB[/ff2})lg<2A}jl^}vTJ2,*i}URj_DvP3' );
define( 'LOGGED_IN_KEY',    'F%k+t=.pI.ReDG_1zQ?r,7>bI>~u]_~_8 *VcmLF^HE3]87iinV>,cEv7kVg]$D%' );
define( 'NONCE_KEY',        'EKo?6#:_##G{1fFZo^3C)D3w]*sQ`D6842H,`:sdu`(ITS^nY#Z-+10}GFQ$Z{oR' );
define( 'AUTH_SALT',        'ghg_kQf[|R2lpoB:nYpb5tfKX/U34ndc_;1RmLB^iu.dnwM>t/Ez8$YD.1^u0>$;' );
define( 'SECURE_AUTH_SALT', 'V7V(_(H@2>k&:)-lh<-p=bGX7|(7P{d>9R@n_@F_xu7{1e*]Goh&wDPQa|t]44}q' );
define( 'LOGGED_IN_SALT',   'f<9_ Seqg+>q^Xp1b?w3},Gnim+!VyL_=bvD2Ng)mLZXQ_h/g8;XfvgLsx^NgtXs' );
define( 'NONCE_SALT',       '@:@hhO8[H0Z kMteD<y1[pH?M;h9^Xt^r789bYm6r7]KlGrpiCv:B/41p%F_P$&#' );

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



define( 'WP_SITEURL', 'http://techlabeeu.sg-host.com/' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname(__FILE__) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
