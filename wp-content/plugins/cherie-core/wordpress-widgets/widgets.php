<?php

/**
 * Register Theme Widgets
 */
function cherie_init_widgets() {
	register_widget('Cherie_Subscribe_Form');
	register_widget('Cherie_Soclial');
	register_widget('Cherie_Request_Form');
}

add_action('widgets_init', 'cherie_init_widgets');