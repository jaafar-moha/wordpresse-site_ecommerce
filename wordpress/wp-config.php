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
define( 'DB_NAME', 'ecommerce' );

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
define( 'AUTH_KEY',         'Syxir4q^pF%?!^_f&`^Cc$1]k)wL&wL#4$^Q508/X3;A{EC6OTTe:wU!RP!? j-}' );
define( 'SECURE_AUTH_KEY',  'Xv&)=T)n.Z9w7;;^e=w^c|_jdXk/7EHPLt.wj+k9e;WExQz}y^*g+3xLR;L.iIff' );
define( 'LOGGED_IN_KEY',    '8[Z$%}G&?Bhe )#9Dz=-duUB/$MqW;mdO>%ZJPH N5G47l9$kS%GWv=XH_GJ_v;n' );
define( 'NONCE_KEY',        '$ZKTC/qdD) aY6 9l9x6H/$jhWey`1;l2`5:Ohl%AhpREV~[Qz%[[_Wg0VKprE.a' );
define( 'AUTH_SALT',        '2>9)+DJ!!jM7?v8Q),&;n%Ec3&;a32lX+{0MK;5B5(GSYTi.rCS|Th(lUI _%6P^' );
define( 'SECURE_AUTH_SALT', ',F<Sqkpo?k[JPPQZndvY6CiQx*yt7!&#*F`F_ xAQ+LSR#6+QDaN4!~GX*H{uCO8' );
define( 'LOGGED_IN_SALT',   'N&}dYz?ER=acZahCDtc<bvb1!+K-#EWB5}~W%:?R/|LO0z&V[Du~&lV[!JJ$ J6)' );
define( 'NONCE_SALT',       '6@)z[A[zVZ/V ;VtT]!EBx4kMp-N#PAYTQQDgHS_5fuCe;g(%1)GopZ|z..B7|#!' );

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
