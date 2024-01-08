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
define( 'DB_NAME', 'web' );

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
define( 'AUTH_KEY',         'XgbmU4k7-BR>>FHT!<%E7>RS;.PP7:l[.aL4JqO87cwxdDm5GKX#Eh}07k %T:] ' );
define( 'SECURE_AUTH_KEY',  ';1!rKNGMA|xc9eGZ. =6gy-!#.9q,hyAv-@Tc0ez%^(q0`][<pAov+2Gi{UQ#2vy' );
define( 'LOGGED_IN_KEY',    '.0r=2pC}6W8l&*Pq:z<5c@~kQri9_K:9ee}-C91a4=^@$uFQ[r<MpkjOJXWP:M8~' );
define( 'NONCE_KEY',        'mWd06Bpzi.$d;V-.DS61^VKPP(f|L3,S~`0gn~}k9$n7MgiPJJzO lU-(%Uie~Z*' );
define( 'AUTH_SALT',        '.|H>(!yZOKZSxUv|=YPW @gA~%B4@)BxW>X5pT{5,;1]*V50!(|=!Gc( hbp*Q)(' );
define( 'SECURE_AUTH_SALT', 'FEJcB#L ,%vQ*=)^62n:*(M#FuJ|6}S?Gtk*fB+OZd2/8U` vn|WY4*uXp|T&mWW' );
define( 'LOGGED_IN_SALT',   '}O[|j@F/?|aC1 Hvp:Hkrvqa1C$VE{QblJV$/&I!q##Wl] CP%&}T~M3TQF83ty~' );
define( 'NONCE_SALT',       'qzBP:d1}@3ob0d1H[/c!vz*`]:>P;r*R#w1:sLb8lt,}.1J*7n[|NJ-C0;uG*&DK' );

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
