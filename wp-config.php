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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'portfolio' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define('AUTH_KEY',         '0jzMqW)3g;*VqNJJcwd Sl`?F0Y!:&4!f7<g^%`0aFP]WfDT1a*r-!EI?Av>E^-*');
define('SECURE_AUTH_KEY',  '0Mqk_I|N+Gf-+DMP06yTEfNw`?)QhoCi4JcFDzmGm4;w uI~?9Hc1-}2~]YJ%1*q');
define('LOGGED_IN_KEY',    'my_3B%kCK(f1cTBspJ2Ge2YFk+lzR-Nhl-DjpM!|?]`H<,w[QUyFXk/fYU;xGR9Z');
define('NONCE_KEY',        'zBR[-kR[rR%n|<*~}>HP_`$9v)jfXm,9`@#:HAcdgbQ-#8Wk*<0eeRv~~nU3o_TP');
define('AUTH_SALT',        'Z9$Kn(wP7]*];>cbL|R{S;9E/W<{5R$&y|g.?iuWp>&=I/.xBjv?qD08/iD=(s^F');
define('SECURE_AUTH_SALT', '0?*5fdCBidNR>+H0b MJ9[d:Y+-AuXE@-|1Y!apM?|?80!n?231u)98We`zIP*-D');
define('LOGGED_IN_SALT',   'sr*V+vt cpicV@wT6wP<j814|K9t_OaQO5?s=oa3,!njt-0nTGk|@Q6JVjHB~5<:');
define('NONCE_SALT',       's$jLIIP]oVS_vHM)YaIGf{d(;gn,Y^snPiOqx|=;dLpQ}a;/DoxR,f/=Aj]MM*nJ');

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
