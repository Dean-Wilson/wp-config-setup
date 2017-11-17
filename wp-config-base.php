<?php

// WordPress /wp-content folder is now at root level so plugins and themes 
// (the most commonly accessed files as a developer) are easily accessible at root level
// (Also helps makes URLs for the JS/CSS assets shorter)
// define('WP_CONTENT_DIR', ROOTPATH);

// If running WordPress from a subfolder, this should be set to the name of the subfolder you're running from
// We determine this automatically by comparing $_SERVER['DOCUMENT_ROOT'] (domain name root) with ROOTPATH (Wordpress root)
// Note: Contains a leading slash

// str_replace(realpath($_SERVER['DOCUMENT_ROOT']), '', realpath(ROOTPATH)) . '');
// if (!defined('WP_CONTENT_URL'))

define('SUBFOLDER', 
	str_replace('\\', '/',
		str_replace(realpath($_SERVER['DOCUMENT_ROOT']), '', 
			dirname(__FILE__)
)));

define('PROTOCOL', $_SERVER['HTTPS'] ? 'https:' : 'http:');

// define('WP_PLUGIN_URL', WP_CONTENT_URL . '/plugins');
// define('WP_THEMES_URL', WP_CONTENT_URL . '/themes');

// Increase PHP's memory limit
if (!defined('WP_MEMORY_LIMIT'))
	  define('WP_MEMORY_LIMIT', '120M');
if (!defined('WP_MAX_MEMORY_LIMIT'))
	  define('WP_MAX_MEMORY_LIMIT', '256M');
