<?php

class Cherie_Request_Form extends WP_Widget {

    public function __construct() {

        /* Widget settings. */
        $args = [
            'classname' => 'art_request_form',
            'description' => ''
        ];


        /* Create the widget. */
        parent::__construct( 'art_request_widget', esc_html__('Cherie Courses Form', 'cherie-core'), $args );
    }

    /**
     * Display Widget
     * @param array $args
     * @param array $instance
     */
    public function widget( $args, $instance ) {

        extract( $instance );
        extract( $args );

        /* Our variables from the widget settings. */
        $title = apply_filters('widget_title', $instance['title'] );

        /* Before widget (defined by themes). */
        echo cherie_wp_kses($before_widget);

        // Display Widget
        ?>

        <div class="widget art-widget-request-form">


            <div class="art-request-data">
                <?php if( $subtitle ): ?>

                    <div class="art-details-wrapper">

                        <?php if( cherie_get_theme_mod( 'cherie_courses_form_icon') ): ?>
                            <img src="<?php echo esc_url(cherie_get_theme_mod( 'cherie_courses_form_icon')); ?>" alt="Course icon">
                        <?php endif; ?>

                        <?php if($title): ?>
                            <h5><?php echo esc_attr($title) ?></h5>
                        <?php endif; ?>

                        <?php if($subtitle): ?>
                            <p class="art-subscribe-subtitle"><?php echo esc_html($subtitle); ?></p>
                        <?php endif; ?>


                        <div class="art-widget-button">
                            <a href="#art-popap-courses" class="art-button art-button-light open-team-popup-link"><?php esc_html_e('Leave request', 'cherie-core') ?></a>
                        </div>


                    </div>

                    <?php /*if($shortcode): */?><!--
                        <?php /*echo do_shortcode(esc_html($shortcode));*/?>
                    --><?php /*endif; */?>

                <?php endif; ?>
            </div>

        </div>

        <?php
        /* After widget (defined by themes). */
        echo cherie_wp_kses($after_widget);
    }

    /**
     * Widget Settings
     * @param array $instance
     */
    public function form( $instance ) {

        $instance = wp_parse_args( (array) $instance );

        ?>

        <p>
            <label for="<?php echo esc_attr($this->get_field_id( 'title' )); ?>"><?php esc_html_e('Title:', 'cherie-core'); ?></label>
            <input type="text" class="widefat" id="<?php echo esc_attr($this->get_field_id( 'title' )); ?>" name="<?php echo esc_attr($this->get_field_name( 'title' )); ?>" value="<?php if(isset($instance['title'])) { echo esc_attr($instance['title']); } ?>">
        </p>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id( 'subtitle' )); ?>"><?php esc_html_e('Sub title:', 'cherie-core'); ?></label>
            <input type="text" class="widefat" id="<?php echo esc_attr($this->get_field_id( 'subtitle' )); ?>" name="<?php echo esc_attr($this->get_field_name( 'subtitle' )); ?>" value="<?php if(isset($instance['subtitle'])) { echo esc_attr($instance['subtitle']); } ?>">
        </p>


        <?php
    }

    /**
     * Update Widget
     * @param array $new_instance
     * @param array $old_instance
     * @return array
     */
    public function update( $new_instance, $old_instance ) {

        $instance = $old_instance;

        $instance['title'] = strip_tags( $new_instance['title'] );
        $instance['subtitle'] = strip_tags( $new_instance['subtitle'] );

        return $instance;
    }
}