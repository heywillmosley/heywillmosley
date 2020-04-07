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
define( 'DB_NAME', 'heywillm_20200322' );

/** MySQL database username */
define( 'DB_USER', 'heywillm_master' );

/** MySQL database password */
define( 'DB_PASSWORD', 'NnV4tfbncnG-' );

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
define( 'AUTH_KEY',         'urqM])R9A>F#3jdKDJI.vy<--n`2`xYwjhO]0A/zD72AA6^:GSah7dwJozATbN[I' );
define( 'SECURE_AUTH_KEY',  '^/1b.q?yWTsK98dcR7t2:~a1$6MgUDY3d05E;`)K,thQ1_;mON?KSBD9L[^.t(5(' );
define( 'LOGGED_IN_KEY',    'z6zn@5<qSwpB(sT>;m3=Can_v_|AfPiAAI8vSg3=oShu]9%@t!HOQXap%*mwW@0[' );
define( 'NONCE_KEY',        'lE?-}.Z/Tld*LGX$eyG@<%_G:+UHFF!Z t[..;/1~_#7U8b4UrO^,M9kQsQQRJ{m' );
define( 'AUTH_SALT',        'jB.8gOG93#9.LV`[g?s=RQG}_4(v_**P=NJt`Bv=N&:Z)8QKUe,PVUKr?@GTpYLu' );
define( 'SECURE_AUTH_SALT', 'T/9C(pA?p0~DHFEX+RCLQojALzFXBMr5 ZJl1LSd6UT$R&NcO#}/q~QAP8h9gf5a' );
define( 'LOGGED_IN_SALT',   'wuJW{{u9XS$^rcPn86|n>zfIq(E1*)W,SvEdY ul45aw:k&;hW:JUQ2@:}3@e:2U' );
define( 'NONCE_SALT',       '}Z4?Cqr{Im>EffZ$,xWTrJOd~dOdv.1iVhO.p{+y]6n@_Jh)NECiB#)pb }E$<Gr' );

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
