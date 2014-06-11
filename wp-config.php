<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'dflexssidb');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '&JSfsto=1[#o?*n([vo|89%-e8q}cGD+9BTC8P+J>`*4ME(TD&+zS6g;F9o{WU!Q');
define('SECURE_AUTH_KEY',  '9O;=4M`;?oS:F&dA-/OW9zsx{sJm(]T <+^EBJiZA`<5=h;jEUb[+D8e<mB8V c4');
define('LOGGED_IN_KEY',    'r$Fl<y[]|5|ek8hyP,!+/ZH>F.#|0=qv63r7zFkA H+!2C0b2d5eiXO(I5w_10IE');
define('NONCE_KEY',        '7>>a-)e>KUFYW-/(c.zp:}xBcUA;zFf. am|C)Bhgt.mF~|s?++9l$2|W*~IH5h:');
define('AUTH_SALT',        'Tp0`B<H8Y*e|Cg*I|#rW>~-sg||^6x1@.;QV29DCJ+Z2q9=8p|sKU85Fat@cYlr7');
define('SECURE_AUTH_SALT', '?AAMxFq*Qs{9J$A[DOL;K^H+$M-+5btCI69>.H|OuPX>]GxT /7voe-d5m#dx@H+');
define('LOGGED_IN_SALT',   '*%Z,Y9kxYtX<mQ+=QCv,Ds./){8gO_z+7`F9$W[u95Ug,=_j4jZ5~|~bR1.B2%{U');
define('NONCE_SALT',       '(WP`P5TL|JrC{Uk{jC<$2d(Nzw<~8[8E|~?t8-c/lF*<dD{x@wwn7xM3PN>+j#kg');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'dp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

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
