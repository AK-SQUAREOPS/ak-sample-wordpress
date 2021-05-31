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
 *@
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */
//define(‘RELOCATE’,true);
// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME','database_name_here' );

/** MySQL database username */
define( 'DB_USER', 'username_here' );

/** MySQL database password */
define( 'DB_PASSWORD', 'password_here' );

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
define( 'AUTH_KEY',         '4POS+EyV~hYx}9^V+*,mHnBzi3*Qt|lRV_i7t6<(/DvM}v&{_IrH0Uf#{:|EWVx[' );
define( 'SECURE_AUTH_KEY',  '7WRIve0mOq!e9Ge3F6|e1 etcw27sb:8DpikR&K-T,#n8&mLHZa1$e>*%1rd$A.[' );
define( 'LOGGED_IN_KEY',    'zm<4a+O~b2@2_ec|A9WrzbACw|s%Tdd2Nv2F4;)jMv+J?nd:^J-|m{BdRe6XD0H@' );
define( 'NONCE_KEY',        '3Y6_t6&]k,2u&/?d^YG!Z;Mq=F)5j9`K{M}JVFJfHz//xE*4m>?^Z?{ZY#I1xYxw' );
define( 'AUTH_SALT',        '0W~cc0v?]>Ual4>fh?KMMpj^p8!oG5g5dNG!j.O:Ttt[:z8i=U@)>eloL7M}e+LG' );
define( 'SECURE_AUTH_SALT', 'Qg{HZ|]V:WG}6PSr3`|xi5i.4AQzaaHac?{NPZ+vS$6l*s651YLfm+hB-p:yQtLZ' );
define( 'LOGGED_IN_SALT',   '3QFU?EwWk.~cU@=S`f25h!0R/c]GSoEs;&[:E7yC;**; f]s~RE.^bH_f.al8lQS' );
define( 'NONCE_SALT',       'feR&uMeLO8(+?hw-gZRkQ)<=MD-+sZ8Yd35X>]apojA91xS>6mmR8)_{Gy}VX+zm' );
//define('FORCE_SSL_ADMIN', true);

if (strpos($_SERVER['HTTP_X_FORWARDED_PROTO'], 'https') !== false)
   $_SERVER['HTTPS']='on';

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode..
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
define('WP_HOME','https://ak-demo-wordpress.squareops.xyz');
define('WP_SITEURL','https://ak-demo-wordpress.squareops.xyz');

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}
/*define('WP_SITEURL', 'https://' . $_SERVER['HTTP_HOST']);
define('WP_HOME', 'https://' . $_SERVER['HTTP_HOST']);
/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

