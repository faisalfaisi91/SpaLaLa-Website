<?php

class Cherie_Soclial extends WP_Widget {

    public function __construct() {

        /* Widget settings. */
        $args = [
            'classname' => 'art_social',
            'description' => esc_html__('This widget displays your social icons', 'cherie-core')
        ];


        /* Create the widget. */
        parent::__construct( 'art_social_widget', esc_html__('Cherie Social', 'cherie-core'), $args );
    }

    /**
     * Display Widget
     * @param array $args
     * @param array $instance
     */
    public function widget( $args, $instance ) {

        //extract( $instance );
        extract( $args );

        /* Our variables from the widget settings. */
        //$title = apply_filters('widget_title', $instance['title'] );

        /* Before widget (defined by themes). */
        echo cherie_wp_kses($before_widget);

        // Display Widget
        ?>

        <div class="widget art-main-social">

            <div class="art-social-container">
                <?php if (cherie_get_theme_mod( 'my-social-list-setting')): ?>
                    <?php foreach ( cherie_get_theme_mod( 'my-social-list-setting') as $bokeh_social_item ): ?>
                        <a href="<?php echo esc_url( $bokeh_social_item['link_url'] ); ?>"><i class="fa <?php echo esc_attr($bokeh_social_item['social_icon_itself']); ?>" aria-hidden="true"></i></a>
                    <?php endforeach; ?>
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

    }

    /**
     * Update Widget
     * @param array $new_instance
     * @param array $old_instance
     * @return array
     */
    public function update( $new_instance, $old_instance ) {

    }
}