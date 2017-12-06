<?php
// DEVELOPMENT DATABASE DETAILS

/** The name of the database for WordPress */
define('DB_NAME', 'db_name');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** We override the home and site_url vars here so when downloading a database from staging/production we can actually get into admin area - however, if you're not using vhosts, you may need to comment this out or add the subfolder that the site lives in. Alternatively, try and visit /wp-login.php then if that works, go to settings to reset permalinks */
define('WP_HOME', PROTOCOL . '//' . $_SERVER['HTTP_HOST']);
define('WP_SITEURL', WP_HOME);

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', true);
define('FS_METHOD', 'direct');
// For Yump use only
define('WP_DEV', true);
define('WP_CACHE', false);