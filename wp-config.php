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
define( 'DB_NAME', 'Blog' );

/** MySQL database username */
define( 'DB_USER', 'phpmyadmin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Test@1234' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

define('FS_METHOD','direct');
/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'a@e~gc*@br qudC{p!H8JzqSOjK;e{h$Q7q{,K$U0jC@l {P$xj.#fl_D~M`8@W]' );
define( 'SECURE_AUTH_KEY',  'gJvI?u8$;b-2Jh=p;Bi?OE}$/X^)(rfM*1D8ip3-+amz.5.#>)ZtxXam]7Wb($}u' );
define( 'LOGGED_IN_KEY',    'pnmkh[moWtPsa2J84LS/SQCH&KO~Tfz JR^g9*u=F+3CLi]{M:/no^:[1ceFo8ta' );
define( 'NONCE_KEY',        'a~NFnBc1,[6?dqN)mSRHk8?1Win2X?V#]*b])MjLe^sjRun~XQm%2<3TYOxeu5V:' );
define( 'AUTH_SALT',        ',1]B^qq3&%TF]YUNf1e(fkXc>]@>xr<K]_wo3j)6IzK_/y7Tr[U<t@]H6L+J;35P' );
define( 'SECURE_AUTH_SALT', '{;U[F<kEM^@qpO`!uR:BTRJ!wqN5tSOo[GU#h2E(P/+IP{wxB_QHj0*>E6Iy#jBB' );
define( 'LOGGED_IN_SALT',   'p Pnn^%l.neg-Q|a@_OS#XUAhp1/nPImZ7{G*f<4^8[-PUsPuny3m3sg$XgqVF-8' );
define( 'NONCE_SALT',       'XSf)J`P#Y]#mHx*{rAw~yr~/W+8m4MB-HW+ypN_TJ|>LH/he6^E%z8A$YuqF=Rzz' );

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
