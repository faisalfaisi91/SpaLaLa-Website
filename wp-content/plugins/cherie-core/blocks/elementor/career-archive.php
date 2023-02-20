<?php
namespace Elementor;

if (!defined('ABSPATH')) exit; // Exit if accessed directly


class Widget_Career_Archive extends Widget_Base
{

    public function get_name()
    {
        return 'art-career-archive';
    }

    public function get_title()
    {
        return esc_html__('Career posts', 'mola_core');
    }

    public function get_icon()
    {
        return 'eicon-products';
    }

    public function get_keywords()
    {
        return ['woocommerce', 'shop', 'store', 'product', 'archive'];
    }

    public function get_categories()
    {
        return [
            'art-cherie-elements',
        ];
    }


    public function get_order_posts()
    {
        $order_products = array(
            '' => 'No order',
            'ASC' => 'ASC',
            'DESC ' => 'DESC',
            //'' => ''
        );


        return $order_products;
    }

    protected function register_controls()
    {

        /* START */
        $this->start_controls_section(
            'section_team',
            [
                'label' => __('Posts', 'mola_core'),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'order',
            [
                'label' => esc_html__('Order', 'mola_core'),
                'type' => Controls_Manager::SELECT,
                'options' => $this->get_order_posts(),
                'multiple' => false,
                'description' => '',
            ]
        );

        $this->add_control(
            'posts_count',
            [
                'label' => esc_html__('Number of Posts', 'mola_core'),
                'type' => Controls_Manager::NUMBER,
                'default' => 4,
                'description' => esc_html__('Specify the Number of Posts.', 'mola_core'),
            ]
        );


        $this->end_controls_section();
        /* END */


    }

    protected function render($instance = [])
    {
        $settings = $this->get_settings();
        $posts_count = !empty($settings['posts_count']) ? (int)$settings['posts_count'] : 4;
        $order = $settings['order'];

        ?>

        <div class="art-career-wrapper">

            <div class="art-career-posts row">
                <?php
                global $post;


                $args = [
                    'post_type' => 'career',
                    'numberposts' => $posts_count,
                    'order' => $order,
                    'suppress_filters' => true
                ];
                $posts = get_posts($args);


                foreach ($posts as $post) {
                    setup_postdata($post); ?>

                    <div class="col-md-6">
                        <a href="<?php the_permalink(); ?>" class="career-post-item">
                            <span class="career-post-title art-heading-seven"><?php the_title(); ?></span>
                            <span class="career-post-location art-body-three-font"><?php the_field('location'); ?></span>
                            <i class="icon-cherie-short-arrow-right"></i>
                        </a>
                    </div>

                <?php }
                wp_reset_postdata(); ?>
            </div>
        </div>

    <?php }

    public function render_plain_content()
    {
    }
}

Plugin::instance()->widgets_manager->register(new Widget_Career_Archive);
?>
