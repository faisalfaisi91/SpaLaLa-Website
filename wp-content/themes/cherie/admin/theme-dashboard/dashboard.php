<?php
/**
 * autlines Plugins Activation
 *
 * @package cherie
 */
require get_template_directory() .'/admin/tgm/class-tgm-plugin-activation.php';


class Cherie_Dashboard{


    public static $instance;
    private       $include_screens_path;
    private       $plugins_required = [];
    private       $plugins          = [];
    private       $tabs_menu        = [];

    const DASHBOARD_DIRECTORY_URI = '/dashboard/';
    const DASHBOARD_DIRECTORY = '/dashboard/';


    public function __construct(){
        $this->dashboard_init_data();
        $this->dashboard_init_menu_action();
        $this->dashboard_activation_init();
        $this->custom_menu_import();
        if (current_user_can('switch_themes')) {
                $this->register_required_plugins();
        }
        $this->include_screens_path = trailingslashit( get_template_directory() ) . 'admin/theme-dashboard/screens/';

        add_action( 'admin_enqueue_scripts', array( $this, 'dashboard_scrips' ) );
        add_action( 'admin_menu', array( $this, 'edit_admin_menus' ), 999 );


        add_filter( 'pt-ocdi/plugin_page_title', array( $this, 'render_page_demos' ), 1 );


        add_filter( 'tgmpa_notice_action_links', array( $this, 'edit_tgmpa_notice_action_links' ) );

        // TGM Plugins
        add_filter( 'tgmpa_admin_menu_args', array( $this, 'edit_menu_title_plugin' ) );
    }

    public function edit_tgmpa_notice_action_links( $action_links ) {
        $current_screen = get_current_screen();

        if ( 'tvk-tgm-plugin-install' == $current_screen->id ) {
            $link_template = '<a id="manage-plugins" class="button-primary" style="margin-top:1em;" href="#tvk-tgm-plugin-install">' . esc_attr__( 'Manage Plugins Below', 'cherie' ) . '</a>';
        } else  {
            $link_template = '<a id="manage-plugins" class="button-primary" style="margin-top:1em;" href="' . esc_url( self_admin_url( 'admin.php?page=tvk-tgm-plugin-install' ) ) . '">' . esc_attr__( 'Manage Plugins', 'cherie' ) . '</a>';
        }

        $action_links = array( 'install' => $link_template, 'dismiss' => $action_links['dismiss'] );

        return $action_links;
    }

    public $plugin_path;
    public $plugin_url;
    public $plugin_name;

    public function dashboard_init_data(){

        $this->plugin_path      = plugin_dir_path(__FILE__);
        $this->plugin_url       = plugin_dir_url(__FILE__);
        $this->dashboard_dir    = (dirname(__FILE__)) . self::DASHBOARD_DIRECTORY;
        $theme_info             = wp_get_theme();
        $theme_parent           = $theme_info->parent();
        if(!empty($theme_parent)) {
            $theme_info         = $theme_parent;
        }

        $this->theme_name       = $theme_info['Name'];
        $this->theme_version    = $theme_info['Version'];
        $this->theme_slug       = $theme_info['Slug'];
        $this->theme_is_child   = !empty($theme_parent);
        $this->theme_slug       = $theme_info->get_stylesheet();

        $this->strings = array(

            ///
            'dashboard_title'                       => esc_html__('%1$s %2$s', 'cherie'),
            'theme_activation_title'                => esc_html__('Theme activation', 'cherie'),
            'theme_activated'                       => esc_html__('Theme activated', 'cherie'),
            'theme_not_activated'                   => esc_html__('Theme not activated', 'cherie'),
            'theme_link_text'                       => esc_html__('Theme Link', 'cherie'),
            'theme_link'                            => esc_url('http://preview.themeforest.net/'),
            'theme_website_text'                    => esc_html__('Website', 'cherie'),
            'theme_website_link'                    => esc_url('https://www.firstsight.design'),
            'theme_doc_text'                        => esc_html__('Online Documentation', 'cherie'),
            'theme_doc_link'                        => esc_url('https://firstsight.design/cherie/docs/'),
            'theme_support_text'                    => esc_html__('Support Center', 'cherie'),
            'theme_support_link'                    => esc_url('https://support.templines.com/'),
            'thx_for_buying'                        => esc_html__('Thank you for purchasing our theme. If you liked the our theme please put 5 stars rating to it.', 'cherie'),
            'footer_thank_you'                      => esc_html__('Thank you for choosing %s!', 'cherie'),
            'widget_more_info_text'                 => esc_html__('More Info', 'cherie'),
            'widget_theme_system_title'             => esc_html__('System Information', 'cherie'),
            'widget_requirements_title'             => esc_html__('Requirements', 'cherie'),
            'widget_requirements_problems'          => esc_html__('Some Problems', 'cherie'),
            'widget_requirements_noproblems'        => esc_html__('No Problems', 'cherie'),


            'plugin_link'                           => esc_url('admin.php?page=tvk-tgm-plugin-install'),


            'remember_code_text'                    => esc_html__('Reminder ! One registration per Website. If registered elsewhere please remove purchased code that registration first.', 'cherie'),
            'code_text'                             => esc_html__('Your code is:', 'cherie'),

            'activation_doc_link'                   => esc_url('http://support.templines.com/knowledge-base/where-can-i-find-my-purchase-code/'),
            'activation_text_left'                  => esc_html__('You can learn how to find your purchase code', 'cherie'),
            'activation_text_right'                 => esc_html__('You  will can later deactivate this code if you use dev site and using again on live version.', 'cherie'),

            'theme_support_title'                   => esc_html__('Theme Support', 'cherie'),
            'support_message'                       => esc_html__('If you did not find the question interest in our documentation, found an error, or if you want to suggest something, you can contact technical support.','cherie'),
            'support_btn_text'                      => esc_html__('Visit Support Center','cherie'),

            'theme_documentation_title'             => esc_html__('Theme Documentation','cherie'),
            'theme_documentation_text'              => esc_html__('If you have any problems, you can look at the online documentation of this topic, if you have not found a question that interests you, visit our support forum and ask us a question that interests you, we will be happy to help you','cherie'),


            'our_info_title'                        => esc_html__('Our Information','cherie'),
            'out_info_text'                         => esc_html__('You can find out more about our works or our team just follow one of the links below.','cherie')
            );


    }

