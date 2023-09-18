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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',         '@NjkP3Mb0~i<Y!7~M;-Kaf&em~0u-Wk4$>.yq]}{|T%=TIFNp3XtdV~3HL#Ddo~%' );
define( 'SECURE_AUTH_KEY',  '=duTFcvbM`{&A2iPz`-H(|u$wT0Q1vBCC0m:1et rueZOJX7HBMn%]xn>v*V+*Pc' );
define( 'LOGGED_IN_KEY',    'Sai|uTOxf{}FB?8~#vkd/t9,sQunT_k<=WU7q2IE`v;,7UEHN6J>b8%nqSZ{TO}:' );
define( 'NONCE_KEY',        'r|9&[BNzOc7YQgV|$lvaK6~HFaf{6qs]zbUwoK<WWpNV7UEmbzy|cN(.}F)P~2WK' );
define( 'AUTH_SALT',        'p{#iR%[c:Vs:0KA(=LNTFIa(zfY`b/j@%c+i~-U?,fF8l3Gvi?EV?;i&Qw5Kj]/)' );
define( 'SECURE_AUTH_SALT', ';q3I#/.!K{-TZ0@pjcbR5|P%?h|>*fx*CU{ViSQN^uV:2YJS*Z=9TUN0{Gb>W%_F' );
define( 'LOGGED_IN_SALT',   '6@~-D#(@jBlur<< m^Yi/HRRnX|W4<IO}?6[cauJMm<dsXaSyIl1q;/Lz=P<fJyu' );
define( 'NONCE_SALT',       'F=|c?-@,Z~_y{Q,O94R )J~SV?vC5(<^$d{D0vhKlNe/iq5Gt]d?yJK.`hC!}di ' );

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
