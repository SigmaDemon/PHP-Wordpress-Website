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
define( 'DB_NAME', 'phpwordpress_db' );

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
define( 'AUTH_KEY',         '0nBvA=HS(HYd~mbfhz;S %/4wBA{6^<$lJo6^wJ3CA~ExV@Sez0sjzbV!mP<O&tX' );
define( 'SECURE_AUTH_KEY',  'I[qzZP^1yCHM2E9F7(:+N}e)NE[BGqfWgbh<jVb|Gd|+~kp~vgt/5vc9x`A+1Iaj' );
define( 'LOGGED_IN_KEY',    ':&m;/D0`?qToDG:M:a/bR.K@ xS8vEKCe^ykWa//Q`n09AE[c<([Z994epr8)mJb' );
define( 'NONCE_KEY',        '5T$^kbW/7>>9be8x4B}<Wi{M*3p;!F?QY5;X<EwpjPfl:~:^6UUoFT.f.?Gp?]-m' );
define( 'AUTH_SALT',        '#?my*FV#U9I.fVrjdZu&$S$)}>m{PK|QfsX%8wC2Dnm?|@bv,+oOM33qG3C?59 n' );
define( 'SECURE_AUTH_SALT', 'DKcb4H~ZNJ!; Z#A0x[X!gD:$D2R%!oiRdj.%2(!-&X,f^_?f+7S=AXtQ|a4X-Mm' );
define( 'LOGGED_IN_SALT',   'K[Ko`.M<u%Yjss8;(iW@e[TBxkX{`9Up[bIX_tGZ(2RJM7Ny[^YpL]&jgvrxw,3#' );
define( 'NONCE_SALT',       'a|8qI/vx $y:ktFO>e80yP.[]a<u)_]QJ-[ :%}F<<aH~uVtgJY2p.TOh7p0h8DF' );

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