    public function edit_menu_title_plugin( $args ) {
        $count = $this->get_plugins_count();
        if ( $count > 0 ) {
            $args['menu_title'] = __( 'Install Plugins', 'cherie' ) . ' <span class="update-plugins"><span class="update-count">' . $count . '</span></span>';
        }

        return $args;
    }


    public function register_required_plugins() {
        if(is_admin()) {
            require get_template_directory() . '/admin/option/plugins-activation.php';
        }
    }

    public function dashboard_activation_init() {
        if (current_user_can('switch_themes')) {
            include_once(get_template_directory() . '/admin/option/activation.php');
        }
    }

    public function dashboard_admin_init () {
        $this->theme_s = get_locale();
        $this->updater();
    }



    public function dashboard_init_menu_action(){
        add_action( 'admin_menu', array( $this, 'create_admin_menus' ), 9 );
    }

    public function welcome_screen() {
        require_once $this->include_screens_path . 'welcome.php';
    }

    public function system_info_screen() {
        require_once $this->include_screens_path . 'system_info.php';
    }

    public function dashboard_scrips( ) {
        $listPage = [
            'toplevel_page_'.'tvk-theme-dashboard',
            'empelza_page_tvk-system-info',
            'empelza_page_pt-one-click-demo-import',
            'empelza_page_tvk-tgm-plugin-install',
        ];
        if ( in_array( get_current_screen()->base, $listPage ) ) {
            remove_all_actions( 'admin_notices' );
            wp_enqueue_style('cherie-dashboard-css', get_template_directory_uri() . '/admin/theme-dashboard/css/style.css', array(), '1.0');
        }

    }

    public function create_admin_menus() {
        global $pagenow;
        $this->setup_tab_menus();
        add_menu_page(
            esc_html__('General ', 'cherie'),
            $this->theme_name,
            'import',
            'tvk-theme-dashboard',
            array( $this, 'welcome_screen' ),
            'dashicons-dashboard-icon',
            2
        );

        add_submenu_page( 'tvk-theme-dashboard',
            esc_html__('System Info', 'cherie'),
            esc_html__('System Info', 'cherie'),
            'manage_options',
            'tvk-system-info',
            array($this, 'system_info_screen')
        );

        // Redirect to welcome page after activating theme.
        if ( is_admin() && 'themes.php' == $pagenow && isset( $_GET['activated'] ) && $_GET['activated'] == 'true' ) {
            // Redirect
            wp_redirect( admin_url( 'admin.php?page=tvk-theme-dashboard' ) );
        }
    }

