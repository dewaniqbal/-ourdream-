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
define( 'DB_NAME', 'alone3' );

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
define( 'AUTH_KEY',         'UNA/K.%vYN%]e@FJpD}9zOI pW5i1)t>]M]*g8SX.?$#S|j:%)nFIc!cA0sh0nA6' );
define( 'SECURE_AUTH_KEY',  'z*MPJAOS0jOda-?EPys%!dEbnm(m4HD0Lvh/*+=gZYvj082i%[vMzDsm>cMy@HpR' );
define( 'LOGGED_IN_KEY',    '4Mc7(!8f<3<.Sf0Uw#-Lof]kZYN^b;GMkxz3}HwR j&;e>WIjVI)b.I~y/j>DMaV' );
define( 'NONCE_KEY',        '17hdeE%j]!N#n !b%sev*C7Rg76$u;.zW99D{$jhL[co]E-/U.#$eG_JXDn}.B~@' );
define( 'AUTH_SALT',        '>z_5^y?BaS,;D(=y6Z{*&OQn1(+2[^2,3wL3KGkYK`xU2+--|aj)GBKy}XfL*a(Z' );
define( 'SECURE_AUTH_SALT', '@[^y$YI6;tGMPP39W9$NKauZ!%KI}>RaES;rb9U7?wVgVp.u-o&1CEa]AZQ`xA)7' );
define( 'LOGGED_IN_SALT',   '6o{%35O2w,9qcRc*&UtFX=z:;OA`3.!%!av%lqv&708!wFuXgzk~`A.BP( `:mA7' );
define( 'NONCE_SALT',       '|[5z:0&MHH5F&CN8oy7u>{e$ml.8g8.ki^6YV]H9y|xmv$a9vz>B-3aspPFI/SYf' );

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
