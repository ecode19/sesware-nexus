<?php

namespace App\Http\Controllers;


use App\Services\SEO\AboutSeo;
use App\Services\SEO\ContactSeo;
use App\Services\SEO\IndexSeo;
use App\Services\SEO\ServicesSeo;
use App\Services\SEO\WorksSeo;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        IndexSeo::apply();
        return view('index');
    }

    public function about()
    {
        AboutSeo::apply();
        return view('pages.about');
    }

    public function works()
    {
        WorksSeo::apply();
        return view('pages.works');
    }

    public function contact()
    {
        ContactSeo::apply();
        return view('pages.contact');
    }

    public function service()
    {
        ServicesSeo::apply();
        return view('pages.service');
    }
}
