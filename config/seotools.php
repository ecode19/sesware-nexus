<?php

/**
 * SEO Tools configuration for Sesware Nexus
 * @see https://github.com/artesaos/seotools
 */

return [
    'inertia' => env('SEO_TOOLS_INERTIA', false),

    'meta' => [
        'defaults' => [
            'title' => 'Sesware Nexus',
            'titleBefore' => true,
            'description' => 'Sesware Nexus is your hub for smart software solutions — from robust web applications to engaging brand experiences. We deliver cutting-edge technology, modern design, and SEO-optimized digital strategies to help your business thrive online.',
            'separator' => ' | ',
            'keywords' => ['Sesware Nexus', 'web applications', 'software solutions', 'SEO services', 'digital transformation', 'web development', 'branding', 'custom software', 'smart software solutions'],
            'canonical' => true,
            'robots' => 'index, follow',
        ],

        'webmaster_tags' => [
            'google' => null,
            'bing' => null,
            'alexa' => null,
            'pinterest' => null,
            'yandex' => null,
            'norton' => null,
        ],

        'add_notranslate_class' => false,
    ],

    'opengraph' => [
        'defaults' => [
            'title' => 'Sesware Nexus — Smart Software & SEO Solutions',
            'description' => 'Empowering your business with powerful web applications, software development, and SEO-driven digital strategies.',
            'url' => env('APP_URL', 'https://sesware.com'),
            'type' => 'website',
            'site_name' => 'Sesware Nexus',
            'images' => [
                asset('images/sesware-og-image.jpg'),
            ],
        ],
    ],

    'twitter' => [
        'defaults' => [
            'card' => 'summary_large_image',
            'site' => '@sesware_nexus', // Replace with your Twitter/X handle if available
        ],
    ],

    'json-ld' => [
        'defaults' => [
            'title' => 'Sesware Nexus',
            'description' => 'Your hub for smart software solutions — custom web apps, branding, and SEO expertise to grow your digital presence.',
            'url' => env('APP_URL', 'https://sesware.com'),
            'type' => 'Organization',
            'images' => [
                asset('images/sesware-logo.png'),
            ],
        ],
    ],
];
