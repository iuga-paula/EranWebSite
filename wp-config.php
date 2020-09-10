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
define( 'DB_NAME', 'eran_db' );

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
define( 'AUTH_KEY',         'fI?1GP$w^Rt,v&?p+7YnHCIA 8ko]*hA&Nnd?TUaQ-l5G^DWnomqsA=eR?d])gw<' );
define( 'SECURE_AUTH_KEY',  '~dDLttgHo8j/0R+|^6m1~5b&.l#9W_R}DA1]6L/yN{ekMU.Fmb06Z8cpl5P_}?/u' );
define( 'LOGGED_IN_KEY',    '5R,5TD )PkM7iWimn)icp)tJCKi8c`M^.HtqKJ] $Mt3tKlcapyTA!PktSAM2$;(' );
define( 'NONCE_KEY',        '7j`^CF1vP[@rLR&@ ?kQvi*TJv[dm~d413SgU#&:1pKZd1%Bo$iNTIU];fi&hv~T' );
define( 'AUTH_SALT',        '-qDDR$[Cmn8g5[cDxkO:iovv^N/SXmLF[L?P% {~rT%TJ>;z?c:V)M_boe!U[|V@' );
define( 'SECURE_AUTH_SALT', '7Xs>R}.#kiX={G;Rc]ykAR)zj^Ezl+ C3OGc[cGtzueMxjI_Ithu1K}E%gQ36%>B' );
define( 'LOGGED_IN_SALT',   'R2G#t)9Yjd*>+l!o3!g<]x$U7ZGb a:O-2R)bk7PA=n$3!$6J-o]E feOsL1j:U]' );
define( 'NONCE_SALT',       '19CPEyv#$H}e!g +=nT<agf!TgPNFTAT)!hqHzJ_<g0&x9 }LeEZ,D&0f3#!ty]>' );

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
