<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
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
define( 'DB_NAME', 'greenpf' );

/** Database username */
define( 'DB_USER', 'greenpf' );

/** Database password */
define( 'DB_PASSWORD', '12345' );

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
define( 'AUTH_KEY',         'DGP o[suFCG-i:41&8?ORAxPLoB.(B^#*wu^~tog-9q0cRJtZfTOo<EA4x_O Wb_' );
define( 'SECURE_AUTH_KEY',  'we=qj-R-E}/idZ|w{o]tTY=E^O3 .e79;)jB(E}^|SL$44Q8j[E2RMdI{skTTeU.' );
define( 'LOGGED_IN_KEY',    'Y053[otz2J8s]vGI&e!Jw5ZxnDOU53-Jt_XI-awg,}M+xkcLbz%KNmOfih{s4<@d' );
define( 'NONCE_KEY',        'y}}hn&:E#WPHWu;M2HhTu0|1XG*!d~G%?{C?EqW5pf;Ao`T6p5EQ:<C>9z8fAS{i' );
define( 'AUTH_SALT',        '42jrn%ga5x9NsMTjbW5CZ_gO<nDMe+vVM@le.04~tQoFcRJP4KCKHl4GRN~HkA}P' );
define( 'SECURE_AUTH_SALT', 'i0)PSu|EfzFfn@`*z_GpIy_A4+Ht-!+zZA~eMtee2jf ajG?W$MT)XBEtGiDyZ)Z' );
define( 'LOGGED_IN_SALT',   'J(op3%*n+d8&d:m]Rytc>YGB.XBm@]b.28S0)<KIg,)q(z}2np63%lxc%J(Ev8eR' );
define( 'NONCE_SALT',       'E+ynJcyp3,2PT3rsX>nxO*FxFc:h%uUriA/`tf6IX $erebdWDnZULO%=;cyK1y@' );

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
