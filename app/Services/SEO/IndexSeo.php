<?php

namespace App\Services\SEO;

use Artesaos\SEOTools\Facades\SEOTools;

class IndexSeo
{
    public static function apply()
    {
        $title = 'Sesware Nexus | Smart Software Solutions & SEO-Driven Growth';
        $description = 'Sesware Nexus delivers cutting-edge web applications, custom software, and digital branding solutions — empowering your business with smart technology and SEO strategies.';
        $keywords = 'Sesware Nexus, software solutions, web applications, custom software, SEO services, digital branding, smart software';
        $image = asset('images/KANYASI_66.jpg');
        $url = url('/');

        // Meta Tags
        SEOTools::setTitle($title);
        SEOTools::setDescription($description);
        SEOTools::metatags()->addMeta('keywords', $keywords);
        SEOTools::setCanonical($url);
        SEOTools::addImages([$image]);

        // OpenGraph
        SEOTools::opengraph()
            ->setTitle($title)
            ->setDescription($description)
            ->setUrl($url)
            ->setType('website')
            ->addImage($image)
            ->addProperty('site_name', 'Sesware Nexus')
            ->addProperty('fb:app_id', 'your_facebook_app_id_here'); // Optional

        // Twitter Card
        SEOTools::twitter()
            ->setType('summary_large_image')
            ->setTitle($title)
            ->setDescription($description)
            ->setImage($image)
            ->setSite('@seswarenexus');

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
