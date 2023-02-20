<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package cherie
 */

get_header();
?>

<div class="art-404-page art-default-page-custom-wrapper">
    <div class="container">
        <div class="art-404-data">
            <h1 class="art-404-title art-h2"><?php esc_html_e('Oops! Page Not Found', 'cherie'); ?></h1>
            <p><?php esc_html_e('The page you are looking for doesn\'t exist. It may have been moved or removed altogether.', 'cherie'); ?></p>
        </div>
    </div>
</div>

<?php get_footer(); ?>

