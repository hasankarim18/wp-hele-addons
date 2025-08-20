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
 */

// Exit if accessed directly.
if (!defined('ABSPATH')) {
    exit;
}

// Define plugin constants




if (file_exists(plugin_dir_path(__FILE__) . 'includes/HeleAddons.php')) {
    include_once plugin_dir_path(__FILE__) . 'includes/HeleAddons.php';
}

$hele_addons = new HeleAddons();

$hele_addons->init();


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