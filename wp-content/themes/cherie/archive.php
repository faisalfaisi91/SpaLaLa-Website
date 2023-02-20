<?php get_header(); ?>

<?php

if( cherie_get_theme_mod('blog_archive_type') == 'blog_typical' ) {
    get_template_part( 'template-parts/blog-archive/wp-archive/typical' );
} else {
    get_template_part( 'template-parts/blog-archive/wp-archive/default' );
}

?>

<?php get_footer(); ?>