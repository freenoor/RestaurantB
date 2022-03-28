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

define( 'DB_NAME', "RestaurantB" );


/** MySQL database username */

define( 'DB_USER', "root" );


/** MySQL database password */

define( 'DB_PASSWORD', "" );


/** MySQL hostname */

define( 'DB_HOST', "localhost" );


/** Database Charset to use in creating database tables. */

define( 'DB_CHARSET', 'utf8' );


/** The Database Collate type. Don't change this if in doubt. */

define( 'DB_COLLATE', '' );


if ( !defined('WP_CLI') ) {

    define( 'WP_SITEURL', 'http://restaurantb.test' );

    define( 'WP_HOME', 'http://restaurantb.test' );

}




/**#@+

 * Authentication Unique Keys and Salts.

 *

 * Change these to different unique phrases!

 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}

 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.

 *

 * @since 2.6.0

 */

define( 'AUTH_KEY',         'mzRt469CEkbJxhsPZWHafYvqS3Um4DXyGVPcgUj6e3taSUUwjKUnUVrHitLsOx3p' );

define( 'SECURE_AUTH_KEY',  'aCYJzu6ifLp1HM0fMcLp3Afb6Fj1rDMVig2b5KciLzv9jS3wL5DsLCRAyicVMpTJ' );

define( 'LOGGED_IN_KEY',    'BHY0j9VqcjV0BE30aAbc5IVEiElHncBzWNNY9jL4gOheJFE6YbAQGW2eRWcUuC7x' );

define( 'NONCE_KEY',        'OYB5gfR7MgH78ZhIn9Jp5Jt9kGUl9lK0IU8aqjYXKzplf79ODnZUdKmnsyRnpLCW' );

define( 'AUTH_SALT',        'WKcN2qg9cfihkFPofrCvE8g4Si9gxSTyfzQNwtCveeZKvfZbs1sx1rDtjRFsgKXs' );

define( 'SECURE_AUTH_SALT', 'l1S0mqg579qPtjtGbqtWwnlGU0nn2e4uuBp5c7Z9I9ehwgJCJhKs1q8Kn54FieNC' );

define( 'LOGGED_IN_SALT',   'RzUMi1CQdE8KGQ4tU2yQ19NJCyKOkoSjnAMpru0gerA7clYyLXDgEQlsp1V25Baj' );

define( 'NONCE_SALT',       'EMGYqLJiLqXq58vffT4IESWCF3mTfb3XArMTQoQlLC6ucyeriqISAa6ZqpJHlLC1' );


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

