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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'webodc' );

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
define( 'AUTH_KEY',         'Y;z6E+L{6W02$6b[;@j66l2K(MubUlB|;eftL|v}/~)Y430`<nJvNK4Ask@]z<Ty' );
define( 'SECURE_AUTH_KEY',  'T^m,8K~^C`d_VcJms->t8,jjZf>RB[=Ni[C/aS=!K0dH5WGq[LcNEtr`d4Zog_>y' );
define( 'LOGGED_IN_KEY',    'MKIm)Iq.I>a VM!Sp.qG2eHm|M<FD%XPxB^B>-4,O*7vP9p(yU=)q<;-{Zp*ODqE' );
define( 'NONCE_KEY',        'JR/7kzoaqEa40@de}Fz9.@l+i7$nkv;RF09:3|Mv</]MQ6ebtE/:DE7dF3&?DVwJ' );
define( 'AUTH_SALT',        'Nks#Q0jCYQCZ7?F-oQ/(gKvbs<|:FGiOwqT2FHNPMIHp1EyD}sw<yw:39e0`H%wd' );
define( 'SECURE_AUTH_SALT', '2I_3|1_9?Vp=MJdFxl4i/atcMoYb|fv-N +:kJSoUG>Yk.x7^yBe3XyLjxFU54Rg' );
define( 'LOGGED_IN_SALT',   'Dxnwbks^oS>ypU-Jes^-G@| HA^(Sd=~Pib4I@*{(x>:G&mVtXTbe+6=+A$WVlYH' );
define( 'NONCE_SALT',       '=^Ma_!O7QXWRO12EsHro$G:|!XXK!T^41(&0I;@S)hE+LB>>sMbWO+]]+`sINVl}' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
