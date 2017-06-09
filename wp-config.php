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
define('DB_NAME', 'test');

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
define('AUTH_KEY',         ' %&cjdDeDGlw0R@vQ3ELl{0FQ+ZbW?eA$%p?|EI@S|Q%9kz!hXND:BEDu$={N[sV');
define('SECURE_AUTH_KEY',  ';N$t(!8u-b);|W}PQA,,YAXlDYF)aKtwz;=&wubw=%h:`2UqRQ&Y_q2T.1|CAo1|');
define('LOGGED_IN_KEY',    'OUmudkW>5!04c+;|![HOZNV4Wd7$]xLcf!~J?SKSm48F1jikC/mXYoURFGei!aHY');
define('NONCE_KEY',        '5acu7N$N$Cbx^sm4ol]NDN,6KWSd<Qs)WjKSntJ#x<uAv>OzuRw/!d>$buIy-.v*');
define('AUTH_SALT',        '$(vPXT2;nWE+b&>X^ud0sq@?ytE>{BRdCjRA#M[Kd*,Na%Fpbz)wXDFlgNj(o (7');
define('SECURE_AUTH_SALT', 'n8+*Ci|(qd)0B*.q{ ~)(><:,i@w4V6_UU)6)X*}P/ylc6!bPB7O@Tk~BnpT3u_Y');
define('LOGGED_IN_SALT',   'P.f@Yo8-5xv@j|ys0l@b56&,a5J78+/D4mg2tSJhKI~=*$~Z@Lut^A3c`HmF_+,Q');
define('NONCE_SALT',       'zO{X9>1(.T@n1 NUR<e(:5<Ui/0a3^6$y&oo`6V_g|bX~<+-R%9%JezQO)RB<7V;');

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
