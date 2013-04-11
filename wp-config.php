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
define('DB_NAME', 'tg_db');

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
define('AUTH_KEY',         'H+_YDlF-diPqHBPP[>S=J}E0|a,5zu+o pxtq~}?&K<<n!m40UV$Q6M=n0zSMX%0');
define('SECURE_AUTH_KEY',  '%3Vi&dl?rYF$<Vtyn0~(CP+RIJC}L@KgNM|+E~N*nZu+YZ7QS7}7;.i!w[I^CT^|');
define('LOGGED_IN_KEY',    'jo:s}Fbpif_]!O.GO&k2#nHzZJ/ Vvg;[s4ob1F,Rf<1@J(5U~1b(l6$|}%e6ISK');
define('NONCE_KEY',        'CiNLp5?HA[%:Z-NQS@XPwqd$B0@a }V[hQl{qh? jtkf3n|7tse5g.rO(|Bx7--a');
define('AUTH_SALT',        ')`(CexKk6/QdQKnh5tR,)N;(KSt(HezAMaqr-EbnV<+wl-+Sb+>4]&s,`d;};/~Q');
define('SECURE_AUTH_SALT', 'AL^?-e|-k7G^NN2fE[pwR|f.@eS4Bd,XVyQQAx5l>07j`Qc1w2`QAQ|anYu)uFf4');
define('LOGGED_IN_SALT',   'k)6~$)@r*RW2>:; _QX6FelCnpM-^jys%w0K&,`}U3!caZh_*aVFI{xfrxA[+_|q');
define('NONCE_SALT',       'se<-Aa.R?`T_VA=9+_j1k#C0v|+s0hGd/,^]-([S$dKw|/?zfh{dEF?U68IQtKOM');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
