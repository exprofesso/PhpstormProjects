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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'epiz_25578046_974532' );

/** MySQL database username */
define( 'DB_USER', 'epiz_25578046' );

/** MySQL database password */
define( 'DB_PASSWORD', 'ZT2vogWahI3L' );

/** MySQL hostname */
define( 'DB_HOST', 'sql205.epizy.com' );

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
define( 'AUTH_KEY',         ':iC;{}/0Q(v)LMf)@T[:oPUbM7%svs-~l _#A5WtH%~`[p0,hKzf?8=3eh|%%Gmx' );
define( 'SECURE_AUTH_KEY',  'fhPa+eFG~SD@ =DLg^8tcz#tea{Rj8S.p.ZAm:19;F0gxv2JRI;gf(qqW/$B ]dm' );
define( 'LOGGED_IN_KEY',    'p0R,}/eE[;z-MGTy<`OMB0bR4Cv/<U,ZtyhID(WD`c{f[95T^j>.jV^yj5q2XFT>' );
define( 'NONCE_KEY',        'jFP7@7C2qwUS9TJZ&]yCmZcMG3{s9lfBaOPy41ZU)E[[_vkA.SN|.AcA;n3eu:{l' );
define( 'AUTH_SALT',        ',9}LIWDlX*@EVQ`yl_HJ1A.!fw*6AH$Ss17yE-|?ACDV8}bE)})8OXCQiqvd{[Cl' );
define( 'SECURE_AUTH_SALT', 'I?b3:Beq56pL;p=4gvO|O)/ANCu41=JJmf,,0WDvB_j]>CEyXo<(R)HYAQ3kshvq' );
define( 'LOGGED_IN_SALT',   'WSJ,na9SM)Cmx_cumUqB&Pu*b5n`|O#pg7=7.rOU+ ,92?No! S~(tJp.1m8L&)I' );
define( 'NONCE_SALT',       'TZU?Cy(nwMT)#HOPGu/r3erjy`ULIRQ,w=k}ncIhe!?Q3xNgv(MI:+Ui7eZCz9{1' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'f54d_';

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
