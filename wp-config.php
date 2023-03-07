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
define( 'DB_NAME', 'wp_netglobalwebsite' );

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
define( 'AUTH_KEY',         'KO[V{PuXa+bt^QeyT0As_-3qMu0I14Xa[loS7a1{r=i<U1vive$ukK gfT:|B1q=' );
define( 'SECURE_AUTH_KEY',  'Ty<xj>|GCGI3uh+47yT$rkr$ycVs>]d0z0MhG(g6OC;Z~r)sUi9(bklK%ove4Y4^' );
define( 'LOGGED_IN_KEY',    ')V}nFt)WNT+-nNFh=JNuH/(ftjzXf4gsnyp;z?Sk#0F3O1+BF5}&6xvU6gW+hKLm' );
define( 'NONCE_KEY',        '~4=ErmS&qh9}|ADc@iueSB`W|(RIa#c`At)qK[Q.[~,8,e=?T0t-FG(I{iwfm50T' );
define( 'AUTH_SALT',        'M89*xW^F-r:GEoo6ngW)Jg9yveacYXJbHR;/e9jR3?o{@Y>)5l`eE>z~qrYyw[bS' );
define( 'SECURE_AUTH_SALT', 'rsJEwNrge2,7#PAq.Eqf|l{mEjCLC2Br/l hJro1l43OoXG~Bd2d92CC&,I9AE4?' );
define( 'LOGGED_IN_SALT',   'TWw}PPghqGnN-QrkxcdL*(E;WE(EzvA;bJ7cgOx}.amjmpW]}qwA]YXzafUiDUgu' );
define( 'NONCE_SALT',       '-9)]n |b2yaj~HXF{^:3$8(C;Hqcc^~5AAE-0q}6@k[{o+Ck(-CTW@>}WpuOlqg@' );

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
