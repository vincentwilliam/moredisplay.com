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
define('DB_NAME', 'MoreDisplay.com');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'xiaochongzi');

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
define('AUTH_KEY',         '^_P2yLi<+.9LTYhB@V6gKLUS!_Bx04YQs]`{La1/ZJ^kAq%1$/e/SD8)Jpsv=JR;');
define('SECURE_AUTH_KEY',  'N=b`5S8pP9JQ{B~ <LC3f]e;aQ` (fgTv;?3.b_H3N~.oe*E3Up0U)etxuEe(wLA');
define('LOGGED_IN_KEY',    'y2d-CN2MYYY,t9D1RW7I ^&}.t=Jzg.yew>4*39M(Hy?~R/b<rneb/y<HZ<KUp*?');
define('NONCE_KEY',        '-4}[;za:~ atwf5gbo3.*|8~sQm=BNId+y/6a!uEVrmzKY+b[B&TA77hxAHAW%?~');
define('AUTH_SALT',        ',Jkk8B,5:NRF5J.1vC`MJh#|>+A~K~!=BZj`P^`Yvk;M(^IYwVNf5yev4-G#d}i<');
define('SECURE_AUTH_SALT', 'Z)Iu!ap6,;bHgI&zC0}M~hQU:6TPP:,mSnIi9)/$smxd)k*Wx9-_:.$m9~b,rG~o');
define('LOGGED_IN_SALT',   '0G+%hcg]khb)QobC]%&XH+(+{Z0e|{^{}5&H7c_oaM:qov-uu[-Bd}p2((H@K[-O');
define('NONCE_SALT',       'csiTS7dN+k{RMuax<d?:_]c0qH=/:>oACu_(uOB63~f/!a;74Ry~s wkN5m}sbPs');

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
