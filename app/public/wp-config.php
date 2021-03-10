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
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'QaH1x00/uyDHjKrSzkmwjOC52Z7RTK6lTv0sIG/rWvzK3tjLMnaWUwJkDmluVuW2pcSnZizsn5DOycC0OepLow==');
define('SECURE_AUTH_KEY',  'aMgDWLr4RP63Aw23GobTMf3E3nJPjVDV7a3S3prnumx3Sx7cugAjHXqKDEr3rk66kiE5XhL8uQtiF0U2BUAL5A==');
define('LOGGED_IN_KEY',    'JIc6KUvbXnRQQEee/mDA7hSAoWJ2Ry7oNDMnlCat1xHph8ohVaKGtbHw1ZVUUp0+N2IOin5XUhjuo9+WxrFJXA==');
define('NONCE_KEY',        'jXBGKzLPVesJEvwB4ExzsALcJptKYAMqBX59hE2nuva3HY3zsvuZ1CD/HMRuWi0WedNR/fE/uwurrYESY+i5rg==');
define('AUTH_SALT',        'dXdqfW0+vwmNZoZkbu94h8fzccWTY71XoCq7mdsO8H1UiFrkbotnqiTmhCyjHItFzWfuG6fyMSIWSBBcHPMteA==');
define('SECURE_AUTH_SALT', 'H4GKi1S31PKBBbYRro15V3K0vfx5ZRf4iQubLImYpqOqn19jny7eBvZxqJesmRRzKQDTGGED76zT1hRXAPQwXg==');
define('LOGGED_IN_SALT',   '3/qVHCsjK28okMeIXWCD62c19OwTDd3j4SIxN44K/RA5oQPI/DZWqVf8hA+QoTaduAayvMouzC2Io03+SxyKyw==');
define('NONCE_SALT',       'yG5YOgys1kjMNcLw5+c48g71Ca0feBfbLv5VVIbyMYZs2U6rtHy4cc21vdgyKAV+jtdxGfdaIbAWlMTYmweJDQ==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
