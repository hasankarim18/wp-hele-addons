<?php
if (!defined('ABSPATH')) {
    exit;
}

class HeleAddons
{

    public function init()
    {
        $this->define_constants();

    }


    public function define_constants()
    {
        define('HELE_ADDON_VERSION', defined('HELE_ADDON_DEV') ? time() : "1.0.0");

        define('HELE_ADDON_PATH', \plugin_dir_path(__DIR__));

    }

}