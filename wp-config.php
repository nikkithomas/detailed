<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'detailed');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'uHAuaq)1iLl/6hUDW^BMosQ:x[_aDOh2K+%1/,yA79B|7<u1=b-1}o<@0QHI7wbk');
define('SECURE_AUTH_KEY',  ')Ao!WY+ n-sJg1qdsR37]x-P7|Q o4]pq!N37pb@<0F8M;p5Fh3f+QqprW#[mndU');
define('LOGGED_IN_KEY',    'q9!?VO#y13<h@ar<z+ZhWN}i|DyeL)O$vfbD]vZP_66cR.#KLRg#KMrO+V>NGEC~');
define('NONCE_KEY',        '}$?_Kc-Ak8XOjO+8O1:x|zzpMF3`Omqqd`c<H3wXp lB3fL@*o9 Mqt,$3$_(;l[');
define('AUTH_SALT',        '[a5a8>G$`^3v&N@h`P%=}($*o8.|7h1P=}C}]eq D-3X>f}[&n)9ezVl-;M+cv6K');
define('SECURE_AUTH_SALT', 'mp57!9 I6z>0%+D4p<Yt}2 ?BzK|))WsROiq&Q+V$tTnUc=E =2Ry5[X >xxM4~9');
define('LOGGED_IN_SALT',   '%S8-:VlO-|<b_,`C}Jo1QPWr|A=d-TuwjDp8),-;9 tN}YDs@ dPIM4Gp*f1{$LG');
define('NONCE_SALT',       'L~[Rrs^N%&z`o>rWqS(1pAD8NMF^y(NL|{}Z5:c7I7-gt}%?}X$iqOxX3/Fp1s?F');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
