<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'turan' );

/** MySQL database password */
define( 'DB_PASSWORD', '123' );

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
define( 'AUTH_KEY',         ')#(svSqIbrG*;MMg*I6.k67KdKZNePv(zNrg}zw|[GwEA{8Q-=IXVD!-btz3]vtQ' );
define( 'SECURE_AUTH_KEY',  'LU ,UIEY<(tldI!AV;lZbrpak.Jsq}IZ.6PJ#0rJVgw;Xfj8&2JRFJZ}JFw`9{iO' );
define( 'LOGGED_IN_KEY',    'F2, O#}@=(9vDO4raM34;>K[O[vW?&IvjMAOQGn@)L6JqvH5nf9VTHt$?x= guw7' );
define( 'NONCE_KEY',        'G05gCpb:S0q1?P!,4[oL.9+=LI_|g8H2+an!jY.qURx.As507{ ?+pj:.fZj[.a<' );
define( 'AUTH_SALT',        '>c=C)1btDwJ7ISyLUuYvA1I7pWSwd{x`P=53r9/3=eI0O{R52&)%!`)l~NJlvQdV' );
define( 'SECURE_AUTH_SALT', 'l9E3PF}9t$s{t(c1FxCYR8M8?k!A;_Nyt3wN[SARq!QGa!1AU)JWK#B+B#A-/Hf9' );
define( 'LOGGED_IN_SALT',   '~ V(El8cjtmkC%bYHn:FMy_ MG{6wQ )`RtK+amy-,0[<8=+oP]=OwihEIw@a>mn' );
define( 'NONCE_SALT',       '[p,SR,bNtfQX|q!:2O,9hChl75yt*+x?={ekkk/ffjJn5]bfKNUGk/(z/dUH)aDP' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
