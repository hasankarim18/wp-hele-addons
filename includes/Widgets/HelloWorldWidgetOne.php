<?php


class HelloWorldWidgetOne extends \Elementor\Widget_Base
{
    public function get_name(): string
    {
        return 'hello_world_widget_one';
    }

    public function get_title(): string
    {
        return esc_html__('Hello World Custom Widget One', 'wp-hele-addons');
    }

    public function get_icon(): string
    {
        return 'eicon-code';
    }

    public function get_categories(): array
    {
        return ['basic'];
    }

    public function get_keywords(): array
    {
        return ['hello', 'world One'];
    }

    protected function render(): void
    {
        ?>
        <p> Hello World Custom Widget One Show on Front End </p>
        <?php
    }

    protected function content_template(): void
    {
        ?>
        <p> Hello World Custom Widget One Show as Preview on Elementor </p>
        <?php
    }



}

