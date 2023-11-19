<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Contact;
use App\Models\Project;
use App\Models\Property;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('dashboard.home', [
            'total_property' => Property::count(),
            'total_rent_property' => Property::where('status', 'RENT')->count(),
            'total_sale_property' => Property::where('status', 'SALE')->count(),
            'total_project' => Project::count(),
            'total_rent_project' => Project::where('status', 'RENT')->count(),
            'total_sale_project' => Project::where('status', 'SALE')->count(),
            'total_blog' => Blog::count(),
            'total_contact' => Contact::count(),
            'total_subscriber' => Contact::count(),
            'total_user' => User::count(),
        ]);
    }
}
