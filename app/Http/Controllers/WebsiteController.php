<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function home() {
        return view('index');
    }
    public function about() {
        return view('about');
    }
    public function blog() {
        return view('blog');
    }
    public function offplane() {
        return view('offplane');
    }
    public function contact() {
        return view('contact');
    }
    public function rent() {
        return view('rent');
    }
    public function sale() {
        return view('sale');
    }
}
