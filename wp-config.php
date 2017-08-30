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
define('DB_NAME', 'wp_db');

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
define('AUTH_KEY',         '>suMoU.+&A5VeRfEW,+<)= cQB9T_Nn%=g{VlRUYUV/IAIIIrkKI2VF85(p37X5G');
define('SECURE_AUTH_KEY',  '3GzTCD;wOlr6I(jH07%-IkI@*b3}E=DsX8T4{aFPP&n}Hza!Ho[PW>PZDTp>SU3h');
define('LOGGED_IN_KEY',    'EL^wNSVP4.|G;@k[M^d9Kqhc+8^*)V3-J/Dhf>Ae2mD^l&IK.@n>p|@JdR%.H4ue');
define('NONCE_KEY',        ',)J( `xzx*XHI@gjQl_$m7oEr@Xs1Hl6].Wn6T~t3=*Xb!S5_Oy Z}UlrFg/a-c)');
define('AUTH_SALT',        'yu%)!71!&N*>G8@c^mEW(+g%Jp{x10#D[~E#xBnyL6)b4l-.yHW{M?ED[FL{O=A4');
define('SECURE_AUTH_SALT', 'Q7w8A- c3#u0](a )r{+F,sIia_=yUgLa%}2$Qg:WmXL^[O_q%/hLyTYhYKV8_X@');
define('LOGGED_IN_SALT',   '} P&FW+3B^~co?H70At<+g/pRwV;ik!bb^o:i1,@iXOlv??7xs@zkQ6^+%;3*(aF');
define('NONCE_SALT',       'Tc$qMv>ZeA40,g[_Dnx`%e~NsnE|p`Iu))98bCdYR}@k%j{#g Y|kd:w,O-Z@b#_');

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
