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
define('DB_NAME', 'tcf_gandco');

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
define('AUTH_KEY',         '<33^VXy}28knH[D>209xBPShohKYvoLs7~M#R&Tj-~oy[}AgRFeDAfdGr%co7#;R');
define('SECURE_AUTH_KEY',  ':nW3ENM5?GEOb>1nra::~<cMOSP>;C+]B*V(^75}Y:5PfaZtC-.[xm3on_C?`=|:');
define('LOGGED_IN_KEY',    '768?qx~ZDSp%h_-GnJx:R#]5v&aBX|eS[-St3|z+pgE%qG`f06e+8bl=s=:$}Sq^');
define('NONCE_KEY',        ']AkQy%yIy_/RLy%=3oj(oJ$nSd8}2s=<,?xz;xdIpe0M.;}|FjFMGUaul)4{T?ju');
define('AUTH_SALT',        '>EX6.D@tu<tq;8!ge`t8YBX}#ly;c*R#Ly-20J%aJL#hq(viq~-g]o>tVjNAV%6~');
define('SECURE_AUTH_SALT', 'f@<8=a}OS.pZJCC +gVt-l-*+iyeUc56HQOz-,%/0kFcj^NN5D ^mk({=1cpQUyA');
define('LOGGED_IN_SALT',   'TXoe,Q51G%S&TsIFq{H28$[}Q/HV%vfvb] +6lF@l4eG1=4Q@8+YVhE?6P,%aXT{');
define('NONCE_SALT',       ' ?Vo%!XT#w|.7a5WO!>H++0j+S .sQl7#}J*P7l^Q<lp<.]YQkZI:4N8+`O]zFoN');

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
