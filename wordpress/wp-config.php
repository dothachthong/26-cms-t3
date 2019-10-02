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
define( 'DB_NAME', 'cms' );

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
define( 'AUTH_KEY',         '5M}QgfJ!fHP/hay:I0D=[lh|y(6MY5JA`gqlVk.5n$}W: 2c8g(t^PS^F[ {}@~Z' );
define( 'SECURE_AUTH_KEY',  '9[Ik265Kr!}9-zO:dpy(G^:^{SupCKV*e|`u_Boht39Rie108,CjaP<qO,Tbkc2E' );
define( 'LOGGED_IN_KEY',    '`[Fc$hR(JIzH4yC9z,#.ub3jiCG1CR/WUf+{v18G<)ivlT;5TxB&F?-G-}OgBv%}' );
define( 'NONCE_KEY',        'H?$onWWzAUFsSW4B-_mEoMEe[uF[iI,*SXw{n+1RP[4 kd4GNky<Csm&b}mf,&#9' );
define( 'AUTH_SALT',        'x@X51O:lHz >aq~X?%zTiQY{o;a-1 1:^`pR|Rfbmo4m8Rr5r!uCjCkkQ*mS$H|=' );
define( 'SECURE_AUTH_SALT', 'Y:x M%{A.y0-Wg[Zw;eLi1D)#(bV^sObuogQhR|8O9.urWPx=YfJ7 TWcnq{x[^h' );
define( 'LOGGED_IN_SALT',   'IwON^FQm>Ytlxz$@ZON .g7,RS a[z_XJfzM?+7pFjc48J+M*]X_&0f)w541b8Qj' );
define( 'NONCE_SALT',       'X-*aee(:s+t}f~9<y.*}PEXz5;;L~v^$-ev+zVAkYPrbMH_[%Qxo%qO;;NTCRL(y' );

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
