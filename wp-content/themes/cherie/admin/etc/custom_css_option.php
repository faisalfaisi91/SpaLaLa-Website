<?php
//Custom Styles Option
function cherie_custom_style() {
    $custom_css =$theme_border_bg_gradient_start=$theme_border_bg_gradient_end= '';
    // Custom CSS

	// First Color Setting css
        $first_color = cherie_get_theme_mod('first_color_setting');

            $custom_css .='.art-first-hv-cl:hover{color:'.$first_color.';}';
            $custom_css .='
                .art-first-bg,
                .art-map-contacts .art-contact-menu-two-tabs li.art-active,
                .art-contact-widget-tabs .art-contact-menu-two-tabs li.art-active,
                .art-post-cat .art-post-cat-itself::before,
                 input[type="radio"]:checked:hover::before
                {background-color:'.$first_color.';}
             ';

			$custom_css .='
			    .woocommerce-checkout #payment div.payment_box,
			    .woocommerce button.button.art-button-link-line,
			    .select2-container--default .select2-selection--single .select2-selection__rendered,
				body, a:hover, .art-first-cl, .art-body-font, .woocommerce ul.products li.product .price,
				.woocommerce div.product p.price 
				{ color :'. $first_color .';}
				
				.art_service_menu .art-service-menu-tabs li.art-active span ,
				.art-mention .art-mention-content .art-mention-info .art-mention-item .art-widget-button a,
				.art-follow-subscribe-widget .art-subscribe-side,
				.art-map-contacts .art-service-menu-two-tabs li
				.art-contact-widget-tabs .art-service-menu-two-tabs li
				{ border-color:'. $first_color .';}
			';


	// First BG Color Setting css
	$second_color = cherie_get_theme_mod('second_color_setting');

        $custom_css .='
                .art-second-cl
                { color :'. $second_color .';}
            ';

        $custom_css .='
                .art-second-bg,
                input[type="radio"]:checked::after,
                input[type="radio"]:hover::before,
                .zoom-anim-dialog.art-default-popap-two
                {background-color:'.$second_color.';}
             ';

			// Buttons Color Setting css
			$custom_css .='
			    .woocommerce button.button,
			    .woocommerce .button.wc-backward,
			    .woocommerce #payment #place_order, .woocommerce-page #payment #place_order,
			    .woocommerce #respond input#submit,
			    .woocommerce div.product form.cart .button,
				.art-button-dark { 
					color :'. cherie_get_theme_mod('dark_button_text_setting') .'; 
					background-color:'. cherie_get_theme_mod('dark_button_bg_setting') .';
				}
				.woocommerce button.button:hover,
				.woocommerce .button.wc-backward:hover,
				.woocommerce #payment #place_order, .woocommerce-page #payment #place_order:hover,
				.woocommerce #respond input#submit:hover,
				.art-button-dark:hover {
					color :'. cherie_get_theme_mod('dark_button_text_hover_setting') .';
					background-color:'. cherie_get_theme_mod('dark_button_bg_setting') .';
				}
			';

			$custom_css .='
                #pwgc-redeem-button,
				.art-woo-checkout-page .art-checkout-right .woocommerce-checkout-review-order #payment .form-row.place-order #pwgc-redeem-gift-card-form #pwgc-redeem-form #pwgc-redeem-button,
				.art-button-light { 
					color :'. cherie_get_theme_mod('light_button_text_setting') .'; 
					border-color:'. cherie_get_theme_mod('light_button_border_setting') .';
				}
				#pwgc-redeem-button:hover,
				.art-woo-checkout-page .art-checkout-right .woocommerce-checkout-review-order #payment .form-row.place-order #pwgc-redeem-gift-card-form #pwgc-redeem-form #pwgc-redeem-button:hover,
				.art-button-light:hover {
					color :'. cherie_get_theme_mod('light_button_text_hover_setting') .';
					border-color:'. cherie_get_theme_mod('light_button_bg_hover_setting') .';
					background-color:'. cherie_get_theme_mod('light_button_bg_hover_setting') .';
				}
				
				.art-button-two-light {
					color :'. cherie_get_theme_mod('light_button_two_text_setting') .'; 
					background-color:'. cherie_get_theme_mod('light_button_two_background_setting') .'; 
				}
				
				.art-button-three-light { 
					color :'. cherie_get_theme_mod('light_button_three_text_setting') .'; 
					border-color:'. cherie_get_theme_mod('light_button_three_border_setting') .';
				}
				.art-button-three-light:hover {
					color :'. cherie_get_theme_mod('light_button_three_text_hover_setting') .';
					border-color:'. cherie_get_theme_mod('light_button_three_bg_hover_setting') .';
					background-color:'. cherie_get_theme_mod('light_button_three_bg_hover_setting') .';
				}

			';

            wp_add_inline_style( 'cherie-general', $custom_css );
}
add_action( 'wp_enqueue_scripts', 'cherie_custom_style',15);