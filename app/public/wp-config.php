<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          'W6*E?4(KF?k~//Vf+),UN@D>c<y<+FF_y$XMI,$=tZxP&/G>6k9;l^CS&V5#4#|T' );
define( 'SECURE_AUTH_KEY',   'a 8!jS?.v/=0|m-j!g/4qey*~F$==*TG2X|!v<i>]/a%l=(Iwjh^Nul3_@x.6VnV' );
define( 'LOGGED_IN_KEY',     '?tl~N0%Ia$ !n(sekC{j8$ky?%3+6B^Ci@1eJixtuG/GpM~@m[O3(j=z</jXvi}-' );
define( 'NONCE_KEY',         'cW;cJ}LfeCQ,K8k?z]oQ|}/%:mt8mt-fBH(!iQIRz9ir Y[Q+hpZuu.s%)]*^%@h' );
define( 'AUTH_SALT',         '?Oa<.#RRZFd.YF?LDY~zhw!dtT){40i]pZ(Sl=%|N|Lk^DotQ:E3<Bk{,g&.jJ+-' );
define( 'SECURE_AUTH_SALT',  'TdJ1Cz9;E$!$j1Ap]T<z4+? fzsjnG+pj2<h<r6 )dC6n4awQ^zlPv/]XG?&fF4I' );
define( 'LOGGED_IN_SALT',    '5^c1Ft~;=D>oLqqMo{2)i[3D dvty==yORQ%=_HpLG~dob::O;P. J*05RQd>iR?' );
define( 'NONCE_SALT',        '31e3,bn]_T4=zlasBjS6KwpI_k6C1}A&2/,T!4P}p5Cdz?(%j;H$=/iCq<Dvi8P^' );
define( 'WP_CACHE_KEY_SALT', 'n.?nmb7eyx}>PcF=%O`ZK4vaVQ_M(G$KC%s:wy1P)KVmPPpJa#h4RqOVMpq=qe!r' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
