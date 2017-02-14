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
define('DB_NAME', 'wp');

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
define('AUTH_KEY',         'y<D`{e*9>G5Kz|Ab8bijr)N7NQrj}DP*wUGsDzcXS Gmv$u-o`B7`2)+RTas!&w=');
define('SECURE_AUTH_KEY',  ';Ls%ymoS&VajR;=~CF-o}Z;_$;<u%JGf6p#-@HE4q+P+qiu+G/tn/Q_2(yYSfJ04');
define('LOGGED_IN_KEY',    'cthvgZKajefv{8T u^f/{#h>08NQ&(/t2Oa)sxCoQak~C%+C<IMPQ,D&rp=u;B|Y');
define('NONCE_KEY',        'f0I qBuC9$*LEG,-(7wGq0.RzIY|PN+1V*3x319Qg3<9[17?}TMXi;H{C20HktXD');
define('AUTH_SALT',        'o/fco)p>,6`e~$rD|VGy$.$Yj3+-4[: x0Z;xQS_S!ql@=)~(-QcI-mUFzyPVM0/');
define('SECURE_AUTH_SALT', '^tn81#L*;-Onh3@QW-xAeucO~GY0K/D)c>Bwp#qHhPv{]5N$lt8TQh`B{4ngjdeZ');
define('LOGGED_IN_SALT',   'z {|]]V%fM|U~$;|AMHNJj ngO|:2;O`z%%pnu(Uwx+3?#P_[%w5+J((Ygu2fPI?');
define('NONCE_SALT',       'Fv!G}T%U2B<4]kdJ-zIc2a-@Bh3P7+-^*Vr6=#%/y@[>,K{wv2|q(>>tKUXMJoi!');

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
