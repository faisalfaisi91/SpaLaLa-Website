<?php
/**
 * Thankyou page
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/checkout/thankyou.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.7.0
 */

?>

<div class="art-thank-you-page">

    <?php if( cherie_get_theme_mod( 'thank_you_page_icon') ): ?>
        <img src="<?php echo esc_url(cherie_get_theme_mod( 'thank_you_page_icon')); ?>" alt="<?php esc_attr_e('thank you page icon','cherie'); ?>">
    <?php else: ?>
        <img src="<?php echo CHERIE_THEME_URL . '/assets/css/images/thank-you.svg'; ?>" alt="<?php esc_attr_e('thank you page icon','cherie'); ?>">
    <?php endif; ?>

    <h2 class="art-thank-you-page-title"><?php esc_html_e('Thank You for Your Order', 'cherie'); ?></h2>
    <p class="art-thank-you-page-description"><?php echo esc_html__('You will receive email confirmation shortly at ', 'cherie') . $order->get_billing_email(); ?></p>
    <a href="<?php echo get_post_type_archive_link('product'); ?>" class="art-button art-button-light"><?php esc_html_e('Keep Shopping', 'cherie'); ?></a>
</div>
