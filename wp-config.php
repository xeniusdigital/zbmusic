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
define( 'DB_NAME', 'zbmusic_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'J9QW#|Yh9kJ+rXU%>~F])RB8P0[A$3;8/G,UQmx|X%J+EYduBs#J301+j}8%Rspi' );
define( 'SECURE_AUTH_KEY',  'i{%U9H+N+;0e/r#jm~S1Cza<epAM]tLTMo};/=qhQzi[b0w7kD5b3H`D#|~E?%&:' );
define( 'LOGGED_IN_KEY',    '9$!_f$j ]PM[.-@jebd$}m;RDSOnMeK.&a^UfZU^}qon.IS?n1_{!x(_q/p)RePu' );
define( 'NONCE_KEY',        'C1p?5df=|9P~G;)$i%(jH9OxzrrISLLd,ibU.?^1`%x<wO&SW~)igeYT &HH]%jN' );
define( 'AUTH_SALT',        '|c*$dy2k@TC.-tnuKN7po8iJQ[%0-(|Zjk7Ke9$8&J?dy>{/M_uP}^QTQ)E_40tp' );
define( 'SECURE_AUTH_SALT', '*#1+L>b;4{iMEz]@ :Ai$5 ns:)Y;wOoRGauFjReSbPlU}eyk((9]mH#q[M]VOaM' );
define( 'LOGGED_IN_SALT',   'ly?gp_eVZiDx9bR3|SAb*WG6(JV7Z}^ohX?Mrt(]%B ^BY;bS%S(Oi&$pnl?Tr%!' );
define( 'NONCE_SALT',       '[0cgXX/.>vh0Z[9w*)h<Y?kf2%m.t-b)9<<(JT[>Gs~65WPHl]k5e:+ [jT7MI1+' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'zbmwp_';

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
