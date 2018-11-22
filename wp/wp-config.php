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
define('AUTH_KEY',         'u%V[EBR1jDYy`E VBl(7`~,~VZ(=hAg^#.$s/Bod;;S)1k, /I3OB1IVN<bhGDco');
define('SECURE_AUTH_KEY',  'cu~Br,cDtv@L;^c,/l-:b:&^o#Rpy(,?0EdbS5:0!2o{oqEE#3+mx|DP/2i5tK9I');
define('LOGGED_IN_KEY',    'O<sxp*}IP5mfHY.9kaY*W#?Bxsxz JWlQNuhNHksG|3%bTsc|4RtU.Q^KmVopPq2');
define('NONCE_KEY',        'v _fVdQjQO.<lV2oJOr-8g}yKVL8E5]lznO m,}B%oOH 4s!+q[U!y%![9zH}JY@');
define('AUTH_SALT',        '7>))QU#A.*2&OF-9H@z`qZeq[=|r}:%Mt4A@eH~/Ah[{EtrtT&2e|ZDS=g%5*5XR');
define('SECURE_AUTH_SALT', 'P}Zz58;pxgB?WrAH$gj9.yP]A,pQ`C.G:h`Ze!sj7l>W d#V/y7.|ni;p!@vpatd');
define('LOGGED_IN_SALT',   'p+{r&qKW$>N@,o0YMFNf*aXjsJ(=#7.cDo*6Aov@?S`#8gK05&W|~(xq&N$H9{S}');
define('NONCE_SALT',       'n1<s[ <MlM_*]=xB.+E~G?C%uRRu<F@jjLPb&e6v9CE@0T9Ok[B/BWEaxo6:m)&!');

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
