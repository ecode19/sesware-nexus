<?php

namespace App\Services\SEO;

use Artesaos\SEOTools\Facades\SEOTools;

class AboutSeo
{
    public static function apply()
    {
        $title = 'About Us | Sesware Nexus';
        $description = 'Learn about Sesware Nexus — a forward-thinking technology company delivering smart software solutions, innovative web applications, and SEO-driven digital strategies that empower businesses to thrive online.';
        $image = asset('images/logo.png');
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
            ->setSite('@sesware_nexus');

        // JSON-LD
        SEOTools::jsonLd()
            ->setType('Organization')
            ->addValue('name', 'Sesware Nexus')
            ->addValue('url', $url)
            ->addValue('description', $description)
            ->addValue('logo', $image)
            ->addValue('contactPoint', [
                '@type' => 'ContactPoint',
                'telephone' => '+255 622 518 685',
                'email' => 'info@sesware.com',
                'contactType' => 'Customer Service',
            ])
            ->addValue('address', [
                '@type' => 'PostalAddress',
                'streetAddress' => 'P.O. Box 8439',
                'addressLocality' => 'Kilimanjaro',
                'addressCountry' => 'Tanzania',
                'postalCode' => '25102,'
            ]);
    }
}
