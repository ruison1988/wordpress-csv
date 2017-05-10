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
define('DB_NAME', 'd4o2akqbclvitm');

/** MySQL database username */
define('DB_USER', 'hyuqacahgmzcny');

/** MySQL database password */
define('DB_PASSWORD', '528fe3a150214cff90c762e0a2995579d8afd1ebe6c3412f0331a518fc28510e');

/** MySQL hostname */
define('DB_HOST', 'ec2-54-83-205-71.compute-1.amazonaws.com:5432');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '<4%5ImX3,^ZsK+q<<^:/Zj*[H6[I^~1Oy3KBZET,[uLGbN;{F0.:Rl_-W8`,!w9Y');
define('SECURE_AUTH_KEY',  'fJ7( 1uS)1wIqQUBQcu7,~UvQBg_f6<T`L(eWjAlz.>|N&&i1l[JunVN~2Ota`A9');
define('LOGGED_IN_KEY',    '!at3Si>#n}`T=!2W|HS[qOh)`czXSm:+jWJ.qS7n7/i@70Boa>k[:N4LlUkdCaI=');
define('NONCE_KEY',        '<5}g+|u&(qZ&;N(bR4STz:GgdYGYupWaE/^Ec+=xK3Ewde-q)d^vOs7!JI@>H>[7');
define('AUTH_SALT',        'oCw^{8smta~/ q$q|)bo7R=KhtcSN**kjqvss_G^Hpf`_uS!r{`X#wO7WDvG^}-b');
define('SECURE_AUTH_SALT', 'H!Q0!) NVjCK!g|4qHv=C;?~z[vJBD=;L;K-2X$vT is[!:~RV?T[`.oRn7FblF(');
define('LOGGED_IN_SALT',   'h=P.Cn,55d{Y/hh2(s1#L1Q_NAjp)G-ikpCgw0[>q;qGe+s4ka/xh3SS_O0Dvi$-');
define('NONCE_SALT',       '~v?}D{]&<sV6[S.<fm#W++L_1C>9dHICevQWoSWv71|l$S2b>eV5^VBVczbLSmK%');

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
