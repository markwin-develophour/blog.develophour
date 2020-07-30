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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'blog_site');

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
define('AUTH_KEY',         'qq2X=%$vj.h?! c|!Dk$`^QvC|Md,7w]Tva%KM]L*>DrH#tZY]D+0J+cBt8+oM#:');
define('SECURE_AUTH_KEY',  'g6t<V&c:$t{z[/FPI`$:z<]I;n25UW~SaKs,uJQyvGU.{_#_*8%4,6_#Gzw~i2=n');
define('LOGGED_IN_KEY',    '!;.$#h`nUt:,0ul]+Olf8{?(wfOU] ;+1@KWzGk6m@|69MHAu/i>[Q2wR{v6#c4w');
define('NONCE_KEY',        'vbEcSmoA2KGBGem0U?~VxZ)`L2k1{?~gz6g{mF=FfA>3rdk;S47N0P~v]C3uC8g>');
define('AUTH_SALT',        '-o//s1o%#psii{)Wo&Pth8_|8:D,7Q#r1_uq3wQD}ymp%Gk{:E1{+imd4Zg%)G}!');
define('SECURE_AUTH_SALT', 'y@%Qh]7Mr6.4gv*VPmuHntw)WFO}pq1B*1dn,=?f><l$<!|D>yerOXQJbM.RS,$^');
define('LOGGED_IN_SALT',   'Caw:hJ/Q_[PbbvV2#XahOvS*__s9m47NTEz$H}O.Q-DuM?bz|Y1%#Sf{}$~DQa}o');
define('NONCE_SALT',       'S_(?<(N5q;CVlIE{~O[^%bErSv^<~lt<s).c:X~@Te3_Xas5qa XfPItgoMhr@OA');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
