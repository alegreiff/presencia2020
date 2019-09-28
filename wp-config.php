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

// ** MySQL settings ** //
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
define('AUTH_KEY',         'TT+afgxO7dQw3pgbFn+USZHpA56fwN4Bkxy1wbbjKUMqbf1l7b0lHcUq/LDry2D8wLZ/gs6aDOxRw0Q31iCDMA==');
define('SECURE_AUTH_KEY',  'yaOuGSXuWL1Tfp/2idZ67mWo+kYuoh+bR5dMaiWZs1jZ69yAzbhewJRtBPUe6n1mOcNxCeeguMBrkJTVCj0/2A==');
define('LOGGED_IN_KEY',    'kkh/pwuzH0GoSO1RaK2RQPHegj6/P3feUjUT9CWSnRgbQkAgCL6sHLvToPuf7fHyi7/qFmCIkK4SxCmEbEPV7g==');
define('NONCE_KEY',        'CHUMjUBBPt+ZKMFdccfAesXwsJGdJp1MGcWTSSe6VN9nJhJDIsM+l+pWk0O7XUXI2JcNJb5zFogmuVJFIbH3UA==');
define('AUTH_SALT',        'TXywLNAChap/9SfNPSznuSfwAjPjalB8uxyKXOvx7tDNYyLRZ1Uq9JcvIQTPf+HpeWLoGEaaZwuy2Ivwn97B7A==');
define('SECURE_AUTH_SALT', 'i54RtweMdRgA66W2IJ+nADvnmTUmz0lzjT0pVJvhEbOgEZY3MfIRqgf8nx3IHJ8lbQItPuEoA8pXYVXrRIBMqg==');
define('LOGGED_IN_SALT',   'Poz/NljfsYCbo85Kv/Ts7vRG8vI2PB6tFyM5v2JLuLV+PevFy8/2ht4psWfY0uV4SwzyF1QD98EfZW8DWy/UJw==');
define('NONCE_SALT',       'WuR72McKz/kzcF5q8J6G7hrv6f9esebd5grnfz6jN7voussIyAv4P/acTy3mHSrdHMe/Dls4nOOBfZeHFmnz9Q==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
