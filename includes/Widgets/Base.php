<?php

namespace Hasan\HeleAddons\Widgets;

use Elementor\Widget_Base;

if (!defined('ABSPATH')) {
    exit;
}

class Base
{
    use \Hasan\HeleAddons\App\Traits\Singleton;
    public function init(): void
    {
        add_action('elementor/widgets/register', [$this, 'registerWidgets']);
    }

    public function registerWidgets($widget_manager): void
    {
        // include_once(HELE_ADDON_PATH . 'includes/Widgets/BasicWidget.php');
        /* 
        // elementor recomended way
        include_once(HELE_ADDON_PATH . 'includes/Widgets/BasicWidget.php');
        $widget_manager->register( new BasicWidget());
        */
        // Singleton widget calling in elementor
        $widget_manager->register(BasicWidget::instance());


    }
}