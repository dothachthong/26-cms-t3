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
define( 'DB_NAME', '26-cms-t3' );

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
define( 'AUTH_KEY',         '#;km.7xF^)C=|W2UU}.y:clGb;z(pi}Cx=&*WJ]FfQtehiFPZ|F#?KH+(pb)xAr2' );
define( 'SECURE_AUTH_KEY',  'Id]s[-gOPk^mTbngggWWqwC &{am.S)k/~#1 W+i1}v3{{{yxd_t`0xic>p=#Fqa' );
define( 'LOGGED_IN_KEY',    'D[0B.izA*&/e[)_P1n%oLN+4@?Tqw6*x8`]v^+BKPg ;V&eaxb7z)EgjJ$+]~D~1' );
define( 'NONCE_KEY',        'pf#li[C/J~qL:^NkFfJ|U|j 9%+*5(NE*a:d}k!1GA!EJV`p@!]C$fFtN_zY={.t' );
define( 'AUTH_SALT',        '2G{+kEPEfj=-wBsFXgwnYl!Kg|73|C2*XPBcwg<wlT}#4Dw#3Wnhv%G},y|{sP!c' );
define( 'SECURE_AUTH_SALT', '1lk:|~_Z)l:Fgic*-9+YaU*gzJ-$umaFu3%=&e>25agn*MU#,Tk.;SB5@*y9gNVT' );
define( 'LOGGED_IN_SALT',   'L;8sWF4V@q{9oJ*e6Y#*xFYH) i4`iAp[ow61%uV|P.:<Cyt47{%UV){R?R=6r|&' );
define( 'NONCE_SALT',       ')J4~V$nV_5._Y3[{LSP`RD/}sun.5m;S/}NG:*@`NnsxN6%HHSQDGngcjCluWJwv' );

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
