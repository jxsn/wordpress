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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '?xhHBro~XV1.9e.{1I;$#iAPK^wK.kab/YB]4]jlE2|U)t7BE@A!nM3i~Z.4q}Nc');
define('SECURE_AUTH_KEY',  'CAn88 AE(3:.oKcxl0g/~X1pH[(LjROqeqNznLk|_k^Yben]S2e)i<#`4k ^i01,');
define('LOGGED_IN_KEY',    'JpLCXS%g,!Yu}duCb|:#Hx]s!emIr%b~} JvzGw5pA3%SGF:Jg)h{>p iNQkd06I');
define('NONCE_KEY',        '% :XpPG}@;7#8lxFImqMon$8uE1YmgV(0f=F%!cayBW&`N;V(-}@tE(8Dwbj*}`G');
define('AUTH_SALT',        ';;zLsyw*qP`T-oPB#1q6eMX~{<M4m0!-ZLe2s<)LV^mKI5IbCqBQ7--~nDmh8i:v');
define('SECURE_AUTH_SALT', 'C1s(cc,UuQ[lCrD<<lV%=1TZ*7/<rYW:,:/%9$ika/_ho0v;qQ+G4J.*MuqQN4WP');
define('LOGGED_IN_SALT',   '#W WBm[dBt~BsXIRjyD,#:E/DRU,VRh,KF@L.Frkg2A>RxMk??a;.SSD-^w9G]b>');
define('NONCE_SALT',       'JPUy7IkWn;pe..uz5lvh]Lf?@]qqgvpJhT:fm>vrej]vJ}`T=zVZOF6|(xUEl#Dv');

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
