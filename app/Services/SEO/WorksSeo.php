<?php

namespace App\Services\SEO;

use Artesaos\SEOTools\Facades\SEOTools;

class WorksSeo
{
    public static function apply()
    {
        $title = 'Our Works | Sesware Nexus';
        $description = 'Explore the portfolio of Sesware Nexus — delivering cutting-edge software solutions, web applications, and creative brand designs that drive real business results across Tanzania.';
        $image = asset('images/sesware-works-banner.jpg');
        $url = url()->current();

        // Meta Tags
        SEOTools::setTitle($title);
        SEOTools::setDescription($description);
        SEOTools::setCanonical($url);
        SEOTools::addImages([$image]);

        // OpenGraph
        SEOTools::opengraph()
            ->setTitle($title)
            ->setDescription($description)
            ->setUrl($url)
            ->setType('website')
            ->addImage($image)
            ->addProperty('site_name', 'Sesware Nexus');

        // Twitter Card
        SEOTools::twitter()
            ->setType('summary_large_image')
            ->setTitle($title)
            ->setDescription($description)
            ->setImage($image)
            ->setSite('@seswarenexus');

        // JSON-LD
        SEOTools::jsonLd()
            ->setType('CollectionPage')
            ->addValue('name', 'Our Works | Sesware Nexus')
            ->addValue('url', $url)
            ->addValue('description', $description)
            ->addValue('image', $image)
            ->addValue('creator', 'Sesware Nexus');
    }
}
