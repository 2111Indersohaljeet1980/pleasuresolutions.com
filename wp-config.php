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
define('DB_NAME', 'heroku_f764dd042ba99ad');


/** MySQL database username */
define('DB_USER', 'b4f2875f452567');


/** MySQL database password */
define('DB_PASSWORD', '457dfd4e');


/** MySQL hostname */
define('DB_HOST', 'us-cdbr-east-04.cleardb.com');


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
define('AUTH_KEY',         '}L/A@#H$z0{w*yasrTC=@ `~8bnAgwsT(12(Oe%$9g5[LO9=0g,3}&ruI-dWIwr?');

define('SECURE_AUTH_KEY',  ')Y0&ip5P,;e5?.,62WY3_t$h/QHfzRhA~<>/QQH,jwH.MO*F+D#96cDm))h|4SEK');

define('LOGGED_IN_KEY',    '~:mWB-Bk0piO`pIHC9<kq5<S^5-X/e->8`U$m<PicG.Zd}+8I|@*l2@HxIpIe[P!');

define('NONCE_KEY',        '7IUsR|VSQKJ<^*ri9Y|rZ>dn!rE H5lsU!83c.XF[;}OVm*N^4J0=cC=MOlWLB5X');

define('AUTH_SALT',        ',Dw8!LhEQ:5k#|A|F8LOIM>3%gaBq{YIhnq=2b@{IC]+=zrzr)5y/lTdgACr`x%:');

define('SECURE_AUTH_SALT', '-^a0.4pH~Z4+n[H5%(7+j$Do<u osw<>RiVMY@x~C6Y0NNX>HIg,.B!IK3;o>Q+]');

define('LOGGED_IN_SALT',   'ftZV(xh)[/z0u!vQ6(Z{+dbtBa[*UkE1XQT-nyGy6tx%UZD_b+yFHYktCsUfK=l(');

define('NONCE_SALT',       'C:[(zXE0P&|3UXrYyJinouN8 G]U#;x_q,Om*USy(2}.T%P:%F|;gREA+5+1B{><');


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
