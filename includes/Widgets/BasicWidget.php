<?php

namespace Hasan\HeleAddons\Widgets;

if (!defined('ABSPATH')) {
    exit;
}



class BasicWidget extends \Elementor\Widget_Base
{
    use \Hasan\HeleAddons\App\Traits\Singleton;


    protected function register_controls()
    {
        // TAB_CONTENT
        $this->start_controls_section(
            'content_section',
            [
                'label' => 'Basic Hele Content',
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT
            ]
        );

        $this->add_control(
            'image_top_title',
            [
                'label' => esc_html__('Image Top Title', 'hele-addons'),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'dynamic' => [
                    'active' => true,
                ],
                'default' => esc_html__('Image top title', 'hele-addons'),
                'placeholder' => esc_html__('Type your image top title here', 'hele-addons'),
            ]
        );



        $this->add_control(
            'gallery',
            [
                'label' => esc_html__('Add Image', 'hele-addons'),
                'type' => \Elementor\Controls_Manager::GALLERY,
                'show_label' => false,
                'default' => []
            ]
        );

        $this->add_control(
            'widget_title',
            [
                'label' => esc_html__('Title', 'hele-addons'),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => esc_html__('Default title', 'hele-addons'),
                'placeholder' => esc_html__('Type your title here', 'hele-addons'),
            ]
        );


        $this->add_control(
            'item_description',
            [
                'label' => esc_html__('Description', 'textdomain'),
                'type' => \Elementor\Controls_Manager::WYSIWYG,
                'default' => esc_html__('Default description', 'textdomain'),
                'placeholder' => esc_html__('Type your description here', 'textdomain'),
            ]
        );



        $this->end_controls_section();



        // #general_styles
        $this->start_controls_section(
            'general_styles',
            [
                'label' => 'General Styles',
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );


        $this->add_responsive_control(
            'hele_addon_basic_widget_margin',
            [
                'label' => esc_html__('Widget Margin', 'hele-addons'),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem', 'custom'],
                'default' => [
                    'top' => 0,
                    'right' => 0,
                    'bottom' => 0,
                    'left' => 0,
                    'unit' => 'px',
                    'isLinked' => false,
                ],
                'selectors' => [
                    '{{WRAPPER}} .hele_addon_basic_widget' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        // @tab_style TAB_STYLE
        $this->start_controls_section(
            'style_section_1',
            [
                'label' => 'Image Top Title Style',
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );

        #style_image_top_title

        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'content_typography',
                'selector' => '{{WRAPPER}} .image_top_title',
            ]
        );

        $this->add_control(
            'text_color',
            [
                'label' => esc_html__('Text Color', 'hele-addons'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .image_top_title' => 'color: {{VALUE}}',
                ],
            ]
        );

        $this->add_control(
            'hele-image-top-title-margin',
            [
                'label' => esc_html__('Margin', 'hele-addons'),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem', 'custom'],
                'default' => [
                    'top' => 0,
                    'right' => 0,
                    'bottom' => 0,
                    'left' => 0,
                    'unit' => 'px',
                    'isLinked' => false,
                ],
                'selectors' => [
                    '{{WRAPPER}} .image_top_title' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_control(
            'hele-image-top-title-padding',
            [
                'label' => esc_html__('Padding', 'hele-addons'),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem', 'custom'],
                'default' => [
                    'top' => 0,
                    'right' => 0,
                    'bottom' => 0,
                    'left' => 0,
                    'unit' => 'px',
                    'isLinked' => false,
                ],
                'selectors' => [
                    '{{WRAPPER}} .image_top_title' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );


        $this->end_controls_section();


        // @tab_style TAB_STYLE
        $this->start_controls_section(
            'style_secti_2',
            [
                'label' => 'Style',
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );





        $this->add_control(
            'image_size',
            [
                'label' => esc_html__('Image Size', 'hele-addons'),
                'type' => \Elementor\Controls_Manager::SLIDER,
                'size_units' => ['em', 'rem'],
                'range' => [
                    'rem' => [
                        'min' => 1,
                        'max' => 100,
                        'step' => 1,
                    ],
                ],
                'default' => [
                    'unit' => 'rem',
                    'size' => 20,
                ],
                'selectors' => [
                    '{{WRAPPER}} .image_size' => 'width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_control(
            'widget_title_font_size',
            [
                'label' => esc_html__('Title Font Size', 'hele-addons'),
                'type' => \Elementor\Controls_Manager::SLIDER,
                'size_units' => ['px', 'em', 'rem'],
                'range' => [
                    'px' => [
                        'min' => 10,
                        'max' => 100,
                        'step' => 1,
                    ],
                ],
                'default' => [
                    'unit' => 'px',
                    'size' => 20,
                ],
                'selectors' => [
                    '{{WRAPPER}} .widget_title' => 'font-size: {{SIZE}}{{UNIT}};',
                ],
            ]
        );




        $this->add_control(
            'widget_title_color',
            [
                'label' => __('Title Color', 'hele-addons'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .widget_title' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'widget_desc_color',
            [
                'label' => __('Description Color', 'hele-addons'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .widget_desc_color' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->end_controls_section();
    }


    public function get_name(): string
    {
        return 'basic-widget';
    }

    public function get_title(): string
    {
        return esc_html__('HELE Image & Text', 'wp-hele-addons');
    }

    public function get_icon(): string
    {
        return 'eicon-image-box';
    }

    public function get_categories(): array
    {
        return ['basic'];
    }

    public function get_keywords(): array
    {
        return ['basic', 'widget'];
    }

    protected function render(): void
    {
        $settings = $this->get_settings_for_display();
        // if (empty($settings['widget_title'])) {
        //     return;
        // }


        ?>
        <div class="hele_addon_basic_widget">
            <div class="image_top_title">

                <?php echo $settings['image_top_title'] ?? ''; ?>

            </div>
            <div>

                <?php
                foreach ($settings['gallery'] as $item) {
                    ?>
                    <img class="image_size" src="<?php echo esc_attr($item['url']) ?? ""; ?>" alt="">
                    <?php
                }
                ?>
            </div>
            <h3 class="widget_title"> <?php echo $settings['widget_title'] ?? ''; ?> </h3>
            <div class="widget_desc_color">
                <?php echo $settings['item_description'] ?? ''; ?>
            </div>
        </div>
        <?php
    }

    protected function content_template(): void
    {
        ?>
        <div class="hele_addon_basic_widget">
            <div class="image_top_title">

                {{{ settings.image_top_title }}}
            </div>
            <div class="">

                <# _.each( settings.gallery, function( image ) { #>
                    <img class="image_size" src="{{ image.url }}" alt="">
                    <# }); #>

            </div>
            <h3 class="widget_title">
                {{{ settings.widget_title }}}
            </h3>
            <div class="widget_desc_color">
                {{{ settings.item_description }}}
            </div>
        </div>
        <?php
    }



}

