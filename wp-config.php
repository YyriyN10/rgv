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
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'rgv' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'myDBpass100!' );

/** Database hostname */
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
define( 'AUTH_KEY',         'nY@hXdYsh{n~Nn.Bb7azg0+ `jJ/=@EH{888pY#bpS{W20OaNTRMW,aaLd;J^jlw' );
define( 'SECURE_AUTH_KEY',  'N%?wq(qUA:_W!&^I;Bb..E?-^BzI*6<vxDeH7XC9dzQ}b(x9Dh/.<CFCesk4vt10' );
define( 'LOGGED_IN_KEY',    '[QQDZ@$i5S~}KH=+_A{6NV{LXVd-P1:%oowYM5R.7<Ckx]aKUUZ=a<14-i^tmZ]}' );
define( 'NONCE_KEY',        'p{j.06:i_9F4=YKC(#<EWy),7|I,}xp+}^mbMKjAS@KM]XaEw!jX=5sdx{De_)vy' );
define( 'AUTH_SALT',        'I>+JbKwdCNHDA+Cp&v{I3G28q:%Dh=mp{QDju1m2jf24]x64.fL{$4Q>j{N HYzJ' );
define( 'SECURE_AUTH_SALT', 'utdl/|G.h4rqJ7OxttY,}rDG^$jgkLcCkyXzx>eZq0tX2)}&xg%go1!9x]|UacHo' );
define( 'LOGGED_IN_SALT',   '{g#D]^ eCeB9XS*ZjSmTd4Pl(JV@H6dsD]S/k=yi1EA,7K @[/1PgH*=AeNmN9GU' );
define( 'NONCE_SALT',       'r>qUhj:dW!%W3dW<ho0X0EF~/?rx/=@mm#&]Bb8Ke 26T3}BC]sIw(^8ag*et>_N' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'yuwprgv_';

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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

/** Downloading plugins and updates without FTP. */
define('FS_METHOD', 'direct');

/* Disabling file editing in the admin panel WP */
define('DISALLOW_FILE_EDIT', true);
