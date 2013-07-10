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
define('DB_NAME', 'wordpress_rnd');

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
define('AUTH_KEY',         '#@h2{qa<4/4xq)k)*_:6T M, c@i_^}n9wz#up?D&IaY?+++;<7l~;merJk9`;*-');
define('SECURE_AUTH_KEY',  '=EeM$Q*R7fb$q I8?s{O=!G>]C]HuEC4|x wWhFozsx~q0!]+c=gD-=vUjZiXSj%');
define('LOGGED_IN_KEY',    '.+D:%D+Ho=0Xk2m5xn/-$PZ^w#e`k#5GcPA{M[7u]EvUZtd)./ZP&[]51WL4I`m ');
define('NONCE_KEY',        'h(9;gN<gU([Hx~|U(VzlLrO,HZ!p%+XTX&Bw.1qq>@d&,g[8)au(|KS5~UH[l$lo');
define('AUTH_SALT',        ']9ji@CP+I8>Of5CuS^yH3D}1F)V>5Q{xZ>xqGUVOGoeLt~>TMO[^.(-sOHd@]gq4');
define('SECURE_AUTH_SALT', 'Ntv0E),}]aQQu~Hxd:lr0m>7ij+mwgsLGuUa|=*GO/;]R<Zyjt?mUyD0E,Nb q9X');
define('LOGGED_IN_SALT',   '7l8q|[FzmLNwzswDc2*=3gRUT1i-(St>zvkd^1Isb-AY,Se}d(@{^^qj90BRi+6x');
define('NONCE_SALT',       ' JtR<TciGm6:dj4_`SAI<N9 t{46WrI1qCVxqKos!|npXf%-^_Vufzp]+AB~M*OL');

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
