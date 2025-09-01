<?php

namespace App\Services\SEO;

use Artesaos\SEOTools\Facades\SEOTools;

class ServicesSeo
{
    public static function apply()
    {
        $title = 'Our Services | Sesware Nexus';
        $description = 'Sesware Nexus provides cutting-edge software development, web & mobile app solutions, and creative graphic design services to help Tanzanian businesses grow, automate processes, and enhance their digital presence.';
        $image = asset('images/KANYASI_34.jpg');
        $url = url()->current();

        // Basic Meta Tags
        SEOTools::setTitle($title);
        SEOTools::setDescription($description);
        SEOTools::addImages([$image]);
        SEOTools::setCanonical($url);

        // OpenGraph
        SEOTools::opengraph()
            ->setTitle($title)
            ->setDescription($description)
            ->setUrl($url)
            ->setType('article')
            ->addImage($image, ['height' => 630, 'width' => 1200])
            ->addProperty('site_name', 'Sesware Nexus')
            ->addProperty('locale', 'en_US');

        // Twitter Card
        SEOTools::twitter()
            ->setType('summary_large_image')
            ->setTitle($title)
            ->setDescription($description)
            ->setImage($image)
            ->setSite('@seswarenexus');

        // JSON-LD
        SEOTools::jsonLd()
            ->setType('Service')
            ->addValue('name', 'Sesware Nexus Software & Design Services')
            ->addValue('alternateName', 'Sesware Services')
            ->addValue('url', $url)
            ->addValue('description', $description)
            ->addValue('serviceType', [
                'Custom Software Development',
                'Web Application Development',
                'Mobile App Development',
                'Graphic Design & Branding',
                'SEO & Digital Strategy'
            ])
            ->addValue('provider', [
                '@type' => 'Organization',
                'name' => 'Sesware Nexus',
                'logo' => [
                    '@type' => 'ImageObject',
                    'url' => $image,
                    'width' => 300,
                    'height' => 60,
                ],
            ]);
    }
}
