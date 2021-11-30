<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
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
define( 'DB_NAME', 'gamesofworld' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'OQ_-+vE?gQ3{c4aw>wp[>lsoX#4cec2l!{rD.2P!E5[R 3@tQ>X!.Zw@>^zl1;Y:' );
define( 'SECURE_AUTH_KEY',  'GOC9^1QjW><l_k]Ktn9:@Xd(lJ8qM(`!elhXiZ-%ee_fu 0ZHzDR;MyFG5IK>*b:' );
define( 'LOGGED_IN_KEY',    'Wwih/,s)/|:2r)1ENd{ER9ExS:$P2lk_68p2{/V5]L*r=Yv~pzQt3e4VZ6MY1XBN' );
define( 'NONCE_KEY',        'N}9gi@yStqMlc#,kjmD/Z~ciqLL1., {KBZ`+N3miz_J=)SHVY+jJC7{a7/N 5jV' );
define( 'AUTH_SALT',        'F,)7{+C7_LB <PM?Pp+K%B7mpID50u@L;9]h@,9w6qD{8f5B&Wp{vI2mY1|9h({+' );
define( 'SECURE_AUTH_SALT', '^ZggK{K|=AB[D>h 8j|%qE.$jP{?tDPb, 1CWYjD~E|6JIOY(&6$<q#kp,`%t:0=' );
define( 'LOGGED_IN_SALT',   '.-giHjx$>sg*~qv)yfdz&N=if<P-U5VxR1X0D@caEbVLRS@JIf mp,n@Y5+WzYwt' );
define( 'NONCE_SALT',       'LC>|;P220!pCtrD9m4OyBq,btl{]~k;A1VblrwcZUUS5_0Bh]P3N<gB@:#~5-%|(' );

/**#@-*/

/**
 * WordPress database table prefix.
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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
define('FS_METHOD','direct');
