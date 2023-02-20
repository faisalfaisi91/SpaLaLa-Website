<?php
/*
 * Template Name: Elementor page
 */

get_header();?>

    <div class="art-content-wrapper art-page art-page-custom-wrapper">
        <div class="art-page-content story">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <?php the_content(); ?>
            <?php endwhile; else: ?>
                <div class="art-no-other-posts art-body-three-font">
                    <?php esc_html_e( 'Nothing was found', 'cherie' ); ?>
                </div>
            <?php endif; ?>
        </div>
    </div>

<?php get_footer(); ?>