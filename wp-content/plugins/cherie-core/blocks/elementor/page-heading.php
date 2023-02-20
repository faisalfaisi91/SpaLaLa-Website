<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly


class Widget_Woo_starshop_page_heading extends Widget_Base {

    public function get_name() {
        return 'page-heading';
    }

    public function get_title() {
        return esc_html__( 'Page Heading', 'mola_core' );
    }

    public function get_icon() {
        return 'fa fa-header';
    }

    public function get_keywords() {
        return [ 'woocommerce', 'shop', 'store', 'product', 'archive' ];
    }

    public function get_categories() {
        return [
            'art-shop-elements',
        ];
    }



    protected function register_controls() {



    }

    protected function render( $instance = [] ) {

        ?>
       
       <div class="art-page-heading">

            <div class="art-page-heading-info container">
                <h1 class="art-entry-title"><?php the_title(); ?></h1>
                <?php echo art_build_breadcrumbs(); ?>
            </div>

        </div>

        <?php
    }

    public function render_plain_content() {}
}
Plugin::instance()->widgets_manager->register( new Widget_Woo_starshop_page_heading );
?>
