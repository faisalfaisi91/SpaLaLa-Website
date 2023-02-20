<?php get_header(); ?>

<?php
if( cherie_get_theme_mod('blog_archive_type') == 'blog_typical' ) {
    get_template_part( 'template-parts/blog-search/typical' );
} else {
    get_template_part( 'template-parts/blog-search/default' );
}
?>

<?php get_footer(); ?>