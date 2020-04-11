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
define( 'DB_NAME', 'wolfprestige_db' );

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
define( 'AUTH_KEY',         '#EFFNRzg}CG.x=*n|TnPFoC=4NC4uBV=A}T7&1+I9?oi9La6wCs-]?y/EIlm[&jt' );
define( 'SECURE_AUTH_KEY',  'psIl1?5T1i8coS+1B)&h `kSe>yw?WO~4AyaF8?g91Y /d7^q!W?P^2~R^Rn$F/{' );
define( 'LOGGED_IN_KEY',    'n,u#LN<I0itzG*,N@byu;-61+u,E(/V`e0_I=HpVLNUS2NkSb%#73tz`T(RveD0k' );
define( 'NONCE_KEY',        'tCMfOCnJKhUVygL5}`nYfrE$i}7!#HnapDU@@*9DR(wx$jwV)jj>%*XA-%I`C`gJ' );
define( 'AUTH_SALT',        ']^Og/EO2vqJ|[Y8eTkXu4r;0E]`JqO)<O]L)].=xPf+vM`0P<>x7UE1VVb11E`$%' );
define( 'SECURE_AUTH_SALT', ']FGm@OuWdzkC_OemP+-R=a}^$qM_QRSLyf.}L^uKqaRuNh[lCX<;[y5&LzVZA{AQ' );
define( 'LOGGED_IN_SALT',   'n[f&Qg~9%%zR-Bq}u:3<#Odqd@j9KDR L*z@^tZiT5wCkBS*9jzH(AYg ^L 5#&P' );
define( 'NONCE_SALT',       '2@y$||L_g,lwZ6uNFJb~)>/_VU5 (XxoA=;Od*[~W5W`hSB2o#+@$]182kJ#9%5$' );

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
