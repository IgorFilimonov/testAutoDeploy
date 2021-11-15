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
define( 'DB_NAME', 'seliger' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',         'i^M`]8Iuz<I1?4+l;Z,6vaO!~WfMWB)OXN*/~ |S(8Qi#ho@I&Xo8?(:^&PeDW%a' );
define( 'SECURE_AUTH_KEY',  'U|K_-6R>/8q_g>rP1N5i[[sJ9w>G5Rb/Ul+K[7+74!Il+]n=L?o0+}8:R7_7B`Hm' );
define( 'LOGGED_IN_KEY',    '!`Gn |S.8-=`](^JV] B,C1df55Q>cT`BwjzeZx{alAwOv($p>ceh3dsAL`>0P/K' );
define( 'NONCE_KEY',        'S;wI/E#pre*rt4b)YeZLq]t,sC`rBN~2}W{jGiaPOk/5Pco(d8;5(K&7GT}!R%#8' );
define( 'AUTH_SALT',        'Ic_n0s1P@=ccMS[0aJ[PpR~1k7R6L<R2AB}ix#^J}C#uSSb#SSHT|@#*<-oamkw,' );
define( 'SECURE_AUTH_SALT', 'cc$h8&aiH;M&kLIGev7lQUK94{)?cbpqI-aH7k#;>{T?[{ {a.INmQ~Cm8N~`i(G' );
define( 'LOGGED_IN_SALT',   '_QwrpPowR~?, 4AM<Dp-]@@@3t@Sgd{>~uo;AzJ2%DAMr/;H%-0-+(xHtgFD:|.m' );
define( 'NONCE_SALT',       '02y<TRCcA-_zk&zF[Pk596-J%J%13wsEO6n2)5u,ZBDwn2YDxyrF7tWs7xGo1RQm' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'gkh_';

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
