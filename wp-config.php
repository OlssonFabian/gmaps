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
define( 'DB_NAME', 'gmaps' );

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
define( 'AUTH_KEY',         '}1ZsRg31k5DW@gDzYG_@b0JS},gRnEQWp=gePiCU{%t6:3axKa6TZq&bLwwDiIY_' );
define( 'SECURE_AUTH_KEY',  'L7/j#EaQ&1XPG*_Ub@:X05^(285O(/6!?Jd`0$fm{/B=a*_GjB1OQr7qQr|&e1dC' );
define( 'LOGGED_IN_KEY',    'z4Ay|ONA%Y<vUi{&1h}lRdB]4L}oS#$+A]5}8X=*z#A>9*G^U=6aUp?snD(g6K[Y' );
define( 'NONCE_KEY',        'QWh()Q;(pqy=1CX551wXPQk}Az>#l<Jgd`96h:LL5?G_=B0H+%uBry~y{FQ1N@r8' );
define( 'AUTH_SALT',        'k##`uct:fVNoWLh]q1m7;AdXFuu/C`e6 nQ`Op@z9ScfP7&$sQCk[`uJyX+gB+yj' );
define( 'SECURE_AUTH_SALT', '}2]ZfIQ>)#%qN?,ri.e:~`y8;Ia<g+qS)K!{,o&mxOrIs/Xt)xEshmJ Z|SVF@Up' );
define( 'LOGGED_IN_SALT',   '>aMEjHe#M-7r}}[ZZSxc-4/iQ$8/vE4R6BEO%D4h{k`{R$9*%!:m 0}kGL/JGt{Z' );
define( 'NONCE_SALT',       '9KvUlvHS>~oX[8zMPLks9`?+t0[ tt@jQH!yc7,.%iJ;7cj$r/Ya=:6*9)$H+.+8' );

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
