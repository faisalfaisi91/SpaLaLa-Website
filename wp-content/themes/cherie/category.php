<?php get_header(); ?>

<?php

switch (cherie_get_theme_mod('blog_archive_type')) {
    case 'blog_default':
        get_template_part( 'template-parts/blog-archive/default-category' );
        break;
    case 'blog_sticky':
        get_template_part( 'template-parts/blog-archive/sticky-category' );
        break;
    case 'blog_typical':
        get_template_part( 'template-parts/blog-archive/typical-category' );
        break;
}

?>

<?php get_footer(); ?>