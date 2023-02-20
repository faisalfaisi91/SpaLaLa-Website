<?php
CHERIE_Options::add_section('social_settings', [
	'title'         => esc_attr__('Social Icons', 'cherie'),
	'priority'      => 8,
	'icon'          => 'fa fa-paint-brush'
]);

CHERIE_Options::add_field( [
    'type'        => 'repeater',
    'label'       => esc_html__( 'Repeater Control', 'cherie' ),
    'section'     => 'social_settings',
    'priority'    => 10,
    'row_label' => [
        'type'  => 'text',
        'value' => esc_html__( 'Social item', 'cherie' ),
    ],
    'button_label' => esc_html__('Add new social', 'cherie' ),
    'settings'     => 'my-social-list-setting',
    'fields' => [
        'social_icon_itself' => [
            'type'        => 'select',
            'label'       => esc_html__( 'Social Icon', 'cherie' ),
            'description' => esc_html__( 'Icon', 'cherie' ),
            'default'     => '',
            'choices'     => [
                'fa-500px' => esc_html__( 'fa-500px', 'cherie' ),
                'fa-angellist' => esc_html__( 'fa-angellist', 'cherie' ),
                'fa-behance-square' => esc_html__( 'fa-behance-square', 'cherie' ),
                'fa-black-tie' => esc_html__( 'fa-black-tie', 'cherie' ),
                'fa-buysellads' => esc_html__( 'fa-buysellads', 'cherie' ),
                'fa-cc-jcb' => esc_html__( 'fa-cc-jcb', 'cherie' ),
                'fa-cc-visa' => esc_html__( 'fa-cc-visa', 'cherie' ),
                'fa-connectdevelop' => esc_html__( 'fa-connectdevelop', 'cherie' ),
                'fa-delicious' => esc_html__( 'fa-delicious', 'cherie' ),
                'fa-dropbox' => esc_html__( 'fa-dropbox', 'cherie' ),
                'fa-empire' => esc_html__( 'fa-empire', 'cherie' ),
                'fa-font-awesome' => esc_html__( 'fa-font-awesome', 'cherie' ),
                'fa-facebook-square' => esc_html__( 'fa-facebook-square', 'cherie' ),
                'fa-foursquare' => esc_html__( 'fa-foursquare', 'cherie' ),
                'fa-gg' => esc_html__( 'fa-gg', 'cherie' ),
                'fa-github' => esc_html__( 'fa-github', 'cherie' ),
                'fa-gratipay' => esc_html__( 'fa-gratipay', 'cherie' ),
                'fa-google-plus' => esc_html__( 'fa-google-plus', 'cherie' ),
                'fa-google-wallet' => esc_html__( 'fa-google-wallet', 'cherie' ),
                'fa-houzz' => esc_html__( 'fa-houzz', 'cherie' ),
                'fa-internet-explorer' => esc_html__( 'fa-internet-explorer', 'cherie' ),
                'fa-lastfm' => esc_html__( 'fa-lastfm', 'cherie' ),
                'fa-linkedin-square' => esc_html__( 'fa-linkedin-square', 'cherie' ),
                'fa-meanpath' => esc_html__( 'fa-meanpath', 'cherie' ),
                'fa-modx' => esc_html__( 'fa-modx', 'cherie' ),
                'fa-openid' => esc_html__( 'fa-openid', 'cherie' ),
                'fa-paypal' => esc_html__( 'fa-paypal', 'cherie' ),
                'fa-pinterest' => esc_html__( 'fa-pinterest', 'cherie' ),
                'fa-qq' => esc_html__( 'fa-qq', 'cherie' ),
                'fa-rebel' => esc_html__( 'fa-rebel', 'cherie' ),
                'fa-renren' => esc_html__( 'fa-renren', 'cherie' ),
                'fa-sellsy' => esc_html__( 'fa-sellsy', 'cherie' ),
                'fa-simplybuilt' => esc_html__( 'fa-simplybuilt', 'cherie' ),
                'fa-slideshare' => esc_html__( 'fa-slideshare', 'cherie' ),
                'fa-soundcloud' => esc_html__( 'fa-soundcloud', 'cherie' ),
                'fa-steam' => esc_html__( 'fa-steam', 'cherie' ),
                'fa-superpowers' => esc_html__( 'fa-superpowers', 'cherie' ),
                'fa-trello' => esc_html__( 'fa-trello', 'cherie' ),
                'fa-twitch' => esc_html__( 'fa-twitch', 'cherie' ),
                'fa-vimeo-square' => esc_html__( 'fa-vimeo-square', 'cherie' ),
                'fa-weibo' => esc_html__( 'fa-weibo', 'cherie' ),
                'fa-hacker-news' => esc_html__( 'fa-hacker-news', 'cherie' ),
                'fa-yelp' => esc_html__( 'fa-yelp', 'cherie' ),
                'fa-youtube-square' => esc_html__( 'fa-youtube-square', 'cherie' ),
                'fa-adn' => esc_html__( 'fa-adn', 'cherie' ),
                'fa-apple' => esc_html__( 'fa-apple', 'cherie' ),
                'fa-bitbucket' => esc_html__( 'fa-bitbucket', 'cherie' ),
                'fa-contao' => esc_html__( 'fa-contao', 'cherie' ),
                'fa-deviantart' => esc_html__( 'fa-deviantart', 'cherie' ),
                'fa-drupal' => esc_html__( 'fa-drupal', 'cherie' ),
                'fa-envira' => esc_html__( 'fa-envira', 'cherie' ),
                'fa-facebook' => esc_html__( 'fa-facebook', 'cherie' ),
                'fa-fonticons' => esc_html__( 'fa-fonticons', 'cherie' ),
                'fa-free-code-camp' => esc_html__( 'fa-free-code-camp', 'cherie' ),
                'fa-yoast' => esc_html__( 'fa-yoast', 'cherie' ),
                'fa-yahoo' => esc_html__( 'fa-yahoo', 'cherie' ),
                'fa-xing' => esc_html__( 'fa-xing', 'cherie' ),
                'fa-wordpress' => esc_html__( 'fa-wordpress', 'cherie' ),
                'fa-weixin' => esc_html__( 'fa-weixin', 'cherie' ),
                'fa-vine' => esc_html__( 'fa-vine', 'cherie' ),
                'fa-viadeo' => esc_html__( 'fa-viadeo', 'cherie' ),
                'fa-twitter' => esc_html__( 'fa-twitter', 'cherie' ),
                'fa-tripadvisor' => esc_html__( 'fa-tripadvisor', 'cherie' ),
                'fa-telegram' => esc_html__( 'fa-telegram', 'cherie' ),
                'fa-steam-square' => esc_html__( 'fa-steam-square', 'cherie' ),
                'fa-spotify' => esc_html__( 'fa-spotify', 'cherie' ),
                'fa-snapchat' => esc_html__( 'fa-snapchat', 'cherie' ),
                'fa-skyatlas' => esc_html__( 'fa-skyatlas', 'cherie' ),
                'fa-share-alt' => esc_html__( 'fa-share-alt', 'cherie' ),
                'fa-reddit' => esc_html__( 'fa-reddit', 'cherie' ),
                'fa-quora' => esc_html__( 'fa-quora', 'cherie' ),
                'fa-pinterest-p' => esc_html__( 'fa-pinterest-p', 'cherie' ),
                'fa-pied-piper' => esc_html__( 'fa-pied-piper', 'cherie' ),
                'fa-odnoklassniki' => esc_html__( 'fa-odnoklassniki', 'cherie' ),
                'fa-medium' => esc_html__( 'fa-medium', 'cherie' ),
                'fa-linode' => esc_html__( 'fa-linode', 'cherie' ),
                'fa-lastfm-square' => esc_html__( 'fa-lastfm-square', 'cherie' ),
                'fa-ioxhost' => esc_html__( 'fa-ioxhost', 'cherie' ),
                'fa-google-plus-official' => esc_html__( 'fa-google-plus-official', 'cherie' ),
                'fa-glide' => esc_html__( 'fa-glide', 'cherie' ),
                'fa-github-alt' => esc_html__( 'fa-github-alt', 'cherie' ),
                'fa-gg-circle' => esc_html__( 'fa-gg-circle', 'cherie' ),
                'fa-youtube' => esc_html__( 'fa-youtube', 'cherie' ),
                'fa-y-combinator' => esc_html__( 'fa-y-combinator', 'cherie' ),
                'fa-xing-square' => esc_html__( 'fa-xing-square', 'cherie' ),
                'fa-wpbeginner' => esc_html__( 'fa-wpbeginner', 'cherie' ),
                'fa-whatsapp' => esc_html__( 'fa-whatsapp', 'cherie' ),
                'fa-vk' => esc_html__( 'fa-vk', 'cherie' ),
                'fa-viadeo-square' => esc_html__( 'fa-viadeo-square', 'cherie' ),
                'fa-twitter-square' => esc_html__( 'fa-twitter-square', 'cherie' ),
                'fa-tencent-weibo' => esc_html__( 'fa-tencent-weibo', 'cherie' ),
                'fa-tumblr' => esc_html__( 'fa-tumblr', 'cherie' ),
                'fa-snapchat-ghost' => esc_html__( 'fa-snapchat-ghost', 'cherie' ),
                'fa-skype' => esc_html__( 'fa-skype', 'cherie' ),
                'fa-reddit-alien' => esc_html__( 'fa-reddit-alien', 'cherie' ),
                'fa-pinterest-square' => esc_html__( 'fa-pinterest-square', 'cherie' ),
                'fa-odnoklassniki-square' => esc_html__( 'fa-odnoklassniki-square', 'cherie' ),
                'fa-imdb' => esc_html__( 'fa-imdb', 'cherie' ),
                'fa-grav' => esc_html__( 'fa-grav', 'cherie' ),
                'fa-glide-g' => esc_html__( 'fa-glide-g', 'cherie' ),
                'fa-github-square' => esc_html__( 'fa-github-square', 'cherie' ),
                'fa-git' => esc_html__( 'fa-git', 'cherie' ),
                'fa-etsy' => esc_html__( 'fa-etsy', 'cherie' ),
                'fa-digg' => esc_html__( 'fa-digg', 'cherie' ),
                'fa-codepen' => esc_html__( 'fa-codepen', 'cherie' ),
                'fa-cc-paypal' => esc_html__( 'fa-cc-paypal', 'cherie' ),
                'fa-cc-diners-club' => esc_html__( 'fa-cc-diners-club', 'cherie' ),
                'fa-bitbucket-square' => esc_html__( 'fa-bitbucket-square', 'cherie' ),
                'fa-bandcamp' => esc_html__( 'fa-bandcamp', 'cherie' ),
                'fa-amazon' => esc_html__( 'fa-amazon', 'cherie' ),
                'fa-youtube-play' => esc_html__( 'fa-youtube-play', 'cherie' ),
                'fa-wpexplorer' => esc_html__( 'fa-wpexplorer', 'cherie' ),
                'fa-wikipedia-w' => esc_html__( 'fa-wikipedia-w', 'cherie' ),
                'fa-vimeo' => esc_html__( 'fa-vimeo', 'cherie' ),
                'fa-tumblr-square' => esc_html__( 'fa-tumblr-square', 'cherie' ),
                'fa-themeisle' => esc_html__( 'fa-themeisle', 'cherie' ),
                'fa-stumbleupon-circle' => esc_html__( 'fa-stumbleupon-circle', 'cherie' ),
                'fa-stack-overflow' => esc_html__( 'fa-stack-overflow', 'cherie' ),
                'fa-snapchat-square' => esc_html__( 'fa-snapchat-square', 'cherie' ),
                'fa-slack' => esc_html__( 'fa-slack', 'cherie' ),
                'fa-shirtsinbulk' => esc_html__( 'fa-shirtsinbulk', 'cherie' ),
                'fa-scribd' => esc_html__( 'fa-scribd', 'cherie' ),
                'fa-reddit-square' => esc_html__( 'fa-reddit-square', 'cherie' ),
                'fa-ravelry' => esc_html__( 'fa-ravelry', 'cherie' ),
                'fa-product-hunt' => esc_html__( 'fa-product-hunt', 'cherie' ),
                'fa-pied-piper-pp' => esc_html__( 'fa-pied-piper-pp', 'cherie' ),
                'fa-pagelines' => esc_html__( 'fa-pagelines', 'cherie' ),
                'fa-opencart' => esc_html__( 'fa-opencart', 'cherie' ),
                'fa-mixcloud' => esc_html__( 'fa-mixcloud', 'cherie' ),
                'fa-maxcdn' => esc_html__( 'fa-maxcdn', 'cherie' ),
                'fa-linkedin' => esc_html__( 'fa-linkedin', 'cherie' ),
                'fa-jsfiddle' => esc_html__( 'fa-jsfiddle', 'cherie' ),
                'fa-instagram' => esc_html__( 'fa-instagram', 'cherie' ),
                'fa-google-plus-square' => esc_html__( 'fa-google-plus-square', 'cherie' ),
                'fa-google' => esc_html__( 'fa-google', 'cherie' ),
                'fa-gitlab' => esc_html__( 'fa-gitlab', 'cherie' ),
                'fa-git-square' => esc_html__( 'fa-git-square', 'cherie' ),
                'fa-get-pocket' => esc_html__( 'fa-get-pocket', 'cherie' ),
                'fa-forumbee' => esc_html__( 'fa-forumbee', 'cherie' ),
                'fa-flickr' => esc_html__( 'fa-flickr', 'cherie' ),
                'fa-facebook-official' => esc_html__( 'fa-facebook-official', 'cherie' ),
                'fa-eercast' => esc_html__( 'fa-eercast', 'cherie' ),
                'fa-dribbble' => esc_html__( 'fa-dribbble', 'cherie' ),
                'fa-dashcube' => esc_html__( 'fa-dashcube', 'cherie' ),
                'fa-codiepie' => esc_html__( 'fa-codiepie', 'cherie' ),
                'fa-cc-stripe' => esc_html__( 'fa-cc-stripe', 'cherie' ),
                'fa-btc' => esc_html__( 'fa-btc', 'cherie' ),
                'fa-android' => esc_html__( 'fa-android', 'cherie' ),
                'fa-behance' => esc_html__( 'fa-behance', 'cherie' ),
            ],
        ],
        'link_url'  => [
            'type'        => 'text',
            'label'       => esc_html__( 'Link URL', 'cherie' ),
            'description' => esc_html__( 'This will be the link URL', 'cherie' ),
            'default'     => '',
        ],
    ]
] );