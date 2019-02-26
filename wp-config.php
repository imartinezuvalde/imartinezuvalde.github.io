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
define('DB_NAME', 'ismaelmartinez');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'cNcet4p a,$ZHa!*pTpmb0S5rRQQC$zPy$,g,F.fNz5U5V,eD7!HyFls2(g7c*Wz');
define('SECURE_AUTH_KEY',  '4%cvg8SiMykun#.39&|LHqon~FS0Ya-cl$MDj3.SWbDs@M`h#)R|B%T>#>2%a|P|');
define('LOGGED_IN_KEY',    'ZdsrQW}{yJe#If`$^9X_e;K!qLoKWouXIi|6#Trx5~[fMaAl)aUNY7bu_Znpd=]S');
define('NONCE_KEY',        '4o~v!6{.nl h*@6:uQ,dByq-Jg{xE5&2D}.quRp5KQK%!UI#t(4ZdB*zARthMI~g');
define('AUTH_SALT',        'HzAMk}l)~!IRhOr}m(ZD#fE$7.gs=Ju.BK*`|iSVpk<Oql/u1aXlmVS`2RIBU|^9');
define('SECURE_AUTH_SALT', 'SwE,IU32Mf2)<!TN1E(8v r,WQexsj94E9bmmgGWw(m(l*!;th{AW8J9+Af5)959');
define('LOGGED_IN_SALT',   '1P=A[#Y>HwelBE)qfnyU4jmW1vAn9n0XNqF$0Fr^s/BH*StU)R@8a4$i+,X{cLd#');
define('NONCE_SALT',       'j/t^t=Y.5}AHNvc_j$jbJD8W1P%eoEP]^sSVC5lbm4wFYGEZprRZ6/w0F,dtag}4');

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
