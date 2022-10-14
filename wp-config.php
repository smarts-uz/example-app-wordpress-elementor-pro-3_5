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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp-cli' );

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
define( 'AUTH_KEY',         '1jO$5HM3!SGT~a^lR/_!&T-L(Mnx/ha_)GmWRkiRqnJSGu@I/MxuT%i2<_Vp;jfh' );
define( 'SECURE_AUTH_KEY',  'uuDA^DR#X!oo!fh+>iFu,@<3dzj0``J)r$m 3wt0JJLr/|CO8)Nb%1)9afo/IXL1' );
define( 'LOGGED_IN_KEY',    '`m6+8HPMt4VEkO]V/Y4dK=ZE9E5qjtCJQLx@W~efh/>1>S(dy4t~3i]EAkdn,F3c' );
define( 'NONCE_KEY',        ' 9dW/)H;)qPt5}XNlomV<rt(VSlwUwm>R>yH2Nvq/|4@Hj?1el6b/dBl^%ANOKzA' );
define( 'AUTH_SALT',        'ijM@96Oa#<H(z+h}!%SBR[Kf7K9l&e3$Y[VQetDp!+)%GlmfCa88Xwc5*n}H{+lN' );
define( 'SECURE_AUTH_SALT', ':J/>t,Y7 uBuFhl!ljZOny8IAS-hh{4cd]PD{FNT%KU`3v7G0*nxZiKYIr,o`m70' );
define( 'LOGGED_IN_SALT',   'beEu*lo!6h<]Tl LG|2y~x=(f?Mj8%}(4]}zjqc}O@Sx.6(b1WZp}wrRaK%kXcP(' );
define( 'NONCE_SALT',       '?sc&}>[DxLhBVx#f.AT}[qdH)^Zwx4vXt6lTZ8*C$mQ7M zTE2}bgC{ZX3m7j{%j' );

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
