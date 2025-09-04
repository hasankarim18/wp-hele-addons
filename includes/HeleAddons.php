<?php


namespace Hasan\HeleAddons;

if (!defined('ABSPATH')) {
    exit;
}


class HeleAddons
{
    use \Hasan\HeleAddons\App\Traits\Singleton;


    public function init()
    {
        $this->define_constants();
        add_action('plugins_loaded', [$this, 'plugins_loaded']);


    }


    public function define_constants()
    {
        define('HELE_ADDON_VERSION', defined('HELE_ADDON_DEV') ? '1.0.0' : "1.0.0");

        define('HELE_ADDON_PATH', plugin_dir_path(__DIR__));
        define('HELE_ADDON_URL', plugin_dir_url(__DIR__));

    }

    public function plugins_loaded()
    {
        $this->includes();
        $this->init_hooks();
    }

    public function includes()
    {
        // I dont understand this line / from whare this Widgets\Base coming from 
        Widgets\Base::instance()->init();
    }


    public function init_hooks()
    {

        load_plugin_textdomain('hele-addons', false, plugin_dir_path(__FILE__));



    }






}