    private function setup_tab_menus() {
        $this->tabs_menu['welcome']   = [
            'name' => esc_html__( 'Dashboard', 'cherie' ),
            'path' => 'admin.php?page=tvk-theme-dashboard',
        ];

        $this->tabs_menu['system_info'] = [
            'name' => esc_html__( 'System Info', 'cherie' ),
            'path'  => 'admin.php?page=tvk-system-info',
        ];

        if ( TGM_Plugin_Activation::$instance->is_tgmpa_complete() !== true ) {
            $this->tabs_menu['plugins'] = [
                'name' => __( 'Plugin Install', 'cherie' ),
                'path' => 'admin.php?page=tvk-tgm-plugin-install',
            ];
        }

        if ( class_exists('OCDI_Plugin') ) {
            $this->tabs_menu['demos'] = [
                'name' => esc_html__( 'Demo Install', 'cherie' ),
                'path'  => 'admin.php?page=pt-one-click-demo-import',
            ];
        }

        $this->tabs_menu['customize'] = [
            'name' => esc_html__( 'Customize', 'cherie' ),
            'path'  => 'customize.php',
        ];

    }

    public function edit_admin_menus() {
        global $submenu;

        if ( current_user_can( 'edit_theme_options' ) ) {
            $submenu['tvk-theme-dashboard'][0][0] = esc_attr__( 'Welcome', 'cherie' );
        }
    }


    public function custom_menu_import() {
        if ( ! defined( 'ABSPATH' ) ) {
            exit; // Exit if accessed directly
        }

        if (class_exists('OCDI_Plugin')){
            function cherie_plugin_page_setup( $default_settings ) {
                $default_settings['parent_slug'] = 'tvk-theme-dashboard';
                $default_settings['page_title']  = esc_html__( 'Demo Import' , 'cherie' );
                $default_settings['menu_title']  = esc_html__( 'Demo Install' , 'cherie' );
                $default_settings['capability']  = 'import';
                $default_settings['menu_slug']   = 'pt-one-click-demo-import';

                return $default_settings;
            }
            add_filter( 'pt-ocdi/plugin_page_setup', 'cherie_plugin_page_setup' );
        }


    }



    /**
     * Renders the admin screens header with title, logo and tabs.
     *
     * @since   5.0.0
     *
     * @access  public
     *
     * @param string $screen The current screen.
     *
     * @return void
     */
    public function get_tab_menu( $screen = 'welcome' ) {?>

        <div class="dashboard-header">
            <div class="wrapper-bg"></div>
            <div class="theme-info-link">
                <ul>
                    <li class="theme-doc-li"><a target="_blank" href="<?php echo esc_url($this->strings['theme_doc_link']); ?>"><?php echo esc_html($this->strings['theme_doc_text']); ?></a></li>
                    <li class="theme-doc-li"><a target="_blank" href="<?php echo esc_url($this->strings['theme_website_link']); ?>"><?php echo esc_html($this->strings['theme_website_text']); ?></a></li>
                </ul>

            </div>
                <h2 class="tvk-dashboard-title"><?php printf($this->strings['dashboard_title'], $this->theme_name ,'<span class="tvk-theme-version">V'.$this->theme_version).'</span>'; ?> </h2>
                <div class="dashboard-thx-buying-text"><?php printf($this->strings['thx_for_buying']); ?></div>

            <div class="bottom-info">
                <ul class="tvk-menu-tabs">
                    <?php foreach ($this->tabs_menu as $key => $tab){?>
                        <li class="tvk-nav-item">
                            <a href="<?php echo esc_url_raw( ( $key === $screen ) ? '#' : admin_url( $tab['path'] ) ); ?>"
                               class="<?php echo esc_html(( $key === $screen ) )? 'active' : ''; ?> opal-nav-link"><?php echo esc_html( $tab['name'] ); ?></a>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </div>

        <?php
    }


    public function get_plugins_require_count() {
        return count( $this->plugins_required );
    }


    public function render_page_demos( $content ) {
        ob_start();
        $this->get_tab_menu( 'demos' );
        $content .= ob_get_clean();

        return $content;
    }

    public function get_plugins_count() {
        return count( $this->plugins );
    }


    public static function getInstance() {
        if ( ! isset( self::$instance ) && ! ( self::$instance instanceof Cherie_Dashboard ) ) {
            self::$instance = new Cherie_Dashboard();
        }

        return self::$instance;
    }
}

Cherie_Dashboard::getInstance();