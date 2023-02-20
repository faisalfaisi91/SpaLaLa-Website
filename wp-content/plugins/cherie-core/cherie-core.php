<?php
/**
 * Plugin Name: Cherie Core
 * Text Domain: cherie-core
 * Plugin URI: http://art-themes.com/
 * Description: This Plugin include important functionality for Chair theme
 * Version: 3.9
 * Author: Art-Themes / art-themes.com/
 * Author URI: https://themeforest.net/user/art-themes
 */



if ( ! defined( 'ABSPATH' ) ) exit;

define( 'ART_CORE_PLUGIN', __FILE__ );
define( 'ART_PLUGIN_DIR_URL', plugin_dir_url(ART_CORE_PLUGIN) );
define( 'ART_PLUGIN_DIR_PATH', plugin_dir_path(ART_CORE_PLUGIN) );



load_plugin_textdomain( 'cherie-core', false, dirname( plugin_basename( ART_CORE_PLUGIN ) ) . '/languages/' );

require ART_PLUGIN_DIR_PATH . '/wordpress-widgets/widget-subscribe.php';
require ART_PLUGIN_DIR_PATH . '/wordpress-widgets/widget-social.php';
require ART_PLUGIN_DIR_PATH . '/wordpress-widgets/widget-request.php';
require ART_PLUGIN_DIR_PATH . '/wordpress-widgets/widgets.php';
require ART_PLUGIN_DIR_PATH . '/assets/functions.php';



class ElementorCustomElement {

    private static $instance = null;

    public static function get_instance() {
        if ( ! self::$instance )
            self::$instance = new self;
        return self::$instance;
    }

    public function init(){
        add_action( 'elementor/widgets/widgets_registered', [ $this, 'widgets_registered' ] );

	    add_action( 'elementor/frontend/after_register_scripts', function() {
		    wp_register_script( 'chart-js', plugin_dir_url( __FILE__ ) . 'assets/js/Chart.bundle.min.js', [], '1.0', true );
		    wp_register_script( 'chart-js-label', plugin_dir_url( __FILE__ ) . 'assets/js/Chart.PieceLabel.min.js', ['chart-js'], '1.0', true );
	    } );
    }


