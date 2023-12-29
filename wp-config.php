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
define( 'DB_NAME', "planty-bdd" );

/** Database username */
define( 'DB_USER', "root" );

/** Database password */
define( 'DB_PASSWORD', "root" );

/** Database hostname */
define( 'DB_HOST', "localhost" );

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
define( 'AUTH_KEY',         'JDRp2*Au1%V)So/i9~PXFfhk=KeMbn*&!;DPC?%c&ZR_Rb+NOjC>$jGtH@Y/-Miw' );
define( 'SECURE_AUTH_KEY',  'iH]G1=<5}*lr-,(Q@^LgRiN>S>s+[>GYI}I~uw4ZE.sNc$:.e-v0adk?hl!y#i]F' );
define( 'LOGGED_IN_KEY',    'e`@%Bso{JhvH4,6MWG|j=imHS-L3KuYBuEzUw$XE3D|L;RS}>wex=cO:w0|e4GA9' );
define( 'NONCE_KEY',        'rgTnjr|:fEA6#orY#%bdJ{?J7?7Ho*KsmIZ<l2Rfqa+HzGp uO#S3,/!ra#IUs:t' );
define( 'AUTH_SALT',        '*5SPxg~2uguU^Qp$jW?AoUDFOPbkFjJ*UzF[w3!}.sk`hJ6fDk.rtU**#U}59G(D' );
define( 'SECURE_AUTH_SALT', 'hofpqCT7?O3$bKegJoD{C5%ChP%HgojzJCZ%}TM^DgA>B%hYy>ggd[`z`4#`D5`(' );
define( 'LOGGED_IN_SALT',   'T,cO,sM(W# 9|8u+#rB<sdE5_w?$e]A.t<f6k)K$PyfyL_d74]5RM]@2OGTOoY2t' );
define( 'NONCE_SALT',       '=V_: .k]QOMjzONxIK>tu/i+,q.^XZDqyH~g5-0kG;BzBKv]_(C%?i@64ynO1#/i' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'com_';

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
	define( 'ABSPATH', dirname(__FILE__) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
