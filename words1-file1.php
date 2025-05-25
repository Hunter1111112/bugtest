<?php
/**
 * The base configuration for WordPress
 */

// ** MySQL settings ** //
define('DB_NAME', 'your_database_name');         // The name of the database
define('DB_USER', 'your_database_user');         // Your MySQL username
define('DB_PASSWORD', 'your_database_password'); // ...and password
define('DB_HOST', 'localhost');                  // 99% chance you won't need to change this
define('DB_CHARSET', 'utf8mb4');
define('DB_COLLATE', '');

// ** Authentication Unique Keys and Salts ** //
define('AUTH_KEY',         'put your unique phrase here');
define('SECURE_AUTH_KEY',  'put your unique phrase here');
define('LOGGED_IN_KEY',    'put your unique phrase here');
define('NONCE_KEY',        'put your unique phrase here');
define('AUTH_SALT',        'put your unique phrase here');
define('SECURE_AUTH_SALT', 'put your unique phrase here');
define('LOGGED_IN_SALT',   'put your unique phrase here');
define('NONCE_SALT',       'put your unique phrase here');

/**#@+
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each a unique prefix.
 */
$table_prefix = 'wp_'; // Change this if you want to use a custom prefix

/**
 * For developers: WordPress debugging mode.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
    define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
