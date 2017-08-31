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
define('DB_NAME', 'shipsun');

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
define('AUTH_KEY',         '-mQ*fF#o}ND;b<tRTA*ky]IeDHsq/^t$S6Pt2W)AS,8wLOYqFn:aB:?fM,%D]Z!}');
define('SECURE_AUTH_KEY',  'bAy<JC]t~I}A~|a#,K^e1DuaU2DJg+1*N<a,(dV35%F)C?1=fA$:z894/e`{XB2g');
define('LOGGED_IN_KEY',    ' u_rgVH@q9u<Xz*9TMsL1gx;ZM?xBjXWCy3)wo5&%*IQ*~w5iA}&$L{z~1@*P=+8');
define('NONCE_KEY',        'T+Z.E=O^<EO*{jd-l$ivYE+?h)p3LSbp*9O7cjlaY?$>|~02e>7PQ)b EI@PjN@~');
define('AUTH_SALT',        '^MvEsNp.j]jY{lm&DdR3eD=kW`g!/2]+[]#YqR3#zL56pqK0d,{a]Qs/w3dE^up?');
define('SECURE_AUTH_SALT', 'l>A}Yhv1XsE#4[`hf[D)s(6?ro6Tj KF g!]pht4C0tfUMEq>!4!hVt:Yk$Eg@[f');
define('LOGGED_IN_SALT',   'c|uvHt-`X$k,fd{X*4MKCtH_YGrx!acz68UoB.]D6(]zUQ;lz8y8!7Kxh&qLXIL1');
define('NONCE_SALT',       '0F(V^J5|c/Ku4oSN[o$;3J}}<+Ua@qapfZbx*8:vaCk5#UC^>%mx:xm[J|+_x*ru');

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
