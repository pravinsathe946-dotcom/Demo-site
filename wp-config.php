<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );
define( 'AS3CF_SETTINGS', serialize( array(
    'provider' => 'aws',
    'access-key-id' => 'AKIA4YQACMNWRMHE2IQ7',
    'secret-access-key' => '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',
) ) );
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
define( 'AUTH_KEY',         'mNq ov9?:dZ +Xb4uOmoMK:US|}1k.2g0K!s2><@2R(SG8,7z:ZbBL~:a`<lpEV4' );
define( 'SECURE_AUTH_KEY',  '(XMt^UN/6Q,5pL^:j$jfhfE(ya*#X9X.m]rEP!rc?x&07B7ofK(ziP Vb?jJ)53 ' );
define( 'LOGGED_IN_KEY',    'QCFfIZ6K47J~lT/I!U$f4{Ue9_Q/5VX[MhMw8FRbY5+cL@20~{(Rd2~::P&?I]>J' );
define( 'NONCE_KEY',        'MI@Qb<pLXDp)4LMP2~!CD-O=>++UDC>Z^SgaTK1(*H(8z`lYZ]%^sEcbj8Wp&PrU' );
define( 'AUTH_SALT',        ';Gf{8_g7K8>nq23Yox)6{+-#cN;JWT8av-|BA5&1z/lx9c:^*ca&gerdPE<%j28~' );
define( 'SECURE_AUTH_SALT', '&$FZ~8h=-,0D28ChC&]`H O|r!5aG9Y8W$cQ<c@OZ}bL$p%zEowTq3&xR#j0yjK3' );
define( 'LOGGED_IN_SALT',   '*/ZmIuJ^!J};omd&:2OT#<weMZ 8iDFp8So60;hgyg4^$5=kQTkK0OPWu=:Y=<ht' );
define( 'NONCE_SALT',       'SAb{Hyfzh? kIP:F{bO^^oxDbbkr1Tdj/L]r{f)|NB;+MF(t/Q=Tn5UH!|XT:WB`' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
