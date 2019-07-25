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
define( 'DB_NAME', 'mimidb' );

/** MySQL database username */
define( 'DB_USER', 'mymoon7' );

/** MySQL database password */
define( 'DB_PASSWORD', 'passer' );

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
define( 'AUTH_KEY',         'byVuQ5d`=sni.(EHj^7My(rtg3tfS{ywy3vf &i}DD6uY;(m ,s$eLuWf*xZGD1$' );
define( 'SECURE_AUTH_KEY',  'A<$Qm3#,zV.?4=v5q^g[$w<X[4Bg94pt+nFqAmq6ui:/5CY,W,)H#!6^WT#|.iyT' );
define( 'LOGGED_IN_KEY',    'oy=(4`W$1VQ}Nn-2RraL_WD5tb}zh?IdgY0,`V,(:T^gprzvPJzQc4A4>!1%E:lW' );
define( 'NONCE_KEY',        '#;uUmDR6L$&Qk;2~?xzkT39kUJz]rp5gW2q4LYe-:|X<UfQh=7WLN1}J>Q]Q~D}b' );
define( 'AUTH_SALT',        'gVd5;hSfJQd>mbzZcwL1|%&@!|vEih-elKpNM2FPsX?fAB6.MP#:v)3&1s!7+40>' );
define( 'SECURE_AUTH_SALT', 'K>#sjuRlAavTdc>w7#s7W`KgnAc#V_Boe}&EMG,_d/^$<Q3%R~Sn(J3G{Ud+dRs`' );
define( 'LOGGED_IN_SALT',   '|9!Ft9p4,#yWHm}?$cXtE=2-|(JO!sQT?tVxk*QnpX,b%J1v;yiay[Myzaw4VMQF' );
define( 'NONCE_SALT',       '=Gha_D $n23s[12Y}o [/;C]6O[ca`US!$2f<&T<n[lX]mDfE<2v2SzFQgalp<qf' );

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
