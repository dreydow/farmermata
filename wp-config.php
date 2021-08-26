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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'farmermat_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'arowoloemma' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'X-*=P25rRS3CpG|tY=L3]qY-XF186.d*#;KFR9Sd(&ceqkL~#D_[kO!c767hr`/l' );
define( 'SECURE_AUTH_KEY',  'kAek3J_3xVlQ%<EaEsC?q>e.T! +Y^#Mkh?<b1v,bNzjs2))-E(](C_hfR8mJ.a(' );
define( 'LOGGED_IN_KEY',    'hbxGu/~x*Eh`gY*]7o]BR9yYRe4UBrM?r&WemnVn7[@= ~?Th{~G&L5(S2I>gDR]' );
define( 'NONCE_KEY',        'fEz>f|5XS}Y!1oPL2:z;1Hheqa%Zkv3(M]X~H~^V+Vt-kr=[JtXQc+}7.^5#qi3@' );
define( 'AUTH_SALT',        'H:{S%^pFgYgWb4s9#t^wyhu@SS)Y]]Gi@TVm,3G/.5^M?%;M77*_r+M<=tKbi2I|' );
define( 'SECURE_AUTH_SALT', '+;f>[:L2-VR.Jasa19-d],^w/P[R@:ns~[L({&a%wKVJP91Pq0nY=uz0N6nq7$dQ' );
define( 'LOGGED_IN_SALT',   '?.INJo}h`<[Iv`[k`9c7v*@/)j*Tw)@C,4I,;9L8OUM3JgIzK0tDZdC7i-NIto4C' );
define( 'NONCE_SALT',       'M[M~|G<]Cwkjt%0gBI-X$nc+suEyBYh(XwKod^c%!t~O/*O/@vPrO9=:;6wSQZTA' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
