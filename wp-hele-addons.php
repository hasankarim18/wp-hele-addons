<?php

/**
 * Plugin Name: Hele Addons
 * Plugin URI: https://example.com/
 * Description: A brief description of the plugin.
 * Version: 1.0.0
 * Author: Hasan
 * Author URI: https://yourwebsite.com/
 * License: GPL-2.0+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain: plugin-textdomain
 * Domain Path: /languages
 * Requires Plugins:  elementor
 */

namespace Hasan\HeleAddons;


// Exit if accessed directly.
if (!defined('ABSPATH')) {
    exit;
}




if (!class_exists(HeleAddons::class && is_readable(__DIR__ . '/vendor/autoload.php'))) {
    require_once __DIR__ . '/vendor/autoload.php';

}

class_exists(HeleAddons::class) && HeleAddons::instance()->init();


/**
 * Plugin Activation Hook
 */
// function activate_plugin_function() {
//     // Activation code
// }
// register_activation_hook(__FILE__, 'activate_plugin_function');

// /**
//  * Plugin Deactivation Hook
//  */
// function deactivate_plugin_function() {
//     // Deactivation code
// }
// register_deactivation_hook(__FILE__, 'deactivate_plugin_function');

// /**
//  * Plugin Uninstall Hook
//  */
// function uninstall_plugin_function() {
//     // Uninstall code
// }
// register_uninstall_hook(__FILE__, 'uninstall_plugin_function');