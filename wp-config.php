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
define('DB_NAME', 'psi');

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
define('AUTH_KEY',         '}+Te{mc.Uih,8JtH8Q_:HRATu*VfP$kMg$&chE7M}7|UD7{u=tY%lw]_0uC:#(>=');
define('SECURE_AUTH_KEY',  '(ipgOaLCG{rnTQ!@VlH,UwiHNkmuCg3/Pxk7J8fb$ab=^$_yc.X6FWw(nMJ7wdeQ');
define('LOGGED_IN_KEY',    'NTSj(r=g{ NlPFX.0[f;lOQ[h3l*C0y/.NU=)z8ZPBe-p {v1#VS|<#2ufwA=6<5');
define('NONCE_KEY',        'J-stJU4hn9)of_qZmy+:OqcNWI6McYboYJOo_6aYY*uxaR#@`l1h*/%oS0*`8doX');
define('AUTH_SALT',        'Tit?f/+2,I/EDZRJ9Qyz<QsXFK}vaoSPq*JWp328dNZR#2b{<+r+VRgJhNJ%R;jm');
define('SECURE_AUTH_SALT', ')TD!aI0&bKtMb 06x|@cC%lulMZ}(XC|7W8Nfyd8V^N =O5<b.;[Hgc>$[X81[^#');
define('LOGGED_IN_SALT',   '@|^k$j;IWNGEg0^gfvFJ6W|.5d6MDQa4YQu 7J8LEIc`y%G@{_-uF1ye?#c*,ehy');
define('NONCE_SALT',       'O==IX@+br|2v#`SpL>nD*8G2,z[mb;@Ifc*J`aBf2md`[`{Qrc#2;-}0YrFB+Z]~');

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
