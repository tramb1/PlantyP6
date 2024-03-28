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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '?=JaEG%PI`8Mr0)daUlvB|k EOyC@2KMw>z:GMjKQT})#!3*s+s(*JtzWa^fUa{l' );
define( 'SECURE_AUTH_KEY',   'bSJU1<;}kI]Gqd-_lq~Shltq]Zd4;.VNE=ho(-V-a9=1T]H)MWIaHZo;A~$-&3fn' );
define( 'LOGGED_IN_KEY',     'VQ<)p?Er l;vQy3F7>t95/>EVmB=/.Bl,;)Gsm/ :B$k:?qcc`qa)C1!>7k[=W#,' );
define( 'NONCE_KEY',         'u=-Z(_KKIa8.|jIYP8byR_l]5v$x-5;$qTBR4Nn$zaFgjr!raiaeEfvj+*4mE^#@' );
define( 'AUTH_SALT',         'bPy#cXU~16p;<0=JJX#46/G#!Yre6e<y%ooS-A6#*WS%5C0qjo{f6?%5t~:v(TsO' );
define( 'SECURE_AUTH_SALT',  'OrgIf;Wp:7$;ZRXB~+TO;X]u>h0najf>B}I5Qc/6cpf/9I[VO/jCw#{nEe_[],:w' );
define( 'LOGGED_IN_SALT',    'WUqF-WW)Ux$P:XgJUm8&ZW7s8K6`R_VdI|;.yx>QGJ94dGShTp,YJnDqvTPD=q%G' );
define( 'NONCE_SALT',        'qkPg_69@1^P/Em-[]DKojOsx3U0p`u[EbIh.>W2FpQo^*@dXgkhAzJN!z>pX,/9;' );
define( 'WP_CACHE_KEY_SALT', 'xtl%% &(8Pq2&MUfPdBMg3?v5_/dm3g.9Xg8@CT!*>x[lK) &C-J~J%^K+XT$LEV' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
