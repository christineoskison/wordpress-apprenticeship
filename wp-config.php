<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
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
define('DB_NAME', 'apprenticeship');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         '3(we2BHaV,N&o^aZNxJOZ t2 -Pmy:!X4)wMv#M3[>Bmf?p4kQV$Knym9HrnAg%|');
define('SECURE_AUTH_KEY',  '~ejng{rEfC9|(Lan9+Bk_|@+w.$k(mFH;6o0o(g&~._J}sLK!6)Y9piBz(f[aA@r');
define('LOGGED_IN_KEY',    'xG!A^Q/5utaP^N.1ejI~J2P<l-rM5%^raz^+]?p+NF T2!RxQ<Lo1$W+6cbkXl]K');
define('NONCE_KEY',        ' fRt1S@VMu5yv]xp1!X;#Rf2sC9lL,;<quShxyme5|^>yxNr+-)NC>)|##AIrqGM');
define('AUTH_SALT',        '<<jw+~pztUh% K5!TQW ;wW}S$$o#_S%rIl3}|efvKFVJi+ts+!|.|-kKncvZ4[|');
define('SECURE_AUTH_SALT', '~~q~yyYLA.Ho`6A&&_n3C`9|*-wstESEsbP8hSVD|PDOOaY6$P B`_vo<#Z3^ vu');
define('LOGGED_IN_SALT',   '^L_.|X--Ff(2kgvN0,m-{yha,LbzTpyUD*#V;1ewL[AkUjmu`% eEve>q<PB)JJG');
define('NONCE_SALT',       '[V>iq:jsec7:a>+$MDn |Kes!t,NSY*+qVRt(iD4L?V}:7jSBD]FvVoa/K[6A!5o');

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
