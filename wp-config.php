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
define('DB_NAME', 'wordpress');
/** MySQL database username */
define('DB_USER', 'uJqXuT4lONALak8S');
/** MySQL database password */
define('DB_PASSWORD', 'pDXrcP48s2tjElY6Q');
/** MySQL hostname */
define('DB_HOST', '10.10.26.58');
/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');
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
define('AUTH_KEY',         'uLXg-iU-or!QB|e-7bpIesP?$RL*!xbD*U|OP%/X|)|%@A2.|P@3q6wkWY*F} 8F');
define('SECURE_AUTH_KEY',  '-hbd!YvaFihN${Ib.d/Q:?=yI}pb{MJr}Malf~8D !hUdQ2}>.u>s+`:W.H5wi0F');
define('LOGGED_IN_KEY',    '<k=&(ujfZr2YLbG=Y=,Lb6&|@+f.S]_,T9v je_gJ]eyd--<V=@cjw11Hd)*3:O*');
define('NONCE_KEY',        '$dFR=0C425Q59{tgeMiO+f,*[27UuBQk[#=_z)FA{+$7#?qB{i6$$3#gnJFjeGI[');
define('AUTH_SALT',        'hKH_u9|<Q--&`KrCr{YuV Zm}jQFi*GGj-%.a4N9mKR>`L{/F+X*6{io&{{Y %Z(');
define('SECURE_AUTH_SALT', '`HhbkI:[G8!c!APAs]524b##%-#GG;cWhP!r(&$qe %;q@Haqd+0I?i_LZ.59).3');
define('LOGGED_IN_SALT',   '-q;qE;B$I6QEU(8u:&6N5EU^sFp_1U 9Fd;QIU[PdagtxE(qYw@.iQ&<0TGI3z..');
define('NONCE_SALT',       ':`pqtx(2% ki4(Ov>/T}-;H$b!-k(t| ;_AtZ? ]|Wt1em9hj6!(i|+I@!6;|3Vc');
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
