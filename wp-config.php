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
define('DB_NAME', 'landing_wp');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'v,?{6of{URd!s.RSQ94?8Qu{Vm|W*$n(Y;f4[+_:H=Q|n~y_,jc{naS;#;its-jN');
define('SECURE_AUTH_KEY',  '/;>Gl+Hfo5]+k,>bZMfC3<,ozP%Pl3?p0AV[=vCC5d;u:MyRW}vz1uQ1XIe=l~na');
define('LOGGED_IN_KEY',    'YiyA,/@u7APRwvO?!n[%:BwCT8}4/8#^Sv0%BAWV}9cyPS^)*!;<#2-z88Y}{K}%');
define('NONCE_KEY',        'B1V_%S<;v9U]IL3ln%Y&HrJ.}|7l3[9i;ZTAh+k|TB#?m6InuDs~$CivD530 [6*');
define('AUTH_SALT',        '3j+T_PKD0N`o^]3`l]K_mg;YJx#!z*yD%)lMi1H%evsM<bSfZi/?2iIl$prQI%*P');
define('SECURE_AUTH_SALT', 'DMpQk3-|.TTy&LU2CK5L.xH!^n~QP^&}090,[D[*F:|q&U4E^lqCUUu+Mx-fj:&F');
define('LOGGED_IN_SALT',   'GVqTXm[|x(?DY{7?)m&QUtOdkLy9a`#:v?*v&iL,H22I^uD@yCjj>?{{imTJ26>0');
define('NONCE_SALT',       '2! E&^x=H<G9~SdvmscltZIsuvf1e*f0K4_:]W4CK?yFYfR3X4^:0K{+Q,tHE;ef');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
