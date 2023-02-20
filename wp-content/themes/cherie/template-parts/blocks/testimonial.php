<?php

/**
 * Testimonial Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

$text = cherie_get_theme_mod('text_main');
?>
<div class="test">
    <div class="slider-data container">
        <?php echo cherie_wp_kses($text);?>
    </div>
</div>