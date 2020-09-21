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
define( 'DB_NAME', 'web_sekolah' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'utawiiku' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         '038(opnnpC;/UV7![Z+HyMHt^oTQmSW!*x^8W[M}#rT,L.lVeg3[?=cp6_)3hDdd' );
define( 'SECURE_AUTH_KEY',  'A{=SDnbtG6*ZwIK@}T+U9M%/SJhf0zmf7IPtOum|tmY8o*YN:6DcP!w(^IApb9<}' );
define( 'LOGGED_IN_KEY',    'A+5pbnGYWdU$Kv;l[bS_9p^;b-,i<2jc5,1?eX%WSIv%LIm!!ar1~)CO^-b[>I+D' );
define( 'NONCE_KEY',        'afe3d2U2UNr*Qv5x|~8C`g/Hg|NtM19D?{Izt~xtyg&[/WI;yIFpx_P>1Z0mE[td' );
define( 'AUTH_SALT',        ':ox(&#IG.b)VWGpCm>{hcb|FgQFC1Lz(@#cMjspcjg%(=d#Iu57]L/D5O{|e:2@p' );
define( 'SECURE_AUTH_SALT', 'tyry{A0nZnm5J$/gsJmL%omJ_z ;~=-,{<}y~b+|R;n!!E~z:w^* %~TPD/V5Ptn' );
define( 'LOGGED_IN_SALT',   'Q7k0aRV-MJiV28oxUwi=K`L<Psw:sEp HI~<1xB2`7hw{2OOIY<a_=]EwZqv)[=A' );
define( 'NONCE_SALT',       '@q!![n-C1rM._<#Wy/>c]_n@Ze5I5iqeJ4)ASly@(/~`r}N:5p{BX&Y|,7`ySaWY' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
