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
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'sm4HYbLQAVTouL34rfDcTNb9TYa8IypMCU6NY30GcRVofbKhQx3tf/+TQOpusgk6RB0QCRTVWL7EW+An6cXFmA==');
define('SECURE_AUTH_KEY',  'mPsbHUZQ6EXSGqRy86EvpOYAFGaWoUOh3Gxrss8J1qsk442guknxoZq21pDJpdFQLXz6BzxD1pLHJU7YWJD1Ug==');
define('LOGGED_IN_KEY',    '9J5yIkrW+aOHssYXEK4NXAWhlxaKrquCqbrOBDD++8vCuLuvjQNABVkNhfL6jDwLxjDbJAwlb/5xe5ckxeAQig==');
define('NONCE_KEY',        'PvoSG7XZThw6tBwsVlOjTQwXja11cMASurKPlfYMwHtEP/siAlSlaJiTFHwQns23qKhTOI50koAaaDtocMHMyA==');
define('AUTH_SALT',        '0UGsGvrFXDYFhpQJQmwTiC1I6tNp1B2dd9haps2qPYCUQx+s/oxOgQN2WkHIAbp/jxD0nG3oLv3z7s68RY5pTg==');
define('SECURE_AUTH_SALT', 'qnn+WrvPwaSNtW2aB1GeWZwZNBbQAVuVF8pz4w0vDcVknDHY6fl3VG9CPiCsngBBDvHocahvPxhf9qFBBA5vEg==');
define('LOGGED_IN_SALT',   'OGw79wWJ2MnGDr3mMvRqeqHoOmrGiTsDfG+22GHWlwxKiIRehAo7AoqkRMxdWooaOhdGTi4bdmI8oJv0U+n9oQ==');
define('NONCE_SALT',       'FG7fqPbcVUIU2sAgsLYgRkdGcuAZG4CyRZexRnW9aYPifdQeMrb2KOMRAvAwLyG14AV0z3Y1J94JI0wtnaVlxg==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
