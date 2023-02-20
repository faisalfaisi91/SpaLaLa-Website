<?php
if ( function_exists('register_sidebar') ) {

    function cherie_register_sidebars() {

        register_sidebar([
            'name'              => 'Blog widget area',
            'id'                => 'blog-widget-area',
            'description'       => '',
            'before_widget'     => '<div id="%1$s" class="widget %2$s">',
            'after_widget'      => '</div>',
            'before_title'      => '<h5 class="widget-title">',
            'after_title'       => '</h5>',
        ]);

        register_sidebar([
            'name'              => 'Subscribe widget area',
            'id'                => 'subscribe-widget-area',
            'description'       => 'Appears at the bottom on archive pages',
            'before_widget'     => '<div id="%1$s" class="widget %2$s">',
            'after_widget'      => '</div>',
            'before_title'      => '<h5 class="widget-title">',
            'after_title'       => '</h5>',
        ]);

        register_sidebar([
            'name'              => 'Courses widget area',
            'id'                => 'courses-widget-area',
            'description'       => 'Appears at the bottom on single course pages',
            'before_widget'     => '<div id="%1$s" class="widget %2$s">',
            'after_widget'      => '</div>',
            'before_title'      => '<h5 class="widget-title">',
            'after_title'       => '</h5>',
        ]);

        // Footer Sidebar
        register_sidebar(array(
            'name' => 'Footer Sidebar First Column',
            'id' => 'footer-sidebar-1',
            'description' => 'Appears as the sidebar on footer.',
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget' => '</div>',
            'before_title' => '<h6 class="footer-widget--title">',
            'after_title' => '</h6>',
        ));

        register_sidebar(array(
            'name' => 'Footer Sidebar Second Column',
            'id' => 'footer-sidebar-2',
            'description' => 'Appears as the sidebar on footer.',
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget' => '</div>',
            'before_title' => '<h6 class="footer-widget--title">',
            'after_title' => '</h6>',
        ));

        register_sidebar(array(
            'name' => 'Footer Sidebar Third Column',
            'id' => 'footer-sidebar-3',
            'description' => 'Appears as the sidebar on footer.',
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget' => '</div>',
            'before_title' => '<h6 class="footer-widget--title">',
            'after_title' => '</h6>',
        ));

        register_sidebar(array(
            'name' => 'Footer Sidebar Fourth Column',
            'id' => 'footer-sidebar-4',
            'description' => 'Appears as the sidebar on footer.',
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget' => '</div>',
            'before_title' => '<h6 class="footer-widget--title">',
            'after_title' => '</h6>',
        ));

    }

    add_action('widgets_init', 'cherie_register_sidebars');
}

function cherie_categories_post_count_filter ($variable) {
    $variable = str_replace('(', '<span class="fl-categories-post-count fl-font-style-regular"> ', $variable);
    $variable = str_replace(')', '</span>', $variable);
    return $variable;
}

function cherie_archive_post_count_filter ($variable) {
    $variable = str_replace ('(', '<span class="fl-archive-post-count fl-font-style-regular">', $variable);
    $variable = str_replace (')', '</span>', $variable);
    return $variable;
}

add_filter ('get_archives_link', 'cherie_archive_post_count_filter');
add_filter('wp_list_categories','cherie_categories_post_count_filter');