<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class Widget_Art_My_Map extends Widget_Base {

    public function get_name() {
        return 'art-my-map';
    }

    public function get_title() {
        return __( 'My Map', 'mola_core' );
    }

    public function get_icon() {
        return 'eicon-info-box';
    }

    public function get_categories() {
        return ['art-cherie-elements'];
    }

    protected function register_controls() {


        /* START */
        $this->start_controls_section(
            'section_contact_us',
            [
                'label' => __( 'Heading', 'mola_core' ),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );


        $this->add_control(
            'image',
            [
                'label' => __( 'Choose Image', 'plugin-domain' ),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => Utils::get_placeholder_image_src(),
                ],
            ]
        );

        $this->end_controls_section();
        /* END */



        /* TAB_STYLE */
        $this->start_controls_section(
            'section_style_content',
            [
                'label' => esc_html__( 'Style', 'mola_core' ),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'do_reverse',
            [
                'label' => __( 'Reverse', 'plugin-domain' ),
                'type' => Controls_Manager::SWITCHER,
                'label_on' => __( 'Left', 'your-plugin' ),
                'label_off' => __( 'Right', 'your-plugin' ),
                'return_value' => 'yes',
                'default' => 'yes',
            ]
        );

        $this->add_control(
            'more_options_map_google',
            [
                'label' => __( 'Google map', 'plugin-name' ),
                'type' => Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );

        $this->add_control(
            'google_map_address',
            [
                'label' => __( 'Address', 'plugin-domain' ),
                'type' => Controls_Manager::TEXT,
                'default' => '',
            ]
        );

        $this->add_control(
            'google_map_zoom',
            [
                'label' => esc_html__( 'Zoom', 'plugin-domain' ),
                'type' => Controls_Manager::SLIDER,
                'default' => [
                    'size' => 10,
                ],
                'range' => [
                    'px' => [
                        'min' => 1,
                        'max' => 20,
                    ]
                ],
                'size_units' => [ 'px' ],
            ]
        );


        $this->add_control(
            'more_options_map',
            [
                'label' => __( 'Map options', 'plugin-name' ),
                'type' => Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );

        $this->add_control(
            'access_token',
            [
                'label' => __( 'accessToken', 'plugin-domain' ),
                'type' => Controls_Manager::TEXT,
                'default' => '',
            ]
        );

        $this->add_control(
            'mapbox_style',
            [
                'label' => __( 'Mapbox Style Link', 'plugin-domain' ),
                'type' => Controls_Manager::TEXT,
                'default' => '',
            ]
        );


        $this->end_controls_section();
        /* TAB_STYLE END */


    }

    protected function render( $instance = [] ) {
        $all_settings = $this->get_settings_for_display();
        $google_map_address = null;
        if($all_settings['google_map_address']) {
            $google_map_address = $all_settings['google_map_address'];
        }
        ?>
        <?php if($google_map_address === null): ?>
            <script src='https://api.mapbox.com/mapbox-gl-js/v1.11.1/mapbox-gl.js'></script>
            <link href='https://api.mapbox.com/mapbox-gl-js/v1.11.1/mapbox-gl.css' rel='stylesheet' />
        <?php endif; ?>


        <div class="art-map-image-block-wrapper<?php echo ( 'yes' !== $all_settings['do_reverse'] ) ? ' art-do-reverse' : ''; ?>">

            <div class="art-my-map-left">
                <img src="<?php echo $all_settings['image']['url']; ?>" alt="">
            </div>

            <div class="art-my-map-right">
                <?php if($google_map_address !== null): ?>
                    <?php
                    printf(
                        '<div class="elementor-custom-embed"><iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?q=%1$s&amp;t=m&amp;z=%2$d&amp;output=embed&amp;iwloc=near" title="%3$s" aria-label="%3$s"></iframe></div>',
                        rawurlencode( $google_map_address ),
                        absint( $all_settings['google_map_zoom']['size'] ),
                        esc_attr( $google_map_address )
                    );
                    ?>
                <?php else: ?>
                    <div id='map' class="art-my-map-widget" style='width: 100%;'></div>
                <?php endif; ?>
            </div>

        </div>

        <?php if($google_map_address === null): ?>
            <script>
                mapboxgl.accessToken = '<?php echo $all_settings['access_token'] ?>';
                var map = new mapboxgl.Map({
                    container: 'map',
                    style: '<?php echo $all_settings['mapbox_style'] ?>'
                });

                map.scrollZoom.disable();
                map.addControl(new mapboxgl.NavigationControl());

                map.on('load', function () {
                    map.resize();
                });
            </script>
        <?php endif; ?>

        <?php
    }

    protected function content_template() {}

    public function render_plain_content( $instance = [] ) {}

}
Plugin::instance()->widgets_manager->register( new Widget_Art_My_Map );
?>
