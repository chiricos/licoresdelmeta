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
define('DB_NAME', 'unidadde_licores');

/** MySQL database username */
define('DB_USER', 'unidaddelicoresd');

/** MySQL database password */
define('DB_PASSWORD', 'Ngd(d{9&5dTZ');

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
define('AUTH_KEY',         '~ |uY9D4KlM(U,o&csGLm1BM@5NmJGQx9+K#?~H9#;Kj%>c-h&Bo1=N97(^z!kX:');
define('SECURE_AUTH_KEY',  '.Pm.lzT83*A?2fOmiy:s> u6I8DC9Z&itVRc;B^1?<[qnaU[@Z2^|(xpZ-uqU^w[');
define('LOGGED_IN_KEY',    '*m+[fn-a!caJl1Oe1{/V?y;-F+E,c+/6&!.JDFHm;{I`|6xN!9$d1D`@ml@/6D{F');
define('NONCE_KEY',        '+wKBL5pUK@sy_G`3(Ob+-iHGf5-R8JlL)RK u$V.$;n*{Ydkn4W#m./Ietys+Dtm');
define('AUTH_SALT',        ';+-)~t6Cb**3H?RQ_97R~y.I-RuIhiOd-*lBdd_OB<iA<<0Z>8n0;a|W= :++w[q');
define('SECURE_AUTH_SALT', ']yWWK<.B Nt$m &57t_t`mpyK,N`%)j3CR{:!_XTqgjs%_+-[iPc]o#f/{i`)J*V');
define('LOGGED_IN_SALT',   '76>r853nB]QxJ746sys-A>P$;*lr1@Xe^|$U`r0g6~P(AyUv%|Cy?.U:bo` -QrH');
define('NONCE_SALT',       '|T2!QCxeFLelK^Y>P5-0>3/s2`Tk|q(r>8=-P6@.X[|L1lbs2 :@y%B/GhU`0TlY');

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
