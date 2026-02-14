<?php
define( 'WP_CACHE', true );

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
define( 'DB_NAME', 'u733509243_U3pcJ' );

/** Database username */
define( 'DB_USER', 'u733509243_MAaHQ' );

/** Database password */
define( 'DB_PASSWORD', '2Hv16AsBr1' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',          '..q(+$9R$KIYg$96P!VdPq/Y6KfS1ILS4hz2K~>G[ZMO!i%/1!~.#6X+[R!=D%;x' );
define( 'SECURE_AUTH_KEY',   'ik19G(<0h_iOdqCo?Y>cC{svHe*k_uK)6K>LKoZge1_$GqR%(V~erk;dknkK>*2X' );
define( 'LOGGED_IN_KEY',     'Y/:e{m@}Z!3.H.kdFbRihoWb>.u|eaM|W&SSH?P$HYe:2.4KjfG7RJ>:mo#gu]sr' );
define( 'NONCE_KEY',         '&pNS$aPgK-HI-Zs]]>#AK3oUwC7oQ6]hN36xSA3MV)+&:=CZs`XseO7%3gQDG.g$' );
define( 'AUTH_SALT',         'Ue^9A LE#Aya-u WXz~I1ySyuk5`SlNvE.VlAmqQXV38}g]z7hblLa],`h}$lP3-' );
define( 'SECURE_AUTH_SALT',  '!(8S!UX5VPC5-3M1)OYa&T</$_T@U;:um!cGNDs6s1hEIWneTmAkD!?7A~,HEMrw' );
define( 'LOGGED_IN_SALT',    'os@t ;|SL%-O0t=D!R`6(!_,[1Qo!U`aH(%`jf,[<i>|+fx,CVIUIp=d4q^_E$Y)' );
define( 'NONCE_SALT',        '-u[/lwyb!AV=oHnYsO5`JXj=t:.y;OI@86GlL0B)}oIjy{93_N$YQ@~Lk-;hgQ{6' );
define( 'WP_CACHE_KEY_SALT', '|?M~XvU5>_K>bi3=9NgBwm>A(t<5aM*k5&&@@GN]0!s~CI@R@z%(kG/QDyldU#G{' );


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

define( 'FS_METHOD', 'direct' );
define( 'COOKIEHASH', 'fc95cbeb1a7ca1a09dd72a3929e8aacf' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
define( 'SURECART_ENCRYPTION_KEY', 'Y/:e{m@}Z!3.H.kdFbRihoWb>.u|eaM|W&SSH?P$HYe:2.4KjfG7RJ>:mo#gu]sr' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
