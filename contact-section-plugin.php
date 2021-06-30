<?php
/*
Plugin Name: Contact Section by RMcC
Plugin URI: #
Description: Add a contact section to a page using the [contact_section] shortcode. Ideal for the Homepage. This plugin is translation-ready.
Version: 1.0.0
Author: robmccormack89
Author URI: #
Version: 1.0.0
License: GNU General Public License v2 or later
License URI: LICENSE
Text Domain: contact-section
Domain Path: /languages/
*/

// don't run if someone access this file directly
defined('ABSPATH') || exit;

// define some constants
if (!defined('CONTACT_SECTION_PATH')) define('CONTACT_SECTION_PATH', plugin_dir_path( __FILE__ ));
if (!defined('CONTACT_SECTION_URL')) define('CONTACT_SECTION_URL', plugin_dir_url( __FILE__ ));
if (!defined('CONTACT_SECTION_BASE')) define('CONTACT_SECTION_BASE', dirname(plugin_basename( __FILE__ )));

// require the composer autoloader
if (file_exists($composer_autoload = __DIR__.'/vendor/autoload.php')) require_once $composer_autoload;

// then require the main plugin class. this class extends Timber/Timber which is required via composer
new Rmcc\ContactSection;

// require action functions 
require_once('inc/functions.php');