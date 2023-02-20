<?php
 get_header();?>

    <?php
    $cherie_page_story = 'story';

    if(function_exists('is_cart') && function_exists('is_checkout')) {
        if( is_cart() || is_checkout() ) { $cherie_page_story = 'art-woocommerce-page'; }
    }

    if(function_exists('is_account_page') && is_account_page()) {
        $cherie_page_story .= ' art-my-account-page';
    }
    ?>

    <div class="art-content-wrapper art-page art-default-page-custom-wrapper">
        <div class="container art-page-content <?php echo esc_attr($cherie_page_story); ?>">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <h1 class="art-h2 art-page-title"><?php the_title(); ?></h1>
                    <?php the_content(); ?>
                <div class="art-clearfix"></div>
            <?php endwhile; else: ?>
                <div class="art-no-other-posts art-body-three-font">
                    <?php esc_html_e( 'Nothing was found', 'cherie' ); ?>
                </div>
            <?php endif; ?>
        </div>

        <?php wp_link_pages(array(
            'before' => '<div class="art-post-pagination"><p class="art-post-pages-wrapper">' . esc_html__('Post Pages:', 'cherie') . '</p>',
            'after'	=> '</div>',
            'link_before' => '<span>',
            'link_after' => '</span>'
        )); ?>

        <div class="container">
            <div class="row art-single-post-comments">
                <div class="offset-md-2 col-12 col-md-8">
                    <?php if ( comments_open() || get_comments_number() ) : ?>
                        <?php comments_template(); ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>

    </div>

<?php get_footer(); ?>