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
define( 'AUTH_KEY',          'f)xIq15pEJ~y!*bw|uW5tMlI4`Y:u8<XNTOPRZ+[ko&@^t%ah!fu8b8TCv^Duy&T' );
define( 'SECURE_AUTH_KEY',   '3,TUxpk%qc3y,w>8~2WCt--|x?-U [lxA%:>Wl`[W9QlCX#0DAWxS.Bws&.|u<Gc' );
define( 'LOGGED_IN_KEY',     'qt@WVj4g @H%{)n[?5)A;rF5#_qmu~Of$Jncc`Y22BBF{}YkP+z]DnnF@Rgk2KoK' );
define( 'NONCE_KEY',         'tGV05n8r{?H]/yo!GkD6KY.QNLhgOQ5L*IxX A8>@Iy?Sn]5s_Pvw4?pK9hj%E@*' );
define( 'AUTH_SALT',         'L/7Dv3!%&~nW/e3GFDm0ig/:Iwf;yOZuoQ_R#b%o|0&BXpK}!WBZ#QtI}`T@I94b' );
define( 'SECURE_AUTH_SALT',  'djuQxD-DtFQi1dieH5qShQy?J_jgDtE,-]s*7KPDyzO*:]K8<mr~ Hl# p&$bQiV' );
define( 'LOGGED_IN_SALT',    'mHU5}=J=w!c3eY>Ibxb]wwb~ukwm1-$)Z*O@39cSLzIE4)*kl#{Q`GRpDyC|Hz>1' );
define( 'NONCE_SALT',        '6/>S.>S5~I7<a!~?o`}/.+G$jm#{1M0Yu5n;Km5-o8|g8I%,spl)r@[9+,YGHIa$' );
define( 'WP_CACHE_KEY_SALT', 'E4Sc0lZ_v%fN,:>DLtR$2`__~-qG-{PsY8sJx/SQS 4HO1VDbEGV[k/_A5]hs}PJ' );


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
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
