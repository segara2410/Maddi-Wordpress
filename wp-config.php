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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '_DJsx[-_R,v_tLscPi]1?WI(DrXdC9sK.F7+K  PC4m7j&2#r$DX[uKax~=M1&#J' );
define( 'SECURE_AUTH_KEY',  '<CqCSb46(Q?!sSG/K<5gWZ#~J3V825oR(smV6r90W~:]QCGQZo[+X{1PV>^lOrJ|' );
define( 'LOGGED_IN_KEY',    'R!Un*LHv^!rNPixwbOH{re2tUs:Dzk>Oiy]%(j+SA;;F}g7WA=36M.c+}n%Xw8m&' );
define( 'NONCE_KEY',        '`kho%J3ptei0TV_rYj*Tdu?QCWRakN8Ruc&~ D{.KRo_p_l^[LWN/>/]5{,(DK)T' );
define( 'AUTH_SALT',        '!{>;.}eIU5u(r$3|K]8%[@<[a6,KX.%SW6,Z)FI#oVOEesM0fe<4H:y[NMx1Q60u' );
define( 'SECURE_AUTH_SALT', '-akgI,+^KqGT>x=4pRO=PSD-Raa@WJQ#rZQ5OcU(!CK<dJym8]GjW_?)vq/EjY#h' );
define( 'LOGGED_IN_SALT',   'O$>Mwt9ZG?76P|6bFTp{aR>7c8[Bff#pO%~,vI&Dg2?wT;t$n3%?3$gSv_6~vQzE' );
define( 'NONCE_SALT',       '`i9zpp_=%:jPzBf[zN>s3QW/y=3STwHPi/b5$1 Ru78$#K[AC{KuRh JJ&<M<fj_' );

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
