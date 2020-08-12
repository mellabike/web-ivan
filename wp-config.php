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
define( 'DB_NAME', 'Glovendi' );

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
define( 'AUTH_KEY',         '`0Kd: >2k[=(}+p[*R~iW#!c#v9[[rWPuIX&x8Bb;[Tf>YvJn.H)Ic56}Q!zB:2#' );
define( 'SECURE_AUTH_KEY',  '+pZ#Oz>*Z}[Gly{;#pdB+AP<{z|u+Y%CkAS[eDX)LY~u:%(44]L> `$+8)3w]B=B' );
define( 'LOGGED_IN_KEY',    '+Ias5dFe(3V-FDp1#~>bS+mk$2v|pXBJq{du$yH+.{`-yx{~gnKo]T/]9!c{ K$%' );
define( 'NONCE_KEY',        'WHxyz;Rc_,06qh0RzyvomRd](@;~bnD>?]Tk**nQ-*!Kx^94Qz&]db!0 v}#58za' );
define( 'AUTH_SALT',        '{-y3Ub>40-fc_]DIk c.:p=ZQ+-2_^RtVNfm,kR*qkLV<;:IK?#2voED.xHkyQW6' );
define( 'SECURE_AUTH_SALT', ',X6)[++(<)0rJMx6UVj@Ht%MU/uaFopTQ*0M[#Ix/{E?Mto[u^#SCE[E7b-m>/GT' );
define( 'LOGGED_IN_SALT',   '>:iJanYW~Ta<mtO9[yn-T2cK:g}?bMNk9Zl=~PsHX|j]g*HTqNTz1HhM3d-pnC)~' );
define( 'NONCE_SALT',       '_<.-n}dn-*p{[1_cH-z>uq[%jy0:M8NPJgOc*`m,1qJLz0IxWWzOb*2k2j`hjT{<' );

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
