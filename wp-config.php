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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'mademoiselle' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'FRJZ A9zl[a(?W?/U4Uj}BwO2,c{TvI,Sl>h+9@h:Jkq}H^o6]%mYV;i`,n#f. $' );
define( 'SECURE_AUTH_KEY',  'B@4?$q uY,2&5:VY)4c[[99Ank@M3MuiI_b5Xltdv>oTK)j 3a^7m]MUDn5p!e/T' );
define( 'LOGGED_IN_KEY',    '&UM)-|XAh nR}_O)$0Xyzo]d.22cQ|/(PUoE_#QL~o=(Gd,F@ck*6pp2GADw@n1]' );
define( 'NONCE_KEY',        'n+mW#u0IlidymnpYiATl7uA?D~DUbD{(E&9g}C)(oa%/h<jQNpd&X%=7aH,OJ3sq' );
define( 'AUTH_SALT',        'eylBeO%F&t- Dg}|F`@vT;X,.E8@d<xln7FZYT*ZSd8C6 Q :/z*E41S`6U>[r1-' );
define( 'SECURE_AUTH_SALT', '5Uo9;Y+:90yA+#>Le<t!4*&I_1]e{ WzObA#avmqWz~j8Q!hJX@&_.#5v,inxNfr' );
define( 'LOGGED_IN_SALT',   '5m_!m7@%_ame+Ot@LI}uZ4PRHA$+y:cLCCl|nP<w3=N]H3n]F|HPQ<PyN|%2<]l;' );
define( 'NONCE_SALT',       'HUX4(Cl{yH/:8}Kl/O4%}XTT[jYrAphFT?[:*#NXAx7OM2ANKQ;q~3sj0G7p(1{M' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';