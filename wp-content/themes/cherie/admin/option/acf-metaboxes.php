<?php
if (function_exists('acf_add_local_field_group')):

	add_action('init', 'cherie_acf_init');
    if (!function_exists( 'cherie_acf_init' )):
        function cherie_acf_init()
        {
			// Single Blog
            get_template_part('admin/option/acf_option/blog/art_blog_single_option');

	        // Page
            get_template_part('admin/option/acf_option/page/art_page_option');

	        // Shop archive
            get_template_part('admin/option/acf_option/page/art_shop_archive_option');

            // Career
            get_template_part('admin/option/acf_option/career/art_career_option');

            // Courses
            get_template_part('admin/option/acf_option/courses/art_courses_option');
        }
    endif;

endif;