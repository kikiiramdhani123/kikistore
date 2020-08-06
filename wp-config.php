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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'kikistoredb' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', '127.0.0.1' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'p#V .4(S[* S&dq!LfV}cN?_4:^{):<[C1Q F=^io9)n/$%S^~@Ni6HF1:U1<jpF' );
define( 'SECURE_AUTH_KEY',  'X($kKGwB^dmxAHh$x4lJt(Wn&~Uxu.w:JGm6%CK}i|w~W{pV),ke:X2R~*dBO/bE' );
define( 'LOGGED_IN_KEY',    '=Sl7y{aB5M3M}C4)I&4>I?-K1N#c/O*L%YrM;x-O/c$G)emw7L*+6j]HsDncYAmW' );
define( 'NONCE_KEY',        'MY^<|4{C*&e/GxY|-QOgq&j34M 5Ad7kkyF;#D)ZUb2hN.r)XB+X,G%/kflr7 6d' );
define( 'AUTH_SALT',        'm_v59+p^N,0N%,5Ug5w5D0 2;1S)D.V$wb.qiBxrS?w3]RtRE,oUe)r4M30CB6mt' );
define( 'SECURE_AUTH_SALT', '3wnoxyNjDw84LhYak%]Lf.(Ka1L-.BWz9`Ur6KU&KQOBIP%L 9+S~vfZpB.E~}Nc' );
define( 'LOGGED_IN_SALT',   'bn:n.`+v~JUo|,&rbPwbeT~BFd=Y.Zvu%{i35]+biX,4;CbtGE>zLMN#P&{e65`?' );
define( 'NONCE_SALT',       'x9;33 ^d$ud5-maH<%*Hq64zY+XM3zGnOE,/?bS^n!$*Pn1|V!f6qy;$w^MX9_O ' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'ks_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'kikistoredb' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', '127.0.0.1' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'p#V .4(S[* S&dq!LfV}cN?_4:^{):<[C1Q F=^io9)n/$%S^~@Ni6HF1:U1<jpF' );
define( 'SECURE_AUTH_KEY',  'X($kKGwB^dmxAHh$x4lJt(Wn&~Uxu.w:JGm6%CK}i|w~W{pV),ke:X2R~*dBO/bE' );
define( 'LOGGED_IN_KEY',    '=Sl7y{aB5M3M}C4)I&4>I?-K1N#c/O*L%YrM;x-O/c$G)emw7L*+6j]HsDncYAmW' );
define( 'NONCE_KEY',        'MY^<|4{C*&e/GxY|-QOgq&j34M 5Ad7kkyF;#D)ZUb2hN.r)XB+X,G%/kflr7 6d' );
define( 'AUTH_SALT',        'm_v59+p^N,0N%,5Ug5w5D0 2;1S)D.V$wb.qiBxrS?w3]RtRE,oUe)r4M30CB6mt' );
define( 'SECURE_AUTH_SALT', '3wnoxyNjDw84LhYak%]Lf.(Ka1L-.BWz9`Ur6KU&KQOBIP%L 9+S~vfZpB.E~}Nc' );
define( 'LOGGED_IN_SALT',   'bn:n.`+v~JUo|,&rbPwbeT~BFd=Y.Zvu%{i35]+biX,4;CbtGE>zLMN#P&{e65`?' );
define( 'NONCE_SALT',       'x9;33 ^d$ud5-maH<%*Hq64zY+XM3zGnOE,/?bS^n!$*Pn1|V!f6qy;$w^MX9_O ' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'ks_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