    public function widgets_registered() {

        // We check if the Elementor plugin has been installed / activated.
        if(defined('ELEMENTOR_PATH') && class_exists('Elementor\Widget_Base')){


            $di_elemetor_widgets_paths = [
				// Homes
            	'art-countdown-widget'    =>  'blocks/elementor/countdown.php',
            	'hero-header'             =>  'blocks/elementor/hero-header.php',
            	'hero-header-two'         =>  'blocks/elementor/hero-header-two.php',
            	'service-menu'            =>  'blocks/elementor/service-menu.php',
                'woo-products'            =>  'blocks/elementor/woo-products.php',
                'half-slider-left'        =>  'blocks/elementor/half-slider-left.php',
                'half-slider-right'       =>  'blocks/elementor/half-slider-right.php',
                'blog'                    =>  'blocks/elementor/blog.php',
                'dark-button'             =>  'blocks/elementor/dark-button.php',
                'light-button'            =>  'blocks/elementor/light-button.php',
            	'mention'                 =>  'blocks/elementor/mention.php',
            	'follow-subscribe'        =>  'blocks/elementor/follow-subscribe.php',
                'instagram-two'           =>  'blocks/elementor/instagram-two.php',
                'contact-info'            =>  'blocks/elementor/contact-info.php',
                'contact-info-vertical'   =>  'blocks/elementor/contact-info-vertical.php',
                'accordion'               =>  'blocks/elementor/accordion.php',
                'woo-products-slider'     =>  'blocks/elementor/woo-products-slider.php',
                'info-block'              =>  'blocks/elementor/info-block.php',
                'blog-slider'             =>  'blocks/elementor/blog-slider.php',
                'slider-info'             =>  'blocks/elementor/slider-info.php',
                'testimonials'            =>  'blocks/elementor/testimonials.php',
                'service-menu-two'        =>  'blocks/elementor/service-menu-two.php',
                'team-slider'             =>  'blocks/elementor/team-slider.php',
                'contact-info-tabs'       =>  'blocks/elementor/contact-info-tabs.php',

            	// Service Menu
            	'ordinary-page-header'    =>  'blocks/elementor/ordinary-page-header.php',
            	'full-page-services'      =>  'blocks/elementor/full-page-services.php',
                'full-page-services-infinite'   =>  'blocks/elementor/full-page-services-infinite.php',


            	//'test'      =>  'blocks/elementor/test.php',

	            // Our Story
                'team'             =>  'blocks/elementor/team.php',

	            // Frequently Asked Questions
                'accordion-tabs'       =>  'blocks/elementor/accordion-tabs.php',

                // Wedding
                'art-wpcf7'               =>  'blocks/elementor/wpcf7-widget.php',


                // Franchise
                'testimonials-images'               =>  'blocks/elementor/testimonials-images.php',
                'awards'                            =>  'blocks/elementor/awards.php',
                'join-team'                         =>  'blocks/elementor/join-team.php',

                // contacts
                'art-my-map'               =>  'blocks/elementor/my-map.php',
                'art-team-partner'         =>  'blocks/elementor/team-partner.php',
                'art-my-map-contacts'      =>  'blocks/elementor/my-map-contacts.php',
                'art-parallax-image'       =>  'blocks/elementor/parallax-image.php',


                // Career
                'art-career-archive'               =>  'blocks/elementor/career-archive.php',

                // Courses
                'art-courses-archive'               =>  'blocks/elementor/courses-archive.php',



	            /*
                'page-heading'          =>  "blocks/elementor/page-heading.php",
	            */
            ];

            foreach( $di_elemetor_widgets_paths as $widget_path ) :
                $widget_file = $widget_path;
                $template_file = locate_template($widget_file);
                if ( !$template_file || !is_readable( $template_file ) ) {
                    $template_file = plugin_dir_path(__FILE__). $widget_path ;
                }
                if ( $template_file && is_readable( $template_file ) ) {
                    require_once $template_file;
                }
            endforeach;

        }
    }
}



ElementorCustomElement::get_instance()->init();


add_action('wp_enqueue_scripts', function (){

	wp_enqueue_style( 'magnific-style', plugin_dir_url( __FILE__ ) . '/assets/js/magnific-popup/magnific-popup.css', [], '1.1.0' );
	wp_enqueue_script( 'magnific', plugin_dir_url( __FILE__ ) . '/assets/js/magnific-popup/jquery.magnific-popup.min.js', ['jquery'], '1.1.0', true );

	//wp_enqueue_script( 'vanillajs-scrollspy', plugin_dir_url( __FILE__ ) . '/assets/js/vanillajs-scrollspy.min.js', ['jquery'], '1.0', true );

    // Swiper
	wp_enqueue_style( 'swiper-style', plugin_dir_url( __FILE__ ) . '/assets/js/swiper/swiper-bundle.min.css', [], '1.1.0' );
	wp_enqueue_script( 'swiper', plugin_dir_url( __FILE__ ) . '/assets/js/swiper/swiper-bundle.min.js', ['jquery'], '1.0', true );

	wp_enqueue_script( 'countdown', plugin_dir_url( __FILE__ ) . '/assets/js/countdown/countdown.min.js', ['jquery'], '1.0', true );
	wp_enqueue_script( 'cherie-plugin-scripts', plugin_dir_url( __FILE__ ) . '/assets/js/scripts.js', ['jquery', 'magnific', 'swiper'], '1.0', true );
} );

// Add a custom category for panel widgets
add_action( 'elementor/init', function() {
    \Elementor\Plugin::$instance->elements_manager->add_category(
        'art-cherie-elements',
        [
            'title' => esc_html__( 'Cherie elements', 'cherie' )
        ],
        1 // position
    );
} );

