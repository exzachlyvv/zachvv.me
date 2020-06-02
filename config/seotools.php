<?php
/**
 * @see https://github.com/artesaos/seotools
 */

return [
    'meta' => [
        /*
         * The default configurations to be used by the meta generator.
         */
        'defaults'       => [
            'title'        => "Zach Vander Velden", // set false to total remove
            'titleBefore'  => false, // Put defaults.title before page title, like 'It's Over 9000! - Dashboard'
            'description'  => 'Full stack developer. Laravel, SQL, PHP, iOS, AWS. Lead developer behind lum.fm. Always looking for the next fun project.', // set false to total remove
            'separator'    => ' - ',
            'keywords'     => ['Laravel', 'PHP', 'Software', 'developer', 'engineer', 'Amazon Web Services', 'CTO', 'MySQL'],
            'canonical'    => null, // Set null for using Url::current(), set false to total remove
            'robots'       => false, // Set to 'all', 'none' or any combination of index/noindex and follow/nofollow
        ],
        /*
         * Webmaster tags are always added.
         */
        'webmaster_tags' => [
            'google'    => null,
            'bing'      => null,
            'alexa'     => null,
            'pinterest' => null,
            'yandex'    => null,
            'norton'    => null,
        ],

        'add_notranslate_class' => false,
    ],
    'opengraph' => [
        /*
         * The default configurations to be used by the opengraph generator.
         */
        'defaults' => [
            'title'       => "Zach Vander Velden", // set false to total remove
            'description' => 'Full stack developer. Laravel, SQL, PHP, iOS, AWS. Lead developer behind lum.fm. Always looking for the next fun project.', // set false to total remove
            'url'         => null, // Set null for using Url::current(), set false to total remove
            'type'        => 'website',
            'site_name'   => 'zachvv.me',
            'images'      => ['/images/zach_400x400.jpg'],
        ],
    ],
    'twitter' => [
        /*
         * The default values to be used by the twitter cards generator.
         */
        'defaults' => [
            'card'        => 'summary',
            'site'        => '@zach___vv',
        ],
    ],
    'json-ld' => [
        /*
         * The default configurations to be used by the json-ld generator.
         */
        'defaults' => [
            'title'       => "Zach Vander Velden", // set false to total remove
            'description' => 'Full stack developer. Laravel, SQL, PHP, iOS, AWS. Lead developer behind lum.fm. Always looking for the next fun project.', // set false to total remove
            'url'         => null, // Set null for using Url::current(), set false to total remove
            'type'        => 'WebPage',
            'images'      => [],
        ],
    ],
];
