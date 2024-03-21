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
define( 'DB_NAME', 'Wp_Cafe' );

/** Database username */
define( 'DB_USER', 'mamun' );

/** Database password */
define( 'DB_PASSWORD', '123456789' );

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
define( 'AUTH_KEY',         'TBaCEvv{/*],]0OVD[0b&,^U_rJ]r#E0?X+ILsa7=orve*}@EhlLIma&QVaL^%IF' );
define( 'SECURE_AUTH_KEY',  'y23Er|gtwcR*ybTL@bre{QwUJ>*LwrdM*uG7ld,@eVCCaa~B)@LS2a;_YH5cXa)A' );
define( 'LOGGED_IN_KEY',    '6(Fw!kaMrS3p3mtprU=m/ul;T9OfR{_f 56#.CeE_F-sxG&.OWGyfxIxf]pL$5JU' );
define( 'NONCE_KEY',        'pJ=|*3iuQs9`Si4fNEt#!e+_qNA=TZ1x=,mQBz4hQE}!.-xl4c8Q+ A}/b9o/v2N' );
define( 'AUTH_SALT',        'R])Xq3YpH)voqetx|5hd74BN,t;ihtESM`=.fc:f6wr1YQY9N:8YpIz]0.c;4KwX' );
define( 'SECURE_AUTH_SALT', 'B9dJ*G_%a[G=-kW95>!c#hg8~!qU+BXH<~1rOQg_3&k$sA>V$(,a;NK]FXH5p}z;' );
define( 'LOGGED_IN_SALT',   'gjS;U>$GjZ|xE%6)JZlQcoQ+eo!OjcJ,*hiCG7.G>1Z>L`.BXHMbJQG_rm:gSB_2' );
define( 'NONCE_SALT',       'M#2%SvL{0`%Qj?muMq$~=BnMf$Vh9ahX:4tO5/; dV`X>J4L^}inTp)21Sc$4LL:' );

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
