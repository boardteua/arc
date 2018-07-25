<?php

/*
  Plugin Name: loyalty
  Plugin URI:
  Description: Дисконтна програма
  Version: 1.0.0
  Author: org100h
  Author URI: https://weekdays.te.ua
  License: GPLv2
 */

namespace loyalty;

if (!defined('WPINC')) {
    die;
}

/**
 * Define Constants
 */
define(__NAMESPACE__ . '\NS', __NAMESPACE__ . '\\');
define(NS . 'PLUGIN_NAME', 'loyalty');
define(NS . 'PLUGIN_VERSION', '1.0.0');
define(NS . 'PLUGIN_NAME_DIR', plugin_dir_path(__FILE__));
define(NS . 'PLUGIN_NAME_URL', plugin_dir_url(__FILE__));
define(NS . 'PLUGIN_BASENAME', plugin_basename(__FILE__));
define(NS . 'PLUGIN_TEXT_DOMAIN', 'loyalty');

/**
 * Autoload Classes
 */
require_once( PLUGIN_NAME_DIR . 'inc/libraries/autoloader.php' );

/**
 * Register Activation and Deactivation Hooks
 * This action is documented in inc/core/class-activator.php
 */
register_activation_hook(__FILE__, array(NS . 'Inc\Core\Activator', 'activate'));
/**
 * The code that runs during plugin deactivation.
 * This action is documented inc/core/class-deactivator.php
 */
register_deactivation_hook(__FILE__, array(NS . 'Inc\Core\Deactivator', 'deactivate'));

/**
 * Plugin Singleton Container
 *
 * Maintains a single copy of the plugin app object
 *
 * @since    1.0.0
 */
class loyalty {

    /**
     * The unique instance of the plugin.
     *
     * @var loyalty
     */
    private static $instance = null;

    public static function get_instance() {
        if (null == self::$instance) {
            self::$instance = new Inc\Core\Init();
            self::$instance->run();
        }
        return self::$instance;
    }

}

/*
 * Begins execution of the plugin
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * Also returns copy of the app object so 3rd party developers
 * can interact with the plugin's hooks contained within.
 *
 */

function loyalty_init() {
    return loyalty::get_instance();
}

$min_php = '5.6.0';
// Check the minimum required PHP version and run the plugin.
if (version_compare(PHP_VERSION, $min_php, '>=')) {
    loyalty_init();
}

