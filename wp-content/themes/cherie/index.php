<?php get_header(); ?>

    <?php
    switch (cherie_get_theme_mod('blog_archive_type')) {
        case 'blog_default':
	        get_template_part( 'template-parts/blog-archive/default' );
            break;
        case 'blog_sticky':
	        get_template_part( 'template-parts/blog-archive/sticky' );
            break;
        case 'blog_typical':
            get_template_part( 'template-parts/blog-archive/typical' );
            break;
    } ?>

<?php get_footer(); ?>