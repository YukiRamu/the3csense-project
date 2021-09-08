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
define( 'DB_NAME', 'wordpressProject' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         '+%n!KeRwMXp${P#Ajya)IC,w}654-<aB55p?#x9&)H+=XpZ?G&8r]Ug]&/;v}2_p' );
define( 'SECURE_AUTH_KEY',  's.L`4>l?WR_B@?P?!UjVt1Yi>k6]a{c{Tc?{/n]@H.Erh+tiYFri%O5B0(lkRF|7' );
define( 'LOGGED_IN_KEY',    'y8jMnc)h!~g}b63sSC&BcuGmJ!BRvk=)]>wftd45`Zy=n!Og3c(B/:<MTXPH~4c+' );
define( 'NONCE_KEY',        'pKDdo#$0]A9]%(i#FF#+c$qD83(G&T:<dKE0k=y2imp=<|.ygf`{z]R$,xjLc!}1' );
define( 'AUTH_SALT',        'C< esTVctxQS-8n0myJBZN%5gk`+298.aFO_9Vbf7y{+sq*@;SjYb}yXzB&!p/+T' );
define( 'SECURE_AUTH_SALT', '1:z1dwCQKtTH%1hqU6OsG)A&DZf5[[[I^nH1[(~k#9k/jkBhA>$?w:B<fN!e7:3Y' );
define( 'LOGGED_IN_SALT',   'Pvw18Gw=$;tjA$~GBSxr0|sa([cyp$fCHM5eK5HcRjj0H(VLQOr[EQff, M#yn/9' );
define( 'NONCE_SALT',       '?pg|f+lV^;WvRVnB}qi:scA.;?S2Z>${*kkByr>FGb. R`$uUVLG1F_z=W5trC6J' );

/**#@-*/

/**
 * WordPress database table prefix.
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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
