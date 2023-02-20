<?php

/**
 * Register Required Plugins
 */
add_action( 'tgmpa_register', 'cherie_register_required_plugins' );
if ( ! function_exists( 'cherie_register_required_plugins' ) ) :
function cherie_register_required_plugins() {



    $str_plugin_url = 'http://support.templines.com/plugins-load/';
    if(function_exists('cherie_theme_code_info')){
        $theme_code = cherie_theme_code_info();
        $get_params = array(
            'edd_action'        => 'plugins_activation',
            'license_key'       => $theme_code['envato_code'],
            'theme'             => $theme_code['theme'],
            'theme_id'          => $theme_code['theme_id'],
            'url'               => home_url()
        );
        $str_get_params = '';
        if(!empty($theme_code['envato_code']) && !empty($theme_code['theme_id']) && !empty($theme_code['theme']) ){
            $str_get_params = '?' . http_build_query($get_params);
        }
        $str_plugin_url .= $str_get_params;
    }

    /**
     * Array of plugin arrays. Required keys are name and slug.
     * If the source is NOT from the .org repo, then source is also required.
     */
    $plugins = array(
        // Kirki
        array(
            'name'                  => 'Kirki Customizer Framework',
            'slug'                  => 'kirki',
            'required'              => true,
        ),

        // Demo Import
        array(
            'name'                  => 'One Click Demo Import',
            'slug'                  => 'one-click-demo-import',
            'required'              => true,
        ),

        array(
            'name'                  => 'Advanced Custom Fields',
            'slug'                  => 'advanced-custom-fields',
            'required'              => true,
        ),

        array(
            'name'                  => 'Cherie Core',
            'slug'                  => 'cherie-core',
            'required'              => true,
            'source'                => 'https://firstsight.design/cherie/demo-install/plugins/cherie-core.zip',
        ),

        array(
            'name'                  => 'Bookme',
            'slug'                  => 'bookme',
            'required'              => false,
            'source'                => 'https://firstsight.design/common/plugins/bookme.zip',
        ),

        array(
            'name'                  => 'Envato Market',
            'slug'                  => 'envato-market',
            'required'              => true,
            'source'                => 'https://firstsight.design/cherie/demo-install/plugins/envato-market.zip',
        ),


        array(
            'name'                  => 'Boxzilla',
            'slug'                  => 'boxzilla',
            'required'              => true,
        ),

        array(
            'name'                  => 'Contact Form 7',
            'slug'                  => 'contact-form-7',
            'required'              => true,
        ),

        array(
            'name'                  => 'Elementor',
            'slug'                  => 'elementor',
            'required'              => true,
        ),

        array(
            'name'                  => 'Mailchimp for Wordpress',
            'slug'                  => 'mailchimp-for-wp',
            'required'              => true,
        ),

        array(
            'name'                  => 'PW WooCommerce Gift Cards',
            'slug'                  => 'pw-woocommerce-gift-cards',
            'required'              => true,
        ),

        array(
            'name'                  => 'Smash Balloon Instagram Feed',
            'slug'                  => 'instagram-feed',
            'required'              => true,
        ),

        array(
            'name'                  => 'SVG Support',
            'slug'                  => 'svg-support',
            'required'              => true,
        ),

        array(
            'name'                  => 'WooCommerce',
            'slug'                  => 'woocommerce',
            'required'              => true,
        ),

    );

    /**
     * Array of configuration settings. Amend each line as needed.
     * If you want the default strings to be available under your own theme domain,
     * leave the strings uncommented.
     * Some of the strings are added into a sprintf, so see the comments at the
     * end of each line for what each argument will be.
     */
    $config = array(
        'id' => 'tgmpa', // Unique ID for hashing notices for multiple instances of TGMPA.
        'default_path' => '', // Default absolute path to pre-packaged plugins.
        'has_notices' => true, // Show admin notices or not.
        'dismissable' => true, // If false, a user cannot dismiss the nag message.
        'dismiss_msg' => '', // If 'dismissable' is false, this message will be output at top of nag.
        'is_automatic' => true, // Automatically activate plugins after installation or not.
        'message' => '', // Message to output right before the plugins table.
    );

    tgmpa( $plugins, $config );
}
endif;


// Visual Composer as theme
add_action( 'vc_before_init', 'cherie_vc_setastheme' );
function cherie_vc_setastheme() {
    vc_set_as_theme();
}

// Revolution Slider as theme
if(function_exists( 'set_revslider_as_theme' )) {
    add_action( 'init', 'cherie_rev_setastheme' );
    function cherie_rev_setastheme() {
        set_revslider_as_theme();
    }
}
