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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'task' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'codingsl' );

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
define( 'AUTH_KEY',         '@,]d)Ip3oiy<4)fTzBP%jr0yVpqYg0iMR0u}ls(9jys8q{Zx`IX)lz/JaMq!L;ir' );
define( 'SECURE_AUTH_KEY',  '8XOO6d.{[e5V%?MVl:VC|-Q*xw9TL(sWo;xw^4L!pZ;#1Ar$c[,A%E|h`RD54Cek' );
define( 'LOGGED_IN_KEY',    'zDf<Fb4&_dpth^}w3d/6lbZz%>{V~RC1cB1d/4.1F@.#T9SlxA:Z XZ?tK-|NS_S' );
define( 'NONCE_KEY',        'B^vF !%@j1=,`&T:5RblO:8Cd<_blU`MjQ {E>|_e:~OV,6vSJh8sR[TXlFixi1?' );
define( 'AUTH_SALT',        '-4)vx[q%oWn<${^;t:7*JJN8_Uf;YY.|!S>8U(w^pubWyosw=D s587o[mom^gHV' );
define( 'SECURE_AUTH_SALT', '5j5 ?EgxQeZCWzb) ID57f(>>-s:g^amx~rXqN-15 <FU3r`m$a-cBXiNNHghxB;' );
define( 'LOGGED_IN_SALT',   'E%p@}nZK.,&ZueW?JLzszPuRDDk-!o=66t!Qp5s;#U4fyx%/oJU5)>`19KEN5X06' );
define( 'NONCE_SALT',       'H<E@WQtHb</AKKsYocAf-DS0YGlVmz^f~;t*]j<w)Yt5Hp]MV?/<^0uOyP[cfq;&' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
