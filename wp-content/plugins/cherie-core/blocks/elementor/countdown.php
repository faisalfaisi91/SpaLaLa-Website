<?php
namespace Elementor;

class FS_Countdown_Widget extends Widget_Base
{
    /* Get name */
    public function get_name()
    {
        return 'art-countdown-widget';
    }

    /* Get title */
    public function get_title()
    {
        return __('Countdown', 'fsd-core');
    }

    /* Get icon */
    public function get_icon()
    {
        return 'eicon-countdown';
    }

    /* Get categories */
    public function get_categories()
    {
        return ['art-cherie-elements'];
    }

    /* Register controls */
    protected function register_controls()
    {
        /* General Options */
        $this->start_controls_section(
            'general_options',
            [
                'label' => esc_html__('General Options', 'fsd-core'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'countdown_time',
            [
                'label' => esc_html__('Countdown Due Date', 'fsd-core'),
                'type' => \Elementor\Controls_Manager::DATE_TIME,
                'default' => date("Y-m-d", strtotime("+ 1 day")),
                'description' => esc_html__('Set the due date and time', 'fsd-core'),
            ]
        );
        $this->end_controls_section();
        /* Meta Options */
        $this->start_controls_section(
            'meta_options',
            [
                'label' => esc_html__('Meta Options', 'fsd-core'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        // UI Control - Days Settings
        $this->add_control(
            'days_settings',
            [
                'label' => __('Days Settings', 'fsd-core'),
                'type' => \Elementor\Controls_Manager::HEADING,
            ]
        );
        // Show days
        $this->add_control(
            'show_days',
            [
                'label' => esc_html__('Show days', 'fsd-core'),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => __('yes', 'fsd-core'),
                'label_off' => __('no', 'fsd-core'),
                'description' => __('If true, will be displayed the days title', 'fsd-core'),
                'default' => 'yes',
                'return_value' => 'yes',
            ]
        );
        // Days title
        $this->add_control(
            'countdown_days_title',
            [
                'label' => esc_html__('Title for days', 'fsd-core'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Days', 'fsd-core'),
                'description' => esc_html__('Set the title of days label', 'fsd-core'),
                'condition' => [
                    'show_days' => ['yes']
                ],
            ]
        );
        // UI Control - Hours Settings
        $this->add_control(
            'hours_settings',
            [
                'label' => __('Hours Settings', 'fsd-core'),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        // Show hours
        $this->add_control(
            'show_hours',
            [
                'label' => esc_html__('Show hours', 'fsd-core'),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => __('yes', 'fsd-core'),
                'label_off' => __('no', 'fsd-core'),
                'description' => __('If true, will be displayed the hours title', 'fsd-core'),
                'default' => 'yes',
                'return_value' => 'yes',
            ]
        );
        // Hours title
        $this->add_control(
            'countdown_hours_title',
            [
                'label' => esc_html__('Title for hours', 'fsd-core'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Hours', 'fsd-core'),
                'description' => esc_html__('Set the title of hours label', 'fsd-core'),
                'condition' => [
                    'show_hours' => ['yes']
                ],
            ]
        );
        // UI Control - Minutes Settings
        $this->add_control(
            'minutes_settings',
            [
                'label' => __('Minutes Settings', 'fsd-core'),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        // Show minutes
        $this->add_control(
            'show_minutes',
            [
                'label' => esc_html__('Show minutes', 'fsd-core'),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => __('yes', 'fsd-core'),
                'label_off' => __('no', 'fsd-core'),
                'description' => __('If true, will be displayed the minutes title', 'fsd-core'),
                'default' => 'yes',
                'return_value' => 'yes',
            ]
        );
        // Minutes title
        $this->add_control(
            'countdown_minutes_title',
            [
                'label' => esc_html__('Title for minutes', 'fsd-core'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Minutes', 'fsd-core'),
                'description' => esc_html__('Set the title of minutes label', 'fsd-core'),
                'condition' => [
                    'show_minutes' => ['yes']
                ],
            ]
        );
        // UI Control - Seconds Settings
        $this->add_control(
            'seconds_settings',
            [
                'label' => __('Seconds Settings', 'fsd-core'),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        // Show seconds
        $this->add_control(
            'show_seconds',
            [
                'label' => esc_html__('Show seconds', 'fsd-core'),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => __('yes', 'fsd-core'),
                'label_off' => __('no', 'fsd-core'),
                'description' => __('If true, will be displayed the seconds title', 'fsd-core'),
                'default' => 'yes',
                'return_value' => 'yes',
            ]
        );
        // Seconds title
        $this->add_control(
            'countdown_seconds_title',
            [
                'label' => esc_html__('Title for seconds', 'fsd-core'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Seconds', 'fsd-core'),
                'description' => esc_html__('Set the title of seconds label', 'fsd-core'),
                'condition' => [
                    'show_seconds' => ['yes']
                ],
            ]
        );
        $this->end_controls_section();
        /* List Styles */
        $this->start_controls_section(
            'list_styles',
            [
                'label' => esc_html__('List Styles', 'fsd-core'),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );
        // List direction
        $this->add_control(
            'list_direction',
            [
                'label' => __('Direction', 'fsd-core'),
                'type' => \Elementor\Controls_Manager::SELECT,
                'default' => 'row',
                'description' => __('Select the direction of countdown list', 'fsd-core'),
                'options' => [
                    'row' => __('Row', 'fsd-core'),
                    'column' => __('Column', 'fsd-core'),
                ],
                'prefix_class' => 'countdown-list-direction-',
                'selectors' => [
                    '{{WRAPPER}} .countdown-list' => 'flex-direction: {{VALUE}}',
                ],
            ]
        );
        // Alignment
        $this->add_responsive_control(
            'list_align',
            [
                'label' => __('Alignment', 'elementor'),
                'type' => \Elementor\Controls_Manager::CHOOSE,
                'options' => [
                    'flex-start' => [
                        'title' => __('Left', 'elementor'),
                        'icon' => 'eicon-text-align-left',
                    ],
                    'center' => [
                        'title' => __('Center', 'elementor'),
                        'icon' => 'eicon-text-align-center',
                    ],
                    'flex-end' => [
                        'title' => __('Right', 'elementor'),
                        'icon' => 'eicon-text-align-right',
                    ],
                    'space-between' => [
                        'title' => __('Right', 'elementor'),
                        'icon' => 'eicon-text-align-justify',
                    ],
                ],
                'default' => 'left',
                'description' => __('Set the list alignment', 'fsd-core'),
                'selectors' => [
                    '{{WRAPPER}}.countdown-list-direction-row .countdown-list' => 'justify-content: {{VALUE}}',
                    '{{WRAPPER}}.countdown-list-direction-column .countdown-list' => 'align-items: {{VALUE}}',
                ],
            ]
        );
        $this->end_controls_section();
        /* Item Styles */
        $this->start_controls_section(
            'item_styles',
            [
                'label' => esc_html__('Item Styles', 'fsd-core'),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );
        // Direction
        $this->add_control(
            'item_direction',
            [
                'label' => __('Direction', 'fsd-core'),
                'type' => \Elementor\Controls_Manager::SELECT,
                'default' => 'row',
                'description' => __('Select the direction of item', 'fsd-core'),
                'options' => [
                    'row' => __('Row', 'fsd-core'),
                    'column' => __('Column', 'fsd-core'),
                ],
                'prefix_class' => 'countdown-item-direction-',
                'selectors' => [
                    '{{WRAPPER}} .inner-wrapper' => 'flex-direction: {{VALUE}}',
                ],
            ]
        );
        // Alignment
        $this->add_responsive_control(
            'item_align',
            [
                'label' => __('Alignment', 'elementor'),
                'type' => \Elementor\Controls_Manager::CHOOSE,
                'options' => [
                    'flex-start' => [
                        'title' => __('Left', 'elementor'),
                        'icon' => 'eicon-text-align-left',
                    ],
                    'center' => [
                        'title' => __('Center', 'elementor'),
                        'icon' => 'eicon-text-align-center',
                    ],
                    'flex-end' => [
                        'title' => __('Right', 'elementor'),
                        'icon' => 'eicon-text-align-right',
                    ],
                ],
                'default' => 'left',
                'description' => __('Set the item alignment', 'fsd-core'),
                'selectors' => [
                    '{{WRAPPER}}.countdown-item-direction-row .inner-label' => 'align-items: {{VALUE}}',
                    '{{WRAPPER}}.countdown-item-direction-column .inner-label' => 'justify-content: {{VALUE}}',
                    '{{WRAPPER}}.countdown-item-direction-row .inner-wrapper' => 'justify-content: center;',
                    '{{WRAPPER}}.countdown-item-direction-column .inner-wrapper' => 'justify-content: center;',
                ],
            ]
        );
        // UI Control - Box Styles
        $this->add_control(
            'item_box_styles',
            [
                'label' => __('Box Styles', 'fsd-core'),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        // Item size
        $this->add_control(
            'item_size',
            [
                'label' => __('Item size', 'fsd-core'),
                'type' => \Elementor\Controls_Manager::SLIDER,
                'description' => __('Set the size of item', 'fsd-core'),
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 200,
                        'step' => 1,
                    ],
                ],
                'default' => [
                    'size' => 75,
                ],
                'selectors' => [
                    '{{WRAPPER}} .countdown-item' => 'width: {{SIZE}}{{UNIT}}; height: {{SIZE}}{{UNIT}}; min-width: {{SIZE}}{{UNIT}}; min-height: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        // Background color
        $this->add_control(
            'item_background_color',
            [
                'label' => __('Background color', 'fsd-core'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .countdown-item' => 'background-color: {{VALUE}}',
                ],
            ]
        );
        // Border
        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'item_border',
                'label' => __('Border', 'fsd-core'),
                'description' => __('Set the border of item', 'fsd-core'),
                'selector' => '{{WRAPPER}} .countdown-item',
            ]
        );
        // Border radius
        $this->add_responsive_control(
            'item_border_radius',
            [
                'label' => __('Border radius', 'elementor'),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'description' => __('Set the border radius of item', 'fsd-core'),
                'size_units' => ['px', '%'],
                'selectors' => [
                    '{{WRAPPER}} .countdown-item' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        // Margin
        $this->add_responsive_control(
            'item_margin',
            [
                'label' => __('Margin', 'elementor'),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', '%'],
                'description' => __('Set the margin of item', 'fsd-core'),
                'selectors' => [
                    '{{WRAPPER}} .countdown-item' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    '{{WRAPPER}} .countdown-list' => 'margin: -{{TOP}}{{UNIT}} -{{RIGHT}}{{UNIT}} -{{BOTTOM}}{{UNIT}} -{{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section();
        /* Title Styles */
        $this->start_controls_section(
            'title_styles',
            [
                'label' => esc_html__('Title Styles', 'fsd-core'),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );
        // Typography
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'digits_typography',
                'label' => __('Digits', 'fsd-core'),
                'selector' => '{{WRAPPER}} .countdown-digits',
            ]
        );
        // Color
        $this->add_control(
            'digits_color',
            [
                'label' => __('Color', 'fsd-core'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .countdown-digits' => 'color: {{VALUE}}',
                ],
            ]
        );
        // Margin
        $this->add_responsive_control(
            'digits_margin',
            [
                'label' => __('Margin', 'elementor'),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', '%'],
                'description' => __('Set the margin of digits', 'fsd-core'),
                'selectors' => [
                    '{{WRAPPER}} .countdown-digits' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        // UI Control - Countdown Label
        $this->add_control(
            'countdown_label_styles',
            [
                'label' => __('Countdown Label', 'fsd-core'),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        // Typography
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'label_typography',
                'label' => __('Label', 'fsd-core'),
                'selector' => '{{WRAPPER}} .countdown-label',
            ]
        );
        // Color
        $this->add_control(
            'label_color',
            [
                'label' => __('Color', 'fsd-core'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .countdown-label' => 'color: {{VALUE}}',
                ],
            ]
        );
        // Margin
        $this->add_responsive_control(
            'label_margin',
            [
                'label' => __('Margin', 'elementor'),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', '%'],
                'description' => __('Set the margin of label', 'fsd-core'),
                'selectors' => [
                    '{{WRAPPER}} .countdown-label' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section();
    }

    /* Render */
    protected function render()
    {
        // get array of values (from controls)
        $settings = $this->get_settings_for_display();
        // get widget id
        $id = $this->get_id();
        // get countdown time
        $get_due_date = esc_attr($settings['countdown_time']);
        // gue date
        $due_date = date("M d Y G:i:s", strtotime($get_due_date)); ?>

        <?php if ($settings['show_days'] === 'yes'
        || $settings['show_hours'] === 'yes'
        || $settings['show_minutes'] === 'yes'
        || $settings['show_seconds'] === 'yes'): ?>

        <!-- Countdown wrapper -->
        <div class="countdown-wrapper">
            <!-- Countdown -->
            <ul id="countdown-<?php echo esc_attr($this->get_id()); ?>" class="countdown-list reset-list art-no-list-style"
                data-date="<?php echo esc_attr($due_date); ?>">
                <?php if ($settings['show_days'] === 'yes'): ?>
                    <!-- List item (Days) -->
                    <li class="countdown-item">
                        <div class="inner-wrapper">
                            <span data-days class="inner-label countdown-digits art-h2">00</span>
                            <?php if (!empty($settings['countdown_days_title'])) : ?>
                                <span class="inner-label countdown-label art-body-two-font">
                                <?php echo esc_attr($settings['countdown_days_title']); ?>
                                </span>
                            <?php endif; ?>
                        </div>
                    </li>
                <?php endif; ?>
                <?php if ($settings['show_hours'] === 'yes'): ?>
                    <!-- List item (Hours) -->
                    <li class="countdown-item">
                        <div class="inner-wrapper">
                            <span data-hours class="inner-label countdown-digits art-h2">00</span>
                            <?php if (!empty($settings['countdown_hours_title'])) : ?>
                                <span class="inner-label countdown-label art-body-two-font">
                                <?php echo esc_attr($settings['countdown_hours_title']); ?>
                                </span>
                            <?php endif; ?>
                        </div>
                    </li>
                <?php endif; ?>
                <?php if ($settings['show_minutes'] === 'yes'): ?>
                    <!-- List item (Minutes) -->
                    <li class="countdown-item">
                        <div class="inner-wrapper">
                            <span data-minutes class="inner-label countdown-digits art-h2">00</span>
                            <?php if (!empty($settings['countdown_minutes_title'])) : ?>
                                <span class="inner-label countdown-label art-body-two-font">
                                    <?php echo esc_attr($settings['countdown_minutes_title']); ?>
                                </span>
                            <?php endif; ?>
                        </div>
                    </li>
                <?php endif; ?>
                <?php if ($settings['show_seconds'] === 'yes'): ?>
                    <!-- List item (Seconds) -->
                    <li class="countdown-item">
                        <div class="inner-wrapper">
                            <span data-seconds class="inner-label countdown-digits art-h2">00</span>
                            <?php if (!empty($settings['countdown_seconds_title'])) : ?>
                                <span class="inner-label countdown-label art-body-two-font">
                                    <?php echo esc_attr($settings['countdown_seconds_title']); ?>
                                </span>
                            <?php endif; ?>
                        </div>
                    </li>
                <?php endif; ?>
            </ul>
        </div>
        <script>
            jQuery(document).ready(function ($) {
                'use strict';
                $("#countdown-<?php echo esc_attr($this->get_id()); ?>").countdown();
            });
        </script>
    <?php endif; ?>
        <?php
    }
}

Plugin::instance()->widgets_manager->register( new FS_Countdown_Widget );
?>
