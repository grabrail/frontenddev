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
define( 'DB_NAME', 'herbalistix' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',         'MkGyH9K+XMI}gw|1+T&^/Y>/$!||[N9{z!9m@*;[zf_dK]FCwXBG]<v? W;r],<Y' );
define( 'SECURE_AUTH_KEY',  '4{!trut@u#(:az*2vWXsbTnJ(S[3BANQcVK?VT `g3=Gm||S28{gE-(6#RJ~LcY4' );
define( 'LOGGED_IN_KEY',    '<[W8^pmp}fnE@HdQS<p.w-LHIhP!T&-owJ<J8O@H<q~IH{T!Yge8jq,4-{D58Rlq' );
define( 'NONCE_KEY',        'opz.^:yBWwkj!?2[,r-cYFe=E?=t<-9Z${h+]Phh7y3^C>Yy)uy{O(:02mDTnYYS' );
define( 'AUTH_SALT',        'JqRYxLM&t$@.Er<Dj+|i[}1^}FyuUnEIOFoebKblHH<X`uhSbSm*u</=%,N[eNw[' );
define( 'SECURE_AUTH_SALT', 'jrqH7>;#T4$V?}Ys0EOCpoh}Uv2^#&2Z5Hk4|N^`12vP}NxTKH:Vnq2~{z-mBaiS' );
define( 'LOGGED_IN_SALT',   'JH8G [0v}[mB<TM#@4.U7KQB>0$2FZo%@=ChTag=`Z/xm/ 0^YO=HThLW(u-b 7!' );
define( 'NONCE_SALT',       'py58~T6=Zj{{/dAFvkT9H!<<I@AiTik.e/a&!TUzq:8H$?HMnS!X8ZsmjZU?ney<' );

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
