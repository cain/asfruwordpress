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
define('DB_NAME', 'wordpress');

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
define('AUTH_KEY',         '0]*`=t5w.462ql;;Bu775j%I5krWpSNMWUNh3C;8mPV*v?c;.H@-S^v8_Ob9`HrI');
define('SECURE_AUTH_KEY',  'C:a44+z.1@.>|kTX4m1CG?F-`vNf7jk,<+-|kC[E[lo<@1nt&NFHE:r4T=MuNCJn');
define('LOGGED_IN_KEY',    ']R!f[w0S{=cTi#PjU_P^T_fa!]<R*`2UjFeT|o(NQ.uJO{i6{|)-%j[bxkg{TX6n');
define('NONCE_KEY',        'mC[))z`9~S.~NQ6M3Bfx *dd/l:spsMr!Y,I;2+/m` D=JcJx$!Us,J*?mUXUdsA');
define('AUTH_SALT',        '1kkefD<8=+a(N(Ou|^K0iLmGT:]WIZ-w0w[B(s1.Y^G-=94~}N5q;@xmH5YhMX87');
define('SECURE_AUTH_SALT', '}+1zJG!4P56Hs3xxYF;n/cCF=V5vSOu1LyfevudmJGh>2#;[1P-,YL:_&fdcGUN8');
define('LOGGED_IN_SALT',   'fk2*wB cm9diG,9[/VA>4j^byEzyxW]Jy[1zF2phtvZF(Q^j_x+ N|s/u>A@PMP$');
define('NONCE_SALT',       'hJy F(gh6$x{&/}yJ+7ozJF}0,iKDh`_P?B84+j5|iMRtMt2lUMdnvJS Mx6k*DG');

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
