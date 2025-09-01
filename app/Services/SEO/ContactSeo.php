<?php

namespace App\Services\SEO;

use Artesaos\SEOTools\Facades\SEOTools;

class ContactSeo
{
    public static function apply()
    {
        $title = 'Contact Us | Sesware Nexus';
        $description = 'Get in touch with Sesware Nexus — your partner for smart software development, web applications, mobile solutions, and digital branding in Tanzania.';
        $image = asset('images/KANYASI_66.jpg');
        $url = url()->current();

        // Basic Meta Tags
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
            ->setType('ContactPage')
            ->addValue('name', 'Contact Sesware Nexus')
            ->addValue('url', $url)
            ->addValue('description', $description)
            ->addValue('contactPoint', [
                '@type' => 'ContactPoint',
                'telephone' => '+255 622 518 685',
                'email' => 'info@sesware.com',
                'contactType' => 'Customer Service',
                'areaServed' => 'Tanzania',
                'availableLanguage' => ['English', 'Swahili']
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
