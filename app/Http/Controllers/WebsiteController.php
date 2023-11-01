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

}
