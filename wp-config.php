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
define('DB_NAME', 'wa_maker');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'o!]]O17^DL@c9c,d^24p4BN5YK]ksfkE&[G6]0KPtwAIV3!8_dtGr$-Tc:BT|+%?');
define('SECURE_AUTH_KEY',  'nec(/9<F.F#~ AX$Gl[ov H7vo+Uq-ROfD*ciVj>zN8O$ua-4;x!0Xlzc}PFNcU ');
define('LOGGED_IN_KEY',    'iBko3w{b2 V*V$)9E0kR{)Lt{4=EF77EZ+Hf:|@,IZ~@w6B7iUk}Ol8m:r~RB]!B');
define('NONCE_KEY',        'BJ9C{D-f;Cv6-FfbuP-Hb-(N@#JFjC!}j2~*c}DjNA`c:!217Z(H_#>q0*3z/(,+');
define('AUTH_SALT',        '}hkYm{CpgF_Tu&H<JN|<AlliR6m3gB:|nJY)_q}!Q-46M+g2g6twb#sDTF*[4boH');
define('SECURE_AUTH_SALT', 'rKJe<&#e|,WAYU{5*<.2}@qyh,Uj80N<TB:H(al*C9CoQgTL^DM[/Lt?Qz=S>]%K');
define('LOGGED_IN_SALT',   'MWGN3L^[[vX(qj&(K7Zep=><GCH7 }#4J?J80LhrkoJJA00s7(x+Sk]>IS|aD6mW');
define('NONCE_SALT',       'ymB!!jRvB>hd!=l%~MB73>hf(vSVUu*1^:6TLHenI--Q78^741>a}?@e(V;`ODv<');

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
