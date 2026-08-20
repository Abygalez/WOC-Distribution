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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '/,/r]&<4Y00nM8@4i5D9iBOrO8<aFr%5^0U3%Hpr*w6#1rx[eUBy8|_~]*eH0M|g' );
define( 'SECURE_AUTH_KEY',   'dLpW0.{}nM@}R{M<^:8;2A?19fwP.S|=YM&>ayp`A=JP5uGV~G0/_*~P1eSUQ,V_' );
define( 'LOGGED_IN_KEY',     '.7SR$I#0n[dtYbO5k#),I71v0{e`}ZZ12uJ2)#VAahsKZU.LI4|.nSGM+?~?w8I!' );
define( 'NONCE_KEY',         '}cs10m=9XjX5-%m2:[2G0tGoN}y>EGZA6tP87}JZoHe&#4iE{62?.6G}>}O 0HLU' );
define( 'AUTH_SALT',         'q<~t sYm7WRfv-40HBd4H`#cjw)<*+%zv8*g[yKLveG4GB{X3-vtpGBg-8Alq/}}' );
define( 'SECURE_AUTH_SALT',  'BW.r<sZJ~vx(29BN04SQ[d9N:ML]K5j=,zv!)zj{8r>f?<Vnlq%]6jH_`YXmR_pW' );
define( 'LOGGED_IN_SALT',    'Eki:(pXC*f w3/f^3C=+4[FVrD8_3pRQgA%V[Hrhc31(B$.^!i-n NMd9=Sr>wKr' );
define( 'NONCE_SALT',        'TGWi*a5X0MBwS**<KKO2a}N`B}ROyu3w-f=x<{3-<,;u$ qv.Q$NK|/ kLQIMk`)' );
define( 'WP_CACHE_KEY_SALT', '{D^EH- wb_YzNSiCSk3|4vQL;D[a&f}0$TiL`nyha/<pRP-<w`[{`H<_!`)~-i=}' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
define('WP_TEMP_DIR', ABSPATH . 'wp-content/temp/');
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
