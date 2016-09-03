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
define('AUTH_KEY',         'v3BC7n}f:ZNS;`6i?Yes&zcE/%Id]K|:{#UA-PA+;fM%|{]X _X,H2q?Gyu9P^Ex');
define('SECURE_AUTH_KEY',  '@Wc2#V UAV/< l,FXq(9bqIIK8^h|5.n|J}TGu;4TX&ktLu8XkPsBw:>#?MS[yr2');
define('LOGGED_IN_KEY',    '|.{<1O|@lxCV|P5V:yy__vA45NCaEq!<DU[,ow^m~g&}`+y|R y#exKD1Qi64:+9');
define('NONCE_KEY',        '$q;8}Mn~cT5abv5eM?ImvgsFqKB*DV4{(pJ`kJ?W#sHyqk$1Uo>Xpk<uZlTY319f');
define('AUTH_SALT',        ',M8.}A}o(L{m7cFmuGHo-?r((pg*knb%_:cKD%a|l4rXN~D,KS9:]0fci1.K)8hu');
define('SECURE_AUTH_SALT', ':T!lGb*?i_i#Tm]2F@ezdtOl87i)F|j[>![Ae4c2iM=&V1h t8<Zg=Q@BwG}.{d:');
define('LOGGED_IN_SALT',   '3!bO<Z E~84j{jc1,cVwzf ;Y2t{0!3qiLW?~+{k<Sx!6(.Gg|`9<.60;5G!AA-W');
define('NONCE_SALT',       'MHX62:$sq815R=UZCY0nn!adj?I=U0*GqN-^QEMGW~->7Lv!&y;]G;Mr17E4@apc');

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
