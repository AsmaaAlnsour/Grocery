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
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'Grocery' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'asmaa135792468' );

/** Database hostname */
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
define( 'AUTH_KEY',         'e#8r{^7>@[FOzT%LYSQw*ce=6U>HsV]A/QNG!6:~oLOj~RjBI(prAq)?^56aGu4J' );
define( 'SECURE_AUTH_KEY',  'sg4(C0bA(v3tLkr;%H-&M/eo.V34#tcPnY<HJS)R?T?.WFh8]1C!^{%u/by-h!4+' );
define( 'LOGGED_IN_KEY',    'LmvNuJG.^6#tboLrqL)OU5I-RAe,kodL{$$*ZJ}pBU6o|4te;B7k@i4Fg<etDH[%' );
define( 'NONCE_KEY',        'UK|*zcDK<JA1@nt(I(FA> <3$Q|b:NxX,qM&pJP&kD(&K,IUsPPQ_qi9]l6?$khV' );
define( 'AUTH_SALT',        'P-q[A1#)F@Tux~mDW4$|g2!<*#q rYdN=.u@+|qn9m,2YPb%bOiCpy`^U0ql$s5h' );
define( 'SECURE_AUTH_SALT', '<r&DQA]??lTU!0v<|0mN*]jBFNj7c6V<(W%-hZZW?.U={<S%BjY%:^cO>DWQ-EV,' );
define( 'LOGGED_IN_SALT',   'r/fA@;Syy*7bKt6]ye3-h(#8h_eFcdqJ4f,&<,SEVs#%-F2|K)&4j^&*z{+w<uf>' );
define( 'NONCE_SALT',       '#HNx_j{Qn!?)-#g*,m2>)G}=[lH Bx{S,*a;Z7d]u]%(({=!7TX=lad!,*~IZAE*' );

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
