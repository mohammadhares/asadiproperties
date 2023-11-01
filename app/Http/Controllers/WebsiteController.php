<?php

namespace App\Http\Controllers;

use App\Models\Setting;

class WebsiteController extends Controller
{
    protected $siteInfo;

    public function __construct()
    {
        $this->loadSiteInfo();
    }

    protected function loadSiteInfo()
    {
        $data = Setting::first();
        $data['phones'] = json_decode($data['phones'], true);
        $data['emails'] = json_decode($data['emails'], true);
        $data['socialmedias'] = json_decode($data['socialmedias'], true);
        $this->siteInfo = $data;
    }

    public function home()
    {
        return view('index', [
            'siteInfo' => $this->siteInfo,
        ]);
    }

    public function offplane()
    {
        return view('offplane', [
            'siteInfo' => $this->siteInfo,
        ]);
    }

    public function rent()
    {
        return view('rent', [
            'siteInfo' => $this->siteInfo,
        ]);
    }

    public function sale()
    {
        return view('sale', [
            'siteInfo' => $this->siteInfo,
        ]);
    }

    public function blog()
    {
        return view('blog', [
            'siteInfo' => $this->siteInfo,
        ]);
    }

    public function about()
    {
        return view('about', [
            'siteInfo' => $this->siteInfo,
        ]);
    }

    public function contact()
    {
        return view('contact', [
            'siteInfo' => $this->siteInfo,
        ]);
    }
    public function services()
    {
        return view('services', [
            'siteInfo' => $this->siteInfo,
        ]);
    }
    // discover
    public function termsof()
    {
        return view('termsof', [
            'siteInfo' => $this->siteInfo,
        ]);
    }
    public function privaecy()
    {
        return view('privaecy', [
            'siteInfo' => $this->siteInfo,
        ]);
    }
    public function pricing()
    {
        return view('pricing', [
            'siteInfo' => $this->siteInfo,
        ]);
    }
    public function careers()
    {
        return view('careers', [
            'siteInfo' => $this->siteInfo,
        ]);
    }
    public function FAQs()
    {
        return view('FAQs', [
            'siteInfo' => $this->siteInfo,
        ]);
    }
    public function sitemap()
    {
        return view('sitemap', [
            'siteInfo' => $this->siteInfo,
        ]);
    }
}
