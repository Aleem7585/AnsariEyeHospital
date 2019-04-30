<?php
define('WP_CACHE', true);
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
define('DB_NAME', 'ansariey_ansarieyehospital');

/** MySQL database username */
define('DB_USER', 'ansariey_ansarieyehospital');

/** MySQL database password */
define('DB_PASSWORD', 'aleemsdream87');

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
define('AUTH_KEY',         'B0gunpXE(~4LBy<f_yO|V`zxOe8q~8g]EOGYQg#=t[dai4sj`G0SMOCaM.BKa/IK');
define('SECURE_AUTH_KEY',  '4J[Skqwc;/zOet%I,g`MQ/|sfL0a|K04W48qMK,N$Wrg|2Oy3aa$u G/sBEQ?1)R');
define('LOGGED_IN_KEY',    'Z?y$FpHg/Ia,@H3?%pA9UXA1*R9.Q_O7>(<hF1pd^Jfzju=Uf<h>bQ5{1qQdMI^P');
define('NONCE_KEY',        '&UT`!{9<wx#PI}Iws?}^~15JOi*D7mS0r%tGFW*)wC~US@+d]<2&RTiMGT{<k]c8');
define('AUTH_SALT',        '}%r#<Gx3$i3Gt^AdVOBNR,+6d,<[%lpi[0Sx;*XX0ZDTyy$Eb>[!tKT4-o1Q;bXj');
define('SECURE_AUTH_SALT', '!wy|JXgFM$2D8]EQ46}`]@UFRt%p6/qeH6uysO6[X){FC=qQg]ucce[E!hs;q(Q_');
define('LOGGED_IN_SALT',   '7nS@*5yz%>O7sHobf;`8C/(u{o$;_G-~KA,hBGo-BXC$T)(s<H#n,y(Y.[*Oms]z');
define('NONCE_SALT',       '@*QU>u9Uw1qI2}& H68J.Jw0sI^U&: z2)CS-W7p<:LTYEc=E*N0QSpEXI5{M4XK');

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
