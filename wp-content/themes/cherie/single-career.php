<?php get_header(); ?>

    <div class="art-career-single-wrapper art-load-more-pagination">

        <article <?php post_class(); ?> >

            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                <div class="art-single-career-top art-second-bg">
                    <div class="art-single-post-left">
                        <div class="art-blog-top-image"
                             style="background-image:url(<?php echo get_the_post_thumbnail_url($post->ID, 'cherie_post_single'); ?>)"></div>
                    </div>
                    <div class="art-single-post-right">
                        <div class="art-single-post-right-data">
                            <div class="art-career-location art-body-three-font">
                                <span><?php (function_exists('the_field')) ? the_field('location') : ''; ?></span>
                            </div>
                            <h1 class="art-post-title art-h2"><?php the_title(); ?></h1>

                            <?php if(function_exists('the_field') && function_exists('get_field')): ?>
                                <?php if (get_field('apply_now')): ?>
                                    <div class="art-widget-button">
                                        <a href="#art-popap-courses-career"
                                           class="art-button art-button-light open-team-popup-link"><?php the_field('apply_now') ?></a>
                                    </div>
                                <?php endif; ?>
                            <?php endif; ?>
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
                            'after' => '</div>',
                            'link_before' => '<span>',
                            'link_after' => '</span>'
                        )); ?>

                        <div class="art-career-button">
                            <a href="#art-popap-courses-career"
                               class="art-button art-button-dark open-team-popup-link"><?php esc_html_e('apply now', 'cherie') ?></a>
                        </div>

                        <?php if (in_array('elementor/elementor.php', apply_filters('active_plugins', get_option('active_plugins')))): ?>
                            <div class="art-single-blog-share">
                                <h6><?php esc_html_e('Share', 'cherie') ?></h6>
                                <?php echo cherie_social_sharing_buttons(); ?>
                            </div>
                        <?php endif; ?>
                    </div>

                    <div class="container">
                        <div class="art-single-related-posts">
                            <h2 class="art-related-posts-title art-h5"><?php esc_html_e('You May Find Interesting', 'cherie') ?></h2>
                            <div class="art-career-posts row">

                                <?php $cherie_related_posts = cherie_get_related_career_posts($post->ID, 2); ?>

                                <?php if ($cherie_related_posts->have_posts()) : while ($cherie_related_posts->have_posts()) : $cherie_related_posts->the_post(); ?>

                                    <div class="col-md-6">
                                        <a href="<?php the_permalink(); ?>" class="career-post-item">
                                            <span class="career-post-title art-heading-seven"><?php the_title(); ?></span>

                                            <?php if (function_exists('the_field')): ?>
                                                <span class="career-post-location art-body-three-font"><?php the_field('location'); ?></span>
                                            <?php endif; ?>

                                            <i class="icon-cherie-short-arrow-right"></i>
                                        </a>
                                    </div>

                                <?php endwhile; else: ?>

                                <?php endif;
                                wp_reset_query(); ?>

                            </div>
                        </div>
                    </div>
                </div>

            <?php endwhile; else: ?>

            <?php endif;
            wp_reset_query(); ?>

        </article>

    </div>

    <div id="art-popap-courses-career" class="zoom-anim-dialog art-default-popap-two mfp-hide">
        <h4 class="art-form-title"><?php echo cherie_get_theme_mod('courses_popap_title'); ?></h4>
        <div class="art-form-description"><?php echo cherie_get_theme_mod('courses_popap_description'); ?></div>
        <div class="art-form-wrapper">
            <?php if (function_exists('cherie_do_shortcode')): ?>
                <?php echo cherie_do_shortcode(cherie_get_theme_mod('courses_popap_shortcode')); ?>
            <?php endif; ?>
        </div>
    </div>

<?php get_footer(); ?>