<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly


class Widget_Courses_Archive extends Widget_Base {

    public function get_name() {
        return 'art-courses-archive';
    }

    public function get_title() {
        return esc_html__( 'Courses posts', 'mola_core' );
    }

    public function get_icon() {
        return 'eicon-products';
    }

    public function get_keywords() {
        return [ 'woocommerce', 'shop', 'store', 'product', 'archive' ];
    }

    public function get_categories() {
        return [
            'art-cherie-elements',
        ];
    }



    public function get_order_posts() {
        $order_products = array(
            '' => 'No order',
            'ASC' => 'ASC',
            'DESC ' => 'DESC',
            //'' => ''
        );


        return $order_products;
    }

    protected function register_controls() {

        /* START */
        $this->start_controls_section(
            'section_team',
            [
                'label' => __( 'Posts', 'mola_core' ),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'order',
            [
                'label' => esc_html__( 'Order', 'mola_core' ),
                'type' => Controls_Manager::SELECT,
                'options' => $this->get_order_posts(),
                'multiple' => false,
                'description' => '',
            ]
        );

        $this->add_control(
            'posts_count',
            [
                'label'   => esc_html__( 'Number of Posts', 'mola_core' ),
                'type'    => Controls_Manager::NUMBER,
                'default' => 4,
                'description' => esc_html__( 'Specify the Number of Posts.', 'mola_core' ),
            ]
        );


        $this->end_controls_section();
        /* END */


    }

    protected function render( $instance = [] ) {
        $settings = $this->get_settings();
        $posts_count = ! empty( $settings['posts_count'] ) ? (int)$settings['posts_count'] : 4;
        $order = $settings['order'];

        ?>

        <div class="art-course-wrapper">

            <div class="art-course-posts row">
                <?php
                global $post;


                $args  = [
                    'post_type'   => 'courses',
                    'numberposts' => $posts_count,
                    /*'order'       => $order*/
                ];
                $posts = get_posts( $args );



                foreach ( $posts as $post ) { setup_postdata( $post ); ?>

                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                        <div class="course-post-item">
                            <a href="<?php the_permalink(); ?>" class="art-course-item-top"><?php echo get_the_post_thumbnail($post->ID); ?></a>
                            <span class="art-course-item-date"><?php the_field('date'); ?></span>
                            <a href="<?php the_permalink(); ?>" class="art-course-item-title"><h3 class="art-heading-seven"><?php the_title(); ?></h3></a>
                            <span class="art-course-item-price art-body-three-font"><?php the_field('price'); ?></span>
                        </div>
                    </div>

                <?php } wp_reset_postdata(); ?>
            </div>
        </div>

    <?php }

    public function render_plain_content() {}
}
Plugin::instance()->widgets_manager->register( new Widget_Courses_Archive );
?>
