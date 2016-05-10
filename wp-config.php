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
define('DB_NAME', 'palmonfoundation');

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
define('AUTH_KEY',         '+~W/ZU<`69:/=e*tPU7~-/_NoodJO+I{ J,6c(RgKwf_BHG~F;&aFb2w95._D4%`');
define('SECURE_AUTH_KEY',  'W8gc~[]UNgkOt^&/%WRc;>=?{!P~aln6r,jt/=H2`by`)3Oy<<Ik&oyW^|dA*6iz');
define('LOGGED_IN_KEY',    '{)vldKmFvg8sZXBIN-(=ukZ+}u&@YY+z+@h7L?|Lo%:+A_@?f7_A4EYH[(+g R:{');
define('NONCE_KEY',        'fX!e_kf6?E+eN[}&|F]{R+QvQe6zPWFU%wxji~Rr01Z@ag+;P(r<4FN|]<{}z6rT');
define('AUTH_SALT',        'tM0~|Eq%|~4~0gp$j5ho#G&XI$8X=<1h8d(LIer/oVM!5-2_|P]}2y&j>cn1 }&P');
define('SECURE_AUTH_SALT', 'Crw&?o/>Y^>$<WV?(e8r:obHWGT.u|,U|^-|]e0G|n sC?vn_p$Kzr[pR3tRc6_}');
define('LOGGED_IN_SALT',   'k0 pw-M+f|G9hJMcb:|*=(,bmiX(/{We]W-6bkWd97-*k.P(-3< }wKWQS*2_g<=');
define('NONCE_SALT',       ';U;JE_n}oM#q7`@by7u[@+_w6!]RW;z5@[0zUYbjp4u/6yn>eU/C|q2]^jex? ;2');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'palmonfoundation_';

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
