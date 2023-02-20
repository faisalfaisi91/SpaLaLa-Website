<?php

if (!class_exists('CHERIE_Admin')):
    class CHERIE_Admin
    {
        /**
         * The single class instance.
         *
         * @since  1.0.0
         * @access private
         *
         * @var object
         */
        private static $_instance = null;

        /**
         * Main Instance
         * Ensures only one instance of this class exists in memory at any one time.
         *
         */
        public static function instance()
        {
            if (is_null(self::$_instance)) {
                self::$_instance = new self();
                self::$_instance->init_globals();
                self::$_instance->init_includes();
                self::$_instance->init_actions();
            }
            return self::$_instance;
        }

        private function __construct()
        {
            /* We do nothing here! */
            $this->admin_path = get_template_directory() . '/admin';

            // get theme data
            $theme_data = wp_get_theme();
            $theme_parent = $theme_data->parent();
            if (!empty($theme_parent)) {
                $theme_data = $theme_parent;
            }

            $this->theme_slug = $theme_data->get_stylesheet();
            $this->theme_name = $theme_data['Name'];
            $this->theme_version = $theme_data['Version'];
            $this->theme_uri = $theme_data->get('ThemeURI');
            $this->theme_is_child = !empty($theme_parent);
        }

        /**
         * Init Global variables
         */
        private function init_globals()
        {
            $extra_headers = get_file_data(get_template_directory() . '/style.css', array(
                'Theme ID' => 'Theme ID'
            ), 'fL_theme');
            $this->theme_id = $extra_headers['Theme ID'];
        }

        /**
         * Init Included Files
         */
        private function init_includes()
        {
            require $this->admin_path . '/option/options-setting.php';
            require $this->admin_path . '/option/kirki-options.php';
            require $this->admin_path . '/option/acf-metaboxes.php';
        }

        /**
         * Setup the hooks, actions and filters.
         */
        private function init_actions()
        {
            add_action('wp_enqueue_scripts', [$this, 'cherie_enqueue_scripts']);
            add_action('wp_enqueue_scripts', [$this, 'cherie_enqueue_styles']);


            if (is_admin()) {
                add_action('admin_print_styles', array($this, 'admin_print_styles'));
            }
        }

        /**
         * Print Styles
         */
        public function admin_print_styles()
        {
            wp_enqueue_media();
            wp_enqueue_style('fontawesome', get_template_directory_uri() . '/assets/css/libs/font-awesome.css', array(), '4.7');
            wp_enqueue_style('cherie-theme-admin-style', get_template_directory_uri() . '/admin/assets/css/style.css', array(), '1.0');
            if (class_exists('Kirki')) {
                wp_enqueue_style('cherie-customize-icon-admin-style', get_template_directory_uri() . '/admin/assets/css/customize-icon-style.css', array(), '1.0');
            }
            wp_enqueue_script('cherie-admin-script', get_template_directory_uri() . '/admin/assets/js/admin-scripts.js', '', '', true);
            //Icon Picker
            wp_enqueue_script('fonticonpicker', get_template_directory_uri() . '/admin/assets/js/libs/fonticonpicker.js', '', '', true);
            wp_enqueue_style('icon-piker', get_template_directory_uri() . '/admin/assets/css/libs/icon-piker.css', array(), '1.0');
        }

        public function cherie_save_google_fonts_url()
        {
            $fonts_url = '';
            $fonts = array();
            $subsets = 'latin-ext';
            $fonts[] = 'Hind:300,400,500,600,700';
            if ($fonts) {
                $fonts_url = add_query_arg(array(
                    'family' => urlencode(implode('|', $fonts)),
                    'subset' => urlencode($subsets),
                ), '//fonts.googleapis.com/css');
            }
            return $fonts_url;
        }

        public function cherie_enqueue_styles()
        {

            //CSS Libs
            wp_enqueue_style('fontawesome', CHERIE_THEME_URL . '/assets/css/libs/font-awesome.css', array(), '4.7');

            wp_enqueue_style('fresco-style', CHERIE_THEME_URL . '/assets/css/libs/fresco/fresco.css', [], '2.3.0');
            wp_enqueue_style('bootstrap', CHERIE_THEME_URL . '/assets/css/libs/bootstrap.css', [], '4.0');
            wp_enqueue_style('slick', CHERIE_THEME_URL . '/assets/css/libs/slick-slider.css', [], '4.0');
            wp_enqueue_style('cherie-set-icon', CHERIE_THEME_URL . '/assets/css/fontello/css/cherie-font-embedded.css', [], '1.0');
            wp_enqueue_style('animate', CHERIE_THEME_URL . '/assets/js/vendors-libs/animate/animate.css', [], '1.0');


            if (!in_array('kirki/kirki.php', apply_filters('active_plugins', get_option('active_plugins')))) {
                wp_enqueue_style('cherie-default-fonts', 'https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
                wp_enqueue_style('cherie-default-fonts-two', 'https://fonts.googleapis.com/css2?family=EB+Garamond:ital,wght@0,400;0,500;0,600;0,700;0,800;1,400;1,500;1,600;1,700;1,800&display=swap');
                wp_enqueue_style('cherie-default-fonts-style', CHERIE_THEME_URL . '/assets/css/default-fonts.css', [], '1.0');
            }

            // General css
            wp_enqueue_style('cherie-general', CHERIE_THEME_URL . '/assets/css/general.css', [], '1.0');
        }


        public function cherie_elementor_preview()
        {
            wp_enqueue_style('cherie-elementor-preview', CHERIE_THEME_URL . '/assets/css/preview-elementor.css', [], '1.0.0');
        }

        public function cherie_enqueue_scripts()
        {

            $api_key = cherie_get_theme_mod('google_api_key');

            if (is_singular() && comments_open() && get_option('thread_comments')) {
                wp_enqueue_script('comment-reply');
            }

            wp_enqueue_script('imagesloaded');
            wp_enqueue_script('jquery-ui-widget');


            // Plugin Custom Js
            wp_enqueue_script('slick', CHERIE_THEME_URL . '/assets/js/vendors-libs/slick.min.js', ['jquery'], '1.8.1', true);
            wp_enqueue_script('tween-max', CHERIE_THEME_URL . '/assets/js/vendors-libs/TweenMax.js', ['jquery'], '2.0.2', true);

            wp_enqueue_script('resize-sensor', CHERIE_THEME_URL . '/assets/js/vendors-libs/theia-sticky-sidebar/ResizeSensor.min.js', ['jquery'], '1.8.0', true);
            wp_enqueue_script('theia-sticky-sidebar', CHERIE_THEME_URL . '/assets/js/vendors-libs/theia-sticky-sidebar/theia-sticky-sidebar.min.js', ['jquery', 'resize-sensor'], '1.8.0', true);

            wp_enqueue_script('jarallax', CHERIE_THEME_URL . '/assets/js/vendors-libs/jarallax.min.js', ['jquery'], '1.12.5', true);

            wp_enqueue_script('mega-menu-start', CHERIE_THEME_URL . '/assets/js/vendors-libs/mega-menu/mega-menu-start.js', ['jquery'], '1.10.6', true);
            wp_enqueue_script('mega-menu', CHERIE_THEME_URL . '/assets/js/vendors-libs/mega-menu.js', ['jquery'], '1.10.6', true);

            // Preloader

            // Theme Js Custom File
            $cherie_header_height = 60;
            switch (cherie_get_theme_mod('header_type')) {
                case 'first':
                    $cherie_header_height = 60;
                    break;
                case 'second':
                    $cherie_header_height = 109;
                    break;
            }
            wp_enqueue_script('jquery-cookie', CHERIE_THEME_URL . '/assets/js/jquery.cookie.min.js', ['jquery'], '1.4.1', true);

            wp_enqueue_script('cherie-custom-scripts', CHERIE_THEME_URL . '/assets/js/scripts.js', ['jquery', 'jquery-cookie'], '1.0', true);
            wp_localize_script('cherie-custom-scripts', 'cherieSettings', [
                'headerHeight' => $cherie_header_height,
            ]);


            // Google Api Key
            if ($api_key != '') {
                // Google Maps
                wp_register_script('gmap3', CHERIE_THEME_URL . '/assets/js/vendors-libs/gmap3.js', ['jquery'], '', true);
                wp_register_script('google-maps-api', '//maps.googleapis.com/maps/api/js?key=' . esc_attr($api_key));
            }
        }

        /**
         * Returns the login form
         */
        public static function cherie_login_form()
        {
            $args = array(
                'redirect' => esc_url(wp_login_url(get_permalink())),
                'form_id' => 'loginform-custom',
                'label_username' => '',
                'label_password' => '',
            );

            if (class_exists('Fl_Login_Form_Widget')) {
                $args = array(
                    'label_log_in' => esc_html__('Sign in', 'cherie'),
                    'label_lost_password' => esc_html__('Forgot password', 'cherie') . '?',
                );

                $cherie_login_widget = new Fl_Login_Form_Widget();

                $cherie_login_widget->wp_login_form($args);
            } else {
                wp_login_form($args);
            }

        }

    }
endif;
if (!function_exists('cherie_admin')) :
    function cherie_admin()
    {
        return CHERIE_Admin::instance();
    }
endif;

CHERIE_admin();

function cherie_google_map_url()
{
    $map_key = cherie_get_theme_mod('google_api_key');
    $map_url = '//maps.googleapis.com/maps/api/js?key=' . $map_key . '&callback=initMap';
    return esc_url_raw($map_url);
}
