<?php
define('WP_HOME', 'http://localhost/bdshungthinh365/');
define('WP_SITEURL', 'http://localhost/bdshungthinh365/');
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
define( 'DB_NAME', 'tungledb1' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '0nKLt{wf]^1Q@6:i):^~P.w.}, 5L4DMijOk&M$@cmD<)W[-wpYgBh/S%k[<nBz=' );
define( 'SECURE_AUTH_KEY',  'h7+1JVC/ie p1^HER$q1UHTB9srRI0=TtCKzJeaa:qTr@1-&$Ga;k{:bvFhD8(::' );
define( 'LOGGED_IN_KEY',    'PO*2$3xA)V7nF|V{GLah[iec[t,~aC6hK`LP9@u%=?eO[p|kP6BWjg0Bu#PfyhY1' );
define( 'NONCE_KEY',        '*x8RxP?tLZ<ScdgG-tz1c&[@0B?<Oti$%Y,<kd;a)H?!jr`k8mvGZE:oJf1PHC]+' );
define( 'AUTH_SALT',        'y[s^ILNMAn{1P`3HzYexrwjnPkwRFF9-(E>Z9>cd6V[Cusm{]lac$>SDB~@q:-02' );
define( 'SECURE_AUTH_SALT', 'J$H-B- e_)gUje;x=^-3pYm4HNO=VX1Txr0hRH8Hzo3qcoH-0.++g2kU[T2XtfXR' );
define( 'LOGGED_IN_SALT',   '*v,4R0-?pTw103;a%e8iw2r0%V$+;Mv[NpGi./YN?a@A*-mXo2M7 HDd(^qAO{L@' );
define( 'NONCE_SALT',       'PDd0u%?Yv` n|4F$exN:ZJLc.N3FjK6-}24DWC#_PUffF!6/ v#5hH``&|A`ux.M' );

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
