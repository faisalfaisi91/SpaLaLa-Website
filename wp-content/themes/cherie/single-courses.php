<?php get_header(); ?>

    <div class="art-courses-single-wrapper art-load-more-pagination">

        <article <?php post_class(); ?>>

            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                <div class="art-single-courses-top art-second-bg">

                    <div class="art-single-post-left">
                        <div class="art-blog-top-image" style="background-image:url(<?php echo get_the_post_thumbnail_url($post->ID,'cherie_post_single'); ?>)"></div>
                    </div>

                    <div class="art-single-post-right">
                        <div class="art-single-post-right-data">

                            <div class="art-courses-date">
                                <?php if(function_exists('the_field')): ?>
                                    <span><?php the_field('date'); ?></span>
                                <?php endif; ?>
                            </div>

                            <h1 class="art-post-title art-h2"><?php the_title(); ?></h1>

                            <div class="art-courses-description">
                                <?php
                                if( function_exists('the_field') ) {
                                    the_field('description');
                                }
                                ?>
                            </div>

                            <?php if( function_exists('get_field') && get_field('price')): ?>
                                <div class="art-courses-price art-body-three-font">
                                    <?php echo esc_html__('Course Price: ', 'cherie') . get_field('price'); ?>
                                </div>
                            <?php endif; ?>

                            <div class="art-widget-button">
                                <a href="#art-popap-courses" class="art-button art-button-light open-team-popup-link"><?php esc_html_e('Leave request', 'cherie') ?></a>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="art-post-content-wrapper">

                    <div class="container">

                        <div class="row">

                            <div class="story art-post-the-content offset-lg-1 col-12 col-lg-10">
                                <?php the_content(); ?>
                            </div>

                        </div>

                        <?php wp_link_pages(array(
                            'before' => '<div class="art-post-pagination"><p class="art-post-pages-wrapper">' . esc_html__('Post Pages:', 'cherie') . '</p>',
                            'after'	=> '</div>',
                            'link_before' => '<span>',
                            'link_after' => '</span>'
                        )); ?>


                    </div>

                </div>

            <?php endwhile; else: ?>

            <?php endif; wp_reset_query(); ?>

        </article>

        <div class="art-courses-bottom-area">
            <div class="container">
                <?php if ( is_active_sidebar( 'courses-widget-area' ) ) {
                    dynamic_sidebar( 'courses-widget-area' );
                } ?>
            </div>
        </div>

    </div>

    <div id="art-popap-courses" class="zoom-anim-dialog art-default-popap-two mfp-hide">

        <h4 class="art-form-title"><?php echo cherie_get_theme_mod( 'courses_popap_title'); ?></h4>
        <div class="art-form-description"><?php echo cherie_get_theme_mod( 'courses_popap_description'); ?></div>
        <div class="art-form-wrapper">
            <?php if( function_exists('cherie_do_shortcode') ): ?>
                <?php echo cherie_do_shortcode(cherie_get_theme_mod( 'courses_popap_shortcode')); ?>
            <?php endif; ?>
        </div>

    </div>

<?php get_footer(); ?>